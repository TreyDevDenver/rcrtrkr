var RaceVisualizer = (function () {

	var _teams = [],
		_svg = false,
		_path = false,
		_cars = {},
		_laps = [],
		_track = {}
	;

	var debug = false;

	// container for track information
	var _defaultTrack = {
		// larger is faster. must not be 0. tween duration = laptime / raceSpeed
		"speed": 7.5,
		// image for the svg background
		"image": "/img/cart_track.jpg",
		// dimensions of the image x, y
		"imageDim": [940, 427],
		// tension to use for path connecting the points. Catmull–Rom
		"tension": 0.63,
		// points to map the track map path
		"points": [
			[430, 270],
			[490, 332],
			[531, 331],
			[602, 118],
			[852, 95],
			[852, 39],
			[580, 35],
			[379, 157],
			[235, 197],
			[144, 290],
			[91, 260],
			[113, 99],
			[350, 96],
			[350, 32],
			[80, 39],
			[32, 364],
			[256, 379],
			[356, 271]
		]
	};

	// create list of unique teams
	var _initTeams = function (laps) {
		var teamObj = {};
		for (var i = 0; i < laps.length; i++) {
			if (!teamObj[laps[i].team]) {
				teamObj[laps[i].team] = true;
				_teams.push(laps[i].team);
			}
		}
		delete teamObj;
		_laps = laps;
	}

	var _initTrack = function (track) {
		// add background image to SVG
		_svg = d3.select("body svg")
			.attr("width", track.imageDim[0])
			.attr("height", track.imageDim[1])
		;
		_svg.append("defs")
			.append("pattern")
			.attr("id", "bg")
			.attr('patternUnits', 'userSpaceOnUse')
			.attr("width", track.imageDim[0])
			.attr("height", track.imageDim[1])
			.append("image")
			.attr("xlink:href", track.image)
			.attr("width", track.imageDim[0])
			.attr("height", track.imageDim[1])
		;
		_svg.append("rect")
			.attr("fill", "url(#bg)")
			.attr("width", track.imageDim[0])
			.attr("height", track.imageDim[1])
		;

		// draw track path for cars to follow
		_path = _svg.append("path")
			.data([track.points])
			.attr("d", d3.svg.line()
				.tension(track.tension)
				.interpolate("cardinal-closed")
			)
		;

		_track = track;

		if (debug) {
			// debug click position
			svg.on("click", function() {
				coordinates = d3.mouse(this);
				var x = coordinates[0];
				var y = coordinates[1];
				console.log(x + ", " + y);
			});
			// debug point positions
			svg.selectAll(".point")
				.data(track.points)
				.enter().append("circle")
					.attr("r", 4)
					.attr("transform", function(d) { return "translate(" + d + ")"; })
			;
		}
	}

	var _initCars = function () {
		for (var i = 0; i < _teams.length; i++) {
			_cars[_teams[i]] = _svg.append('g')
				.attr("transform", "translate(" + _track.points[0] + ")")
				.attr("lap", 1)
				.attr("team", _teams[i])
				.attr("teamNum", i)
				.attr("class", "teamColor" + i)
				.attr("id", "car" + i)
			;
			_cars[_teams[i]].append("circle")
				.attr("r", 13)
			;
			_cars[_teams[i]].append("text")
			//	.attr("dx", function(d){return -4})
				.attr("dy", function(d){return 5})
				.attr("color", "black")
				.attr("text-anchor", "middle")
				.text("1")
			;
			$("#raceStats > tbody").append(
				"<tr id=\"team" + i + "\" class=\"teamColor" + i + "\">" +
				"<td class=\"position\">" + (i+1) + "</dh>" +
				"<td class=\"team\">" + _teams[i] + "</dh>" +
				"<td class=\"driver\">" + 0 + "</dh>" +
				"<td class=\"lap\">" + 1 + "</dh>" +
				"<td class=\"time\">" + 0 + "</dh>" +
				"</tr>"
			);
		}
	}

	var _startRace = function () {
		for (var i = 0; i < _teams.length; i++) {
			_transition(_cars[_teams[i]]);
		}
	}

	var _transition = function (car) {
		var lapNum = +car.attr("lap"),
			team = car.attr("team"),
			teamNum = +car.attr("teamNum");

		// get current lap for car
		var currentLap = false;
		for (var i = 0; i < _laps.length; i++) {
			if (_laps[i].team == team && _laps[i].number == lapNum) {
				currentLap = _laps[i];
				break;
			}
		}

		if (!currentLap) {
			console.log('No lap number ' + lapNum + ' for ' + team);
			console.log(team + ' finished the race!');
			return;
		}

		// transition with duration of lap time
		car.transition()
			.ease('linear')
			.duration(currentLap.time / _track.speed)
			.attrTween("transform", _translateAlong(_path.node()))
			.each("end", function () {_transition(car)})
		;

		// check for change
		if (currentLap.change) {
			car.attr('class', car.attr('class') + " changing");
		} else {
			car.attr('class', car.attr('class').replace(" changing", ""));
		}

		// increment cars lap
		car.attr("lap", lapNum + 1);

		// update car lap number
		var lapLabel = d3.select("#" + car.attr("id") + " text");
		lapLabel.text(lapNum);

		// update stats table
		$("#raceStats tr#team" + teamNum + " td.driver").text(currentLap.driver);
		$("#raceStats tr#team" + teamNum + " td.lap").text(currentLap.number);
		$("#raceStats tr#team" + teamNum + " td.time").text(currentLap.time / 1000);

		// update stats table order
		var rankedRows = '';
		var rows = $("#raceStats tbody tr");
		rows.sort(function (obj1, obj2) {
			if (!obj1) {
				return 0;
			}
			return $("td.lap", obj2).text() - $("td.lap", obj1).text();
		});
		rows.each(function (i, row) {
			var rowObj = $(row).clone().wrap('<div></div>').parent();
			$("td.position", rowObj).text(i + 1);
		 	rankedRows = rankedRows + rowObj.html();
		});
		$("#raceStats tbody").html(rankedRows);
	}

	// Returns an attrTween for translating along the specified path element.
	var _translateAlong = function (path) {
		var l = path.getTotalLength();
		return function(d, i, a) {
			return function(t) {
				var p = path.getPointAtLength(t * l);
				return "translate(" + p.x + "," + p.y + ")";
			};
		};
	}

	var init = function (laps, track) {
		if (typeof laps == "undefined" || !laps.length) {
			alert('Missing data!');
		}
		if (typeof track == "undefined") {
			track = _defaultTrack;
		}
		_initTeams(laps);
		_initTrack(track);
		_initCars();
		_startRace();
	};

	var toggleRace = function () {
		alert('todo');
		//@see http://xaedes.de/dev/transitions/
	}

	return {
		init: init,
		toggleRace: toggleRace
	}
})();
var RaceLapgraph = (function () {

	var _teams = [],
		_lapData = {},
		_lapStartTime = {}
	;

	var _initTeams = function (laps) {
		var teamObj = {};
		for (var i = 0; i < laps.length; i++) {
			if (!teamObj[laps[i].team]) {
				teamObj[laps[i].team] = true;
				_teams.push(laps[i].team);
				_lapData[laps[i].team] = {};
				_lapStartTime[laps[i].team] = 0;
			}
		}
		delete teamObj;
		_laps = laps;
	}

	var init = function (laps) {
		_initTeams(laps);

		var color = d3.scale.category10();

		laps.sort(function (obj1, obj2) {
			return obj1.number - obj2.number;
		});
		var allX = [],
			allY = []
		;
		laps.forEach(function (lap) {
			_lapStartTime[lap.team] = _lapStartTime[lap.team] + lap.time;
			_lapData[lap.team][_lapStartTime[lap.team]] = lap.number;
			allX.push(_lapStartTime[lap.team]);
			allY.push(lap.number);
		});

		var margin = {top: 20, right: 20, bottom: 30, left: 50},
			width = 960 - margin.left - margin.right,
			height = 500 - margin.top - margin.bottom
		;

		var x = d3.scale.linear()
			.range([0, width])
			.domain(d3.extent(allX))
		;

		var y = d3.scale.linear()
			.range([height, 0])
			.domain(d3.extent(allY))
		;

		var xAxis = d3.svg.axis()
			.scale(x)
			.orient("bottom")
			.tickFormat(function(d) { return d / 1000; })
		;

		var yAxis = d3.svg.axis()
			.scale(y)
			.orient("left")
		;

		var line = d3.svg.line()
			.interpolate("basis")
			.x(function(d) { return x(d.key); })
			.y(function(d) { return y(d.value); })
		;

		var svg = d3.select("body div.container").append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
				.attr("transform", "translate(" + margin.left + "," + margin.top + ")")
		;

		var entries = d3.entries(_lapData);
		color.domain(entries.map(function (d) {
			return d;
		}));

		var teams = svg.selectAll(".team")
			.data(entries)
			.enter().append("g")
			.attr("class", "team")
		;

		teams.append("path")
			.attr("class", "line")
			.attr("d", function(d) {
				var entry = d3.entries(d.value);
				return line(entry);
			})
      		.style("stroke", function(d) { return color(d.key); })
      	;

      	/* Add 'curtain' rectangle to hide entire graph */
		var curtain = svg.append('rect')
			.attr('x', -1 * width)
			.attr('y', -1 * height)
			.attr('height', height)
			.attr('width', width)
			.attr('class', 'curtain')
			.attr('transform', 'rotate(180)')
			.style('fill', '#ffffff')
		;

		svg.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height + ")")
			.call(xAxis)
			//.tickFormat(d3.format(",.0f"))
			.append("text")
				// .attr("transform", "rotate(-90)")
				.attr("y", -20)
				.attr("x", 100)
				.attr("dy", ".71em")
				.style("text-anchor", "start")
				.text("Time in Seconds")
		;

		svg.append("g")
			.attr("class", "y axis")
			.call(yAxis)
			.append("text")
				.attr("transform", "rotate(-90)")
				.attr("y", 6)
				.attr("x", -400)
				.attr("dy", ".71em")
				.style("text-anchor", "end")
				.text("Laps")
		;

		teams.append("text")
			.datum(function (d) {
				var entry = d3.entries(d.value);
				return {
					name: d.key,
					key: entry[entry.length - 1].key,
					value: entry[entry.length - 1].value,
					color: color(d.key)
				};
			})
			.attr("transform", function(d) { return "translate(" + x(d.key) + "," + y(d.value) + ")"; })
			.attr("x", -width)
			.attr("dy", ".35em")
			.text(function(d) { return d.name + " (" + d.value + ")"; })
			.style("fill", function(d) { return d.color; })
		;

		/* Create a shared transition for anything we're animating */
		var t = svg.transition()
			.delay(750)
			.duration(6000)
			.ease('linear')
		;

		t.select('rect.curtain')
			.attr('width', 0)
		;
	};
	return {
		init: init
	}
})();
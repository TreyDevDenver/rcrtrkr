var RaceScatter = (function () {

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

	var _replaceAll = function (find, replace, str)  {
		return str.replace(new RegExp(find, 'g'), replace);
	}

	var init = function (laps) {
		_initTeams(laps);

		var color = d3.scale.category10();

		laps.sort(function (obj1, obj2) {
			return obj1.number - obj2.number;
		});
		var allX = [0],
			allY = [0]
		;
		laps.forEach(function (lap) {
			_lapStartTime[lap.team] = lap.time;
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
			.domain(d3.extent(allY))
		;

		var y = d3.scale.linear()
			.range([height, 0])
			.domain(d3.extent(allX))
		;

		var xAxis = d3.svg.axis()
			.scale(x)
			.orient("bottom")
		;

		var yAxis = d3.svg.axis()
			.scale(y)
			.orient("left")
			.tickFormat(function(d) { return d / 1000; })
		;

		var svg = d3.select("body div.container").append("svg")
			.attr("width", width + margin.left + margin.right)
			.attr("height", height + margin.top + margin.bottom)
			.append("g")
				.attr("transform", "translate(" + margin.left + "," + margin.top + ")")
		;

		var entries = d3.entries(_lapData);
		color.domain(entries.map(function (d) {
			return d.key;
		}));

		svg.append("g")
			.attr("class", "x axis")
			.attr("transform", "translate(0," + height + ")")
			.call(xAxis)
			//.tickFormat(d3.format(",.0f"))
			.append("text")
				// .attr("transform", "rotate(-90)")
				.attr("y", 5)
				.attr("x", 20)
				.attr("dy", ".71em")
				.style("text-anchor", "start")
				.text("Laps")
		;
		svg.append("g")
			.attr("class", "y axis")
			.call(yAxis)
			.append("text")
				.attr("transform", "rotate(-90)")
				.attr("y", -35)
				.attr("x", -390)
				.attr("dy", ".71em")
				.style("text-anchor", "end")
				.text("Time in Seconds")
		;

		var line = d3.svg.line()
			// .interpolate("basis")
			.x(function(d) { return x(d.value); })
			.y(function(d) { return y(d.key); })
		;
		var teams = svg.selectAll(".team")
			.data(entries).enter().append("g")
				.attr("class", "team")
		;
		teams.append("path")
			.attr("class", "line")
			.attr("visibility", "hidden")
			.attr("id", function (d) {return 'path_' + _replaceAll(" ", "", d.key);})
			.attr("d", function(d) {
				var entry = d3.entries(d.value);
				entry.sort(function (o1, o2) {
					return o1.value - o2.value;
				})
				return line(entry);
			})
			.style("stroke", function(d) { return color(d.key); })
		;
		teams.each(function (o, i) {
			d3.entries(o.value).forEach(function (o2, i2) {
				teams.append("circle")
					//.style("stroke", function(d) { return color(o.key); })
					.attr("r", 3.5)
					.attr("cx", function(d) { return x(o2.value); })
					.attr("cy", function(d) { return y(o2.key); })
					.style("fill", function(d) { return color(o.key); })
			})
		});

		movingAvg = function(n) {
			return function (points) {
				points = points.map(function(each, index, array) {
				var to = index + n - 1;
				var subSeq, sum;
				if (to < points.length) {
					subSeq = array.slice(index, to + 1);
					sum = subSeq.reduce(function(a,b) { return [a[0] + b[0], a[1] + b[1]]; });
					return sum.map(function(each) { return each / n; });
				}
				return undefined;
			});
			points = points.filter(function(each) { return typeof each !== 'undefined' });
				// Transform the points into a basis line
				pathDesc = d3.svg.line().interpolate("basis")(points)
				// Remove the extra "M"
				return pathDesc.slice(1, pathDesc.length);
			}
		}
		var _movingSum;
		var movingAverageLine = d3.svg.line()
			.x(function(d,i) { return x(i); })
			.y(function(d,i) { return y(d.key); })
			.interpolate(movingAvg(10));
		teams.append("path")
			.attr("class", "avg")
			.attr("id", function (d) {return 'path_' + _replaceAll(" ", "", d.key);})
			.attr("d", function(d) {
				var entry = d3.entries(d.value);
				entry.sort(function (o1, o2) {
					return o1.value - o2.value;
				})
				return movingAverageLine(entry);
			})
			.style("stroke", function(d) { return color(d.key); })
			.style("stroke-dasharray", "1,1")
		;

		var legend = svg.selectAll(".legend")
			.data(color.domain())
			.enter().append("g")
			.attr("class", "legend")
			.attr("transform", function(d, i) { return "translate(0," + i * 20 + ")"; })
		;
		legend.append("rect")
			.attr("x", width - 18)
			.attr("width", 18)
			.attr("height", 18)
			.style("fill", color)
			.on("mouseover", function (d) {
				svg.select("#path_" + _replaceAll(" ", "", d)).attr("visibility", "visible")
			})
			.on("mouseout", function (d) {
				svg.select("#path_" + _replaceAll(" ", "", d)).attr("visibility", "hidden")
			})
		;
		legend.append("text")
			.attr("x", width - 24)
			.attr("y", 9)
			.attr("dy", ".35em")
			.style("text-anchor", "end")
			.text(function(d) { return d; })
		;
	};
	return {
		init: init
	}
})();
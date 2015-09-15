@extends('app')

@section('style')
<link href="/css/race_visualization.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="container">
	<!-- <div class="btn-group btn-group-xs">
		<button type="button" id="toggleRace" class="btn btn-default">Play/Pause</button>
	</div> -->
	<svg></svg>
	<table id="raceStats" class="table table-condensed">
		<thead>
			<tr>
				<th>position</th>
				<th>team</th>
				<th>driver</th>
				<th>lap</th>
				<th>time</th>
			</tr>
		</thead>
		<tbody>
		</tbody>
	</table>
</div>
@endsection

@section('javascript')
<script src="//d3js.org/d3.v3.min.js"></script>
<script src="/js/race_visualization.js"></script>
<script>
var laps = [
@foreach($race->laps as $lap)
	{"number": {{$lap->number}},
	"time": {{$lap->time}},
	"change": {{$lap->has_driver_change}},
	"driver": "{{$lap->racer->first_name}} {{$lap->racer->last_name}}",
	"team": "{{$lap->racer->team->name}}"},
@endforeach
];
RaceVisualizer.init(laps);
</script>
@endsection
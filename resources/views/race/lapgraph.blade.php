@extends('app')

@section('style')
<link href="/css/race_lapgraph.css" rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="container">
</div>
@endsection

@section('javascript')
<script src="//d3js.org/d3.v3.js"></script>
<script src="/js/race_lapgraph.js"></script>
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
RaceLapgraph.init(laps);
</script>
@endsection
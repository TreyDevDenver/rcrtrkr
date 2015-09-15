@extends('app')

@section('content')
<div class="container">
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>race</th>
			<th>lap</th>
			<th>time</th>
			<th>racer</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($laps as $lap)
			@if ($lap->has_driver_change)
				<tr class="warning">
			@else
				<tr>
			@endif
				<td>{{$lap->race_id}}</td>
				<td>{{$lap->number}}</td>
				<td>{{$lap->present()->laptime}}</td>
				<td>{{$lap->Racer->first_name}} {{$lap->Racer->last_name}}</td>
				<td>&nbsp;</td>
			</tr>
		@endforeach
	</tbody>
</table>
<?php echo $laps->render(); ?>
<?php
	var_dump($laps);
?>
</div>
@endsection
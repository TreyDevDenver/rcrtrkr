@extends('app')

@section('content')
<div class="container">
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>first name</th>
			<th>last name</th>
			<th>team</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($racers as $racer)
			<tr>
				<td>{{$racer->first_name}}</td>
				<td>{{$racer->last_name}}</td>
				<td>{{$racer->team_id}}</td>
				<td>&nbsp;</td>
			</tr>
		@endforeach
	</tbody>
</table>
<?php
	var_dump($racers);
?>
</div>
@endsection
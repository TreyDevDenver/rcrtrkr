@extends('app')

@section('content')
<div class="container">
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>name</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($teams as $team)
			<tr>
				<td>{{$team->name}}</td>
				<td>&nbsp;</td>
			</tr>
		@endforeach
	</tbody>
</table>
<?php
	var_dump($teams);
?>
</div>
@endsection
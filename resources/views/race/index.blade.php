@extends('app')

@section('content')
<div class="container">
<table class="table table-striped table-condensed">
	<thead>
		<tr>
			<th>id</th>
			<th>actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach($races as $race)
			<tr>
				<td>{{$race->id}}</td>
				<td><div class="btn-group">
					<a class="btn btn-xs btn-default" href="/races/visualize/{{$race->id}}">Visualize</a>
					<a class="btn btn-xs btn-default" href="/races/lapgraph/{{$race->id}}">Line Graph</a>
					<a class="btn btn-xs btn-default" href="/races/scatter/{{$race->id}}">Scatter</a>
				</div></td>
			</tr>
		@endforeach
	</tbody>
</table>
<?php
	//var_dump($races);
?>
</div>
@endsection
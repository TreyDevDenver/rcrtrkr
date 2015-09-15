@extends('app')

@section('content')
<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>
<style>
.title {
	color: #B0BEC5;
	font-weight: 100;
	font-family: 'Lato';
	font-size: 96px;
	margin-bottom: 40px;
}
.quote {
	color: #B0BEC5;
	font-weight: 100;
	font-family: 'Lato';
	font-size: 24px;
}
</style>
<div class="container">
	<div class="content">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="title">RCR_TRKR</div>
				<div class="quote">Race Data Visualization<br>{{ Inspiring::quote() }}</div>
			</div>
		</div>
	</div>
</div>
@endsection
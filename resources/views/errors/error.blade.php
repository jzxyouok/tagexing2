@extends ('layouts/master')

@section('title', '错误提示')

@section('body')

<div class="container text-danger">
	<div class="page-header">
		<h1>{{ $title }}</h1>
	</div>
	<p>{{ $error }}</p>
</div>

@endsection

@extends('layouts.home')

@section('title')
Todo
@endsection
@section('content')

		<div class="row justify-content-center ">
			<div class="col-md-8">
	<h1 class="text-center my-5"> Todo App</h1>
<div class="card card-default">
	<div class="card-header">
		Todo
	</div>
	<div class="card-body">
		@foreach ($todos as $todo)
		<ul class="list-group">
			<li class="list-group-item">

				{{ $todo->name }}
				<a href="/getTodo/{{ $todo->id }}" class="btn btn-primary btn-sm float-right">view</a>
			
			</li>

		</ul>
		@endforeach
	</div>
</div>
</div>
</div>

@endsection

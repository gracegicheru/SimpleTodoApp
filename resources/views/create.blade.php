@extends('layouts.home')

@section('title')
Create Tasks

@endsection

@section('content')

		<div class="row justify-content-center ">
			<div class="col-md-8">
	<h1 class="text-center my-5"> Todo App</h1>
<div class="card card-default">
	<div class="card-header">
		Create Todo
	</div>
	<div class="card-body">
		
		@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		<form action="storeTodo" method="POST">
			@csrf
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Name" name="name">
			</div>

			<div class="form-group">
				<textarea placeholder= "Description" class="form-control" cols="5" rows="5" name="description"> </textarea> 
			</div>

			<div class="form-group text-center">
				<button type="submit" class="btn btn-success"> Create Todo</button>
			</div>

		</form>
		
	</div>
</div>
</div>
</div>

@endsection
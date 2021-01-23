@extends('layouts.app')

@section('content')
 
<h2>Register</h2>
@include('common.errors')
<form action="{{ url('create') }}" method="POST" class="form-horizontal">
	{{ csrf_field() }}
	<div class="form-group">
		<label for="email">Email:</label>
		<input type="email" class="form-control" id="email" name="email">
	</div>

	<div class="form-group">
		<label for="fio">ФИО:</label>
		<input type="text" class="form-control" id="fio" name="fio">
	</div>

	<div class="form-group">
		<label for="age">Возраст:</label>
		<input type="text" class="form-control" id="age" name="age">
	</div>

	<div class="form-group">
		<label for="exp">Стаж:</label>
		<input type="text" class="form-control" id="exp" name="exp">
	</div>

	<div class="form-group">
		<label for="cash">Средняя зарплата:</label>
		<input type="text" class="form-control" id="cash" name="cash">
	</div>

	<div class="form-group">
		<button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
	</div>
</form>

@endsection
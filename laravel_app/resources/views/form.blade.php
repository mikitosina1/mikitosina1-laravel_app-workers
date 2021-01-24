@extends('layouts.app')

@section('content')
<h2 class="col">Register</h2>
@include('common.errors')
<form action="{{ url('create') }}" method="POST" class="form-group row align-items-center"  enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="email">Email:</label>
			<input type="email" class="email form-control" id="email">
		</div>
		<div class="form-group col-md-6">
			<label for="fio">ФИО:</label>
			<input type="text" class="fio form-control" id="fio">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="age">Возраст:</label>
			<input type="text" class="form-control" id="age">
		</div>
		<div class="form-group col-md-6">
			<label for="exp">Стаж: </label>
			<input type="text" class="form-control" id="exp">
		</div>
	</div>
	<div class="form-row">
		<div class="form-group col-md-4">
			<label for="cash">Средняя зарплата: </label>
			<input type="text" class="form-control" id="cash">
		</div>
		<div class="form-group col-md-8">
			<label for="image">Фото профиля: </label>
			<input type="file" name="image" class="photo form-control" id="image">
		</div>
	</div>
	<button type="submit" class="form__button btn btn-primary">Sign in</button>
</form>
@endsection
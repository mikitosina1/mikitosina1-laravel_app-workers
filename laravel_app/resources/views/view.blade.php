@extends('layouts.app')

@section('content')
<div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm">
    <div class="col p-4 d-flex flex-column position-static">
        <h1> Файл работника </h1>
        <div>email: </div>
        <div>{{ $employee->email }}</div>
        <div>ФИО: </div>
        <div>{{ $employee->fio }}</div>
        <div>Возраст: </div>
        <div>{{ $employee->age }}</div>
        <div>Стаж: </div>
        <div>{{ $employee->exp }}</div>
        <div>Средняя зп: </div>
        <div>{{ $employee->cash }}</div>
    </div>
    <div class="col-auto d-none d-lg-block">
        <img class="profile_photo" src="{{ url('/uploads/'. $employee->image ) }}" alt="не вижу картинки по адресу: {{ $employee->image }}">
    </div>
</div>




@endsection
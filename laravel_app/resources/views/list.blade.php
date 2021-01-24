@extends('layouts.app')
@section('content')
    @if (count($list) > 0)
        <div class="panel panel-default">
            <div class="panel-heading">
                Список сотрудников
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                    <th>email</th>
                    <th>ФИО</th>
                    <th>Возраст</th>
                    <th>Стаж</th>
                    <th>Средняя зарплата</th>
                    </thead>

                    <tbody>
                        @foreach ( $list as $item )
                            <tr>
                                <!-- Имя задачи -->
                                <td class="table-text">
                                    <a href="/employee/{{ $item->id }}">{{ $item->email }}</a>
                                </td>
                                <td class="table-text">
                                    <div>{{ $item->fio }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $item->age }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $item->exp }}</div>
                                </td>
                                <td class="table-text">
                                    <div>{{ $item->cash }}</div>
                                </td>
                                <td>
                                    <a class="btn btn-info" href="/employee/{{ $item->id }}"> Просмотр сотрудника </a>
                                </td>

                                <td>
                                    <form action="{{ url('/employee/delete/'.$item->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash"></i> Удалить
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <h2> Сотрудников нет </h2>
    @endif
@endsection
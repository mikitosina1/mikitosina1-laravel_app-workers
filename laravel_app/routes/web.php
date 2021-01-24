<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Employee;


Route::get('/', function () {
  return view('form');
});

Route::post('/create', function (Request $request) {
  $validator = Validator::make($request->all(), [
	'email' => 'required|max:60',
	'fio' => 'required|max:60',
	'age' => 'required|integer',
	'exp' => 'required|integer',
	'cash' => 'required|integer',
	'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
  ]);

  if ($validator->fails()) {
    return redirect('/')
      ->withInput()
      ->withErrors($validator);
  }

	$imageName = md5(time()).'.'.$request->image->extension();

	$worker = new Employee();
	$worker->email = $request->email;
	$worker->fio = $request->fio;
	$worker->age = $request->age;
	$worker->exp = $request->exp;
	$worker->cash = $request->cash;
	$worker->image = $imageName;
	$worker->save();

	$request->image->move(public_path('uploads'), $imageName);
	return redirect('/');
});

Route::get('/list', function () {
	$list = Employee::orderBy('id', 'desc')->get();
	return view('list', [
		'list' => $list
	]);
});

Route::delete('/employee/delete/{employee}', function (Employee $employee) {
	$employee->delete();

	return redirect('/');
});

Route::get('/employee/{employee}', function (Employee $employee) {

	return view('view', [
		'employee' => $employee
	]);
});





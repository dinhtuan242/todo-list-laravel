<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Todo;
use Illuminate\Http\Request;

Route::get('/', function () {
    $todo = Todo::orderBy('created_at', 'asc')
        ->get();
    return view('home', [
        'todo' => $todo
    ]);
});
Route::post('/insert', function(Request $request){
    $todo = new Todo;
    $todo->name = $request->name;
    $todo->save();
    return redirect('/');
});
Route::delete('/delete/{id}', function(Todo $id){
    $id->delete();
    return redirect('/');
});

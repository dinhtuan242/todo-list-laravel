<?php
/**
 * Created by PhpStorm.
 * User: dinhtuan
 * Date: 22/12/2018
 * Time: 21:27
 */
?>
<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo </title>
    <style>
        body{
            margin: 20px 500px auto;
        }
    </style>
</head>
<body>
<h2>Todo List Laravel</h2>
@extends('layouts.app')
@section('content')
<form action="{{url('/insert')}}" method="post" name="nameAction">
    {{csrf_field()}}
    <input type="text" name="name">&nbsp;&nbsp;
    <input type="submit" name="submit" value="Thêm công việc">
</form><br>
@if(count($todo) > 0)
<table>
    @foreach($todo as $todo)
    <tr>
    <td>{{$todo->name}}&nbsp;</td>
    <td>
        <form action="{{url('delete/'.$todo->id)}}" method="post">
            {{csrf_field()}}
            {{ method_field('DELETE') }}
            <input type="submit" value="Xoá">&nbsp
        </form>
    </td>
    </tr>
    @endforeach
</table>
@endif
@endsection
</body>
</html>

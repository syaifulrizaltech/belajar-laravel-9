@extends('layouts.mainlayout')

@section('title', 'About')

@section('content')
    <h1>ini adalah halaman Student !!!</h1>
    <h3>Student List</h3>
    <ol>
        @foreach ($studentList as $data)
        <li>
            {{$data->name}} | {{$data->gender}} | 
        </li>
        @endforeach
    </ol>
@endsection
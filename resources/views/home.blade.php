@extends('layouts.mainlayout')

@section('title', 'Home')

@section('content')


<h1>ini halaman home</h1>
<h2>Selamat Datang, ( {{ $name }} ) anda adalah "{{ $role }}"</h2>

<!-- 
@if ($role == 'admin')
    <a href="">Ke Halaman Admin</a>
@elseif ($role == 'staff')
    <a href="">Ke Halaman Gudang</a>
@else 
    <a href="">Ke Halaman Apa Saja</a>
@endif 
-->

<!-- 
@switch($role)
    @case($role=='admin')
        <a href="">Ke Halaman Admin</a>
        @break
    @case($role=='staff')
        <a href="">Ke Halaman Gudang</a>
        @break
    @default
        <a href="">Ke Halaman Apa Saja</a>
@endswitch 
-->

<!-- 
@for($i = 0; $i < 5; $i++)
    {{$i}} <br>
@endfor 
-->

<table class="table">
    <tr>
        <th>No.</th>
        <th>Nama</th>
    </tr>
    @foreach($buah as $data)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data}}</td>
    </tr>
    @endforeach

</table>

@endsection
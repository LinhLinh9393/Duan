@extends('layout.main')
@section('content')
@if(isset($_SESSION['errorrs']) && isset($_GET['msg']))
    <ul>
        @foreach($_SESSION['errorrs'] as $errorr)
            <li>{{$errorr}}</li>
        @endforeach
    </ul>
@endif
@if(isset($_SESSION['success']) && isset($_GET['msg']))
    <span>{{$_SESSION['success']}}</span>
@endif
    <h2>Sửa giảng viên</h2>
    <form action="{{route('edit-teacher/'.$detail->id)}}" method="post">
        <label for="">Tên</label>
        <input type="text" name="name" value="{{$detail->name}}"><br><br>
        <label for="">Email</label>
        <input type="text" name="email" value="{{$detail->email}}"><br><br>
        <label for="">Salary</label>
        <input type="number" name="salary" value="{{$detail->salary}}"><br><br>
        <label for="">School</label>
        <input type="text" name="school" value="{{$detail->school}}"><br><br>
        <input type="submit" value="Sửa" name="btn-submit">
    </form>
@endsection
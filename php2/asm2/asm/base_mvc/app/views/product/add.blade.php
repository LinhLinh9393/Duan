@extends('layout.main')
@section('content')
    @if(isset($_SECTION['errors']) && isset($_GET['msg']))
        <ul>
        @foreach($_SECTION['errors'] as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    @endif
    @if(isset($_SECTION['errors']) && isset($_GET['msg']))
        <span>{{$_SECTION['success']}}</span>
    @endif
    <form action="{{route('post-product')}}" method="post">
        <div style="    border: solid; padding: 15px;">
            <div style="    padding-inline: inherit;">
                <h1>Thêm môn học</h1>
                <label for="">Tên</label>
                <input type="text" name="name" id=""><br><br>
                <label for="">Giá</label>
                <input type="text" name="gia" id=""><br><br>
                <label for="">Danh mục</label>
                <input type="number" name="iddm" id=""><br><br>
                <label for="" >Danh Mục</label>
                    <select class="form-select" id="iddm" name="">
                        @foreach($categolary as)
                         <option value="">{{$value->namedm}}</option>
                        
                    </select><br>
                    
                <input type="submit" value="Gui" name="gui">
            </div>
        </div>
    </form>
@endsection
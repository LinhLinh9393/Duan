@extends('layout.main')
@section('content')
<!-- @php(var_dump($products))
@endphp -->
<a href="{{route('add-product')}}"><button>Thêm</button></a><pre>
<table style="width: 100%;" border="1">
    <tr>
    
        <th>ID</th>
        <th>Tên</th>
        <th>Giá</th>
        <th>Danh mục</th>
        <th>Thao tác</th>
    </tr>
    @foreach($products as $value)
    <tr>
        <th>{{$value->id}}</th>
        <th>{{$value->name}}</th>
        <th>{{$value->gia}}</th>
        <th>{{$value->namedm}}</th>
        <th>
            <a href="{{route('detail-product/'.$value->id)}}"><button>Sửa</button></a>
            <button onclick="confirmDelete('{{route('delete-product/'.$value->id)}}')">Xóa</button>
        </th>

    </tr>
    @endforeach
</table>
@endsection

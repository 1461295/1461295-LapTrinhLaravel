
@extends('layout.layoutdt')

@section('logo')
    <a href="/"><img src="/images/logo.gif" alt="Logo"/></a>
@stop

@section('currentmenu')
    class="current"
@stop


@section('section')
    <div class="section">
        <a href="#"><img src="/images/wedding-cupcakes-small.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div class="home">
        <h1>Chi tiết sản phẩm</h1>

        @foreach($thongtin as $item)
        <div class="aside">
            <a href="#"><img src="{{$item->HinhAnh}}dt.jpg" alt="Image" /></a>
        </div>

        <div class="section">
            <h4>Tên sản phẩm : {{$item->TenSP}}</h4>
            <h4>Mã sản phẩm : {{$item->MaSP}}</h4>
            <h4>Giá bán : {!!number_format($item->GiaBan,0,",",".")!!} đ</h4>
            <h4>Bảo quản : {{$item->BaoQuan}}</h4>
            <h4>Tình trạng : {{$item->TinhTrang}}</h4>
            <h4>Lượt xem : {{$item->LuotXem}}</h4>

        </div>
        @endforeach
    </div>

@stop
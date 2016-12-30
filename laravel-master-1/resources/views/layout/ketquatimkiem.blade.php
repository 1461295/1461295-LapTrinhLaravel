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
    <div>
        <h1>The Pastry shop</h1>
        <ul>
            @foreach($sanpham as $item)
                <li>
                    <div>
                        <div>
                            <h2><a href="/SanPham/{{$item->MaSP}}">{{$item->TenSP}}</a></h2>
                            <p>{{$item->MoTa}}</p>
                            <h2>Giá bán: {!!number_format($item->GiaBan,0,",",".")!!} đ</h2>

                        </div>
                        <a href="/SanPham/{{$item->MaSP}}"><img src="{{$item->HinhAnh}}.jpg" alt="Image" /></a>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
@stop

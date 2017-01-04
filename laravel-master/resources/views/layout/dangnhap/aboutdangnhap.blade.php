@extends('layout.dangnhap.layoutdangnhap')

@section('logo')
    <a href="/trangchudangnhap"><img src="/images/logo.gif" alt="Logo"/></a>
@stop

@section('currentthongtin')
    class="current"
@stop

@section('section')
    <div class="section">
        <a href="#"><img src="/images/wedding-cupcakes-small.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div id="about">
        <div class="aside">
            <h1>Cake Delights Xin Giới Thiệu</h1>
            <p> Cake Delights được thành lập vào năm 1996 với ông chủ là ông Nguyễn Minh điền. Trải qua thời gian khá dài hương vị của Cake Delights khiến cho nhiều khách hàng không thể nào quên. Đặc biệt Cake Delights luôn luôn sáng tạo để tạo ra những chiếc bánh thơm ngon và quan trọng là đảm bảo cho sức khỏe của bạn.</p>
        </div>
        <div class="section">
            <div id="visitshop">
                <div>
                    <p><span>Chất lượng vượt thời gian</span>Phục vụ vui tươi </p>
                    <a href="/trangchudangnhap" class="visit">Cake Delights </a>
                </div>
            </div>
            <div>
                <h3>Địa chỉ</h3>
                <p> 37 Trương Minh Ký, F13, Q.Gò Vấp, TPHCM </p>
            </div>
            <div>
                <a href="/trangchudangnhap" class="callus">Hotline: <span>093-157-0603</span></a>
            </div>
        </div>
    </div>
@stop

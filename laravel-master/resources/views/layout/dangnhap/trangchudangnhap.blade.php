@extends('layout.dangnhap.layoutdangnhap')

@section('logo')
    <a href="/"><img src="/images/logo.gif" alt="Logo"/></a>
@stop

@section('currenttrangchu')
    class="current"
@stop

@section('section')
    <div id="section">
        <ul>
            @foreach($loaisanpham as $item)
                <li><a href="/Loaidangnhap/{{$item->MaLoai}}">{{$item->TenLoai}}</a></li>
            @endforeach
        </ul>
        <a href="#"><img src="/images/wedding-cupcakes-large.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div class="home">
        <div class="aside">
            <h1>Xin chào các bạn!!! </h1>
            <p>Pastry là tên được đặt cho các loại bánh nướng được làm từ các nguyên liệu như bột mì, bơ, shortening, bột nở hay trứng. bánh nhỏ, bánh và bánh nướng ngọt khác được gọi là &#34;bánh ngọt&#34;.</p>
            <p>Pastry cũng có thể tham khảo các bột từ đó hàng hoá nướng đó được thực hiện. Pastry bột được cán ra mỏng và sử dụng như một cơ sở cho thực phẩm nướng. các món bánh ngọt thường gặp bao gồm bánh nướng, bánh và quiches.</p>
            <p>Các loại bánh ngọt được phân biệt với bánh mì do có hàm lượng chất béo cao, góp phần vào một kết cấu flaky hoặc crumbly. Một bánh ngọt tốt là ánh sáng và thoáng mát và béo, nhưng đủ để hỗ trợ trọng lượng của điền ty. Khi thực hiện một bánh shortcrust, chăm sóc phải được thực hiện để pha trộn các chất béo và bột kỹ lưỡng trước khi thêm. <a href="index.html" class="readmore">Đọc thêm</a></p>
        </div>
        <div class="section">
            <div>
                <h2>Những chiếc bánh thơm ngon</h2>
                <p>Những chiếc bánh của Cake Delights được làm ra bởi những thợ làm bánh hàng đầu. Bằng với sự đam mê, họ đã làm những chiếc bánh không chỉ ngon mà còn đẹp mắt. Còn chần chừ gì nữa mà không đặt ngay những chiếc bánh thêm ngon cho bạn bè, gia đình mình để thưởng thức.</p>
            </div>
            <ul>
                <li class="first">
                    <a href="/trangchudangnhap"><img src="images/cake.jpg" alt="Image" /></a>
                </li>
                <li>
                    <a href="/trangchudangnhap"><img src="images/burgercake.jpg" alt="Image" /></a>
                </li>
                <li>
                    <a href="/trangchudangnhap"><img src="images/cupcake.jpg" alt="Image" /></a>
                </li>
            </ul>
        </div>
    </div>
@stop

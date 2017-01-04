@extends('layout.dangnhap.layoutdangnhap')

@section('logo')
    <a href="/trangchudangnhap"><img src="/images/logo.gif" alt="Logo"/></a>
@stop

@section('currentlienhe')
    class="current"
@stop

@section('section')
    <div class="section">
        <a href="#"><img src="/images/wedding-cupcakes-small.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div>
        <h1>Liên hệ với Cake Delights</h1>
        <div id="visitshop">
            <div>
                <p><span>Chất lượng vượt thời gian</span>Phục vụ vui tươi </p>
                <a href="/trangchudangnhap" class="visit">Cake Delights </a>
            </div>
        </div>
        <form action="#">
            <p>Nếu bạn cần giúp đỡ hay góp ý với Cake Delights hãy điền đầy đủ thông tin và gửi e-mail cho Cake Delights nhé. <span>Với tiêu chí để nâng cao chất lượng phục là nhờ vào sự góp ý chân thành của quý khách hàng. Hãy cho Cake Delights biết cảm nghĩ của bạn về Cake Delights nhé. Xin chân thành cảm ơn!!!  </span></p>
            <input type="text" maxlength="30" value="Name" class="textcontact" />
            <input type="text" maxlength="30" value="E-mail Address" class="textcontact" />
            <input type="text" maxlength="30" value="Subject" class="textcontact" />
            <textarea name="message" id="message" cols="30" rows="10"></textarea>
            <input type="submit" value="" class="submit" />
        </form>
    </div>
@stop

@extends('layout.layoutdt')

@section('logo')
    <a href="/"><img src="images/logo.gif" alt="Logo"/></a>
@stop

@section('currentnhatky')
    class="current"
@stop

@section('section')
    <div class="section">
        <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div id="blog">
        <div id="articles">
            <ul>
                <li>
                    <div>
                        <div>
                            <span class="date">20/12</span>
                            <span class="connect">
									<a href="http://twitter.com/fwtemplates" target="_blank" class="twitter">Twitter</a>
									<a href="#" target="_blank" class="heart">Heart</a>
									<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook">Facebook</a>
								</span>
                            <h1><a href="/">Giáng Sinh an lành</a></h1>
                            <h2>Giảm giá 10% các mẫu bánh Giáng Sinh từ ngày 20/12 đến hết 24/12 !!!</h2>
                            <p>Mùa Giáng Sinh này, Cake Delights chúc quý khách một mùa Giáng Sinh an lành bên người thân và gia đình. Đặc biệt trong dịp để tỏ lòng chi ân khách hàng, Cake Delights giảm giá 10% cho các loại bánh vào mùa Giáng Sinh. Hãy nhanh tay liên hệ với Cake Delights để có bánh tặng người thân, bạn bè nhé. </p>
                            <span id="tag">Tag: <a href="/">Cookies</a> <a href="/">Recipes</a></span>
                        </div>
                    </div>
                </li>
                <li>
                    <div>
                        <div>
                            <span class="date">1/1</span>
                            <span class="connect">
									<a href="http://twitter.com/fwtemplates" target="_blank" class="twitter">Twitter</a>
									<a href="#" target="_blank" class="heart">Heart</a>
									<a href="http://facebook.com/freewebsitetemplates" target="_blank" class="facebook">Facebook</a>
								</span>
                            <h1><a href="/">Năm mới hạnh phúc</a></h1>
                            <h2>Đặc biệt chỉ có 1 ngày duy nhất. Giảm 50%</h2>
                            <p>Xin chi ân khách hàng một năm quá đã luôn tin dùng các sản phẩm của Cake Delights, để tỏ lòng tri ân Cake Delights giảm 50% giá các loại bánh kém. Đặc biệt những ai có sinh nhật trong ngày hôm nay sẽ được tặng thêm 10 cây pháo bông. Hãy nhanh tay để nhận được ưu đãi nhé.</p>
                            <span id="tag">Tag: <a href="/">Sale</a> <a href="/">Promos</a> <a href="/">Food</a></span>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="section">
                <a href="/blog" class="newpost">New Post</a>
                <a href="/blog" class="oldpost">Old Post</a>
            </div>
        </div>
        <div id="sidebar">
        </div>
    </div>
@stop

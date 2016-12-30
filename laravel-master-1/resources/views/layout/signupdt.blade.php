@extends('layout.layoutdt')

@section('logo')
    <a href="/"><img src="images/logo.gif" alt="Logo"/></a>
@stop

@section('section')
    <div class="section">
        <a href="#"><img src="images/wedding-cupcakes-small.jpg" alt="Image"/></a>
    </div>
@stop

@section('content')
    <div>
        <div id="account">
            <div>
                <form action="#">
                    <span>Đăng ký</span>
                    <table>
                        <tr>
                            <td><label for="email">E-mail</label></td>
                            <td><input type="text" id="email" /></td>
                        </tr>
                        <tr>
                            <td><label for="login">Tên đăng nhập </label></td>
                            <td><input type="text" id="login" /></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input type="text" id="password" /></td>
                        </tr>
                        <tr>
                            <td><label for="confirmpass">Nhập lại<br />Password</label></td>
                            <td><input type="text" id="confirmpass" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="rememberme"><label for="rememberme"><input type="checkbox" id="rememberme" /> Ghi nhớ tài khoản trên trình duyệt</label></td>
                        </tr>
                    </table>
                    <input type="submit" value="Đăng ký" class="submitbtn" />
                </form>
            </div>
        </div>
    </div>
@stop

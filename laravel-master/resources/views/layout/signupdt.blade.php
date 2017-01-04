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

                @if (count($errors) > 0)

                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>

                @endif


                <form method="POST" action="/auth/register">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                    <span>Đăng ký</span>
                    <table>
                        <tr>
                            <td><label for="email">E-mail</label></td>
                            <td><input type="email" class="form-control" name="email" value="{{ old('email') }}"/></td>
                        </tr>
                        <tr>
                            <td><label for="login">Tên đăng nhập </label></td>
                            <td><input type="text" class="form-control" name="name" value="{{ old('name') }}" /></td>
                        </tr>
                        <tr>
                            <td><label for="password">Password</label></td>
                            <td><input type="password" class="form-control" name="password" /></td>
                        </tr>
                        <tr>
                            <td><label for="confirmpass">Nhập lại<br />Password</label></td>
                            <td><input type="password" class="form-control" name="password_confirmation" /></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td class="rememberme"><label for="rememberme"><input type="checkbox" id="rememberme" /> Ghi nhớ tài khoản trên trình duyệt</label></td>
                        </tr>
                    </table>
                    <input type="submit" value="Đăng ký" class="btn btn-primary" />
                </form>
            </div>
        </div>
    </div>
@stop

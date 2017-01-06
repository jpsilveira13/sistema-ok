@extends('principal.index')

@section('content')
    <div class="container">

        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="{{url('img/logo/logo-sys.png')}}">
           <!-- <p id="profile-name" class="profile-name-card"> SysLab</p> -->
            <form class="form-signin" role="form" method="POST" action="https://proloconline.com.br/login">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <span id="reauth-email" class="reauth-email"></span>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" value="" required="" autofocus="">
                </div>
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="password" required="">
                </div>

                <button class="mb10 btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
            </form><!-- /form -->

            <a href="https://proloconline.com.br/password/reset" class="line-vertical btn btn-lg btn-primary btn-block  btn-signin">
                Esqueceu sua senha?
            </a>
        </div>
    </div>

@endsection

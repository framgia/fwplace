<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>@lang('auth.login')</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <script src="{{ asset('js/webfont.js') }}"></script>

    @include('admin.assets.css')

    <link rel="stylesheet" href="{{ asset('bower_components/metro-asset/vendors/base/my-custom.css') }}">
    <link rel="shortcut icon" href="{{ asset(config('site.static') . 'favicon.png') }}" />
</head>
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <div class="m-grid m-grid--hor m-grid--root m-page">
        <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1 login-bg" id="m_login">
            <div class="m-grid__item m-grid__item--fluid m-login__wrapper">
                <div class="m-login__container">
                    <div class="m-login__logo">
                        <a href="{{ url('/') }}">
                            {!! Html::image(config('site.static') . 'framgia-logo.png') !!}
                        </a>
                    </div>
                    <div class="m-login__signin">
                        <div class="m-login__head">
                            <h3 class="m-login__title">@lang('auth.login') Framgia Working Place</h3>
                        </div>
                        {!! Form::open(['url' => 'login', 'method' => 'POST', 'class' => 'm-login__form m-form']) !!}
                            @foreach($errors->all() as $error)
                                <p class="alert alert-danger">{{ $error }}</p>
                            @endforeach
                            <div class="form-group m-form__group">
                                {!! Form::text('email', old('email'), [
                                    'class' => 'form-control m-input', 
                                    'placeholder' => __('auth.email')
                                ]) !!}
                            </div>
                            <div class="form-group m-form__group">
                                {!! Form::password('password', [
                                    'class' => 'form-control m-input m-login__form-input--last', 
                                    'placeholder' => __('auth.password')
                                ]) !!}
                            </div>
                            <div class="row m-login__form-sub">
                                <div class="col m--align-left m-login__form-left">
                                    <label class="m-checkbox  m-checkbox--light">
                                        {!! Form::checkbox('remember', 0) !!}
                                        @lang('auth.remember')
                                        <span></span>
                                    </label>
                                </div>
                                <div class="col m--align-right m-login__form-right">
                                    <a href="{{ route('password.request') }}" id="m_login_forget_password" class="m-link">
                                        @lang('auth.forgot')
                                    </a>
                                </div>
                            </div>
                            <div class="m-login__form-action">
                                {!! Form::submit(__('auth.login'), ['class' => 'btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary']) !!}
                                <a href="{{ url('/register') }}" class="ml-4 btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary">
                                    @lang('auth.register')
                                </a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.assets.js')
    @include('sweetalert::alert')

    @yield('js')

</body>
</html>

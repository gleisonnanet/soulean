@extends('layouts.app')

<!-- START PAGE CONTAINER -->
<div class="page-container">

<!-- START PAGE SIDEBAR -->
<div class="page-sidebar">
    <!-- START X-NAVIGATION -->
    <ul class="x-navigation">
        <li class="xn-logo">
            <a href="index.html">Sou Lean</a>
            <a href="#" class="x-navigation-control"></a>
        </li>
        <li class="xn-title">Menu lean</li>
        <li>
        </li>
    </ul>
    <!-- END X-NAVIGATION -->
</div>
<!-- END PAGE SIDEBAR -->

<!-- PAGE CONTENT -->
<div class="page-content">

    <!-- START X-NAVIGATION VERTICAL -->
    <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
        <!-- TOGGLE NAVIGATION -->
        <li class="xn-icon-button">
            <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
        </li>

          <li class="xn-icon-button pull-right">
            @if (Route::has('login'))
                <div class="fa fa-desktop">
                    @auth
                    <li class="xn-icon-button pull-right">
                        <a href="{{ url('/home') }}"><span class="fa fa-tasks">Home</span> </a>

                        </li>
                      <!--logout -->
                      <li class="xn-icon-button pull-right">
                                                      <a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                                </li>

                                <!--./logout-->
                    @else
                      <li class="xn-icon-button pull-right">

                        <a href="{{ route('login') }}"> <span class="glyphicon glyphicon-user"></span> </a>

                            </li>
                          <li class="xn-icon-button pull-right">

                        <a href="{{ route('register') }}"> <span class="glyphicon glyphicon-new-window"></span> </a>
                      </li>
                    @endauth
                </div>
            @endif

                    </li>



        <!-- END TOGGLE NAVIGATION -->
    </ul>
    <!-- END X-NAVIGATION VERTICAL -->



    @section('content')


                    <div class="card-header">{{ __('Login') }}</div>


                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            </div>
                        </form>
                      </div>


    @endsection


</div>
<!-- END PAGE CONTENT -->
</div>
<!-- END PAGE CONTAINER -->

<!-- MESSAGE BOX-->
<div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
<div class="mb-container">
    <div class="mb-middle">
        <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
        <div class="mb-content">
            <p>Are you sure you want to log out?</p>
            <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
        </div>
        <div class="mb-footer">
            <div class="pull-right">
                <a href="pages-login.html" class="btn btn-success btn-lg">Yes</a>
                <button class="btn btn-default btn-lg mb-control-close">No</button>
            </div>
        </div>
    </div>
</div>
</div>
<!-- END MESSAGE BOX-->

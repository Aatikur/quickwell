@extends('web.templet.master')

    {{-- @include('web.include.seo') --}}

    @section('seo')
    @endsection

    @section('content')
        <!--med_tittle_section-->
        <div class="med_tittle_section">
            <div class="med_img_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="med_tittle_cont_wrapper">
                            <div class="med_tittle_cont">
                                <h1>login </h1>
                                <ol class="breadcrumb">
                                    <li><a href="{{route('web.index')}}">Home</a>
                                    </li>
                                    <li>login</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- med_tittle_section End -->

        <div class="login_wrapper_top float_left">
            <div class="login_overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mx-auto">
                        <div class="login_tab_top_wrap float_left">
                            <div class="btn_log">
                                <a href="{{ route('web.login') }}">LOG IN </a>
                            </div>
                            @if (Session::has('message'))
                                <div class="alert alert-success" >{{ Session::get('message') }}</div>
                            @endif
                            @if (Session::has('error'))
                                <div class="alert alert-danger">{{ Session::get('error') }}</div>
                            @endif
                            <div class="login_wrapper  float_left">
                                {{ Form::open(['method' => 'post','route'=>'web.user.login']) }}
                                    <div class="formsix-pos">
                                        <div class="form-group i-email">
                                            <input type="email" class="form-control" name="email" value="{{ old('email') }}" required="" placeholder="Email">
                                            @if($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="formsix-e">
                                        <div class="form-group i-password">
                                            <input type="password" class="form-control" required="" name="password" id="password2" placeholder="Password">
                                            @if($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="login_remember_box">
                                        
                                        <p style="display: inline;">If your are not resigter <a href="{{ route('web.register') }}">click here</a></p>
                                        <a href="{{route('web.password.forgot-pasword')}}" class="forget_password">Forgot Password</a>
                                    </div>
                                    <div class="header_btn inner_btn login_btn log float_left">
                                        <button type="submit">Log in</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection

    @section('script') 
    @endsection
	
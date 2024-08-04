@extends('layouts.Customer.header')

@section('content')

            <div class="login-box-body">
                <p class="login-box-msg">@lang('تسجيل الدخول')</p>

                <form action="{{ route('login') }}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('post') }}

                    @include('partials._errors')

                    <div class="form-group has-feedback">
                        <input type="email" name="email" class="form-control" placeholder="@lang('الإيميل')">
                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    </div>

                    <div class="form-group has-feedback">
                        <input type="password" name="password" class="form-control" placeholder="@lang('كلمة السر')">
                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    </div>

                    <div class="form-group">
                        <label style="font-weight: normal;"><input type="checkbox" name="remember"> @lang('تذكرني')</label>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block btn-flat">@lang('تسجيل الدخول')</button>

                </form><!-- end of form -->

            </div><!-- end of login body -->


        @endsection
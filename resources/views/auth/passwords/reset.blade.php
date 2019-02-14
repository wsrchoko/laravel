@extends('app') 

@section('styles')

@endsection @section('body')
<div class="login-container">
    <div class="page-container">
        <div class="page-content">
            <div class="content-wrapper">
                <div class="content">

                    <form method="POST" action="{{ route('password.request') }}">
                        @csrf

                        <div class="panel panel-body login-form" id="panel-body">
                            <div class="text-center div-img-login">
                                <div class="icon-object border-white">
                                </div>
                            </div>

                            <input type="hidden" name="token" value="{{ $token }}">

                            
                                <div class="form-group has-feedback has-feedback-left title">
                                    <input id="password" type="password" class="input-xlg text-light form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"
                                        placeholder="password" required> 
                                        <div class="form-control-feedback">
                                            <i class="icon-unlocked2 text-muted ml-20 icon-login"></i>
                                        </div>
                                        @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            

                            
                                <div class="form-group has-feedback-left pb-10">
                                    <input id="password-confirm" type="password" placeholder="Confirm password" class="input-xlg form-control{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                        name="password_confirmation" required>
                                        <div class="form-control-feedback">
                                            <i class="icon-unlocked2 text-muted ml-20 icon-login"></i>
                                        </div>
                                        @if ($errors->has('password_confirmation'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            

                            <div class="form-group pt-20">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn border-danger-800 text-danger-800 btn-flat btn-rounded btn-xlg button-reset">Reset Password</button>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
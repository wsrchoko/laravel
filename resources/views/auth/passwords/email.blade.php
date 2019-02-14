@extends('app') 

@section('styles')
@endsection

@section('body')
    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="panel panel-body login-form" id="panel-body">
                                <div class="text-center div-img-login">
                                    <div class="icon-object border-white">
                                    </div>
                                </div>
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <span class="text-semibold">{{ $errors->first('email') }}</span>
                                    </div>
                                @endif
                                
                                <div class="form-group has-feedback-left pb-10">
                                    <input  type="email" class="input-xlg text-light form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                                    <div class="form-control-feedback">
                                            <i class="glyphicon-envelope text-muted ml-20 icon-login"></i>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn border-danger-800 text-danger-800 btn-flat btn-rounded btn-xlg button-reset">Reset Password</button>
                                            </div><br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

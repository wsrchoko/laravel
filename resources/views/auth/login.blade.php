@extends('app')

@section('styles')
@endsection

@section('body')
    <div class="login-container">
        <div class="page-container">
            <div class="page-content">
                <div class="content-wrapper">
                    <div class="content" id="content">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="panel panel-body login-form" id="panel-body">
                                <div class="text-center div-img-login">
                                    <div class="icon-object border-white">
                                    </div>
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        <span class="text-semibold">{{ $errors->first('email') }}</span>
                                    </div>
                                    @endif
                                </div>
                                <div class="parent-inputs">
                                    <div class="form-group has-feedback has-feedback-left">
                                        <input id="email" type="email" class="input-xlg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="E-mail" value="{{ old('email') }}" required autofocus>
                                        <div class="form-control-feedback">
                                            <i class="icons-auditii-user text-muted ml-20 icon-login"></i>
                                        </div>
                                    </div>
                                    <div class="form-group has-feedback has-feedback-left">
                                        <input id="password" type="password" class="input-xlg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                                        <div class="form-control-feedback">
                                            <i class="icons-auditii-password text-muted ml-20 icon-login"></i>
                                        </div>
                                    </div>
                                    <div class="form-group login-options text-right">
                                        <a class="text-muted" href="{{ route('password.request') }}">Forgot password?</a>
                                    </div>
                                </div>
                                
                                <div class="form-group text-center btn-login">
                                    <button type="submit" class="btn border-slate-300 text-danger-800 btn-flat btn-rounded btn-xlg button-login">LOGIN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script type="text/javascript">
</script>
@endsection
@extends(config('sentinel.layout'))

@section('title')
Register
@stop

@section('content')
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <form method="POST" action="{{ route('sentinel.register.user') }}" accept-charset="UTF-8" id="register-form">

            <h2>Register New Account</h2>

            <div class="form-group label-floating {{ ($errors->has('username')) ? 'has-error' : '' }}">
                <label for="username" class="control-label">Username</label>
                <input class="form-control" placeholder="Username" name="username" type="text" value="{{ Request::old('username') }}">
                {{ ($errors->has('username') ? $errors->first('username') : '') }}
            </div>

            <div class="form-group label-floating {{ ($errors->has('email')) ? 'has-error' : '' }}">
                <label for="email" class="control-label">E-Mail</label>
                <input class="form-control" placeholder="E-mail" name="email" type="text" value="{{ Request::old('email') }}">
                {{ ($errors->has('email') ? $errors->first('email') : '') }}
            </div>

            <div class="form-group label-floating {{ ($errors->has('password')) ? 'has-error' : '' }}">
                <label for="password" class="control-label">Password</label>
                <input class="form-control" placeholder="Password" name="password" value="" type="password">
                {{ ($errors->has('password') ?  $errors->first('password') : '') }}
            </div>

            <div class="form-group label-floating {{ ($errors->has('password_confirmation')) ? 'has-error' : '' }}">
                <label for="password_confirmation" class="control-label">Confirm Password</label>
                <input class="form-control" placeholder="Confirm Password" name="password_confirmation" value="" type="password">
                {{ ($errors->has('password_confirmation') ?  $errors->first('password_confirmation') : '') }}
            </div>

            <input name="_token" value="{{ csrf_token() }}" type="hidden">
            <input class="btn btn-primary" value="Register" type="submit">

        </form>
    </div>
</div>
@stop
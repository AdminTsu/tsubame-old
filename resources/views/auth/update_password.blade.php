@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="/">
                    <img src="{{ asset('common/img/logo_tsubame-jltc.png') }}" class="img-fluid" alt="Tsubame Logo">
                    </a>
                </div>
                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    <h3 class="text-center">Update Password</h3>
                    <hr>
                    <form method="POST" action="{{ route('login.update_password_email') }}">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="user_id" id="user_id" value="{{ $data->id }}">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $data->email }}" autofocus readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </div>
                    </form>
                    
                </div>
                <div class="card-footer text-center">
                    <div>Dont have an account? click <a class="btn btn-info btn-sm" href="{{ route('register') }}">here</a> to register</div>
                    <div>or click <a href='{{ route("sites.landing") }}'>here</a> to go back to landing page</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
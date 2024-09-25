@extends('layouts.app')

@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <a href="/">
                
                    <img src="{{ asset('common/img/logo_tsubame-jltc.png') }}" class="img-fluid" alt="Tsubame Logo">
                    </a>
                </div>

                <div class="card-body">
                    <h3 class="text-center">Register</h3>
                    <hr>
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" id="registerform">
                        {{ csrf_field() }}

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
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
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" id="registerbtn" disabled class="btn btn-primary" required>
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center">
                        <div>Already have an account? click <a class="btn btn-info btn-sm" href="{{ route('login') }}">here</a> to login</div>
                        <div>or click <a href='{{ route("sites.landing") }}'>here</a> to go back to landing page</div>
                    </div>
            </div>
        </div>
    </div>
</div>

<script>

(function() {
    $('form > #name, #email, #password, #password-confirm').keyup(function() {

        var empty = false;
        
        
        $('#name, #email, #password, #password-confirm').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        $("#registerbtn").prop('disabled', empty);
        // if (empty) {
        //     $('#agreement').attr('disabled', 'disabled');
        // } else {
        //     $('#agreement').removeAttr('disabled');
            
        // }
    });
})()



// $( document ).ready(function() {
    
//     var checkboxes = $("input[type='checkbox']"),
//     actions = $("#registerbtn");

//     checkboxes.click(function() {
    
//        actions.attr("disabled", !checkboxes.is(":checked"));
      
//     });     
// });


</script>

@endsection

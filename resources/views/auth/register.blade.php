@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 130px;padding-bottom: 50px">
    <div class="row ">
        <div class="col-md-8 col-md-offset-2 ">
            <div class="panel panel-default  " style="background-color: lightgoldenrodyellow;">
                <div class="panel-heading"><b>Register</b></div>

                <div class="panel-body"  >
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}" onsubmit="return signup_validat()" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label"><b>Name</b></label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>Invalid Name</strong>
                                    </span>
                                @endif
                                <b> <span class="col-md-12" id="rname"style="color: black"></span></b>
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label"><b>E-Mail Address</b></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>Invalid Email/Email already exit</strong>
                                    </span>
                                @endif

                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('contact') ? ' has-error' : '' }}">
                            <label for="contact" class="col-md-4 control-label"><b>Contact</b></label>

                            <div class="col-md-6">
                            <input id="cont" type="tel" class="form-control" name="contact" value="{{ old('contact') }}" required
                            placeholder="Enter Correct Number (i.e +92XXXXXXXXXXXX)">

                            @if ($errors->has('contact'))
                                <span class="help-block">
                                        <strong>Incorrect phone#</strong>
                                    </span>
                            @endif
                                <b> <span class="col-md-12" id="rcontact"style="color: black"></span></b>
                        </div>
                </div>


                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label"><b>Password</b></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>Not Same passwrord</strong>
                                    </span>
                                @endif
                                <b> <span class="col-md-12" id="rpassword"style="color: black"></span></b>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label"><b>Confirm Password</b></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="select" class="col-md-4 control-label"><b>Select</b></label>

                            <div class="col-md-6">
                                <input type="radio" name="role" value="owner" checked><strong>Owner</strong>
                                <input type="radio" name="role" value="user"><Strong>User</Strong>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

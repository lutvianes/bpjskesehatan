@extends('layouts.login')
@section('content')
<div class="login">

	<div class="logo"><!-- BEGIN LOGO -->
        <h3><strong>Aplikasi</strong> kita</h3>
    </div>  <!-- END LOGO -->
    
    <div class="content container">   <!-- BEGIN LOGIN -->

        <form class="form-vertical login-form" action="/login" method="post">

            <h3 class="form-title">Login to your account</h3>
            <div class="alert alert-danger hide">
                <button class="close" data-dismiss="alert"></button>
                <span>Enter any username and passowrd.</span>
            </div>

            <div class="control-group">
                <label class="control-label">Username</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fs-user-2"></i>
                        <input class="form-control" type="text" placeholder="Username" name="username"/>
                    </div>
                </div>
            </div>

            <div class="control-group">
                <label class="control-label">Password</label>
                <div class="controls">
                    <div class="input-icon left">
                        <i class="fs-locked"></i>
                        <input class="form-control" type="password" placeholder="Password" name="password"/>
                    </div>
                </div>
            </div>

            <div>
                <button type="submit" class="btn btn-success" style="width:100%;">
                    <i class="fs-checkmark-2"></i> Login
                </button>            
            </div>

        
            <div class="create-account">
                <p>
                   &nbsp;&nbsp;&nbsp;
                </p>
            </div>
        </form> <!-- END LOGIN FORM --> 

    </div>
</div>
@stop
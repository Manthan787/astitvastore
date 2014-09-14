@extends('layouts.main')
@section('title')
Sign In
@stop

@section('content')
 <section id="signin-form" align="center">
                
                
                {{ Form::open(['url'=>'/users/signin']) }}
<div class="container auth">
    <h3 class="uppercase normal text-center title" align="center">Login</h3>
    <div class="row">
        <div class="login">
             <form id="form-login" method="post" action="#" class="form-horizontal">
                <div class="element row">
                    <label>Email</label>
                    <input type="text" name="email" />
                </div>
                <div class="element row">
                    <label>Password</label>
                    <input type="password" name="password" />
                </div>
                <h5 align="center">
                <a href="/users/newaccount">Don't have an account yet? Register! </a>
                </h5>
                <div>
                    <div align="center">
                        <input class="button mustard" type="submit" value="Log In" />
                    </div>
                </div>
                
            </form>
        </div>


                
        </section>

@stop
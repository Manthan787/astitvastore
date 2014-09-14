@extends('layouts.main')
@section('title')
Create New Account
@stop

@section('content')

<section align="center">
               <h3 class="uppercase normal text-center title" align="center">Register</h3>
                    
               <form id="form-register" method="post" action="/users/create">
                
                <div class="element row">
                    <label >First name</label>
                    <input  type="text" name="firstname" value="{{Input::old('firstname')}}" /><br>
                    {{ $errors->first('firstname') }}
    
                </div>
                <div class="element row">
                    <label >Last name</label>
                    <input  type="text" name="lastname" value="{{ Input::old('lastname')  }}" /><br>
                    {{ $errors->first('lastname') }}
    
                </div>
                <div class="element row">
                    <label>Email</label>
                    <input type="text" name="email" />
                </div>
                
                <div class="element row">
                    <label >Password</label>
                    <input  type="password" name="password" /><br>
                    {{ $errors->first('password') }}
    
                </div>
                <div class="element row">
                    <label >Confirm Password</label>
                    <input  type="password" name="password_confirmation" /><br>
                    {{ $errors->first('password_confirmation') }}
    
                </div>
                
                <div class="element row">
                    <label>Address</label>
                    &nbsp&nbsp&nbsp&nbsp&nbsp<textarea  name="address" value="{{ Input::old('address') }}"></textarea><br>
                    {{ $errors->first('address') }}
    
                </div>
                <div class="element row">
                    <label >Phone</label>
                    <input  type="text" name="telephone" value="{{ Input::old('telephone') }}" /><br>
                    {{ $errors->first('telephone') }}
    
                </div>
                <div class="element row">
                    <div align="center">
                        <input class="button mustard" type="submit" value="Register" />
                    </div>
                </div>
                <input type="hidden" name="_token" value="<?php echo Session::token(); ?>"
            </form>
</section>

                   
                

@stop
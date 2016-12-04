@extends('layouts.master')

@section('title')
    welcome!!!

@endsection

@section('content')
    @include('includes.message-block')
    <div class="row">
        <div class="col-md-6">
            <h3>sign up</h3>
            <form action="{{route('signup')}}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">your e-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>

                <div class="form-group {{$errors->has('first_name') ? 'has-error' : ''}}">
                    <label for="first_name">your first name</label>
                    <input class="form-control" type="text" name="first_name" id="first_name" value="{{Request::old('first_name')}}">
                </div>

                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">your password</label>
                    <input class="form-control" type="text" name="password" id="password" value="{{Request::old('password')}}">
                </div>


                <button type="submit" class="btn btn-primary">submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </div>

        <div class="col-md-6">
            <h3>sign in</h3>
            <form action="{{route('signin')}}" method="post">
                <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                    <label for="email">your e-mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{Request::old('email')}}">
                </div>


                <div class="form-group {{$errors->has('password') ? 'has-error' : ''}}">
                    <label for="password">your password</label>
                    <input class="form-control" type="text" name="password" id="password" value="{{Request::old('password')}}">
                </div>


                <button type="submit" class="btn btn-primary">submit </button>
                <input type="hidden" name="_token" value="{{Session::token()}}">
            </form>

        </div>




    </div>


@endsection

@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mt-5 mx-auto p-5">
            
            <form action="{{ url('/admin-login') }}" method="POST">
                
                                
                <div class="row d-flex justify-content-center">
                    <label for="uname">Username :</label>&nbsp; &nbsp;
                    <input type="text" name="uname" id="uname" placeholder="User Name" value="{{ old('uname') }}">
                    @error('uname')
                    <div class="alert alert-danger">{{ $errors->first('uname')}}</div>
                    @enderror
                </div>
                <br/>
                <div class="row d-flex justify-content-center">
                    <label for="password">Password :</label>&nbsp; &nbsp;
                    <input type="password" name="password" id="password" placeholder="Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $errors->first('password')}}</div>
                    @enderror
                </div>
                <br/>
                @if($errors->any())
                <h4>{{$errors->first()}}</h4>
                @endif
                <div class="row d-flex justify-content-center">
                    <button type="submit">Login</button>
                </div>
            </form>
            </div>
        </div>
    </div>

@endsection

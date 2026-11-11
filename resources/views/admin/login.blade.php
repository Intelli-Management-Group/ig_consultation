@extends('admin.layout')
@section('content')

    <div class="container">
        <div class="row">

            <div class="col-md-6 mt-5 mx-auto p-5">

            <form action="{{ url('/login') }}" method="POST">
                

                                <div class="row d-flex justify-content-center">
                                    <label for="uname">Username :</label>&nbsp; &nbsp;
                                    <input type="text" name="uname" id="uname" placeholder="User Name" value="{{ old('uname') }}">
                                    @error('uname')
                                    <div class="alert alert-danger">{{ $errors->first('uname')}}</div>
                                    @enderror
                                </div>
                                <br/>
                                <div class="row d-flex justify-content-center">
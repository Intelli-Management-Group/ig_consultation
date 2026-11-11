@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-5">
        <form action="{{ url('/add-category') }}" method="POST">
            
            <div class="text-left">
                <label for="title">Title :</label>&nbsp; &nbsp;
                <input type="text" name="title" id="title" value="{{ old('title') }}">
                @error('title')
                    <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                @enderror
                <br/>
            </div>    
                <button type="submit">Add</button>
            </form>
        </div>
    </div>
</div>        
@endsection
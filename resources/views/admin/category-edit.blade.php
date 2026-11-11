@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5 mx-auto p-5">
            <form action="{{ route('categoryUpdate', $data->catID) }}" method="POST">
                
                <div class="text-left">
                    <label for="catTitle">Title</label>
                    <input type="text" id="catTitle" name="catTitle" value="{{ $data->catTitle }}">
                    @error('catTitle')
                    <div class="alert alert-danger">{{ $errors->first('catTitle')}}</div>
                    @enderror
                    <br/>
                </div>    
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</div>        
@endsection
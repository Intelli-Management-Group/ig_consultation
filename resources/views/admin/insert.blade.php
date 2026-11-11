@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto p-5">
            <form action="{{ url('/add-blog') }}" method="POST" enctype="multipart/form-data">
                
                <div class="text-left">
                    <label for="title">Title:</label>&nbsp; &nbsp;
                    <input type="text" name="title" id="title" class="form-control" maxlength="150" value="{{ old('title') }}">
                    @error('title')
                        <div class="alert alert-danger">{{ $errors->first('title')}}</div>
                    @enderror
                    <br/>
                    <label for="description">Description:</label>
                    <br/>
                    <textarea name="description" id="blog_description" class="ckeditor form-control" placeholder="Enter description">{{ old('description') }}</textarea>
                    <br/>
                    <br/>
                    <label for="summary">Summary:</label>
                    <br/>
                    <textarea name="summary" id="blog_summary" class="ckeditor form-control" placeholder="Enter summary">{{ old('summary') }}</textarea>
                    <br/>
                    <label for="banner" class="control-label">Upload Banner:</label>
{{--                <span>In case of multiple images, the image you upload first will become the thumbnail image</span>--}}
                    <br/>

                    <input type="file" name="banner" accept=".jpeg,.gif,.jpg,.png">

{{--                <input type="file" name="banner[]" accept=".jpeg,.gif,.jpg,.png" multiple>--}}
                    <br/>
                    <br/>
                    <label>Category <span class="text-danger">*</span>:</label>&nbsp;
                    @foreach($blog_category_array as $key=>$value)
                        <input type="checkbox" name="categoryId[]" value="{{ $key }}" {{ (is_array(old('categoryId')) && in_array($key, old('categoryId'))) ? 'checked' : '' }}> {{ $value }} &nbsp;
                    @endforeach
{{--                <select name="categoryId" class="form-control col-md-6">
                    <option value="">Select category</option>
                    @foreach($blog_category_array as $key=>$value)
                        <option value="{{ $key }}" {{ old('categoryId') == $key ? 'selected' : '' }}>{{ $value }}</option>
                    @endforeach
                </select>--}}
                    @error('categoryId')
                        <div class="alert alert-danger">{{ $errors->first('categoryId')}}</div>
                    @enderror
                    <br/>

                    <label for="source">Source:</label>&nbsp; &nbsp;
                    <input type="text" name="source" id="source" class="form-control col-sm-4" maxlength="150" value="{{ old('source') }}">
                    <br/>
                    <br/>

                    <label for="date">News Date:</label>&nbsp; &nbsp;
                    <input type="date" name="date" id="date" class="form-control col-sm-4" value="{{ old('date') }}">
                    <br/>

                </div>
                <button type="submit" class="btn btn-info">Submit</button>
            </form>
        </div>
    </div>
</div>
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('js/ckeditor/adapters/jquery.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
</script>
@endsection

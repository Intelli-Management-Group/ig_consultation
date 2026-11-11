@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5 mx-auto p-5">
            <form action="{{ route('blogUpdate', $data->postID) }}" method="POST" enctype="multipart/form-data">
                
                <div class="text-left">
                    <label for="postTitle">Title:</label>
                    <input type="text" name="postTitle" id="postTitle" class="form-control" value="{{ old('postTitle', $data->postTitle) }}">
                    @error('postTitle')
                    <div class="alert alert-danger">{{ $errors->first('postTitle')}}</div>
                    @enderror
                    <br/>
                    <label for="postDesc">Description:</label>
                    <br/>
                    <textarea name="postDesc" id="blog_description" class="ckeditor form-control" placeholder="Enter description">{{ old('postDesc', $data->postDesc) }}</textarea>
                    <br/>
                    <br/>
                    <label for="postCont">Summary:</label>
                    <br/>
                    <textarea name="postCont" id="blog_summary" class="ckeditor form-control" placeholder="Enter summary">{{ old('postCont', $data->postCont) }}</textarea>
                    <br/>
                    <label for="postBanner" class="control-label">Banner: </label>
{{--                <span>In case of multiple images, the image you upload first will become the thumbnail image</span>--}}

                    <br/>
                    <input type="file" name="postBanner" id="postBanner" accept=".jpeg,.gif,.jpg,.png">
                    <br/>
                    <br/>
                    @if($data->postBanner)
                        <div class="edit_thumbmail">
                            <img src="{{ 'uploads/'.$data->postBanner }}" width="250" />
                        </div>
                    @endif
                    <br/>
                    <br/>
                    <label>Category <span class="text-danger">*</span>:</label>&nbsp; &nbsp;
                    @foreach($blog_category_array as $key=>$value)
                        <input type="checkbox" name="categoryId[]" value="{{ $key }}" id="category_{{ $key }}" 
                            {{ in_array($key, $categories_array) ? 'checked' : '' }}> 
                        <label for="category_{{ $key }}">{{ $value }}</label> &nbsp;
                    @endforeach
                    @error('categoryId')
                        <div class="alert alert-danger">{{ $errors->first('categoryId')}}</div>
                    @enderror
                    <br/>
                    <label for="postSource">Source:</label>&nbsp; &nbsp;
                    <input type="text" name="postSource" id="postSource" class="form-control col-sm-4" maxlength="150" value="{{ old('postSource', $data->postSource) }}">
                    <br/>
                    <br/>

                    <label for="postDate">News Date:</label>&nbsp; &nbsp;
                    <input type="date" name="postDate" id="postDate" class="form-control col-sm-4" value="{{ old('postDate', date('Y-m-d', strtotime($data->postDate))) }}">
                    <br/>
                </div>
                <button type="submit">Update</button>
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

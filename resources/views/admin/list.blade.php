@extends('admin.layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            @if(session()->has('success'))
            <div class="alert alert-success" id="successMessage">
                {!! session('success') !!}
            </div>
            @endif
            <h2>Blog List</h2>
            <div class="browsebtn text-right">
                <a href="{{ url('add-blog') }}">Add Blog</a>
            </div>
            <div class="row">
                <div class="col-md-12 mt-5 mx-auto p-5">
                    <div class="table-responsive">
                            <table class="table table-bordered table-striped-col data_table_list data-table" width="100%">
                                <thead>
                                    <tr>
                                        <th width="50">No</th>
                                        <th>Title</th>
                                        <th width="250">Date</th>
                                        <th width="100">Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                    </div>
                </div>
            </div>  
        </div>    
    </div>      
</div>
{{--php -d memory_limit=-1 composer.phar require yajra/laravel-datatables-oracle--}}
{{--php composer.phar COMPOSER_MEMORY_LIMIT=-1 require yajra/laravel-datatables-oracle--}}
<script type="text/javascript">
    $(function () {

        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin-blog-list') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                {data: 'postTitle', name: 'postTitle'},
                {data: 'postDate', name: 'postDate'},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ]
        });

    });
</script>

@endsection 
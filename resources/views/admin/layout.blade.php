<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="telephone=no" name="format-detection" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" type="image/png" href="{{asset('images/favicon.png')}}"/>
    <title>Intelli Consultation Admin</title>

    <!-- Styles -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
     <link href="{{ asset('css/master.css') }}" rel="stylesheet">
     <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
     <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">

    <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

</head>
<body class ="text-center">
<div class="container-fluid">
        <nav class="navbar navbar-expand-lg admin-nav">
            <a class="navbar-brand" href="#"><h1>Intelli Consultation</h1></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{!!url('/admin-blog-list')!!}">Blog <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!!url('/admin-category-list')!!}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!!url('/upload')!!}">Uploads</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!!url('/admin-user-list')!!}">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!!url('/')!!}" target="_blank">View Website</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{!!url('/logout')!!}">Logout</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <main class="py-4">
            @yield('content')
    </main>

     <!-- Scripts -->
{{--    <script src="{{ asset('js/jquery.min.js') }}" defer></script>--}}
    <script src="{{ asset('js/bootstrap.min.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">

    function deleteBlog(author_id) {
        if (author_id != "") {
            if (confirm("Are you sure want to delete ?")) {
                window.location = '{!! url("delete-blog") !!}' + "/" + author_id;
            }
        } else {
            alert("author id not found");
        }
    }

    function deleteCategory(category_id){
        if (category_id != "") {
            if (confirm("Are you sure want to delete ?")) {
                window.location = '{!! url("delete-category") !!}' + "/" + category_id;
            }
        } else {
            alert("author id not found");
        }
    }
    </script>

</body>
</html>

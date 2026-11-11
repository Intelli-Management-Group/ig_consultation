@extends('layout')
@section('content')

<?php 

// function postCat($id){

//     $categories_array = array();
//     $post_category = \App\Models\BlogPostCategory::selectRaw("catID")->where("postID",$id)->get();
//     if(count($post_category) > 0){
//         foreach ($post_category as $b){
//             $cat = \App\Models\BlogCategories::where('catID',$b->catID)->first();
//             $categories_array[$cat->catID] = $cat->catTitle;
//         }
//     }
//     return $categories_array;

// }

?>

<section class="blog-back">
           <div class="banner-back">
           </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title-text">
                        <h2>News Details</h2>
                     </div>
                  </div>
               </div>
            </div>
</section>
<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class ="col-lg-9 col-md-12 col-sm-12">
                <div class="mb-5">
                    @if($data->image != "uploads/")
                        <div class="img-container">

                            <img class="blog-img d-block m-auto w-100"src='{{asset("/$data->image")}}'>
                        </div>
                    @endif
                    <div class="d-flex justify-content-start font-weight-light mb-2">
                        <div class="d-flex justify-content-start category-right">
                            <p class="mr-2">By <span class="color-source">{{$data->postSource}}</span></p>
                            <p>{{date('F j, Y', strtotime($data->postDate))}}</p>
                        </div>
                        <div class="color-sand">
                            @php
                                $count = 0;
                            @endphp
                            @foreach(postCat($data->postID) as $cat)
                                @if($count == 0)
                                    {{ $cat }}
                                @else
                                    {{ " / ". $cat }}
                                @endif
                                @php
                                    $count++
                                @endphp
                            @endforeach

                        </div>
                    </div>    
                    <h1 class="section-title mt-2 mb-4">{{$data->postTitle}}</h1>
                        <div class="text-left color-sand">{!! $data->postCont !!}</div>

                        <div class="text-left par-p mb-5">{!! $data->postDesc !!}</div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                @include('sidebar_news')
            </div>
        </div>
    </div>
</section>

@endsection
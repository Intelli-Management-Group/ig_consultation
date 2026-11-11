@extends('layout')
@section('content')

<section class="blog-back">
           <div class="banner-back">
           </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="title-text">
                        <h2>News</h2>
                     </div>
                  </div>
               </div>
            </div>
            
            <?php 
    
                $languageParam = explode("=" , $_SERVER['QUERY_STRING']);
                
                $language = '';
                
                if (isset($languageParam[1])){
                    
                    $language = $languageParam[1];
                    
                }
                
                else{
                    $language = 'english';
                }

                

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
</section>
<section class="blog-list">
    <div class="container">
        <div class="row">
            <div class ="col-lg-9 col-md-12 col-sm-12">
                <!--blogs-->
                <div class="blogs">
                    @if(count($data) > 0)
                        @foreach ($data as $d)
                            <div>
                                @if($d->postBanner != "" )
                                    <div class="img-container">
                                        <img class="d-block w-100 img-responsive" src="{{asset('uploads/'.$d->postBanner)}}">
                                    </div>
                                @endif
                                <div class="d-flex justify-content-start mb-1 font-weight-light">
                                    <div class="d-flex justify-content-start category-right">
                                        <p class="mr-2">By <span class="color-source">{{$d->postSource}}</span></p>
                                        <p>{{date('F j, Y', strtotime($d->postDate))}}</p>
                                    </div>
                                    <div class="color-sand">
                                        @php
                                        $count = 0;
                                        @endphp
                                        @foreach(postCat($d->postID) as $cat)
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
                                    <h1 class="section-title mt-2 mb-3 blog-main-title"><a href="{{ URL('/News-details/'.$d->postID ) .'?'. http_build_query(['language' => $language]) }}" class="section-title-link">{{$d->postTitle}}</a></h1>
                                <div class="text-left par-p mb-3">{!! $d->postCont !!}</div>
{{--                                <a href="{{ URL('/News-details/'.$d->postID )}}" class="mt-4 d-block">--}}
{{--                                    <button type="button" class="register-button">Read More</button>--}}
{{--                                </a>--}}
                            </div>
                            <hr class="my-5">
                        @endforeach
                    @endif

                </div>

            </div>
            <div class="col-lg-3 col-md-12 col-sm-12 ">
                @include('sidebar_news')
            </div>
    </div>
</section>
@endsection
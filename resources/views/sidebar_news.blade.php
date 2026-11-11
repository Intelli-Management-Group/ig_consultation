    <?php 
    
        $languageParam = explode("=" , $_SERVER['QUERY_STRING']);
        
        $language = '';
        
        if (isset($languageParam[1])){
            
            $language = $languageParam[1];
            
        }
        
        else{
            $language = 'english';
        }

        // function latestNews(){
        //     $latest = \App\Models\BlogPostSeo::orderByDesc('postDate')->limit(3)->get();
        //     return $latest;
        // }
    
    ?>

<div class="blog-wrap-right">
    {{--    <div class="banner">--}}
    {{--        <h4>Solutions based on your assessment results and needs. Talk to our team of friendly professionals now and tailor a solution suited for you.</h4>--}}
    {{--        <a class="contact-link"  href="{!!url('/contactus')!!}">Free Consultation</a>--}}
    {{--    </div>--}}

    <div class="category">
        <h4 class="font-head">{{ ( $language == 'english' || $language == '' ) ? 'Latest News' : '最新消息' }}</h4>
        <div class="line-red-2 ml-0"></div>
        @php
            $latest = latestNews();
        @endphp
        @foreach ($latest as $l)
            <div class="latest-posts-item d-flex">
                @if($l->postBanner != "")
                    <div class="w-25 sidebar-thumbnail">
                        <img class="thumbnail-img" src='{{asset('uploads/'.$l->postBanner)}}' alt="{{$l->postSlug}}">
                    </div>
                @endif
                <div class="latest-post-text">
                    <h5 class="sidebar-title"><a href="{{ URL('/News-details/'.$l->postID ) .'?'. http_build_query(['language' => $language]) }}">{{$l->postTitle}}</a></h5>
                    
                    <h6>By <span class="color-source">{{$l->postSource}} </span>{{date('F j, Y', strtotime($l->postDate))}}</h6>
                </div>
            </div>
            <hr/>
        @endforeach
    </div>

    <div class="category space-60">
        <h4 class="font-head">{{ ( $language == 'english' || $language == '' ) ? 'News Categories' : '新聞類別' }}</h4>
        <div class="line-red-2 ml-0"></div>
        <ul>
            @php
                $blog_category = \App\Models\BlogCategories::all();
            @endphp
            @foreach($blog_category as $bcat)
            
                <li><a href="{{ URL('/News-category/'.$bcat->catID ) .'?'. http_build_query(['language' => $language]) }}">{!!$bcat->catTitle!!}</a></li>
            @endforeach
        </ul>
    </div>
</div>
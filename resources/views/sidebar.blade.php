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
        <h4 class="font-head">{{ $language == 'english' || $language == '' ? 'Latest News' : '最新消息' }}</h4>
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
                    <h5><a href="{{ URL('/News-details/'.$l->postID ) .'?'. http_build_query(['language' => $language]) }}">{{$l->postTitle}}</a></h5>
                    
                    <h6>By <span class="color-source">{{$l->postSource}} </span>{{date('F j, Y', strtotime($l->postDate))}}</h6>
                </div>
            </div>
            <hr/>
        @endforeach
    </div>
    <div class="category space-60">
        <h4 class="font-head">{{ $language == 'english' || $language == '' ? 'Other Services' : '其他服務' }}</h4>
        <div class="line-red-2 ml-0"></div>
        <ul>
            <li><a href="{{ url('/Services-express_entry') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Express Entry' : '快速入境' }}</a></li>
            <li><a href="{{ url('/Services-LMIA') .'?'. http_build_query(['language' => $language]) }}">LMIA</a></li>
            <li><a href="{{ url('/Services-PNP') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'PNP' : '省提名移民' }}</a></li>
            <li><a href="{{ url('/Services-startup_visa') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Start Up Visa' : '创业移民' }}</a></li>
            <li><a href="{{ url('/Services-caregiver') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Caregiver' : '护理人员移民' }}</a></li>
            <li><a href="{{ url('/Services-workpermit') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Work Permit' : '工作许可' }}</a></li>
            <li><a href="{{ url('/Services-studypermit') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Study Permit' : '留学签证' }}</a></li>
            <li><a href="{{ url('/Services-visitorvisa') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Visitor Visa' : '旅游签证' }}</a></li>
            <li><a href="{{ url('/Services-family_sponsor') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Family Sponsorship' : '家庭团聚移民' }}</a></li>
            <li><a href="{{ url('/Services-prcard') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'PR Card' : 'PR 申请' }}</a></li>
            <li><a href="{{ url('/Services-citizenship') .'?'. http_build_query(['language' => $language]) }}">{{ $language == 'english' || $language == '' ? 'Citizenship Application' : '入籍申請' }}</a></li>
        </ul>
    </div>

{{--    <div class="categories space-60">--}}
{{--        <h4 class="font-head">News Categories</h4>--}}
{{--        <div class="line-red-2 normal-line"></div>--}}
{{--        <div class="tag-wrap d-flex justify-content-start flex-wrap">--}}
{{--            @php--}}
{{--                $blog_category = getCategory();--}}
{{--            @endphp--}}
{{--            <a id="allcoupon" class ="tag-button" href="#" onclick="javascript:getCategoryWiseBlog('all')">All <span class="sr-only">(current)</span></a>--}}
{{--            @foreach($blog_category as $bcat)--}}
{{--                <a class="tag-button" href="{!!url('/News-category/'.$bcat->catID)!!}">{!!$bcat->catTitle!!}</a>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
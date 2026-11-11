@if(count($data)!="")
    @foreach ($data as $d)
                    <div class="mb-5">
{{--                    @if(count($d->image)>1)--}}
{{--                            @foreach($d->image as $key=> $banner)--}}
{{--                                @if($d->image[0] != "uploads/")--}}
{{--                                    <img class="d-block w-100 img-responsive" src="{{asset($d->image[0])}}">--}}
{{--                                @endif--}}
{{--                            @endforeach--}}


{{--                        <div id="{{$d->postSlug}}" class="carousel slide carousel-fade" data-ride="carousel">--}}

{{--                            <!-- Indicators -->--}}
{{--                            <ol class="carousel-indicators">--}}
{{--                                @foreach( $d->image as $banner )--}}
{{--                                    <li data-target="#{{$d->postSlug}}" data-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}"></li>--}}
{{--                                @endforeach--}}
{{--                            </ol>--}}

{{--                            <!-- Wrapper for slides -->--}}
{{--                            <div class="carousel-inner " role="listbox">--}}
{{--                                @foreach( $d->image as $banner )--}}
{{--                                    <div class="carousel-item {{ $loop->first ? ' active' : '' }}" >--}}
{{--                                        <img src="{{ $banner }}" alt="{{$d->postTitle}}" class="w-100">--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}

{{--                            <!-- Controls -->--}}
{{--                            <a class="carousel-control-prev" href="#{{$d->postSlug}}" role="button" data-slide="prev">--}}
{{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
{{--                                <span class="sr-only">Previous</span>--}}
{{--                            </a>--}}
{{--                            <a class="carousel-control-next" href="#{{$d->postSlug}}" role="button" data-slide="next">--}}
{{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
{{--                                <span class="sr-only">Next</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        @endif--}}

                        @if(count($d->image)===1 )
                            @foreach($d->image as $key=> $banner)
                                @if($banner != "uploads/")
                                    <img class="d-block w-100 img-responsive" src="{{asset($banner)}}">       
                                @endif    
                            @endforeach
                        @endif
                        <div class="d-flex justify-content-start mt-3">
                            <div class="d-flex justify-content-start category-right">
                                <p class="mr-2">By <span class="color-source">Admin</span></p>
                                <p>{{date('F, Y', strtotime($d->postDate))}}</p>
                            </div>
                            <div class="color-sand">{{$d->categoryName}}</div>
                        </div>
                        <h1 class="mb-3">{{$d->postTitle}}</h1>
                        <p class="text-left mb-3">{!! $d->postCont !!}</p>
                        <a href="{{ URL('/News-details/'.$d->postID )}}">
                            <button type="button" class="btn btn-outline-dark rounded-0">Read More</button>
                        </a>
                    </div>
                    <hr>
    @endforeach
@endif
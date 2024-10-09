@extends('layouts.main')
@section('content')
<div class="section pt-5 pb-0">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="heading">Trending Blogs</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">

                <div class="posts-slide-wrap">
                    <div class="posts-slide" id="posts-slide">
                        @foreach ($blogs as $blog)
                        <div class="item">
                            <div class="post-entry d-lg-flex">
                                <div class="me-lg-5 thumbnail mb-4 mb-lg-0">
                                    <a href="{{route('blog.details', ['slug' => $blog->slug])}}">
                                        @php
                                        $images = json_decode($blog->images, true);
                                        $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                                        @endphp
                                        <img src="{{ asset('' . $firstImage) }}" alt="Image" class="img-fluid" style="width: 300px; height: 200px; object-fit: cover;">
                                    </a>
                                </div>
                                <div class="content align-self-center">
                                    <div class="post-meta mb-3">
                                        <a href="#" class="category">{{ $categories->where('id', $blog->category)->first()->name }}</a> —
                                        <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>
                                    </div>
                                    <h2 class="heading"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{ $blog->title }}</a></h2>
                                    <p>{{ $blog->description }}</p>
                                    <p>{{ Str::limit($blog->content, 200) }}</p>
                                    <a href="" class="post-author d-flex align-items-center">
                                        <div class="author-pic d-flex">
                                            @php
                                            $images = json_decode($blog->images, true);
                                            @endphp
                                            @foreach ($images as $image)
                                            <img src="{{ asset('' . $image) }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover; margin-right: 5px;">
                                            @endforeach
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <!-- END .item -->


                    </div>
                </div>

            </div>

        </div>
    </div>
</div>


<div class="section">
    <div class="container">
        <div class="row g-5">
            @foreach ($blogs as $blog)
            <div class="col-lg-4">
                <div class="post-entry d-block small-post-entry-v">
                    <div class="thumbnail">
                        <a href="">
                            @php
                            $images = json_decode($blog->images, true);
                            $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                            @endphp
                            <img src="{{ asset('' . $firstImage) }}" alt="Image" class="img-fluid w-100">
                        </a>
                    </div>
                    <div class="content">
                        <div class="post-meta mb-1">
                            <a href="#" class="category">{{ $categories->where('id', $blog->category)->first()->name }}</a> —
                            <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>

                        </div>
                        <h2 class="heading mb-3"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{ $blog->title }}</a></h2>
                        <p>{{ $blog->description }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="section">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="heading">Latest Blogs</h2>
            </div>
        </div>
    </div>

    <div class="most-popular-slider-wrap px-3 px-md-0">

        <div id="most-popular-nav">
            <span class="prev" data-controls="prev">Prev</span>
            <span class="next" data-controls="next">Next</span>
        </div>
        <div class="most-popular-slider" id="most-popular-center">
            @foreach ($blogs as $blog)
            <div class="item">
                <div class="post-entry d-block small-post-entry-v">
                    <div class="thumbnail">
                        <a href="">
                            @php
                            $images = json_decode($blog->images, true);
                            $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                            @endphp
                            <img src="{{ asset('' . $firstImage) }}" alt="Image" class="img-fluid" style="width: 100%; height: 200px; object-fit: cover;">
                        </a>
                    </div>
                    <div class="content">
                        <div class="post-meta mb-1">
                            <a href="#" class="category">Business</a>, <a href="#" class="category">Travel</a> —
                            <span class="date">July 2, 2020</span>
                        </div>
                        <h2 class="heading mb-3"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>
                        <p>{{$blog->description}}</p>
                        <a href="#" class="post-author d-flex align-items-center">
                            <div class="author-pic">
                                <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image" style="width: 50px; height: 50px; object-fit: cover;">
                            </div>
                            <div class="text">
                                <strong>Sergy Campbell</strong>
                                <span>CEO and Founder</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</div>





<div class="section">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="h4 fw-bold">Sports</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-12">
                        <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                            <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                @php
                                $images = json_decode($blog->images, true);
                                $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                                @endphp
                                <img src="{{ asset( $firstImage) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="content">
                                <div class="post-meta mb-1">
                                    <a href="#" class="category">{{ $categories->where('id', $blog->category)->first()->name }}</a>
                                    <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>

                                </div>
                                <h2 class="heading"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>

                                <a href="#" class="post-author d-flex align-items-center">
                                    <div class="author-pic">
                                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="text">
                                        <strong>Sergy Campbell</strong>
                                        <span>Author, 26 published post</span>
                                    </div>

                                </a>


                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row mb-4">
                    <div class="col-12">
                        <h2 class="h4 fw-bold">Business</h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    @foreach ($blogs as $blog)
                    <div class="col-lg-12">
                        <div class="post-entry d-md-flex xsmall-horizontal mb-5">
                            <div class="me-md-3 thumbnail mb-3 mb-md-0">
                                @php
                                $images = json_decode($blog->images, true);
                                $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                                @endphp
                                <img src="{{ asset( $firstImage) }}" alt="Image" class="img-fluid">
                            </div>
                            <div class="content">
                                <div class="post-meta mb-1">
                                    <a href="#" class="category">{{ $categories->where('id', $blog->category)->first()->name }}</a>
                                    <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>

                                </div>
                                <h2 class="heading"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>

                                <a href="#" class="post-author d-flex align-items-center">
                                    <div class="author-pic">
                                        <img src="{{ asset('assets/images/person_1.jpg') }}" alt="Image">
                                    </div>
                                    <div class="text">
                                        <strong>Sergy Campbell</strong>
                                        <span>Author, 26 published post</span>
                                    </div>

                                </a>


                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
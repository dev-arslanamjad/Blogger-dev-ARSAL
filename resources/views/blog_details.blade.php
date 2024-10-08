@extends('layouts.main')
@section('content')
<div class="section post-section pt-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <!-- <div class="text-center">
                    <img src="images/person_1.jpg" alt="Image" class="author-pic img-fluid rounded-circle mx-auto">
                </div> -->
                <span class="d-block text-center"></span>

                <span class="date d-block text-center small text-uppercase text-black-50 mb-5">{{ $blog->created_at->format('d-m-y') }}</span>
                <h2 class="heading text-center">{{$blog->title}}</h2>
                <p class="lead mb-4 text-center">{{$blog->description}}</p>
                @php
                $images = json_decode($blog->images, true);
                $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                @endphp
                <img src="{{ asset('' . $firstImage) }}" alt="Image" class="img-fluid rounded mb-4">


                <p>{{$blog->content}}</p>

                <blockquote>
                    <p>{{$blog->description}}</p>
                </blockquote>
                <div class="row g-1 my-5">

                    @foreach(json_decode($blog->images, true) as $image)
                    <div class="col-lg-4 mb-3">
                        <a href="{{ asset($image) }}" class="glightbox">
                            <img src="{{ asset($image) }}" alt="Image" class="img-fluid rounded">
                        </a>
                    </div>
                    @endforeach


                </div>

                <!-- <p>
                    Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>

                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.
                </p> -->

                <div class="row mt-5 pt-5 border-top">
                    <div class="col-12">
                        <span class="fw-bold text-black small mb-1">Share</span>
                        <ul class="social list-unstyled">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                        </ul>
                    </div>
                </div>

            </div>


        </div>





    </div>
</div>



<div class="section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="heading">You May Also Like </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($randomblogs as $blog)


            <div class="col-lg-12">
                <div class="post-entry d-md-flex small-horizontal mb-5">
                    <div class="me-md-5 thumbnail mb-3 mb-md-0">
                        @php
                        $images = json_decode($blog->images, true);
                        $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                        @endphp
                        <img src="{{ asset('' . $firstImage) }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="content">
                        <div class="post-meta mb-3">
                            <a href="#" class="category"></a>
                            <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>

                        </div>
                        <h2 class="heading"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{ $blog->title }}</a></h2>
                        <p>{{ Str::limit($blog->content, 220) }}</p>

                        <!-- <a href="#" class="post-author d-flex align-items-center">
                            <div class="author-pic">
                                <img src="images/person_1.jpg" alt="Image">
                            </div>
                            <div class="text">
                                <strong>Sergy Campbell</strong>
                                <span>Author, 26 published post</span>
                            </div>

                        </a> -->


                    </div>
                </div>
            </div>
            @endforeach



        </div>
    </div>
</div>
@endsection
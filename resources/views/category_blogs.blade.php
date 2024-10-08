@extends('layouts.main')
@section('content')
<div class="section pt-5 pb-0">
    <div class="container">
        <div class="row mb-5 justify-content-center">
            <div class="col-lg-9">
                <span class="fw-normal text-uppercase d-block mb-1">Categories</span>
                <h2 class="heading">'{{$category->name}}'</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-lg-9">
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
                            <a href="#" class="category">{{ $categories->where('id', $blog->category)->first()->name }}</a>
                            <span class="date">{{ $blog->created_at->format('d-m-y') }}</span>

                        </div>
                        <h2 class="heading"><a href="{{route('blog.details', ['slug' => $blog->slug])}}">{{$blog->title}}</a></h2>
                        <p>{{$blog->description}}</p>

                        <!-- <a href="#" class="post-author d-flex align-items-center">
                            <div class="author-pic">
                                <img src="" alt="Image">
                            </div>
                            <!-- <div class="text">
                                <strong>Sergy Campbell</strong>
                                <span>Author, 26 published post</span>
                            </div> -->

                        </a> -->


                    </div>
                </div>
            </div>
            @endforeach


        </div>

        <!-- <div class="row align-items-center justify-content-center py-5">
            <div class="col-lg-6 text-center">
                <div class="custom-pagination">
                    <a href="#">1</a>
                    <a href="#" class="active">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                </div>
            </div>
        </div> -->

    </div>
</div>
@endsection
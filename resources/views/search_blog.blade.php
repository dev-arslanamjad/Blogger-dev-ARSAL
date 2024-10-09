@extends('layouts.main')
@section('content')
@foreach ($blogs as $blog)
<div class="container-fluid">
    <div class="container">
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-4">
                    @php
                    $images = json_decode($blog->images, true);
                    $firstImage = isset($images[0]) ? $images[0] : 'default.jpg';
                    @endphp
                    @if($firstImage)
                    <img src="{{ asset( $firstImage) }}" class="img-fluid rounded-start" alt="{{ $blog->title }}">
                    @endif
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><b>{{ $blog->title }}</b></h5>
                        <p class="card-text">{{ Str::limit($blog->content, 150) }}</p>
                        <div class="text-center">
                            <a href="{{route('blog.details', ['slug' => $blog->slug])}}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
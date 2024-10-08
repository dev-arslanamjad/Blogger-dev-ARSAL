@extends('layouts.admin')
@section('content')
<section>
    <div class="container-fluid mt-2">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            @endif
            <div class="d-flex justify-content-end mb-3">
                <button class="btn btn-primary" data-toggle="modal" data-target="#addBlogModal">Add New Blog</button>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial NO.</th>
                            <th>Title</th>
                            <th>Image</th>
                            <!-- <th>Created At</th> -->
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($blogs as $blog)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><b>{{ $blog->title }}</b></td>
                            <td>
                                @if (!empty(json_decode($blog->images)))
                                <img src="{{ asset(json_decode($blog->images)[0]) }}" alt="{{ $blog->title }}" class="img-fluid" style="max-width: 60px;">
                                @else
                                No image available
                                @endif
                            </td>
                            <!-- <td>{{ $blog->created_at->format('d-m-y') }}</td> -->
                            <td>
                                <a href="" class="btn btn-sm btn-primary mb-1">Edit</a>
                                <button type="button" class="btn btn-sm btn-danger delete-blog mb-1" data-id="{{ $blog->id }}">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogModalLabel">Add New Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addBlogForm" action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"><b>Title</b></label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">Enter the title of the blog.</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        <small id="descriptionHelp" class="form-text text-muted">Enter a Short Description of the blog.</small>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea class="form-control" id="content" name="content" rows="3"></textarea>
                        <small id="contentHelp" class="form-text text-muted">Enter the content of the blog.</small>
                    </div>

                    <div class="form-group">
                        <label for="images">Images</label>
                        <input type="file" class="form-control-file" id="images" name="images[]" multiple>
                        <small id="imagesHelp" class="form-text text-muted">Upload images for the blog.</small>
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" form="addBlogForm" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $('.delete-blog').on('click', function() {
            var blogId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: '/admin/blog/delete',
                        type: 'POST',
                        data: {
                            id: blogId,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire(
                                'Deleted!',
                                'Your blog has been deleted.',
                                'success'
                            ).then(() => {
                                location.reload();
                            });
                        },
                        error: function(xhr) {
                            Swal.fire(
                                'Error!',
                                'There was an error deleting the blog.',
                                'error'
                            );
                        }
                    });
                }
            });
        });
    });
</script>
@endpush
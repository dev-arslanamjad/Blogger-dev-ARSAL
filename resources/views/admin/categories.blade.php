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
            <div style="display: flex; justify-content: flex-end;">
                <button class="btn btn-primary" style="margin-left: auto;" data-toggle="modal" data-target="#addBlogModal">Add Category</button>
            </div>
        </div>
    </div>
</section>	
<div class="modal fade" id="addBlogModal" tabindex="-1" role="dialog" aria-labelledby="addBlogModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addBlogModalLabel">Add New Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="addBlogForm" action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="title"><b>Name</b></label>
                        <input type="text" class="form-control" id="title" name="name" placeholder="Enter title">
                        <small id="titleHelp" class="form-text text-muted">Enter the title of the Category.</small>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="Enter Description">
                        <small id="descriptionHelp" class="form-text text-muted">Enter a Short Description of the Category.</small>
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
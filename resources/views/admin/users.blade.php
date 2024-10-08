@extends('layouts.admin')
@section('content')
<section>
    <div class="container-fluid">
        <div class="container">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Serial NO.</th>
                            <th>Title</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><b>{{ $user->name }}</b></td>
                            <td><b>{{ $user->email }}</b></td>
                            <td><div class="badge badge-success">{{$user->role}}</div></td>
                            <td>
                                <div class="d-flex flex-wrap gap-2">
                                    <a href="" class="btn btn-sm btn-primary">Edit</a>
                                    <button type="button" class="btn btn-sm btn-danger delete-blog" data-id="{{ $user->id }}">Delete</button>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endsection
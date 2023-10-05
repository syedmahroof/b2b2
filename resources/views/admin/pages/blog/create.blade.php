@extends('admin.layouts.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pb-0">
                <div class="d-flex align-items-center">
                    <p class="mb-0">Add Blog Post</p>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-primary btn-sm ms-auto">Back to Blogs</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.blogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <p class="text-uppercase text-sm">Blog Post Information</p>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title" class="form-control-label">Title</label>
                                <input class="form-control" type="text" name="title" id="title" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="image" class="form-control-label">Image</label>
                                <input class="form-control" type="file" name="image" id="image" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="content" class="form-control-label">Content</label>
                                <textarea class="form-control" name="content" id="content" rows="6" required></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Add Blog Post</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('admin.layouts.master') <!-- Extending the master.blade.php template -->
@section('content')
<div class="row align-items-center py-4">
    <div class="col-lg-6 col-5 text-right">
        <a href="{{ route('admin.blogs.create') }}" class="btn btn-sm mb-0 me-1 bg-gradient-light">Add Blog</a>
    </div>
</div>
<div class="row mt-4">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header pb-0">
                <h6>Blogs</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created</th>
                                <th class="text-secondary opacity-7">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogPosts as $blog)
                            <tr>
                                <td>
                                    <div class="d-flex px-2 py-1">
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">{{ $blog->title }}</h6>
                                            <p class="text-xs text-secondary mb-0">{{ Str::limit($blog->content, 50) }}</p>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle text-center text-sm">
                                    <span class="badge badge-sm bg-gradient-success">Online</span>
                                </td>
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{ $blog->created_at->format('d/m/y') }}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm" data-toggle="tooltip" title="Edit Blog">
                                        Edit
                                    </a>
                                    <a href="{{ route('admin.blogs.show', $blog->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" title="View Blog">
                                        View
                                    </a>
                                    <form action="{{ route('admin.blogs.destroy', $blog->id) }}" method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" data-toggle="tooltip" title="Delete Blog" onclick="return confirm('Are you sure you want to delete this blog article?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

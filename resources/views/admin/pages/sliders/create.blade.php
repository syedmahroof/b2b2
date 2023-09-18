@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Add Slider</p>
                        <button class="btn btn-primary btn-sm ms-auto">Settings</button>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.sliders.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <p class="text-uppercase text-sm">Slider Information</p>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="title" class="form-control-label">Title</label>
                                    <input class="form-control" type="text" name="title" id="title" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="attachment" class="form-control-label">Attachment</label>
                                    <input class="form-control" type="file" name="attachment" id="attachment" required>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description" class="form-control-label">Description</label>
                                    <textarea class="form-control" name="description" id="description" rows="3" required></textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Add Slider</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

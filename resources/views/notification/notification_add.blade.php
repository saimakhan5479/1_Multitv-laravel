@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <div class="container-fluid my-2">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h5>Send Notification</h5>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a href="{{ route('notification.notification_show') }}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <form action="{{ route('notification.notification_submit') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title"
                                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        placeholder="title">
                                </div>
                                @error('title')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="message">Message </label>
                                    <input type="text" name="message" id="message"
                                        class="form-control {{ $errors->has('message') ? 'is-invalid' : '' }}"
                                        placeholder="message">
                                </div>
                                @error('message')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="mb-3">
                                    <label for="file">Image (optional)</label>
                                    {{--  <input type="file" name="file" id="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" placeholder="Image">  --}}
                                    <div>
                                        <input accept="image/*" type='file' name="file" id="imgInp" />
                                        <img height="90" width="90" id="blah"
                                            src="{{ asset('all_images/placeholder.jpg') }}" alt="your image" />
                                    </div>
                                </div>
                                @error('image')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2 btnn">
                            <button type="submit" class="btn btn-success btn-lg">Send</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

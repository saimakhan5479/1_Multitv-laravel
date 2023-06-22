@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid my-2">
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('feedback.feedback_store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h5>Add Livetv Feedback</h5>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a style="font-size: 0.812rem;
                                        border-radius: 15px;"
                                    href="{{ route('feedback.feedback_show') }}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email"
                                        class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        placeholder="email">
                                </div>
                                @error('email')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject"
                                        class="form-control @error('subject') is-invalid  @enderror"
                                        placeholder="Subject">
                                </div>
                                @error('subject')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="message">Message</label>
                                    <input type="text" name="message" id="message"
                                        class="form-control @error('message') is-invalid  @enderror"
                                        placeholder="Message">
                                </div>
                                @error('message')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 m-auto btnn">
                    <button type="submit" class="btn btn-md btn-block">Create</button>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->


@endsection

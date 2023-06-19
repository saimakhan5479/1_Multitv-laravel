@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <form action="{{ route('banner.banner_edit', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">

                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h5>Update Livetv Banner</h2>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a href="{{ route('content.content_show') }}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="live_tv">Livetv</label>
                                    <select name="live_tv" id="live_tv" value="{{ $data->live_tv }}" class="form-control">
                                        <option value="M Tunes HD1">M Tunes HD1</option>
                                        <option value="24News">24News</option>
                                        <option value="CNN">CNN</option>
                                        <option value="BBC">BBC</option>
                                        <option value="FilmyD">FilmyD</option>
                                        <option value="Nepal">Nepal 1</option>
                                        <option value="NTv">NTv</option>
                                        <option value="Mountain">Mountain</option>
                                        <option value="ABC">ABC</option>
                                        <option value="Image Channel">Image Channel</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="category">Title</label>
                                    <input type="text" name="title" value="{{ $data->title }}" id="title"
                                        class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}"
                                        placeholder="title">
                                </div>
                                @error('category')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid  @enderror"
                                        cols="30" rows="4">{{ $data->poster_image }}</textarea>
                                </div>
                                @error('description')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="ordering">Ordering</label>
                                    <input type="number" name="ordering" value="{{ $data->ordering }}" id="ordering"
                                        class="form-control @error('ordering') is-invalid  @enderror"
                                        placeholder="Ordering">
                                </div>
                                @error('ordering')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    {{--  <select name="status"  id="status" class="form-control">  --}}

                                    {{--  <option value="Active" {{ $data->status == "Active" ? 'selected':'' }}>Active</option>
                                            <option value="Inactive" {{ $data->status == "Inactive" ? 'selected' : '' }}>Inactive</option>  --}}
                                    <label for="status">Status</label>
                                    <div class="row toggle_btn">
                                        <label class="switch">
                                            <input type="checkbox" id="status" name="status"
                                                {{ $data->status == 'Active' ? 'checked' : '' }} value="Active"
                                                class="cbx hidden">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                    {{--  </select>  --}}
                                </div>
                            </div>
                            {{--  <div class="col-md-12">
                                    <div class="col-md-6 mb-3">
                                        <label for="old_image">Old Image:</label>
                                        <img height="90" width="90" src="{{ asset('all_images/'.$data->image) }}" alt="">
                                    </div>
                                </div>  --}}
                            <div class="row col">
                                <div class="col-sm-6 mb-3">
                                    <label for="poster_image">Poster Path</label>
                                    <div>
                                        <input type="text" name="poster_image" id="poster_image"
                                            value="{{ $data->poster_image }}"
                                            class="form-control @error('poster_image') is-invalid  @enderror"
                                            placeholder="Poster Image Link">
                                    </div>
                                </div>
                                <div class="col-sm-1" style="text-align: center;">
                                    <span for="name">OR</span>
                                </div>
                                <div class="col-sm-5 mb-3">
                                    <div class="mb-3">
                                        {{--  <label for="file">New Image</label>
                                        <input type="file" name="file" value="{{ $data->image }}" id="file"
                                            class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                            placeholder="Image">
                                    </div>
                                    @error('image')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror  --}}
                                        <input accept="image/*" type='file'name="file" value="{{ $data->image }}"
                                            id="imgInp" />
                                        <img height="90" width="90" id="blah"
                                            src="{{ asset('all_images/' . $data->image) }}"
                                            onerror="this.src='{{ asset('all_images/placeholder.jpg') }}'" alt="your image" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 m-auto btnn">
                            <button type="submit" class="btn btn-md btn-block">Save Changes</button>
                        </div>
            </form>
        </div>
        <!-- /.card -->
    </section>
@endsection

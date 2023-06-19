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
            <form action="{{ route('banner.banner_submit') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h5>Add Livetv Banner</h5>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a href="{{ route('banner.banner_show') }}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-3 mb-3">
                                    {{--  <input type="checkbox" value="Active"  name="status" id="status">  --}}
                                    <div class="row toggle_btn">
                                        <label for="status" style="margin-right: 25px;">status</label>
                                        <label class="switch">
                                            <input type="checkbox" id="status" name="status" value="Active"
                                                class="cbx hidden">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <hr>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="live_tv">Livetv</label>
                                        <select name="live_tv" id="live_tv" class="form-control">
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
                                        {{--  <input type="text" name="live_tv" id="live_tv" class="form-control {{ $errors->has('live_tv') ? 'is-invalid' : '' }}" placeholder="live_tv">  --}}
                                    </div>
                                </div>
                                <div class="col-md-12">
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
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid  @enderror"
                                            cols="30" rows="4"></textarea>
                                    </div>
                                    @error('description')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label for="ordering">Ordering</label>
                                        <input type="number" name="ordering" id="ordering"
                                            class="form-control @error('ordering') is-invalid  @enderror"
                                            placeholder="Ordering">
                                    </div>
                                    @error('ordering')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
                                </div>
                                {{--  <div class="col-md-12">
										<div class="mb-3">
											<label for="status">Status</label>
                                            <select name="status" id="status" class="form-control">

                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>

                                            </select>
										</div>
									</div>  --}}
                                <div class="row col">
                                    <div class="col-sm-6 mb-3">

                                        <label for="poster_image">Poster Path</label>
                                        <div>
                                            <input type="text" name="poster_image" id="poster_image"
                                                class="form-control @error('poster_image') is-invalid  @enderror"
                                                placeholder="Poster Image Link">
                                        </div>
                                    </div>
                                    <div class="col-sm-1" style="text-align: center;">
                                        <span for="name">OR</span>
                                    </div>
                                    <div class="col-sm-5 mb-3">
                                        <div>
                                            {{--  <input type="file" name="file" id="file" class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}" placeholder="Image">  --}}
                                            <input accept="image/*" type='file' name="file" id="imgInp" />
                                            <img height="90" width="90" id="blah"
                                                src="{{ asset('all_images/placeholder.jpg') }}" alt="your image" />
                                        </div>
                                        @error('image')
                                            <p class="invalid-feedback">{{ $message }}</p>
                                        @enderror
                                    </div>
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

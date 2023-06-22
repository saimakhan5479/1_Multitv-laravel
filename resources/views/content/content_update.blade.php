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
            <form action="{{ route('content.content_edit', $data->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h5>Update Livetv Content </h5>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a href="{{ route('content.content_show') }}" class="btn btn-success">Back</a>
                            </div>
                        </div>
                        <hr>
                        <div class="container">
                            <div class="row">
                                <div class="col-3 mb-3">
                                    <div class="row toggle_btn">
                                        <label for="status" style="margin-right: 25px;">status</label>
                                        <label class="switch">
                                            <input type="checkbox" id="status" name="status"
                                                {{ $data->status == 'Active' ? 'checked' : '' }} value="Active"
                                                class="cbx hidden">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-3 mb-3">
                                    {{--  <input type="checkbox" name="live"{{ $data->live == '1' ? 'checked':'' }} value="1" id="live">  --}}
                                    <div class="row toggle_btn">
                                        <label style="margin-right: 25px;" for="live">Live</label>
                                        <label class="switch">
                                            <input type="checkbox" id="live" name="live"
                                                {{ $data->live == '1' ? 'checked' : '' }} value="1"
                                                class="cbx hidden">
                                            <span class="slider round"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ $data->name }}" id="name"
                                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        placeholder="Name">
                                </div>
                                @error('name')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <label for="category">Category</label>
                                <select name="category" id="category"
                                                class="form-control {{ $errors->has('category') ? 'is-invalid' : '' }}">
                                                <option>---Select Your Category---</option>
                                                @foreach ($categories as $category)
                                                    <option value="{{ $category->id }}" {{ $category->id == $data->category_id ? 'selected' :''}}>{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                @error('category')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="overview">Overview</label>
                                    <textarea name="overview" id="overview" class="form-control @error('overview') is-invalid  @enderror" cols="30"
                                        rows="4">{{ $data->overview }}</textarea>
                                </div>
                                @error('overview')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" id="link" value="{{ $data->link }}"
                                        class="form-control @error('link') is-invalid  @enderror" placeholder="Link">
                                </div>
                                @error('link')
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
                                <div class="col-sm-5">
                                    <div>
                                        {{--  <label for="old_image">Old Image:</label>
                                    <img height="90" width="90" src="{{ asset('all_images/'.$data->image) }}" alt="">  --}}
                                        <input accept="image/*" type='file'name="file"
                                            value="{{ $data->image }}" id="imgInp" />
                                        <img height="90" width="90" id="blah"
                                            src="{{ asset('all_images/' . $data->image) }}"
                                            onerror="this.src='{{ asset('all_images/placeholder.jpg') }}'" alt="your image" />
                                    </div>
                                </div>
                            </div>
                            {{--  <div class="col-md-12">
                                <div class="col-md-6 mb-3">
                                    <label for="file">New Image</label>
                                    <input type="file" name="file" value="{{ $data->image }}" id="file"
                                        class="form-control {{ $errors->has('image') ? 'is-invalid' : '' }}"
                                        placeholder="Image">
                                </div>
                                @error('image')
                                    <p class="invalid-feedback">{{ $message }}</p>
                                @enderror
                            </div>  --}}
                        </div>
                    </div>
                    <div class="col-md-4 m-auto btnn">
                        <button type="submit" class="btn btn-success btn-md btn-block">Save Changes</button>
                    </div>
                </div>
        </div>
        </form>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

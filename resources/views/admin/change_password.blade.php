

@extends('admin.layouts.app')


@section('content')

<section class="content-header">
    <div class="container-fluid my-2">

    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">


<!-- Content Header (Page header) -->

<div class="container ">
    <!-- /.login-logo -->
    <div class="card card-outline card-primary col-4 m-auto">
          <div class="card-header text-center">
            <a href="#" class="h3">Change Password Page</a>
          </div>
          <div class="card-body">

            @if(count($errors))
            @foreach($errors->all() as $error )
<p class="alert alert-danger alert-dismissible fade show">{{ $error }}</p>
            @endforeach
            @endif

            <form action=" {{route('update.password')}} " method="POST">
                @csrf
                  <div class="input-group col-12 mb-3">
                    <input type="email" value="{{ Auth::guard('admin')->user()->email }}" readonly="" name="email" class="form-control @error('email') is-invalid

                    @enderror" placeholder="Email">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                          </div>
                    </div>
                </div>
                    @error('email')
                    <p class="Invalid-feedback">{{ $message }}</p>

                    @enderror


            {{--
                <div class="input-group col-12  mb-3">
                    <input type="password" name="old_password" id="old_password" class="form-control" placeholder="current_password">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                    </div>
                </div> --}}
                <div class="input-group col-12  mb-3">
                    <input type="password" name="new_password" id="new_password" class="form-control" placeholder="new_password">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                    </div>
                </div>
                <div class="input-group col-12  mb-3">
                    <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="confirm_password">
                    <div class="input-group-append">
                          <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                          </div>
                    </div>
                </div>



                  <div class="row">
                    <!-- <div class="col-8">
                          <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                  Remember Me
                            </label>
                          </div>
                    </div> -->
                    <!-- /.col -->
                    <div class="col-4">
                          <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    <!-- /.col -->
                  </div>
            </form>
          </div>
          <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

</section>




      @endsection




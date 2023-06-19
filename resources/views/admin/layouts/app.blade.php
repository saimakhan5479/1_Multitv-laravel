<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>{{ config('app.name') }}</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{ asset('admin_assets/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Theme style -->
		<link rel="stylesheet" href="{{ asset('admin_assets/css/adminlte.min.css')}}">
		<link rel="stylesheet" href="{{ asset('admin_assets/css/custom.css')}}">


        {{--  toastr  --}}
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css"
     href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


    {{--  datatables  --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">


    <style>
        .invalid-feedback{
            display: inline-block;
            width: 100%;
            margin-top: 0.25rem;
            font-size: 80%;
            color: #dc3545
        }
    </style>
	</head>
	<body class="hold-transition sidebar-mini">
		<!-- Site wrapper -->
		<div class="wrapper">
			<!-- Navbar -->
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<!-- Right navbar links -->
				<ul class="navbar-nav">
					<li class="nav-item">
					  	<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
				</ul>
				<div class="navbar-nav pl-2">
					<!-- <ol class="breadcrumb p-0 m-0 bg-white">
						<li class="breadcrumb-item active">Dashboard</li>
					</ol> -->
				</div>

				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" data-widget="fullscreen" href="#" role="button">
							<i class="fas fa-expand-arrows-alt"></i>
						</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link p-0 pr-3" data-toggle="dropdown" href="#">
							<img src="{{ asset('admin_assets/img/avatar5.png')}}" class='img-circle elevation-2' width="40" height="40" >
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-3">
							<h4 class="h4 mb-0"><strong>{{Auth::guard('admin')->user()->name}}</strong></h4>
							<div class="mb-3">{{Auth::guard('admin')->user()->email}}</div>

							<div class="dropdown-divider"></div>
							<a href="{{ route('change.password') }}" class="dropdown-item">
								<i class="fas fa-lock mr-2"></i> Change Password
							</a>
							<div class="dropdown-divider"></div>
							<a href="{{ route('admin.logout') }}" class="dropdown-item text-danger">
								<i class="fas fa-sign-out-alt mr-2"></i> Logout
							</a>
						</div>
					</li>
				</ul>
			</nav>
			<!-- /.navbar -->
			<!-- Main Sidebar Container -->



@include('admin.layouts.sidebar')


			<!-- Content Wrapper. Contains page content -->
			<div class="content-wrapper">


@yield('content')






			</div>
			<!-- /.content-wrapper -->
			<footer class="main-footer">

				<strong>Copyright &copy; 2023-2024 DcodaX.
			</footer>

		</div>
		<!-- ./wrapper -->
		<!-- jQuery -->
		<script src="{{ asset('admin_assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('admin_assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset('admin_assets/js/adminlte.min.js')}}"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="{{ asset('admin_assets/js/demo.js')}}"></script>



{{--  /totastr  --}}

        <script>
            @if(Session::has('message'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.success("{{ session('message') }}");
            @endif

            @if(Session::has('error'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.error("{{ session('error') }}");
            @endif

            @if(Session::has('info'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.info("{{ session('info') }}");
            @endif

            @if(Session::has('warning'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
                    toastr.warning("{{ session('warning') }}");
            @endif
           {{--   @if(Session::has('errors'))

            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true
            }
            @foreach(session('errors')->all() as $error)
                 toastr.error("{{ $error }}");
            @endforeach
            @endif--}}
          </script>
{{--  datatables  --}}

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>

  {{--  $(document).ready(function() {
    $('#myTable').DataTable();
  });  --}}

  $(document).ready(function() {
    $('#myTable').DataTable({
      "paging": true,
      "pageLength": 10,
      "ordering": true
    });
  });



  {{--  $(document).ready(function() {
    $('#myTable').DataTable({
      "paging": true,
      "pageLength": 10,
      "ordering": true,
      "ajax": "data.json" // URL to your JSON file
    });
  });  --}}
</script>
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
          blah.src = URL.createObjectURL(file)
        }
      }
</script>
<style>
    .switch {
      position: relative;
      display: inline-block;
      width: 40px;
      height: 20px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 16px;
      width: 16px;
      left: 3px;
      bottom: 2px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #3CB080;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #3CB080;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(18px);
      -ms-transform: translateX(18px);
      transform: translateX(18px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }
    .banner_ad_item{
        display: flex;
        justify-content: space-between;
    }
    </style>

    {{--  Toggle Buttons  --}}



        @yield('customjs')
	</body>
</html>

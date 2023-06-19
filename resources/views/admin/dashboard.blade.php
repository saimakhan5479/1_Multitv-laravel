@extends('admin.layouts.app')

@section('content')
    <!-- Content Header (Page header) -->

    <section class="content-header">
        <div class="container-fluid my-2">

        </div>
        <!-- /.container-fluid -->
    </section>



    <section class="content">
        <!-- Default box -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-md-12 grid-margin transparent">

                            <div class="col-md-3 mb-4 stretch-card transparent">
                                    <div class="card-body" style="color:white; background-color: #3CB080; font-size:1.0rem;
                                    border-radius: 15px;">
                                        <p class="mb-4">Live TV</p>
                                        <h2>{{ $count }} </h2>
                                    </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>
@endsection

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
            <div class="card">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h5>Notification List</h5>
                    </div>
                    <div class="col-sm-6 text-right a_btnn">
                        <a href="{{ route('notification.notification_add') }}" class="pull-right btn btn-success btn-lg"><i
                                class="fa fa-plus"></i> Add New</a>
                    </div>
                </div>

                <hr>
                {{--  <div class="card-header">
								<div class="card-tools">
									<div class="input-group input-group" style="width: 250px;">
										<input type="text" name="table_search" class="form-control float-right" placeholder="Search">

										<div class="input-group-append">
										  <button type="submit" class="btn btn-default">
											<i class="fas fa-search"></i>
										  </button>
										</div>
									  </div>
								</div>
							</div>  --}}
                <div class="card-body table-responsive p-0">
                    <table id="myTable"
                        class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer"
                        style="width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Message
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Title</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Image</th>
                                <th width="100">Actions</th>
                                <th>Send Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->message }}</td>
                                    <td>{{ $d->title }}</td>
                                    <td><img height="150" width="100" src="{{ asset('all_images/' . $d->image) }}"
                                            onerror="this.src='{{ asset('all_images/placeholder.jpg') }}'" alt="">
                                    </td>
                                    <td>
                                        <a href="{{ route('notification.notification_delete', $d->id) }}"><button
                                                onclick="if(!confirm('Are you sure you want to delete ?')) return false;"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></button></a>

                                    </td>
                                    <td>{{ $d->send_date }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{--  <div class="card-footer clearfix">
								<ul class="pagination pagination m-0 float-right">
								  <li class="page-item"><a class="page-link" href="#">«</a></li>
								  <li class="page-item"><a class="page-link" href="#">1</a></li>
								  <li class="page-item"><a class="page-link" href="#">2</a></li>
								  <li class="page-item"><a class="page-link" href="#">3</a></li>
								  <li class="page-item"><a class="page-link" href="#">»</a></li>
								</ul>
							</div>  --}}
            </div>
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
@endsection

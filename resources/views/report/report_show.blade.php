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
                    <div class="container-fluid my-2">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h4>Streaming Report</h4>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer"
                        style="width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                            <tr>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Livetv
                                    Name</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Total
                                    Number of Reports</th>
                                <th width="100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->live_tv_name }}</td>
                                    <td>{{ $d->total_no_of_reports }}</td>
                                    <td>
                                        <a href="{{ route('report.report_delete', $d->id) }}"><button
                                                onclick="if(!confirm('Are you sure you want to delete ?')) return false;"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></button></a>
                                    </td>
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

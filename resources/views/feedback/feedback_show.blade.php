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
                <div class="card-header">
                    <div class="container-fluid my-2">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h4>Feedback List</h4>
                            </div>
                            <div class="col-sm-6 text-right a_btnn">
                                <a href="{{ route('feedback.feedback_create') }}" class="pull-right btn btn-success btn-lg"><i
                                        class="fa fa-plus"></i> Add New</a>
                            </div>
                        </div>
                    </div>

                </div>

                <hr>
                <div class="card-body table-responsive p-0">
                    <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer"
                        style="width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Email</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Subject
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Message
                                </th>
                                <th width="100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->email }}</td>
                                    <td>{{ $d->subject }}</td>
                                    <td>{{ $d->message }}
                                    </td>
                                    <td>
                                        <a href="{{ route('feedback.feedback_delete', $d->id) }}"
                                            class="text-danger w-4 h-4 mr-1">
                                            <svg wire:loading.remove.delay="" wire:target=""
                                                class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path ath fill-rule="evenodd"
                                                    d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </a>
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

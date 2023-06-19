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

                <div class="container-fluid my-2">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h5>Livetv Content</h5>
                        </div>
                        <div class="col-sm-6 text-right a_btnn">
                            <a href="{{ route('content.content_add') }}" class="pull-right btn btn-success btn-lg"><i
                                    class="fa fa-plus"></i> Add New</a>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="card-body table-responsive p-0">
                    <table id="myTable"
                        class="table table-striped table-bordered dt-responsive nowrap dataTable no-footer"
                        style="width: 100%;" role="grid" aria-describedby="datatable_info">
                        <thead>
                            <tr>
                                <th width="60">ID</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Name</th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Category
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Ordering
                                </th>
                                <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1"
                                    colspan="1" aria-sort="ascending"
                                    aria-label="Action: activate to sort column descending" style="width: 278px;">Image</th>
                                <th width="100">Status</th>
                                <th width="100">Live</th>
                                <th width="100">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $d)
                                <tr>
                                    <td>{{ $d->id }}</td>
                                    <td>{{ $d->name }}</td>
                                    <td>{{ $d->category }}</td>
                                    <td>{{ $d->ordering }}</td>
                                    <td><img height="70" width="70" src="{{ asset('all_images/' . $d->image) }}"

                                    onerror="this.src='{{ asset('all_images/placeholder.jpg' ) }}'" >

                                        {{--  <img src="{{ asset('public/content') }}/{{ $content['image'] }}"  --}}
    {{--  onerror="this.src='{{ asset('public/assets/admin/img/100x100/food-default-image.png') }}'" alt="{{ $content->name }} image">  --}}
                                    </td>
                                    <td>
                                        {{--  @if ($d->status == 'Active')
                                                <span class="badge badge-success">Active</span>

                                                @else
                                                <span class="badge badge-danger">Inactive</span>
                                                @endif  --}}
                                        <div class="row toggle_btn">
                                            <label class="switch">
                                                <input type="checkbox" onclick="toggleStatus({{ $d->id }})"
                                                    id="status" name="status"
                                                    {{ $d->status == 'Active' ? 'checked' : '' }} value="Active"
                                                    class="cbx hidden">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        {{--  @if ($d->live == 1)
                                                <span class="badge badge-success">Yes</span>
                                                @else
                                                <span class="badge badge-danger">No</span>
                                                @endif  --}}
                                        <div class="row toggle_btn">
                                            <label class="switch">
                                                <input type="checkbox" onclick="toggleLive({{ $d->id }})"
                                                    id="live" name="live"
                                                    {{ $d->live == '1' ? 'checked' : '' }} value="1"
                                                    class="cbx hidden">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <a href="{{ route('content.content_update', $d->id) }}">
                                            <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path
                                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z">
                                                </path>
                                            </svg>
                                        </a>
                                        <a href="{{ route('content.content_delete', $d->id) }}"
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

    <script>
        function toggleStatus(rowId) {
            $.ajax({
                url: '{{ route('content.update-status') }}' + '?id=' + rowId,
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.success(response.message);
                    // Handle success, if needed
                },
                error: function(xhr) {
                    // Handle error, if needed
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.error('An error occurred');
                }
            });
        }
    </script>

    <script>
        function toggleLive(rowId) {
            $.ajax({
                url: '{{ route('content.update-live') }}' + '?id=' + rowId,
                type: 'POST',
                dataType: 'json',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.success(response.message);
                    // Handle success, if needed
                },
                error: function(xhr) {
                    // Handle error, if needed
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true
                    }
                    toastr.error('An error occurred');
                }
            });
        }
    </script>
@endsection

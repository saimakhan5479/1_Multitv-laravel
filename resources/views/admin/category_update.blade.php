
@extends('admin.layouts.app')

@section('content')

<!-- Content Header (Page header) -->

<!-- Content Wrapper. Contains page content -->
                <section class="content-header">
					<div class="container-fluid my-2">

					</div>
					<!-- /.container-fluid -->
				</section>
				<!-- Main content -->
				<section class="content">
					<!-- Default box -->
					<div class="container-fluid">
                        <form action="{{route('category.category_edit',$up->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
						<div class="card">
							<div class="card-body">
                                <div class="row mb-2">
                                    <div class="col-sm-6">
                                        <h5>Update Livetv Category</h5>
                                    </div>
                                    <div class="col-sm-6 text-right a_btnn">
                                        <a  href="{{ route('category.category_show') }}" class="btn btn-success">Back</a>
                                    </div>
                                </div>
                        <hr>
								<div class="row">
									<div class="col-md-12">
										<div class="mb-3">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" value={{$up->name}} class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" placeholder="Name">
										</div>
                                        @error('name')
                                            <p class="invalid-feedback">{{ $message  }}</p>
                                        @enderror
									</div>
									<div class="col-md-12">
										<div class="mb-3">
											<label for="ordering">Ordering</label>
											<input type="number" name="ordering" value={{$up->ordering}} id="ordering" class="form-control @error('ordering') is-invalid  @enderror" placeholder="Ordering">
										</div>
                                        @error('ordering')
                                        <p class="invalid-feedback">{{ $message }}</p>
                                    @enderror
									</div>
                                    <div class="col-md-12">
										<div class="mb-3">
											<label for="status">Status</label>
                                            {{--  <select name="status"  id="status" class="form-control">  --}}
                                                {{--  <option value="Active" {{ $up->status == "Active" ? 'selected' : '' }}>Active</option>
                                                <option value="Inactive" {{ $up->status == "Inactive" ? 'selected' : '' }}>Inactive</option>  --}}
                                                <div class="row toggle_btn">
                                                    <label class="switch">
                                                        <input type="checkbox" id="status" name="status" {{ $up->status == 'Active' ? 'checked':''  }} value="Active" class="cbx hidden">
                                                    <span class="slider round"></span>
                                                      </label>
                                                </div>
                                            {{--  </select>  --}}
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 m-auto btnn" >
							<button  type="submit"  class="btn btn-success btn-md btn-block">Save Changes</button>
						</div>
                    </form>
					</div>
					<!-- /.card -->
				</section>
				<!-- /.content -->

      @endsection


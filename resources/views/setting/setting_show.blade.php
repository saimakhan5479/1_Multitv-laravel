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
            @php($banner_id = \App\Models\Setting::where('key', 'banner_id')->first())
            @php($inter_id = \App\Models\Setting::where('key', 'inter_id')->first())
            <div class="card">
                <div class="card-body">
                    <div id="app">
                        <div class="content">
                            <div class="row">
                                <div class="content-top-button mb-2 col-md-12 content-head">
                                    <div class="pull-left content-title">
                                        <h5 style="margin: 0px;">Add Setting</h5>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <form action="{{ route('setting.setting_submit') }}" method="POST"
                                enctype="multipart/form-data" class="form-horizontal">
                                <input name="_method" type="hidden" value="POST">
                                <input name="_token" type="hidden" value="eoMC0fWR6pb3T4odlf7tSJChZMkocQB8hklszWl8">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="banner_ads_block">
                                                <div class="card">
                                                    <div class="card-body" style="background: #dcdcdc;">
                                                        <div class="banner_ad_item">
                                                            <label class="control-label">Banner Ads :-</label>
                                                            <div class="row toggle_btn">
                                                                <label class="switch">
                                                                    <input type="checkbox" id="banner_status"
                                                                        name="banner_status"
                                                                        {{ $banner_id && $banner_id->status == 'Active' ? 'checked' : '' }}
                                                                        value="Active" class="cbx hidden">
                                                                    {{--  <label for="banner_status" class="lbl"></label>  --}}
                                                                    <span class="slider round"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <p class="field_lable">Banner ID :-</p>
                                                                <div class="col-md-12 banner_ad_id">
                                                                    <input id="banner_id" name="banner_id" type="text"
                                                                        value="{{ $banner_id->value ?? 0 }}"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{--  ---------  --}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12">
                                            <div class="interstital_ads_block">
                                                <div class="card">
                                                    <div class="card-body" style="background: #dcdcdc;">
                                                        <div class="banner_ad_item">
                                                            <label class="control-label">Interstitial Ads :-</label>
                                                            <div class="row toggle_btn">
                                                                <label class="switch">
                                                                    <input type="checkbox" id="inter_status"
                                                                        name="inter_status"
                                                                        {{ $inter_id && $inter_id->status == 'Active' ? 'checked' : '' }}
                                                                        value="Active" class="cbx hidden">

                                                                    <span class="slider round"></span>
                                                                    {{--  <label for="inter_status" class="lbl"></label>  --}}
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <p class="field_lable">Interstitial Ad ID :-</p>
                                                                <div class="col-md-12 interstital_ad_id">
                                                                    <input id="inter_id" name="inter_id" type="text"
                                                                        value="{{ $inter_id->value ?? 0 }}"
                                                                        class="form-control">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--  ----  --}}
                                    <div class="col-md-12">
                                        <div class="col-md-4 m-auto btnn">
                                            <button type="submit" class="btn btn-md btn-block">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


    </section>
@endsection

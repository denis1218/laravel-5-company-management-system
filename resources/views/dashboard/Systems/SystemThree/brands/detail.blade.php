@section('title')
{{ __('brand.branddetail') }}
@endsection
@extends('dashboard.layouts.layout')
@section('style')

<link href="{{ asset('assets/dashboard/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/dashboard/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<!-- Responsive Datatable css -->
<link href="{{ asset('assets/dashboard/plugins/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/dashboard/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet" type="text/css">

@endsection
@section('rightbar-content')
<!-- Start Breadcrumbbar -->
<div class="breadcrumbbar">
    <div class="row align-items-center">
        <div class="col-md-8 col-lg-8">
            <h4 class="page-title">{{ __('brand.branddetail') }}</h4>
            <div class="breadcrumb-list">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{url('/home')}}">{{ __('side.dashboard') }}</a></li>
                    <li class="breadcrumb-item">{{ __('side.products') }}</li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{route('brands.index')}}">{{__('side.brands')}}</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('brand.branddetail') }}</li>
                </ol>
            </div>
        </div>
        <div class="col-md-4 col-lg-4">
            <div class="widgetbar">
                <a class="btn btn-primary-rgba" href="{{ route('brands.index') }}" >{{ __('brand.brandBack') }}</a>
            </div>
        </div>
    </div>
</div>
<!-- End Breadcrumbbar -->
<!-- Start Contentbar -->
<div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <!-- Start col -->
        <div class="col-lg-12">
            <form method="post" action="" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="brandId" value="{{ $data->id }}">
            <div class="card m-b-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">{{ __('brand.brandName') }}</label>
                                <input type="text" @if(isset($data->brand_name)) value="{{ $data->brand_name }}"@endif name="brandName" class="form-control" placeholder="{{__('brand.AddnewName')}}" required="" disabled>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">{{ __('brand.brandCode') }}</label>
                                <input type="text" @if(isset($data->brand_code)) value="{{ $data->brand_code }}"@endif name="brandCode" class="form-control" placeholder="{{__('brand.AddnewCode')}}" required="" disabled>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">{{ __('brand.categoryType') }}</label>
                                <input type="text" @if(isset($data->category_type)) value="{{ $data->category_type }}"@endif name="categoryType" class="form-control" placeholder="{{__('brand.category_type')}}" required="" disabled>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">{{ __('brand.nameOfAdd') }}</label>
                                <input type="text" @if(isset($data->name_of_who_added)) value="{{ $data->name_of_who_added }}"@endif name="nameOfAdd" class="form-control" placeholder="{{__('brand.AddnewNameof')}}" required="" disabled>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label>{{ __('brand.dateOfAdd') }}</label>
                                <div class="input-group">
                                    <input type="text" id="default-date12" class="form-control"
                                           placeholder="yyyy/mm/dd" aria-describedby="basic-addon2"
                                           name="dateOfAdd" @if(isset($data->date_of_addition)) value="{{ $data->date_of_addition }}"@endif autocomplete="off" disabled/>
                                    <div class="input-group-append">
                                                <span class="input-group-text" id="basic-addon2"><i
                                                            class="feather icon-calendar"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mb-4">
                            <div class="form-group mb-0">
                                <label for="cutting_method" class="col-form-label">{{ __('brand.brandImage') }}</label>
                                <img src="{{asset('../'.$data->brand_image)}}" alt="brandImage" class="img-thumbnail circle">
                                <input type="text" @if(isset($data->brand_image)) value="{{ $data->brand_image }}"@endif name="brandImage" class="form-control" placeholder="{{__('brand.SelectnewImage')}}" required="" disabled>
                            </div>
                        </div>



                    </div>


                </div>
            </div>
            </form>
        </div>


        <!-- End col -->
    </div>
    <!-- End row -->
</div>

<!-- End Contentbar -->
@endsection
@section('script')

<script src="{{ asset('assets/dashboard/plugins/datepicker/datepicker.min.js') }}"></script>
<script src="{{ asset('assets/dashboard/plugins/datepicker/i18n/datepicker.en.js') }}"></script>


{{-- <script src="{{ asset('assets/dashboard/js/custom/custom-toasts.js') }}"></script> --}}

<script>
    $(document).ready(function() {

        $('#default-date').datepicker({

            dateFormat: 'yyyy/mm/dd',

            language: 'en',
        });

        $('#default-date12').datepicker({

            dateFormat: 'yyyy/mm/dd',

            language: 'en',
        });


    });
</script>
@endsection

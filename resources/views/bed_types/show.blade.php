@extends('layouts.app')
@section('title')
    {{ __('messages.bed_type.bed_type_details') }}
@endsection
@section('page_css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $bedType->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.bed_type.bed_type_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('bed_types.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('bed_types.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let bedTypesUrl = "{{ url('bed-types') }}";
    </script>
    <script src="{{ mix('assets/js/bed_types/bed_types_details_edit.js') }}"></script>
@endsection

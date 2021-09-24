@extends('layouts.app')
@section('title')
    {{ __('messages.bed.bed_details') }}
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
                    @if(!Auth::user()->hasRole('Doctor|Receptionist'))
                        <a class="btn btn-dark mr-2 edit-btn text-white"
                           data-id="{{ $bed->id }}">{{ __('messages.common.edit') }}</a>
                    @endif
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.bed.bed_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('beds.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('beds.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ mix('assets/js/beds/beds_assigns_view_list.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let bedUrl = "{{url('beds')}}";
    </script>
    <script src="{{ mix('assets/js/custom/input_price_format.js') }}"></script>
    <script src="{{ mix('assets/js/beds/beds-details-edit.js') }}"></script>
@endsection

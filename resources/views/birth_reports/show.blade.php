@extends('layouts.app')
@section('title')
    {{ __('messages.birth_report.birth_report_details') }}
@endsection
@section('page_css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $birthReport->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('birth-reports.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.birth_report.birth_report_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('birth_reports.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('birth_reports.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let birthReportUrl = "{{ url('birth-reports') }}";
    </script>
    <script src="{{ mix('assets/js/birth_reports/create-details-edit.js') }}"></script>
@endsection

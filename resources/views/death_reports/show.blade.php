@extends('layouts.app')
@section('title')
    {{ __('messages.death_report.death_report_details') }}
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
                       data-id="{{ $deathReport->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('death-reports.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.death_report.death_report_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('death_reports.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('death_reports.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let deathReportUrl = "{{ url('death-reports') }}";
    </script>
    <script src="{{ mix('assets/js/death_reports/death_reports-details-edit.js') }}"></script>
@endsection


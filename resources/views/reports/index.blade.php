@extends('layouts.app')
@section('title')
    Doctor Finance Report
@endsection
@section('page_css')
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('flash::message')
            <div class="page-header">
                <h3 class="page__heading">{{ 'Doctor Finance Report' }}</h3>
                @if(Auth::user()->hasRole('Admin'))
                    <div class="flex-end-sm">
                        <div class="mr-0">
                            {{-- <div class="btn-group" role="group">
                                <button id="doctorOPDChargesActions" type="button"
                                        class="btn btn-primary dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">{{ __('messages.common.actions') }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="doctorOPDChargesActions"
                                     x-placement="bottom-start">
                                    <a href="{{ route('doctor.opd.charges.excel') }}" class="dropdown-item">
                                        {{ __('messages.common.export_to_excel') }}
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                @else
                    <div class="flex-end-sm">
                        <a class="btn btn-primary filter-container__btn" href="#" data-toggle="modal"
                           data-target="#addModal">
                            {{ __('messages.doctor_opd_charge.new_doctor_opd_charge') }}
                        </a>
                    </div>
                @endif
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            @include('reports.table')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('doctor_opd_charges.templates.templates')
        {{-- @include('doctor_opd_charges.create_modal') --}}
        {{-- @include('doctor_opd_charges.edit_modal') --}}
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let doctorFinanceReportUrl = "{{url('doctor-finance-report')}}";
        let doctorOPDChargeCreateUrl = "{{route('doctor-opd-charges.store')}}";
    </script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{mix('assets/js/reports/doctorFinanceReport.js')}}"></script>
    <script src="{{ mix('assets/js/custom/delete.js') }}"></script>
@endsection

@extends('layouts.app')
@section('title')
    {{ __('messages.doctor_department.doctor_department_details') }}
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
                    @if(!Auth::user()->hasRole('Doctor|Patient|Receptionist'))
                        <a class="btn btn-dark mr-2 edit-btn text-white"
                           data-id="{{ $doctorDepartment->id }}">{{ __('messages.common.edit') }}</a>
                    @endif
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.doctor_department.doctor_department_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('doctor_departments.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('doctor_departments.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ mix('assets/js/doctors_departments/doctor_departments_list.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let doctorDepartmentUrl = "{{url('doctor-departments')}}";
    </script>
    <script src="{{ mix('assets/js/doctors_departments/doctors_departments-details-edit.js') }}"></script>
    <script src="{{ mix('assets/js/custom/delete.js') }}"></script>
@endsection

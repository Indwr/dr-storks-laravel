@extends('layouts.app')
@section('title')
    {{ __('messages.patient_diagnosis_test.patient_diagnosis_test') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div class="filter-container">
                    <a class="btn btn-success pull-right mr-2" target="_blank"
                       href="{{route('patient.diagnosis.test.pdf',['patientDiagnosisTest' => $patientDiagnosisTest->id])}}">
                        {{ __('messages.patient_diagnosis_test.print_diagnosis_test') }}
                    </a>
                    <a href="{{ route('patient.diagnosis.test.edit',['patientDiagnosisTest' => $patientDiagnosisTest->id]) }}"
                       class="btn btn-dark mr-2">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url('patient-diagnosis-test') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.patient_diagnosis_test.patient_diagnosis_test_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('patient_diagnosis_test.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

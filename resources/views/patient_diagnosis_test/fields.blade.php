<div class="row">
    <div class="form-group col-md-3">
        {{ Form::label('patient_id', __('messages.patient_diagnosis_test.patient').':') }}<label
                class="required">*</label>
        {{ Form::select('patient_id', $patients, isset($patientDiagnosisTest)?$patientDiagnosisTest->patient_id:null, ['class' => 'form-control','required','id' => 'patient_id','placeholder'=>'Select Patient']) }}
    </div>

    @if(Auth::user()->hasRole('Doctor'))
        <input type="hidden" name="doctor_id" value="{{ Auth::user()->owner_id }}">
    @else
        <div class="form-group col-md-3">
            {{ Form::label('doctor_id', __('messages.patient_diagnosis_test.doctor').':') }}<label
                    class="required">*</label>
            {{ Form::select('doctor_id', $doctors, isset($patientDiagnosisTest)?$patientDiagnosisTest->doctor_id:null, ['class' => 'form-control','required','id' => 'doctor_id','placeholder'=>'Select Doctor']) }}
        </div>
    @endif

    <div class="form-group col-md-3">
        {{ Form::label('category_id', __('messages.patient_diagnosis_test.diagnosis_category').':') }}<label
                class="required">*</label>
        {{ Form::select('category_id', $diagnosisCategory, isset($patientDiagnosisTest)?$patientDiagnosisTest->category_id:null, ['class' => 'form-control','required','id' => 'category_id','placeholder'=>'Select Diagnosis Category']) }}
    </div>

    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('report_number', __('messages.patient_diagnosis_test.report_number').':') }}
            {{ Form::text('report_number', isset($patientDiagnosisTest)?$patientDiagnosisTest->report_number:$reportNumber, ['class' => 'form-control','required','readonly']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('age',  __('messages.patient_diagnosis_test.age').':') }}
            {{ Form::number('age', null, ['class' => 'form-control','min' => '1', 'max' => '100']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('height', __('messages.patient_diagnosis_test.height').':') }}
            {{ Form::number('height', null, ['class' => 'form-control floatNumber', 'max' => '7', 'step' => '.01']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('weight', __('messages.patient_diagnosis_test.weight').':') }}
            {{ Form::number('weight', null, ['class' => 'form-control floatNumber', 'data-mask'=>'##0,00', 'max' => '200', 'step' => '.01']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('average_glucose', __('messages.patient_diagnosis_test.average_glucose').':') }}
            {{ Form::text('average_glucose', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('fasting_blood_sugar', __('messages.patient_diagnosis_test.fasting_blood_sugar').':') }}
            {{ Form::text('fasting_blood_sugar', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('urine_sugar', __('messages.patient_diagnosis_test.urine_sugar').':') }}
            {{ Form::text('urine_sugar', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('blood_pressure', __('messages.patient_diagnosis_test.blood_pressure').':') }}
            {{ Form::text('blood_pressure', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('diabetes', __('messages.patient_diagnosis_test.diabetes').':') }}
            {{ Form::text('diabetes', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            {{ Form::label('cholesterol', __('messages.patient_diagnosis_test.cholesterol').':') }}
            {{ Form::text('cholesterol', null, ['class' => 'form-control']) }}
        </div>
    </div>
    <hr>
    <div class="col-sm-12 mt-3">
        <div class="mb-3 h5">
            {{__('messages.patient_diagnosis_test.add_other_diagnosis_property')}}
        </div>
        <table class="table table-bordered table-responsive-sm" id="patientDiagnosisTestTbl">
            <thead class="thead-dark">
            <tr>
                <th class="text-center">#</th>
                <th class="diagnoses-filed">{{__('messages.patient_diagnosis_test.diagnosis_property_name')}}
                </th>
                <th class="diagnoses-filed">{{__('messages.patient_diagnosis_test.diagnosis_property_value')}}
                </th>
                <th>
                    <button type="button" class="btn btn-sm btn-primary float-right w-100"
                            id="addItem">{{ __('messages.common.add') }}</button>
                </th>
            </tr>
            </thead>
            <tbody class="diagnosis-item-container">
            </tbody>
        </table>
    </div>
    <div class="form-group col-sm-12">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary','id'=>'saveBtn']) }}
        <a href="{{ route('patient.diagnosis.test.index') }}"
           class="btn btn-secondary">{{__('messages.common.cancel')}}</a>
    </div>
</div>

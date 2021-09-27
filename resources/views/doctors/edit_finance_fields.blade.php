<div class="alert alert-danger display-none" id="customValidationErrorsBox"></div>
<div class="row">
       <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('laboratory', 'Laboratory')}}<span class="required">*</span>
                {{ Form::text('laboratory', $financeDetails->laboratory , ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('radiology', 'Radiology') }}<span class="required">*</span>
                {{ Form::text('radiology', $financeDetails->radiology, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('consultation', 'Consultation') }}<span class="required">*</span>
                {{ Form::text('consultation', $financeDetails->consultation, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('general_medicine', 'General Medicine') }}<span class="required">*</span>
                {{ Form::text('general_medicine', $financeDetails->general_medicine, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('procedures', 'Procedures') }}<span class="required">*</span>
                {{ Form::text('procedures', $financeDetails->procedures, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('other', 'Other') }}<span class="required">*</span>
                {{ Form::text('other', $financeDetails->other, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('room_charges','Room Charges') }}<span class="required">*</span>
                {{ Form::text('room_charges', $financeDetails->room_charges, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('nurse_care', 'Nurse Care') }}<span class="required">*</span>
                {{ Form::text('nurse_care', $financeDetails->nurse_care, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('doctor_visit', 'Doctor Visit') }}<span class="required">*</span>
                {{ Form::text('doctor_visit', $financeDetails->doctor_visit, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('physiotherapy', 'Physiotherapy') }}<span class="required">*</span>
                {{ Form::text('physiotherapy', $financeDetails->physiotherapy, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('accounts', 'Accounts') }}<span class="required">*</span>
                {{ Form::text('accounts', $financeDetails->accounts, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('operation_theater', 'Operation Theater') }}<span class="required">*</span>
                {{ Form::text('operation_theater', $financeDetails->operation_theater, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('pharmacy','Pharmacy') }}<span class="required">*</span>
                {{ Form::text('pharmacy', $financeDetails->pharmacy, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('therapeutic', 'Therapeutic') }}<span class="required">*</span>
                {{ Form::text('therapeutic', $financeDetails->therapeutic, ['class' => 'form-control','required']) }}
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                {{ Form::label('driver', 'Driver') }}<span class="required">*</span>
                {{ Form::text('driver', $financeDetails->driver, ['class' => 'form-control','required']) }}
            </div>
        </div>
</div>

    <div class="form-group col-sm-12">
        {{ Form::submit(__('messages.common.save'), ['class' => 'btn btn-primary']) }}
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">{{ __('messages.common.cancel') }}</a>
    </div>
</div>

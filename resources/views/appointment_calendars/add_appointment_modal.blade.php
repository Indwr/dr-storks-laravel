<div id="addAppointmentModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{__('messages.appointment.new_appointment')}}</h5>
                <button type="button" aria-label="Close" class="close" data-dismiss="modal">×</button>
            </div>
            {{ Form::open(['id'=>'calenderAppointmentForm']) }}
            <div class="modal-body">
                <div class="alert alert-danger display-none" id="validationErrorsBox"></div>
                <div class="row">
                    @if(!getLoggedInUser()->hasRole('Patient'))
                        <div class="form-group col-sm-12">
                            {{ Form::label('patient_name', __('messages.case.patient').':') }}<label
                                    class="required">*</label>
                            {{ Form::select('patient_id',$patients, null, ['class' => 'form-control select2Selector','required','id' => 'patientIdAppointment','placeholder'=>'Select Patient']) }}
                        </div>
                    @endif
                    <div class="form-group col-sm-12">
                        {{ Form::label('doctor_name', __('messages.case.doctor').':') }}<label
                                class="required">*</label>
                        {{ Form::select('doctor_id',$doctorArr, null, ['class' => 'form-control select2Selector','required','id' => 'doctorIdAppointment','placeholder'=>'Select Doctor']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        {{ Form::label('opd_date', __('messages.appointment.date').':') }}<label
                                class="required">*</label>
                        {{ Form::text('opd_date', null, ['id'=>'opdDateAppointment', 'class' => 'form-control', 'required', 'readonly']) }}
                    </div>

                    <div class="form-group col-sm-6">
                        {{ Form::label('status', __('messages.common.status').':') }}<br>
                        <label class="switch switch-label switch-outline-primary-alt swich-center">
                            <input name="status" class="switch-input is-active" type="checkbox"
                                   value="1" {{ ($statusArr === \App\Models\Appointment::STATUS_COMPLETED) ? 'checked' : '' }}>
                            <span class="switch-slider" data-checked="&#x2713;" data-unchecked="&#x2715;"></span>
                        </label>
                    </div>

                    <div align="left" class="form-group col-sm-12" id="appointmentSlotSection">
                        <div class="doctor-schedule" style="display: none">
                            <i class="fas fa-calendar-alt"></i>
                            <span class="day-name"></span>
                            <span class="schedule-time"></span>
                        </div>
                        <strong class="error-message" style="display: none"></strong>
                        <div class="slot-heading">
                            <strong class="available-slot-heading"
                                    style="display: none">{{ __('messages.appointment.available_slot').':' }}</strong>
                        </div>
                        <div class="row no-of-slots-available">
                            <div class="available-slot form-group col-sm-12">
                            </div>
                        </div>
                        <div class="color-information" align="left" style="display: none">
                            <span><i class="fa fa-circle fa-xs" aria-hidden="true"> </i> {{ __('messages.appointment.no_available') }}</span>
                        </div>
                    </div>

                    <div class="form-group col-sm-12">
                        {{ Form::label('problem', __('messages.appointment.description').':') }}
                        {{ Form::textarea('problem', null, ['class' => 'form-control', 'rows'=>'4']) }}
                    </div>

                    <div class="text-right col-sm-12 mt-4">
                        {{ Form::button( __('messages.common.save'), ['type' => 'submit','class' => 'btn btn-primary','id'=>'btnSave','data-loading-text'=>"<span class='spinner-border spinner-border-sm'></span> Processing..."]) }}
                        <button type="button" class="btn btn-light ml-1"
                                data-dismiss="modal">{{ __('messages.common.cancel') }}</button>
                    </div>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

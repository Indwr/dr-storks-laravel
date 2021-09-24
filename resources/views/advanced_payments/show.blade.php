@extends('layouts.app')
@section('title')
    {{ __('messages.advanced_payment.advanced_payment_details') }}
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
                       data-id="{{ $advancedPayment->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('advanced-payments.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.advanced_payment.advanced_payment_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('advanced_payments.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('advanced_payments.edit_modal')
    </div>
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let advancedPaymentUrl = "{{url('advanced-payments')}}";
    </script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{ mix('assets/js/advanced_payments/advanced_payments_edit.js') }}"></script>
@endsection

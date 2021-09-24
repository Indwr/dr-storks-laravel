@extends('layouts.app')
@section('title')
    {{ __('messages.charge.charge_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $charge->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('charges.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.charge.charge_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('charges.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('charges.edit_modal')
@endsection
@section('scripts')
    <script>
        let chargeUrl = "{{ url('charges') }}";
        let changeChargeTypeUrl = "{{ url('get-charge-categories') }}";
    </script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{ mix('assets/js/charges/create-details-edit.js') }}"></script>
@endsection

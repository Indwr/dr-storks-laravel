@extends('layouts.app')
@section('title')
    {{ __('messages.charge_category.charge_category_details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $chargeCategory->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.charge_category.charge_category_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('charge_categories.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('charge_categories.edit_modal')
@endsection
@section('scripts')
    <script>
        let chargeCategoryUrl = "{{ url('charge-categories') }}";
    </script>
    <script src="{{ mix('assets/js/charge_categories/create-details-edit.js') }}"></script>
@endsection

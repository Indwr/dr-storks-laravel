@extends('layouts.app')
@section('title')
    {{__('messages.incomes.income_details')}}
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
                       data-id="{{ $incomes->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('incomes.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{__('messages.incomes.income_details')}}</strong>
                        </div>
                        <div class="card-body">
                            @include('incomes.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('incomes.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let incomeUrl = "{{url('incomes')}}";
        let defaultDocumentImageUrl = "{{ asset('assets/img/default_image.jpg') }}";
        let download = '{{__('messages.incomes.download')}}';
        let documentError = "{{__('messages.incomes.document_error')}}";
    </script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{mix('assets/js/incomes/incomes-details-edit.js')}}"></script>
@endsection

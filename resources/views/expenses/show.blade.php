@extends('layouts.app')
@section('title')
    {{ __('messages.expense.expense_details') }}
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
                       data-id="{{ $expenses->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('expenses.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{__('messages.expense.expense_details')}}</strong>
                        </div>
                        <div class="card-body">
                            @include('expenses.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('expenses.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap-datetimepicker.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let expenseUrl = "{{url('expenses')}}";
        let defaultDocumentImageUrl = "{{ asset('assets/img/default_image.jpg') }}";
        let download = "{{__('messages.expense.download')}}";
        let documentError = "{{__('messages.expense.document_error')}}";
    </script>
    <script src="{{mix('assets/js/custom/input_price_format.js')}}"></script>
    <script src="{{mix('assets/js/expenses/expenses-details-edit.js')}}"></script>
@endsection

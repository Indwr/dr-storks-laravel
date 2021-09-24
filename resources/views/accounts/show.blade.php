@extends('layouts.app')
@section('title')
    {{ __('messages.account.accounts') }}
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
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $account->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('accounts.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.account.account_details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('accounts.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('accounts.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ mix('assets/js/custom/custom-datatable.js') }}"></script>
    <script src="{{ mix('assets/js/accounts/payments_list.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let accountUrl = "{{route('accounts.index')}}";
    </script>
    <script src="{{ mix('assets/js/accounts/accounts_details_edit.js') }}"></script>
    <script src="{{ mix('assets/js/custom/reset_models.js') }}"></script>
@endsection

@extends('layouts.app')
@section('title')
    {{ __('messages.notice_board.details') }}
@endsection
@section('content')
    <div class="container-fluid">
        <div class="animated fadeIn">
            @include('coreui-templates::common.errors')
            <div class="d-flex justify-content-end py-2">
                <div>
                    <a class="btn btn-dark mr-2 edit-btn text-white"
                       data-id="{{ $noticeBoard->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ url()->previous() }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{ __('messages.notice_board.details') }}</strong>
                        </div>
                        <div class="card-body">
                            @include('notice_boards.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('notice_boards.edit_modal')
@endsection
@section('page_scripts')
    <script src="{{ asset('assets/js/moment.min.js') }}"></script>
@endsection
@section('scripts')
    <script>
        let noticeBoardUrl = "{{url('notice-boards')}}";
    </script>
    <script src="{{ mix('assets/js/notice_boards/create-details-edit.js') }}"></script>
@endsection

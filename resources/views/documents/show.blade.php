@extends('layouts.app')
@section('title')
    Document
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
                       data-id="{{ $documents->id }}">{{ __('messages.common.edit') }}</a>
                    <a href="{{ route('documents.index') }}"
                       class="btn btn-primary pull-right">{{ __('messages.common.back') }}</a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong>{{__('messages.document.document_detail')}}</strong>
                        </div>
                        <div class="card-body">
                            @include('documents.show_fields')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('documents.edit_modal')
@endsection
@section('scripts')
    <script>
        let documentsUrl = "{{route('documents.index')}}";
        let defaultDocumentImageUrl = "{{ asset('assets/img/default_image.jpg') }}";
    </script>
    <script src="{{ mix('assets/js/document/document-details-edit.js') }}"></script>
    <script src="{{ mix('assets/js/custom/reset_models.js') }}"></script>
@endsection


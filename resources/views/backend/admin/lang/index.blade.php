@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
        <h1 class="h3 mb-2 text-gray-800">{{ __('setting_language.language.language-setting') }}</h1>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>{{ __('backend.lang.id') }}</th>
                                <th>{{ __('backend.lang.language') }}</th>
                                <th>{{ __('backend.lang.key') }}</th>
                                <th>{{ __('backend.lang.value') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{ __('backend.lang.id') }}</th>
                                <th>{{ __('backend.lang.language') }}</th>
                                <th>{{ __('backend.lang.key') }}</th>
                                <th>{{ __('backend.lang.value') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($words as $words_key => $word)
                                <tr>
                                    <td>{{ $word->id }}</td>
                                    <td>{{ $word->language_id }}</td>
                                    <td>{{ $word->key }}</td>
                                    <td>{{ $word->value }}</td>
                                    
                                    <td>
                                        <a href="{{ route('admin.lang.edit', $word->id) }}" class="btn btn-primary btn-circle">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        // Call the dataTables jQuery plugin
        $(document).ready(function() {

            "use strict";

            $('#dataTable').DataTable();
        });
    </script>
@endsection

@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('advertisement.manage-ad') }}</h1>
            <p class="mb-4">{{ __('advertisement.manage-ad-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.advertisements.create') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">{{ __('advertisement.add-ad') }}</span>
            </a>
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
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Created At') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{ __('User') }}</th>
                                <th>{{ __('Description') }}</th>
                                <th>{{ __('Created At') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($activityLogs as $key => $activityLog)
                                <tr>
                                    <td>{{ $activityLog->user?->name }}</td>
                                    <td>
                                        {{ $activityLog->description }}
                                    </td>
                                    <td>
                                       {{  $activityLog->created_at }}
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

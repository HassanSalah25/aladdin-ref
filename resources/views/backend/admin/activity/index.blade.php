@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('activity.manage-activity') }}</h1>
            <p class="mb-4">{{ __('activity.manage-activity-desc') }}</p>
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
                                <th>{{ __('activity.activity-date') }}</th>
                                <th>{{ __('activity.activity-user-name') }}</th>
                                <th>{{ __('activity.activity-event') }}</th>
                                <th>{{ __('activity.activity-subject-type') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{ __('activity.activity-date') }}</th>
                                <th>{{ __('activity.activity-user-name') }}</th>
                                <th>{{ __('activity.activity-event') }}</th>
                                <th>{{ __('activity.activity-subject-type') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($activities as $key => $activity)
                                <tr>
                                    <td>{{ $activity->created_at->format('d/m/Y h:i A') }}</td>
                                    <td>{{ __($activity->causer->name) }}</td>
                                    <td>{{  __('backend.'.$activity->event) }}</td>
                                    <td>{{ __('backend.sidebar.'.strtolower(class_basename($activity->subject_type))) }}</td>


                                    <td>
                                        <a href="" data-toggle="modal" data-target="#modal{{$key}}"
                                           class="btn btn-success btn-circle">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    </td>
                                </tr>

                                <!-- Modal - Activity Details -->
                                <div class="modal fade" id="modal{{$key}}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"
                                                    id="exampleModalLabel">{{__('backend.shared.title')}}</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @php

                                                    $changes = $activity->changes();

                                                    // Get the changes in attributes
                                                    $attributeChanges = @$changes['attributes'] ?? [];
                                                    $oldAttributes = @$changes['old'] ?? [];


                                                @endphp
                                                <div class="row">
                                                    @foreach($attributeChanges as $attribute => $newValue)
                                                        @php $oldValue = $oldAttributes[$attribute] ?? null; @endphp
                                                        @if($oldValue != $newValue)
                                                            <div class="col-md-6">
                                                                <label>{{$attribute}}</label>
                                                                <input class="form-control" type="text"
                                                                       disabled value="{{$oldValue}}">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>{{$attribute}}</label>
                                                                <input class="form-control" type="text"
                                                                       disabled value="{{$newValue}}">
                                                            </div>
                                                        @endif
                                                            @endforeach
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                                                <button type="button"
                                                        class="btn btn-primary">{{ __('backend.shared.create') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{ $activities->links() }}
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
        $(document).ready(function () {

            "use strict";

            $('#dataTable').DataTable();
        });
    </script>
@endsection

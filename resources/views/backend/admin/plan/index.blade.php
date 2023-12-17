@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('plan.manage-plan') }}</h1>
            <p class="mb-4">{{ __('plan.manage-plan-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.plans.create') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">{{ __('plan.add-plan') }}</span>
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
                                <th>{{ __('plan.plan-name') }}</th>
                                <th>{{ __('plan.plan-status') }}</th>
                                <th>{{ __('plan.plan-price') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{ __('plan.plan-name') }}</th>
                                <th>{{ __('lan.plan-status') }}</th>
                                <th>{{ __('plan.plan-price') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($all_plans as $key => $plan)
                                <tr>
                                    <td>{{ $plan->plan_name }}</td>
                                    <td>
                                        @if($plan->plan_status == \App\Models\Plan::PLAN_ENABLED)
                                            <a class="btn btn-success btn-sm text-white">{{ __('plan.plan-status-enable') }}</a>
                                        @else
                                            <a class="btn btn-warning btn-sm text-white">{{ __('plan.plan-status-disable') }}</a>
                                        @endif
                                    </td>
                                    <td>
                                        {{$plan->plan_price}}
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.plans.edit', $plan->id) }}" class="btn btn-primary btn-circle">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <form method="POST" action="{{route('admin.plans.destroy',$plan)}}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-circle">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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

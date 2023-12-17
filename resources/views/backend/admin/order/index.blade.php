@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('order.manage-order') }}</h1>
            <p class="mb-4">{{ __('order.manage-order-desc') }}</p>
        </div>
{{--        <div class="col-3 text-right">--}}
{{--            <a href="{{ route('admin.orders.create') }}" class="btn btn-info btn-icon-split">--}}
{{--                <span class="icon text-white-50">--}}
{{--                  <i class="fas fa-plus"></i>--}}
{{--                </span>--}}
{{--                <span class="text">{{ __('order.add-order') }}</span>--}}
{{--            </a>--}}
{{--        </div>--}}
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>{{ __('backend.sidebar.plan') }}</th>
                                <th>{{ __('order.order-name') }}</th>
                                <th>{{ __('order.order-phone') }}</th>
                                <th>{{ __('order.order-activity_name') }}</th>
                                <th>{{ __('order.order-activity_phone') }}</th>
                                <th>{{ __('order.order-activity_address') }}</th>
                                <th>{{ __('order.order-activity_email') }}</th>
                                <th>{{ __('order.order-activity_description') }}</th>
                                <th>{{ __('order.order-activity_verified') }}</th>
                                <th>{{ __('order.order-activity') }}</th>
                                <th>{{ __('order.order-status') }}</th>
                                <th>{{ __('backend.comment.date') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>{{ __('backend.sidebar.plan') }}</th>
                                <th>{{ __('order.order-name') }}</th>
                                <th>{{ __('order.order-phone') }}</th>
                                <th>{{ __('order.order-activity_name') }}</th>
                                <th>{{ __('order.order-activity_phone') }}</th>
                                <th>{{ __('order.order-activity_address') }}</th>
                                <th>{{ __('order.order-activity_email') }}</th>
                                <th>{{ __('order.order-activity_description') }}</th>
                                <th>{{ __('order.order-activity_verified') }}</th>
                                <th>{{ __('order.order-activity') }}</th>
                                <th>{{ __('order.order-status') }}</th>
                                <th>{{ __('backend.comment.date') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($all_orders as $key => $order)
                                <tr>
                                    <td>{{ app()->getLocale() == "en" ? $order->plan?->plan_name : $order->plan?->plan_name_ar  }}</td>
                                    <td>{{ $order->name }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->activity_name }}</td>
                                    <td>{{ $order->activity_phone }}</td>
                                    <td>{{ $order->activity_address }}</td>
                                    <td>{{ $order->activity_email }}</td>
                                    <td>{{ $order->activity_description }}</td>
                                    <td>{{ $order->isVerified() }}</td>
                                    <td>{{ $order->activity }}</td>
                                    <td>
                                        <form method="POST" action="{{route('admin.orders.update',$order)}}">
                                            @csrf
                                            @method('PUT')
                                            <input type="hidden" name="status"
                                                   value="{{$order->status == 0 ? 1 : 0 }}">
                                            <button type="submit" class="btn
                                            {{$order->status == 0 ? "btn-warning" : "btn-success"}}">
                                                {{ $order->getStatus() }}
                                            </button>
                                        </form>

                                    </td>
                                    <td>{{ $order->created_at->diffForHumans() }} / {{  $order->created_at->format('d/m/Y h:i A') }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{$all_orders->links()}}
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- Page level plugins -->
    <script src="{{ asset('backend/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

@endsection

@extends('backend.admin.layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.subscription.edit-subscription') }}</h1>
            <p class="mb-4">{{ __('backend.subscription.edit-subscription-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.subscriptions.index') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-backspace"></i>
                </span>
                <span class="text">{{ __('backend.shared.back') }}</span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12 col-md-8 col-lg-6">
                    <form method="POST" action="{{ route('admin.subscriptions.update', $subscription->id) }}" class="">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-12">
                                <span>{{ __('backend.subscription.subscription-for') }}: </span>
                                <span class="text-gray-800">{{ $subscription->user->name }}</span><br/>
                                <span>{{ __('backend.subscription.started-at') }}: </span>
                                <span class="text-gray-800">{{ $subscription->subscription_start_date }}</span>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="plan_id" class="text-black">{{ __('backend.plan.plan') }}</label>
                                <input type="text" disabled
                                       value="{{$subscription->plan->plan_name}}"
                                       class="form-control" name="plan_id">
                                @if($subscription->plan->hasActiveSubscription($subscription))
                                    <span class="text alert-success m-5">
                                       {{ __('subscription.active') }}
                                </span>
                                @else
                                    <span class="text alert-danger m-5">
                                       {{ __('subscription.end') }}
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="subscription_end_date"
                                       class="text-black">{{ __('backend.subscription.end-at') }}</label>
                                <input id="subscription_end_date" type="date"
                                       class="form-control @error('subscription_end_date') is-invalid @enderror"
                                       name="subscription_end_date"
                                       value="{{ old('subscription_end_date') ? old('subscription_end_date') : $subscription->subscription_end_date }}"
                                       aria-describedby="subscription_end_dateHelpBlock">
                                <small id="subscription_end_dateHelpBlock" class="form-text text-muted">
                                    {{ __('theme_alaadin.plan.subscription-edn-date-help') }}
                                </small>
                                @error('subscription_end_date')
                                <span class="invalid-tooltip">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row form-group justify-content-between">
                            <div class="col-8">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('backend.shared.update') }}
                                </button>
                            </div>
                            <div class="col-4 text-right">
                                <a class="text-danger" href="#" data-toggle="modal" data-target="#deleteModal">
                                    {{ __('backend.subscription.unsubscripe') }}
                                </a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{ __('backend.shared.delete-confirm') }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ __('advertisement.delete-confirm') }}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                            data-dismiss="modal">{{ __('backend.shared.cancel') }}</button>
                    <form action="{{ route('admin.subscriptions.destroy', $subscription->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="btn btn-danger">{{ __('backend.subscription.unsubscripe') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection

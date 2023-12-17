@extends('backend.admin.layouts.app')

@section('styles')
@endsection

@section('content')

    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="{{ route('faqs.home_sections.store') }}" class="">
                        @csrf

                        <div class="row border-left-primary mb-4">
                            <div class="col-12">



                                <div class="form-row mb-3">

                                    <div class="col-md-4">
                                        <label for="look_for" class="text-black">{{ __('look for') }}</label>
                                        <input id="look_for" type="text" class="form-control @error('look_for') is-invalid @enderror" name="look_for" value="{{ old('look_for') }}">
                                        @error('look_for')
                                        <span class="invalid-tooltip">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="recent_listing" class="text-black">{{ __('recent listing') }}</label>
                                        <input id="recent_listing" type="text" class="form-control @error('recent_listing') is-invalid @enderror" name="recent_listing" value="{{ old('recent_listing') }}">
                                        @error('recent_listing')
                                        <span class="invalid-tooltip">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div><div class="col-md-4">
                                        <label for="nearby_listing" class="text-black">{{ __('nearby listing') }}</label>
                                        <input id="nearby_listing" type="text" class="form-control @error('nearby_listing') is-invalid @enderror" name="nearby_listing" value="{{ old('nearby_listing') }}">
                                        @error('nearby_listing')
                                        <span class="invalid-tooltip">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                        </div>




                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success py-2 px-4 text-white">
                                    {{ __('backend.shared.create') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
@endsection

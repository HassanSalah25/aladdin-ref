@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

<div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('backend.lang.edit-word') }}</h1>
            <p class="mb-4">{{ __('backend.lang.edit-word-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.countries.index') }}" class="btn btn-info btn-icon-split">
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
                    <form method="POST" action="{{ route('admin.lang.update', $word->id) }}" class="">
                        @csrf
                        @method('PUT')
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="word" class="text-black">{{ __('backend.country.country-name') }}</label>
                                <input id="word" type="text" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ old('value') ? old('value') : $word->value }}" autofocus>
                                @error('country_name')
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
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>



@endsection
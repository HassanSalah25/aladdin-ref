@if(app()->getLocale() == 'ar')
    <script src="{{ asset('frontend/vendor/bootstrap-select/i18n/defaults-ar_AR.js') }}"></script>
@elseif(app()->getLocale() == 'en')
    <script src="{{ asset('frontend/vendor/bootstrap-select/i18n/defaults-en_US.js') }}"></script>
@endif

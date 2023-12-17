@extends('frontend.layouts.app')

@section('content')
            <div >
                <div style="display: flex;
    flex-direction: column;
    flex-wrap: nowrap;
    align-content: center;
    justify-content: center;
    align-items: center;
    margin: 10%;" >
                    <div class="contact__form w-75 h-100">
                        <form class="contact__form__inner w-100 d-flex align-items-center" method="post" action="{{ route('admin.business.store') }}">
                            @csrf

                                <input type="hidden" name="payment_status" value="{{$payment_method}}" />

                                <div class="flex-fill text-center">
                                <h2 class="fw-bold dark-color contact__form__inner__title">
                                        {{$payment_method == "free" ?  __('أضف عملك مجانا') : __('اعلن علي علاء الدين')}}
                                </h2>
                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('frontend.contact.phone')}}</span>
                                        <input type="text" name="phone" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('frontend.item.name')}}</span>
                                        <input type="text" name="name" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('اسم الشركة')}}</span>
                                        <input type="text" name="activity_name" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('رقم الشركة')}}</span>
                                        <input type="text" name="activity_phone" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('عنوان الشركة')}}</span>
                                        <input type="text" name="activity_address" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('ايميل الشركة')}}</span>
                                        <input type="text" name="activity_email" class="form-control my-input-container__input" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('وصف الشركة')}}</span>
                                        <input type="text" name="activity_description" class="form-control my-input-container__input" />
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label class="my-input-container">
                                        <span class="my-input-container__label">{{ __('النشاط')}}</span>
                                        <input type="text" name="activity" class="form-control my-input-container__input" />
                                    </label>
                                </div>

                                <button type="submit" class="btn btn-primary my-btn contact__form__inner__submit">
                                    {{ __('frontend.item.save')}}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>


@endsection
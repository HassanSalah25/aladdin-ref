@extends('backend.admin.layouts.app')

@section('content')
    <div class="row m-4">
        <div class="bg-light rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('admin.blog-category.store')}}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Title in English</label>
                    <input type="text" class="form-control" name="name" id="name">
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="content" class="form-label">Content in English</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="content_en" ></textarea>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="name_ar" class="form-label">Title in Arabic</label>
                    <input type="text" class="form-control" name="name_ar" id="name_ar">
                </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label for="content" class="form-label">Content in Arabic</label>
                        <div class="col">
                            <textarea class="aiz-text-editor form-control" placeholder="Description.." data-min-height="300" name="content_ar" ></textarea>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">{{__('Save')}}</button>
            </form>
        </div>
    </div>
@endsection

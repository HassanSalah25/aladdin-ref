@extends('backend.admin.layouts.app')

@section('styles')
@endsection

@section('content')
    <!-- Content Row -->
    <form action="{{route('get_yellow_page_data')}}" method="post" class="container border-left-danger border-bottom-danger shadow-inner shadow shadow-lg p-5" style="margin-top: 15%;margin-bottom: 15%;"
    enctype="multipart/form-data">
        @csrf
        <div class="row justify-content-center ">
            <div class="col-md-6 m=5">
                <label class="form-label">Category Name</label>
                <input type="text" class="form-control" name="category_name" required>
            </div>
            <div class="col-md-3 m=5">
                <label class="form-label">From Page</label>
                <input type="number" min="1" class="form-control" name="from_page" required>
            </div>
            <div class="col-md-3 m=5">
                <label class="form-label">To Page</label>
                <input type="number" min="1" class="form-control" name="to_page" required>
            </div>
            <div class="form-group mt-3 row justify-content-center">
                <button type="submit" class="btn btn-success col-md-3">Get</button>
            </div>
        </div>
    </form>

@endsection

@section('scripts')
@endsection

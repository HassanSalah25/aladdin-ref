@extends('backend.admin.layouts.app')

@section('styles')
    <!-- Custom styles for this page -->
    <link href="{{ asset('backend/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800">{{ __('blog.manage-blog') }}</h1>
            <p class="mb-4">{{ __('blog.manage-blog-desc') }}</p>
        </div>
        <div class="col-3 text-right">
            <a href="{{ route('admin.blogs.create') }}" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-plus"></i>
                </span>
                <span class="text">{{ __('blog.add-blog') }}</span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('admin.blogs.index')}}" class="col-md-6">
                        <label>search</label>
                        <input type="text" class="form-control" name="search_keyword" value="{{request('search_keyword')}}">
                        <button>submit</button>
                    </form>
                </div>
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th class="w-25">{{ __('blog.blog-image') }}</th>
                                <th>{{ __('blog.blog-name') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>{{ __('lan.blog-image') }}</th>
                                <th>{{ __('blog.blog-name') }}</th>
                                <th>{{ __('backend.shared.action') }}</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @foreach($all_blogs as $key => $blog)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ \Illuminate\Support\Facades\Storage::disk('public')->url('blog/'. $blog->image) }}"
                                             class="img-responsive" style="width: 125px">
                                    </td>
                                    <td>{{ $blog->title }}</td>
                                    <td>
                                        <a href="{{ route('admin.blogs.edit', $blog->id) }}" class="btn btn-primary btn-circle">
                                            <i class="fas fa-cog"></i>
                                        </a>
                                        <form method="POST" action="{{route('admin.blogs.destroy',$blog)}}">
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
                    {{$all_blogs->links()}}
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

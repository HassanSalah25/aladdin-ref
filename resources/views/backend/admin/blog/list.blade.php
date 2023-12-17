@extends('backend.admin.layouts.app')

@section('content')

    <div class="row">

        <div class="bg-light rounded h-100 p-4">
            <div class="row justify-content-between">
                <div class="col-2">
                    <h6 class="mb-4">{{__('All Blogs')}}</h6>
                </div>
                <div class="col-2">

                    <a href="{{route('admin.blog.create')}}" type="button" class="btn btn-success m-2 w-50">{{__('New')}}</a>

                </div>
                <form  class="row" action="{{route('admin.blog.index')}}" method="get">
                    <div class="col-md-3">
                        <input type="text" class="form-control" name="search_key" value="{{request('search_key')}}">
                        <button class="btn btn-success" type="submit">Done</button>
                    </div>

                </form>
            </div>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($blogs as $blog)
                    <tr>
                        <th scope="row">{{$blog->id}}</th>
                        <td>{{$blog->title_ar}}</td>
                        <td>
                            <a class="btn btn-info btn-icon btn-circle btn-sm"
                               href="{{ route('admin.blog.edit', ['blog' => $blog]) }}"
                               >{{ __('Edit') }}
                                <i class="las la-edit"></i>
                            </a>

                            <a class="btn btn-danger btn-icon btn-circle btn-sm"
                               href="{{ route('admin.blog.delete', $blog->id) }}"
                               >{{ __('Delete') }}
                                <i class="las la-trash"></i>
                            </a></td>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>
        <div class="row">
            {{$blogs->links()}}
        </div>

@endsection

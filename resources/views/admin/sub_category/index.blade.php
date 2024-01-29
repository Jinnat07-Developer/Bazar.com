@extends('admin.master')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Sub-Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub-Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Sub-Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Add Form</h3>
            </div>
            <div class="card-body bg-warning">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('sub-category.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Category Name</label>
                        <div class="col-md-9">
                            <select class="form-control" name="category_id">
                                <option value="">---Select----</option>
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Sub Category Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name"  placeholder="Enter the sub-category name" type="text" name="name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-md-3 form-label">Sub Category Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" placeholder="Enter description" type="text" name="description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="image" class="col-md-3 form-label">Sub Category Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="image"  placeholder="image" type="file" name="image">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="status" class="col-md-3 form-label">Sub Category Status</label>
                        <div class="col-md-9">
                            <label><input type="radio"  name="status" value="1" checked>Published</label>
                            <label><input type="radio"  name="status"  value="0">UnPublished</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Create New Sub-Category</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /row -->

@endsection



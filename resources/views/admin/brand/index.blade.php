@extends('admin.master')

@section('body')


    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Brand Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <!-- row -->
    <div class="row row-deck">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Add Form</h3>
                </div>
                <div class="card-body bg-warning">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="brandName" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="name" placeholder="Enter Brand Name" type="text" name="name">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="brandDescription" class="col-md-3 form-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="description" name="description" placeholder="Enter Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="brandImage" class="col-md-3 form-label">Brand Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="brandImage" placeholder="EnterImage" type="file" name="image">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="brandStatus" class="col-md-3 form-label">Brand Status</label>
                            <div class="col-md-9">
                                <label><input type="radio"  name="status" value="1" checked>Published</label>
                                <label><input  type="radio"  name="status" value="0" >UnPublished</label>
                            </div>
                        </div>
                        <button class="btn btn-white text-black" type="submit">Add new Brand</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->

@endsection

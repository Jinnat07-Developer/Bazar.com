@extends('admin.master')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Unit</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Unit Edit Form</h3>
            </div>
            <div class="card-body bg-warning">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('unit.update',['id'=>$unit->id])}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Unit Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name" value="{{$unit->name}}" placeholder="Enter the Unit name" type="text" name="name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="description" class="col-md-3 form-label">Unit Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="description" placeholder="Enter description" type="text" name="description">{{$unit->description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="image" class="col-md-3 form-label">Unit Code</label>
                        <div class="col-md-9">
                            <input class="form-control" id="code" value="{{$unit->code}}" placeholder="code" type="text" name="code">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="status" class="col-md-3 form-label">Unit Status</label>
                        <div class="col-md-9">
                            <label><input type="radio"  name="status" value="1" {{$unit->status == 1? 'checked':' '}}>Published</label>
                            <label><input type="radio"  name="status"  value="0" {{$unit->status == 0? 'checked':' '}}>UnPublished</label>
                        </div>
                    </div>
                    <button class="btn btn-white" type="submit">Update Unit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /row -->

@endsection



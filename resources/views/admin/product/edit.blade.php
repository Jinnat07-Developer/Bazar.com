@extends('admin.master')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Edit Form</h3>
            </div>
            <div class="card-body bg-warning">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action=" " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="category_id">
                                <option value="">---Select Category----</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" {{$category->id ==$product->category_id ? 'selected' :' '}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Sub Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="sub_category_id">
                                <option value="">---Select Sub Category----</option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}" {{$sub_category->id ==$product->sub_category_id ? 'selected' :' '}}>{{$sub_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Unit Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="unit_id">
                                <option value="">---Select Brand----</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}" {{$unit->id ==$product->unit_id ? 'selected' :' '}}>{{$unit->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Brand Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="brand_id">
                                <option value="">---Select Brand----</option>
                                @foreach($brands as $brand)
                                    <option value="{{$brand->id}}" {{$brand->id ==$product->brand_id ? 'selected' :' '}}>{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Product Name</label>
                        <div class="col-md-8">
                            <input class="form-control" id="name"  value="{{$product->name}}" type="text" name="name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="code" class="col-md-4 form-label">Product Code</label>
                        <div class="col-md-8">
                            <input class="form-control" id="code"  value="{{$product->code}}"  type="text" name="code"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="stock_amount" class="col-md-4 form-label">Stock Amount</label>
                        <div class="col-md-8">
                            <input class="form-control" id="stock_amount" value="{{$product->stock_amount}}" type="number" name="stock_amount"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="product_price" class="col-md-4 form-label">Product Price</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input class="form-control" id="regular_price"  value="{{$product->regular_price}}" type="number" name="regular_price"/>
                                <input class="form-control" id="selling_price"  value="{{$product->selling_price}}" type="number" name="selling_price"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="long_description" class="col-md-4 form-label">Long Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="summernote" placeholder="Enter description" type="text" name="long_description">{{$product->long_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="short_description" class="col-md-4 form-label">Short Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control"  placeholder="Enter description" type="text" name="short_description">{{$product->short_description}}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="image" class="col-md-4 form-label">Product Image</label>
                        <div class="col-md-8">
                            <input class="form-control" id="image"  placeholder="image" type="file" name="image">
                            <img src="{{asset($product->image)}}" alt="" width="100" height="100">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="otherImage" class="col-md-4 form-label">Other Image</label>
                        <div class="col-md-8">
                            <input class="form-control" id="otherImage"   type="file" name="other_image">
                            @foreach($product->otherImages as $otherImage)
                                <img src="{{asset($otherImage->image)}}" alt="" width="100" height="100">
                            @endforeach
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="status" class="col-md-4 form-label">Product Status</label>
                        <div class="col-md-8">
                            <label><input type="radio"  name="status" value="1" {{$product->status == 1 ? 'checked' :''}}>Published</label>
                            <label><input type="radio"  name="status"  value="0" {{$product->status == 0 ? 'checked' :''}}>UnPublished</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Update Product</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /row -->

@endsection





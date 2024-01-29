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
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                <form class="form-horizontal" action="{{route('product.store')}} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="category_id" onchange="getSubCategoryByCategory(this.value)">
                                <option value="">---Select Category----</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Sub Category Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="sub_category_id" id="subCategoryId">
                                <option value="">---Select Sub Category----</option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{$sub_category->id}}">{{$sub_category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Unit Name</label>
                        <div class="col-md-8">
                            <select class="form-control" name="unit_id">
                                <option value="">---Select Unit----</option>
                                @foreach($units as $unit)
                                    <option value="{{$unit->id}}">{{$unit->name}}</option>
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
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-4 form-label">Product Name</label>
                        <div class="col-md-8">
                            <input class="form-control" id="name"  placeholder="Enter product name" type="text" name="name"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="code" class="col-md-4 form-label">Product Code</label>
                        <div class="col-md-8">
                            <input class="form-control" id="code"  placeholder="Enter product code" type="text" name="code"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="stock_amount" class="col-md-4 form-label">Stock Amount</label>
                        <div class="col-md-8">
                            <input class="form-control" id="stock_amount"  placeholder="Enter stock amount" type="number" name="stock_amount"/>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="product_price" class="col-md-4 form-label">Product Price</label>
                        <div class="col-md-8">
                            <div class="input-group">
                                <input class="form-control" id="stock_amount"  placeholder="Enter regular price" type="number" name="regular_price"/>
                                <input class="form-control" id="stock_amount"  placeholder="Enter selling price" type="number" name="selling_price"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="long_description" class="col-md-4 form-label">Long Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control" id="summernote" placeholder="Enter description" type="text" name="long_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="short_description" class="col-md-4 form-label">Short Description</label>
                        <div class="col-md-8">
                            <textarea class="form-control"  placeholder="Enter description" type="text" name="short_description"></textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="image" class="col-md-4 form-label">Product Image</label>
                        <div class="col-md-8">
                            <input class="form-control" id="image"  placeholder="image" type="file" name="image">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="otherImage" class="col-md-4 form-label">Other Image</label>
                        <div class="col-md-8">
                            <input class="form-control" id="otherImage"  placeholder="image" type="file" name="other_image[]" multiple>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="status" class="col-md-4 form-label">Product Status</label>
                        <div class="col-md-8">
                            <label><input type="radio"  name="status" value="1" checked>Published</label>
                            <label><input type="radio"  name="status"  value="0" checked>UnPublished</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Create New Product</button>
                </form>
            </div>
        </div>
    </div>

    <!-- /row -->

@endsection




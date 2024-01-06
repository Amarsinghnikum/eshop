@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
    <h4>Add Product</h4>
    </div>
    <div class="card-body">
        <form action="{{url('/update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-12 mb-3">
                    <select class="form-select" aria-label="Default select example">
                        <option value="">&nbsp;&nbsp;&nbsp;{{ $products->category->name }}</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" value="{{ $products->name }}" class="form-label">
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;Slug&nbsp;&nbsp;</label>
                        <input type="text" name="slug" value="{{ $products->slug }}" class="form-label">
                    </div>
                </div>
                <label for=""></label>
                <div class="col-md-12">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">Small Description</label>
                    <textarea name="small_description" rows="3" class="form-label">{{ $products->small_description }}</textarea>
                </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</label>
                    <textarea name="description" rows="3" class="form-label">{{ $products->description }}</textarea>
                </div>
                </div>
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;
                          &nbsp;Original Price&nbsp;&nbsp;</label>
                        <input type="number" name="original_price" value="{{ $products->original_price }}" class="form-label">
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Selling Price&nbsp;&nbsp;</label>
                        <input type="number" name="selling_price" value="{{ $products->selling_price }}" class="form-label">
                    </div>
                </div>
                <label for=""></label>
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;&nbsp;Tax&nbsp;&nbsp;</label>
                        <input type="number" name="tax" value="{{ $products->tax }}" class="form-label">
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;Quantity&nbsp;&nbsp;</label>
                        <input type="number" name="qty" value="{{ $products->qty }}" class="form-label">
                    </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</label>
                    <input type="checkbox" class="form-label" name="status" {{ $products->status=="1"?"Checked":""}}>
                </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trending&nbsp;&nbsp;&nbsp;</label>
                    <input type="checkbox" name="trending" value="{{ $products->trending }}" {{ $products->trending=="1"?"Checked":""}} class="form-label">
                </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meta Title&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="meta_title" value="{{ $products->meta_title }}" class="form-label">
                    </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-label">{{ $products->meta_keywords }}</textarea>
                </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-label">{{ $products->meta_description }}</textarea> 
                </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-12">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="file" name="image" class="form-label">
                    <img src="{{url('assets/uploads/products/'.$products->image)}}" class="cate-image" alt="">
                </div>
                </div>

                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

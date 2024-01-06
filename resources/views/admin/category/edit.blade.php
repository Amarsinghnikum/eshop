@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
    <h1>Edit Category</h1>
    </div>
    <div class="card-body">
        <form action="{{url('/update-category/'.$category->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center"> 
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="name" value="{{$category->name}}" class="form-label">
                    </div>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <div class="col-md-4">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                      <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                          &nbsp;Slug&nbsp;&nbsp;</label>
                        <input type="text" name="slug" value="{{$category->slug}}" class="form-label">
                    </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-12">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Description</label>
                    <textarea name="description" rows="3" class="form-label">{{$category->description}}</textarea>
                </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Status&nbsp;&nbsp;&nbsp;</label>
                    <input type="checkbox" class="form-label" name="status" value="status" {{$category->status=="1"?"Checked":""}}>
                </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Popular&nbsp;&nbsp;&nbsp;</label>
                    <input type="checkbox" name="popular" class="form-label" value="popular" {{$category->popular=="1"?"Checked":""}}>
                </div>
                </div>
                <label for="">&nbsp;</label>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meta Title&nbsp;&nbsp;&nbsp;</label>
                    <input type="text" name="meta_title" class="form-label" value="{{$category->meta_title}}">
                    </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">Meta Keywords</label>
                    <textarea name="meta_keywords" rows="3" class="form-label">{{$category->meta_keywords}}</textarea>
                </div>
                </div>
                <div class="col-md-6">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">Meta Description</label>
                    <textarea name="meta_description" rows="3" class="form-label">{{$category->meta_descrip}}</textarea> 
                </div>
                </div>
                <label for="">&nbsp;</label>
                
                <div class="col-md-12">
                <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                    <label for="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="file" name="image" class="form-label">
                    <img src="{{ asset('assets/uploads/category/'.$category->image )}}" width="100px" alt="Category Image">
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

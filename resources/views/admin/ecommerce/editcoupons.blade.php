@extends('layouts.index')

@section('editcoupons')





<div class="page-body">
<div class="container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-6">
        <h3>Validation Forms</h3>
      </div>
      <div class="col-6">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
          <li class="breadcrumb-item"> Form Controls</li>
          <li class="breadcrumb-item active"> Validation Forms</li>
        </ol>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid starts-->
<div class="container-fluid">
  <div class="row">
    <div class="col-sm-12">
      <div class="card">
        <div class="card-header pb-0">
          <h3>Create FAQ</h3>
        </div>
        <div class="card-body">
          <form class="needs-validation" novalidate=""    method="post" action="{{route('admin.ecommerce.updatecoupons',$coupon -> id)}}" >
            @csrf
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label" for="validationCustom01">Title</label>
                <input class="form-control" id="validationCustom01" type="text" name="titele"  value="{{$coupon -> titele}}"  required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
           

                <div class="col-md-4">
                <label class="form-label" for="validationCustom02">Code </label>
                <input class="form-control" id="validationCustom02" type="text" name="code" value="{{$coupon -> code}}"  required="">
                <div class="valid-feedback">Looks good!</div>
              
              </div>
              <div class="col-md-4">
                <label class="form-label" for="validationCustom02">Number Of Times </label>
                <input class="form-control" id="validationCustom02" type="text" name="times" value="{{$coupon -> times}}"  required="">
                <div class="valid-feedback">Looks good!</div>
              
              </div>

              <div class="col-md-4">
                <label class="form-label" for="validationCustom02">Discount  </label>
                <input class="form-control" id="validationCustom02" type="text" name="discount" value="{{$coupon -> discount}}" required="">
                <div class="valid-feedback">Looks good!</div>
              
              </div>
            </div>
            <div class="row g-3">
            
              
              
            </div>
            <div class="mb-3">
              <div class="form-check">
               
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
@stop
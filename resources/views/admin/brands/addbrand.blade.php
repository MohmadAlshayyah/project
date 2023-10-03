@extends('layouts.index')

@section('addbrand')





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
          <h3>Create Category </h3>
        </div>
        <div class="card-body">
          <form class="needs-validation" method="post" action="{{route('admin.brands.store')}}"  enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
              <div class="col-md-4">
                <label class="form-label" for="validationCustom01">Name</label>
                <input class="form-control" id="validationCustom01" type="text" name="name" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4">
                <label class="form-label" for="validationCustom02">Slug</label>
                <input class="form-control" id="validationCustom02" type="text" name="slug" required="">
                <div class="valid-feedback">Looks good!</div>
              </div>
              <div class="col-md-4 mb-3">
                <label class="form-label" for="validationCustomUsername">Image</label>
                <div class="input-group left-radius">>
                  <input class="form-control" id="validationCustomUsername" type="file" name="photo" placeholder="Image" aria-describedby="inputGroupPrepend" required="">
                  <div class="invalid-feedback">Please choose a username.</div>
                </div>
              </div>
            </div>
            <div class="row g-3">
         
            
            </div>
            <div class="mb-3">
              <div class="form-check">
                <div class="checkbox p-0">
                  <input class="form-check-input" id="invalidCheck" type="checkbox" required="">
                  <label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
                </div>
                <div class="invalid-feedback">You must agree before submitting.</div>
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Submit form</button>
          </form>
        </div>
      </div>
@stop
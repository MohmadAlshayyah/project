@extends('layouts.index')

@section('brand')
  <!-- Page Sidebar Ends-->


  <style>

.purple-button {
  display: inline-block;
  padding: 10px 20px;
  background-color: #8a2be2; /* اللون البنفسجي */
  color: white;
  text-decoration: none;
  border-radius: 5px;
  font-weight: bold;
  transition: background-color 0.3s ease;
}

.purple-button:hover {
  background-color: #6a1cb7; /* تغيير لون الخلفية عند التحويم */
}
  </style>
  <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Basic DataTables</h3>

                  <br>
                  <br>
                  
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index">                                       <i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Data Tables</li>
                    <li class="breadcrumb-item active">Basic DataTables</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
     <!-- Container-fluid starts-->
     <div class="container-fluid">
            <div class="row">
              <!-- Zero Configuration  Starts-->
              <div class="col-sm-12">
                <div class="card">
                  <div class="card-header pb-0">
                    <h2>Product Reviews</h2>

                    <a href="addbrand" class="purple-button"> + add</a>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Sulg</th>
                            <th>Status</th>
                            <th> Popular</th>
                        
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                       
                        @foreach($brands as $brand)
                          <tr>
                            <td> {{$brand -> name}}</td>
                            <td><img  style="width: 90px; height: 90px;" src="{{asset('images/offers/'.$brand -> photo)}}"></td>
                            <td>{{$brand -> slug}}</td>
                            <td>66</td>
                            <td>2009/01/12</td>
                       
                            <td> 
                              <ul class="action"> 
                              <li class="edit"> <a href="{{url('brands/editbrand/'.$brand -> id)}}"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="{{url('brands/deletebrand/'.$brand -> id)}}"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->

@stop
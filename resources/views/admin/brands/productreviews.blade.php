@extends('layouts.index')

@section('productreviews')

    <!-- Page Sidebar Ends-->
    <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>Basic DataTables</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">                                       <i data-feather="home"></i></a></li>
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
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="display" id="basic-1">
                        <thead>
                          <tr>
                            <th>Name</th>
                            <th>Product</th>
                            <th>Rating</th>
                            <th>Status</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Tiger Nixon</td>
                            <td><a href="#">fjbdgbhuihddughdfighdfndfghfiudfhidgdfgiuxhxvkxdhvudxufdx</a></td>
                            <td>Edinburgh</td>
                            <td>61</td>
                           
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Garrett Winters</td>
                           
                            <td><a href="#">fjbdgbhuihddughdfighdfndfghfiudfhidgdfgiuxhxvkxdhvudxufdx</a></td>    
                           
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Ashton Cox</td>
                            <td><a href="#">fjbdgbhuihddughdfighdfndfghfiudfhidgdfgiuxhxvkxdhvudxufdx</a></td>    
                            <td>San Francisco</td>
                            <td>66</td>
                        
                            
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
                          <tr>
                            <td>Cedric Kelly</td>
                        <td><a href="#">fjbdgbhuihddughdfighdfndfghfiudfhidgdfgiuxhxvkxdhvudxufdx</a></td>
                            <td>Edinburgh</td>
                            <td>22</td>
                           
                            
                            <td> 
                              <ul class="action"> 
                                <li class="edit"> <a href="#"><i class="icon-pencil-alt"></i></a></li>
                                <li class="delete"><a href="#"><i class="icon-trash"></i></a></li>
                              </ul>
                            </td>
                          </tr>
             
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Zero Configuration  Ends-->
              
@stop
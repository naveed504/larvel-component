@extends('admin.layouts.master')
@section('content')
@php $argument = "addUser" @endphp       

<div class="main-content container-fluid">
    <div class="row" id="basic-table">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Table with outer spacing</h4>
           
              <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add User</button>
              
            </div>
           
            <div class="card-content">
              <div class="card-body">
                <p class="card-text">Using the most basic table up, here’s how
                  <code>.table</code>-based tables look in Bootstrap. You can use any example
                  of below table for your table and it can be use with any type of bootstrap tables.</p>
                <!-- Table with outer spacing -->
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#No</th>
                        <th>NAME</th>
                        <th>Email</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                   
                    @foreach ($users as $user)
                   <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ ($user->name) }}</td>
                    <td>{{ ($user->email) }}</td>
                  </tr>
                        
                    @endforeach
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
       
    </div>
</div>
@include('admin.modal.modal')
@endsection
@section('secript')
<script>
  $(document).ready(function(){
    $("#modalTitle").html("Add New User"); 
  });
</script>
@endsection
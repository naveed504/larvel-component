@extends('admin.layouts.master')
@section('content')
<div class="main-content container-fluid">
    <div class="row" id="basic-table">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Roles And Permissions</h4>
             
            
            </div>       
           @include('admin.modal.modal')
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
                        <th>Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>

                      @forelse($roles as $role)
                      <tr>
                        <td class="text-bold-500">{{ $loop->iteration }}</td>
                        <td>{{ $role->name }}</td>
                        <td class="text-bold-500">
                          <a href=""><i class="fas fa-trash"></i></a>
                          <a href=""><i class="fas fa-edit"></i></a>
                        </td> 
                       
                        @empty
                        <p>"User Not Found"</p>                     
                      </tr>
                      @endforelse
                      
                      
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection

@section('secript')
<script>
  $(document).ready(function(){
    $("#modalTitle").html("Add New Role"); 
  });
</script>
@endsection
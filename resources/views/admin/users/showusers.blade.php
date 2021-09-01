@extends('admin.layouts.master')
@section('content')
<div class="main-content container-fluid">
    <div class="row" id="basic-table">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Table with outer spacing</h4>
              <button class="btn btn-primary float-right" data-toggle="modal" data-target="#myModal">Add User</button>
            </div>
            <?php $argument = 2?>        
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
                        <th>NAME</th>
                        <th>Email</th>
                        <th>Authoritize</th>
                      </tr>
                    </thead>
                    <tbody>
                     
                      @forelse($users as $user)
                      <tr>
                        <td class="text-bold-500">{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td class="text-bold-500">{{ $user->email }}</td> 
                        @foreach ($user->roles as $role)
                        <td class="text-bold-500">{{ $role->name }}</td>    
                        @endforeach  
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
    $("#modalTitle").html("Add New User"); 
  });
</script>
@endsection
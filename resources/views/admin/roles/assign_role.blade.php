@extends('admin.layouts.master')
@section('content')
<div class="main-content container-fluid">
    <div class="row" id="basic-table">
        <div class="col-12 ">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">User Roles And Permissions</h4>
              
            </div>       
           
            <div class="card-content">
              <div class="card-body">
                <p class="card-text">Using the most basic table up, here’s how
                  <code>.table</code>-based tables look in Bootstrap. You can use any example
                  of below table for your table and it can be use with any type of bootstrap tables.</p>
                <!-- Table with outer spacing -->
                <div class="">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>#No</th>
                        <th>User Name</th>
                        <th>Roles</th>
                        <th>Permissions</th>
                      </tr>
                    </thead>
                    <tbody>
                        @forelse($users as $user)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @forelse($user->roles as $role)
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label float-right" for="inlineCheckbox1" >{{ $role->name }}</label>
                                    <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="assign_role" value="option1">
                                </div>
                                @empty
                                No Roles Found
                                @endforelse
                            </td>
                            <td>Permissions</td>
                          </tr>
                          @empty
                          <p>No Records Found</p>
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
    $("#modalTitle").html("Add New Permission"); 
  });
</script>
@endsection
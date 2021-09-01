<div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">  
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" id="modalTitle">Role Change  According Form</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>  
        <!-- Modal body -->
        <div class="modal-body">
          @if($argument ==1)
          @include('admin.roles.create_role')
          @elseif($argument == 2)        
          @include('admin.users.create_user_form')
         @elseif($argument == 3)
         @include('admin.roles.create_permission')
         @endif   
        </div>  
        <!-- Modal footer -->
         
      </div>
    </div>
  </div>
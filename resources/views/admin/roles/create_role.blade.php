<form action="{{ route('saverole') }}" method="post" class="form form-vertical">
    @csrf
     <div class="form-body">
         <div class="row">
           <div class="col-12">
               <div class="form-group has-icon-left">
                   <label for="first-name-icon">Role Name</label>
                   <div class="position-relative">
                       <input type="text" name="role_name" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                       <div class="form-control-icon">
                           <i data-feather="user"></i>
                       </div>
                   </div>
                   @if($errors->has('role_name'))
                       <div class="error ">{{ $errors->first('role_name') }}</div>
                   @endif
               </div>
           </div>        
         </div>
     </div>
   @include('admin.modal.modal_buttons')    
 </form>
 
 

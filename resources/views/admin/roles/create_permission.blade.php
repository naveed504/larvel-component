<form action="{{ route('savepermission') }}" method="post" class="form form-vertical">
    @csrf
     <div class="form-body">
         <div class="row">
           <div class="col-12">
               <div class="form-group has-icon-left">
                   <label for="first-name-icon">Create Permission</label>
                   <div class="position-relative">
                       <input type="text" name="permission_name" class="form-control" placeholder="Create New Permission" id="first-name-icon">
                       <div class="form-control-icon">
                           <i data-feather="user"></i>
                       </div>
                   </div>
                   @if($errors->has('permission_name'))
                       <div class="error ">{{ $errors->first('permission_name') }}</div>
                   @endif
               </div>
           </div>        
         </div>
     </div>
   @include('admin.modal.modal_buttons')    
 </form>
 
 


                <form action="{{ route('register') }}" method="post" class="form form-vertical">
                    @csrf
                <div class="form-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group has-icon-left">
                                <label for="first-name-icon">First Name</label>
                                <div class="position-relative">
                                    <input type="text" name="name" class="form-control" placeholder="Input with icon left" id="first-name-icon">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div class="col-12">                        
                        <div class="form-group has-icon-left">
                            <label for="email-id-icon">Email</label>
                            <div class="position-relative">
                                <input type="text" class="form-control" name="email" placeholder="Email" id="email-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="mail"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group has-icon-left">
                            <label for="mobile-id-icon">Password</label>
                            <div class="position-relative">
                                <input type="password" class="form-control" name="password" password ="password" placeholder="Password" id="mobile-id-icon">
                                <div class="form-control-icon">
                                    <i data-feather="lock"></i>
                                </div>
                            </div>
                        </div>
                    </div>      
                    <div class="col-12">
                        <div class='form-check'>
                            <div class="checkbox mt-2">
                                <input type="checkbox" id="remember-me-v" class='form-check-input' checked>
                                <label for="remember-me-v">Remember Me</label>
                            </div>
                        </div>
                    </div>                  
                </div>
                @include('admin.modal.modal_buttons') 
                </form>
           
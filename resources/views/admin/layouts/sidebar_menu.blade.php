<li class='sidebar-title'>Main Menu</li>
    @component('admin.layouts.sidebar_link')
        @slot('link') "#" @endslot
        @slot('icon')<i data-feather="home" width="20"></i> @endslot
        @slot('name')Dashboard @endslot
    @endcomponent

    @component('admin.layouts.sidebar_link')
        @slot('link') {{ route('manage-user.index') }} @endslot
        @slot('icon')<i data-feather="user" width="20"></i> @endslot
        @slot('name') Users @endslot
    @endcomponent
   
    @component('admin.layouts.sidebar_link')
        @slot('link') {{ route('assignrole') }} @endslot
        @slot('icon')<i data-feather="trending-up" width="20"></i> @endslot
        @slot('name')Roles @endslot
    @endcomponent

    @component('admin.layouts.sidebar_link')
        @slot('link') {{ route('createpermissions') }} @endslot
        @slot('icon')<i data-feather="trending-up" width="20"></i> @endslot
        @slot('name')Permissions @endslot
    @endcomponent

    @component('admin.layouts.sidebar_link')
        @slot('link') {{ route('assignuserrole') }} @endslot
        @slot('icon')<i data-feather="home" width="20"></i> @endslot
        @slot('name')Assign Role @endslot
    @endcomponent

@component('admin.layouts.sidebar_link')
    @slot('link') "#" @endslot
    @slot('icon')<i data-feather="home" width="20"></i> @endslot
    @slot('name')Dashboard @endslot
@endcomponent
   

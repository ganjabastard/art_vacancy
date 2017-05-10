<!-- Right links for user info navbar -->
<ul class="user-info-menu right-links list-inline list-unstyled">
    <li class="dropdown user-profile">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('assets/images/user-4.png') }}" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
            <span>
								{{ auth()->user()->name }}
								<i class="fa-angle-down"></i>
							</span>
        </a>

        <ul class="dropdown-menu user-profile-menu list-unstyled">
            <li>
                <a href="#profile">
                    <i class="fa-user"></i>
                    Profile
                </a>
            </li>
            <li class="last">
                <a href="{{ url('logout') }}">
                    <i class="fa-lock"></i>
                    Logout
                </a>
            </li>
        </ul>
    </li>
</ul>
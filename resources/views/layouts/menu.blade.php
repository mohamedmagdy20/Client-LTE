<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.index') }}" class="nav-link {{ Request::is('dashboard/admin') ? 'active' : '' }}">
        <i class="nav-icon fas fa-user"></i>
        <p>Users</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fa fa-message"></i>
        <p>Requests</p>
    </a>
</li>
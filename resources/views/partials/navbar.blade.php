<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" style="font-weight: 700;letter-spacing: 0.6px;">
        <li class="nav-item {{ Request::path() == '/a' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">TU重組方案</a>
        </li>
        <li class="nav-item {{ Request::path() == '/b' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">債務舒緩</a>
        </li>
        <li class="nav-item {{ Request::path() == '/c' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">物業套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/d' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">加按套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/e' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/')}}">聯絡我們</a>
        </li>
    </ul>
</div>

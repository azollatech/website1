<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" style="font-weight: 700;letter-spacing: 0.6px;">
        <li class="nav-item {{ Request::path() == '/tu-debt-restructuring' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/tu-debt-restructuring')}}">TU重組方案</a>
        </li>
        <li class="nav-item {{ Request::path() == '/debt-relief-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/debt-relief-loan')}}">債務舒緩</a>
        </li>
        <li class="nav-item {{ Request::path() == '/mortgage-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/mortgage-loan')}}">物業套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/property-refinancing' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/property-refinancing')}}">加按套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/bankruptcy-consultation' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/bankruptcy-consultation')}}">破產諮詢</a>
        </li>
        <li class="nav-item {{ Request::path() == '/contact-us' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/contact-us')}}">聯絡我們</a>
        </li>
    </ul>
</div>

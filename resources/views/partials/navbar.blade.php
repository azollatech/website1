<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" style="font-weight: 700;letter-spacing: 0.6px;">
        <li class="nav-item {{ Request::path() == 'tu-debt-restructuring' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/tu-debt-restructuring')}}">TU重組方案</a>
        </li>
        <li class="nav-item {{ Request::path() == 'debt-relief-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/debt-relief-loan')}}">債務舒緩</a>
        </li>
        {{-- <li class="nav-item {{ Request::path() == '/mortgage-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/mortgage-loan')}}">貸款產品</a>
        </li> --}}
        <li class="nav-item dropdown {{ Request::path() == 'mortgage-loan' || Request::path() == 'personal-loan' || Request::path() == 'owner-loan' ? 'active' : '' }}">
            <a class="nav-link dropdown-toggle" href="mortgage-loan" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                貸款產品
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="mortgage-loan">物業按揭貸款</a>
                <a class="dropdown-item" href="personal-loan">私人貸款</a>
                <a class="dropdown-item" href="owner-loan">中小企業主貸款</a>
            </div>
        </li>
        <li class="nav-item {{ Request::path() == 'property-refinancing' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/property-refinancing')}}">加按套現</a>
        </li>
        <li class="nav-item {{ Request::path() == 'bankruptcy-consultation' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/bankruptcy-consultation')}}">破產諮詢</a>
        </li>
        <li class="nav-item {{ Request::path() == 'contact-us' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/contact-us')}}">聯絡我們</a>
        </li>
    </ul>
</div>

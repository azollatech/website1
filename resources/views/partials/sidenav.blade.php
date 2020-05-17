<div id="sidenav" {{-- style="overflow-y: scroll;" --}}>
    <button class="hamburger" style="color: #333333;"><i class="material-icons md-32">close</i></button>
    <ul class="list-unstyled" style="width: 300px;">
        <li class="nav-item {{ Request::path() == '/tu-debt-restructuring' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/tu-debt-restructuring')}}">&nbsp;&nbsp;TU重組方案</a>
        </li>
        <li class="nav-item {{ Request::path() == '/debt-relief-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/debt-relief-loan')}}">&nbsp;&nbsp;債務舒緩</a>
        </li>
        <li class="nav-item {{ Request::path() == '/mortgage-loan' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/mortgage-loan')}}">&nbsp;&nbsp;物業套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/property-refinancing' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/property-refinancing')}}">&nbsp;&nbsp;加按套現</a>
        </li>
        <li class="nav-item {{ Request::path() == '/contact-us' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/contact-us')}}">&nbsp;&nbsp;聯絡我們</a>
        </li>
    </ul>
</div>
<div id="sidenav-overlay" style="opacity: 0;">
</div>

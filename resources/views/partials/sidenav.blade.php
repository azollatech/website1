<div id="sidenav" {{-- style="overflow-y: scroll;" --}}>
    <button class="hamburger" style="color: #333333;"><i class="material-icons md-32">close</i></button>
    <ul class="list-unstyled" style="width: 300px;">
        <li class="nav-item {{ Request::path() == '/' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/calendar')}}">&nbsp;&nbsp;TU重組方案</a>
        </li>
        <li class="nav-item {{ Request::path() == 'runners' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/runners')}}">&nbsp;&nbsp;債務舒緩</a>
        </li>
        <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/about')}}">&nbsp;&nbsp;物業套現</a>
        </li>
        <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/about')}}">&nbsp;&nbsp;加按套現</a>
        </li>
        <li class="nav-item {{ Request::path() == 'about' ? 'active' : '' }}">
            <a class="nav-link" href="{{url('/about')}}">&nbsp;&nbsp;聯絡我們</a>
        </li>
    </ul>
</div>
<div id="sidenav-overlay" style="opacity: 0;">
</div>

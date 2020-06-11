<div id="sidenav" {{-- style="overflow-y: scroll;" --}}>
    <button class="hamburger" style="color: #333333;"><i class="material-icons md-32">close</i></button>
    <ul class="list-unstyled" style="width: 300px;">
        <li class="nav-item {{ Request::path() == '/tu-debt-restructuring' ? 'active' : '' }}">
            <a class="nav-link color-1" href="{{url('/tu-debt-restructuring')}}"><img src="http://localhost:8888/img/icn-1.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">TU重組方案</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/debt-relief-loan' ? 'active' : '' }}">
            <a class="nav-link color-2" href="{{url('/debt-relief-loan')}}"><img src="http://localhost:8888/img/icn-2.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">債務舒緩</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/mortgage-loan' ? 'active' : '' }}">
            <a class="nav-link color-3" href="{{url('/mortgage-loan')}}"><img src="http://localhost:8888/img/icn-3.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">貸款產品</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/property-refinancing' ? 'active' : '' }}">
            <a class="nav-link color-4" href="{{url('/property-refinancing')}}"><img src="http://localhost:8888/img/icn-5.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">加按套現</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/bankruptcy-consultation' ? 'active' : '' }}">
            <a class="nav-link color-5" href="{{url('/bankruptcy-consultation')}}"><img src="http://localhost:8888/img/icn-4.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">破產諮詢</span></a>
        </li>
        <li class="nav-item {{ Request::path() == '/contact-us' ? 'active' : '' }}">
            <a class="nav-link color-6" href="{{url('/contact-us')}}"><img src="http://localhost:8888/img/icn-6.png" width="28" height="28" style="vertical-align: middle;">&nbsp;&nbsp;<span style="vertical-align: middle;">聯絡我們</span></a>
        </li>
    </ul>
</div>
<div id="sidenav-overlay" style="opacity: 0;">
</div>

<nav class="navbar navbar-expand-lg navbar-light py-3" style="
position: fixed;
z-index: 10000;
width: 100%;
top: 0;
background: rgba(51, 52, 60, 0.91);
background: linear-gradient(0deg, rgba(255,255,255,0) 0%, rgba(51, 52, 60, 0.91) 70%);
">
    <div class="container position-relative">
        <a class="navbar-brand" href="{{url('/')}}">
            <h1 class="text-white" style="
                font-size: 2.2rem;
                letter-spacing: 1px;
                text-shadow: 0px 1px 4px rgba(0,0,0,0.3);
                border-bottom: 6px double #fff;">還原理財中心</h1>
        </a>
        <button class="hamburger d-block d-lg-none" style="
            top: 2px;
            padding: 0;
            height: 32px;
            width: 32px;
            outline: none;"><i class="material-icons md-32">menu</i></button>
        @include('partials.navbar')
    </div>
</nav>

<nav id="hidden-navbar" class="navbar navbar-expand-lg navbar-light" style="
position: fixed;
top: -86px;
z-index: 1000;
background: #fff;
box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16), 0 2px 10px 0 rgba(0,0,0,0.12);
width: 100%;">
    <div class="container position-relative">
        <a class="navbar-brand" href="{{url('/')}}">
            <h1>還原理財中心</h1>
        </a>
        <button class="hamburger d-block d-lg-none" style="
        margin: 0;
        position: absolute;
        top: 50%;
        right: 0;
        transform: translate(0, -50%);
        "><i class="material-icons md-32">menu</i></button>
        @include('partials.navbar')
    </div>
</nav>

<div class="header-top clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-5 ">
                <p>Brain & Spine Surgeon</p>
            </div>
            <!--opening hours-->
            <div class="col-md-7 text-right">
                <p>
                    Opening Hours : <span>Monday to Saturday - 8am to 9pm</span>
                    <br class="visible-xs">&nbsp;&nbsp;Contact : <span>+1-800-654-3210</span>
                </p>
            </div>

        </div>
    </div>
</div>


<header id="header">
    <div class="container">

        <!-- Website Logo -->
        <div class="logo clearfix">
            <a href="{{url('/')}}">
                <img src="images/dr.png" alt="Medicalpress">
            </a>
        </div>
        <!-- Main Navigation -->
        <nav class="main-menu">
            <ul class="header-nav clearfix" id="menu-main-menu">
                <li class="{{(request()->is('/'))?'current-menu-item':''}}">
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li class="{{(request()->is('doctorProfile'))?'current-menu-item':''}}">
                    <a href="{{url('/doctorProfile')}}">Doctor Profile</a>
                </li>
                <li class="{{(request()->is('gallery'))?'current-menu-item':''}}">
                    <a href="{{url('/gallery')}}">Gallery</a>
                </li>
                <li class="{{(request()->is('newsAndBlogs'))?'current-menu-item':''}}">
                    <a href="{{url('/newsAndBlogs')}}">News & Blogs</a>
                </li >
                <li class="{{(request()->is('researchAndPublication'))?'current-menu-item':''}}">
                    <a href="{{url('/researchAndPublication')}}">Research & Publications</a>
                </li>
                <li class="{{(request()->is('makeAppointment'))?'current-menu-item':''}}">
                    <a href="{{url('/makeAppointment')}}">Appointment</a>
                </li>
                <li class="{{(request()->is('contact'))?'current-menu-item':''}}">
                    <a href="{{url('/contact')}}">Contact</a>
                </li>
            </ul>
        </nav>
        <div id="responsive-menu-container"></div>
    </div>
</header>

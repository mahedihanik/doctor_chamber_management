@extends("UserSite.Layout.app")
@section('content')
    @include('UserSite.Components.pageHeader')
    <div class="gallery-page clearfix">
        <!--filter-->
        <div class="container">
            <div class="blog-page-single clearfix">
                <article  class="page hentry clearfix">
                    <div class="full-width-contents">
                        <div class="entry-content">
                        </div>
                    </div>
                </article>
            </div>
            <ul id="filters">
                <li class="active"><a href="#" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".advanced-technology">Advanced Technology</a></li>
                <li><a href="#" data-filter=".free-facilities">Free Facilities</a></li>
                <li><a href="#" data-filter=".health-counseling">Health Counseling</a></li>
                <li><a href="#" data-filter=".kids-care">Kids Care</a></li>
                <li><a href="#" data-filter=".patient-care">Patient Care</a></li>
                <li><a href="#" data-filter=".pharmaceutical-care">Pharmaceutical Care</a></li>
                <li><a href="#" data-filter=".professional-staff">Professional Staff</a></li>
            </ul>
        </div>

        <div class="container isotope-wrapper text-center">
            <div class="row">
                <div id="isotope-container" class="clearfix">
                    <!--column start-->
                    <div class="isotope-item advanced-technology free-facilities col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-11.jpg" title="Medical Record Keeping">
                                    <img src="images/temp-images/gallery-11-670x500.jpg" alt="gallery-1" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-11.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-record.html">Medical Record Keeping</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Advanced Technology</a>,
                                    <a href="#">Free Facilities,Free Facilities</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--column end-->

                    <!--column start-->
                    <div class="isotope-item free-facilities patient-care col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-41.jpg" title="Blood Pressure Checkup">
                                    <img src="images/temp-images/gallery-41-670x500.jpg"  alt="gallery-4" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-41.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-checkup.html">Blood Pressure Checkup</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Free Facilities</a>,
                                    <a href="#">Patient Caring facilities</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--column end-->

                    <!--column start-->
                    <div class="isotope-item health-counseling kids-care professional-staff col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-31.jpg" title="Kids Treatment">
                                    <img src="images/temp-images/gallery-31-670x500.jpg" alt="gallery-3" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-31.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-treatment.html">Kids Treatment</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Health Counseling</a>,
                                    <a href="#">Kids Care</a>,
                                    <a href="#">Professional Staff</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--column end-->

                    <!--column start-->
                    <div class="isotope-item health-counseling patient-care col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-5.jpg" title="Health Counseling">
                                    <img src="images/temp-images/gallery-5-670x500.jpg"  alt="gallery-5" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-5.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-counseling.html">Health Counseling</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Health Counseling</a>,
                                    <a href="#">Patient Care,Patient Care</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--column end-->

                    <!--column start-->
                    <div class="isotope-item advanced-technology pharmaceutical-care col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-6.jpg" title="Advanced Lab">
                                    <img  src="images/temp-images/gallery-6-670x500.jpg"  alt="gallery-6" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-6.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-lab.html">Advanced Lab</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Advanced Technology</a>,
                                    <a href="#">Pharmaceutical Care</a>
                                </div>
                            </div>
                        </article>
                    </div>
                    <!--column end-->

                    <!--column start-->
                    <div class="isotope-item patient-care professional-staff col-md-3 col-sm-6 ">
                        <article class="common clearfix hentry four-col-gallery">
                            <figure class="overlay-effect">
                                <a href="images/temp-images/gallery-7.jpg" title="Well Trained Staff">
                                    <img src="images/temp-images/gallery-7-670x500.jpg"  alt="gallery-7" />
                                </a>
                                <a class="overlay" href="images/temp-images/gallery-7.jpg"><i class="top"></i> <i class="bottom"></i></a>
                            </figure>
                            <div class="content clearfix">
                                <h4><a href="gallery-single-staff.html">Well Trained Staff</a></h4>

                                <div class="gallery-item-types">
                                    <a href="#">Patient Care</a>,
                                    <a href="#">Professional treatment Staff</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

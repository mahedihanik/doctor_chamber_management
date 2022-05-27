@extends("UserSite.Layout.app")
@section('content')
    @include('UserSite.Components.pageHeader')
    <div class="faq-page clearfix">
        <div class="container">
            <!-- Filter -->
            <ul id="filters">
                <li class="active"><a class="no-isotope" href="#" data-filter="*">All</a></li>
                <li><a class="no-isotope" href="#" data-filter=".available-facilities">Research</a></li>
                <li><a class="no-isotope" href="#" data-filter=".health-record">Publications</a></li>
            </ul>
            <div class="blog-page-single clearfix">
                <article class="page  hentry  clearfix">
                    <div class="full-width-contents">
                        <div class="entry-content">
                            <p>This is some basic text information about the FAQs page. You can leave it empty if you do not want to display this information. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="toggle-main faq">
                <div class="toggle health-record">
                    <div class="toggle-title">
                        <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>What information can be found in my health record</h3>
                    </div>
                    <div class="toggle-content">
                        <!--FAQ detail-->
                        <div class="entry-content">
                            <p>health record is created any time you see a health professional such as a doctor, nurse, dentist, chiropractor, or psychiatrist. You could find the following in your health record:</p>
                            <ul>
                                <li>Your medical history and your family’s medical history</li>
                                <li>Labs and x-rays</li>
                                <li>Medications prescribed</li>
                                <li>Alcohol use and sexual activity</li>
                                <li>Details about your lifestyle (smoking, exercise, recreational drug use, high-risk sports, stress levels)</li>
                                <li>Doctor/nurse notes</li>
                                <li>Results of operations and proceduresGenetic testing</li>
                                <li>Research participation</li>
                                <li>Any Information you provide on applications for disability, life or accidental insurance with private insurers or government programs</li>
                                <li>Driver’s License</li>
                                <li>Social Security Number</li>
                                <li>Financial information such as credit cards and payment info</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="toggle health-record">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Who has access to my health records</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Many more people than you would ever want, including people outside the health care industry.</p>
                            <ul>
                                <li >Insurance companies</li>
                                <li >Government agencies especially if you receive Medicare, Medicaid, SCHIP, SSI, Workers Comp or any local, state or federal assistance</li>
                                <li >Employers</li>
                                <li>Banks, Financial Institutions</li>
                                <li >Researchers</li>
                                <li >If you are involved in a court case, your health records can be subpoenaed and available to the public</li>
                                <li >Marketers</li>
                                <li >Drug companies</li>
                                <li >Data miners</li>
                                <li >Transcribers in and outside the U.S.</li>
                                <li >Many health websites collect information about you</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="toggle available-facilities">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum.</p>
                        </div>
                    </div>
                </div>
                <div class="toggle health-record">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Can my personal health information be used and disclosed without any notice to me or without my informed consent at the time of treatment</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Yes.</p>
                            <p>The Amended HIPAA Privacy Rule states only that you must receive a Privacy Notice telling you how your personal health information will be used and disclosed. Section 164.520(c) (2) (i) (A).<br />
                                Privacy Notices are often mistaken for consent forms, but they are simply notices telling you what will happen to your medical records.</p>
                        </div>
                    </div>
                </div>
                <div class="toggle available-facilities">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>
                </div>
                <div class="toggle patient-care">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                    </div>
                </div>
                <div class="toggle patient-care">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Nam liber tempor cum soluta nobis eleifend option congue</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>
                        </div>
                    </div>
                </div>
                <div class="toggle patient-care">
                    <div class="toggle-title">                     <!--FAQ title-->
                        <h3><i class="fa fa-question"></i>Lorem ipsum dolor sit amet, consectetuer adipiscing elit</h3>
                    </div>
                    <div class="toggle-content">                     <!--FAQ detail-->
                        <div class="entry-content">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

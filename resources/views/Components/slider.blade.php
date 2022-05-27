<!--slider-->
<div class="home-slider clearfix">
    <div class="flexslider loading">
        <ul class="slides">
            <!--slide start-->
            <li>
                <img src="images/temp-images/slide-one.jpg" alt="Medical Services <span>That You Can Trust</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1>Medical Services <span>That You Can Trust</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->

            <!--slide start-->
            <li>
                <img src="images/temp-images/slide-two.jpg" alt="We <span>Care</span> for <span>You</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1>We <span>Care</span> for <span>You</span></h1>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end -->

            <!--slide start-->
            <li>
                <img src="images/temp-images/slide-three.jpg" alt="Qualified Staff With <span>Expertise in Services We Offer</span>"/>
                <div class="content-wrapper clearfix">
                    <div class="container">
                        <div class="slide-content clearfix ">
                            <h1>Qualified Staff With <span>Expertise in Services We Offer</span></h1>
                            <a class="slider-button" href="doctors-three-columns.html">Read More</a>
                        </div>
                    </div>
                </div>
            </li>
            <!--slide end-->
        </ul>
    </div>
</div>

<!--appointment form-->
<div class="appoint-var-three clearfix">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="slogan-section animated fadeInUp clearfix">
                    <h3>Make an Appointment</h3>
                    <p>ডাক্তারের সিরিয়াল নেওয়ার জন্য নিচের ফর্মটি পূরণ করুন</p>
                </div>
                <div class="appointment-form animated fadeInDown clearfix">

                    <form id="appointment_form_three" action="appointment_form_handler.php" method="post">

                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 2rem !important;">
                                <select style="background-color: #f0f5f7 !important;  border-bottom: 2px solid #d3d8da;color: #a7adaf;font-weight: 500" class="form-control" id="company" name="employee_role">
                                    <option value="" disabled selected>Please Select A Chamber First  ( অপশন থেকে ডাক্তারের চেম্বার ও সময় নির্বাচন করুন )</option>
                                    <option value="admin">Every Saturday - Anwer Khan Modern Medical College Hospital [ 10.00 AM - 01.00 PM ]</option>
                                    <option value="user">Every Monday - Anwer Khan Modern Medical College Hospital [ 07.00 PM - 09.00 PM ]</option>
                                    <option value="user">Every Friday - Al Manar Hospital [ 05.00 PM - 06.30 PM ]</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Name" title="* Please provide your name"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="number" id="app-number" class="required number" placeholder="Phone Number" title="* Please provide a valid phone number."/>
                            </div>

                            <div class="col-sm-6">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address" title="* Please provide a valid email address"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date" title="* Please provide appointment date">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="age" id="app-name" class="required" placeholder="Age ( years )" title="* Please provide your age"/>
                            </div>
                            <div class="col-sm-6">
                                <input type="text" name="gender" id="app-name" class="required" placeholder="Gender" title="* Please provide your gender"/>
                            </div>
                        </div>
                        <textarea name="message" id="app-message" class="required"  placeholder="Message ( সংক্ষেপে আপনার সমস্যার কথা বলুন )" title="* Please provide your message"></textarea>
                        <input type="submit" name="Submit" class="btn form-submit-btn" value="SEND"/>
                        <img src="images/loader.gif" class="ajax-loader" id="appointment-loader" alt="Loading...">
                        <input type="hidden" name="action" value="make_appointment">
                        <div id="response-container"></div>
                        <div id="error-container"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!--appointment form end-->

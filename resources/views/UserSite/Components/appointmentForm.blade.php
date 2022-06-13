<div class="appoint-page clearfix">
    <div class="container">
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-10">
                <article class="page type-page status-publish hentry clearfix">
                    <div class="entry-content text-center">
                        <h2 >Make an Appointment</h2>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore.</p>
                    </div>
                </article>

                <!--appointment form-->
                <div class="appoint-section clearfix">
                    <div class="top-icon"><img src="images/appoint-form-top.png" alt=""/></div>
                    <form id="appointment_form_main" action="appointment_form_handler.php" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="app-name" class="required" placeholder="Name" title="* Please provide your name"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="number" id="app-number" class="required" placeholder="Phone Number" title="* Please provide your phone number."/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="email" name="email" id="app-email" class="required email" placeholder="Email Address" title="* Please provide a valid email address"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="date" id="datepicker" class="required" placeholder="Appointment Date"  title="* Please provide appointment date">
                            </div>
                        </div>

                        <textarea name="message" id="app-message" class="required" cols="50" rows="1" placeholder="Message" title="* Please provide your message"></textarea>

                        <div class="row">
                            <div class="col-md-12">
                                <img src="images/loader.gif" class="ajax-loader" id="appointment-loader" alt="Loading...">
                                <input type="submit" name="Submit" class="appointment-button form-submit-btn" value="Submit Request"/>
                            </div>
                            <div class="col-md-12">
                                <div id="response-container"></div>
                                <div id="error-container"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-1"></div>
        </div>

    </div>
</div>

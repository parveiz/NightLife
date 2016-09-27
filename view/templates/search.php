<?php ?>

<section class="top-content">
    <div class="container-slider removeslide">
        <div class="container-reservation inside-slider">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Reservation form -->
                        <section id="reservation-form" class="reservation-color-form pos-inside-slide">
                            <div class="container-form-chose">
                                <div class="col-md-12">

                                    <!--********************* Hotel reservation ********************-->
                                    <div class="reservation-tabs">
                                        <div id="message"></div>
                                        <div class="row">
                                            <ul class="nav nav-tabs search-opt">
                                                <li class="active"><a href="#clubs-tab" data-toggle="tab">CLUBS</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content">
                                        <form id="clubs-tab" class="tab-pane form-inline reservation-hotel active" method="post" name="reservationform">
                                            <div class="row">
                                                <div class="col-sm-4 step-where">
                                                    <div class="form-group">
                                                        <h3>
                                                            <span>01</span> Where?
                                                        </h3>
                                                        <label for="destination1">Your City</label>
                                                        <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Please enter the city that you want to search in.">
                                                            <i class="fa fa-info-circle fa-lg"> </i>
                                                        </div>
                                                        <input type="text" class="form-control" placeholder="City" id="destination1" name="destination">
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 step-check">
                                                    <h3>
                                                        <span>02</span> When?
                                                    </h3>
                                                    <div class="col-sm-12 cc-in" style="padding-left: 0">
                                                        <div class="form-group">
                                                            <label for="checkin">Check-in</label>
                                                            <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="Time you plan to arrive.">
                                                                <i class="fa fa-info-circle fa-lg"> </i>
                                                            </div>
                                                            <div class="content-checkin-data">
                                                                <i class="fa fa-calendar infield"></i> <input name="checkin" type="text" id="checkin" value="" class="form-control checkin"
                                                                                                              placeholder="Check-in" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3 step-who" style="padding-left: 0">
                                                    <h3>
                                                        <span>03</span> Who?
                                                    </h3>

                                                    <div class="col-sm-12 adult-book">
                                                        <div class="form-group">
                                                            <div class="guests-select">
                                                                <label>No. of Person(s)</label>
                                                                <!--<i class="fa fa-user infield"></i>-->
                                                                <div class="popover-icon" data-container="body" data-toggle="popover" data-trigger="hover" data-placement="right" data-content="For age above 18 years">
                                                                    <i class="fa fa-info-circle fa-lg"> </i>
                                                                </div>
                                                                <select name="adults" id="adults" class="form-control">
                                                                    <option selected="selected">1</option>
                                                                    <option value="2">2</option>
                                                                    <option value="3">3</option>
                                                                    <option value="3">4</option>
                                                                    <option value="3">5</option>
                                                                    <option value="3">6</option>
                                                                    <option value="3">7</option>
                                                                    <option value="3">8</option>
                                                                    <option value="3">9</option>
                                                                    <option value="3">More than 10</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-2 colbtn">
                                                    <button type="submit" class="btn btn-primary btn-block btn-color">Search
                                                        Now</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                    <!--Close tab-content form-->
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-page removeslide">
            <!-- SLIDER -->
            <div class="fullwidthbanner-container">
                <div class="fullwidthbanner">
                    <ul>
                        <!-- FADE -->
                        <li data-transition="fade" data-slotamount="10" data-thumb="">
                            <img src="https://unsplash.it/1920/800?image=899" alt="" />
                        </li>

                        <!-- SLIDEUP -->
                        <li data-transition="slideup" data-slotamount="7" data-thumb="">
                            <img src="https://unsplash.it/1920/800?image=771" alt="" />
                        </li>

                        <!-- SLIDEDOWN -->
                        <li data-transition="slidedown" data-slotamount="7" data-thumb="">
                            <img src="https://unsplash.it/1920/800?image=985" alt="" />
                        </li>
                    </ul>
                    <div class="tp-bannertimer"></div>
                </div>
            </div>
            <!-- SLIDER END -->
        </div>
    </div>
</section>


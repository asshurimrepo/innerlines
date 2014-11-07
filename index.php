<?php get_header(); ?>


    <!-- Header -->
    <header style="background: url('<?=asset('img/full-image.jpg')?>') no-repeat center; background-size: cover; min-height: 700px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <img class="img-responsive" src="img/profile.png" alt=""> -->
                    <div class="intro-text">
                        <span class="name">YOUR TRUE JOURNEY</span>
                        <!-- <hr class="star-light"> -->
                        <span class="skills">Guiding your inner focus</span>
                        <a href="#"><img class="img-responsive" src="<?=asset('img/book-button.png')?>" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section style="padding-bottom:0">
        <div class="container">
            <div class="row destination">
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Our Main Destination</h3>
                        </div>
                    </div>
                    
                    <div class="row item">
                        <div class="col-md-2">
                            <span class="circle"> <i class="fa fa-tags"></i> </span>
                        </div>
                        <div class="col-md-10">
                            <h4 class="no-margin">Sales Marathon</h4>
                            <span>Be the best sales manager you`ll ever be.</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <span class="circle"> <i class="fa fa-power-off"></i> </span>
                        </div>
                        <div class="col-md-10">
                            <h4 class="no-margin">Service Power</h4>
                            <span>Best way to quit smoking.</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <span class="circle"> <i class="fa fa-exclamation"></i> </span>
                        </div>
                        <div class="col-md-10">
                            <h4 class="no-margin">Think!</h4>
                            <span>Start my everyday with a smile</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <span class="circle"> <i class="fa fa-bar-chart-o"></i> </span>
                        </div>
                        <div class="col-md-10">
                            <h4 class="no-margin">Goals</h4>
                            <span>Success is a state of mind. If you want start thinking of yourself as a success.</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 blob">
                            <span>All of our destinations are designed and professionally implemented within our trademark model: <b><em>The HEART Model</em></b>, and presented by one of our bilingual certified coaches. </span>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 hidden-xs">
                    <div class="woman"><img src="<?=asset('img/barup.png')?>" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="gradient" id="heart_model">

        <div class="container">
            <img src="<?= asset( 'img/heartmodel.png' )?>" alt="Heart Model" style="margin-bottom: -160px;"/>
        </div>
        <img src="<?= asset( 'img/heartmodels.png' ) ?>" alt="Heart Express Act React Teach" style="width: 100%" />

    </section>

    <section id="sales_marathon" class="main-bg">


        <div class="container">
            <div class="text-center">


                <h3 class="heading">SALES MARATHON</h3>
                <h4>The Most Popular Sales Marathon Tool</h4>
                <p style="font-weight: 300; font-family: "Open Sans";">Millions of people use SalesMarathon to clarify thinking, manage complex information, run brainstorming and get work organized.</p>

                <img src="<?=asset( 'img/sales-marathon.jpg' )?>" style="width:80%;" alt="Sales Marathon, Manager, Sales Representative"/>
            </div>
        </div>


    </section>


    <!-- About Section -->
    <section class="success" id="about" style="padding-bottom: 10px;">
        <div class="container">
            <div class="col-md-4">
                <div class="row">
                    <div class="horizon-slice"></div>
                    <div class="col-sm-6 item"><a href="#">HOME</a></div>
                    <div class="col-sm-6 item"><a href="#">WORKSHOPS</a></div>
                    <div class="col-sm-6 item"><a href="#">COACHING COURSES</a></div>
                    <div class="col-sm-6 item"><a href="#">OUR GOAL</a></div>
                    <div class="col-sm-6 item"><a href="#">WHY INNERLINES?</a></div>
                    <div class="col-sm-6 item"><a href="#">CONTACT US</a></div>
                </div>
            </div>
            <div class="col-md-4 small-contacts">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?=asset('img/smile-face.png')?>" class="img-responsive smile-face">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?=asset('img/email-icon.png')?>" class="img-responsive">
                        <span>123-456-789</span>
                    </div>
                    <div class="col-md-6">
                        <img src="<?=asset('img/email-icon.png')?>" class="img-responsive">
                        <span>innerlines@email.com</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="horizon-slice"></div>
                <div class="newsletter">
                    <h5>SUBSCRIBE TO GET UPDATES FROM OUR BLOG</h5>
                    <form action="#" method="post">
                        <div class="input-group">
                            <input type="email" name="email" class="form-control"  placeholder="email">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><i class="fa fa-arrow-circle-right"></i></button>
                            </span>
                        </div><!-- /input-group -->
                    </form>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>
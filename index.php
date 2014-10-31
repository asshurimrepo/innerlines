<?php get_header(); ?>


    <!-- Header -->
    <header style="background: url('<?=asset('img/full-image.jpg')?>') no-repeat center; background-size: cover;">
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

    

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>Innerlines Experience</h3>
                    <!-- <hr class="star-primary"> -->
                </div>
            </div>
            <div class="row" style="height: 600px;">
                <div class="col-md-12">
                    <h4 class="classic"><em>Your True Journey</em></h4>
                    <p>I am very excited and thrilled to get the opportunity of introducing INNERLINES Experience to the world!<br>INNERLINES Training has a simple mission statement: <b><em>Guiding your inner focus to endless potential</em></b>.
                    </p>
                    <p>INNERLINES core believe is that any development or achievement, to be efficient and lasting, it should</p>
                </div>
            </div>
        </div>
    </section>


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
                            <img src="img/sales-icon.png" class="img-responsive">
                        </div>
                        <div class="col-md-10">
                            <h4>Sales Marathon</h4>
                            <span>Be the best sales manager you`ll ever be.</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <img src="img/think-icon.png" class="img-responsive">
                        </div>
                        <div class="col-md-10">
                            <h4>Service Power</h4>
                            <span>Best way to quit smoking.</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <img src="img/power-icon.png" class="img-responsive">
                        </div>
                        <div class="col-md-10">
                            <h4>Think!</h4>
                            <span>Start my everyday with a smile</span>
                        </div>
                    </div>
                    <div class="row item">
                        <div class="col-md-2">
                            <img src="img/goals-icon.png" class="img-responsive">
                        </div>
                        <div class="col-md-10">
                            <h4>Goals</h4>
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
                    <div class="woman"><img src="img/woman.png" class="img-responsive"></div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top:0">
        <img src="img/layout.jpg" class="img-responsive" style="width:100%">
    </section>

    <section style="padding-top:0; padding-bottom:150px; "> 
        <div class="container">
            <div class="row product">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="head">
                            <h3 class="heading">Product</h3>
                            <h4 class="subheading">The Most Popular Sales Marathon Tool</h4>
                            <p class="blob">Millions of people use SalesMarathon to clarify thinking, manage complex information, run brainstorming and get work organized.</p>
                        </div>
                    
                        <div class="presentation text-center">
                            <img src="img/laptop.png" class="img-responsive">
                        </div>
                    </div>
                </div>

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
                        <img src="img/smile-face.png" class="img-responsive smile-face">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/email-icon.png" class="img-responsive">
                        <span>123-456-789</span>
                    </div>
                    <div class="col-md-6">
                        <img src="img/email-icon.png" class="img-responsive">
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
<?php
/*
Template Name: Booking Page
*/
?>

    <?php get_header()?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <style>
                    .bk_calendar_frame { width:560px !important; }
                    .booking_form_div .controls input,
                    .booking_form_div .controls textarea{ width: 100%; }
                </style>
                <div class="modal fade lines-modal" style="display:block; opacity: 1;" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">

                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true"><img src="<?=asset('img/close-btn.png')?>" alt="close"/></span></button>

                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?=do_shortcode('[booking nummonths=1]')?>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <?php

                    //the_content();

                ?>
            </div>
        </div>
    </div>

<?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>


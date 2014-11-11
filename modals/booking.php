<!-- Modal -->
<div class="modal fade lines-modal" id="booking-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
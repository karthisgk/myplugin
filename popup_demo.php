<div class="modal fade" id="enq-modal" role="dialog" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-md">

        <div class="modal-content">

            <p data-dismiss="modal" id="enq-cancel" style="position: absolute;top: -30px;right: 0;cursor:pointer;color: black;"><i class="zmdi zmdi-close"></i></p>
            <div class="modal-body">

                <p class="form-header"><?=$ui_lang('Enquiry'); ?></p>

                <div class="tab-content">
                    <form class="tab-pane fade active in modal-form" id="enq-form">

                        <div class="form-group form-group--float">
                            <input type="text" class="form-control modal-inputs" id="enq-name" />
                            <i class="form-group__bar"></i>
                            <label><?=$ui_lang('Name'); ?>  <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-group form-group--float">
                            <input type="email" class="form-control modal-inputs" id="enq-email" />
                            <i class="form-group__bar"></i>
                            <label><?=$ui_lang('Email Address'); ?>  <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-group form-group--float">
                            <span id="enq-ph-code" class="country-phone-code"><?=$u_db_ph_code; ?></span>
                            <input type="number" class="form-control modal-inputs" id="enq-phone" />
                            <i class="form-group__bar"></i>
                            <label><?=$ui_lang('Phone Number'); ?>  <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-group form-group--float">
                            <textarea type="text" class="form-control modal-inputs" id="enq-message"></textarea>
                            <i class="form-group__bar"></i>
                            <label><?=$ui_lang('Message'); ?>  <span class="text-danger">*</span></label>
                        </div>

                        <p class="form-error-msg" id="enq-form-error"></p>
                        <div class="text-center">
                            <button class="btn btn-success modal-submit" type="button" id="enq-submit"><?=$ui_lang('Submit'); ?></button>
                        </div>
                    </form>

                    <a href="#enquiry-success" class="open-success" data-toggle="tab" style="display: none;"></a>
                    <a href="#enq-form" class="open-form" data-toggle="tab" style="display: none;"></a>

                    <div class="tab-pane fade success-tab" id="enquiry-success">
                        <div class="card__body">
                            <div class="submit-property__success">

                                <p class="success-icon text-center"><i class="zmdi zmdi-check"></i></p>

                                <h2 class="text-center"><?=$ui_lang('Successfull!');?></h2>
                                <p class="success-alert text-center"></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
      
    </div>
</div>
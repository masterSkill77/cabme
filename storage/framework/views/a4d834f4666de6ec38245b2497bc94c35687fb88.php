<?php $__env->startSection('main'); ?>

     <div class="flash-container">
    <?php if(Session::has('message')): ?>
      <div class="alert text-center participant-alert " style="    background: #1fbad6 !important;color: #fff !important;margin-bottom: 0;" role="alert">
        <a href="#" class="alert-close text-white" data-dismiss="alert"></a>
      <?php echo Session::get('message'); ?>

      </div>
    <?php endif; ?>
  </div>
<div class=" text--left signupdrive" ng-controller="facebook_account_kit">
  <?php echo $__env->make('user.otp_popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <div class="join-page" >
    <div class="layout--join_company" >
        <div class="cls_driversignup">
          <div class="container-fluid">
            <div class="col-lg-12 pad-0">
              <div class="col-lg-7 cls_lefttextin">
                <div class="cls_lefttext">
                  <a href="<?php echo e(url('/')); ?>" style="display: block;width: 100%"><img style="width: 109px;margin: 15px 0;height: 50px !important;" src="<?php echo e($logo_url); ?>"></a>
                  <h1><?php echo e($site_name); ?> <?php echo e(trans('messages.user.need_partner')); ?></h1>
                  <p><?php echo e(trans('messages.user.drive_with_Cabme')); ?> <?php echo e($site_name); ?> <?php echo e(trans('messages.user.need_partner_content')); ?></p>
                </div>
              </div>
              <div class="col-lg-5 pad-0">
                  <div class="driverform">
                    <?php echo e(Form::open(array('url' => 'company_register','class' => 'layout layout--flush driver-signup-form-join-legacy','id'=>'form'))); ?> 
                    <?php echo e(csrf_field()); ?>


                    <?php echo Form::hidden('request_type', '', ['id' => 'request_type' ]); ?>

                    <?php echo Form::hidden('otp', '', ['id' => 'otp' ]); ?>

                    <div class="cls_createacc">
                      <input type="hidden" name="user_type" value="Company">
                        <a href="<?php echo e(url('signin_company')); ?>" class="btn btn--primary">
                         <?php echo e(trans('messages.ride.already_have_account')); ?>

                        </a>
                        <h3 class="cls_title"><?php echo e(trans('messages.user.create_account')); ?></h3>
                    </div>
                    <div class="col-lg-12">
                      <div class="forminput">
                       <?php echo Form::text('name', '', ['class' => '_style_3vhmZK','placeholder' => trans('messages.profile.name'),'id' => 'fname' ]); ?>

                         <span class="text-danger name_error"><?php echo e($errors->first('name')); ?></span>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="forminput">
                        <?php echo Form::text('email', '', ['class' => '_style_3vhmZK','placeholder' => trans('messages.user.email') ]); ?>

                        <span class="text-danger email_error"><?php echo e($errors->first('email')); ?></span>
                      </div>
                    </div>
                    
                    <div class="col-lg-12">
                      <div class="forminput">
                        <div class="col-lg-3 p-0 mobile-code">
                         <div id="select-title-stage"><?php echo e(old('country_code')!=null ? '+'.old('country_code') : '+1'); ?></div>
                           <input type="hidden" name="country_code" value="<?php echo e(old('country_code',(isset($country_code) ? $country_code : ''))); ?>">
                            <div class="select select--xl" ng-init="old_country_code=<?php echo e(old('country_code')!=null? old('country_code') : '1'); ?>">
                                <label for="mobile-country"><div class="flag US"></div></label>
                                <select name="country_code" tabindex="-1" id="mobile_country" class="square borderless--right">
                                    <?php $__currentLoopData = $country; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                      <option value="<?php echo e($value->phone_code); ?>" <?php echo e(($value->id == (old('country_id')!=null? old('country_id') : '1')) ? 'selected' : ''); ?> data-value="+<?php echo e($value->phone_code); ?>" data-id="<?php echo e($value->id); ?>"><?php echo e($value->long_name); ?>

                                      </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo Form::hidden('country_id', old('country_id'), array('id'=>'country_id')); ?>

                                </select>                
                                <span class="text-danger country_code_error"><?php echo e($errors->first('country_code')); ?></span>
                            </div>
                        </div>
                        <div class="col-lg-9 p-0">
                          <?php echo Form::tel('mobile_number', isset($phone_number)?$phone_number:'', ['class' => '_style_3vhmZK','placeholder' => trans('messages.profile.mobile'),'id' => 'mobile' , 'style'=> 'margin-left:2px']); ?>

                           <span class="text-danger mobile_number_error"><?php echo e($errors->first('mobile_number')); ?></span>
                        </div>
                    </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="forminput">
                       <?php echo Form::password('password', array('class' => '_style_3vhmZK','placeholder' => trans('messages.user.paswrd'),'id' => 'password') ); ?>  
                        <span class="text-danger password_error"><?php echo e($errors->first('password')); ?></span>
                      </div>
                    </div>

                    <div class="col-lg-12">
                     <div class="forminput" >
                       <div class="_style_3jmRTe" >
                        
                        <?php echo Form::text('home_address', '', ['class' => '_style_3vhmZK','placeholder' => trans('messages.profile.profile_city'),'id' => 'home_address','autocomplete' => 'false','style' => 'width:100%']); ?>

                        <input type="hidden" name="city" id='city' value="">
                        <input type="hidden" name="state" id="state" value="">
                        <input type="hidden" name="country" id="country" value="">
                        <input type="hidden" name="address_line1" id="address_line1" value="">
                        <input type="hidden" name="address_line2" id="address_line2" value="">
                        <input type="hidden" name="postal_code" id="postal_code">
                        <input type="hidden" name="latitude" id="latitude" value="">
                        <input type="hidden" name="longitude" id="longitude" value="">
                      </div>
                      <span class="text-danger home_address_error"><?php echo e($errors->first('home_address')); ?></span>
                      <div style="box-sizing:border-box;border:1px solid #E5E5E4;position:absolute;width:100%;background:#FFFFFF;z-index:1000;visibility:hidden;-moz-box-sizing:border-box;" >
                        <div style="max-height:300px;overflow:auto;" >
                          <div aria-live="assertive" >
                            <div style="font-weight:400;font-size:14px;line-height:24px;padding:8px 18px;border-bottom:1px solid #E5E5E4;" class="_style_1cBulK" >No results
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <input type="hidden" name="step" value="basics">

                    <?php
                    $submit_method = site_settings('otp_verification') ? 'send_otp':'check_otp';
                    ?>
                    
                    <button name="step" value="basics" class="btn btn--primary" id="submit-btn" ng-click="showPopup('<?php echo e($submit_method); ?>');" type="button"  style="width: 100%;"  ><?php echo e(trans('messages.user.submit')); ?>

                    </button>
                    <p><?php echo e(trans('messages.user.proceed')); ?> <?php echo e($site_name); ?> <?php echo e(trans('messages.user.contact')); ?></p>
                  </div>
                  <input type="hidden" name="code" id="code" />
                  <?php echo e(Form::close()); ?>

                    </div>
              </div>
              </div>
            </div>
      </div>
    </div>
    <form action="<?php echo e(url('/company_register')); ?>" method="post" id="form">
      <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
      <!-- <input type="hidden" name="code" id="code" /> -->

      </form>
   <div class="cls_arriving text--left" style="margin-top:3em">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="cls_arrivingin">
              <img src="images/new/money.svg" alt="banner">

              <h5><?php echo e(trans('messages.user.money_make')); ?></h5>
              <p><?php echo e(trans('messages.user.money_make_content',['site_name' => $site_name])); ?></p>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="cls_arrivingin">
              <img src="images/new/driver.svg" alt="banner">

              <h5><?php echo e(trans('messages.user.drive_when_want')); ?></h5>
              <p><?php echo e(trans('messages.user.drive_when_want_content')); ?> <?php echo e($site_name); ?>, <?php echo e(trans('messages.user.imp_moments')); ?></p>
            </div>
          </div>

           <div class="col-lg-4">
            <div class="cls_arrivingin">
              <img src="images/new/company.svg" alt="banner">

              <h5><?php echo e(trans('messages.user.no_office')); ?></h5>
              <p><?php echo e(trans('messages.user.no_office_content')); ?> <?php echo e($site_name); ?> <?php echo e(trans('messages.user.freedom')); ?></p>
            </div>
          </div>

        </div>
      </div>
    </div>

</div>
</main>
<style>
  .cls_arrivingin img {
    height: 80px;
}
   .funnel
   {
      height: 0px !important;
   }

   
</style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('template_footeronly', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/user/signup_company.blade.php ENDPATH**/ ?>
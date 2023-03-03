<?php $__env->startSection('main'); ?>
<div class="container-fluid fixed-header" style="background:rgb(248, 248, 249);z-index:99;">
<ul class="sub-header">
<li><a href="<?php echo e(url('safety')); ?>"><?php echo e(trans('messages.footer.safety')); ?></a></li>
<li><a href="<?php echo e(url('how_it_works')); ?>"><?php echo e(trans('messages.header.how_it_works')); ?></a></li>
</ul>
</div>
<div class="container-fluid ride-div-main" style="padding:0px !important;">
<div style="position:relative;float:left;width:100%;">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 md-pull-right height-safety" style="padding:0px !important;">
<div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" style="padding:0px;">
<div class="slide-img safety-img"></div>
</div>
<div class="col-lg-2 col-md-2 col-sm-2 col-xs-2" style="height:100%;">
<div class="pattern" style="height: 100% !important; width: 100% !important; right: 0px; position: absolute; z-index: 10;"><div style="background-color: #A6DAEC; height: 100%; overflow: hidden;"><div aria-label="Decorative pattern" style="height: 100%;"><div class="isvg loaded" style="height: 100%;"> 
<img src="<?php echo e(url('images/icon/patten_94_390.jpg')); ?>">
</div>
</div>
</div>
</div>
</div>
<?php if(Auth::user()==null): ?>
<div class="mini-green ride-mini-green" >
    <div href="#" class="_style_4jQAPw green-mini-div" style="width: 206px; padding: 32px 20px 20px 32px; display: block; position: relative; height: 206px; background-color: rgb(55, 112, 55)">
    <div class="_style_1PPmFR" style="font-weight: 500; color: rgb(255, 255, 255);font-size: 21px; line-height: 1.4;"><?php echo e(trans('messages.ride.ride_with_Cabme',['site_name'=>$site_name])); ?></div>
<a class="btn btn--primary btn--arrow position--relative error-retry-btn" href="<?php echo e(url('signup_rider')); ?>" style="    background: transparent !important;   border: none !important;    float: right;margin-top: 55px;    margin-right: -16px;">
<div class="block-context soft-small--right"><?php echo e(trans('messages.home.siginup')); ?></div>
<i class="icon_right-arrow-thin icon transition delta position--absolute"></i>
</a>
    </div>
    </div>
<?php endif; ?>
</div>
<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12">
<div class="pattern-content">
<h1 class="slide-head ride-head"><?php echo e(trans('messages.ride.trip_safety')); ?></h1><p class="slide-content">
<?php echo e(trans('messages.ride.commitment_riders')); ?></p>
<p class="cmln__paragraph" style="    font-size: 18px; line-height: 27px;"><?php echo e($site_name); ?> <?php echo e(trans('messages.ride.people_safe')); ?></p>
</div>
</div>

</div>
</div>
<div class="container-fluid" style="background:#f8f8f9 !important">
<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pattern-content">
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 ">
<img src="images/icon/easy_way.png">
</div>
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 pad-md">
<p class="_style_ZJW1y" style="margin: 10px 0px 0px !important; min-height: unset;"><?php echo e(trans('messages.drive.before_trip')); ?>

</p>
<p class="slide-content trip-content" style="margin-bottom:10px !important;"><?php echo e(trans('messages.ride.getting_safe_ride')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.safe_pickups')); ?></b><br>
<?php echo e($site_name); ?> <?php echo e(trans('messages.ride.find_location')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.open_everyone')); ?></b><br>
<?php echo e(trans('messages.ride.request_blindly')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.driver_profile')); ?></b><br>
<?php echo e(trans('messages.ride.driver_profile_content')); ?></p>
</div>
</div>
</div>
<div class="container-fluid" style="background:#fff !important;padding:0px;">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 height-safety trip-height" style="padding:0px;">
<div class="slide-img safety-img safety-trip-img"></div>
</div>
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pattern-content trip-content">
<p class="_style_ZJW1y" style="margin: 10px 0px 0px !important; min-height: unset;"><?php echo e(trans('messages.drive.on_trip')); ?></p>
<p class="slide-content trip-content" style="margin-bottom:10px !important;"><?php echo e(trans('messages.ride.destination')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.eta')); ?></b><br>
<?php echo e(trans('messages.ride.eta_content')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.drive.on_the_map')); ?></b><br>
<?php echo e(trans('messages.ride.follow_trip')); ?> <?php echo e($site_name); ?><?php echo e(trans('messages.ride.follow_trip_content')); ?></p>

</div>
</div>
<div class="container-fluid" style="background:#f8f8f9 !important">
<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pattern-content">
<div class="col-lg-2 col-md-2 col-sm-3 col-xs-12 ">
<img src="images/icon/cont6.jpg">
</div>
<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 pad-md">
<p class="_style_ZJW1y" style="margin: 10px 0px 0px !important; min-height: unset;"><?php echo e(trans('messages.drive.after_trip')); ?></p>
<p class="slide-content trip-content" style="margin-bottom:10px !important;"><?php echo e(trans('messages.ride.always_here')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.anonymous_feedback')); ?></b><br>
<?php echo e(trans('messages.ride.anonymous_feedback_content')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.support_head')); ?></b><br>
<?php echo e(trans('messages.ride.support_head_content')); ?></p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.rapid_response')); ?></b><br>
<?php echo e(trans('messages.ride.rapid_response_content')); ?></p>
</div>
</div>
</div>
<div class="container-fluid" style="background:rgb(241, 241, 241) !important;padding:0px;">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 height-safety trip-height" style="padding:0px;">
<div class="slide-img safety-img safety-trip-img1"></div>
</div>
<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pattern-content trip-content big-trip">
<p class="ride-content slide-content trip-big-content" style="margin-bottom:10px !important;">
<?php echo e(trans('messages.ride.work_event')); ?> <?php echo e($site_name); ?>, <?php echo e(trans('messages.ride.feel_safer')); ?> </p>
<p class="cmln__paragraph">
<b><?php echo e(trans('messages.ride.feel_safer_name')); ?></b><br>
<?php echo e(trans('messages.ride.rider_from')); ?></p>


</div>
</div>
	<div class="container-fluid" style="background-color: #f8f8f9 !important;">
	<div class="col-lg-11 col-md-12 col-sm-12 col-xs-12 pattern-content" >
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0px;">
<p class="_style_ZJW1y" style="margin: 10px 0px 0px !important; min-height: unset;"><?php echo e(trans('messages.ride.app_offline')); ?></p>
<p class="slide-content trip-content" style="margin-bottom:10px !important;"><?php echo e(trans('messages.ride.imporving_experience')); ?></p>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-height ride-three" style="padding-right: 20px; padding-left: 20px;">
<img src="images/icon/cont7.png" class="cont-img">
<div class="arrive-content arrive-width">
<div style="position: relative !important;">
<p class="_style_ZJW1y" style="margin: 10px 0px 15px !important; min-height: unset;"><?php echo e(trans('messages.ride.sub_phone_number')); ?></p>
</div><div><p class="cmln__paragraph"><?php echo e(trans('messages.drive.location_around_world')); ?> <?php echo e($site_name); ?> <?php echo e(trans('messages.ride.use_technology')); ?></p>
</div></div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-height ride-three" style="padding-right: 20px; padding-left: 20px;">
<img src="images/icon/cont8.jpg" class="cont-img">
<div class="arrive-content arrive-width">
<div style="position: relative !important;">
<p class="_style_ZJW1y" style="margin: 10px 0px 15px !important; min-height: unset;"><?php echo e(trans('messages.drive.on_the_map')); ?></p>
</div><div><p class="cmln__paragraph"><?php echo e(trans('messages.drive.gps_data')); ?></p>
</div></div>
</div>
<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 mar-height ride-three" style="padding-right: 20px; padding-left: 20px;">
<img src="images/icon/cont5.png" class="cont-img">
<div class="arrive-content arrive-width">
<div style="position: relative !important;">
<p class="_style_ZJW1y" style="margin: 10px 0px 15px !important; min-height: unset;"><?php echo e(trans('messages.ride.assisting')); ?></p>
</div><div><p class="cmln__paragraph"><?php echo e(trans('messages.ride.assisting_content')); ?></p>
</div></div>
</div>
</div>

</div>
</div>
<div class="container-fluid" style="background:rgb(241,241,241);">
<div class="container pad-container-small" style="padding-bottom:75px;">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12  column-content" style="padding:0px;">

	<div class="arrive-content" style="width:100% !important;">
<div style="position: relative !important;">
<p class="_style_ZJW1y" style="margin: 0px 0px 20px !important; min-height: unset;"><?php echo e(trans('messages.ride.rider_safety')); ?></p>
<p class="_style_ZJW1y ride-support" style="
    margin-bottom: 25px !important;"><?php echo e(trans('messages.ride.how_keep_safe')); ?></p>
</div><div><p class="cmln__paragraph ride-para"><?php echo e(trans('messages.ride.how_keep_safe_content')); ?> <?php echo e($site_name); ?>. <?php echo e(trans('messages.ride.safe_while')); ?></p>
</div></div>
	</div>
</div>
</div>
<?php if(Auth::user()==null): ?>
<div class="container-fluid" style="background:#fff !important">
<div class="container pad-container-small">
<div class=""><h3 class="flush bottom-head"><div class="primary-font--thin"><?php echo e(trans('messages.ride.safer_ride')); ?> <?php echo e($site_name); ?></div></h3></div>
<div class="soft-large--bottom palm-hard--bottom app-footer__city-picker
                       position--relative two-fifths palm-one-whole" style="padding-top:20px;width:43%;"><div class="autocomplete-container"><div class="autocomplete position--relative"><div class="autocomplete__input hard flush--bottom autocomplete__input--icon">
                       <div>
                       	<a href="<?php echo e(url('signup_rider')); ?>" class="btn btn--primary btn--arrow position--relative error-retry-btn">
<div class="block-context soft-small--right" style="    width: 180px;"><?php echo e(trans('messages.footer.siginup_ride')); ?></div>
<i class="icon_right-arrow-thin icon transition delta position--absolute"></i>
</a>
                       </div>
                       </div>
                       </div></div>
                    </div>
</div>
</div>
<?php endif; ?>
</main>
<?php $__env->stopSection(); ?>
<style type="text/css">
	.height-safety .mini-green.ride-mini-green{right: 55px;bottom: -30px;}
	.arrive-content {
    width: 100% !important;
}
.arrive-content.arrive-width{
width: 80% !important;
float: left !important;
}
.column-content:before{display: none !important;}
.btn-input:hover, .btn:hover, .file-input:hover, .tooltip:hover , .btn, .btn-input, .file-input, .tooltip{background:transparent !important; border: none !important}
.btn.btn--primary:hover{background:transparent !important; color: #fff !important;}
	@media (min-width: 1100px){
		.trip-content.slide-content{font-size: 36px !important;}
	}
</style>
<?php echo $__env->make('templatesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/ride/safety.blade.php ENDPATH**/ ?>
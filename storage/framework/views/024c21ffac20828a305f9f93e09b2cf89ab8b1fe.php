<?php $__env->startSection('main'); ?>
 <!-- Content Wrapper. Contains page content -->

  <div class="content-wrapper">
    <section class="content-header">
        <h1>
       Request Details
        <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Request Details</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-info">
            <div class="box-header">
              <!-- <h3 class="box-title">Request Details</h3>-->
            </div>
            <!-- /.box-header -->
            <div class="box-body">            
              <div class="col-md-8">
                    <dl class="row">
                        <input type="hidden" id='pickup_latitude' value="<?php echo e(@$request_details->pickup_latitude); ?>">
                        <input type="hidden" id='pickup_longitude' value="<?php echo e(@$request_details->pickup_longitude); ?>">
                        <input type="hidden" id='drop_latitude' value="<?php echo e(@$request_details->formatted_drop_latitude); ?>">
                        <input type="hidden" id='drop_longitude' value="<?php echo e(@$request_details->formatted_drop_longitude); ?>">
                        <input type="hidden" id='trip_path' value="<?php echo e($trip_path); ?>">
                        <div class="payment-details clearfix">
                            <dt class="col-sm-5">Vehicle Type</dt>
                            <dd class="col-sm-7"> <?php echo e(@$request_details->car_type->car_name); ?> </dd>
                        </div>
                        <div class="payment-details clearfix">
                            <dt class="col-sm-5">Rider Name</dt>
                            <dd class="col-sm-7"><?php echo e(@$request_details->users->first_name.' '.@$request_details->users->last_name); ?></dd>
                        </div>
                        <div class="payment-details clearfix">
                            <dt class="col-sm-5">Driver Name </dt>
                            <dd class="col-sm-7">
                                <?php if($request_status == "No one accepted"): ?>
                                    Driver not yet assigned!    
                                <?php else: ?>
                                    <?php echo e(@$driver_name); ?>

                                <?php endif; ?>
                            </dd>
                        </div>
                        <?php if(LOGIN_USER_TYPE != 'company' && isset($company_name)): ?>
                            <div class="payment-details clearfix">
                                <dt class="col-sm-5">Company Name :</dt>
                                <dd class="col-sm-7"><?php echo e(@$company_name); ?></dd> 
                            </div>
                        <?php endif; ?>

                        <?php if(isset($is_tripped) && in_array($trip_data->status,["Rating", "Payment", "Completed"])): ?>
                            <div class="payment-details clearfix">
                                <dt class="col-sm-5"> Pickup Address </dt>
                                <dd class="col-sm-7"><?php echo e(@$trip_data->pickup_location); ?></dd>
                            </div>
                            <div class="payment-details clearfix">
                                <dt class="col-sm-5">Drop Address</dt>
                                <dd class="col-sm-7"><?php echo e(@$trip_data->drop_location); ?></dd>
                            </div>
                        <?php else: ?>
                            <div class="payment-details clearfix">
                                <dt class="col-sm-5"> Pickup Address </dt>
                                <dd class="col-sm-7"><?php echo e(@$request_details->pickup_location); ?></dd>
                            </div>
                            <div class="payment-details clearfix">
                                <dt class="col-sm-5">Drop Address</dt>
                                <dd class="col-sm-7"><?php echo e(@$request_details->drop_location); ?></dd>
                            </div>
                        <?php endif; ?>
                        <?php if(isset($is_tripped)): ?>
                            <?php if(in_array($trip_data->status,["End trip", "Rating", "Payment", "Completed"])): ?>
                                <div class="payment-details clearfix">
                                    <dt class="col-sm-5"> Ride Start Time </dt>
                                    <dd class="col-sm-7">
                                      <?php echo date("l jS \of F Y h:i:s A", strtotime(@$trip_data->begin_trip)); ?>

                                    </dd>
                                </div>
                                <?php if($trip_data->status != 'End trip'): ?>
                                    <div class="payment-details clearfix">
                                        <dt class="col-sm-5"> Ride End Time </dt>
                                        <dd class="col-sm-7">
                                          <?php echo date("l jS \of F Y h:i:s A", strtotime(@$trip_data->end_trip)); ?>

                                        </dd>
                                    </div>
                                <?php endif; ?>
                            <?php endif; ?>                        

                            <?php $__currentLoopData = $invoice_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="payment-details clearfix">
                                    <dt class="col-sm-5">
                                        <?php echo e($invoice['key']); ?> 
                                    </dt>
                                    <dd class="col-sm-7">
                                        <?php echo e($invoice['value']); ?>

                                    </dd>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <div class="payment-details clearfix">
                            <dt class="col-sm-5">Ride Status : </dt>
                            <dd class="col-sm-7"> <?php echo e($request_status); ?> </dd>
                        </div>
                    </dl>
                </div>
                <div class="col-md-4">
                    <div id="map" class="hide"></div>
                    <?php if(isset($is_tripped)): ?>
                        <img src="<?php echo e($trip_data->map_image); ?>" data-original_src="<?php echo e($trip_data->getOriginal('map_image')); ?>" class="img trip_image" id="trip_image">
                    <?php endif; ?>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<style type="text/css">
    .trip_image {
        width: 100%;
        margin-top: 2rem;
    }
    #map {
        height: 500px;
        width: 100%;
    }
    dl.row {
        font-size: 15px;
    }
    dl dt, dl dd{
        padding: 5px;
    }  
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/request/details.blade.php ENDPATH**/ ?>
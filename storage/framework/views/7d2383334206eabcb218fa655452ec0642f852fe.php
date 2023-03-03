<?php $__env->startSection('main'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1> Manage Trips Details </h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a>
			</li>
			<li>
				<a href="<?php echo e(url(LOGIN_USER_TYPE.'/trips')); ?>">Trips</a>
			</li>
			<li class="active">
				Details
			</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border" style="height: 54px;">
						<!-- <h3 class="box-title">Trips Details</h3> -->
					</div>
					<?php echo Form::open(['url' => '', 'class' => 'form-horizontal', 'style' => 'word-wrap: break-word']); ?>

					<div class="box-body">
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Vehicle name
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->car_type->car_name); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Driver name
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->driver_name); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Rider name
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->users->first_name); ?>

							</div>
						</div>
						<?php if(LOGIN_USER_TYPE != 'company'): ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Company name
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->driver->company->name); ?>

							</div>
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Trip date
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->begin_date); ?>

							</div>
						</div>
						<?php if($result->pool_id): ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								No.of Seats
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->seats); ?>

							</div>
						</div>
						<?php endif; ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Arrive Time
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->getFormattedTime('arrive_time')); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Begin Trip
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->getFormattedTime('begin_trip')); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								End Trip
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->getFormattedTime('end_trip')); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Pickup Location
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->pickup_location); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Drop Location
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->drop_location); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Currency
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->currency_code); ?>

							</div>
						</div>

						<?php $__currentLoopData = $invoice_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								<?php echo e($invoice['key']); ?>

							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($invoice['value']); ?>

							</div>
						</div>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Status
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e($result->status); ?>

							</div>
						</div>
						
						<?php if($result->status == "Cancelled"): ?>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Cancelled Reason
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e(@$result->cancel->cancel_reason->reason); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Cancelled Message
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e(@$result->cancel->cancel_comments); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Cancelled By
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e(@$result->cancel->cancelled_by); ?>

							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">
								Cancelled Date
							</label>
							<div class="col-md-7 col-sm-offset-1 form-control-static">
								<?php echo e(@$result->cancel->created_at); ?>

							</div>
						</div>
						<?php endif; ?>

						<?php if(LOGIN_USER_TYPE != 'company'): ?>
							<div class="form-group">
								<label class="col-sm-3 control-label">
									Transaction ID
								</label>
								<div class="col-md-7 col-sm-offset-1 form-control-static">
									<?php echo e(@$result->paykey); ?>

								</div>
							</div>
							<?php if($result->driver->company->id == 1 && $result->driver->default_payout_credentials == ''): ?>
							<div class="form-group">
								<label class="col-sm-3 control-label">
								</label>
								<div class="col-md-7 col-sm-offset-1 form-control-static">
									Yet, Driver doesn't enter his Payout details.
								</div>
							</div>
							<?php elseif($result->status == "Completed" && $result->payout_status == "Paid"): ?>
							<div class="form-group">
								<label class="col-sm-3 control-label">
									Payout Status
								</label>
								<div class="col-md-7 col-sm-offset-1 form-control-static">
									Payout successfully sent..
								</div>
							</div>
							<?php endif; ?>
						<?php endif; ?>


						<?php if($result->driver->company_id != 1): ?>
							<?php if($result->driver->company->default_payout_credentials == ''): ?>
								<div class="form-group">
									<label class="col-sm-3 control-label">
									</label>
									<div class="col-md-7 col-sm-offset-1 form-control-static">
										Yet, Company doesn't enter his Payout details.
									</div>
								</div>
							<?php else: ?>
								
							<?php endif; ?>						
						<?php endif; ?>
					</form>
					<div class="box-footer text-center">
						<a class="btn btn-default" href="<?php echo e($back_url); ?>">Back</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/trips/view.blade.php ENDPATH**/ ?>
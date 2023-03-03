<?php $__env->startSection('main'); ?>
<div class="fees-wrap content-wrapper">
	<section class="content-header">
		<h1>
		Fees
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>">
					<i class="fa fa-dashboard"></i>
					Home
				</a>
			</li>
			<li>
				<a href="#">
					Fees
				</a>
			</li>
			<li class="active">
				Edit
			</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"> Fees Form </h3>
					</div>
					<?php echo Form::open(['url' => 'admin/fees', 'class' => 'form-horizontal']); ?>

					<div class="box-body">
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">Rider Service Fee</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									<?php echo Form::text('access_fee', fees('access_fee'), ['class' => 'form-control', 'id' => 'input_service_fee', 'placeholder' => 'Rider Service Fee']); ?>

									<div class="input-group-addon" >%</div>
									<span class="text-danger"><?php echo e($errors->first('access_fee')); ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">
								Driver Peak Fare
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									<?php echo Form::text('driver_peak_fare', fees('driver_peak_fare'), ['class' => 'form-control', 'id' => 'input_driver_peak_fare', 'placeholder' => 'Driver Peak Fare']); ?>

									<div class="input-group-addon" >%</div>
									<span class="text-danger"><?php echo e($errors->first('driver_peak_fare')); ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_additional_rider_fare" class="col-sm-3 control-label">
								2nd Rider Amount <small>(For Pool Trips)</small>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									<?php echo Form::text('additional_rider_fare', fees('additional_rider_fare'), ['class' => 'form-control', 'id' => 'input_additional_rider_fare', 'placeholder' => 'Additional Rider Fare']); ?>

									<div class="input-group-addon" >%</div>
									<span class="text-danger"><?php echo e($errors->first('additional_rider_fare')); ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">
								Driver Service Fee
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									<?php echo Form::text('driver_service_fee', fees('driver_access_fee'), ['class' => 'form-control', 'id' => 'input_driver_service_fee', 'placeholder' => 'Driver Service Fee']); ?>

									<div class="input-group-addon" >%</div>
									<span class="text-danger"><?php echo e($errors->first('driver_service_fee')); ?></span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_additional_fee" class="col-sm-3 control-label">
								Apply Trip Additional Fee
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									<?php echo Form::select('additional_fee', array_merge(['Yes' =>'Yes','No' =>'No']),fees('additional_fee'), ['class' => 'form-control', 'id' => 'input_additional_fee']); ?>

									<span class="text-danger"><?php echo e($errors->first('additional_fee')); ?></span>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
						<button type="reset" class="btn btn-default" name="cancel">Cancel</button>
					</div>
					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<style type="text/css">
	.input-group-addon {
		background-color: #eee !important;
	}
</style>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/fees.blade.php ENDPATH**/ ?>
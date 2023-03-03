<?php $__env->startSection('main'); ?>
<div class="content-wrapper">
	<section class="content-header">
		<h1>
		 Edit  Vehicle types
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/vehicle_type')); ?>">Vehicle types </a></li>
			<li class="active"> Edit </li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Edit Vehicle types Form</h3>
					</div>
					<?php echo Form::open(['url' => 'admin/edit_vehicle_type/'.$result->id, 'class' => 'form-horizontal','files' => true]); ?>

					<div class="box-body">
						<span class="text-danger">(*)Fields are Mandatory</span>
						<div class="form-group">
							<label for="input_name" class="col-sm-3 control-label">Name<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::text('vehicle_name',$result->car_name, ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name']); ?>

								<span class="text-danger"><?php echo e($errors->first('vehicle_name')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_description" class="col-sm-3 control-label">Description</label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::textarea('description',$result->description, ['class' => 'form-control', 'id' => 'input_description', 'placeholder' => 'Description', 'rows' => 3]); ?>

								<span class="text-danger"><?php echo e($errors->first('description')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_license_back" class="col-sm-3 control-label">Vehicle image<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::file('vehicle_image',  ['class' => 'form-control', 'id' => 'rc', 'accept' => 'image/*']); ?>

								<span class="text-danger"><?php echo e($errors->first('vehicle_image')); ?></span>
								<img src="<?php echo e($result->vehicle_image); ?>" style="width: auto;height: 100px;padding-top: 10px;">
							</div>
						</div>
						<div class="form-group">
							<label for="input_license_back" class="col-sm-3 control-label">Vehicle Active image<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::file('active_image',  ['class' => 'form-control', 'id' => 'rc', 'accept' => 'image/*']); ?>

								<span class="text-danger"><?php echo e($errors->first('active_image')); ?></span>
								<img src="<?php echo e($result->active_image); ?>" style="width: auto;height: 100px;padding-top: 10px;" >
							</div>
						</div>
						<div class="form-group">
							<label for="input_pool" class="col-sm-3 control-label"> Is Pool <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::select('is_pool', array('No' => 'No', 'Yes' => 'Yes'),$result->is_pool, ['class' => 'form-control', 'id' => 'input_pool']); ?>

								<span class="text-danger"><?php echo e($errors->first('is_pool')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'),$result->status, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

								<span class="text-danger"><?php echo e($errors->first('status')); ?></span>
							</div>
						</div>
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
						<button type="submit" class="btn btn-default" name="cancel" value="cancel">Cancel</button>
					</div>
					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</section>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/vehicle_type/edit.blade.php ENDPATH**/ ?>
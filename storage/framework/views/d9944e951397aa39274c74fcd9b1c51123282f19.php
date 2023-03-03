<?php $__env->startSection('main'); ?>
<div class="content-wrapper" ng-controller="vehicle_management">
	<section class="content-header">
		<h1>
		Edit Vehicles
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home </a></li>
			<li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/vehicle')); ?>"> Vehicles </a></li>
			<li class="active"> Edit </li>
		</ol>
	</section>
	<section class="content" ng-init='vehicle_id="<?php echo e($result->id); ?>"'>
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">Edit Vehicles Form</h3>
					</div>
					<?php echo Form::open(['url' => LOGIN_USER_TYPE.'/edit_vehicle/'.$result->id, 'class' => 'form-horizontal vehicle_form','files' => true,'id'=>'vehicle_form']); ?>

					<?php echo Form::hidden('user_country_code', @$result->user->country->phone_code, ['id' => 'user_country_code']); ?>

					<?php echo Form::hidden('user_gender', $result->user->gender, ['id' => 'user_gender']); ?>

					<div class="box-body">
						<span class="text-danger">(*)Fields are Mandatory</span>
						<?php if(LOGIN_USER_TYPE!='company'): ?>
							<div class="form-group" ng-init='company_name = "<?php echo e($result->company_id); ?>"'>
								<label for="input_company" class="col-sm-3 control-label">Company Name <em class="text-danger">*</em></label>
								<div class="col-md-7 col-sm-offset-1" ng-init='get_driver()'>
									<?php echo Form::text('company_name', $company->name, ['class'=>'form-control', 'id'=>'input_company_name', 'readonly'=>'true']); ?>

								</div>
							</div>
						<?php else: ?>
							<span ng-init='company_name="<?php echo e(Auth::guard("company")->user()->id); ?>";get_driver()'></span>
						<?php endif; ?>
						<div class="form-group">
							<label for="input_company" class="col-sm-3 control-label">Driver Name <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1" ng-init='driver_name = "<?php echo e($result->user_id); ?>";selectedDriver=<?php echo e($result->user_id); ?>'>
								<?php echo Form::hidden('driver_name', $result->user_id); ?>

								<?php echo Form::text('driver', $result->user->first_name.' '.$result->user->last_name.' - '.$result->user->id, ['class'=>'form-control', 'id'=>'driver', 'readonly'=>'true']); ?>

							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">Status <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), $result->status, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

								<span class="text-danger"><?php echo e($errors->first('status')); ?></span>
							</div>
						</div> 
						<div class="form-group">
			              <label for="input_status" class="col-sm-3 control-label">Make <em class="text-danger">*</em></label>
			              <div class="col-md-7 col-sm-offset-1">
			                <?php echo Form::select('vehicle_make_id',$make, $result->vehicle_make_id, ['class' => 'form-control', 'id' => 'vehicle_make', 'placeholder' => 'Select']); ?>

			                <span class="text-danger"><?php echo e($errors->first('vehicle_make_id')); ?></span>
			              </div>
			            </div>
			            <div class="form-group">
			              <label for="input_status" class="col-sm-3 control-label">Model <em class="text-danger">*</em></label>
			              <div class="col-md-7 col-sm-offset-1" ng-init='vehicle_model_id="<?php echo e($result->vehicle_model_id); ?>";'>
			              	<span class="loading form-control" id="model_loading" style="display: none;"></span>
			                <?php echo Form::select('vehicle_model_id', array(), '', ['class'=>'form-control', 'id'=>'vehicle_model', 'placeholder'=>'Select']); ?>

			                <span class="text-danger"><?php echo e($errors->first('vehicle_make_id')); ?></span>
			              </div>
			            </div>
						<div class="form-group cls_vehicle">
							<label for="vehicle_type" class="col-sm-3 control-label">Vehicle Type <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1 form-check">
								<?php $vehicle_types = explode(',', $result->vehicle_id); ?>
								<?php $__currentLoopData = $car_type; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<li class="col-lg-6">
									<input type="checkbox" name="vehicle_type[]" id="vehicle_type" class="form-check-input vehicle_type" value="<?php echo e($type->id); ?>" data-error-placement="container" data-error-container="#vehicle_type_error" <?php echo e(in_array($type->id,$vehicle_types) ? 'checked' : ''); ?>/> <span> <?php echo e($type->car_name); ?></span>
									</li>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
								</br></br>
								<div class="text-danger" id="vehicle_type_error"></div>
								<span class="text-danger"><?php echo e($errors->first('vehicle_type')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="default" class="col-sm-3 control-label">Default <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1 form-check" style="padding-top: 6px;">
								<?php echo e(Form::radio('default', '1', $result->default_type=='1' ? true:false, ['class' => 'form-check-input default', 'id' => 'default_yes', 'data-error-placement'=>'container', 'data-error-container'=>'#default_error'])); ?> <span style="margin-right: 15px;">Yes</span>
								<?php echo e(Form::radio('default', '0', $result->default_type=='0' ? true:false, ['class' => 'form-check-input default', 'id' => 'default_no', 'data-error-placement'=>'container', 'data-error-container'=>'#default_error'])); ?> No
								</br>
								<div class="text-danger" id="default_error"></div>
								<span style="color:gray;font-style: italic;"> * If the driver has only one vehicle with active status, it will be automatically selected as default.</span>
							</div>
						</div>
						<div class="form-group">
							<label for="handicap" class="col-sm-3 control-label">Handicap Accessibility Available <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1 form-check" style="padding-top: 6px;">
								<?php echo e(Form::radio('handicap', '1', in_array('2',$options) ? true:false, ['class' => 'form-check-input handicap', 'id' => 'handicap_yes', 'data-error-placement'=>'container', 'data-error-container'=>'#handicap_error'])); ?> <span style="margin-right: 15px;">Yes</span>
								<?php echo e(Form::radio('handicap', '0', !in_array('2',$options) ? true:false, ['class' => 'form-check-input handicap', 'id' => 'handicap_no', 'data-error-placement'=>'container', 'data-error-container'=>'#handicap_error'])); ?> No
								</br>
								<div class="text-danger" id="handicap_error"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="child_seat" class="col-sm-3 control-label">Child Seat Accessibility Available <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1 form-check" style="padding-top: 6px;">
								<?php echo e(Form::radio('child_seat', '1', in_array('3',$options) ? true:false, ['class' => 'form-check-input child_seat', 'id' => 'child_seat_yes', 'data-error-placement'=>'container', 'data-error-container'=>'#child_seat_error'])); ?> <span style="margin-right: 15px;">Yes</span>
								<?php echo e(Form::radio('child_seat', '0', !in_array('3',$options) ? true:false, ['class' => 'form-check-input child_seat', 'id' => 'child_seat_no', 'data-error-placement'=>'container', 'data-error-container'=>'#child_seat_error'])); ?> No
								</br>
								<div class="text-danger" id="child_seat_error"></div>
							</div>
						</div>
						<div class="form-group">
							<label for="request_from" class="col-sm-3 control-label">Request From <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1 form-check" style="padding-top: 6px;">
								<?php echo e(Form::radio('request_from', '1', in_array('1',$options) ? true:false, ['class' => 'form-check-input request_from', 'id' => 'request_from_female', 'data-error-placement'=>'container', 'data-error-container'=>'#request_from_error'])); ?>  <span style="margin-right: 15px;">Female</span>
								<?php echo e(Form::radio('request_from', '0', !in_array('1',$options) ? true:false, ['class' => 'form-check-input request_from', 'id' => 'request_from_both', 'data-error-placement'=>'container', 'data-error-container'=>'#request_from_error'])); ?> Both
								</br>
								<div class="text-danger" id="request_from_error"></div>
								<span style="color:gray;font-style: italic;"> * If the driver is male, it will be automatically selected as both.</span>
							</div>
						</div>
						<div class="form-group">
							<label for="vehicle_number" class="col-sm-3 control-label">Vehicle Number <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::text('vehicle_number',@$result->vehicle_number, ['class' => 'form-control', 'id' => 'vehicle_number', 'placeholder' => 'Vehicle Number']); ?>

								<span class="text-danger"><?php echo e($errors->first('vehicle_number')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="color" class="col-sm-3 control-label">Color <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::text('color',@$result->color, ['class' => 'form-control', 'id' => 'color', 'placeholder' => 'Color']); ?>

								<span class="text-danger"><?php echo e($errors->first('color')); ?></span>
							</div>
						</div>
						<div class="form-group">
							<label for="year" class="col-sm-3 control-label">Year <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<?php echo Form::text('year',@$result->year, ['class' => 'form-control', 'id' => 'year', 'placeholder' => 'Year']); ?>

								<span class="text-danger"><?php echo e($errors->first('year')); ?></span>
							</div>
						</div>
						<input type="hidden" id="vehicle_id" value="<?php echo e($result->id); ?>">
						<p ng-init='vehicle_doc="";errors=<?php echo e(json_encode($errors->getMessages())); ?>;'></p>

						<div class="col-sm-12">
							<label class="col-sm-3"></label>
							<div class="loading d-none" id="vehicle_loading"></div>
						</div>

						<div class="form-group" ng-repeat="doc in vehicle_doc" ng-cloak ng-if="vehicle_doc">
							<div class="form-group">
							<label class="col-sm-3 control-label"> {{doc.document_name}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<input type="file" name="file_{{doc.id}}" class="form-control">
								<span class="text-danger">{{ errors['file_'+doc.id][0] }}</span>								
								<div class="license-img" ng-if="doc.document">
									<a href="{{doc.document}}" target="_blank">
										<img style="width: auto;height: 100px;object-fit: contain;padding-top: 5px" ng-src="{{doc.document}}">
									</a>
								</div>
								<div class="license-img" ng-if="!doc.document">
									<img style="width: auto;height: 100px;object-fit: contain;padding-top: 5px" src="<?php echo e(url('images/driver_doc.png')); ?>">
								</div>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label" ng-if="doc.expiry_required=='1'">Expire Date <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1" ng-if="doc.expiry_required=='1'">
								<input type="text" name="expired_date_{{doc.id}}" min="<?php echo e(date('Y-m-d')); ?>" value="{{doc.expired_date}}" class="form-control document_expired" placeholder="Expire date" autocomplete="off">
								<span class="text-danger">{{ errors['expired_date_'+doc.id][0] }}</span>
							</div>
							</div>
							<div class="form-group">
							<label class="col-sm-3 control-label">{{doc.document_name}} Status <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<select class ='form-control' name='{{doc.doc_name}}_status'>
									<option value="0" ng-selected="doc.status==0">Pending</option>
									<option value="1" ng-selected="doc.status==1">Approved</option>
									<option value="2" ng-selected="doc.status==2">Rejected</option>
								</select>
							</div>
						</div>
						</div>
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit"> Submit </button>
						<a href="<?php echo e(url(LOGIN_USER_TYPE.'/vehicle')); ?>"><span class="btn btn-default">Cancel</span></a>
					</div>
					<?php echo Form::close(); ?>

				</div>
			</div>
		</div>
	</section>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
<script>
$("#year").datepicker({
    format: "yyyy",
    viewMode: "years", 
    minViewMode: "years",
    autoclose : true,
    startDate: '1950',
    endDate: '<?php echo date('Y'); ?>'
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/vehicle/edit.blade.php ENDPATH**/ ?>
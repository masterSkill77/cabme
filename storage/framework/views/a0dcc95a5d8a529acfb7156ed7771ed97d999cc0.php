<?php $__env->startSection('main'); ?>
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1> Add Support </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/support')); ?>">Support</a></li>
      <li class="active">Add</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Add Support Form</h3>
          </div>
          <?php echo Form::open(['url' => LOGIN_USER_TYPE.'/add_support', 'class' => 'form-horizontal','files' => true]); ?>

          <div class="box-body">
            <span class="text-danger">(*)Fields are Mandatory</span>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">Name<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'name']); ?>

                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">Link<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('link', '', ['class' => 'form-control', 'id' => 'input_link', 'placeholder' => 'link']); ?>

                <span class="text-danger"><?php echo e($errors->first('link')); ?></span>
              </div>
            </div>

            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

               <!--  <small>Note* : If the link is a contact number,  Please fill it with country code.</small> -->
                <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_image" class="col-sm-3 control-label">Image <em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::file('image', ['class' => 'form-control', 'id' => 'input_image', 'accept' => 'image/*']); ?>

                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
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

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/support/add.blade.php ENDPATH**/ ?>
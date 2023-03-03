<?php $__env->startSection('main'); ?>
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1> Edit Support </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/support')); ?>">Support</a></li>
      <li class="active">Edit</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Edit Support Form</h3>
          </div>
          <?php echo Form::open(['url' => LOGIN_USER_TYPE.'/edit_support/'.$result->id, 'class' => 'form-horizontal','files' => true]); ?>

            <div class="box-body">
            <span class="text-danger">(*)Fields are Mandatory</span>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">Name<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('name', $result->name, ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name',$editable]); ?>

                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
              </div>
            </div>

            <div class="form-group">
              <?php if($result->id == 1): ?>
                <label for="input_first_name" class="col-sm-3 control-label">Number<em class="text-danger">*</em></label>
              <?php else: ?>
                <label for="input_first_name" class="col-sm-3 control-label">Link<em class="text-danger">*</em></label>
              <?php endif; ?>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('link', $result->link, ['class' => 'form-control', 'id' => 'input_link', 'placeholder' => 'link']); ?>

                <?php if($result->id == 1): ?>
                <small>Note* : Please fill it with the country code.(Ex-911234567890).</small>
                <?php endif; ?>
                <span class="text-danger"><?php echo e($errors->first('link')); ?></span>
              </div>
            </div>

            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), $result->status, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
              </div>
            </div>
         
          <div class="form-group">
              <label for="input_image" class="col-sm-3 control-label">Image <em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::file('image', ['class' => 'form-control', 'id' => 'input_image', 'accept' => 'image/*']); ?>

                <span class="text-danger"><?php echo e($errors->first('image')); ?></span>
                <br>
                <img style="width:100px" src="<?php echo e(url('images/support/'.$result->image)); ?>">
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

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/support/edit.blade.php ENDPATH**/ ?>
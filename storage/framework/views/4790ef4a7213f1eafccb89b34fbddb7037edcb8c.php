<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add Admin User
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/admin_user')); ?>">Admin Users</a></li>
        <li class="active">Add</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Add Admin User Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo Form::open(['url' => 'admin/add_admin_user', 'class' => 'form-horizontal']); ?>

            
              <div class="box-body">
              <span class="text-danger">(*)Fields are Mandatory</span>
                <div class="form-group">
                  <label for="input_username" class="col-sm-3 control-label">Username<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('username', old('username'), ['class' => 'form-control', 'id' => 'input_username', 'placeholder' => 'Username']); ?>

                    <span class="text-danger"><?php echo e($errors->first('username')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_email" class="col-sm-3 control-label">Email<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('email', old('email'), ['class' => 'form-control', 'id' => 'input_email', 'placeholder' => 'Email']); ?>

                    <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_password" class="col-sm-3 control-label">Password<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('password', '', ['class' => 'form-control', 'id' => 'input_password', 'placeholder' => 'Password']); ?>

                    <span class="text-danger"><?php echo e($errors->first('password')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_country_code" class="col-sm-3 control-label">
                    Country Code  <em class="text-danger">*</em>
                  </label>
                  <div class="col-md-7 col-sm-offset-1">
                    <select class='form-control' id = 'input_country_code' name='country_code' >
                      <option value="" disabled Selected> Select </option>
                      <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country_code): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e(@$country_code->id); ?>" <?php echo e(($country_code->phone_code == old('country_code')) ? 'Selected' : ''); ?> ><?php echo e($country_code->long_name); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                    <span class="text-danger"><?php echo e($errors->first('country_code')); ?></span>
                  </div>
                </div>

                <div class="form-group">
                  <label for="input_mobile_number" class="col-sm-3 control-label">Mobile Number (For SOS Purpose) <em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('mobile_number', old('mobile_number'), ['class' => 'form-control', 'id' => 'input_mobile', 'placeholder' => 'Mobile']); ?>

                    <span class="text-danger"><?php echo e($errors->first('mobile_number')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_role" class="col-sm-3 control-label">Role<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('role', $roles, '', ['class' => 'form-control', 'id' => 'input_role', 'placeholder' => 'Select']); ?>

                    <span class="text-danger"><?php echo e($errors->first('role')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), old('status'), ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                    <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-info " name="submit" value="submit">Submit</button>
                <button type="submit" class="btn btn-default" name="cancel" value="cancel">Cancel</button>
              </div>
              <!-- /.box-footer -->
            <?php echo Form::close(); ?>

          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/admin_users/add.blade.php ENDPATH**/ ?>
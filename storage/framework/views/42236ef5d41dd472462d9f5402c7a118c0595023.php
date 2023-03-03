<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
    Add Location
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url('admin/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="<?php echo e(url('admin/locations')); ?>">Locations</a></li>
      <li class="active">Add</li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content" ng-controller='manage_locations'>
    <div class="row">
      <!-- right column -->
      <div class="col-md-12">
        <!-- Horizontal Form -->
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">Add Location Form</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <?php echo Form::open(['url' => 'admin/add_location', 'class' => 'form-horizontal form']); ?>

          <div class="box-body" ng-init="formatted_coords=<?php echo e(json_encode(old('formatted_coords',[]))); ?>;coordinates=[]">
            <span class="text-danger">(*)Fields are Mandatory</span>
            <div class="form-group">
              <label for="input_name" class="col-sm-3 control-label">Name<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name']); ?>

                <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']); ?>

                <span class="text-danger"><?php echo e($errors->first('status')); ?></span>
              </div>
            </div>
            <?php echo e(Form::hidden('coordinates', '', ['class' => 'coordinates','ng-model' => 'coordinates'])); ?>

          </div>
          <div class="box-body">
            <span class="text-danger"><?php echo e($errors->first('coordinates')); ?></span>
            <span class="text-danger"><?php echo e(old('location_set')); ?></span>
            <input id="pac-input" class="controls hide" type="text" placeholder="Search here" style="padding: 5px;margin: 5px;">
            <div id="map" style="height: 500px;width: 100%;"></div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit">
              Submit
            </button>
            <a href="<?php echo e(url('admin/locations')); ?>" class="btn btn-default" name="cancel" value="Cancel">
            Cancel
            </a>            
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
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/locations/add.blade.php ENDPATH**/ ?>
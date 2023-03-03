<?php $__env->startSection('main'); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Trips
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Trips</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header" style="height: 54px;">
              <!-- <h3 class="box-title">Manage Trips </h3> -->
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
<?php echo $dataTable->table(); ?>

</div>
</div>
</div>
</div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<link rel="stylesheet" href="<?php echo e(url('css/buttons.dataTables.css')); ?>">
<script src="<?php echo e(url('js/dataTables.buttons.js')); ?>"></script>
<script src="<?php echo e(url('js/buttons.server-side.js')); ?>"></script>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<style type="text/css">
.fa-eye{
      font-size: 20px !important;
}
</style>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/trips/index.blade.php ENDPATH**/ ?>
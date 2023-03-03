<?php $__env->startSection('main'); ?>
 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" ng-controller="company_management">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Manage Company
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Manage Company</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Manage Company</h3> -->
              <?php if(Auth::guard('admin')->user()->can('create_company')): ?>
                <div style="float:right;"><a class="btn btn-success" href="<?php echo e(url('admin/add_company')); ?>">Add Company</a></div>
              <?php endif; ?>
            </div>
            <!-- /.box-header -->
            <div class="box-body companey-list">
<?php echo $dataTable->table(); ?>

</div>
</div>
</div>
</div>
</section>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
<style type="text/css">
  .company_driver_list {
    width: 300px;
    overflow-wrap: break-word;
  }
</style>
<link rel="stylesheet" href="<?php echo e(url('css/buttons.dataTables.css')); ?>">
<script src="<?php echo e(url('js/dataTables.buttons.js')); ?>"></script>
<script src="<?php echo e(url('js/buttons.server-side.js')); ?>"></script>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/company/view.blade.php ENDPATH**/ ?>
<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header" st>
    <h1>
    Manage <?php echo e($main_title); ?>

    <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active"> <?php echo e($main_title); ?> </li>
    </ol>
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header" style="height: 54px;">
            <!-- <h3 class="box-title">Manage <?php echo e($main_title); ?> </h3> -->
            <div style="float:right;">
              <?php if(isset($total_owe_amount)): ?>
              <a class="btn btn-success" href="<?php echo e(route('owe_details',['type' => 'overall'])); ?>"> Total Owe Amount : <?php echo e($currency_code.$total_owe_amount); ?> </a>
              
              <p class="btn btn-warning" style="cursor: default;"> Remaining Owe Amount : <?php echo e($currency_code.$remaining_owe_amount); ?> </p>
              <?php endif; ?>
            </div> 
          </div>
          <?php if(isset($total_owe_amount)): ?>
          <div class="box-header" style="height: 54px;">
            <h3 class="payment_header_text">
              <?php echo e($sub_title); ?>

            </h3>
          </div>
          <?php endif; ?>
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
<style>
  .min_width {
    width: 200px;
    overflow: hidden;
    word-wrap: break-word;
  }
</style>
<script src="<?php echo e(url('admin_assets/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('admin_assets/plugins/datatables/dataTables.bootstrap.min.js')); ?>"></script>
<link rel="stylesheet" href="<?php echo e(url('css/buttons.dataTables.css')); ?>">
<script src="<?php echo e(url('js/dataTables.buttons.js')); ?>"></script>
<script src="<?php echo e(url('js/buttons.server-side.js')); ?>"></script>
<?php echo $dataTable->scripts(); ?>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/owe/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Documents
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="dashboard"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Documents</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">

        <div class="box">
          <div class="box-header">
            <!-- <h3 class="box-title">Documents Management</h3> -->
            <?php if(Auth::guard('admin')->user()->can('create_documents')): ?>
            <div style="float:right;"><a class="btn btn-success" href="<?php echo e(url('admin/add_document')); ?>">Add Documents</a></div>
            <?php endif; ?>
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


<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/documents/view.blade.php ENDPATH**/ ?>
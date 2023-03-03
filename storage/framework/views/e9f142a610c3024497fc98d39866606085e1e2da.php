<?php $__env->startSection('main'); ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
        Manage Ride Requests
        <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Ride Requests</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header" style="height: 54px;">
                        <!-- <h3 class="box-title"> Manage Ride Requests </h3> -->
                    </div>
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
<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/request/view.blade.php ENDPATH**/ ?>
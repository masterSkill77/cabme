   
<?php $__env->startSection('main'); ?>
<main role="main" id="site-content">
	<div class="container">
	  <div class="mt-5 text-wrap" style="margin: 3em 0;">
	    <?php echo $content; ?>

	  </div>
	</div>
</main>
<?php $__env->startPush('scripts'); ?>
<script type="text/javascript">
$( document ).ready(function() {
 
 var base_url = "<?php echo url('/'); ?>";
 var user_token = '<?php echo Session::get('get_token'); ?>';

	if(user_token!='')
	{
	  	$('a[href*="'+base_url+'"]').attr('href' , 'javascript:void(0)');
	 }

});

</script>
<?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('templatesign', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/home/static_pages.blade.php ENDPATH**/ ?>
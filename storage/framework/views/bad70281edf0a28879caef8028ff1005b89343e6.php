<?php $__env->startSection('main'); ?>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <?php $page = isset($result) ? 'Edit' : 'Add'; ?>
      <h1>
         <?php echo $page; ?> Documents 
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/dashboard')); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?php echo e(url(LOGIN_USER_TYPE.'/documents')); ?>">Documents</a></li>
        <li class="active"><?php echo $page; ?></li>
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
              <h3 class="box-title"><?php echo $page; ?> Documents Form</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php echo Form::open(['url' => 'admin/add_document', 'class' => 'form-horizontal']); ?>

              <div class="box-body">
              <span class="text-danger">(*)Fields are Mandatory</span>
               <div class="form-group">
                  <label for="input_language" class="col-sm-3 control-label">Language<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('language', $language, 'en', ['class' => 'form-control', 'id' => 'input_language', 'disabled' =>'disabled']); ?>

                  </div>
                </div>
                <div class="form-group">
                  <label for="input_status" class="col-sm-3 control-label">Document For<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('type', array('Driver' => 'Driver', 'Vehicle' => 'Vehicle','Company' => 'Company'), $result->type ?? '', ['class' => 'form-control', 'id' => 'input_type']); ?>

                  </div>
                </div>
                <div class="form-group">
                  <label for="input_name" class="col-sm-3 control-label">Document Name<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::text('document_name', $result->document_name ?? '', ['class' => 'form-control', 'id' => 'input_document_name', 'placeholder' => 'Document Name']); ?>

                    <span class="text-danger"><?php echo e($errors->first('document_name')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_code" class="col-sm-3 control-label">Country<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('country', $country,  $result->country_code ?? '', ['class' => 'form-control', 'id' => 'input_country']); ?>

                  </div>
                </div>
                <div class="form-group">
                  <label for="input_suggested" class="col-sm-3 control-label">Expire On Date<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('expire_on_date', array('Yes' => 'Yes', 'No' => 'No'), $result->expire_on_date ?? '', ['class' => 'form-control', 'id' => 'input_expire','placeholder'=>'Select']); ?>

                    <span class="text-danger"><?php echo e($errors->first('expire_on_date')); ?></span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_status" class="col-sm-3 control-label">Status<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    <?php echo Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), $result->status ?? '', ['class' => 'form-control', 'id' => 'input_status']); ?>

                  </div>
                </div>


                <div class="panel" ng-init="translations = <?php echo e(json_encode(old('translations') ?: ($result->translate ?? array()))); ?>; removed_translations =  []; errors = <?php echo e(json_encode($errors->getMessages())); ?>;" ng-cloak>
                  <div class="panel-header">
                    <h4 class="box-title text-center">Translations</h4>
                  </div>
                  <div class="panel-body">
                    <input type="hidden" name="removed_translations" ng-value="removed_translations.toString()">
                    <div class="row" ng-repeat="translation in translations">
                      <input type="hidden" name="translations[{{$index}}][id]" value="{{translation.id}}">
                      <div class="form-group">
                        <label for="input_language_{{$index}}" class="col-sm-3 control-label">Language<em class="text-danger">*</em></label>
                        <div class="col-md-7 col-sm-offset-1">
                          <select name="translations[{{$index}}][locale]" class="form-control inactive_translate" id="input_language_{{$index}}" ng-model="translation.locale" >
                            <option value="" ng-if="translation.locale == ''">Select Language</option>
                            <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($key); ?>" ng-if="(('<?php echo e($key); ?>' | checkKeyValueUsedInStack : 'locale': translations) || '<?php echo e($key); ?>' == translation.locale) && '<?php echo e($key); ?>' != 'en'"><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                          <span class="text-danger ">{{ errors['translations.'+$index+'.locale'][0] }}</span>
                        </div>
                        <div class="col-sm-1 p-0">
                          <button class="btn btn-danger btn-xs" ng-click="translations.splice($index, 1); removed_translations.push(translation.id)">
                            <i class="fa fa-trash"></i>
                          </button>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Document Name<em class="text-danger">*</em></label>
                        <div class="col-md-7 col-sm-offset-1">
                          <?php echo Form::text('translations[{{$index}}][document_name]', '{{translation.document_name}}', ['class' => 'form-control', 'id' => 'input_name_{{$index}}', 'placeholder' => 'Name']); ?>

                          <span class="text-danger ">{{ errors['translations.'+$index+'.document_name'][0] }}</span>
                        </div>
                      </div>
                      <legend ng-if="$index+1 < translations.length"></legend>
                    </div>
                  </div>
                  <div class="panel-footer">
                    <div class="row" ng-show="translations.length <  <?php echo e(count($languages) - 1); ?>">
                      <div class="col-sm-10 col-sm-offset-1 text-center">
                        <button type="button" class="btn btn-info" ng-click="translations.push({locale:''});" >
                          <i class="fa fa-plus"></i> Add Translation
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <input type="hidden" name="document_id" value="<?php echo e($result->id ?? ''); ?>">
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-info" name="submit" value="submit">Submit</button>
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

<?php echo $__env->make('admin.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cloneapp/public_html/cabme.cloneappsolutions.com/resources/views/admin/documents/add.blade.php ENDPATH**/ ?>
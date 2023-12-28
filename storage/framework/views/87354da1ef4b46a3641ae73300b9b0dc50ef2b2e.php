<?php $__env->startSection('styles'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row justify-content-between">
        <div class="col-9">
            <h1 class="h3 mb-2 text-gray-800"><?php echo e(__('importer_csv.import-csv-data-index')); ?></h1>
            <p class="mb-4"><?php echo e(__('importer_csv.import-csv-data-index-desc')); ?></p>
        </div>
        <div class="col-3 text-right">
            <a href="<?php echo e(route('admin.importer.csv.upload.show')); ?>" class="btn btn-info btn-icon-split">
                <span class="icon text-white-50">
                  <i class="fas fa-backspace"></i>
                </span>
                <span class="text"><?php echo e(__('backend.shared.back')); ?></span>
            </a>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row bg-white pt-4 pl-3 pr-3 pb-4">
        <div class="col-12">

            <div class="row pt-4">
                <div class="col-12">
                    <?php echo e($all_import_csv_data_count . ' ' . __('category_description.records')); ?>

                </div>
            </div>

            <hr class="mt-1">

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th><?php echo e(__('importer_csv.filename')); ?></th>
                                <th><?php echo e(__('importer_csv.progress')); ?></th>
                                <th><?php echo e(__('importer_csv.uploaded-at')); ?></th>
                                <th><?php echo e(__('importer_csv.model-for')); ?></th>
                                <th><?php echo e(__('backend.shared.action')); ?></th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th><?php echo e(__('importer_csv.filename')); ?></th>
                                <th><?php echo e(__('importer_csv.progress')); ?></th>
                                <th><?php echo e(__('importer_csv.uploaded-at')); ?></th>
                                <th><?php echo e(__('importer_csv.model-for')); ?></th>
                                <th><?php echo e(__('backend.shared.action')); ?></th>
                            </tr>
                            </tfoot>
                            <tbody>
                            <?php $__currentLoopData = $all_import_csv_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_import_csv_data_key => $import_csv_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($import_csv_data->import_csv_data_filename); ?></td>
                                    <td>
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated <?php if($import_csv_data->import_csv_data_parse_status == \App\Models\ImportCsvData::IMPORT_CSV_STATUS_ALL_PARSED): ?> bg-success <?php else: ?> bg-info <?php endif; ?>" role="progressbar" aria-valuenow="<?php echo e(intval($import_csv_data->import_csv_data_parsed_rows/$import_csv_data->import_csv_data_total_rows * 100)); ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo e(intval($import_csv_data->import_csv_data_parsed_rows/$import_csv_data->import_csv_data_total_rows * 100)); ?>%">
                                                <?php echo e($import_csv_data->import_csv_data_parsed_rows . ' / ' . $import_csv_data->import_csv_data_total_rows); ?>

                                            </div>
                                        </div>
                                    </td>
                                    <td><?php echo e($import_csv_data->updated_at->diffForHumans()); ?></td>
                                    <td>
                                        <?php if($import_csv_data->import_csv_data_for_model == \App\Models\ImportCsvData::IMPORT_CSV_FOR_MODEL_LISTING): ?>
                                            <?php echo e(__('importer_csv.csv-for-model-listing')); ?>

                                        <?php endif; ?>
                                    </td>
                                    <td>

                                        <?php if($import_csv_data->import_csv_data_parse_status != \App\Models\ImportCsvData::IMPORT_CSV_STATUS_ALL_PARSED): ?>
                                            <a href="<?php echo e(route('admin.importer.csv.upload.data.edit', ['import_csv_data' => $import_csv_data->id])); ?>" class="btn btn-primary btn-sm text-white rounded">
                                                <?php echo e(__('importer_csv.parse')); ?>

                                            </a>
                                        <?php endif; ?>

                                        <a class="btn btn-danger btn-sm text-white rounded" href="#" data-toggle="modal" data-target="#deleteModal_<?php echo e($import_csv_data->id); ?>">
                                            <?php echo e(__('importer_csv.delete-file')); ?>

                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <?php echo e($all_import_csv_data->links()); ?>

                </div>
            </div>

        </div>
    </div>

    <?php $__currentLoopData = $all_import_csv_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_import_csv_data_key => $import_csv_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Modal -->
        <div class="modal fade" id="deleteModal_<?php echo e($import_csv_data->id); ?>" tabindex="-1" role="dialog" aria-labelledby="deleteModal_<?php echo e($import_csv_data->id); ?>" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"><?php echo e(__('backend.shared.delete-confirm')); ?></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo e(__('backend.shared.delete-message', ['record_type' => __('importer_csv.csv-file'), 'record_name' => $import_csv_data->import_csv_data_filename])); ?>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo e(__('backend.shared.cancel')); ?></button>
                        <form action="<?php echo e(route('admin.importer.csv.upload.data.destroy', ['import_csv_data' => $import_csv_data->id])); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger"><?php echo e(__('importer_csv.delete-file')); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/hassan/Downloads/refactore aladdin/resources/views/backend/admin/importer/csv/data/index.blade.php ENDPATH**/ ?>
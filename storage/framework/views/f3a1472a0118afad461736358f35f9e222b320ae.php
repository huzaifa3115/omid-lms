<?php $__env->startSection('title','"'.$live->title.'" User List'); ?>
<?php $__env->startSection('page'); ?>
    <div class="card">
        <div class="card-body p-0">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                    <tr>
                        <th><?php echo trans('admin.username'); ?></th>
                        <th><?php echo trans('admin.email'); ?></th>
                        <th>Purchase Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo $item->username ?? ''; ?></td>
                        <td><?php echo $item->email ?? ''; ?></td>
                        <td><?php echo date('Y/m/d H:i',$item->created_at) ?? ''; ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php if($list->hasPages()): ?>
        <div class="card-footer">
            <?php echo $list->appends($_GET)->links('pagination.default'); ?>

        </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.newlayout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp-php-7-3\htdocs\omid-lms\resources\views/admin/live/details.blade.php ENDPATH**/ ?>
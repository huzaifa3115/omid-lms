<div class="container-fluid">
    <div class="container news-container">
        <div class="row">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <!-- <div class="row-xs">
                    <div class="two-ads-container">
                        <div class="h-10 visible-xs"></div>
                        <?php if(isset($ads)): ?>
                            <div class="row">
                                <?php $__currentLoopData = $ads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($ad->position == 'main-article-side'): ?>
                                        <a href="<?php echo e($ad->url); ?>"><img src="<?php echo e($ad->image); ?>" class="<?php echo e($ad->size); ?>"></a>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <div class="h-15"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div> -->
                <div class="row-xs contents_box">
                    <div class="top-user-container">
                        <div class="header">
							<i class="secicon mdi mdi-teach"></i>
                            <span class="best-users"><?php echo e(trans('main.top_vendors')); ?></span>
                        </div>
                        <div class="user-tabs">
                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><?php echo e(trans('main.courses_feedback')); ?></a></li>
                                <li><a href="#tab2" role="tab" data-toggle="tab"><?php echo e(trans('main.courses_count')); ?></a></li>
                                <li><a href="#tab3" role="tab" data-toggle="tab"><?php echo e(trans('main.sales')); ?></a></li>
                            </ul>
                            <!-- TAB CONTENT -->
                            <div class="tab-content">
                                <div class="active tab-pane fade in" id="tab1">
                                    <?php if(isset($user_rate)): ?>
                                        <?php $__currentLoopData = $user_rate; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $meta = arrayToList($ur->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                        <a href="/profile/<?php echo e($ur->id); ?>">
                                            <img alt="<?php echo e($ur->username ?? ''); ?>" src="<?php echo e(!empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png'); ?>">
                                            <span><?php echo e(!empty($ur->name) ? $ur->name : ''); ?></span>
                                        </a>
                                    </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <?php if(isset($user_content)): ?>
                                        <?php $__currentLoopData = $user_content; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $uc): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $meta = arrayToList($uc->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                                <a href="/profile/<?php echo e($uc->id); ?>">
                                                    <img  alt="<?php echo e($uc->username ?? ''); ?>"  src="<?php echo e(!empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png'); ?>">
                                                    <span><?php echo e(!empty($ur->name) ? $ur->name : ''); ?></span>
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <?php if(isset($user_popular)): ?>
                                        <?php $__currentLoopData = $user_popular; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $up): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php $meta = arrayToList($up->usermetas, 'option', 'value');?>
                                            <div class="col-md-3 tab-con">
                                                <a href="/profile/<?php echo e($up->id); ?>">
                                                    <img alt="<?php echo e($up->username ?? ''); ?>" src="<?php echo e(!empty($meta['avatar']) ? $meta['avatar'] : '/assets/default/images/user.png'); ?>">
                                                    <span><?php echo e(!empty($ur->name) ? $ur->name : ''); ?></span>
                                                </a>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="h-10"></div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH E:\xampp-php-7-3\htdocs\omid-lms\resources\views/web/default/view/parts/news.blade.php ENDPATH**/ ?>
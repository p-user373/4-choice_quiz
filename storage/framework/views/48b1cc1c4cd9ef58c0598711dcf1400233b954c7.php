<?php $__env->startSection('content'); ?>
<div class="container2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><?php echo e(Auth::user()->name); ?>さんの学習履歴</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    <ul>
                        <li>解いた問題数：<?php echo e($completion_quantity); ?>問</li>
                        <li>正解した問題数：<?php echo e($correct_quantity); ?>問</li>
                    </ul>
                </div>
            </div>

            <div class="mode_of_question">
                <div class="mode_of_question-header">
                    問題を解く
                </div>
                <div class="mode_of_question-body">
                    <ul>
                        <li><a href="select_question?mode=1">全ての問題から出題</a></li>
                        <li><a href="select_question?mode=2">間違えた問題から出題</a></li>
                        <li><a href="select_question?mode=3">苦手な問題から出題</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/home.blade.php ENDPATH**/ ?>
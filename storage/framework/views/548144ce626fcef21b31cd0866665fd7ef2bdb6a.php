    <style>

    .select_question{
        border: 1px solid #000;
        text-align: center;
        width: 864px;
        height: 350px;
        margin: 24px auto;
    }

    .select_question-header{
        border-bottom: 1px solid #000;
        font-size: 36px;
    }

    .select_question-contents{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        align-content: space-around;
    }

    .select_question-content{
        width: 20%;
    }

    .select_question-content a{
        color: white;
        background-color: slateblue;
        border-radius: 5px;
        font-size: 24px;
        display: inline-block;
        width: 96px;
        height: 96px;
        line-height: 96px;
        margin-top: 26px;
        margin-bottom: 26px;
    }

    .to_home{
        text-align: center;
    }

    </style>



<?php $__env->startSection('content'); ?>
<div class="select_question">
    <div class="select_question-header">
        問題選択（<?php echo e($mode_explanation); ?>）
    </div>
    <div class="select_question-contents">
        <?php $__currentLoopData = $mode; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $question_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="select_question-content">
            <a href="question?question_id=<?php echo e($question_id); ?>&key=<?php echo e($key); ?>">第<?php echo e($question_id); ?>問</a>
        </div>
        <?php echo e(session([$key => $question_id])); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<div class="to_home">
    <a href="home">ホームへ</a>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/select_question.blade.php ENDPATH**/ ?>
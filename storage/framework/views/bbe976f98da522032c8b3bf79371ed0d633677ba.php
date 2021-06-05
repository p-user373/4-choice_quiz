<style>
    
    .answer_content{
        text-align: center;
        width: 864px;
        height: 250px;
        margin: auto;
        border: 1px solid #000;
        margin-bottom: 36px;
    }
    
    .correct_or_not{
        font-size: 36px;
        padding-top: 12px;
    }

</style>


<?php $__env->startSection("content3"); ?>
<div class="answer_content">
    <div class="correct_or_not">
        <?php if($correct_or_not==1): ?>
            正解！
        <?php else: ?>
            不正解
        <?php endif; ?>
    </div>
    <p class="commentary">
        解説：<?php echo e($question->commentary); ?>

    </p>
</div>     
<?php $__env->stopSection(); ?>
<?php echo $__env->make("layouts.question_answer_layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/answer.blade.php ENDPATH**/ ?>
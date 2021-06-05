    <style>

        .question_sentence{
            font-size: 24px;
        }

        .question_choice-container{
            display: flex;
            flex-wrap: wrap;
        }

        .question_choice-content{
            width: 50%;
            text-align: center;
            margin-top: 36px;
            margin-bottom: 36px;
        }

        .question_choice-content a{
            display: inline-block;
            width: 432px;
            color: #000;
        }

        .choice_id_and_sentence{
            display: flex;
        }

        .choice_image img{
            width: 432px;
            height: 290px;
        }
    </style>    

    

    <?php $__env->startSection("content2"); ?>
        <a href="question?question_id=<?php echo e($question_id); ?>&weakness_id=<?php echo e($question_id); ?>&key=<?php echo e($key); ?>">
            <span class="fa-stack">
                <?php if($weakness_exist===false): ?>
                <i class="far fa-star fa-stack-2x" style="font-size: 50px;"></i>
                <?php else: ?>
                <i class="fas fa-star fa-stack-2x" style="font-size: 50px; color:yellow;"></i>
                <?php endif; ?>
                <span class="fa fa-stack-1x" id="nigate" style="font-size:10px;">苦手</span>
            </span>
        </a>
    <?php $__env->stopSection(); ?>





    <?php $__env->startSection('content3'); ?>
    <div class="question_sentence">問.<?php echo e($question->sentence); ?></div>
    <div class="question_choice-container">  
        <?php $__currentLoopData = $choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="question_choice-content"> 
                <a href="answer?choice_id=<?php echo e($choice->c_id); ?>&question_id=<?php echo e($question_id); ?>&key=<?php echo e($key); ?>">
                    <div class="choice_id_and_sentence">
                        <div class="choice_id"><?php echo e($choice->c_id); ?>.</div>
                        <div class="choice_sentence"><?php echo e($choice->c_sentence); ?></div>
                    </div>
                    <div class="choice_image"><img src="storage/images/<?php echo e(substr($choice->c_image,49)); ?>" alt=""></div>
                </a>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.question_answer_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/question.blade.php ENDPATH**/ ?>
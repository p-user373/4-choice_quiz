<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <title>Document</title>
    <style>
        body{
            width: 1080px;
            margin: 0 auto;
        }
        
        a{
            text-decoration: none;
        }

        .question_header_and_weakness{
            display: flex;
            margin-top: 30px;
            margin-bottom: 12px;
        }
        
        .question_header{
            font-size: 36px;
            margin-right: 10px;
        }

        #nigate{
            padding-left: 8px;
            padding-top: 11px;
        }



        .trandition_page{
            text-align: center;
        }

        .back_and_next{
            display: flex;
            width: 200px;
            margin: auto;
        }

        .back_and_next a:nth-child(1){
            margin-right: 36px;
        }

        .back_and_next,.back_to_select{
            margin-bottom: 24px;
        }

    </style>
</head>
<body>
    <div class="question_header_and_weakness">
        <div class="question_header">第<?php echo e($question_id); ?>問</div>
        <div class="weakness">
        <?php echo $__env->yieldContent("content2"); ?>
        </div>
    </div>
    <div class="question_or_answer_content">
        <?php echo $__env->yieldContent('content3'); ?>
    </div>
    <div class="trandition_page">
        <div class="back_and_next">
        <?php if(session()->has($key-1)): ?>
            <a href="question?question_id=<?php echo e(session($key-1)); ?>&key=<?php echo e($key-1); ?>">前の問題へ</a>
        <?php endif; ?>
        <?php if(session()->has($key+1)): ?>    
            <a href="question?question_id=<?php echo e(session($key+1)); ?>&key=<?php echo e($key+1); ?>">次の問題へ</a>
        <?php endif; ?>
        </div>
        <div class="back_to_select">
            <a href='select_question?mode=<?php echo e(Session::get("name")); ?>'>問題選択画面へ戻る</a>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/layouts/question_answer_layout.blade.php ENDPATH**/ ?>
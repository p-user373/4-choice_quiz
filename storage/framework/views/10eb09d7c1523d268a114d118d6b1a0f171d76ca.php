<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

    <style>
        
        body{
            width: 1080px;
            margin: 0 auto;
        }

        a{
            text-decoration: none;
        }
        
        ul{
            padding: 0;
            margin: 0;
            text-align: center;
        }

        li{
            list-style: none;
        }
        
        .container{
            display: flex;
            justify-content: space-between;
            border-bottom: 1px solid #000;
        }

        .title{
            font-size: 48px;
        }

        .navbar-nav{
            margin-top: 36px;
            margin-right: 12px;
        }

        
        .container2 li{
            font-size: 24px;
        }
        


        .col-md-8{
            display: flex;
            justify-content: space-around;
        }

        .card,.mode_of_question{
            border: 1px solid #000;
            margin-top: 24px;
            width: 424px;
        }

        .card-header,.mode_of_question-header{
            border-bottom: 1px solid #000;
            font-size: 36px;
            padding-left: 24px;
            padding-right: 24px;
        }

        .card-body li{
            line-height: 75px;
        }

        .card-body li:first-child{
            border-bottom: 1px dashed #000;
        }
        
        .mode_of_question li{
            line-height: 50px;
            width: 424px;
        }

        .mode_of_question a{
            display: block;
        }

        .mode_of_question li:nth-child(1),.mode_of_question li:nth-child(2){
            border-bottom: 1px dashed #000;
        }
    </style>
</head>
<body>
    <div id="app">
            <div class="container">
                <a class="title" href="<?php echo e(url('/')); ?>">
                    ４択クイズアプリ
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                            </li>
                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>
                            <li class="nav-item dropdown">

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\4-choice_quize\resources\views/layouts/app.blade.php ENDPATH**/ ?>
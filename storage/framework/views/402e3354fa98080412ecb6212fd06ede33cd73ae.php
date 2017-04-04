<nav class="navbar navbar-default">
    <div class="container">

        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                DANI CHAT
            </a>
        </div>

        <?php if( true || Auth::check() ): ?>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li<?php echo e(Request::is('chat*') && !Request::is('chat/chat')? ' class=active' : ''); ?>>
                    <a href="<?php echo e(url('/chat/crear')); ?>">
                        CREAR CHAT
                    </a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </div>
</nav>

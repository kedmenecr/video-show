<?php $__env->startSection('content'); ?>

    <div class="colums">
        <div class="column is-one-third is-offset-one-third m-t-50">
            <div class="card">
                <div class="card-content">
                    <h1 class="title">Log In</h1>
                    <form action="<?php echo e(route('login')); ?>" method="POST" role="form">
                        <?php echo e(csrf_field()); ?>

                    <div class="field">
                        <label for="email" class="label">Email adress</label>
                        <p class="control">
                            <input class="input <?php echo e($errors->has('email') ? 'is-danger' : ""); ?>" type="text" name="email" id="email" placeholder="name@domain.com" value="<?php echo e(old('email')); ?>">
                        </p>
                        <?php if($errors->has('email')): ?>
                            <p class="help is-danger"><?php echo e($errors->first('email')); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="field">
                        <label for="password" class="label">Password</label>
                        <p class="control">
                            <input class="input <?php echo e($errors->has('password') ? 'is-danger' : ""); ?>" type="password" name="password" id="password" >
                        </p>
                        <?php if($errors->has('password')): ?>
                        <p class="help is-danger"><?php echo e($errors->first('password')); ?></p>
                        <?php endif; ?>
                    </div>
                    <b-checkbox class="mt-20" name="remember">Remember me</b-checkbox>
                    <button class="button is-primary-bg has-text-white is-outline is-fullwidth m-t-30">Log In</button>
                </form> 
                </div> 
            </div> 
            <h5 class="has-text-centered m-t-20"><a href="<?php echo e(route('password.request')); ?>" class="is-muted">Forgot your password?</a></h5>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
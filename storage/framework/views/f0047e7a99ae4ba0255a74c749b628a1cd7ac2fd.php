<?php $__env->startSection('content'); ?>
    @parent
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="pw-reset-panel panel panel-default">
                <div class="pw-reset-heading panel-heading">HealthCare Professional Password Reset Form</div>

                <div class="pw-reset-body panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/user/password/reset')); ?>">
                        <?php echo e(csrf_field()); ?>


                        <input type="hidden" name="token" value="<?php echo e($token); ?>">

                        <div class="fg-user-reset form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                            <label for="email" class="email-label col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="email-input form-control" name="email" value="<?php echo e(isset($email) ? $email : old('email')); ?>" autofocus>

                                <?php if($errors->has('email')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('email')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="fg-user-reset form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                <?php if($errors->has('password_confirmation')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Reset Password
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('user.layout.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
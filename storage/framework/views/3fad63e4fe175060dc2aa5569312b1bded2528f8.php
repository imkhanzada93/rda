<?php echo csrf_field(); ?>
<div class="form-group">
    <label for="name">Plan Name</label>
    <input type="text" name="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="name" value="<?php echo e(isset($plan) ? $plan->name : old('name')); ?>" placeholder="Enter Plan Name">
    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <label for="plan_category_id">Plan Category </label>
    <select class="form-control <?php $__errorArgs = ['plan_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="plan_category_id" style="width: 100%;">
        <?php $__currentLoopData = get_list('plan_categories'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option 
                <?php
                if(isset($plan)){
                    if($plan->plan_category_id ==  $plan_category->id)
                    echo 'selected';   
                } 
                ?>
                value="<?php echo e($plan_category->id); ?>">
                <?php echo e($plan_category->name); ?>

            </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['plan_category_id'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <label for="coverage_type">Coverage Type</label>
    <textarea name="coverage_type" class="form-control <?php $__errorArgs = ['coverage_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="coverage_type" placeholder="Enter Coverage Type"><?php echo e(isset($plan) ? $plan->coverage_type : old('coverage_type')); ?></textarea>
    <?php $__errorArgs = ['coverage_type'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <label for="coverage_criteria">Coverage Criteria</label>
    <textarea name="coverage_criteria" class="form-control <?php $__errorArgs = ['coverage_criteria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="coverage_criteria" placeholder="Enter Coverage Criteria"><?php echo e(isset($plan) ? $plan->coverage_criteria : old('coverage_criteria')); ?></textarea>
    <?php $__errorArgs = ['coverage_criteria'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <label for="eligibility_dependent_includes">Eligibility Dependent Includes</label>
    <textarea name="eligibility_dependent_includes" class="form-control <?php $__errorArgs = ['eligibility_dependent_includes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="eligibility_dependent_includes" placeholder="Enter Eligibility Dependent Includes"><?php echo e(isset($plan) ? $plan->eligibility_dependent_includes : old('eligibility_dependent_includes')); ?></textarea>
    <?php $__errorArgs = ['eligibility_dependent_includes'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<div class="form-group">
    <label for="amount">Plan Amount</label>
    <input type="text" name="amount" class="form-control <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="amount" value="<?php echo e(isset($plan) ? $plan->amount : old('amount')); ?>" placeholder="Enter Plan Amount">
    <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <span class="error invalid-feedback"><?php echo e($message); ?></span>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>

<table class="table">
    <thead>
        <tr>
            <th>Benefits</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = get_list('benefits'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $benefit): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($benefit->name); ?><input type="hidden" name="benefit_id[]" value="<?php echo e($benefit->id); ?>" class="form-control"></td>
            <?php
                $amount = get_column('plan_benefits', ['plan_id' => $plan->id, 'benefit_id' => $benefit->id])
            ?>
            <td><input type="text" name="amount[]" class="form-control" value="<?php echo e(isset($plan) ? (($amount) ? $amount->amount : '') : ''); ?>"></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /home/bookvxos/public_htmll/fmd.bookmyhouse.net/resources/views/plans/form.blade.php ENDPATH**/ ?>
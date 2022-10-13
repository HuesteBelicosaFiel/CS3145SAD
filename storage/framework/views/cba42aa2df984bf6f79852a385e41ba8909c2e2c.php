<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => ['class' => 'p-10 max-w-lg mx-auto mt-24']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'p-10 max-w-lg mx-auto mt-24']); ?>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Update Employee
        </h2>
        <p class="mb-4">Edit employee information</p>
    </header>
    
    <form method="POST" action="/editemployee/<?php echo e($employee->id); ?>" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>
        
        <div class="mb-6">
            <label 
                for="emp_fullName" 
                class="inline-block text-lg mb-2"
                >Name</label>
            <input 
                type="text" 
                class="border border-gray-200 rounded p-2 w-full"
                name="emp_fullName" value="<?php echo e($employee->emp_fullName); ?>" />
    
            <?php $__errorArgs = ['emp_fullName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-6">
            <label for="emp_phoneNum" class="inline-block text-lg mb-2">Phone Number</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_phoneNum" value="<?php echo e($employee->emp_phoneNum); ?>"/>
    
            <?php $__errorArgs = ['emp_phoneNum'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    
        <div class="mb-6">
            <label for="emp_address" class="inline-block text-lg mb-2">Address</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_address" value="<?php echo e($employee->emp_address); ?>" />
    
            <?php $__errorArgs = ['emp_address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    
        <div class="mb-6">
            <label for="emp_email" class="inline-block text-lg mb-2">Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_email" value="<?php echo e($employee->emp_email); ?>" />
    
            <?php $__errorArgs = ['emp_email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2">Password</label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full"
                name="password" value=""/>
    
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-6">
            <label for="password-confirm" class="inline-block text-lg mb-2">Confirm Password</label>
            <input type="password-confirm" class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"  required autocomplete="new-password"/>
    
            <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        
        
        <div class="mb-6">
            <label for="emp_gender" class="inline-block text-lg mb-2">Gender</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_gender" value="<?php echo e($employee->emp_gender); ?>" />
    
            <?php $__errorArgs = ['emp_gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-6">
            <label for="emp_bithdate" class="inline-block text-lg mb-2">Birthdate</label>
            <input type="date" class="border border-gray-200 rounded p-2 w-full"
                name="emp_birthdate" value="<?php echo e($employee->emp_birthdate); ?>" />
    
            <?php $__errorArgs = ['emp_birthdate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="mb-6">
            <label for="emp_role" class="inline-block text-lg mb-2">Role</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_role" value="<?php echo e($employee->emp_role); ?>" />
    
            <?php $__errorArgs = ['emp_role'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
    
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Update Employee
            </button>
    
            <a href="/employee" class="text-black ml-4"> Back </a>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/editemployee.blade.php ENDPATH**/ ?>
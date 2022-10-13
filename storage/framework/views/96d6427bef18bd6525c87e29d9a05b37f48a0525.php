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
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create Supplier
        </h2>
        <p class="mb-4">Add a new sales order</p>
    </header>
    
    <form method="POST"action="/supplier" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>
        
        <div class="mb-6">
            <label
                for="sup_name"
                class="inline-block text-lg mb-2"
                >Supplier Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_name" value="<?php echo e(old('sup_name')); ?>" 
                placeholder="Example: Mark Collins"/>
                
    
            <?php $__errorArgs = ['sup_name'];
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
            <label for="sup_contactPerson" class="inline-block text-lg mb-2"
                >Supplier Contact Person</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_contactPerson"
                placeholder="Example: Mark Zen"
                value="<?php echo e(old('sup_contactPerson')); ?>"
            />
    
            <?php $__errorArgs = ['sup_contactPerson'];
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
            <label
                for="sup_address"
                class="inline-block text-lg mb-2"
                >Supplier Address</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_address"
                placeholder="Example: Davao City"
                value="<?php echo e(old('sup_address')); ?>"
            />
    
            <?php $__errorArgs = ['sup_address'];
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
            <label
                for="sup_phoneNum"
                class="inline-block text-lg mb-2"
                >Supplier Phone Number</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_phoneNum"
                placeholder="09126459067"
                value="<?php echo e(old('sup_phoneNum')); ?>"
            />
    
            <?php $__errorArgs = ['sup_phoneNum'];
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
            <label
                for="sup_email"
                class="inline-block text-lg mb-2"
                >Supplier Email</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="sup_email"
                placeholder="Example: test@gmail.com"
                value="<?php echo e(old('sup_email')); ?>"
            />
    
            <?php $__errorArgs = ['sup_email'];
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
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Create Supplier
            </button>
    
            <a href="/supplier" class="text-black ml-4"> Back </a>
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
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/createsupplier.blade.php ENDPATH**/ ?>
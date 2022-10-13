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
            Purchase Order
        </h2>
        <p class="mb-4">Purchase Order</p>
    </header>
     <form method="POST" action="/purchaseorder" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" class="border border-gray-200 rounded p-2 w-full"
                name="emp_id" value="<?php echo e($employee->id); ?>"/>
             <input type="hidden" class="border border-gray-200 rounded p-2 w-full"
                name="sup_id" value="<?php echo e($supplier->id); ?>"/>
        <div class="mb-6">
            <label for="sup_name" class="inline-block text-lg mb-2">Supplier Name</label>
             
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="sup_name" value="<?php echo e($supplier->sup_name); ?>"  readonly/>
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
            <label for="emp_fullName" class="inline-block text-lg mb-2">Employee Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_fullName" value="<?php echo e($employee->emp_fullName); ?>"  readonly/>
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
            <label for="date_today" class="inline-block text-lg mb-2">Date Today</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="date_today" value="<?php echo e(Carbon\Carbon::now()->toDateString()); ?>" readonly/>
            <?php $__errorArgs = ['date_today'];
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
            <label for="item_name" class="inline-block text-lg mb-2"
                >Item Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_name"
                placeholder="Example: Apple"
                value="<?php echo e(old('item_name')); ?>"
            />
    
            <?php $__errorArgs = ['item_name'];
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
                for="purchase_quantity"
                class="inline-block text-lg mb-2"
                >Item Quantity</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="purchase_quantity"
                placeholder="Example: 1,2,3,4,5"
                value="<?php echo e(old('purchase_quantity')); ?>"
            />
    
            <?php $__errorArgs = ['purchase_quantity'];
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
                for="purchase_cost"
                class="inline-block text-lg mb-2"
                >Procurement Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="purchase_cost"
                placeholder="Example: 21.22,22.36"
                value="<?php echo e(old('purchase_cost')); ?>"
            />
    
            <?php $__errorArgs = ['purchase_cost'];
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
                Submit Order
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
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/createpurchaseorder.blade.php ENDPATH**/ ?>
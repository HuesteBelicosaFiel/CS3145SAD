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
            Edit Item
        </h2>
        <p class="mb-4">Edit <?php echo e($inventory->item_name); ?></p>
    </header>
    
    <form method="POST" action="/inventory/<?php echo e($inventory->id); ?>" enctype="multipart/form-data">
        
        <?php echo csrf_field(); ?>

        <?php echo method_field('PUT'); ?>
        
        <div class="mb-6">
            <label
                for="item_barcode"
                class="inline-block text-lg mb-2"
                >Item Barcode</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_barcode" value="<?php echo e($inventory->item_barcode); ?>" 
                placeholder="Example: 1234567891111"/>
                
    
            <?php $__errorArgs = ['item_barcode'];
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
                value="<?php echo e($inventory->item_name); ?>"
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
                for="inventoryline_quantity"
                class="inline-block text-lg mb-2"
                >Item Quantity</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_quantity"
                placeholder="Example: 1,2,3,4,5"
                value="<?php echo e($inventoryline->first()->inventoryline_quantity); ?>"
            />
    
            <?php $__errorArgs = ['inventoryline_quantity'];
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
                for="item_size"
                class="inline-block text-lg mb-2"
                >Item Size</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_size"
                placeholder="Example: Small,Medium,Large"
                value="<?php echo e($inventory->item_size); ?>"
            />
    
            <?php $__errorArgs = ['item_size'];
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
                for="item_price"
                class="inline-block text-lg mb-2"
                >Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_price"
                placeholder="Example: 21.22,22.36"
                value="<?php echo e($inventory->item_price); ?>"
            />
    
            <?php $__errorArgs = ['item_price'];
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
                for="item_procprice"
                class="inline-block text-lg mb-2"
                >Procurement Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_procprice"
                placeholder="Example: 21.22,22.36"
                value="<?php echo e($inventory->item_procprice); ?>"
            />
    
            <?php $__errorArgs = ['item_procprice'];
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
                for="item_discount"
                class="inline-block text-lg mb-2"
                >Price Discount</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_discount"
                placeholder="Example: 21.22,22.36"
                value="<?php echo e($inventory->item_discount); ?>"
            />
    
            <?php $__errorArgs = ['item_discount'];
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
                for="item_description"
                class="inline-block text-lg mb-2"
            >
                Item Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="item_description"
                rows="10"
                placeholder="Example: The apple is color red."
                
            ><?php echo e($inventory->item_description); ?></textarea>
    
            <?php $__errorArgs = ['item_description'];
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
                for="inventoryline_outofstock"
                class="inline-block text-lg mb-2"
                >Out of Stock Value</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_outofstock"
                placeholder="Example: 0"
                value="<?php echo e($inventoryline->first()->inventoryline_outofstock); ?>"
            />
    
            <?php $__errorArgs = ['inventoryline_outofstock'];
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
                for="inventoryline_restockvalue"
                class="inline-block text-lg mb-2"
                >Restock Value</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_restockvalue"
                placeholder="Example: 10"
                value="<?php echo e($inventoryline->first()->inventoryline_restockvalue); ?>"
            />
    
            <?php $__errorArgs = ['inventoryline_restockvalue'];
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
                for="inventoryline_expirydate"
                class="inline-block text-lg mb-2"
                >Expire Date</label
            >
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_expirydate"
                placeholder="Example: Remote, Boston MA, etc"
                value="<?php echo e(old('inventoryline_expirydate')); ?>"
            />
    
            <?php $__errorArgs = ['inventoryline_expirydate'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Edit Item
            </button>
    
            <a href="/inventory" class="text-black ml-4"> Back </a>
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
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/edit.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-5xl font-bold align-center">Inventory</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<a href="/create" class="absolute top-1/5 right-10 bg-zinc-600 rounded-lg text-white py-2 px-5">Stock in</a>

<br/>
<br/>
<div style="height:500px;overflow:auto;">
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Item ID</td>
        <td class="border-2 border-black">Item Barcode</td>
        <td class="border-2 border-black">Item Name</td>
        <td class="border-2 border-black">Item Size</td>
        <td class="border-2 border-black">Item Description</td>
        <td class="border-2 border-black">Item Selling Price</td>
        <td class="border-2 border-black">Item Procurement Cost</td>
        <td class="border-2 border-black">Item Discount</td>
        <td class="border-2 border-black">Item Quantity</td>
        <td class="border-2 border-black">Item Restock Value</td>
        <td class="border-2 border-black">Item Out of Stock Value</td>
        <td class="border-2 border-black">Expiry Date</td>
        <?php if($inventorylist && $inventorylinelist): ?>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        <?php endif; ?>
    </tr>
    <?php if($inventorylist && $inventorylinelist): ?>
        <?php $__currentLoopData = $inventorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <?php $__currentLoopData = $inventorylinelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventoryline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php echo csrf_field(); ?>
                    <?php if($inventory['id']==$inventoryline['inventory_id']): ?>
                        <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black"><?php echo e($inventory['id']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_barcode']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_name']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_size']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_description']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_price']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_procprice']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventory['item_discount']); ?></td>
                        <?php if((int)$inventoryline['inventoryline_restockvalue'] >= (int)$inventoryline['inventoryline_quantity']): ?>
                        <td class="border-2 border-black"><p class="text-red-500 text-opacity-75" > <?php echo e($inventoryline['inventoryline_quantity']); ?></p></td>
                        <?php else: ?>
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_quantity']); ?></td>
                        <?php endif; ?>
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_restockvalue']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_outofstock']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_expirydate']); ?></td>
                        
                        <td class="border-2 border-black">
                            <a class="hover:text-laravel" href="/edit/<?php echo e($inventory->id); ?>">
                            <i class="fa-solid fa-pencil"></i>Edit
                            </a>
                        </td>
                        
                        <td class="border-2 border-black"><button class="text-red-500">
                        <form method="Post" action="/inventory/<?php echo e($inventory->id); ?>">
                             <input type="hidden" name="inventoryline" value="<?php echo e($inventory->id); ?>" class="text-center" readonly>
                            <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                   
                    <?php else: ?>
                        
                    <?php endif; ?>
                    <?php echo csrf_field(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php echo method_field('DELETE'); ?>
                
            </td>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    <?php else: ?>
            <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td>
    <?php endif; ?>
    </table>

    <br/>

    </div>
</div>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/inventory.blade.php ENDPATH**/ ?>
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
<h1 class="text-lg font-bold align-center">Procurement</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<br/>
<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Item ID</td>
        <td class="border-2 border-black">Item Barcode</td>
        <td class="border-2 border-black">Item Name</td>
        <td class="border-2 border-black">Item Quantity</td>
        <td class="border-2 border-black">Expiry Date</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
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
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_quantity']); ?></td>
                        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_expirydate']); ?></td>
                        <td class="border-2 border-black"><a href="/stockin/<?php echo e($inventory->id); ?>">
                            <i class="fa-solid fa-pencil"></i>Stock in
                        </a></td>
                        <td class="border-2 border-black"><button class="text-red-500"> 
                            <button class="text-red-500"><i class="fa-solid fa-trash"></i>Stock out</button>
                        </td>
                    </tr>
                <?php else: ?>
                        
                <?php endif; ?>
                <?php echo csrf_field(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php else: ?>
                    <tr class="border-2 border-black text-center">
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
                    <td class="border-2 border-black">INVENTORY IS EMPTY</td>
            <?php endif; ?>
    
    </table>
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/procurement.blade.php ENDPATH**/ ?>
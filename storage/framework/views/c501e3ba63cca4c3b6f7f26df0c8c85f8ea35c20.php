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
<a href="/supplier" class="absolute top-1/5 right-10 bg-black text-white py-2 px-5">Stock in</a>

<br/>
<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Order ID</td>
        <td class="border-2 border-black">Employee</td>
        <td class="border-2 border-black">Supplier</td>
        <td class="border-2 border-black">Item</td>
        <td class="border-2 border-black">Quantity</td>
        <td class="border-2 border-black">Cost</td>
        <td class="border-2 border-black">Order Date</td>
        <td class="border-2 border-black">Status</td>
        <?php if($purchaselist): ?>
        <td class="border-2 border-black"></td>
    
        <?php endif; ?>
    </tr>
    <?php if($purchaselist): ?>
        <?php $__currentLoopData = $purchaselist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                
                    <?php echo csrf_field(); ?>
                    
                        <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black"><?php echo e($purchase['id']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['emp_id']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['sup_id']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['item_name']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['purchase_quantity']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['purchase_cost']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['date_today']); ?></td>
                        <td class="border-2 border-black"><?php echo e($purchase['purchase_status']); ?></td>
                        
                        <td class="border-2 border-black">
                            <a href="/editprocurement/<?php echo e($purchase->id); ?>">
                            <i class="fa-solid fa-pencil"></i>Change status
                            </a>
                        </td>
                        
                        
                   
                    
                        
                  
                    <?php echo csrf_field(); ?>
                
                
                
            </td>
        </tr>
        
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        
    <?php else: ?>
            <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td> 
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td><td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
    <?php endif; ?>
    </table>
    

</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/purchaseorder.blade.php ENDPATH**/ ?>
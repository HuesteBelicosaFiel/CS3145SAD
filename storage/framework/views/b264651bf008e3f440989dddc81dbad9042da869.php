
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
<h1 class="text-lg font-bold align-center">Sales</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo \Livewire\Livewire::scripts(); ?>



<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    <div style="display: flex; justify-content: space-between;">
      
    <div class="col">
       <table class="table-auto overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">ID</td>
            <td class="border-2 border-black">Order Total</td>
            <td class="border-2 border-black">Order Discount</td>
            <td class="border-2 border-black">Senior Discounted</td>
            <td class="border-2 border-black">Date</td>    
            <td class="border-2 border-black">Cash Paid</td>
            <td class="border-2 border-black">Card Type</td>
            <td class="border-2 border-black">Card Number</td>
            <td class="border-2 border-black">Amount Paid</td>
        </tr>
    <?php $__currentLoopData = $salelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sales): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black"><?php echo e($sales['id']); ?></td>
            <td class="border-2 border-black"><?php echo e($sales['order_total']); ?></td>
            <td class="border-2 border-black"><?php echo e($sales['order_discount']); ?></td>
            <td class="border-2 border-black"><?php echo e($sales['order_senior_discount']); ?></td>
            <td class="border-2 border-black"><?php echo e($sales['created_at']); ?></td>
            
            <?php $__currentLoopData = $cashlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cash): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($sales->id == $cash->order_id): ?>
            <?php echo csrf_field(); ?>
            <td class="border-2 border-black"><?php echo e($cash['cashpayment_amount']); ?></td>
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black"></td>
            
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            
            <?php $__currentLoopData = $cardlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($sales->id == $card->order_id): ?>
            <?php echo csrf_field(); ?>
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black"><?php echo e($card['card_number']); ?></td>
            <td class="border-2 border-black"><?php echo e($card['card_type']); ?></td>
            <td class="border-2 border-black"><?php echo e($card['cardpayment_amount']); ?></td>
     
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <td class="border-2 border-black"><a class="hover:text-laravel" href="/contents/<?php echo e($sales->id); ?>">
                    <i class="fa-solid fa-pencil"></i>Show Contents
                            </a></td>
            </td>    
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    </div>
    


    <div class="col">
        Order Contents
       <table class="table-auto overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">Order ID</td>
            <td class="border-2 border-black">Item Name</td>
            <td class="border-2 border-black">Quantity</td>
            <td class="border-2 border-black">Price</td>
            <td class="border-2 border-black">Discount</td>    

        </tr>
    <?php if($ordercontentlist): ?>
    <?php $__currentLoopData = $ordercontentlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ordercontents): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
        
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black"><?php echo e($ordercontents['order_id']); ?></td>
            <td class="border-2 border-black"><?php echo e($ordercontents['item_name']); ?></td>
            <td class="border-2 border-black"><?php echo e($ordercontents['inventoryline_quantity']); ?></td>
            <td class="border-2 border-black"><?php echo e($ordercontents['item_price']); ?></td>
            <td class="border-2 border-black"><?php echo e($ordercontents['item_discount']); ?></td>
            
           
            
   
            
            </td>    
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </table>
    </div>
    </div>
</div>


    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/saleshistory.blade.php ENDPATH**/ ?>
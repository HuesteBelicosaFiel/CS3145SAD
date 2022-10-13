
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
<h1 class="text-5xl font-bold align-center">Cashier</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo \Livewire\Livewire::scripts(); ?>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<?php if($inventorylist && $inventorylinelist): ?>
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
     <form method="POST" action="/salesorder" enctype="multipart/form-data">
        <input type="hidden" class="border border-gray-200 rounded p-2 w-full" name="date_today" value="<?php echo e(Carbon\Carbon::now()->toDateString()); ?>" readonly/>
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seniorbutton', [])->html();
} elseif ($_instance->childHasBeenRendered('CnvrQIE')) {
    $componentId = $_instance->getRenderedChildComponentId('CnvrQIE');
    $componentTag = $_instance->getRenderedChildComponentTagName('CnvrQIE');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('CnvrQIE');
} else {
    $response = \Livewire\Livewire::mount('seniorbutton', []);
    $html = $response->html();
    $_instance->logRenderedChild('CnvrQIE', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <div class="mb-6">
        <label
            for="item_price"
            class="inline-block text-lg mb-2"
            >Card Type</label
        >
        <input type="text" class="border border-gray-200 rounded p-2 w-auto" name="cardnumber" placeholder="Example: Visa, MasterCard"       />
        <label
            for="item_price"
            class="inline-block text-lg mb-2"
            >Card Number</label
        >
        <input type="text" class="border border-gray-200 rounded p-2 w-auto" name="cardtype" placeholder="Example: 1234-5678-9012-3456"       />
        <label
            for="item_price"
            class="inline-block text-lg mb-2"
            >Price</label
        >
        <input type="text" class="border border-gray-200 rounded p-2 w-auto" name="amount_paid" placeholder="Example: 21.22,22.36"       />

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

        <button
            class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
        >
            Submit Payment
        </button>
    </div> 

    <div style="display: flex; gap: 10em; justify-content: space-between;">
        <div class="col">
        </div>
    <div class="col">

     <table class="table-auto m-10">
        <tr class="font-bold text-center">
        <td class="border-2 border-black">Barcode</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Quantity</td>
        <td class="border-2 border-black">Discount</td>
        <td class="border-2 border-black">Price</td>
        
        </tr>
    
        <?php $__currentLoopData = $inventorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
        <?php $__currentLoopData = $inventorylinelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventoryline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <?php echo csrf_field(); ?>
        <?php if($inventory['id']==$inventoryline['inventory_id']): ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('addtocarttable', ['barcode' => $inventory['item_barcode'],'oldquantity' => $inventoryline['inventoryline_quantity'],'name' => $inventory['item_name'],'price' => $inventory['item_price'],'discount' => $inventory['item_discount'],'idd' => $inventory['id']])->html();
} elseif ($_instance->childHasBeenRendered($inventory['item_barcode'])) {
    $componentId = $_instance->getRenderedChildComponentId($inventory['item_barcode']);
    $componentTag = $_instance->getRenderedChildComponentTagName($inventory['item_barcode']);
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild($inventory['item_barcode']);
} else {
    $response = \Livewire\Livewire::mount('addtocarttable', ['barcode' => $inventory['item_barcode'],'oldquantity' => $inventoryline['inventoryline_quantity'],'name' => $inventory['item_name'],'price' => $inventory['item_price'],'discount' => $inventory['item_discount'],'idd' => $inventory['id']]);
    $html = $response->html();
    $_instance->logRenderedChild($inventory['item_barcode'], $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ordertotal', [])->html();
} elseif ($_instance->childHasBeenRendered('gn43cBA')) {
    $componentId = $_instance->getRenderedChildComponentId('gn43cBA');
    $componentTag = $_instance->getRenderedChildComponentTagName('gn43cBA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('gn43cBA');
} else {
    $response = \Livewire\Livewire::mount('ordertotal', []);
    $html = $response->html();
    $_instance->logRenderedChild('gn43cBA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('taxtotal', [])->html();
} elseif ($_instance->childHasBeenRendered('8yeVBIz')) {
    $componentId = $_instance->getRenderedChildComponentId('8yeVBIz');
    $componentTag = $_instance->getRenderedChildComponentTagName('8yeVBIz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('8yeVBIz');
} else {
    $response = \Livewire\Livewire::mount('taxtotal', []);
    $html = $response->html();
    $_instance->logRenderedChild('8yeVBIz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seniortotal', [])->html();
} elseif ($_instance->childHasBeenRendered('MB50e93')) {
    $componentId = $_instance->getRenderedChildComponentId('MB50e93');
    $componentTag = $_instance->getRenderedChildComponentTagName('MB50e93');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MB50e93');
} else {
    $response = \Livewire\Livewire::mount('seniortotal', []);
    $html = $response->html();
    $_instance->logRenderedChild('MB50e93', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('grandtotal', [])->html();
} elseif ($_instance->childHasBeenRendered('o25R2Df')) {
    $componentId = $_instance->getRenderedChildComponentId('o25R2Df');
    $componentTag = $_instance->getRenderedChildComponentTagName('o25R2Df');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('o25R2Df');
} else {
    $response = \Livewire\Livewire::mount('grandtotal', []);
    $html = $response->html();
    $_instance->logRenderedChild('o25R2Df', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    
        </table>
        </form>
    
        </div>

        <div class="col">
            

        <table class="table-auto m-10  w-25">
        <tr class="font-bold text-center">
        
        
        <td class="border-2 border-black">Barcode</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Quantity</td>
        
        <td class="border-2 border-black">Price</td>
        
        
        <td class="border-2 border-black">Discount</td>
        <td class="border-2 border-black">Expire Date</td>
      
       
        
        </tr>
        <?php $__currentLoopData = $inventorylist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo csrf_field(); ?>
            <?php $__currentLoopData = $inventorylinelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inventoryline): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php echo csrf_field(); ?>
                    <?php if($inventory['id']==$inventoryline['inventory_id']): ?>
        <tr class="border-2 border-black text-center">
        
        
        <td class="border-2 border-black"><?php echo e($inventory['item_barcode']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventory['item_name']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_quantity']); ?></td>
        
        <td class="border-2 border-black"><?php echo e($inventory['item_price']); ?></td>
        
        
        <td class="border-2 border-black"><?php echo e($inventory['item_discount']); ?></td>
        <td class="border-2 border-black"><?php echo e($inventoryline['inventoryline_expirydate']); ?></td>
        <td class="border-2 border-black">
           
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('addtocart', ['itemId' => $inventory['item_barcode']])->html();
} elseif ($_instance->childHasBeenRendered('hUJ7xo9')) {
    $componentId = $_instance->getRenderedChildComponentId('hUJ7xo9');
    $componentTag = $_instance->getRenderedChildComponentTagName('hUJ7xo9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('hUJ7xo9');
} else {
    $response = \Livewire\Livewire::mount('addtocart', ['itemId' => $inventory['item_barcode']]);
    $html = $response->html();
    $_instance->logRenderedChild('hUJ7xo9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
            
        
    
        </td>
        
            </tr>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </div>
        <div class="col">
        </div>
    </div>
</div>
<?php else: ?>
<p> The inventory is empty. No sales can be made. </p>
<?php endif; ?>

    
    
</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/salesorder.blade.php ENDPATH**/ ?>
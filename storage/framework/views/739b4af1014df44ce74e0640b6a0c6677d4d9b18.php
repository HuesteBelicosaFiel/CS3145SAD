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
<h1 class="text-5xl font-bold align-center">Supplier</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<a href="/createsupplier" class="absolute top-1/5 right-10 bg-zinc-600 rounded-lg text-white py-2 px-5">New Supplier</a>

<br/>
<br/>

    <div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">ID</td>
        <td class="border-2 border-black">Supplier Name</td>
        <td class="border-2 border-black">Contact Person</td>
        <td class="border-2 border-black">Address</td>
        <td class="border-2 border-black">Phone Number</td>
        <td class="border-2 border-black">Email</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    <?php if($supplierlist): ?>
    <?php $__currentLoopData = $supplierlist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
    <tr class="border-2 border-black text-center">
        
        <td class="border-2 border-black"><?php echo e($supplier['id']); ?></td>
        <td class="border-2 border-black"><?php echo e($supplier['sup_name']); ?></td>
        <td class="border-2 border-black"><?php echo e($supplier['sup_contactPerson']); ?></td>
        <td class="border-2 border-black"><?php echo e($supplier['sup_address']); ?></td>
        <td class="border-2 border-black"><?php echo e($supplier['sup_phoneNum']); ?></td>
        <td class="border-2 border-black"><?php echo e($supplier['sup_email']); ?></td>
        <td class="border-2 border-black"><a href="/purchaseorder/<?php echo e($supplier->id); ?>" class="text-blue-700 hover:text-stone-700 py-1 px-3"><i class="fa-solid fas fa-shipping-fast"></i>Purchase Order</a></td>
        <td class="border-2 border-black"><a class="hover:text-laravel" href="/editsupplier/<?php echo e($supplier->id); ?>">
            <i class="fa-solid fa-pencil"></i>Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/supplier/<?php echo e($supplier->id); ?>">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i>Delete</button>
            
                </form>

        </td>
    </tr>
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php else: ?>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
    <?php endif; ?>
    </table>

    <?php if($supplierlist): ?>
    <div class="mt-1 p-4">
        <?php echo e($supplierlist->links()); ?>

    </div>
    <?php endif; ?>

    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/supplier.blade.php ENDPATH**/ ?>
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
<h1 class="text-lg font-bold align-center">Employee Management</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="/employee" class="text-black ml-4"> Back </a>

<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-8">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">ID#</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Time Logged</td>
  
    </tr>
    <?php if($employee): ?>
    <tr class="border-2 border-black text-center">
        <td class="border-2 border-black"><?php echo e($employee['id']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_fullName']); ?></td>
    </tr>
    
    <?php $__currentLoopData = $attendances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attendance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
    <tr class="border-2 border-black text-center">
        <td class="border-0 border-black"></td>
        <td class="border-0 border-black"></td>
        <td class="border-2 border-black"><?php echo e($attendance['created_at']); ?></td>



    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    
    <div class="mt-1 p-4">
        <?php echo e($attendances->links()); ?>

    </div>
    <?php endif; ?>


</section>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/employeeattendancelist.blade.php ENDPATH**/ ?>
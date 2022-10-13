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
<h1 class="text-5xl font-bold align-center">Employee Management</h1>
    </section>
<?php echo $__env->make('partials._search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<a href="/createemployee" class="absolute top-1/5 left-10 bg-zinc-600 rounded-lg text-white py-2 px-5">Add employee</a>


<br/>


    <div class="flex flex-col justify-center align-center text-center px-1">
    <table class="table-auto m-8">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Id#</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Phone #</td>
        <td class="border-2 border-black">Address</td>
        <td class="border-2 border-black">Email</td>
        <td class="border-2 border-black">Gender</td>
        <td class="border-2 border-black">Birthdate</td>
        <td class="border-2 border-black">Role</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    <?php if($employeelist): ?>
    <?php $__currentLoopData = $employeelist; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo csrf_field(); ?>
    <tr class="border-2 border-black text-center">
        <td class="border-2 border-black"><?php echo e($employee['id']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_fullName']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_phoneNum']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_address']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_email']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_gender']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_birthdate']); ?></td>
        <td class="border-2 border-black"><?php echo e($employee['emp_role']); ?></td>
        <td class="border-2 border-black"><a class="hover:text-laravel" href="/editemployee/<?php echo e($employee->id); ?>">
            <i class="fa-solid fa-pencil"></i> Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/employee/<?php echo e($employee->id); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
    </table>
    </div>
    <?php if($employeelist): ?>
    <div class="mt-1 p-4">
        <?php echo e($employeelist->links()); ?>

    </div>
    <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/employee.blade.php ENDPATH**/ ?>
<div>
    
    <button type="button" wire:click="clickEvt" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><?php echo e($msg); ?></button>
    <button type="button" wire:click="clickEvt2" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"><?php echo e($msg2); ?></button>
    
    <input type="hidden" name="cardmode" value="<?php echo e($cardmode); ?>" class="text-center">
    <p><?php echo e($cardmode); ?></p>
</div>
<?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/livewire/seniorbutton.blade.php ENDPATH**/ ?>
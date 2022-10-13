<tr class="border-2 border-black text-center">
    <?php if($show): ?>
    
        <input type="hidden" name="oldquantity[]" value="<?php echo e($oldquantity); ?>" class="text-center" readonly>
        <input type="hidden" name="barcode[]" value="<?php echo e($barcode); ?>" class="text-center" readonly>
        <input type="hidden" name="idd[]" value="<?php echo e($idd); ?>" class="text-center" readonly>
        <input type="hidden" name="discount[]" value="<?php echo e($discount); ?>" class="text-center" readonly>
        <input type="hidden" name="price[]" value="<?php echo e($price); ?>" class="text-center" readonly>
        <td class="border-2 border-black"><?php echo e($barcode); ?></td>
        <td class="border-2 border-black"><?php echo e($name); ?></td>
        <td class="border-2 border-black"> <input wire:model="quantity" wire:change="quantchange" type="text" name="quantity[]"></td>
        <td class="border-2 border-black"><?php echo e($discount); ?></td>
        <td class="border-2 border-black"><?php echo e($price); ?></td>
       

        <td class="border-2 border-black"><button class="text-red-500">  
            <button type="button" wire:click="clickEvt" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"><?php echo e($msg); ?></button>
        </td>
        
    
  <?php endif; ?>  
</tr><?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/livewire/addtocarttable.blade.php ENDPATH**/ ?>
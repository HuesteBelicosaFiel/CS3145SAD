<tr class="border-2 border-black text-center">
    @if ($show)
    
        <input type="hidden" name="oldquantity[]" value="{{$oldquantity}}" class="text-center" readonly>
        <input type="hidden" name="barcode[]" value="{{$barcode}}" class="text-center" readonly>
        <input type="hidden" name="idd[]" value="{{$idd}}" class="text-center" readonly>
        <input type="hidden" name="discount[]" value="{{$discount}}" class="text-center" readonly>
        <input type="hidden" name="price[]" value="{{$price}}" class="text-center" readonly>
        <td class="border-2 border-black">{{$barcode}}</td>
        <td class="border-2 border-black">{{$name}}</td>
        <td class="border-2 border-black"> <input wire:model="quantity" wire:change="quantchange" type="text" name="quantity[]"></td>
        <td class="border-2 border-black">{{$discount}}</td>
        <td class="border-2 border-black">{{$price}}</td>
       

        <td class="border-2 border-black"><button class="text-red-500">  
            <button type="button" wire:click="clickEvt" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">{{$msg}}</button>
        </td>
        
    
  @endif  
</tr>
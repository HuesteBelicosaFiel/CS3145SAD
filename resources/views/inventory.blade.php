<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-5xl font-bold align-center">Inventory</h1>
    </section>
@include('partials._search')
<a href="/create" class="absolute top-1/5 right-10 bg-zinc-600 rounded-lg text-white py-2 px-5">Stock in</a>

<br/>
<br/>
<div style="height:500px;overflow:auto;">
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Item ID</td>
        <td class="border-2 border-black">Item Barcode</td>
        <td class="border-2 border-black">Item Name</td>
        <td class="border-2 border-black">Item Size</td>
        <td class="border-2 border-black">Item Description</td>
        <td class="border-2 border-black">Item Selling Price</td>
        <td class="border-2 border-black">Item Procurement Cost</td>
        <td class="border-2 border-black">Item Discount</td>
        <td class="border-2 border-black">Item Quantity</td>
        <td class="border-2 border-black">Item Restock Value</td>
        <td class="border-2 border-black">Item Out of Stock Value</td>
        <td class="border-2 border-black">Expiry Date</td>
        @if($inventorylist && $inventorylinelist)
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        @endif
    </tr>
    @if($inventorylist && $inventorylinelist)
        @foreach($inventorylist as $inventory) 
                @foreach($inventorylinelist as $inventoryline) 
                    @csrf
                    @if($inventory['id']==$inventoryline['inventory_id'])
                        <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black">{{$inventory['id']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_size']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_description']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_procprice']}}</td>
                        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
                        @if((int)$inventoryline['inventoryline_restockvalue'] >= (int)$inventoryline['inventoryline_quantity'])
                        <td class="border-2 border-black"><p class="text-red-500 text-opacity-75" > {{$inventoryline['inventoryline_quantity']}}</p></td>
                        @else
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_quantity']}}</td>
                        @endif
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_restockvalue']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_outofstock']}}</td>
                        <td class="border-2 border-black">{{$inventoryline['inventoryline_expirydate']}}</td>
                        
                        <td class="border-2 border-black">
                            <a class="hover:text-laravel" href="/edit/{{$inventory->id}}">
                            <i class="fa-solid fa-pencil"></i>Edit
                            </a>
                        </td>
                        
                        <td class="border-2 border-black"><button class="text-red-500">
                        <form method="Post" action="/inventory/{{$inventory->id}}">
                             <input type="hidden" name="inventoryline" value="{{$inventory->id}}" class="text-center" readonly>
                            <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i>Delete</button>
                        </form>
                   
                    @else
                        
                    @endif
                    @csrf
                @endforeach
                @method('DELETE')
                
            </td>
        </tr>
        
        @endforeach
        
    @else
            <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td><td class="border-2 border-black">INVENTORY IS EMPTY</td>
    @endif
    </table>

    <br/>

    </div>
</div>

</x-layout>
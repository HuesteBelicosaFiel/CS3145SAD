
<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-5xl font-bold align-center">Cashier</h1>
    </section>
@include('partials._search')
@livewireScripts

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
@if($inventorylist && $inventorylinelist)
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
     <form method="POST" action="/salesorder" enctype="multipart/form-data">
        <input type="hidden" class="border border-gray-200 rounded p-2 w-full" name="date_today" value="{{Carbon\Carbon::now()->toDateString();}}" readonly/>
        @csrf
        @method('PUT')
    <livewire:seniorbutton/>

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

        @error('item_price')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror

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
    
        @foreach ($inventorylist as $inventory)
        @csrf
        @foreach($inventorylinelist as $inventoryline) 
        @csrf
        @if($inventory['id']==$inventoryline['inventory_id'])
        <livewire:addtocarttable :barcode="$inventory['item_barcode']" :oldquantity="$inventoryline['inventoryline_quantity']" :name="$inventory['item_name']" :price="$inventory['item_price']" :discount="$inventory['item_discount']" :idd="$inventory['id']" :wire:key="$inventory['item_barcode']"/>
        @endif
        @endforeach
        @endforeach
        <livewire:ordertotal/>
        <livewire:taxtotal/>
        <livewire:seniortotal/>
        <livewire:grandtotal/>
    
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
        @foreach ($inventorylist as $inventory)
        @csrf
            @foreach($inventorylinelist as $inventoryline) 
                    @csrf
                    @if($inventory['id']==$inventoryline['inventory_id'])
        <tr class="border-2 border-black text-center">
        
        
        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
        <td class="border-2 border-black">{{$inventoryline['inventoryline_quantity']}}</td>
        
        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
        
        
        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
        <td class="border-2 border-black">{{$inventoryline['inventoryline_expirydate']}}</td>
        <td class="border-2 border-black">
           
            <livewire:addtocart :itemId="$inventory['item_barcode']" />
            
        
    
        </td>
        
            </tr>
            @endif
            @endforeach
       @endforeach
        </table>
        </div>
        <div class="col">
        </div>
    </div>
</div>
@else
<p> The inventory is empty. No sales can be made. </p>
@endif

    
    
</section>
</x-layout>
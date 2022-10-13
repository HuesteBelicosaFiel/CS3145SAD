
<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Cashier</h1>
    </section>
@include('partials._search')
@livewireScripts

<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4">
     <form method="POST" action="/salesorder" enctype="multipart/form-data">
        
        @csrf
        @method('PUT')
    <livewire:seniorbutton/>
     <table class="table-auto m-10">
        <tr class="font-bold text-center">
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">item_price</td>
        
    </tr>
    
    @foreach ($inventorylist as $inventory)
    @csrf
    <livewire:addtocarttable :barcode="$inventory['item_barcode']" :oldquantity="$inventory['item_quantity']" :name="$inventory['item_name']" :price="$inventory['item_price']" :discount="$inventory['item_discount']" :wire:key="$inventory['item_barcode']"/>
    @endforeach
    <livewire:ordertotal/>
    <livewire:taxtotal/>
    <livewire:seniortotal/>
    <livewire:grandtotal/>

    <tr>
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
    </tr>
    
    </table>
    </form>
    
    
    
    
    
    <table class="table-auto m-10  w-25">
        <tr class="font-bold text-center">
        
        
        <td class="border-2 border-black">item_barcode</td>
        <td class="border-2 border-black">item_name</td>
        <td class="border-2 border-black">item_quantity</td>
        
        <td class="border-2 border-black">item_price</td>
        
        
        <td class="border-2 border-black">item_discount</td>
        <td class="border-2 border-black">expire_date</td>
      
       
        
    </tr>
    @foreach ($inventorylist as $inventory)
    @csrf
    <tr class="border-2 border-black text-center">
        
        
        <td class="border-2 border-black">{{$inventory['item_barcode']}}</td>
        <td class="border-2 border-black">{{$inventory['item_name']}}</td>
        <td class="border-2 border-black">{{$inventory['item_quantity']}}</td>
        
        <td class="border-2 border-black">{{$inventory['item_price']}}</td>
        
        
        <td class="border-2 border-black">{{$inventory['item_discount']}}</td>
        <td class="border-2 border-black">{{$inventory['expire_date']}}</td>
        <td class="border-2 border-black">
           
            <livewire:addtocart :itemId="$inventory['item_barcode']" />
            
        
    
        </td>
        
    </tr>
    @endforeach
    
    </table>
    
  
    
    
</section>
</x-layout>
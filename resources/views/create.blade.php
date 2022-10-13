<x-layout>

    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create an Item
        </h2>
        <p class="mb-4">Add a new item into the inventory</p>
    </header>
    
    <form method="POST"action="/inventory" enctype="multipart/form-data">
        
        @csrf
        
        <div class="mb-6">
            <label
                for="item_barcode"
                class="inline-block text-lg mb-2"
                >Item Barcode</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_barcode" value="{{old('item_barcode')}}" 
                placeholder="Example: 1234567891111"/>
                
    
            @error('item_barcode')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <label for="item_name" class="inline-block text-lg mb-2"
                >Item Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_name"
                placeholder="Example: Apple"
                value="{{old('item_name')}}"
            />
    
            @error('item_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <label
                for="inventoryline_quantity"
                class="inline-block text-lg mb-2"
                >Item Quantity</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_quantity"
                placeholder="Example: 1,2,3,4,5"
                value="{{old('inventoryline_quantity')}}"
            />
    
            @error('inventoryline_quantity')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="item_size"
                class="inline-block text-lg mb-2"
                >Item Size</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_size"
                placeholder="Example: Small,Medium,Large"
                value="{{old('item_size')}}"
            />
    
            @error('item_size')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="item_price"
                class="inline-block text-lg mb-2"
                >Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_price"
                placeholder="Example: 21.22,22.36"
                value="{{old('item_price')}}"
            />
    
            @error('item_price')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="item_procprice"
                class="inline-block text-lg mb-2"
                >Procurement Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_procprice"
                placeholder="Example: 21.22,22.36"
                value="{{old('item_procprice')}}"
            />
    
            @error('item_procprice')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        
    
        <div class="mb-6">
            <label
                for="item_description"
                class="inline-block text-lg mb-2"
            >
                Item Description
            </label>
            <textarea
                class="border border-gray-200 rounded p-2 w-full"
                name="item_description"
                rows="10"
                placeholder="Example: The apple is color red."
                
            >{{old('item_description')}}</textarea>
    
            @error('item_description')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>

        <div class="mb-6">
            <label
                for="item_discount"
                class="inline-block text-lg mb-2"
                >Item Discount</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="item_discount"
                placeholder="Example: 10.51,7.97"
                value="{{old('item_discount')}}"
            />
    
            @error('item_discount')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        
        <div class="mb-6">
            <label
                for="inventoryline_outofstock"
                class="inline-block text-lg mb-2"
                >Out of Stock Value</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_outofstock"
                placeholder="Example: 1,2,3,4,5"
                value="{{old('inventoryline_outofstock')}}"
            />
    
            @error('inventoryline_outofstock')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        
        <div class="mb-6">
            <label
                for="inventoryline_restockvalue"
                class="inline-block text-lg mb-2"
                >Restock Value</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_restockvalue"
                placeholder="Example: 1,2,3,4,5"
                value="{{old('inventoryline_restockvalue')}}"
            />
    
            @error('inventoryline_restockvalue')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        

        <div class="mb-6">
            <label
                for="inventoryline_expirydate"
                class="inline-block text-lg mb-2"
                >Expire Date</label
            >
            <input
                type="date"
                class="border border-gray-200 rounded p-2 w-full"
                name="inventoryline_expirydate"
                placeholder="Example: Remote, Boston MA, etc"
                value="{{old('inventoryline_expirydate')}}"
            />
    
            @error('expire_date')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <button
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                Create Item
            </button>
    
            <a href="/inventory" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
    </x-layout>
<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Purchase Order
        </h2>
        <p class="mb-4">Purchase Order</p>
    </header>
    
    <form method="POST" action="/editprocurement/{{$purchase->id}}" enctype="multipart/form-data">
       @csrf
       @method('PUT')
        
        <div class="mb-6">
            <label for="sup_name" class="inline-block text-lg mb-2">Supplier Name</label>
     
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="sup_name" value="{{$supplier}}"  readonly/>
            @error('sup_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        
        <div class="mb-6">
            <label for="emp_fullName" class="inline-block text-lg mb-2">Employee Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_fullName" value="{{$employee}}"  readonly/>
            @error('sup_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="date_today" class="inline-block text-lg mb-2">Date Ordered</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="date_today" value="{{$purchase->date_today}}" readonly/>
            @error('date_today')
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
                
                value="{{$purchase->item_name}}" readonly
            />
    
            @error('item_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
    
        <div class="mb-6">
            <label
                for="purchase_quantity"
                class="inline-block text-lg mb-2"
                >Item Quantity</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="purchase_quantity"
                
                value="{{$purchase->purchase_quantity}}" readonly
            />
    
            @error('purchase_quantity')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        
        <div class="mb-6">
            <label
                for="purchase_cost"
                class="inline-block text-lg mb-2"
                >Procurement Price</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="purchase_cost"
                placeholder="Example: 21.22,22.36"
                value="{{$purchase->purchase_cost}}" readonly
            />
    
            @error('purchase_cost')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        
        <div class="mb-6">
            <label for="purchase_status" class="inline-block text-lg mb-2"
                >Item Name</label
            >
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="purchase_status"
                placeholder="Example: Received, Canceled"
                value="{{$purchase->purchase_status}}"
            />
    
            @error('item_name')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
    
        </div>
        
    
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Submit Order
            </button>

            <a href="/procurement" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>
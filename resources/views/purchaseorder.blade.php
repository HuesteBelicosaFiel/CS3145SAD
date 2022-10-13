<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Procurement</h1>
    </section>
@include('partials._search')
<a href="/supplier" class="absolute top-1/5 right-10 bg-black text-white py-2 px-5">Stock in</a>

<br/>
<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Order ID</td>
        <td class="border-2 border-black">Employee</td>
        <td class="border-2 border-black">Supplier</td>
        <td class="border-2 border-black">Item</td>
        <td class="border-2 border-black">Quantity</td>
        <td class="border-2 border-black">Cost</td>
        <td class="border-2 border-black">Order Date</td>
        <td class="border-2 border-black">Status</td>
        @if($purchaselist)
        <td class="border-2 border-black"></td>
    
        @endif
    </tr>
    @if($purchaselist)
        @foreach($purchaselist as $purchase) 
                
                    @csrf
                    
                        <tr class="border-2 border-black text-center">
                        <td class="border-2 border-black">{{$purchase['id']}}</td>
                        <td class="border-2 border-black">{{$purchase['emp_id']}}</td>
                        <td class="border-2 border-black">{{$purchase['sup_id']}}</td>
                        <td class="border-2 border-black">{{$purchase['item_name']}}</td>
                        <td class="border-2 border-black">{{$purchase['purchase_quantity']}}</td>
                        <td class="border-2 border-black">{{$purchase['purchase_cost']}}</td>
                        <td class="border-2 border-black">{{$purchase['date_today']}}</td>
                        <td class="border-2 border-black">{{$purchase['purchase_status']}}</td>
                        
                        <td class="border-2 border-black">
                            <a href="/editprocurement/{{$purchase->id}}">
                            <i class="fa-solid fa-pencil"></i>Change status
                            </a>
                        </td>
                        
                        
                   
                    
                        
                  
                    @csrf
                
                
                
            </td>
        </tr>
        
        @endforeach
        
        
    @else
            <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td> 
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
            <td class="border-2 border-black">PROCUREMENT IS EMPTY</td><td class="border-2 border-black">PROCUREMENT IS EMPTY</td>
    @endif
    </table>
    

</section>
</x-layout>
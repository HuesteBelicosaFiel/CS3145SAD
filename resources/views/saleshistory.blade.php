
<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Sales</h1>
    </section>
@include('partials._search')
@livewireScripts


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    <div style="display: flex; justify-content: space-between;">
      
    <div class="col">
       <table class="table-auto overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">ID</td>
            <td class="border-2 border-black">Order Total</td>
            <td class="border-2 border-black">Order Discount</td>
            <td class="border-2 border-black">Senior Discounted</td>
            <td class="border-2 border-black">Date</td>    
            <td class="border-2 border-black">Cash Paid</td>
            <td class="border-2 border-black">Card Type</td>
            <td class="border-2 border-black">Card Number</td>
            <td class="border-2 border-black">Amount Paid</td>
        </tr>
    @foreach ($salelist as $sales)
    @csrf
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">{{$sales['id']}}</td>
            <td class="border-2 border-black">{{$sales['order_total']}}</td>
            <td class="border-2 border-black">{{$sales['order_discount']}}</td>
            <td class="border-2 border-black">{{$sales['order_senior_discount']}}</td>
            <td class="border-2 border-black">{{$sales['created_at']}}</td>
            
            @foreach ($cashlist as $cash)
            @if($sales->id == $cash->order_id)
            @csrf
            <td class="border-2 border-black">{{$cash['cashpayment_amount']}}</td>
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black"></td>
            
            @endif
            @endforeach
            
            
            @foreach ($cardlist as $card)
            @if($sales->id == $card->order_id)
            @csrf
            <td class="border-2 border-black"></td>
            <td class="border-2 border-black">{{$card['card_number']}}</td>
            <td class="border-2 border-black">{{$card['card_type']}}</td>
            <td class="border-2 border-black">{{$card['cardpayment_amount']}}</td>
     
            @endif
            @endforeach
            <td class="border-2 border-black"><a class="hover:text-laravel" href="/contents/{{$sales->id}}">
                    <i class="fa-solid fa-pencil"></i>Show Contents
                            </a></td>
            </td>    
        </tr>
    @endforeach
    </table>
    </div>
    


    <div class="col">
        Order Contents
       <table class="table-auto overflow-y-scroll h-32">
        <tr class="font-bold text-center">
            <td class="border-2 border-black">Order ID</td>
            <td class="border-2 border-black">Item Name</td>
            <td class="border-2 border-black">Quantity</td>
            <td class="border-2 border-black">Price</td>
            <td class="border-2 border-black">Discount</td>    

        </tr>
    @if($ordercontentlist)
    @foreach ($ordercontentlist as $ordercontents)
    @csrf
        
        <tr class="border-2 border-black text-center">
            <td class="border-2 border-black">{{$ordercontents['order_id']}}</td>
            <td class="border-2 border-black">{{$ordercontents['item_name']}}</td>
            <td class="border-2 border-black">{{$ordercontents['inventoryline_quantity']}}</td>
            <td class="border-2 border-black">{{$ordercontents['item_price']}}</td>
            <td class="border-2 border-black">{{$ordercontents['item_discount']}}</td>
            
           
            
   
            
            </td>    
        </tr>
    @endforeach
    @endif
    </table>
    </div>
    </div>
</div>


    
</x-layout>
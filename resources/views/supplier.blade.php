<x-layout>

    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-5xl font-bold align-center">Supplier</h1>
    </section>
@include('partials._search')
<a href="/createsupplier" class="absolute top-1/5 right-10 bg-zinc-600 rounded-lg text-white py-2 px-5">New Supplier</a>

<br/>
<br/>

    <div class="flex flex-col justify-center align-center text-center px-1 mx-4">
    
    <table class="table-auto m-0">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">ID</td>
        <td class="border-2 border-black">Supplier Name</td>
        <td class="border-2 border-black">Contact Person</td>
        <td class="border-2 border-black">Address</td>
        <td class="border-2 border-black">Phone Number</td>
        <td class="border-2 border-black">Email</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    @if($supplierlist)
    @foreach ($supplierlist as $supplier)
    @csrf
    <tr class="border-2 border-black text-center">
        
        <td class="border-2 border-black">{{$supplier['id']}}</td>
        <td class="border-2 border-black">{{$supplier['sup_name']}}</td>
        <td class="border-2 border-black">{{$supplier['sup_contactPerson']}}</td>
        <td class="border-2 border-black">{{$supplier['sup_address']}}</td>
        <td class="border-2 border-black">{{$supplier['sup_phoneNum']}}</td>
        <td class="border-2 border-black">{{$supplier['sup_email']}}</td>
        <td class="border-2 border-black"><a href="/purchaseorder/{{$supplier->id}}" class="text-blue-700 hover:text-stone-700 py-1 px-3"><i class="fa-solid fas fa-shipping-fast"></i>Purchase Order</a></td>
        <td class="border-2 border-black"><a class="hover:text-laravel" href="/editsupplier/{{$supplier->id}}">
            <i class="fa-solid fa-pencil"></i>Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/supplier/{{$supplier->id}}">
                @csrf
                @method('DELETE')
                <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i>Delete</button>
            
                </form>

        </td>
    </tr>
    
    @endforeach

    @else
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
        <td class="border-2 border-black">NO SUPPLIERS LISTED</td>
    @endif
    </table>

    @if($supplierlist)
    <div class="mt-1 p-4">
        {{$supplierlist->links()}}
    </div>
    @endif

    </div>
</x-layout>
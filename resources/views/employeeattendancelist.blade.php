<x-layout>
    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-lg font-bold align-center">Employee Management</h1>
    </section>
@include('partials._search')

<a href="/employee" class="text-black ml-4"> Back </a>

<br/>

<section class="flex flex-col justify-center align-center text-center space-y-4 mb-4 ">
    <table class="table-auto m-8">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">ID#</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Time Logged</td>
  
    </tr>
    @if($employee)
    <tr class="border-2 border-black text-center">
        <td class="border-2 border-black">{{$employee['id']}}</td>
        <td class="border-2 border-black">{{$employee['emp_fullName']}}</td>
    </tr>
    
    @foreach ($attendances as $attendance)
    @csrf
    <tr class="border-2 border-black text-center">
        <td class="border-0 border-black"></td>
        <td class="border-0 border-black"></td>
        <td class="border-2 border-black">{{$attendance['created_at']}}</td>



    </tr>
    @endforeach
    </table>
    
    <div class="mt-1 p-4">
        {{$attendances->links()}}
    </div>
    @endif


</section>
</x-layout>
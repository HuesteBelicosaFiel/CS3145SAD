<x-layout>
    <section class="relative h-20 flex flex-col justify-center align-center text-center space-y-4 mb-4 text-xl">
<h1 class="text-5xl font-bold align-center">Employee Management</h1>
    </section>
@include('partials._search')

<a href="/createemployee" class="absolute top-1/5 left-10 bg-zinc-600 rounded-lg text-white py-2 px-5">Add employee</a>


<br/>


    <div class="flex flex-col justify-center align-center text-center px-1">
    <table class="table-auto m-8">
        <tr class="font-bold text-center">
        
        <td class="border-2 border-black">Id#</td>
        <td class="border-2 border-black">Name</td>
        <td class="border-2 border-black">Phone #</td>
        <td class="border-2 border-black">Address</td>
        <td class="border-2 border-black">Email</td>
        <td class="border-2 border-black">Gender</td>
        <td class="border-2 border-black">Birthdate</td>
        <td class="border-2 border-black">Role</td>
        <td class="border-2 border-black"></td>
        <td class="border-2 border-black"></td>
        
    </tr>
    @if($employeelist)
    @foreach ($employeelist as $employee)
    @csrf
    <tr class="border-2 border-black text-center">
        <td class="border-2 border-black">{{$employee['id']}}</td>
        <td class="border-2 border-black">{{$employee['emp_fullName']}}</td>
        <td class="border-2 border-black">{{$employee['emp_phoneNum']}}</td>
        <td class="border-2 border-black">{{$employee['emp_address']}}</td>
        <td class="border-2 border-black">{{$employee['emp_email']}}</td>
        <td class="border-2 border-black">{{$employee['emp_gender']}}</td>
        <td class="border-2 border-black">{{$employee['emp_birthdate']}}</td>
        <td class="border-2 border-black">{{$employee['emp_role']}}</td>
        <td class="border-2 border-black"><a class="hover:text-laravel" href="/editemployee/{{$employee->id}}">
            <i class="fa-solid fa-pencil"></i> Edit
        </a></td>
        <td class="border-2 border-black"><button class="text-red-500">
            <form method="Post" action="/employee/{{$employee->id}}">
            @csrf
            @method('DELETE')
            <button class="text-red-500 hover:text-black"><i class="fa-solid fa-trash"></i> Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    @endif
    </table>
    </div>
    @if($employeelist)
    <div class="mt-1 p-4">
        {{$employeelist->links()}}
    </div>
    @endif
</x-layout>
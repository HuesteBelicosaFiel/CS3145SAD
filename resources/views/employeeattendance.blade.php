<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Employee Attendance
        </h2>
        <p class="mb-4">Attendance Record</p>
    </header>
    
    <form method="POST" action="/attendancecreator" enctype="multipart/form-data">
        @csrf
        <input type="hidden" class="border border-gray-200 rounded p-2 w-full"
                name="emp_id" value="{{$employee->id}}"/>
        <input type="hidden" class="border border-gray-200 rounded p-2 w-full"
                name="date_today" value="{{Carbon\Carbon::now()->toDateString();}}" readonly/>
        
        <div class="mb-6">
            <label for="emp_fullName" class="inline-block text-lg mb-2">Employee Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_fullName" value="{{$employee->emp_fullName}}"  readonly/>
            @error('emp_fullName')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="emp_phoneNum" class="inline-block text-lg mb-2">Date Today</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_phoneNum" value="{{Carbon\Carbon::now()->toDateTimeString();}}" readonly/>
            @error('emp_phoneNum')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Submit Time In/Out
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>
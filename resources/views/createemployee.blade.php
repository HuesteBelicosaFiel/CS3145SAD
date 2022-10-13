<x-layout>
    <x-card class="p-10 max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            Create Employee
        </h2>
        <p class="mb-4">Add a new employee</p>
    </header>
    
    <form method="POST" action="/employee" enctype="multipart/form-data">
        @csrf
        <div class="mb-6">
            <label for="emp_fullName" class="inline-block text-lg mb-2">Name</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_fullName" value="{{old('emp_fullName')}}" placeholder="John Doe"/>
    
            @error('emp_fullName')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="emp_phoneNum" class="inline-block text-lg mb-2">Phone Number</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_phoneNum" placeholder="09126459067" value="{{old('emp_phoneNum')}}"/>
    
            @error('emp_phoneNum')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="emp_address" class="inline-block text-lg mb-2">Address</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_address" value="{{old('emp_address')}}" placeholder="Davao City"/>
    
            @error('emp_address')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <label for="emp_email" class="inline-block text-lg mb-2">Email</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_email" value="{{old('emp_email')}}" placeholder="test@gmail.com"/>
    
            @error('emp_email')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
         <div class="mb-6">
            <label for="password" class="inline-block text-lg mb-2">Password</label>
            <input type="password" class="border border-gray-200 rounded p-2 w-full"
                name="password" value=""/>
    
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
        
        <div class="mb-6">
            <label for="password-confirm" class="inline-block text-lg mb-2">Confirm Password</label>
            <input type="password-confirm" class="border border-gray-200 rounded p-2 w-full"
                name="password_confirmation"  required autocomplete="new-password"/>
    
            @error('password')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="emp_gender" class="inline-block text-lg mb-2">Gender</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_gender" value="{{old('emp_gender')}}" placeholder="Male"/>
    
            @error('emp_gender')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="emp_bithdate" class="inline-block text-lg mb-2">Birthdate</label>
            <input type="date" class="border border-gray-200 rounded p-2 w-full"
                name="emp_birthdate" value="{{old('emp_birthdate')}}" placeholder="Male"/>
    
            @error('emp_birthdate')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label for="emp_role" class="inline-block text-lg mb-2">Role</label>
            <input type="text" class="border border-gray-200 rounded p-2 w-full"
                name="emp_role" value="{{old('emp_role')}}" placeholder="Cashier"/>
    
            @error('emp_role')
            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
            @enderror
        </div>
    
        <div class="mb-6">
            <button class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
                Create Employee
            </button>
    
            <a href="/employee" class="text-black ml-4"> Back </a>
        </div>
    </form>
</x-card>
</x-layout>
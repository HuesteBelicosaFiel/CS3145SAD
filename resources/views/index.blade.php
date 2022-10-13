<x-layout>
    @include('partials._hero')
    @auth
    <div class="container">

        <br/>

           <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-6">
                    <div class="col-lg-2">
                    <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/salesorder" class="hover:text-laravel py-2 px-5 border-8 border-black">
                                &nbsp Cashier &nbsp
                            </a>
                        
                    </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/saleshistory" class="hover:text-laravel border-8 border-black">
                                &nbsp &nbsp &nbsp Sales &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/inventory" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                 Inventory
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/procurement" class="hover:text-laravel border-8 border-black">
                                &nbsp &nbsp &nbsp STOCK &nbsp &nbsp &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/supplier" class="hover:text-laravel border-8 border-black pr-3 pl-3">
                                 &nbsp Supplier &nbsp 
                            </a>
                        </h1>
                    </div>
                </div>
            </div>

            <br/>

            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/employee" class="hover:text-laravel border-8 border-black">
                                &nbsp Employee &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
            <br/>
            <div class="col-lg-2">
                <div class="row flex flex-col justify-center align-center text-center mb-4">
                    <div class="col-lg-2 ">
                        <h1 class="text-5xl font-bold uppercase text-black">
                            <a href="/showattendancecreator/{{$id=Auth::id();}}" class="hover:text-laravel border-8 border-black">
                                &nbsp Attendance &nbsp
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
    </div>
    
    @endauth

</x-layout>

    
    
    
    
    
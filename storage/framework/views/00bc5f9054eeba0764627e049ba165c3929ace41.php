<section
            class="relative h-50 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            <div
                class="absolute top-0 left-0 w-full h-full opacity-10 bg-no-repeat bg-center"
                style="background-image: url('images/laravel-logo.png')"
            ></div>
            
            <div class="z-10">
                <h1 class="text-4xl font-bold uppercase text-white">
                    Uptown<span class="text-black">Corporate</span>Hotel
                </h1>
                
                <?php if(DB::table('users')->first()): ?>
                
                <?php else: ?>
                <div>
                    <a
                        href="register"
                        class="inline-block border-2 border-white text-white py-2 px-4 rounded-xl uppercase mt-2 hover:text-black hover:border-black"
                        >Register to manage the system</a
                    >
                </div>
                <?php endif; ?>
                
                
                <section
            class="relative h-50 bg-laravel flex flex-col justify-center align-center text-center space-y-4 mb-4"
        >
            </section>
            
                
            </div>
        </section>
<?php /**PATH C:\Users\jgram\Documents\GitHub\CS3145SAD\resources\views/partials/_hero.blade.php ENDPATH**/ ?>
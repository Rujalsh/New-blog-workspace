{{-- <x-layouts.layout>
    <section class="px-6 py-8">
        <x-panel>
        <main class="max-w-lg mx-auto mt-10">

            <h1 class="text-center font-bold text-xl">Log In</h1>

            
                <form method="POST" action="/login" class="mt-10">
                
                @csrf
                
                <x-form.input name="email" type="email" autocomplete="username" />
                
                <x-form.input name="password" type="password" autocomplete="new-password"/>    
                
                <x-form.button>Log In</x-form.button>


            </form>
        </main>
        </x-panel>
    </section>
</x-layouts.layout> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    @include('login-pages.partials.styles')
    <!-- Icon Fonts -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    
</head>
<body>

        <div class="back">
            <a href="/" >
                <i class="ri-arrow-left-line" ></i>
                <h1>
                    BACK TO HOME
                </h1>
            </a>
        </div>
        
        <div class="container" id="container">
            <div class="form-container sign-up-container">
                <form method="POST" action="/register" class="mt-10">
                    <h1>Create Account</h1>
                    @csrf
                    <x-form.input name="name" placeholder="" />
                    <x-form.input name="username" />
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password" />
                    <x-form.button>Register</x-form.button>
                </form>
            </div>
        <div class="form-container sign-in-container">
            <form method="POST" action="/login" >
                <h1 class="mb-5">Sign in</h1>
                
                @csrf
                
                <x-form.input name="email" type="email" autocomplete="username" />
                
                <x-form.input name="password" type="password" autocomplete="new-password"/>    
                
                <x-form.button>Log In</x-form.button>
                
                
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
</div>
    @include('login-pages.partials.scripts')
</body>
</html>

{{-- <input type="text" placeholder="Name" />
<input type="email" placeholder="Email" />
<input type="password" placeholder="Password" />
<button>Sign Up</button> --}}

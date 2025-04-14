<body class="flex items-center justify-center bg-gray-100 h-screen overflow-hidden">
    <div class="flex flex-col md:flex-row w-full h-full">

        <!-- Left Section (Image & Branding) -->
        <div class="w-full md:w-1/2 flex flex-col items-center justify-center p-6 md:p-10 text-center text-gray-900"
            style="background-image: url('{{ asset('images/bg.png') }}'); background-size: cover; background-position: center;">
            
            <h1 class="text-3xl md:text-4xl font-bold mb-4">HRIS</h1>
            <img src="{{ asset('images/logo.svg') }}" alt="Odecci Logo" class="mb-4">
            <img src="{{ asset('images/odecci.svg') }}" alt="Odecci Logo">
        </div>

        <!-- Right Section (Register Form) -->
        <div class="w-full md:w-1/2 flex flex-col justify-center items-center h-full p-6 sm:p-8 md:p-12 lg:p-16 bg-white">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-800">Register</h2>

            <form method="POST" action="{{ route('register') }}" class="w-full max-w-md space-y-4">
                @csrf

                <div>
                    <label class="block text-gray-700 font-semibold">Name</label>
                    <input id="name" type="text" name="name" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Email</label>
                    <input id="email" type="email" name="email" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Password</label>
                    <input id="password" type="password" name="password" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500 @error('password') border-red-500 @enderror" required autocomplete="new-password">
                    @error('password')
                        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
                    @enderror
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold">Confirm Password</label>
                    <input id="password-confirm" type="password" name="password_confirmation" class="w-full px-4 py-3 border rounded-lg bg-gray-100 focus:ring-2 focus:ring-blue-500" required autocomplete="new-password">
                </div>

                <button type="submit" class="w-full bg-[#102B3C] text-white py-3 md:py-4 rounded-[35px] hover:bg-[#0D2330] transition text-center block">
                    Register
                </button>

                <p class="text-center text-sm text-gray-600 mt-4">
                    Already have an account? 
                    <a href="{{ route('login') }}" class="text-[#102B3C] font-bold hover:underline">Log In</a>
                </p>
            </form>
        </div>
    </div>
</body>
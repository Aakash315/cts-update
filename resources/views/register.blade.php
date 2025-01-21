<x-guest-layout>
    <!-- Session Status -->
    @if (session('status'))
        <div class='font-medium text-sm text-green-600 mb-4'>
            {{ session('status') }}
        </div>
    @endif
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- Name -->
        <div>
            <label for="name" class="block font-medium text-sm text-gray-700">
                Name </label>
            <input id="name"
                   class="block mt-1 w-full border border-gray-300  p-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                   type="text" name="name" required autofocus autocomplete="name">
            @error('name')
            <ul class='mt-2 text-sm text-red-600 space-y-1'>
                <li>{{ $message }}</li>
            </ul>
            @enderror
        </div>
        <!-- Email Address -->
        <div>
            <label for="email" class="block font-medium text-sm text-gray-700">
                Email
            </label>
            <input id="email"
                   class="block mt-1 w-full border border-gray-300  p-2 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                   type="email" name="email" required autofocus autocomplete="username">
            @error('email')
            <ul class='mt-2 text-sm text-red-600 space-y-1'>
                <li>{{ $message }}</li>
            </ul>
            @enderror
        </div>
        <div class="mt-4">
            <button type="submit"
                    class='justify-center inline-flex items-center px-4 py-2 bg-gray-800  w-full border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150'>
                Register
            </button>
        </div>
    </form>
</x-guest-layout>
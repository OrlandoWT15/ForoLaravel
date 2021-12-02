<x-guest-layout>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div>
            <img class="hidden lg:block h-32 w-auto" src="{{asset('storage/icon/titulo.svg')}}" alt="Workflow">
            <img class="block lg:hidden h-16 w-auto" src="{{asset('storage/icon/titulo.svg')}}" alt="Workflow">
        </div>

        <div class="w-full sm:max-w-xl mt-6 px-12 py-8 bg-white shadow-md overflow-hidden sm:rounded-lg">
            
            <x-jet-validation-errors class="mb-4" />

            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif
            <div class="flex justify-start ml-12 ">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div>
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="mt-4">
                        <x-jet-label for="password" value="{{ __('Password') }}" />
                        <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                    </div>

                    <div class="block mt-4">
                        <label for="remember_me" class="flex items-center">
                            <x-jet-checkbox id="remember_me" name="remember" />
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif

                        <x-jet-button class="ml-4">
                            {{ __('Log in') }}
                        </x-jet-button>
                    </div>
                </form>
                <div class="px-2 ml-12">
                    <img class="hidden lg:block h-32 w-auto" src="{{asset('storage/icon/castor.svg')}}" alt="Workflow">
                    <img class="block lg:hidden h-16 w-auto" src="{{asset('storage/icon/castor_2.svg')}}" alt="Workflow">
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

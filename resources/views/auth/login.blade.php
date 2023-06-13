<x-guest-layout>
    <style>
        button{
          background-color: #0c0b09;
      font-weight: 600;
      font-size: 13px;
      letter-spacing: 0.5px;
      text-transform: uppercase;
      display: inline-block;
      padding: 12px 30px;
      border-radius: 50px;
      transition: 0.3s;
      line-height: 1;
      color: white;
      border: 2px solid #cda45e;
    }
    
    button:hover
     {
      background: #cda45e;
      color: #fff;
    }
    </style>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
            <center>
            <h2>
                Have an Account?
            </h2>
        </center>
        <!-- Email Address -->
        
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        

        <!-- Password -->
        
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        

        <!-- Remember Me -->
        
            <label for="remember_me"  class="checkbox"">
                <input id="remember_me" type="checkbox" class="checkbox-primary" name="remember">
                <span></span>{{ __('Remember me') }}
            </label>
        

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button >
                {{ __('LOG IN') }}
            </x-primary-button>
       
        
    </form>
</x-guest-layout>

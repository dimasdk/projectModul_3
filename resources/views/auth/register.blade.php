<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        

        <!-- Username -->
        <div >
            <x-input-label for="username" :value="__('Username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Fullname -->
        <div>
            <x-input-label for="fullname" :value="__('Fullname')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required autofocus autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>
            <!-- Password -->
            <div>
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
        
            <!-- Confirm Password -->
            <div>
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />   
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

        <!-- address -->
        <div class=mt-4>
            <x-input-label for="address" :value="__('Address')" />
            <x-text-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required autofocus autocomplete="address" />
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>
        
        <!-- birthdate -->
        <div class=mt-4>
            <x-input-label for="birthdate" :value="__('Birthdate')" />
            <x-text-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" required autofocus autocomplete="birthdate" />
            <x-input-error :messages="$errors->get('birthdate')" class="mt-2" />
        </div>
        
        <!-- phonenumber -->
        <div class=mt-4>
            <x-input-label for="phonenumber" :value="__('Phonenumber')" />
            <x-text-input id="phonenumber" class="block mt-1 w-full" type="number" name="phonenumber" :value="old('phonenumber')" required autofocus autocomplete="phonenumber" />
            <x-input-error :messages="$errors->get('phonenumber')" class="mt-2" />
        </div>
        
        <!-- religion -->
        <div class=mt-4>
            <x-input-label for="religion" :value="__('Religion')" />
            <Select id="religion" class="block mt-1 w-full" name="religion" :value="old('religion')" required autofocus autocomplete="religion">
                <option value="" selected></option>
                <option value="Islam">Islam</option>
                <option value="Buddha" >Buddha</option>
                <option value="Hindu">Hindu</option>
                <option value="Kristen" >Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Khonghucu">Khonghucu</option>
            </Select>
            <x-input-error :messages="$errors->get('religion')" class="mt-2" />
        </div>

        <!-- gender -->
        <div  class=mt-4>
            <x-input-label for="gender" :value="__('Gender')" />
            <Select id="gender" class="block mt-1 w-full" type="number" name="gender" :value="old('gender')" required autofocus autocomplete="gender" />
            <option value="" selected></option>
            <option value="0" Perempuan >Perempuan</option>
            <option value="1" Laki-Laki>Laki-Laki</option>
            </Select>
           <x-input-error :messages="$errors->get('gender')" class="mt-2" />
        </div>

        

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>

<x-guest-layout>
    
    <form method="POST" action="{{ route('register') }}" novalidate>
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

         <!-- Rol -->
         <div class="mt-4">
            <x-input-label for="rol" :value="__('Tipo de cuenta')" />
            <select id="rol" name="rol" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
             focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                <option value="">Selecciona un rol</option>
                <option value="1">Developer - Obtener empleo</option>
                <option value="2">Reclutador - Publicar empleos</option>
            </select>
        </div>

         <!-- País -->
         <div class="mt-4">
            <x-input-label for="country" :value="__('País')" />
            <select id="country" name="country" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600
             focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm w-full">
                <option value="">Selecciona un país</option>
                <option value="1">Argentina</option>
                <option value="2">Bolivia</option>
                <option value="3">Chile</option>
                <option value="4">Colombia</option>
                <option value="5">Costa Rica</option>
                <option value="6">Ecuador</option>
                <option value="7">México</option>
                <option value="8">Paraguay</option>
                <option value="9">Perú</option>
                <option value="10">Reública Dominicana</option>
                <option value="11">Uruguay</option>
                <option value="12">Venezuela</option>
            </select>
        </div>

         <!-- Email Address -->
         <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Repetir Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex justify-between mt-4">
            @if (Route::has('password.request'))
               <x-link :href="route('login')">Iniciar Sesión</x-link>
               <x-link :href="route('password.request')">Olvidaste tu password</x-link>
            @endif
        </div>
        <x-primary-button class="ml-4 w-full justify-center mt-4">
            {{ __('Crear Cuenta') }}
        </x-primary-button>
    </form>
</x-guest-layout>

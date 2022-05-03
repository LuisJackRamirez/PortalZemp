<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <div class="mb-4">
                {{ __('¿Olvidaste tu contraseña? No hay problema. Ingresa tu dirección de correo electrónico y te enviaremos un enlace para restablecer tu contraseña.') }}
            </div>

            <div class="card-body">
                <!-- Session Status -->
                <x-auth-session-status class="mb-3" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-3" :errors="$errors" />

                <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                    <div class="mb-3">
                        <x-label for="email" :value="__('Correo electrónico')" />

                        <x-input id="email" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <div class="d-flex justify-content-end mt-4">
                        <x-button>
                            {{ __('Enviar link') }}
                        </x-button>
                    </div>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>
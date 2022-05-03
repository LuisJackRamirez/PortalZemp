<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo width="82" />
            </a>
        </x-slot>

        <div class="card-body">
            <div class="mb-4 small text-muted">
                {{ __('¡Gracias por registrarte! Por favor, confirma tu dirección de correo electrónico, haciendo clic en el enlace que te hemos enviado. Si no recibes el correo electrónico, te enviaremos otro.') }}
            </div>

            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    {{ __('¡Un enlace de verificación ha sido enviado a tu correo electrónico!') }}
                </div>
            @endif

            <div class="mt-4 d-flex justify-content-between">
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div>
                        <x-button>
                            {{ __('Reenviar correo de verificación') }}
                        </x-button>
                    </div>
                </form>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="btn btn-link">
                        {{ __('Cerrar sesión') }}
                    </button>
                </form>
            </div>
        </div>
    </x-auth-card>
</x-guest-layout>

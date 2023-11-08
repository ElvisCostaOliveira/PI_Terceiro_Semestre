    <!-- Fala Com professor, não está validando devidamente.-->
    <div class="mb-4 text-sm text-gray-600">
        Esta é uma área segura do aplicativo. Por favor, confirme sua senha antes de continuar.
    </div>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <!-- Password -->
        <div>
            <label>Confirmar Senha:</label>

            <input id="USUARIO_SENHA" class="block mt-1 w-full" type="password" name="USUARIO_SENHA" required >            
        </div>

        <div class="flex justify-end mt-4">
            <button>
                Confirmar
            </button>
        </div>
    </form>
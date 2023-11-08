<form method="POST" action="{{ route('password.store') }}">
    @csrf

    <!-- Password Reset Token -->
    <input type="hidden" name="token" value="{{ $request->route('token') }}">

    <!-- Email Address -->
    <div>
        <label>Email:</label>
        <input id="email" class="block mt-1 w-full" type="email" name="USUARIO_EMAIL" value="('USUARIO_EMAIL', $request->USUARIO_EMAIL)" required autofocus autocomplete="USUARIO_EMAIL" />        
    </div>

    <!-- Password -->
    <div class="mt-4">
    <label>Nova Senha:</label>
        <input id="USUARIO_SENHA" class="block mt-1 w-full" type="password" name="USUARIO_SENHA" required />        
    </div>

    <!-- Confirm Password -->
    <div class="mt-4">
        <label>Confirmar Senha</label>

        <input id="password_confirmation" class="block mt-1 w-full" type="USUARIO_SENHA" name="password_confirmation" required autocomplete="new-password"/>

    </div>

    <div class="flex items-center justify-end mt-4">
        <button>
            Resetar Senha
        </button>
    </div>
</form>
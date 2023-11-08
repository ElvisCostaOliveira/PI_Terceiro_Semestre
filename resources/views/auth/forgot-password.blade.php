<div class="mb-4 text-sm text-gray-600">
  <span>Esqueceu sua senha? Sem problemas. Basta nos informar seu endereço de e-mail e enviaremos por e-mail um link de redefinição de senha que permitirá que você escolha uma nova.</span> 
</div>

<form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
    <div>
        <label>Email</label>
        <input id="USUARIO_EMAIL" class="block mt-1 w-full" type="USUARIO_EMAIL" name="email" :value="old('email')" required autofocus />       
    </div>

    <div class="flex items-center justify-end mt-4">
        <button>
            Enviar Link
        </button>
        <button class='ml-2'>
            <a href="/">Voltar para home</a>
        </button>
    </div>
</form>
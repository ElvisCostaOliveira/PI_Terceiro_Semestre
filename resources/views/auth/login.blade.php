<!DOCTYPE html>
<html lang="pt-br">

<head>
    <script async="" src="../js/gtm.js"></script>
    <script async="" src="../js/gtm_1.js"></script>
    

    <title>Ticket Bravo</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" href="../images/logo.svg">
    <link rel="apple-touch-icon" href="../images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="../images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../images/apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../images/apple-touch-icon-180x180.png">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">

    <link href="../css/Pplugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="../css/Sstyle.bundle.css" rel="stylesheet" type="text/css">

    <script src="../js/enterprise.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


    <style>
        body {
            background-image: url('../images/auth.jpeg');
        }
    </style>


    <script id="kdtjs" type="text/javascript" async="" src="../js/k.js"></script>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center">


    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <div class="d-flex flex-lg-row-fluid d-none d-lg-inline-flex">
                <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                    <img src="../images/auth-app.png"
                        class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20" alt="">

                    <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">
                        Descubra, Celebre, Viva!
                    </h1>
                    <img alt="Logo" src="../images/logo.svg" class="h-300px h-lg-160px">


                    <div class="text-gray-600 fs-base text-center fw-semibold">
                        Desbloqueie Experiências Inesquecíveis: Seu Passaporte para Eventos <br>
                        Extraordinários! 🎉 Garanta Seus Ingressos Agora e Faça Parte dos Momentos que <br>
                        Marcam História. Descubra, Celebre, Viva!! <br>
                    </div>

                </div>
            </div>




            <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
                <div class="bg-body d-flex flex-column flex-center rounded-4 w-md-600px p-10">
                    <div class="d-flex flex-center flex-column align-items-stretch h-lg-100 w-md-400px">
                        <div class="d-flex flex-center flex-column-fluid pb-15 pb-lg-20">
                            <form id="kt_sign_in_form" method="POST" action="{{ route('login') }}" class="form w-100"
                                novalidate="novalidate">
                                @csrf

                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Login</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Informe seus dados de acesso
                                    </div>
                                </div>


                                <div class="fv-row mb-8">
                                    <input for="email" type="email" name="email" :value="old('email')"
                                        placeholder="E-mail" required autofocus autocomplete="username"
                                        class="form-control bg-transparent">
                                </div>

                                <div class="fv-row mb-3 fv-plugins-icon-container" data-kt-password-meter="true">
                                    <div class="mb-1">
                                        <div class="position-relative mb-3">
                                            <input for="password" id="password" type="password" name="password"
                                                placeholder="Senha" class="form-control bg-transparent inputLogin"
                                                required autocomplete="current-password" maxlength="15">
                                            <span
                                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                data-kt-password-meter-control="visibility">
                                            </span>
                                        </div>
                                    </div>

                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>

                                <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                                    <div></div>

                                    <a href="/auth/esqueci-senha" class="link-warning">
                                        Esqueci minha senha
                                    </a>
                                </div>

                                <div class="d-grid mb-10">
                                    <button type="submit" id="kt_sign_in_submit" class="btn btn-warning">
                                        <span class="indicator-label buttonLogin">Entrar</span>
                                        <span class="indicator-progress">
                                            Aguarde... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="text-gray-500 text-center fw-semibold fs-6">
                                    Não é cliente Ticket Bravo?

                                    <a href="/register" class="link-dark">
                                        Cadastre-se
                                    </a>
                                </div>
                            </form>
                            <div id="login-alert" class="alert" role="alert"></div>

                        </div>
                        <div class="text-center mb-5">
                            <a href="/" title="Voltar">Voltar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../js/plugins.bundle.js"></script>
    <script src="../js/scripts.bundle.js"></script>

    <script
        type="text/javascript">window.N REUM || (NREUM = {}); NREUM.info = { "beacon": "bam.nr-data.net", "licenseKey": "NRJ S - f 2d1 5bd9e96e98a917d", "ap p l i ca tio nID": "11268 28 151", " tra nsact ion N ame": "MwADMEtVC0FS VB BZXApKIAdNXQpcHEQNR F ZLBB Q QURsMXFdSHA==", "queueTime": 0, "appli c ationTim e": 12, "atts ": "H0cARg NP GE8=", "err o rBea c on": "b am.nr - data . net", "age nt": "" }</script>

        <script>
    $(document).ready(function () {
        $('#kt_sign_in_form').submit(function (event) {
            event.preventDefault();

            $.ajax({
                url: $(this).attr('action'),
                method: 'POST',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function (response) {
        // Login bem-sucedido
        showAlert('success', 'Login bem-sucedido!');
        // Redirecione para a página store.blade
        window.location.href = '/carrinho';
    },
                error: function () {
                    // Login incorreto
                    showAlert('danger', 'Credenciais incorretas. Tente novamente.');
                }
            });
        });

        function showAlert(type, message) {
            const alertElement = $('<div class="alert"></div>');
            alertElement.addClass('alert-' + type);
            alertElement.html(message);

            $('#login-alert').empty().append(alertElement);

            // Exiba o alerta por 5 segundos e, em seguida, esconda
            alertElement.fadeIn().delay(5000).fadeOut();
        }
    });
</script>

</body>


</html>
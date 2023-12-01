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

    <style>
        body {
            background-image: url('../images/auth.jpeg');
        }
    </style>


    <script id="kdtjs" type="text/javascript" async="" src="../js/k.js"></script>
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-position-center">

    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P69G2JB" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-W7NK6Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript>

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
                            <form id="kt_sign_in_form" method="POST" action="{{ route('login') }}" class="form w-100" novalidate="novalidate">
                            @csrf

                                <div class="text-center mb-11">
                                    <h1 class="text-dark fw-bolder mb-3">Login</h1>
                                    <div class="text-gray-500 fw-semibold fs-6">
                                        Informe seus dados de acesso
                                    </div>
                                </div>


                                <div class="fv-row mb-8">
                                    <input for="email" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus autocomplete="username"
                                        class="form-control bg-transparent">
                                </div>

                                <div class="fv-row mb-3 fv-plugins-icon-container" data-kt-password-meter="true">
                                    <div class="mb-1">
                                        <div class="position-relative mb-3">
                                            <input  for="password" id="password" type="password" name="password" placeholder="Senha"
                                                class="form-control bg-transparent inputLogin" required autocomplete="current-password" maxlength="15">
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

                            <script> 
                                     window.ad d E ventList ener("load",  function ( event) {
                                        var KTSigninGene ral = funct ion () {
                                          var  form;
                                        var submitButton;
                                                                                var  va li da to r ;

                                                     va r  han dl eF or m =  f un ct ion  ( e)  { 
                                                                va lidat o r = Form V a lidation .formVa l i dation( 
                                                   for m, {
                                                      fi elds: {
                                                           'ema il': {
                                                               val idato rs: {
                                                                     e m ai lAdd ress: {
                                                                  me ssage: 'E-mail inválido',
                                                                    },
                                                             notEmp ty:  { 
                                                                                   me ss age: 'Po r  favor inf orme o  e- mai l '
                                                                } 
                                                                           }
                                                        },
                                                            'pass wor d': {
                                                                      val ida tors:  {
                                                                         notEmp t y: {
                                                                            messa ge: 'Po r favor informe  a  senha'
                                                                    } 
                                                            }
                                                       }
                                                       } ,
                                                       plu gins: { 
                                                           tr ig ger: new   FormVali dat ion.plugin s. Tr igger(),
                                                             bootstrap: new  F ormValid ati on.plugins .B oo tstrap5({
                                                                rowSelec to r:  '.fv-row',
                                                                 el e InvalidClass: '',
                                                                 eleValidCl ass : ''
                                                          })
                                                    }
                                                }
                                                  );

                                                      submit B u t ton .addEventListener('click', function (e) {
                                                   e.preventDef a ult(); 

                                                       validator.validate(). t hen(fu nction (s ta tus) {
                                                        if (stat u s ==   'Valid') {
                                                                 submitButton.setAttribute('data-kt-indicator', 'on');
                                                             subm it Button.disabled = true;

                                                                    gre ca p t cha .enterprise.ready(function () {
                                                                gr e captcha. ent erprise.execute('6L ems gslAAAAAFR o3 9 A d8 - T hsR M N Lilb9un7eLz8', {
                                                                     action: 'login' 
                                                               }).then(funct ion (token)   {
                                                                           $( ' #uu id').val( w in dow.Kon d uto.g e tVisitorID()) ;
                                                                              $( ' # to k e n').val( t ok en);
                                                                               f orm.sub m i t();
                                                                   } );
                                                                    });
                                                    }
                                                   });
                                              });
                                               }

                                        return {
                                                       in it: function ()  { 
                                                           f orm = d o c ument.que rySel ector('#kt_sign_in _form') ;
                                                      submitBu tton =  document. quer ySelect or('#kt_sign_in_submit');
                                                  handleForm () ;
                                                  }
                                              };
                                        }();

                                    KTUt il.onDOM Conte ntLoaded( functi on   ( ) { 
                                            KTSigninGeneral.init();

                                       });
                                });
                            </script>


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

    <script type="text/javascript">
        var __kdt = __kdt || [];
           __k dt.push ({
                "public_ k ey ": "P33F4D 9 1EB2" 
         });
          (function  ()   {
                var  kdt =  document.crea te Element('script ') ;
            kdt . id =  'kd t js';
                  kdt. typ e  =  't e xt/javascript ';
                  kd t.asy n c = tr ue;
               kdt . sr c =  ' https:// i. k-analyti x.com/ k.j s';
            var s = document.getElementsByTagName('body ') [0] ;
               s.paren tNode. ins ertBefore(kdt, s);
        })();
    </script>
    <script
        type="text/javascript">window.N REUM ||   (NREUM = {}); NREUM.info = { "beacon":  "bam.nr-data.net", "licenseKey": "NRJ S - f 2d1 5bd9e96e98a917d", "ap p l i ca tio nID": "11268 28 151", " tra nsact ion N ame": "MwADMEtVC0FS VB BZXApKIAdNXQpcHEQNR F ZLBB Q QURsMXFdSHA==", "queueTime":  0, "appli c ationTim e" : 12, "atts ":  "H0cARg NP GE8=", "err o rBea c on": "b am.nr - data . net" ,  "age nt" :  ""  }</script>

</body>

</html>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">

        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/tabs.css">
        <link rel="stylesheet" href="css/sweetalert.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <div id="container">
            <header id="header">
                <nav>
                    <div class="top-header">
                        <div class="content">
                            <section class="address">fdsfgdsf</section>
                            <section class="phone">fdgffds</section>
                            <section class="email">gfdgfd</section>

                            <div class="pull-right">
                                <section class="social"></section>
                            </div>
                        </div>
                    </div>
                    <div class="main-header">
                        <div class="content">
                            <section class="logo"></section>
                            <div class="pull-right">
                                <div class="navbar">
                                    <ul class="navigator">
                                        <li><a class="nav-link" href="/">Acasa</a></li>
                                        <li>
                                            <a class="nav-link services" href="#">Servicii</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="/contabilitate" class="@if(Route::current()->getName() == 'accounting') active @endif">Firmă de contabilitate</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/contabil_expert" class="@if(Route::current()->getName() == 'expert_accountant') active @endif">Expert contabil</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/resurse_umane_relatii_de_munca" class="@if(Route::current()->getName() == 'hr') active @endif">Resurse umane relații de muncă</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/salarizare" class="@if(Route::current()->getName() == 'payroll') active @endif">Salarizare, payroll</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/audit" class="@if(Route::current()->getName() == 'audit') active @endif">Audit intern si extern</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/infiintari_registrul_comertului" class="@if(Route::current()->getName() == 'startingCompany') active @endif">Inființări Registrul Comerțului</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/mentiuni_registrul_comertului" class="@if(Route::current()->getName() == 'modifyCompany') active @endif">Menținui registrul comerțului</a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="/radieri_registrul_comertului" class="@if(Route::current()->getName() == 'dismantleCompany') active @endif">Radieri registrul comerțului</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a class="nav-link" href="#">Cariere</a></li>
                                        <li><a class="nav-link" href="#">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
            <main id="main">
                @yield('content')
            </main>
            <footer id="footer"></footer>
        </div>

        <script src="js/jquery-3.1.0.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.validate.min.js"></script>
        <script src="js/jquery.form.min.js"></script>
        <script src="js/sweetalert.min.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
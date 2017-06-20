<!DOCTYPE html>
<html lang="en" class="ragnarokx-welcome">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>eUsahawan</title>
    <link href="dist/stylesheets/global.css" rel="stylesheet">
    <!--[if lt IE 9]><script src="dist/scripts/ie-libs.min.js"></script><![endif]-->
</head>
<body>

    <header class="eu-header">
        <div class="container">
            <div class="eu-header__item  eu-header__item--brand">
                <a href="#" class="eu-brand  eu-brand--for-header">
                    <span class="sr-only">eUsahawan</span>
                </a>
            </div>
            <nav class="eu-header__item  eu-header__item--nav">
                <div class="eu-nav">
                    <div class="eu-nav__item--group  hidden-sm  hidden-xs">
                        <a href="#" class="eu-nav__item" data-toggle="dropdown">Bahasa Melayu <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="sr-only"><a href="#">Bahasa Melayu</a></li>
                            <li><a href="#">English</a></li>
                        </ul>
                    </div>
                    <div class="eu-nav__item  eu-nav__item--divider  hidden-sm  hidden-xs"></div>
                    <a href="#" class="eu-nav__item  eu-nav__item--btn  hidden-sm  hidden-xs">Daftar</a>
                    <a href="#" class="eu-nav__item  hidden-sm  hidden-xs">Log Masuk</a>
                    <div class="eu-nav__item  eu-nav__item--divider  hidden-sm  hidden-xs"></div>
                    <a href="#" class="eu-nav__item" data-toggle="modal" data-target="#menu-right"><span class="glyphicon  glyphicon--menu-hamburger"></span></a>
                </div>
            </nav>
        </div>
    </header>

    <div class="modal  modal--sticky  modal--sticky-right  fade" id="menu-right" tabindex="-1" role="dialog">
        <div class="modal__dialog" role="document">
            <div class="modal__content">
                <div class="modal__header">
                    Menu <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal__body">
                    <nav class="eu-sidenav">
                        <ul class="eu-sidenav__list">
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">Home</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a" data-toggle="modal" data-target="#tentang-eusahawan-nav" data-dismiss="modal">Tentang eUsahawan <span class="eu-sidenav__icon  glyphicon  glyphicon--chevron-right"></span></a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">News</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">Daya eUsahawan</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">Kisah Kejayaan</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">Business Management</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">Contact</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <div class="modal  modal--sticky  modal--sticky-right  fade" id="tentang-eusahawan-nav" tabindex="-1" role="dialog">
        <div class="modal__dialog" role="document">
            <div class="modal__content">
                <div class="modal__header">
                    Tentang eUsahawan <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal__body">
                    <nav class="eu-sidenav">
                        <ul class="eu-sidenav__list">
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">eUsahawan Muda</a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a">eUsahawan Mikro <span class="eu-sidenav__icon  glyphicon  glyphicon--chevron-right"></span></a>
                            </li>
                            <li class="eu-sidenav__item">
                                <a href="#" class="eu-sidenav__a" data-toggle="modal" data-target="#menu-right" data-dismiss="modal"><span class="eu-sidenav__icon  glyphicon  glyphicon--remove"></span> Kembali</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <script src="dist/scripts/global.min.js"></script>
    <script type="text/javascript">

        window.modal = {}

        $(document).on('click', '[data-toggle="modal"]', function(e) {
            var $this = $(this);
            var target = $this.attr('data-target');
            window.modal = $(target);
        });

        $(document).on('click', '.modal__dialog', function(e) {
            if ($(e.target).closest('.modal__content').length) return;
            if (window.modal) window.modal.modal('hide');
        });

    </script>
</body>
</html>
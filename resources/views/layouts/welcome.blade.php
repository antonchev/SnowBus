<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}">
    <link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=yes' name='viewport' />
    <title>Snow Bus | Автобус в Степаново и Сорочаны</title>
    <meta name="description" content="Регулярный автобус от м. Тимирязевская до Степаново и Сорочан каждую пятницу и воскресенье. 🚍 #snowbus" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700%7CRoboto+Slab:400,700%7CMaterial+Icons" />
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/material-kit.css?v=1.2.1')}}" rel="stylesheet"/>

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(52688695, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/52688695" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</head>



<body class="pricing">
<nav class="navbar navbar-rose navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->


        <nav class="navbar navbar-default navbar-transparent navbar-fixed-top navbar-color-on-scroll" id="sectionsNav">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="logo-container" href="./"><img width="50" alt="Show Bus" src="{{asset('assets/img/logo-trip.png')}}"></a>


                    SHOW BUS


                </div>
                <div  class="navbar-collapse">

                    <ul  class="nav navbar-nav navbar-right">
                        <li>
                            <a href="./#whywe">
                                <i class="material-icons">question_answer</i> Почему мы
                            </a>
                        </li>

                        <li>
                            <a href="./#anketa" >
                                <i class="material-icons">shopping_cart</i> Заполнить анкету
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</nav>

<div class="page-header header-filter header-small" data-parallax="true" style="background-image: url('../assets/img/bg2.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if ($task->pay == 0)
                    <h1 class="title">Ваш заказ успешно сформирован! </h1>
                    <h2>Заказ № {{$task->id_num}} </h2>

                @else
                    <h1 class="title">Ваш заказ оплачен! </h1>
                    <h2>Заказ № {{$task->id_num}} </h2>

                @endif


            </div>
        </div>
    </div>
</div>

<div class="main main-raised">
    <div class="container">

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card card-contact">

                        <div class="header header-raised header-primary text-center">

                            <h2 class="title">Детали заказа</h2>
                        </div>
                        <div class="card-content">
                            <div class="text-center">
                                @if ($task->pay == 0)
                                    Ваш заказ успешно сформирован и ожидает оплаты

                                @else


                                @endif

                            </div>
                            @yield('content')

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<footer class="footer">
    <div class="container">
        <nav class="pull-left">
            <ul>
                <li>
                    <a href="https://vk.com/snow_bus">Вконтакте
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/snow.bus/">
                        Инстаграм
                    </a>
                </li>

            </ul>
        </nav>
        <div class="copyright pull-right">
            &copy; <script>document.write(new Date().getFullYear())</script> Cделано  <i class="fa fa-heart heart"></i> by <a href="https://vk.com/wholetrains" >Antonchev prod.</a>
        </div>
    </div>
</footer>



















<script src="../assets/js/jquery.js"></script>
<script src="../assets/js/jquery.validate.js"></script>
<script src="../assets/js/messages_ru.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/material.min.js"></script>
<script src="../assets/js/bootstrap-formhelpers-phone.js"></script>
<script src="../assets/js/moment.min.js"></script>
<script src="../assets/js/nouislider.min.js"></script>
<script src="../assets/js/bootstrap-datetimepicker.js"></script>
<script src="../assets/js/bootstrap-selectpicker.js"></script>
<script src="../assets/js/bootstrap-tagsinput.js"></script>
<script src="../assets/js/jasny-bootstrap.min.js"></script>
<script src="../assets/js/material-kit.js?v=1.2.1"></script>





</body>



</html>

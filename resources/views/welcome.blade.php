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

    <body data-spy="scroll" data-target=".navbar" data-offset="50" class="landing-page">

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
                <a class="logo-container" href=""><img width="50" alt="Show Bus" src="{{asset('assets/img/logo-trip.png')}}"></a>
                            SHOW BUS
            </div>

            <div  class="navbar-collapse">

                <ul  class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#whywe">
                            <i class="material-icons">question_answer</i> Почему мы
                        </a>
                    </li>

                    <li>
                        <a href="#anketa" >
                            <i class="material-icons">shopping_cart</i> Записаться
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('../assets/img/snowboarding.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="title">Snow Bus</h1>
                    <h4>Регулярный автобус от м. Тимирязевская до Степаново и Сорочан каждую пятницу и воскресенье. 🚍 #snow_bus</h4>
                    <br>
                    <a href="#anketa"  class="btn btn-danger btn-raised btn-lg">
                        <i class="fa fa-play"></i> Выбрать и записаться на выезд
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="main main-raised">
        <div class="container">
            <div id="whywe">
            <div class="section text-center">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Почему мы самые лучшие?</h2>
                    </div>
                </div>
                <div class="features">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon icon-info">
                                    <i class="material-icons">chat</i>
                                </div>
                                <h4 class="info-title">Самые низкие цены на прокат</h4>
                                <p>Комплект для сноубордиста/лыжника 500р. за весь день.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon icon-success">
                                    <i class="material-icons">verified_user</i>
                                </div>
                                <h4 class="info-title">Самая низкая стоимость обучения с инструктором</h4>
                                <p>1500р. часовое занятие.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">fingerprint</i>
                                </div>
                                <h4 class="info-title">Быстрый и комфортный автобус</h4>
                                <p>600 рублей туда-обратно.</p>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="info">
                                <div class="icon icon-danger">
                                    <i class="material-icons">access_time</i>
                                </div>
                                <h4 class="info-title">Мы приезжаем на склон ко времени</h4>
                                <p>когда начинает действовать тариф буднего дня и подъемы на 50%, дешевле!</p>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div id="anketa">
            </div>
            <div class="contactus-1 section-image" style="background-image: url('assets/img/bg13.jpg'); margin-bottom: 30px">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="card card-contact">
                                    <div class="header header-raised header-primary text-center">
                                        <h2 class="title">Запись</h2>
                                    </div>
                                    <div class="card-content">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        {!! Form::open(array('route' => 'task.store','method'=>'POST', 'id' => 'regiration_form')) !!}



                                            <fieldset>
                                                <h2>Шаг 1: Выберите выезд</h2>

                                                @foreach($trips as $trip)
                                                    @if ($trip->published == 0)

                                                    @else
                                                        <div class="form-check">

                                                            <label class="form-check-label" for="{{$trip->id}}">
                                                                <input class="form-check-input" type="radio" name="trip" id="{{$trip->id}}" value="{{$trip->id}}" />  {{$trip->title}} {{$trip->date}} {{$trip->comment}}
                                                            </label>

                                                        </div>
                                                    @endif
                                                @endforeach



                                                <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <input type="button" name="data[trip]" class="next btn btn-info" value="Далее" />
                                            </fieldset>





                                                <fieldset>
                                                <h2> Шаг 2: Ваши контакты</h2>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="f_Name" id="fName" placeholder="Фамилия" />
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="l_Name" id="lName" placeholder="Имя">
                                                </div>
                                                <div class="form-group">
                                                    <input type="text" class="form-control bfh-phone" name="d_phone" data-format="+7 (ddd) ddd-dddd">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="e_mail" placeholder="Электронная почта">
                                                </div>
                                                    <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <input type="button" name="previous" class="previous btn btn-default" value="Назад" />

                                                <input type="button" name="next" class="next btn btn-info" value="Далее" />
                                            </fieldset>







                                            <fieldset>
                                                <h2>Шаг 3: Аренда оборудования</h2>
                                                <h5>(500р. за комплект [борд/лыжи + ботинки] )</h5>
                                                <div class="panel-group" id="accordion">
                                                    <div class="panel panel-default">
                                                            <label class="form-check-label" for="stuf1" data-toggle="collapse" data-parent="#accordion" data-target="#collapse1:not(.in)">
                                                                <input class="form-check-input" type="radio" name="stuf" id="stuf1" value="Не нужно">  Не нужно
                                                            </label>
                                                    </div>
                                                    <div class="panel panel-default">
                                                            <label class="form-check-label" for="stuf2" data-toggle="collapse" data-parent="#accordion" data-target="#collapse2:not(.in)">
                                                                <input class="form-check-input" type="radio" name="stuf" id="stuf2" value="Комплект сноубордиста">  Комплект сноубордиста
                                                            </label>
                                                    <div id="collapse2" class="panel-collapse collapse">
                                                                <input type="text" class="form-control" name="fSize" id="fSize" placeholder="Рост / размер ноги">
                                                           <h6>Ведущая нога</h6>
                                                            <div class="form-check">
                                                            <label class="form-check-label" >
                                                                <input class="form-check-input" type="radio" name="foot" id="foot1" value="Левая">Левая</label>
                                                            </div>
                                                            <div class="form-check">
                                                            <label class="form-check-label" >
                                                                <input class="form-check-input" type="radio" name="foot" id="foot2" value="Правая">Правая</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel panel-default">
                                                            <label class="form-check-label" for="stuf3" data-toggle="collapse" data-parent="#accordion" data-target="#collapse3:not(.in)">
                                                                <input class="form-check-input" type="radio" name="stuf" id="stuf3" value="Комплект лыжника">  Комплект лыжника
                                                            </label>
                                                        <div id="collapse3" class="panel-collapse collapse">
                                                            <div class="panel-body"> <input type="text" class="form-control" name="sfSize" id="sfSize" placeholder="Рост / размер ноги / вес "></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <input type="button" name="previous" class="previous btn btn-default" value="Назад" />
                                                <input type="button" name="next" class="next btn btn-info" value="Далее" />
                                            </fieldset>
                                            <fieldset>
                                                <h2>Шаг 4: Дополнительная экипировка</h2>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="ekip[]" type="checkbox" value="Ни чего" id="extrastuf1">
                                                    <label class="form-check-label" for="extrastuf1">
                                                        Ни чего
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="ekip[]" type="checkbox" value="Шлем" id="extrastuf2">
                                                    <label class="form-check-label" for="extrastuf2">
                                                        Шлем (+150 рублей)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" name="ekip[]" type="checkbox" value="Защита таза" id="extrastuf3">
                                                    <label class="form-check-label" for="extrastuf3">
                                                        Защита таза (+150 рублей)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input " name="ekip[]" type="checkbox" value="Защита колен" id="extrastuf4">
                                                    <label class="form-check-label" for="extrastuf4">
                                                        Защита колен (+150 рублей)
                                                    </label>
                                                </div>
                                                <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <input type="button" name="previous" class="previous btn btn-default" value="Назад" />
                                                <input type="button" name="next" class="next btn btn-info" value="Далее" />
                                            </fieldset>
                                            <fieldset>
                                                <h2>Шаг 5: Нужен ли инструктор?</h2>
                                                <h5>уточняйте свободен ли написав в группу</h5>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher1">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher1" value="Нет"> Нет
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher2">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher2" value="Да, хочу встать на сноуборд!"> Да, хочу встать на сноуборд! (1500 р./час)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher3">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher3" value="Да, хочу встать на лыжи!"> Да, хочу встать на лыжи! (1500 р./час)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher4">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher4" value="Хочу улучшить технику катания на лыжах"> Хочу улучшить технику катания на лыжах (2000 р./час)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher5">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher5" value="Хочу улучшить технику катания на сноуборде"> Хочу улучшить технику катания на сноуборде (2000 р./час)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="teacher6">
                                                        <input class="form-check-input" type="radio" name="teacher" id="teacher6" value="Помогите мне хоть до подъемника-то дойти!"> Помогите мне хоть до подъемника-то дойти! (бесплатно)
                                                    </label>
                                                </div>
                                                <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <input type="button" name="previous" class="previous btn btn-default" value="Назад" />
                                                <input type="button" name="next" class="next btn btn-info" value="Далее" />
                                            </fieldset>
                                            <fieldset>
                                                <h2>Шаг 6: Откуда вы узнали о Snow Bus?</h2>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about1">
                                                        <input class="form-check-input" type="radio" name="about" id="about1" value="Уже ездил(а) с вами"> Уже ездил(а) с вами
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about2">
                                                        <input class="form-check-input" type="radio" name="about" id="about2" value="Репост у друга/в группе"> Репост у друга/в группе
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about3">
                                                        <input class="form-check-input" type="radio" name="about" id="about3" value="Друг рассказал (устно/прислал ссылку)"> Друг рассказал (устно/прислал ссылку)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about4">
                                                        <input class="form-check-input" type="radio" name="about" id="about4" value="Рекламный пост в ленте новостей"> Рекламный пост в ленте новостей
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about5">
                                                        <input class="form-check-input" type="radio" name="about" id="about5" value="Нашел сам (Яндекс, поиск ВК, Google)"> Нашел сам (Яндекс, поиск ВК, Google)
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about6">
                                                        <input class="form-check-input" type="radio" name="about" id="about6" value="Увидел/нашел листовку"> Увидел/нашел листовку
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about7">
                                                        <input class="form-check-input" type="radio" name="about" id="about7" value="Инстаграмм"> Инстаграмм
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" for="about8">
                                                        <input class="form-check-input" type="radio" name="about" id="about8" value="Свой вариант"> Свой вариант
                                                    </label>
                                                    <input type="text" class="form-control" name="about_o" id="about9" placeholder="введите текст">
                                                </div>
                                                <br><div class="errorTxt error alert alert-danger" style="display:none;"></div>
                                                <textarea  class="form-control" name="report" placeholder="Если уже ездили с нами, оставьте пожелания/советы"></textarea>
                                                <input type="button" name="previous" class="previous btn btn-default" value="Назад" />
                                                <input type="submit" name="submit" class="submit btn btn-success" value="Записаться" id="submit_data" />
                                            </fieldset>
{!! Form::close() !!}
                                    </div>
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

    <script >
        $(document).ready(function()
        {
            $('#regiration_form').on('keyup keypress', function(e) {
                var keyCode = e.keyCode || e.which;
                if (keyCode === 13) {
                    e.preventDefault();
                    return false;
                }
            });
        });

    </script>

    <script >
        $(document).ready(function(){
            var current = 1,current_step,next_step,steps;
            steps = $("fieldset").length;
            $( "#regiration_form" ).validate({
                rules: {
                    trip: {
                        required: true,
                    },
                    f_Name: {
                        required: true,

                    },
                    l_Name: {
                        required: true
                    },
                    d_phone: {
                        required: true,
                        minlength: 17
                    },
                    e_mail: {
                        required: true

                    },
                    fSize: {
                        required: '#stuf2:checked',
                    },
                    sfSize: {
                        required: '#stuf3:checked',
                    },
                    foot: {
                        required: '#stuf2:checked',
                    },
                    about_o:{
                        required: '#about8:checked',
                    },
                    stuf: {
                        required: true,
                    },
                    'ekip[]': {
                        required: true,
                    },
                    teacher: {
                        required: true,
                    },
                    about: {
                        required: true,
                    },
                },
                messages:{
                    e_mail: "Поле Электронная почта необходимо заполнить.",
                    f_Name: "Поле Фамилия необходимо заполнить.",
                    l_Name: "Поле Имя необходимо заполнить.",
                    d_phone: "Поле Телефон необходимо заполнить.",
                    fSize:"Поле Рост / Размер ноги необходимо заполнить.",
                    sfSize:"Поле Рост / Размер ноги / Вес необходимо заполнить.",
                    foot:"Поле Ведущая нога необходимо заполнить",
                },
                errorElement : 'div',
                errorLabelContainer: '.errorTxt'
            });
            $(".next").click(function()
            {
                lang: 'ru'
                var form = $("#regiration_form");
                form.validate({
                });
                if (form.valid() == true) {
                    current_step = $(this).parent();
                    next_step = $(this).parent().next();
                    next_step.show();
                    current_step.hide();
                    setProgressBar(++current);
                } });
            $(".previous").click(function(){
                current_step = $(this).parent();
                next_step = $(this).parent().prev();
                next_step.show();
                current_step.hide();
                setProgressBar(--current);
            });
            setProgressBar(current);
            // Change progress bar action
            function setProgressBar(curStep){
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width",percent+"%")
                    .html(percent+"%");
            }
        });
    </script>
    </body>
</html>




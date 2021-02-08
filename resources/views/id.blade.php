@extends('layouts.welcome')

@section('content')




            <h5><b>Имя:</b> {{$task->f_Name}} {{$task->l_Name}}</h5>



           <h5><b>Телефон:</b> {{$task->d_phone}}</h5>
            <h5><b>e-mail:</b> {{$task->e_mail}}</h5>

            <h5><b>Выезд:</b> {{$task->trips->title}} </h5>




         <h5><b>Аренда:</b> {{$task->stuf}} {{$task->fSize}} <b>Нога:</b> {{$task->foot}} </h5>


        <h5><b>Экипировка:</b> {{$task->ekip}}</h5>


          <h5><b>Инструктор:</b> {{$task->teacher}}</h5>


            <h5><b>Откуда узнали о нас?:</b> {{$task->about}}</h5>


            <h5><b>Пожелание:</b> {{$task->report}}</h5>

        @if ($task->pay == 0)
<div style="color:red;" >
    <h5 class=""><b>Оплата:</b> Не оплачен!</h5>

</div>
<h5><b>Оплата трансфера:</b> 600 рублей</h5>
<form method="POST" action="https://money.yandex.ru/quickpay/confirm.xml" >
    <input type="hidden" name="receiver" value="41001618237470">
    <input type="hidden" name="quickpay-form" value="shop">
    <input type="hidden" name="formcomment" value="Оплата заказа №{{$task->id_num}} на сайте Snow Bus">
    <input type="hidden" name="targets" value="Оплата заказа №{{$task->id_num}} на сайте Snow Bus">
    <input type="hidden" name="short-dest" value="Оплата заказа №{{$task->id_num}} на сайте Snow Bus">
    <input type="hidden" name="successURL" value="http://trip.local/ID{{$task->id_num}}">
    <input type="hidden" name="sum" value="600" data-type="number">
    <input type="hidden" name="label" value="{{$task->id_num}}">
    <input type="hidden" name="paymentType" value="AC">
    <input  class="submit btn btn-success" type="submit" value="Оплатить">
</form>
        @else
            <div style="color:green;" >  <h5 class=""><b>Оплата:</b> Оплачен!</h5></div>

            @endif









@endsection
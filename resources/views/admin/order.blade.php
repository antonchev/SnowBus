@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <h3>Заказы</h3>
            <a href="" class="btn btn-success">Заказать</a>
            <div class="col md-10 col-md-offser-1">
                <table class="table">
                    <thead>
                    <tr>
                        <td>№</td>
                        <td>Выезд</td>
                        <td>Дата</td>
                        <td>Фамилия</td>
                        <td>Имя</td>
                        <td>Телефон</td>
                        <td>Экипировка</td>
                        <td>Доп. экипировка</td>
                        <td>Инструктор</td>
                        <td>Откуда узнали</td>
                        <td>Пожелания</td>
                        <td>Оплачен</td>

                    </tr>
                    </thead>
                    <tr class="tbody">
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id_num}}</td>

                        <td>{{$task->trips->title}}</td>
                        <td>{{$task->trips->date}}</td>
                        <td>{{$task->l_Name}}</td>
                        <td>{{$task->f_Name}}</td>
                        <td>{{$task->d_phone}}</td>
                        <td>{{$task->stuf}} {{$task->fSize}} {{$task->foot}}</td>
                        <td>{{$task->ekip}}</td>
                        <td>{{$task->teacher}}</td>
                        <td>{{$task->about}}</td>
                        <td>{{$task->report}}</td>
                        <td>@if ($task->pay == 0)
                                Нет
                            @else
                                Да
                            @endif</td>

                        <td>
                            <a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                           <a href="#"><i class="glyphicon glyphicon-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach



                    </tr>
                    <!-- /.tbody -->
                </table>

                <!-- /.table -->

            </div>
            <!-- /.col md-10 col-md-offser-1 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.containert -->

    @endsection
@extends('layouts.app')

@section('content')


    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active" data-toggle="tab" href="#order" role="tab">Заказы</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#trip" role="tab">Выезды</a>
            </li>
        </ul>

        <!-- Tab panes -->
        <br><div class="tab-content">

            <div class="tab-pane active" id="order" role="tabpanel">


                <div class="row">

                    <br><a href="/#anketa" class="btn btn-success" >Новый</a>
                    <br> <div class="col md-10 col-md-offser-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>Дата</td>
                                <td>№</td>
                                <td>Выезд</td>
                                <td>Дата</td>
                                <td>Фамилия</td>
                                <td>Имя</td>
                                <td>Телефон</td>
                                <td>Почта</td>
                                <td>Экипировка</td>
                                <td>Доп. экипировка</td>
                                <td>Инструктор</td>
                                <td>Откуда узнали</td>
                                <td>Пожелания</td>
                                <td>Оплачен</td>
                                <td>Действия</td>

                            </tr>
                            </thead>

                            <tr class="tbody">
                            @foreach($tasks as $item)
                                <tr>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->id_num}}</td>

                                    <td>{{$item->trips->title}}</td>
                                    <td>{{$item->trips->date}}</td>
                                    <td>{{$item->l_Name}}</td>
                                    <td>{{$item->f_Name}}</td>
                                    <td>{{$item->d_phone}}</td>
                                    <td>{{$item->e_mail}}</td>
                                    <td>{{$item->stuf}} {{$item->fSize}} {{$item->foot}}</td>
                                    <td>{{$item->ekip}}</td>
                                    <td>{{$item->teacher}}</td>
                                    <td>{{$item->about}}</td>
                                    <td>{{$item->report}}</td>
                                    <td>@if ($item->pay == 0)
                                            Нет
                                        @else
                                            Да
                                        @endif</td>

                                    <td>
                                        <a href="#"><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="#"><i class="glyphicon glyphicon-edit"></i></a>
                                        {!! Form::open(['method'=>'DELETE', 'route'=> ['order.destroy', $item->id]]) !!}
                                        <button onclick="return confirm('Вы уверены ?')"><i class="glyphicon glyphicon-remove"></i> </button>
                                        {{Form::close()}}
                                    </td>
                                </tr>
                                @endforeach




                                <!-- /.tbody -->
                        </table>

                        <!-- /.table -->
                        {{$tasks->links()}}



                    </div>
                    <!-- /.col md-10 col-md-offser-1 -->
                </div>
                <!-- /.row -->



            </div>

            <div class="tab-pane" id="trip" role="tabpanel">



                <div class="row">


                    <br><a href="" class="btn btn-success" data-toggle="modal" data-target="#tripModal">Новый</a>


                    <div class="modal fade" id="tripModal" tabindex="-1" role="dialog" aria-labelledby="tripModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">

                                    <h5 class="modal-title" id="tripModalLabel">Новая запись</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!! Form::open(array('route' => 'trip.store','method'=>'POST' , 'id' => 'contactForm')) !!}

                                    <div class="form-group">
                                        <label for="title">Выезд:</label>
                                        <input id="title" class="form-control" name="title" required type="text" placeholder="горки город">
                                    </div>
                                    <div class="form-group">
                                        <label for="date">Дата:</label>
                                        <input id="date" class="form-control" name="date" required type="text" placeholder="31 декабря (воскресенье)">
                                    </div>
                                    <div class="form-group">
                                        <label for="other">Примечание:</label>
                                        <input id="other" class="form-control" name="other" type="text" placeholder="без заезда...">
                                    </div>
                                    <div class="form-group">
                                        <label for="pub">Опубликован:</label>


                                        <input id='pub' type='checkbox' value='1' name='pub' checked>


                                    </div>

                                    <button id="button"  class="btn btn-success" type="submit">Сохранить</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col md-10 col-md-offser-1">
                        <table class="table">
                            <thead>
                            <tr>
                                <td>№</td>
                                <td>Выезд</td>
                                <td>Дата</td>
                                <td>Примечание</td>
                                <td>Опубликован</td>


                            </tr>
                            </thead>
                            <tr class="tbody">
                            @foreach($trips as $trip)
                                <tr>
                                    <td>{{$trip->id}}</td>
                                    <td>{{$trip->title}}</td>
                                    <td>{{$trip->date}}</td>
                                    <td>{{$trip->comment}}</td>
                                    @if ($trip->published == 1)


                                    <td>Да</td> @else
                                        <td>Нет</td>
                                    @endif

                                    <td>
                                        <a href="{{route ('export.index',$trip->id)}}"><i class="glyphicon glyphicon-download"></i></a>
                                        <a href="{{route ('trip.edit',$trip->id)}}"><i class="glyphicon glyphicon-edit"></i></a>

                                        {!! Form::open(['method'=>'DELETE', 'route'=> ['trip.destroy', $trip->id]]) !!}
                                        <button onclick="return confirm('Вы уверены ?')"><i class="glyphicon glyphicon-remove"></i> </button>
                                        {{Form::close()}}
                                    </td>





                                </tr>
                                @endforeach

                                <!-- /.tbody -->
                        </table>
                    {{$trips->links()}}
                        <!-- /.table -->

                    </div>
                    <!-- /.col md-10 col-md-offser-1 -->
                </div>
                <!-- /.row -->









            </div>
        </div>
    </div>
    <!-- /.containert -->

@endsection
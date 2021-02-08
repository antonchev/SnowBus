@extends('layouts.app')

@section('content')


    <div class="container">
        <div class="row">
            <h3>Выезды</h3>
            <a href="" class="btn btn-success" data-toggle="modal" data-target="#tripModal">Новый</a>


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
                                    <input id="other" class="form-control" name="other" required type="text" placeholder="без заезда...">
                                </div>
                                <div class="form-group">
                                    <label for="pub">Опубликован:</label>
                                    <input id="pub" class="form-control" name="pub" required type="text" placeholder="0 или 1">
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
                        <td>{{$trip->published}}</td>

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
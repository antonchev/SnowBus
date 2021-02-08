@extends('layouts.app')


@section('content')


        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <h5 class="modal-title" id="tripModalLabel">Редактировать поездку № {{$Mytrip->id}}</h5>

                </div>
                <div class="modal-body">
                    {!! Form::open(array('route' => ['trip.update',$Mytrip->id],'method'=>'PUT' , 'id' => 'contactForm')) !!}

                    <div class="form-group">
                        <label for="title">Выезд:</label>
                        <input id="title" class="form-control" name="title" required type="text" value="{{$Mytrip->title}}">
                    </div>
                    <div class="form-group">
                        <label for="date">Дата:</label>
                        <input id="date" class="form-control" name="date" required type="text" value="{{$Mytrip->date}}">
                    </div>
                    <div class="form-group">
                        <label for="other">Примечание:</label>
                        <input id="other" class="form-control" name="other" type="text" value="{{$Mytrip->comment}}">
                    </div>
                    <div class="form-group">
                        <label for="pub">Опубликован:</label>


                        <input id='pub' type='checkbox' value='1' name='pub' checked>


                    </div>

                    <button id="button"  class="btn btn-success" type="submit">Изменить</button>

                    </form>
                </div>
            </div>
        </div>

    @endsection
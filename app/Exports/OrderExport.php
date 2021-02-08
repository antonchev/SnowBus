<?php

namespace App\Exports;

use App\Order;
use App\Trip;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithHeadings;


class OrderExport implements FromCollection, WithHeadings , ShouldAutoSize, WithMapping
{

    public function __construct(int $id)
    {
        $this->id = $id;
    }
    /**
    * @return \Illuminate\Support\Collection
    */


    public function map($order): array
    {
        return [

            $order->id,
            $order->id_num,
            $order->trips->title,
            $order->trips->date,
            $order->f_Name,
            $order->l_Name,
            $order->d_phone,
            $order->stuf,
            $order->fSize,
            $order->foot,
            $order->ekip,
            $order->teacher,
            $order->about,
            $order->report,
            $order->pay,
            $order->created_at,
            $order->updated_at,

        ];
    }

    public function collection()

    {
        ##dd(Trip::find(12)->orders);


       ## dd(  $order = order::where('trip', $this->id)->with('trips')->get());
      return  $order = order::where('trip', $this->id)->with('trips')->get();



        ##$data_array[] = array('id','id заказа','выезд','Имя','Фамилия','телефон','экипировка','размеры','нога','доп','инструктор','откуда узнали','пожелание','оплата','создано','изменено');





    ##  dd(  order::where('trip', $this->id)
       ##     ->with('trips')
        ##  ->get());
        ## return order::where('trip', $this->id)
        ##      ->with('trips')
        ##    ->get();
        ##dd( Trip::find(11)->orders->pluck('trip'));

        ## dd( Order::with('Trips')->where('trip', '=',$this->id )->get());

    }

    public function headings(): array
    {
        return [
            'id',
            'id заказа',
            'выезд',
            'дата',
            'Имя',
            'Фамилия',
            'телефон',
            'экипировка',
            'размеры',
            'нога',
            'доп',
            'инструктор',
            'откуда узнали',
            'пожелания',
            'оплата',
            'создан',
            'изменен',

        ];
    }
}

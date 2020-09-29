<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        //$url = $request->url();

         //dd($url);

        //$article = Article::orderBy('id')->get(array('id','title','short_description'));

        //dd($article);

        return view('home',['currenthome' => 'current',
        					'title'       => 'Такси Регион 42.Осинники,Калтан ,Кемеровская область',
        					'classpage'   => 'homepage',
                            'url'         => 'home',
                            //'article'     => $article,
                            'description' => 'Сервис заказа такси «Регион42». Заказать такси: (38471) 5-15-00',
                            'keywords'    =>'такси,такси осинники,такси в осинниках,заказ такси онлайн, заказ такси, заказать такси, вызвать такси, вызов такси, осинники,грузоперевозки осинники,грузоперевозки в осинники'
        					]);
    }
}

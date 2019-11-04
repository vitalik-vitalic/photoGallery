<?php
/**
 * Created by PhpStorm.
 * User: teacher
 * Date: 10.06.2019
 * Time: 18:29
 */

namespace App\Providers\ViewComposers;

use Illuminate\Contracts\View\View; //класс который создает шаблон
use App\photos;
use App\Maintext;

class SiteComposer
{
    public function compose(View $view){
        $name = 'SiteName';
        // Выборка footer ссылок из базы данных
        $s_objs = Maintext::where('status','footer')->get();
        $menuAside_objs = Maintext::where('status','menuAside')->orderBy('img')->get();
        $view->with('menuAside_objs',$menuAside_objs);
        $view->with('s_objs',$s_objs);
        $view->with('name',$name);
    }
}
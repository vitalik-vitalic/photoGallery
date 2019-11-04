<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\User; //подключение модели

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        User::creating(function ($data){
            //dd($data);
            // Заголовки письма
            $email = $data->email;
            $theme = 'Message from gallery';
            $body = 'Thank you for your registration<br>Your current login is '.$data->name;
            $headers = "Content-Type: text/plain; charset = utf-8 \r \n";
            // отправка электронной почты
            mail($email, $theme, $body, $headers);
        });
    }
}

<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\ServiceProvider;

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
        VerifyEmail::toMailUsing(function ($notifiable, $url) {
            return (new MailMessage)
                ->level('Регистрация аккаунта l2high.top')
                ->greeting('l2high.top')
                ->salutation('Рейтинг серверов linage2')
                ->subject('Подтверждение email')
                ->line('Нажмите для подтверждения.')
                ->action('Подтвердить', $url);
        });
    }
}

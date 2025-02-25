<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo($request)
    {
        // Test için bir log bilgisi ekliyoruz
        \Log::info('Authenticate Middleware: Kullanıcı giriş yapmadı.');

        // Eğer kullanıcı JSON istemiyorsa login sayfasına yönlendir
        if (!$request->expectsJson()) {
            return '/login'; // Giriş yapılmamışsa yönlendirme yapılacak rota
        }
    }


}

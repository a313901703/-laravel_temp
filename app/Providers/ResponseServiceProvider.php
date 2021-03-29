<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class ResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //error
        Response::macro('fail', function ($code = 200,  $message='unknow error') {
            $data = [
                'status_code' => $code,
                'message' => $message,
            ];
            return Response::json($data);
        });

        //正常返回
        Response::macro('success', function ($data,$code = 200, $message = "success") {
            $data = [
                'status_code' => $code,
                'message' => 'success',
                'data' => $data,
            ];
            return Response::json($data);
        });
    }
}
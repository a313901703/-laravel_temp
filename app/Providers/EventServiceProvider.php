<?php

namespace App\Providers;

use App\Events\UserRegistered;
use App\Listeners\IssueCoupon;
use App\Events\CheckMissingCoupon;
use App\Listeners\SendCouponToOldUser;
use App\Events\KioskConsumableStatusUpdate;
use App\Listeners\KioskProductStatusUpdate;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events\OrderPayment;
use App\Listeners\ReferCoupon;
use App\Listeners\BuyGiveCoupon;
use App\Events\KioskConsumableQuantityUpdate;
use App\Listeners\SendEmailToKioskManager;


class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        UserRegistered::class => [
            IssueCoupon::class,
        ],
        OrderPayment::class => [
            ReferCoupon::class,
            BuyGiveCoupon::class
        ],
        CheckMissingCoupon::class => [
            SendCouponToOldUser::class
        ],
        KioskConsumableStatusUpdate::class => [
            KioskProductStatusUpdate::class,
        ],
        KioskConsumableQuantityUpdate::class => [
            SendEmailToKioskManager::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}

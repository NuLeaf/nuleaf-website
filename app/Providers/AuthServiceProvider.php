<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

use App\Event;
use App\Policies\EventPolicy;
use App\Policies\SteminarPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
      Event::class    => EventPolicy::class,
      Steminar::class => SteminarPolicy::class
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
      // Trick to allow gate methods to work without supplying a model.
      // (ie. showAllEvents)
      foreach (get_class_methods(new EventPolicy) as $method)
      {
        $gate->define($method, "App\Policies\EventPolicy@{$method}");
      }

      foreach (get_class_methods(new SteminarPolicy) as $method)
      {
        $gate->define($method, "App\Policies\SteminarPolicy@{$method}");
      }

      $this->registerPolicies($gate);
    }
}

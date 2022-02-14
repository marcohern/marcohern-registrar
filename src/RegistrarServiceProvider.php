<?php

namespace Marcohern\Registrar;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class RegistrarServiceProvider extends ServiceProvider {
  public function boot() {
    $this->registerViews();
    $this->registerRoutes();
  }

  public function register() {
    
  }

  protected function registerViews() {
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'registrar');
  }

  protected function registerRoutes() {
    Route::group([], function() {
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    });
  }
}
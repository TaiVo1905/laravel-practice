<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Type_Products;
use App\Models\Cart;
use Illuminate\Support\Facades\Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        view()->composer("header", function ($view) {
            $type_product = Type_Products::all(); 
            $view->with("type_product", $type_product);
        });

         view()->composer('header', function ($view) {
                        if (Session('cart')) {										
                            $oldCart = Session::get('cart');					
                            $cart = new Cart($oldCart);										
                            $view->with(['cart' => Session::get('cart'), 										
                                                    'product_cart' => $cart->items, 										
                                                    'totalPrice' => $cart->totalPrice, 										
                                                    'totalQty' => $cart->totalQty										
                                                    ]);										
                                                    }										
                    });										
            
    }
}

<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\ServiceProvider;
use App\ProductType;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return voids
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
        view()->composer('page.header',function($view){
            $product_type = ProductType::all();

            $view->with('product_type',$product_type);
        });
        view()-> composer(['page.header','page.order'],function($view){
            if (Session('cart')){
                $oldCart = Session::get('cart');
                $cart = new Cart($oldCart);

                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items,
                    'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });
    }
}

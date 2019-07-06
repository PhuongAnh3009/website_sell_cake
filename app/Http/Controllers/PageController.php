<?php

namespace App\Http\Controllers;

use App\BillDetail;
use Illuminate\Http\Request;

use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\Http\Requests\CheckoutRequest;

class PageController extends Controller
{

    public function getIndex()
    {
        $slide = Slide::all();
//        return view("page.main-page",['slide'=>$slide]);
        $new_product = Product::where('new', 1) -> paginate(4,['*'],'pag');
        $promotion_product  = Product::where('promotion_price','<>',0)->paginate(8);
//        $product_type = ProductType::all();
        return view("page.main-page",compact('slide', 'new_product','promotion_product','product_type'));
    }

    public function getProductType($types) {
        $type_of_product = Product::where('id_type',$types)->get();
        $other_product = Product::where('id_type','<>',$types)->paginate(3);
        $kind= ProductType::all();
        $kind_of_product = ProductType::where('id',$types)->first();

        return view("page.product-type", compact('type_of_product','other_product','kind','kind_of_product'));
    }

    public function getDetail(Request $request)
    {
        $product = Product::where('id',$request->id)->first();
        $similar_product = Product::where('id_type',$product->id_type)->paginate(6);
        return view("page.product-detail", compact('product','similar_product'));
    }

    public function getContact()
    {
        return view("page.contact");
    }

    public function getAbout()
    {
        return view("page.about");
    }

    public function getAddToCart(Request $request,$id) {
        $product = Product::find($id);
        $oldCart  = Session('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect() -> back();
    }

    public function getDelFromCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = new Cart($oldCart);
        $cart ->removeItem(($id));
        if(count($cart->items)>0) {
            Session::put('cart',$cart);
        }
        else {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout() {
        return view('page.order');
    }

    public function postCheckout(CheckoutRequest $request) {
        $cart = Session::get('cart');

         $customer = new Customer;
         $customer->name = $request->name;
         $customer->gender = $request->gender;
         $customer->email = $request->email;
         $customer->address = $request->address;
         $customer->phone_number = $request->phone;
         $customer->note = $request->note;
         $customer->save();

         $bill = new Bill;
         $bill->id_customer = $customer->id;
         $bill->date_order = date('Y-m-d');
         $bill->total = $cart->totalPrice;
         $bill->payment = $request->payment;
         $bill->note = $request->note;
         $bill->save();

        foreach ($cart->items as $key => $value) {
            $bill_detail = new BillDetail;
            $bill_detail->id_bill = $bill->id;
            $bill_detail->id_product = $key;
            $bill_detail->quantity = $value['qty'];
            $bill_detail->unit_price = ($value['price']/$value['qty']);
            $bill_detail->save();
        }
        Session::forget('cart');
        return redirect()->back()->with('alert','Order successful!');



    }
}




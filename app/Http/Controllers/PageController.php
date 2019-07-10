<?php

namespace App\Http\Controllers;

use App\BillDetail;
use App\Http\Requests\SignupRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Slide;
use App\Product;
use App\ProductType;
use App\Cart;
use Session;
use App\Customer;
use App\Bill;
use App\Http\Requests\CheckoutRequest;
use App\User;
use Auth;

class PageController extends Controller
{

    public function index()
    {
        $slide = Slide::all();
//        return view("page.main-page",['slide'=>$slide]);
        $new_product = Product::where('new', 1)->paginate(4, ['*'], 'pag');
        $promotion_product = Product::where('promotion_price', '<>', 0)->paginate(8);
//        $product_type = ProductType::all();
        return view("page.main-page", compact('slide', 'new_product', 'promotion_product', 'product_type'));
    }

    public function getProductType($types)
    {
        $type_of_product = Product::where('id_type', $types)->get();
        $other_product = Product::where('id_type', '<>', $types)->paginate(3);
        $kind = ProductType::all();
        $kind_of_product = ProductType::where('id', $types)->first();

        return view("page.product-type", compact('type_of_product', 'other_product', 'kind', 'kind_of_product'));
    }

    public function getDetail(Request $request)
    {
        $product = Product::where('id', $request->id)->first();
        $similar_product = Product::where('id_type', $product->id_type)->paginate(6);
        return view("page.product-detail", compact('product', 'similar_product'));
    }

    public function getContact()
    {
        return view("page.contact");
    }

    public function getAbout()
    {
        return view("page.about");
    }

    public function getLogin()
    {
        return view('page.login');
    }

    public function getSignup()
    {
        return view('page.sign-up');
    }

    public function postSignup(SignupRequest $request)
    {
        $user = new User();
        $user->full_name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 0;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();
        return redirect()->back()->with('successful', 'Sign up account successful');
    }

    public function postLogin(Request $request)
    {
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6|max:20',
            ],
            [
                'email.required' => 'Fill your email',
                'email.email' => 'Wrong form of email',
                'password.required' => 'Fill your password',
                'password.min' => 'Password at lease must be 6 characters',
                'password.max' => 'Password not over 20 characters'
            ]
        );
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentials)) {
            return redirect('index')->with(['flag' => 'success', 'message' => 'Login successful']);
        } else {
//            redirect()->back()->with(['flag' => 'danger', 'message' => 'Login is not successful']);
            return redirect('login') ->with(['flag'=>'danger','message'=>'Login fail']);
        }
    }

    public function postSignout() {
        Auth::logout();
        return redirect()->back();
    }

//    public function postAddproduct() {
//        Auth::add-product();
//        return redirect()->back();
//    }

public function getSearch(Request $request) {
        $product = Product::where('name','like','%'.$request->key.'%') -> orWhere('unit_price',$request->key) -> get();
        return view('page.search',compact('product'));
}
}

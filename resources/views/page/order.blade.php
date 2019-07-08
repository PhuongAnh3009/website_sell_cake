@extends('master')
@section('content')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    <title> <h2> Đặt hàng </h2> </title>--}}
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
    <link rel="stylesheet" title="style" href="assets/dest/css/style.css">
    <link rel="stylesheet" href="assets/dest/css/animate.css">
    <link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
</head>
<body>

{{--<div class="inner-header">--}}
{{--    <div class="container">--}}
{{--        <div class="pull-left">--}}
{{--            <h6 class="inner-title"></h6>--}}
{{--        </div>--}}
{{--        <div class="pull-right">--}}
{{--            <div class="beta-breadcrumb">--}}
{{--                <a href="index.html"></a> / <span></span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="clearfix"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="container">
    <div id="content">

        <form action="{{route('order')}}" method="post" class="beta-form-checkout">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="row">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(Session::has('alert'))
                    <div><p class="alert alert-success" style="font-size: 30px">{{Session::get('alert')}}</p></div>
                @endif
                @if(Session::has('notice'))
                    <div><p class="alert alert-danger" style="font-size: 30px">{{Session::get('notice')}}</p></div>
                @endif
                <div class="col-sm-6">
                    <h2> Order </h2>
                    <div class="space20"></div>
                    <div class="form-block">
                        <label for="name">Full name*</label>
                        <input type="text" name="name" id="name" placeholder="Full name">
                    </div>
                    <div class="form-block">
                        <label> Sexual </label>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="male"
                               checked="checked" style="width: 10%"><span style="margin-right: 10%"> Male </span>
                        <input id="gender" type="radio" class="input-radio" name="gender" value="female"
                               style="width: 10%"><span> Female </span>

                    </div>

                    <div class="form-block">
                        <label for="email">Email*</label>
                        <input type="email" id="email" name="email" placeholder="expample@gmail.com">
                    </div>

                    <div class="form-block">
                        <label for="adress"> Address* </label>
                        <input type="text" id="adress" name="address" placeholder="Street Address">
                    </div>


                    <div class="form-block">
                        <label for="phone">Phone number*</label>
                        <input type="text" name="phone" id="phone">
                    </div>

                    <div class="form-block">
                        <label for="notes"> Notes </label>
                        <textarea id="notes" name="note"></textarea>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="your-order">
                        <div class="your-order-head"><h5> Your ordered </h5></div>
                        <div class="your-order-body" style="padding: 0px 10px">
                            <div class="your-order-item">
                                <div>
                                @if(Session::has('cart'))
                                    @foreach($product_cart as $pc)
                                        <!--  one item	 -->
                                            <div class="media">
                                                <img width="25%" src="source/image/product/{{$pc['item']['image']}}"
                                                     alt="" class="pull-left">
                                                <div class="media-body">
                                                    <p class="font-large">{{$pc['item']['name']}}</p>
                                                    <span class="color-gray your-order-info"> Price: {{number_format($pc['price'])}} VND </span>
                                                    <span
                                                        class="color-gray your-order-info"> Quantity: {{$pc['qty']}}</span>
                                                </div>
                                            </div>
                                            <!-- end one item -->
                                        @endforeach
                                    @endif
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="your-order-item">
                                <div class="pull-left"><p class="your-order-f18">Total:</p></div>
                                <div class="pull-right"><h5 style="margin-top: 5px"
                                                            class="color-black">@if(Session::has('cart')){{number_format($totalPrice)}} @else
                                            0 @endif VND</h5></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="your-order-head"><h5> Payment method: </h5></div>

                        <div class="your-order-body">
                            <ul class="payment_methods methods">
                                <li class="payment_method_bacs">
                                    <input id="payment_method_bacs" type="radio" class="input-radio" name="payment"
                                           value="COD" checked="checked" data-order_button_text="">
                                    <label for="payment_method_bacs">Thanh toán khi nhận hàng </label>
                                    <div class="payment_box payment_method_bacs" style="display: block;">
                                        Shop will send products to your address soon, please check carefully product
                                        then pay by cash for deliverer
                                        Cửa hàng sẽ gửi hàng đến địa chỉ của bạn, bạn xem hàng rồi thanh toán tiền cho
                                        nhân viên giao hàng
                                    </div>
                                </li>

                                <li class="payment_method_cheque">
                                    <input id="payment_method_cheque" type="radio" class="input-radio" name="payment"
                                           value="ATM" data-order_button_text="">
                                    <label for="payment_method_cheque">Chuyển khoản </label>
                                    <div class="payment_box payment_method_cheque" style="display: none;">
                                        Payment via interbank transfer:
                                        <br>- Account ABBank: 0131 0163 15014
                                        <br>- Name: Ngo Phuong Anh
                                        <br>- An Binh Bank, Dong Da branch
                                    </div>
                                </li>

                            </ul>
                        </div>

                        <div class="text-center">
                            <button type="submit"><a class="beta-btn primary">Đặt hàng <i
                                        class="fa fa-chevron-right"></i></a></button>
                        </div>
                    </div> <!-- .your-order -->
                </div>
            </div>

    </div>
    </form>
</div> <!-- #content -->
</div> <!-- .container -->

</body>
</html>
@endsection


<div id="header">
    <div class="header-top">
        <div class="container">
            <div class="pull-left auto-width-left">
                <ul class="top-menu menu-beta l-inline">
                    <li><a href=""><i class="fa fa-home"></i> Address: Intracom Building, 82 Dich Vong Hau str., Cau Giay dis., Ha Noi </a></li>
                    <li><a href=""><i class="fa fa-phone"></i> Hotline: 0988 888 888 </a></li>
                </ul>
            </div>
            <div class="pull-right auto-width-right">
                <ul class="top-details menu-beta l-inline">
                    <li><a href="#"><i class="fa fa-user"></i> Account </a></li>
                    <li><a href="#"> Sign in </a></li>
                    <li><a href="#"> Sign up </a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-top -->
    <div class="header-body">
        <div class="container beta-relative">
            <div class="pull-left">
                <a href="http://localhost/index" id="logo"><img src="source/assets/dest/images/logo-cake.png" width="200px" alt=""></a>
            </div>
            <div class="pull-right beta-components space-left ov">
                <div class="space10">&nbsp;</div>
                <div class="beta-comp">
                    <form role="search" method="get" id="searchform" action="/">
                        <input type="text" value="" name="s" id="s" placeholder="Insert word..." />
                        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
                    </form>
                </div>

                <div class="beta-comp">
                    @if(Session::has('cart'))
                    <div class="cart">
                        <div class="beta-select"><i class="fa fa-shopping-cart"></i> Basket
                            (@if(Session::has('cart')){{Session('cart')->totalQty}} @else None @endif)
                            <i class="fa fa-chevron-down"></i></div>
                        <div class="beta-dropdown cart-body">

                         @foreach($product_cart as $pc)
                            <div class="cart-item">
{{--                                <a class="cart-item-delete" href="{{route('del_basket',$pc['item']['id'])}}"> <i class="fa fa-times"></i></a>--}}
                                <a class="cart-item-delete" href="javascript:void(0)" link="{{route('del_basket',$pc['item']['id'])}}" data-quality={{$pc['qty']}} data-price={{$pc['item']['promotion_price']}}> <i class="fa fa-times"></i></a>

                                <div class="media">
                                    <a class="pull-left" href="#"><img src="source/image/product/{{$pc['item']['image']}}" alt=""></a>
                                    <div class="media-body">
                                        <span class="cart-item-title">{{$pc['item']['name']}}</span>
                                        <span class="cart-item-amount" >{{$pc['qty']}}*<span>
                                                @if($pc['item']['promotion_price'] == 0){{number_format($pc['item']['unit_price'])}}
                                                @else {{number_format($pc['item']['promotion_price'])}}
                                                @endif
                                            </span> VND </span>
                                    </div>
                                </div>
                            </div>
                         @endforeach
                            <div class="cart-caption">
                                <div class="cart-total text-right"> Total: <span class="cart-total-value" data-total-value={{Session('cart')->totalPrice}}>{{number_format(Session('cart')->totalPrice)}} VND </span>
                                </div>

{{--                                <div class="cart-total text-right"> Total: <span class="cart-total-value">--}}
{{--                                        @if($pc['item']['promotion_price'] == 0){{number_format($pc['item']['unit_price'])}}--}}
{{--                                        @else {{number_format($pc['item']['promotion_price'])}}--}}
{{--                                        @endif--}}
{{--                                    </span> VND </div>--}}
                                <div class="clearfix"></div>
                                <div class="center">
                                    <div class="space10">&nbsp;</div>
                                    <a href="{{route('order')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div> <!-- .cart -->
                    @else
                        <div class="cart">
                            <div class="beta-select"> <i class="fa fa-shopping-cart"></i> Basket (None)
                                <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="beta-dropdown cart-body">
                                <div class="cart-caption">
                                    <span> None </span>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="clearfix"></div>
        </div> <!-- .container -->
    </div> <!-- .header-body -->
    <div class="header-bottom" style="background-color: #0277b8;">
        <div class="container">
            <a class="visible-xs beta-menu-toggle pull-right" href="#">
                <span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
            <div class="visible-xs clearfix"></div>
            <nav class="main-menu">
                <ul class="l-inline ov">
                    <li><a href="{{route('main-page')}}"> Main page </a></li>
                    <li><a href="{{route('product_type',1)}}"> Products </a>
                        <ul class="sub-menu">
                            @foreach($product_type as $type)
                            <li><a href="{{route('product_type',$type->id)}}"> {{$type->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li><a href="{{route('about')}}"> Introduce </a></li>
                    <li><a href="{{route('contact')}}"> Contact </a></li>
                </ul>
                <div class="clearfix"></div>
            </nav>
        </div> <!-- .container -->
    </div> <!-- .header-bottom -->
</div> <!-- #header -->

@extends('master')
@section('content')

<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title"> Product {{$kind_of_product->name}}</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('main-page')}}">Home</a> / <span> Product</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="main-content">
            <div class="space60">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <ul class="aside-menu">
                        @foreach($kind as $k)
                            <li><a href="{{route('product_type',$k->id)}}">{{$k->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-sm-9">
                    <div class="beta-products-list">
                        <h4>New Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left"> </p>
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            @foreach($type_of_product as $top)
                            <div class="col-sm-4" style="margin-bottom: 10px">
                                <div class="single-item">
                                    @if($top->promotion_price!=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale"> Sale </div> </div>
                                    @endif
                                    <div class="single-item-header" style="margin-bottom: 15px">
                                        <a href="{{route('product_detail',$top->id)}}"><img src="source/image/product/{{$top->image}}" alt="" height="230px"></a>
                                    </div>
                                    <div class="single-item-body">
                                        <p class="single-item-title" style="margin-bottom: 5px">{{$top->name}}</p>
                                        <p class="single-item-price" style="margin-bottom: 10px">
                                            @if($top->promotion_price != 0)
                                            <span class="flash-del">{{number_format($top->unit_price)}} VND </span>
                                            <span class="flash-sale">{{number_format($top->promotion_price)}} VND </span>
                                            @else
                                            <span>{{number_format($top->unit_price)}} VND </span>
                                            @endif
                                        </p>
                                    </div>
                                    <div class="single-item-caption">
                                        <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                        <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div> <!-- .beta-products-list -->

                    <div class="space50">&nbsp;</div>

                    <div class="beta-products-list">
                        <h4>Other Products</h4>
                        <div class="beta-products-details">
                            <p class="pull-left">Finded {{count($other_product)}} products </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="row">
                            @foreach($other_product as $op)
                                <div class="col-sm-4">
                                    <div class="single-item">
                                        @if($op->promotion_price!=0)
                                            <div class="ribbon-wrapper"><div class="ribbon sale"> Sale </div> </div>
                                        @endif
                                        <div class="single-item-header">
                                            <a href="product.html"><img src="source/image/product/{{$op->image}}" alt="" height="230px"></a>
                                        </div>
                                        <div class="single-item-body">
                                            <p class="single-item-title" style="margin-top: -5px">{{$op->name}}</p>
                                            <p class="single-item-price" style="margin-bottom: 10px">
                                                @if($op->promotion_price != 0)
                                                    <span class="flash-del">{{number_format($op->unit_price)}} VND </span>
                                                    <span class="flash-sale">{{number_format($op->promotion_price)}} VND </span>
                                                @else
                                                    <span>{{number_format($op->unit_price)}} VND </span>
                                                @endif
                                            </p>
                                        </div>
                                        <div class="single-item-caption" style="margin-bottom: 8px">
                                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="row">{{$other_product->links()}}</div>
                        <div class="space40">&nbsp;</div>

                    </div> <!-- .beta-products-list -->
                </div>
            </div> <!-- end section with sidebar and main content -->


        </div> <!-- .main-content -->
    </div> <!-- #content -->
</div> <!-- .container -->

@endsection

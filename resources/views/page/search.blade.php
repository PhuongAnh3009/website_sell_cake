@extends('master')
@section('content')
    <div class="container">
        <div id="content" class="space-top-none">
            <div class="main-content">
                <div class="space60">&nbsp;</div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="beta-products-list">
                            <h4> Search </h4>
                            <div class="beta-products-details">
                                <p class="pull-left"> Finded {{count($product)}} products</p>
                                <div class="clearfix"></div>
                            </div>
                            <div class="row">
                                @foreach($product as $new)
                                    <div class="col-sm-3">
                                        <div class="single-item">
                                            @if ($new->promotion_price!=0)
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon sale">Sale</div>
                                                </div>
                                            @endif
                                            <div class="single-item-header">
                                                <a href="{{route('product_detail', $new->id)}}"><img
                                                        src="source/image/product/{{$new->image}}" alt=""
                                                        height="250px"></a>
                                            </div>
                                            <div class="single-item-body">
                                                <p class="single-item-title"> {{$new->name}} </p>
                                                <p class="single-item-price" style="margin-bottom: 10px">
                                                    @if($new->promotion_price==0)
                                                        <span
                                                            class="flash-sale">{{number_format($new->unit_price)}} VND </span>
                                                    @else
                                                        <span
                                                            class="flash-del">{{number_format($new->unit_price)}} VND </span>
                                                        <span class="flash-sale">{{number_format($new->promotion_price)}} VND </span>
                                                    @endif
                                                </p>
                                            </div>

                                            <div class="single-item-caption" style="margin-bottom: 10px">
                                                <a class="add-to-cart pull-left"
                                                   href="{{route('add_basket',$new->id)}}"><i
                                                        class="fa fa-shopping-cart"></i></a>
                                                <a class="beta-btn primary"
                                                   href="{{route('product_detail', $new->id)}}">Details <i
                                                        class="fa fa-chevron-right"></i></a>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div> <!-- .beta-products-list -->
                    </div> <!-- .main-content -->
                </div> <!-- #content -->
            </div> <!-- .container -->
        </div>
    </div>
@endsection

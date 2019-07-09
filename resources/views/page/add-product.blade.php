{{--@extends('master')--}}
{{--@section('content')--}}

{{--    <div class="inner-header">--}}
{{--        <div class="container">--}}
{{--            <div class="pull-right">--}}
{{--                <div class="beta-breadcrumb">--}}
{{--                    <a href="index.html">Home</a> / <span>Add products</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="clearfix"></div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container">--}}
{{--        <div id="content">--}}

{{--            <form action="{{route('signup')}}" method="post" class="beta-form-checkout">--}}
{{--                <input type="hidden" name="_token" value="{{csrf_token()}}">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-3"></div>--}}
{{--                    @if(count($errors)>0)--}}
{{--                        <div class="alert alert-danger">--}}
{{--                            @foreach($errors->all() as $err)--}}
{{--                                {{$err}}--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--                    @if(Session::has('successful'))--}}
{{--                        <div class="alert alert-success">{{Session::get('successful')}}</div>--}}
{{--                    @endif--}}
{{--                    <div class="col-sm-6">--}}
{{--                        <h4> Sign up </h4>--}}
{{--                        <div class="space20">&nbsp;</div>--}}

{{--                        <div class="form-block">--}}
{{--                            <label for="product"> Products </label>--}}
{{--                            <input type="text" name="product" id="product" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-block">--}}
{{--                            <label for="image"> Image </label>--}}
{{--                            <input type="file" name="image" id="image" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-block">--}}
{{--                            <label for="price"> Price </label>--}}
{{--                            <input type="number" name="price" id="price" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-block">--}}
{{--                            <label for="quantity"> Quantity </label>--}}
{{--                            <input type="number" name="quantity" id="quantity" required>--}}
{{--                        </div>--}}

{{--                        <div class="form-block">--}}
{{--                            <button type="submit" class="btn btn-primary"> Add Product </button>--}}
{{--                        </div>--}}

{{--                    </div>--}}
{{--                    <div class="col-sm-3"></div>--}}
{{--                </div>--}}
{{--            </form>--}}
{{--        </div> <!-- #content -->--}}
{{--    </div> <!-- .container -->--}}

{{--@endsection--}}

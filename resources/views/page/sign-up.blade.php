@extends('master')
@section('content')

    <div class="inner-header">
        <div class="container">
            <div class="pull-right">
                <div class="beta-breadcrumb">
                    <a href="index.html">Home</a> / <span>Sign up</span>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>

    <div class="container">
        <div id="content">

            <form action="{{route('signup')}}" method="post" class="beta-form-checkout">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="row">
                    <div class="col-sm-3"></div>
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                            @endforeach
                        </div>
                    @endif
                    @if(Session::has('successful'))
                        <div class="alert alert-success">{{Session::get('successful')}}</div>
                    @endif
                    <div class="col-sm-6">
                        <h4> Sign up </h4>
                        <div class="space20">&nbsp;</div>

                        <div class="form-block">
                            <label for="email"> Email address* </label>
                            <input type="email" name="email" id="email" required>
                        </div>

                        <div class="form-block">
                            <label for="your_last_name"> Fullname* </label>
                            <input type="text" name="fullname" id="your_last_name" required>
                        </div>

                        <div class="form-block">
                            <label for="adress"> Address* </label>
                            <input type="text" name="address" id="adress" value="" required>
                        </div>

                        <div class="form-block">
                            <label for="phone"> Phone* </label>
                            <input type="number" name="phone" id="phone" required>
                        </div>

                        <div class="form-block">
                            <label for="password"> Password* </label>
                            <input type="password" name="password" id="phone" required>
                        </div>
                        <div class="form-block">
                            <label for="re_password"> Re password* </label>
                            <input type="password" name="re_password" id="phone" required>
                        </div>

                        <div class="form-block">
                            <button type="submit" class="btn btn-primary"> Register</button>
                        </div>

                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
        </div> <!-- #content -->
    </div> <!-- .container -->

@endsection

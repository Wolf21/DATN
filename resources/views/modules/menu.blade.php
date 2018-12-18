<style>
    .custom-active {
        color: #FFFFFF !important;
        background-color: #2c3e50 !important;
    }
</style>

<!-- main menu  navbar -->
<nav class="navbar navbar-default navbar-top" role="navigation" id="main-Nav"
     style="background-color: #16a085;margin-bottom: 5px;font-size: 13px;">
    <div class="container">
        <div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <span class="visible-xs pull-left"
                      style="font-size:30px;cursor:pointer; padding-left: 10px; color: #ecf0f1;" onclick="openNav()">&#9776; </span>
                <span class="visible-xs pull-right"
                      style="font-size:20px;cursor:pointer; padding-right: 10px; padding-top: 8px; color: #FFFFFF;">
              <!-- Authentication Links -->
                    @if (Auth::guest())
                        <a class="top-a" href="{{ url('/') }}"> Home </a>  &nbsp;
                        <a href="#" data-toggle="modal" data-target="#login-modal"
                           style="color:#e67e22;"> Đăng nhập </a>
                    @else
                        <a class="top-a" href="{{ url('/user') }}"
                           style="color:#c0392b;"><strong>{{Auth::user()->name}}</strong></a>
                        <a class="top-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><small>Thoát</small></a>
                    @endif
                </span>
            </div>
        <?php
        $categories = \App\Models\Category::where('parent_id', 0)->get();
        ?>
        <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-mav-top">
                <ul class="nav navbar-nav">
                    <li class="main-page custom-active"><a href="{{url('')}}" title=""><b
                                class="glyphicon glyphicon-home"></b> TRANG CHỦ </a></li>
                    @foreach($categories as $category)
                        <li>
                            <a href="{{ url('') .'/'. $category->slug }}" class="top-menu"> {{ $category->name }} </a>
                        </li>
                    @endforeach
                </ul>
                <ul class="nav navbar-nav pull-right">
                    {{-- <li><a href="{{ url('/admin/home') }}">Vào trang quản trị</a></li> --}}
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown"> <span
                                class="glyphicon glyphicon-shopping-cart"><span
                                    class="badge">{{ Cart::count() }}</span></span> Giỏ Hàng <b class="caret"></b></a>
                        <ul class="dropdown-menu" style="right:0; left: auto; min-width: 350px;">
                            @if(Cart::count() !=0)
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>SL</th>
                                            <th>Tên <SPAN></SPAN></th>
                                            <th>Giá</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach(Cart::content() as $row)
                                            <tr>
                                                <td> {{$row->images}} <img class="card-img img-circle"
                                                                           src="{{url('uploads/products/'.$row->options->img)}}"
                                                                           alt="dell"></td>
                                                <td>{{$row->qty}}</td>
                                                <td>{{$row->name}}</td>
                                                <td>{{$row->price}} Vnd</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{url('/cart/')}}" type="button" class="btn btn-success"> Chi Tiết
                                        Giỏ Hàng </a>
                                    <a href="{{url('/cart/empty')}}" type="button"
                                       class="btn btn-danger pull-right"> Xóa </a>
                                </div>
                            @else
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                        <tr>
                                            <th>Ảnh</th>
                                            <th>SL</th>
                                            <th>Tên <SPAN></SPAN></th>
                                            <th>Giá</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <td colspan="3">Giỏ Hàng Trống</td>
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        </ul>
                    </li>
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div><!-- /.navbar-collapse -->
        </div> <!-- /row -->
    </div><!-- /container -->
</nav>    <!-- /main nav -->

{{-- loginform --}}
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Đăng nhập</h1><br>
            <form class="form-horizontal" role="form" method="POST" id="login-form" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Nhập địa chỉ Email"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" class="form-control"
                           placeholder="Nhập mật khẩu">
                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Ghi nhớ
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" name="login" class="btn btn-primary" value="Đăng nhập">
            </form>
            <div class="login-help">
                <a class="btn btn-link" href="{{url('/register')}}"> <strong style="color:red;"> Đăng ký </strong>
                </a> - <a class="btn btn-link" href="{{ url('/password/reset') }}">Bạn đã quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
        $(document).ready(function () {
            $('.top-menu').each(function (index, element){
                if (location.href === element.href) {
                    $(this).addClass('custom-active');
                    $('.main-page').removeClass('custom-active');
                }
            });
        });
    </script>
@stop

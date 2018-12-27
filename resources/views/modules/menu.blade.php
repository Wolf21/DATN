<style>
    .custom-active {
        color: #FFFFFF !important;
        background-color: #2c3e50 !important;
    }

    .input-search {
        height: 30px;
        width: 200px;
        padding: 10px;
    }

    .form-search {
        padding: 10px;
    }

    #search {
        margin-bottom: 4px;
        height: 30px;
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
                        <a href="{{ route('loginForm') }}"
                           style="color:#e67e22;"> Đăng nhập </a>
                    @else
                        <a class="top-a" href="{{ url('/user') }}"
                           style="color:#c0392b;"><strong>{{Auth::user()->name}}</strong></a>
                        <a class="top-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><small>Thoát</small></a>
                    @endif
                </span>
            </div>
        <?php
        $categories = \App\Models\Category::where('parent_id', 0)->where('id', '!=', 5)->get();
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
                    <li>
                        {{Form::open(['method' => 'GET', 'class' => 'form-search'])}}
                        <span class="input-icon align-middle">
                                <i class="ace-icon fa fa-search"></i>

                                <input name="key" type="text" class="input-search" placeholder="Nhập thông tin cần tìm..."/>
                            </span>
                        <button id="search" class="btn btn-sm" type="button">Tìm kiếm!</button>
                        {{Form::close()}}
                    </li>
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
                        <li><a href="{{ route('loginForm') }}">Đăng nhập</a></li>
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
@section('script')
    <script>
        $(document).ready(function () {
            $('.top-menu').each(function (index, element) {
                if (location.href === element.href) {
                    $(this).addClass('custom-active');
                    $('.main-page').removeClass('custom-active');
                }
            });
        });
    </script>
@stop

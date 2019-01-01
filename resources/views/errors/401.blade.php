@extends('layouts.main')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->

                <div class="error-container">
                    <div class="well">
                        <h1 class="grey lighter smaller">
                        <span class="blue bigger-125">
                            <i class="ace-icon fa fa-sitemap"></i>
                            401
                        </span>
                            Unauthorized !
                        </h1>

                        <hr/>
                        <h3 class="lighter smaller">Xin Lỗi bạn không có quyền truy cập!</h3>

                        <div>
                            {{Form::open(['url' => route('search'), 'method' => 'GET', 'class' => 'form-search','autocomplete' => 'off'])}}
                            <span class="input-icon align-middle">
                                <i class="ace-icon fa fa-search"></i>

                                <input name="key" type="text" class="search-query" placeholder="Nhập thông tin cần tìm..."/>
                            </span>
                            <button class="btn btn-sm" type="submit">Tìm kiếm!</button>
                            {{Form::close()}}

                            <div class="space"></div>
                            <h4 class="smaller">Hãy thử một trong các cách sau: </h4>

                            <ul>
                                <li>
                                    <i class="glyphicon glyphicon-hand-right"></i>
                                    Kiểm tra lại địa chỉ của bạn
                                </li>

                                <li>
                                    <i class="glyphicon glyphicon-hand-right"></i>
                                    Đọc hưỡng dẫn
                                </li>

                                <li>
                                    <i class="glyphicon glyphicon-hand-right"></i>
                                    Cho cúng tôi biết
                                </li>
                            </ul>
                        </div>

                        <hr/>
                        <div class="space"></div>

                        <div class="center">
                            <a href="{!!url('')!!}" class="btn btn-grey">
                                <i class="ace-icon fa fa-arrow-left"></i>
                                về trang chủ
                            </a>

                            <a href="" class="btn btn-primary">
                                <i class="ace-icon fa fa-tachometer"></i>
                                Liên hệ quản trị viên
                            </a>
                        </div>
                    </div>
                </div>

                <!-- PAGE CONTENT ENDS -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div>
@endsection

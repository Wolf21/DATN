@extends('back-end.layouts.master')
@section('content')
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Khách hàng</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Xem thông tin khách hàng</small>
                </h1>
            </div>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <ul>
                                    {!! Session::get('flash_massage') !!}
                                </ul>
                            </div>
                        @endif
                        <div>
                            <div class="form-group">
                                <label for="input-id">Tên Khách hàng</label>
                                <input type="text" name="txtName" id="inputTxtName" class="form-control"
                                       value="{!! old('txtCateName', isset($data['name']) ? $data['name'] : null)!!}"
                                       disabled="disabled">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Địa chỉ</label>
                                <input type="text" name="txt_addr" id="txt_addr" class="form-control"
                                       value="{!! old('txt_addr', isset($data['address']) ? $data['address'] : null)!!}"
                                       disabled="disabled">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Số Điện Thoại</label>
                                <input type="text" name="txt_phone" id="txt_phone" class="form-control"
                                       value="{!! old('txt_phone', isset($data['phone']) ? $data['phone'] : null)!!}"
                                       disabled="disabled">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Số Điện Thoại</label>
                                <input type="text" name="txt_email" id="txt_email" class="form-control"
                                       value="{!! old('email', isset($data['email']) ? $data['email'] : null)!!}"
                                       disabled="disabled">
                            </div>
                            <a href="{{ route('getUser') }}" class="btn btn-primary">Trở về</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    </div>    <!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection

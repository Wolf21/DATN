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
                <li class="active">Nhân Viên</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    <small>Cập nhật thông tin nhân viên</small>
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
                            {{ Form::open(['method' => 'POST', 'url' => route('getMember') .'/edit/'. $data['id']]) }}
                            {{ csrf_field() }}
                            <input type="hidden" name="user_id" value="{{$data['id'] ?? ''}}">
                            <div class="form-group">
                                <label for="input-id"> Chọn Quyền </label>
                                <select name="sltCate" id="inputSltCate" class="form-control">
                                    <option value="0">-- Quản trị --</option>
                                    <option value="1" selected="selected">-- Nhân viên --</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="input-id">Tên ĐăngNnhập</label>
                                <input type="text" name="user_name" id="inputName" class="form-control"
                                       value="{!! old('user_name', isset($data['user_name']) ? $data['user_name'] : null)!!}"
                                       required="required">
                            </div><div class="form-group">
                                <label for="input-id">Tên Nhân Viên</label>
                                <input type="text" name="name" id="inputTxtName" class="form-control"
                                       value="{!! old('name', isset($data['name']) ? $data['name'] : null)!!}"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Địa chỉ</label>
                                <input type="text" name="address" id="txt_addr" class="form-control"
                                       value="{!! old('address', isset($data['address']) ? $data['address'] : null)!!}"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Số Điện Thoại</label>
                                <input type="text" name="phone" id="txt_phone" class="form-control"
                                       value="{!! old('phone', isset($data['phone']) ? $data['phone'] : null)!!}"
                                       required="required">
                            </div>
                            <div class="form-group">
                                <label for="input-id">Email</label>
                                <input type="text" name="email" id="txt_email" class="form-control"
                                       value="{!! old('email', isset($data['email']) ? $data['email'] : null)!!}"
                                       required="required">
                            </div>
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/.row-->
    </div>    <!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection

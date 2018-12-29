@extends('back-end.layouts.master')
@section('content')
    <style>
        #search {
            margin-left: 15px;
            margin-bottom: 14px;
            height: 33px;
        }
    </style>
    <!-- main content - noi dung chinh trong chu -->
    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#">
                        <svg class="glyph stroked home">
                            <use xlink:href="#stroked-home"></use>
                        </svg>
                    </a></li>
                <li class="active">Sản phẩm</li>
            </ol>
        </div><!--/.row-->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-10">
                                <div class="form-group">
                                    <label for="inputLoai" class="col-sm-3 control-label"><strong> Chọn sản
                                            phẩm </strong></label>
                                    <div class="col-md-4">
                                        <select name="sltCate" id="inputLoai" class="form-control">
                                            <option value="0">CHỌN MỘT THƯƠNG HIỆU</option>
                                            @foreach($cat as $row)
                                                <option
                                                    value="{{ $row->id }}" {{$row->id == $loai ? 'selected' : ''}}>{{ $row->name }}</option>
                                            @endforeach
                                        </select>
                                        <script>
                                            document.getElementById("inputLoai").onchange = function () {
                                                if (this.selectedIndex !== 0) {
                                                    window.location.href = this.value;
                                                } else {
                                                    window.location.href = 'all';
                                                }
                                            };
                                        </script>
                                    </div>
                                    <form method="GET" class="col-md-3" style="display: -webkit-inline-box;">
                                        <input type="text" name="key" id="key" class="form-control" value="{{$key ?? ''}}"
                                               placeholder="Tìm sản phẩm...">
                                        <button id="search" class="btn btn-sm" type="submit">Tìm kiếm</button>
                                    </form>
                                </div>


                            </div>
                            <div class="col-md-2">
                                @if ($loai !='all')
                                    <a href="{{url('admin/product/'.$loai.'/add')}}" title="">
                                        <button type="button" class="btn btn-primary pull-right">Thêm Mới Sản Phẩm
                                        </button>
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
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
                                {{ Session::get('flash_massage') }}
                            </ul>
                        </div>
                    @endif
                    <div class="panel-body" style="font-size: 12px;">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th class="text-center">Hình ảnh</th>
                                    <th>Tên sản phẩm</th>
                                    <th style="width: 365px;">Tóm tắt chức năng</th>
                                    <th>Thương hiệu</th>
                                    <th>Giá bán</th>
                                    <th>Trạng thái</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$row->id}}</td>
                                        <td><img src="{{url('uploads/products/'.$row->images)}}" alt="iphone"
                                                 width="50" height="40"></td>
                                        <td>{{$row->name}}</td>
                                        <td>{{$row->intro}}</td>
                                        <td>{{$row->cat_name}}</td>
                                        <td>{{ number_format($row->price) }} đ</td>
                                        <td>
                                            @if($row->status ==1)
                                                <span style="color:blue;">Còn hàng</span>
                                            @else
                                                Tạm hết hàng
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('admin/product/edit/'.$row->id)}}" title="Sửa"><span
                                                    class="glyphicon glyphicon-edit">edit</span> </a>
                                            <a href="{{url('admin/product/delete/'.$row->id)}}" title="Xóa"
                                               onclick="return xacnhan('Xóa danh mục này ?')"><span
                                                    class="glyphicon glyphicon-remove">remove</span> </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $data->render() }}
                        @if (Session::has('flash_message'))
                            <div class="alert alert-success">
                                <ul>
                                    {{ Session::get('flash_message') }}
                                </ul>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>    <!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection

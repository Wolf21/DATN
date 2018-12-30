@extends('back-end.layouts.master')
<style>
    .edit-btn, .delete-btn {
        -webkit-appearance: button;
        cursor: pointer;
        text-transform: none;
        overflow: visible;
        margin: 0;
        font: inherit;
        padding: 1px 6px;
        border-width: 2px;
        border-style: outset;
    }
</style>
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
                <li class="active">Danh mục</li>
            </ol>
        </div><!--/.row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Danh sách danh mục sản phẩm
                        <a href="{{url('admin/category/add')}}" title="">
                            <button type="button" class="btn btn-primary pull-right">Thêm mới danh mục</button>
                        </a>
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
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên danh mục</th>
                                    <th>Danh mục cha</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ App\Helpers\CategoryHelper::getCatParentName($row->parent_id) }}</td>
                                        <td>
                                            <a href="{{ url('/admin/category/edit') .'/'. $row->id }}"
                                               class="btn btn-sm btn-info edit-btn">Sửa</a>
                                            <a href="{{ url('/admin/category/delete/') .'/'. $row->id }}"
                                               class="btn btn-sm btn-danger delete-btn">Xóa</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.row-->
    </div>    <!--/.main-->
    <!-- =====================================main content - noi dung chinh trong chu -->
@endsection
<script>

</script>

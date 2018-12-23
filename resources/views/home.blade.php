@extends('layouts.main')
@section('slide')
    @include('modules.slide')
@stop
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <!-- Danh mục điện thoại -->
        @foreach($mobile as $row)
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">
                <div class="thumbnail mobile">
                    <div class="bt">
                        <div class="image-m pull-left">
                            <img class="img-responsive" src="{{url('/uploads/products/'.$row->images)}}"
                                 alt="img responsive">
                        </div>
                        <div class="intro pull-right">
                            <h1>
                                <small class="title-mobile">{{$row->name}}</small>
                            </h1>
                            <li>{{$row->intro}}</li>
                            <span class="label label-info">Khuyễn mãi</span>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo1}}</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo2}}</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo3}}</li>
                        </div>
                    </div>
                    <div class="ct">
                        <?php
                        $category = \App\Models\Category::find($row->cat_id);
                        $parentCategorySlug = \App\Models\Category::find($category->id)->slug;?>
                        <a href="{{url($parentCategorySlug .'/'. $row->id .'-'. $row->slug)}}" title="Xem chi tiết">
                            <span class="label label-info">Ưu đãi khi mua</span>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo1}}</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo2}}</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> {{$row->promo3}}</li>
                            <span class="label label-warning">Cấu Hình Nổi bật</span>
                            <li><strong>CPU</strong> : <i> {{$row->cpu}}</i></li>
                            <li><strong>Màn Hình</strong> : <i>{{$row->screen}} </i></li>
                            <li><strong>Camera</strong> : Trước <i>{{$row->cam1}}</i> Sau <i>{{$row->cam2}} </i>
                            </li>
                            <li><strong>HĐH</strong> :<i> {{$row->os}} </i> <strong> Bộ nhớ trong</strong>
                                :<i> {{$row->storage}} </i></li>
                            <li><strong>Pin</strong> :<i> {{$row->pin}}</i></li>
                        </a>
                    </div>
                    <span class="btn label-warning"><strong>{{ number_format($row->price) }}</strong> VNĐ </span>
                    <a href="{{url('cart/add/'.$row->id)}}" class="btn btn-success pull-right add">Thêm vào
                        giỏ </a>
                </div>
            </div>
        @endforeach
        <div class="clearfix">

        </div>
        <!-- ===================================================================================/products ============================== -->
    {{ $mobile->render() }}
    <!-- Danh mục điện thoại -->
        <a href="#" target="_blank">
            <img src="/images/slides/thumbs/qc1.png" alt="" border="0" width="100%" height="250"/>
        </a>
    </div>
@endsection

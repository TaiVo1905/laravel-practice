@extends('master')
@section('content')
<div class="inner-header">
  <div class="container">
    <div class="pull-left">
      <h6 class="inner-title">Sản phẩm</h6>
    </div>
    <div class="pull-right">
      <div class="beta-breadcrumb font-large">
        <a href="index.html">Home</a> / <span>Sản phẩm</span>
      </div>
    </div>
    <div class="clearfix"></div>
  </div>
</div>
<div class="container">
<div class="row">																					
@foreach($products as $product)																					
<div class="col-sm-3">																					
<div class="single-item">																					
<div class="single-item-header">																					
<a href="detail/{{$product->id}}"><img width="200" height="200"																					
src="/source/image/product/{{$product->image}}" alt=""></a>																					
</div>																					
@if($product->promotion_price==!0)																					
<div class="ribbon-wrapper">																					
<div class="ribbon sale">Sale</div>																					
</div>																					
@endif																					
<div class="single-item-body">																					
<p class="single-item-title">{{$product->name}}</p>																					
<p class="single-item-price" style="text-align:left;font-size: 15px;">																					
@if($product->promotion_price==0)																					
																					
<span class="flash-sale">{{number_format($product->unit_price)}} Đồng</span>																					
@else																					
<span class="flash-del">{{number_format($product->unit_price)}} Đồng </span>																					
<span class="flash-sale">{{number_format($product->promotion_price)}} Đồng</span>																					
@endif																					
</p>																					
</div>																					
<div class="single-item-caption">																					
<a class="add-to-cart pull-left" href="{{route('themgiohang',$product->id)}}"><i																					
class="fa fa-shopping-cart"></i></a>																					
																					
<a class="add-to-wishlist" href="wishlist/add/{{$product->id}}"><i class="fa fa-heart"></i></a>																					
																					
<a class="beta-btn primary" href="detail/{{$product->id}}">Details <i																					
class="fa fa-chevron-right"></i></a>																					
<div class="clearfix"></div>																					
</div>																					
</div>																					
</div>																					
@endforeach
</div>
</div> <!-- .container -->
@endsection

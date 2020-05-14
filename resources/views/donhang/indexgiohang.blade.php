
 @extends('layout_sanpham.layoutchung')
@section('body')
@include('trangchu.header')
<div class="container" style="height: 100%">
<div class="tabbable"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs" style="text-align: center;">
    <li class="active" style="    width: 180px;"><a href="#tab1" data-toggle="tab">Tất cả</a></li>
    <li style="    width: 180px;"><a href="#tab2" data-toggle="tab">Chờ thanh toán</a></li>
     <li style="    width: 180px;" class="active"><a href="#tab3" data-toggle="tab">Chờ lấy hàng</a></li>
    <li style="    width: 180px;"><a href="#tab4" data-toggle="tab">Đang giao</a></li>
         <li style="    width: 180px;" class="active"><a href="#tab5" data-toggle="tab">Đã giao</a></li>
    <li style="    width: 180px;"><a href="#tab6" data-toggle="tab">Đã hủy</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="tab1">
      <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab2">
      <p>Howdy, I'm in Section 2.</p>
    </div>
    <div class="tab-pane active" id="tab3">
      <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab4">
      <p>Howdy, I'm in Section 2.</p>
    </div>
        <div class="tab-pane active" id="tab5">
      <p>I'm in Section 1.</p>
    </div>
    <div class="tab-pane" id="tab6">
      <p>Howdy, I'm in Section 2.</p>
    </div>
  </div>
</div>
</div>

        @include('trangchu.footer')
@stop()
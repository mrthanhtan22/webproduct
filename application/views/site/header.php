	        
<link type="text/css" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />	
<script type="text/javascript" src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>
<script type="text/javascript">
$(function() {
    $( "#text-search" ).autocomplete({
        source: "product/search_ac.html",
    });
});
</script>
<div class='top'><!-- The top -->
      <div id="logo"><!-- the logo -->
           <a  href="" title="Học lập trình website với PHP và MYSQL">
	           <img src="<?php echo public_url()?>/site/images/logo.jpg"  alt="Học lập trình website với PHP và MYSQL"/>
	         </a>
      </div><!-- End logo -->
       
       <!--  load gio hàng -->
      <div id="cart_expand" class="cart"> 
            <a href="gio-hang.html" class="cart_link">
               Giỏ hàng <span id="in_cart">0</span> sản phẩm
            </a> 
            <img alt="cart bnc" src="<?php echo public_url()?>/site/images/cart.png"> 
      </div>       
       <div id="search"><!-- the search -->
      		<form method="get" action="tim-kiem.html">
      		     				 <input type="text" id="text-search" name="key-search" value="" placeholder="Tìm kiếm sản phẩm..." class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
      			 <input type="submit" id="but" name="but" value="">
      		</form>
       </div><!-- End search -->
       
              
    <div class='clear'></div><!-- clear float --> 
</div><!-- End top -->			   <!-- End box-header  -->
               
               <!-- The box-header-->
			        <div id="menu"><!-- the menu -->
           <ul class="menu_top">
                <li class="active index-li"><a href="">Trang chủ </a></li>
                <li class=""><a href="info/view/1.html">Giới thiệu</a></li>
                <li class=""><a href="info/view/2.html">Hướng dẫn</a></li>
                <li class=""><a href="san-pham.html">Sản phẩm</a></li>
                <li class=""><a href="tin-tuc.html">Tin tức</a></li>
                <li class=""><a href="video.html">Video</a></li>
                <li class=""><a href="lien-he.html">Liên hệ</a></li>
                                <li class=""><a href="dang-ky.html">Đăng ký</a></li>
                <li class=""><a href="dang-nhap.html">Đăng nhập</a></li>
                           </ul>
</div><!-- End menu -->			   <!-- End box-header  -->
		       
		  
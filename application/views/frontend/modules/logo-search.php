<script type="text/javascript">
AOS.init();
</script>

<section class="logo-search" data-aos="fade-down" data-aos-duration="1500" style="height:auto">
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 logo">
            <a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>public/images/logo.png"
                    alt="Logo Construction"></a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 search">
            <form action="search" method="get" role="form">
                <div class="input-search">
                    <input type="text" class="form-control" id="search_text" name="search"
                        placeholder="Nhập từ khóa để tìm kiếm...">
                    <button>
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 hidden-xs" style="padding: 24px;">
            <!-- Cart -->
            <div class="cart_header">
                <a href="gio-hang" title="Giỏ hàng">
                    <span class="cart_header_icon">
                        <i class="fas fa-shopping-cart" style="font-size: 28px;
    color: rgb(1, 127, 255);"></i>
                    </span>
                    <span class="box_text">
                        <strong class="cart_header_count">Giỏ hàng <span>(<?php  
           if($this->session->userdata('cart')){
            $val = $this->session->userdata('cart');
            echo count($val);
          }else{
            echo 0;
          }
          ?>)</span></strong>
                        <span class="cart_price">
                            <?php if($this->session->userdata('cart')):
              $cart=$this->session->userdata('cart');
              $money=0;
              foreach ($cart as $key => $value) :
                $row = $this->Mproduct->product_detail_id($key);?>
                            <?php 
                $total=0;
                if($row['price_sale'] > 0){
                  $total=$row['price_sale']*$value;
                }else{
                  $total=$row['price'] * $value;
                }
                $money+=$total;
                ?>
                            <?php endforeach; ?>
                            <?php echo number_format($money).' VNĐ';?>
                            <?php else : ?>
                            <p>0 VNĐ</p>
                            <?php endif; ?>
                        </span>
                    </span>
                </a>
                <div class="cart_clone_box">
                    <div class="cart_box_wrap hidden">
                        <div class="cart_item original clearfix">
                            <div class="cart_item_image">
                            </div>
                            <div class="cart_item_info">
                                <p class="cart_item_title"><a href="" title=""></a></p>
                                <span class="cart_item_quantity"></span>
                                <span class="cart_item_price"></span>
                                <span class="remove"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Cart -->
            <!-- Account -->
            <div class="user_login">
                <div style="display: flex">
                    <a href="thong-tin-khach-hang" title="Tài khoản" class="user_login_icon">
                        <i class="fas fa-user" style="font-size: 28px; color: rgb(1, 127, 255);"></i>
                    </a>
                    <div class="box_text">
                        <!-- <strong>Tài khoản</strong> -->
                        <?php 
                      if($this->session->userdata('sessionKhachHang')){
                        $name=$this->session->userdata('sessionKhachHang_name');
                        echo '<div style="margin-top: -13px;"> ';
                        echo "<span href='#'>$name</span>";
                        echo "<a href='dang-xuat'>Đăng xuất</a>";
                        echo '<div>';
                      }else{
                        echo "<a href='dang-nhap' style='margin-top: -5px; padding: 0px 5px 10px 5px;font-weight: bold;font-size: 12px;' >Đăng nhập</a>";
                      }
                		?>
                        <!--<span class="cart_price">Đăng nhập, đăng ký</span>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <script>
  $(document).ready(function(){

   load_data();
   var strurl="<?php echo base_url();?>"+'/search/quick';
   function load_data(query)
   {
    $.ajax({
      url: strurl,
      method:"POST",
      data:{query:query},
      success:function(data){
        if(data){
          $('#result').html(data);
        }else{
          $('#result').html(data);
        }
      }
    })
  }

  $('#search_text').keyup(function(){
    var search = $(this).val();
    if(search != '')
    {
     load_data(search);
   }
   else
   {
     load_data();
   }
 });
});
</script> -->
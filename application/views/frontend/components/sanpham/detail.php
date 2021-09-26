<script type="text/javascript">
AOS.init();
</script>

<section id="product-detail">
    <div class="container">
        <div class="products-wrap">

            <form method="post" id="ProductDetailsForm">
                <?php if($row):?>
                <div class="breadcrumbs" data-aos="fade-left" data-aos-duration="1500">
                    <ul>
                        <li class="home">
                            <a href="trang-chu" title="Go to Home Page">Trang chủ</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="category3">
                            <a href="<?php echo base_url() ?>/san-pham/<?php $link=$this->Mcategory->category_link($row['catid']); echo $link; ?>"
                                title=""><?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li class="product"><?php echo $row['name'] ?></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 listimg-desc-product" data-aos="fade-right"
                    data-aos-duration="1500">
                    <?php 
                        $img = $row['img'];
                        $mang = explode('#', $img);
                        foreach ($mang as $value) :
                    ?>
                    <div class="mySlides">
                        <img src="public/images/products/<?php echo $value; ?>" style="width:100%; height: 100%">
                    </div>

                    <?php endforeach; ?>

                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                    <a class="next" onclick="plusSlides(1)">❯</a>

                    <div class="row">

                        <?php 
                        $img = $row['img'];
                        $mang = explode('#', $img);
                        $index = 0;
                        foreach ($mang as $value) :
                            $index = $index + 1;
                        ?>

                        <div class="column">
                            <img class="demo cursor" src="public/images/products/<?php echo $value; ?>"
                                style="width:100%" onclick="currentSlide(<?php echo $index ?>)">
                        </div>

                        <?php endforeach; ?>


                    </div>

                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6" data-aos="flip-right" data-aos-duration="1500">
                    <div class="product-view-content">
                        <div class="product-view-name">
                            <h1><?php echo $row['name'] ?></h1>
                        </div>
                        <div class="product-view-price">
                            <div class="pull-left">
                                <span class="price-label">Giá bán:
                                </span>
                                <span class="price"><?php echo number_format($row['price_sale'])?>₫</span>
                            </div>
                            <?php if($row['price_sale']>0 && $row['sale']>0): ?>
                            <div class="product-view-price-old">
                                <span class="price"><?php echo $row['price'] ?>₫</span>
                                <span class="sale-flag">-<?php echo $row['sale'] ?>%</span>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="product-status">
                            <p style=" float: left;margin-right: 10px;">Thương hiệu:
                                <?php $name=$this->Mcategory->category_name($row['catid']); echo $name; ?></p>
                            <p>| Tình trạng:
                                <?php if($row['number'] - $row['number_buy']==0 || $row['status'] == 0) echo 'Hết hàng'; else echo 'Còn hàng' ?>
                            </p>

                        </div>
                        <div class="product-view-desc" style="border-bottom: 1px solid #ccc;">
                            <h4>Mô tả:</h4>
                            <p><?php echo $row['sortDesc'] ?></p>
                        </div>
                        <div class="count-content">
                            <div class="count-content-warper"
                                style="    display: flex; width: 200px;justify-content: space-between; padding: 10px 0">
                                <div class="count-content-warper-span" style="    font-size: 14px;color: #252525;">
                                    Kho hàng
                                </div>

                                <div class="count-content-warper-number" style="    font-size: 14px;color: #252525;">
                                    <?php echo $row['number'] - $row['number_buy'] ?>
                                </div>
                            </div>

                            <div class="count-content-warper"
                                style="    display: flex; width: 200px;justify-content: space-between; padding: 10px 0">
                                <div class="count-content-warper-span" style="    font-size: 14px;color: #252525;">
                                    Số lượng đã bán
                                </div>
                                <div class="count-content-warper-number" style="    font-size: 14px;color: #252525;">
                                    <?php echo $row['number_buy'] ?>
                                </div>
                            </div>
                        </div>

                        <div class="actions-qty">
                            <?php
								if($row['number'] - $row['number_buy']==0 || $row['status'] == 0){
									echo'<h2 style="color:red;">Ngừng kinh doanh</h2>';
								} else{
									echo '<div class="actions-qty__button">
									<button class="button btn-cart add_to_cart_detail detail-button" type="button" aria-label="Mua ngay" class="fa fa-shopping-cart" onclick="onAddCart('.$row['id'].'),OnClickSubmit"> Thêm vào giỏ hàng </button>
									</div>
									<a href="gio-hang" class="button btn-cart add_to_cart_detail detail-button detail-button--buy"   class="fa fa-shopping-cart" >Mua ngay </a>
									
									';
								}
								?>
                        </div>

                        <div style="margin-top: 20px;">
                            <b>Tình trạng</b>

                            <br>
                            <span>Nguyên vẹn, full box</span>
                        </div>
                        <div style="margin-top: 20px;">
                            <b>Bảo hành</b>
                            <br>
                            <span>Bảo hành 12 tháng tại trung tâm bảo hành Chính hãng. 1 đổi 1 trong 30 ngày nếu có lỗi
                                nhà sản xuất.</span><a href="#" style="color:red"> (Chi tiết)</a>
                        </div>
                    </div>
                </div>

                <div class="product-v-desc col-md-10 col-12 col-xs-12" data-aos="zoom-in" data-aos-duration="1500">
                    <div class="_34c6X6 page-product__shop"
                        style="border-radius: 8px !important;margin-left: 5px;padding: 15px 10px;background: #fff !important;align-items: center;display: flex;box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 10px; border-radius: .125rem;overflow: hidden; margin-top: 2.25rem;">
                        <div class="_3-NiSV"
                            style="display: flex;align-items: center;  width: 35%;-moz-box-sizing: border-box;box-sizing: border-box;border-right: 1px solid rgba(0,0,0,.05);">

                            <div class="shopee-avatar _36C3a5"
                                style="margin: 0 12px;width: 80px; height: 80px; border-radius: 50%;overflow: hidden;">
                                <img style="width: 80px;  height: 80px;" class="shopee-avatar__img"
                                    src="https://cf.shopee.vn/file/788b7f8e9527413bde18dfad158ec889_tn">
                            </div>

                            <div class="_2V1E4_">
                                <div class="_3uf2ae" style="font-size: 18px;color: #333;text-transform: capitalize;">
                                    <p>
                                        <?php echo $row['shop_name']; ?>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="_309kqV" style="display: flex;justify-content: space-around;align-items; width:65%">
                            <div class="ssFdmZ">
                                <div class="QDF_64 _2vJ9tj">
                                    <label style="padding: 0 2px 5px 0;" class="_3rFQ3k">
                                        Nhận xét sản phẩm:
                                    </label>
                                    <span class="fb-comments-count" style="color:rgb(1, 127, 255)"></span>
                                </div>
                                <input type="checkbox" id="like" value="1" name="like">
                                <div for="like" style="padding: 0 0px 5px 0;" class="_3rFQ3k lable-name">

                                    <label style="padding: 0 2px 5px 0;" class="_3rFQ3k">
                                        Đánh giá:
                                    </label>
                                    <span style="color:rgb(1, 127, 255)">
                                        <?php echo $row['numlike']  ?></span>

                                </div>


                                <script>
                                let number = document.getElementById("input-like");
                                let valueResult = number.value;

                                function onChangeNumber() {
                                    if (number.value == valueResult) {
                                        number.value++;
                                    } else
                                    if (number.value > valueResult) {
                                        number.value--;
                                    }
                                };
                                </script>

                            </div>

                            <div class="ssFdmZ">
                                <div class="QDF_64 _2vJ9tj"><label style="padding: 0 15px 5px 0;" class="_3rFQ3k">Tỉ lệ
                                        Phản hồi:</label><span class="zw2E3N _2fK6RA">100%</span></div>
                                <div class="QDF_64 _2vJ9tj">
                                    <a class="-ilx8l _2vJ9tj" href="/shop/351759247/search">
                                        <label style="padding: 0 15px 5px 0;" class="_3rFQ3k">Sản phẩm:</label>
                                        <span class="zw2E3N _2fK6RA"><?php 
                                        $number=$this->Mcategory->product_sanpham();
                                        $dem=0;
                                        $name_shop = $row['shop_name'];
                                            foreach($number as $value) { 
                                                if($value['shop_name'] == $name_shop) {
                                                    $dem++;
                                                }
                                            }
                                            echo $dem;
                                    ?></span></a>
                                </div>
                            </div>
                            <div class="ssFdmZ">
                                <div class="QDF_64 _2vJ9tj"><label style="padding: 0 15px 5px 0;" class="_3rFQ3k">Tham
                                        gia:</label><span class="zw2E3N"> <?php
                                            $ten = $this->Mcategory->user_shop_name($name_shop);
                                           
                                          echo date('d/m/Y',strtotime($ten))?></span></div>
                                <div class="QDF_64 _2vJ9tj"><label style="padding: 0 15px 5px 0;" class="_3rFQ3k">Người
                                        theo dõi:</label><span class="zw2E3N">2,4k</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-v-desc col-md-10 col-12 col-xs-12" data-aos="zoom-in" data-aos-duration="1500">
                    <h3>Đặc điểm nổi bật</h3>
                    <?php echo $row['detail'];?>
                </div>
            </form>
            <!-- //////////////////////// -->
            <div class="col-md-10 col-12 col-xs-12" data-aos="fade-up" data-aos-duration="1500">
                <form action="detail.php" method="post" class="form-stars">
                    <h3 class="form-stars__heading">
                        Đánh giá sản phẩm(<?php echo $row['numlike']?>)
                    </h3>
                    <div class="rateyo" id="rateYo" data-rateyo-rating="<?php 
                                if($row['numlike'] == 0) {
                                    echo  (string)round($row['rateIndex'],2);
                                } else
                                echo  (string)round($row['rateIndex'] / $row['numlike'],2)   ?>"
                        data-rateyo-num-stars="5" data-rateyo-score="3">
                    </div>
                    <input type="hidden" name="rating">
                    <div class="form-stars___nx">
                        <span class="form-stars__for__people"><?php 
                                if($row['numlike'] == 0) {
                                    echo  round($row['rateIndex'],2);
                                } else
                                echo  round($row['rateIndex'] / $row['numlike'],2);?></span><span
                            class="form-stars___nx__heading">/5</span>

                    </div>
                    <input type="hidden" style="display:none" name="id" value="<?php echo $row['id']?>">

                    <input type="text" style="display:none" name="nameURL"
                        value="<?php echo base_url() ?><?php echo $row['alias'] ?>" />


                    <input type="submit" name="add" class="form-stars__submit" value="Gửi đánh giá ">

                </form>
            </div>

            <form method="post" id="ProductDetailsForm">
                <div class="product-comment product-v-desc">
                    <h3>Nhận xét sản phẩm
                    </h3>
                    <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12">
                        <div class="fb-comments" data-href="<?php echo base_url() ?><?php echo $row['alias'] ?>"
                            data-width="" data-numposts="5"></div>
                    </div>
                </div>

                <div class="product-comment product-v-desc product" data-aos="fade-up" data-aos-duration="1500">
                    <h3>Sản phẩm liên quan</h3>
                    <?php
						$list_spcungloai = $this->Mproduct->product_cungloai($row['catid'], $row['id'], 5);?>
                    <?php 
						if(count($list_spcungloai)>0):?>
                    <div class="product-container">
                        <div class="owl-carousel-product owl-carousel owl-theme">
                            <?php foreach ($list_spcungloai as $sp) :?>
                            <div class="item">
                                <div class="product-lt">
                                    <div class="lt-product-group-image">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>">
                                            <img class="img-p" src="public/images/products/<?php echo $sp['avatar'] ?>"
                                                alt="">
                                        </a>

                                        <?php if($sp['sale'] > 0) :?>
                                        <div class="giam-percent">
                                            <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                        </div>
                                        <?php endif; ?>
                                    </div>

                                    <div class="lt-product-group-info">
                                        <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>"
                                            style="text-align: left;">
                                            <h3><?php echo $sp['name'] ?></h3>
                                        </a>
                                        <div class="price-box">
                                            <?php if($sp['sale'] > 0) :?>

                                            <p class="old-price">
                                                <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                            <p class="special-price">
                                                <span
                                                    class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                            </p>
                                            <?php else: ?>
                                            <p class="old-price">
                                                <span class="price"
                                                    style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                            <p class="special-price">
                                                <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                            </p>
                                            <?php endif;?>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach; ?>
                        </div>
                        <?php else: ?>
                        <h4>Chưa có sản phẩm cùng loại</h4>
                        <?php endif; ?>
                    </div>
                    <?php endif; ?>


                </div>
            </form>
        </div>


</section>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>
<script>
function closeMessage(el) {
    el.addClass('is-hidden');
}

$('.js-messageClose').on('click', function(e) {
    closeMessage($(this).closest('.Message'));
});

$('#js-helpMe').on('click', function(e) {
    alert('Help you we will, young padawan');
    closeMessage($(this).closest('.Message'));
});

$('#js-authMe').on('click', function(e) {
    alert('Okelidokeli, requesting data transfer.');
    closeMessage($(this).closest('.Message'));
});

$('#js-showMe').on('click', function(e) {
    alert("You're off to our help section. See you later!");
    closeMessage($(this).closest('.Message'));
});

$(document).ready(function() {
    setTimeout(function() {
        closeMessage($('#js-timer'));
    }, 5000);
});



$(function() {

    $("#rateYo").rateYo({
        precision: 2,
    });

    $(function() {
        $(".rateyo").rateYo().on("rateyo.change", function(e, data) {
            var rating = data.rating;
            $(this).parent().find('.score').text('score :' + $(this).attr('data-rateyo-score'));
            $(this).parent().find('.result').text('rating :' + rating);
            $(this).parent().find('input[name=rating]').val(
                rating);
        });
    });
});
</script>


<script>
function onAddCart(id) {
    var strurl = "<?php echo base_url();?>" + '/sanpham/addcart';
    jQuery.ajax({
        url: strurl,
        type: 'POST',
        dataType: 'json',
        data: {
            id: id
        },
        success: function(data) {
            alert('Thêm sản phẩm vào giỏ hàng thành công !');
            window.location.reload();


        }
    });
}

function addClassNotification() {
    const hidden = document.getElementById("message");
    hidden.classList.add("hidden__notification");
}
</script>


<style>
#product-detail {
    position: relative;
}

#message {
    animation: slide-top 0.3s ease-in-out;
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);

}

.Message {
    display: none;
    position: absolute;
    margin: 0 auto 0;
    /* width: 500px; */
    background-color: #0074D9;
    color: #fff;
    transition: all 0.2s ease;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    z-index: 10000000;

}



.Message.is-hidden {
    opacity: 0;
    height: 0;
    font-size: 0;
    padding: 0;
    margin: 0 auto;
    display: block;
}

.Message-icon {
    display: table-cell;
    vertical-align: middle;
    width: 60px;
    padding: 40px;
    text-align: center;
    background-color: rgba(0, 0, 0, 0.25);
}

.Message-icon>i {
    width: 20px;
    font-size: 20px;
}

.Message-body {
    display: table-cell;
    vertical-align: middle;
    padding: 30px 20px 30px 10px;
}

.Message-body>p {
    line-height: 1.2;
    margin-top: 6px;
}

.Message-button {
    position: relative;
    margin: 15px 5px -10px;
    background-color: rgba(0, 0, 0, 0.25);
    box-shadow: 0 3px rgba(0, 0, 0, 0.4);
    border: none;
    padding: 10px 15px;
    font-size: 16px;
    font-family: "Source Sans Pro";
    color: #fff;
    outline: none;
    cursor: pointer;
}

.Message-button:hover {
    background: rgba(0, 0, 0, 0.3);
}

.Message-button:active {
    background: rgba(0, 0, 0, 0.3);
    box-shadow: 0 0px rgba(0, 0, 0, 0.4);
    top: 3px;
}

.Message-close {
    position: absolute;
    background-color: rgba(0, 0, 0, 0.3);
    color: #fff;
    border: none;
    outline: none;
    font-size: 20px;
    right: 5px;
    top: 5px;
    opacity: 0;
    cursor: pointer;
    padding: 6px
}

.Message:hover .Message-close {
    opacity: 1;
}

.Message-close:hover {
    background-color: rgba(0, 0, 0, 0.5);
}

.u-italic {
    font-style: italic;
}

.notification {
    position: absolute;
    top: 0;
    left: 50%;
    background-color: rgb(1, 127, 255);
    border-radius: 5px;
    padding: 16px 18px;
    transform: translateX(-50%);
    display: none;
}

.notification__warper__heading {
    color: #fff;
    text-transform: uppercase;
}

.hidden__notification {
    display: table;
}

.form-stars {
    padding: 15px 25px;
    border: 1px solid #f4f4f4;
    margin: 20px 0;
    background: #f4f4f4;
    display: flex;
    flex-direction: column;
    align-items: center;
}



.form-stars__submit {
    padding: 5px 30px;
    border: 1px solid rgb(1, 127, 255);
    background: rgb(1, 127, 255);
    color: #fff;

}

.form-stars__submit:hover {

    border: 1px solid rgb(1, 127, 255);
    background: #fff;
    color: rgb(1, 127, 255);
    transition: all 0.3s ease-in-out;

}

.form-stars___nx {
    font-size: 18px;
    color: rgb(1, 127, 255);
    margin: 12px 0;
}

.form-stars___nx__heading {
    font-size: 24px !important;
    color: rgb(1, 127, 255);
    font-weight: bold;
}

.form-stars__heading {
    font-size: 28px;
    color: rgb(1, 127, 255);
}

.form-stars__wrapper {
    display: flex;
    align-items: center;
    margin-bottom: 18px;
}

.form-stars__for__people {
    font-size: 30px !important;
    font-weight: bold;
}

#like:checked~.lable-name>.heart-check {
    color: rgb(1, 127, 255) !important;
    display: inline-block;
}

#like:checked~.lable-name>.heart-nonecheck {
    color: rgb(1, 127, 255) !important;
    display: none;
}

#like:checked~.lable-name #input-like {
    color: rgb(1, 127, 255) !important;

}

#like {
    display: none;
}

#input-like {
    cursor: pointer;
    text-align: center;
    width: 41px;
    border: none;
    background-color: transparent;
}

.lable-name:hover {
    color: rgb(1, 127, 255);
    transition: all 0.3s ease-in-out;
    cursor: pointer;
}

._3rFQ3k {
    color: rgba(0, 0, 0, .4);
    font-weight: 300;
}

.zw2E3N {
    color: rgb(1, 127, 255);
}

.heart-check {
    margin-left: 0;
    display: none;
}

.heart-nonecheck {
    margin-left: 0;
    color: rgb(1, 127, 255);
}

.lable-name-like {
    border: none;
    background-color: #fff;
    text-transform: capitalize;

}

.like-display {
    border: none;
    background-color: #fff;
    margin-left: 10px;
}


img {
    vertical-align: middle;
}

.mySlides {
    margin-bottom: 18px;
    display: none;
    height: 500px;
}

.cursor {
    cursor: pointer;
}

.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 40%;
    width: auto;
    padding: 10px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 12px;
    user-select: none;
    -webkit-user-select: none;
    background-color: #f4f4f4;
    color: #7d6a6a;
}

/* Position the "next button" to the right */
.next {
    right: 0;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
    background-color: #5b9fe4;
    color: #fff;
    transition: all 0.3 ease-in-out;
}

/* Number text (1/3 etc) */
.numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
}

/* Container for image text */
.caption-container {
    text-align: center;
    background-color: #222;
    padding: 2px 16px;
    color: white;
}

.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Six columns side by side */
.column {
    float: left;
    width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
    opacity: 0.6;
}

.active,
.demo:hover {
    opacity: 1;
}
</style>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    dots[slideIndex - 1].className += " active";
    captionText.innerHTML = dots[slideIndex - 1].alt;
}
</script>




<?php
    $conn = new mysqli('localhost', 'root', '', 'webapp');
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $rating = $_POST["rating"];
        $id = $_POST["id"];
        $nameURL = $_POST["nameURL"];

        $sql = "SELECT * FROM db_product WHERE id=$id";

        $rateIndexData = $conn->query($sql);
        $uData = $rateIndexData->fetch_assoc();

        $totalRatedIndex= $uData['rateIndex'] + $rating;

        $numLike= number_format($uData['numlike']) + 1;

        $conn->query("UPDATE db_product SET rateIndex='$totalRatedIndex' WHERE id='$id'");

        $conn->query("UPDATE db_product SET numlike='$numLike' WHERE id='$id'");

        echo '<script>window.location.replace("'.$nameURL.'");</script>';
        $conn -> close();
    }
   
?>
<script type="text/javascript">
AOS.init();
</script>
<section id="menu-slider" data-aos="zoom-out-down" data-aos-duration="1500">
    <div class="slider">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 slider-main pull-left" style='width:100%'>
                <?php 
                $this->load->view('frontend/modules/slider');
            ?>
            </div>
        </div>
    </div>
    <div class="container" style="margin-top: 20px;">
        <div class="sale-title">
            <span>SẢN PHẨM KHUYẾN MÃI HOT</span>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20px;">
        <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid #0f9ed8;">
            <?php 
        $product_sale = $this->Mproduct->product_sale(10);
        foreach ($product_sale as $row) :?>
            <div class="item" style="margin: 0px;" data-aos="fade-up" data-aos-duration="1500">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                            <img class="img-p" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>

                        <?php if($row['sale'] > 0) :?>
                        <div class="giam-percent">
                            <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>"
                            style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if($row['sale'] > 0) :?>

                            <p class="old-price">
                                <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <p class="special-price">
                                <span class="price"><?php echo(number_format($row['price_sale'])); ?>₫</span>
                            </p>
                            <?php else: ?>
                            <p class="old-price">
                                <span class="price"
                                    style="color: #fff"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <p class="special-price">
                                <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <?php endif;?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <div class="container" style="margin-top: 20px;" data-aos="fade-up" data-aos-duration="1500">
        <div class="sale-title">
            <span>SẢN PHẨM BÁN CHẠY</span>
        </div>
    </div>
    <div class="container" style="margin-bottom: 20px;" data-aos="fade-up" data-aos-duration="1500">
        <div class="owl-carousel owl-carousel-product owl-theme" style="border: 1px solid #0f9ed8;">
            <?php 
        $product_sale = $this->Mproduct->product_selling(10);
        foreach ($product_sale as $row) :?>
            <div class="item" style="margin: 0px;" data-aos="flip-left" data-aos-duration="1500">
                <div class="products-sale">
                    <div class="lt-product-group-image">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>">
                            <img class="img-p" src="public/images/products/<?php echo $row['avatar'] ?>" alt="">
                        </a>
                        <?php if($row['sale'] > 0) :?>
                        <div class="giam-percent">
                            <span class="text-giam-percent">Giảm <?php echo $row['sale'] ?>%</span>
                        </div>
                        <?php endif; ?>
                    </div>
                    <div class="lt-product-group-info">
                        <a href="<?php echo $row['alias'] ?>" title="<?php echo $row['name'] ?>"
                            style="text-align: left;">
                            <h3><?php echo $row['name'] ?></h3>
                        </a>
                        <div class="price-box">
                            <?php if($row['sale'] > 0) :?>

                            <p class="old-price">
                                <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <p class="special-price">
                                <span class="price"><?php echo(number_format($row['price_sale'])); ?>₫</span>
                            </p>
                            <?php else: ?>
                            <p class="old-price">
                                <span class="price"
                                    style="color: #fff"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <p class="special-price">
                                <span class="price"><?php echo(number_format($row['price'])); ?>₫</span>
                            </p>
                            <?php endif;?>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

</section>
<div id="content" data-aos="fade-up" data-aos-duration="1500">
    <div class="container">
        <?php 
        // giới hạn hiểu thị tiêu điều menu chính của sản phẩm
        $listCategory=$this->Mcategory->category_list(0,'15');
        foreach ($listCategory as $rowCategory):
            // giới hạn số luonjg menu con hiểu thị
            $subCategory=$this->Mcategory->category_list($rowCategory['id'],'8');
            // Id dien thoai
            $catId=$this->Mcategory->category_id($rowCategory['link']);
            // list id dt ss, apple,...
            $listCatId=$this->Mcategory->category_listcat($catId);
            //  giới hạn sl san pham hien thi
            $listProducts=$this->Mproduct->product_home_limit($listCatId,10);
            // so san pham lon hon  thì se hien list sp do ra
            if((count($listProducts) >= 0)):?>
        <div class="list-product" data-aos="fade-up" data-aos-duration="1500">
            <div class="list-header-z">
                <h2><a href="<?php echo  $rowCategory['link']?>"><?php echo  $rowCategory['name']?></a></h2>
                <ul class="sub-category">
                    <?php foreach ($subCategory as $rowSubCategory) :?>
                    <li>
                        <a href="san-pham/<?php echo $rowSubCategory['link'] ?>" ' 
                                            title="<?php echo $rowSubCategory['name'] ?>"
                                            class="ws-nw overflow ellipsis"
                                            >
                                            <?php echo $rowSubCategory['name'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="product-container">
                            <?php foreach ($listProducts as $sp) :?>
                                <div class="p-box-5" data-aos="flip-left"
                                        data-aos-duration="1500">
                                    <div class="product-lt">
                                        <div class="lt-product-group-image">
                                            <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" >
                                                <img class="img-p"src="public/images/products/<?php echo $sp['avatar'] ?>" alt="">
                                            </a>

                                            <?php if($sp['sale'] > 0) :?>
                                                <div class="giam-percent">
                                                    <span class="text-giam-percent">Giảm <?php echo $sp['sale'] ?>%</span>
                                                </div>
                                            <?php endif; ?>
                                        </div>

                                        <div class="lt-product-group-info">
                                            <a href="<?php echo $sp['alias'] ?>" title="<?php echo $sp['name'] ?>" style="text-align: left;">
                                                <h3><?php echo $sp['name'] ?></h3>
                                            </a>
                                            <div class="price-box">
                                                <?php if($sp['sale'] > 0) :?>

                                                    <p class="old-price">
                                                        <span class="price"><?php echo(number_format($sp['price'])); ?>₫</span>
                                                    </p>
                                                    <p class="special-price">
                                                        <span class="price"><?php echo(number_format($sp['price_sale'])); ?>₫</span>
                                                    </p>
                                                    <?php else: ?>
                                                    <p class="old-price">
                                                        <span class="price" style="color: #fff"><?php echo(number_format($sp['price'])); ?>₫</span>
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
                            <?php endforeach;?>
                        </div>
                    </div>
                <?php endif;?>
        <?php endforeach;?>
    </div>
</div>

<div class="home-blog" data-aos="fade-up"
     data-aos-duration="1500"> 
    <div class="container">
        <div class="row-p">
            <div class="text-center">
                <h2 class="sectin-title title title-blue">Tin tức công nghệ</h2>
            </div>
        </div>
        <div class="blog-content" style="display:flex;">
            <?php  
            $listBaiViet=$this->Mcontent->content_list_home(3, 'all');
            foreach ($listBaiViet as $rowPost) :?>
                <div class="col-xs-12 col-12 col-sm-6 col-md-4 col-lg-4" style="margin: 5px;">
                    <div class="latest">
                        <a href="tin-tuc/<?php echo $rowPost['alias'] ?>">
                            <div class="tempvideo">
                                <img width="98%" src="public/images/posts/<?php echo $rowPost['img'] ?>">
                            </div>
                            <h3 style="color: #999;"><?php echo $rowPost['title'] ?></h3>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<div class="adv" data-aos="fade-up"
     data-aos-duration="1500">
    <section id="service" style="margin: 20px;">
        <div class="container">
            <div class="row">
                <div id="service_home" class="clearfix">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_142e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Miễn phí giao hàng
                                </span>
                                <span class="small-text">
                                    Cho hóa đơn từ 100,000,000 đ
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_242e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Giao hàng trong ngày
                                </span>
                                <span class="small-text">
                                    Với tất cả đơn hàng
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center m-b-xs-10">
                        <div class="service_item">
                            <div class="icon icon_product">
                                <img src="public/images/icon_342e7.png" alt="">
                            </div>
                            <div class="description_icon">
                                <span class="large-text">
                                    Sản phẩm an toàn
                                </span>
                                <span class="small-text">
                                    Cam kết chính hãng
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Begin-->
    <!--End-->
</div>
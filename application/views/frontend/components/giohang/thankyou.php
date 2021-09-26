<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>
<section id="checkout-cart">
    <div class="container">
        <div class="col-md-12">
            <div class="wrapper-checkout-cart">
                <p>
                    Cảm ơn quý khách hàng đã mua sản phẩm của chúng tôi.
                </p>
                <p>
                    Vui lòng click vào đây để tiếp tục mua hàng
                </p>

                <div class="btn-tks clearfix">
                    <button type="button" onclick="window.location.href='<?php echo base_url() ?>trang-chu'"
                        class="btn-next-checkout pull-left">Tiếp tục mua hàng</button>

                </div>
            </div>
        </div>
    </div>
</section>


<style>
.wrapper-checkout-cart {
    width: 100%;
    height: 50vh;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;

}

.wrapper-checkout-cart>p {
    font-size: 28px !important;
    color: #333;

    font-weight: bold;
    padding-bottom: 18px;
}
</style>
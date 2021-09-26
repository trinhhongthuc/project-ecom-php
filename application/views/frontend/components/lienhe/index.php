<?php echo form_open( base_url()."lien-he"); ?>
<script type="text/javascript">
AOS.init();
</script>
<section>
    <div class="container">
        <div class="col-md-7 col-12" data-aos="fade-up" data-aos-duration="1500">
            <div class="section-article contactpage" style="  padding-left: 20px;">
                <?php 
				echo validation_errors();
				
				?>
                <form accept-charset="UTF-8" action="<?php echo base_url() ?>lien-he" id="contact" method="post">
                    <input name="FormType" type="hidden" value="contact">
                    <input name="utf8" type="hidden" value="true">
                    <h1 style="color: black">Liên hệ với chúng tôi</h1>

                    <div class="form-comment">
                        <div class="row" style="padding-left: 14px;">
                            <div class="col-md-4 col-12">
                                <div class="form-group" style="width: 200px;">
                                    <label for="name"><em> Họ tên</em><span class="required">*</span></label>
                                    <input id="name" name="fullname" type="text" value="" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group" style="width: 200px;">
                                    <label for="email"><em> Email</em><span class="required">*</span></label>
                                    <input id="email" name="email" class="form-control" type="email" value="">
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="form-group" style="width: 200px;">
                                    <label for="phone"><em> Số điện thoại</em><span class="required">*</span></label>
                                    <input type="number" id="phone" class="form-control" name="phone">

                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="message"><em> Tiêu đề</em><span class="required">*</span></label>
                            <textarea id="message" name="title" class="form-control custom-control" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="message"><em> Lời nhắn</em><span class="required">*</span></label>
                            <textarea id="message" name="content" class="form-control custom-control"
                                rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn-update-order">Gửi nhận xét</button>

                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 col-12" data-aos="fade-up" data-aos-duration="1500">
            <div class="f-contact" style="
			padding-left: 32px;
			">
                <h1 style="color: black">Thông tin liên hệ</h1>
                <ul class="list-unstyled">
                    <li class="clearfix">
                        <i class="fa fa-map-marker fa-1x" style="color:#0f9ed8; padding: 20px; "></i>
                        <span style="color: black"> 704 Phan Đình Phùng, TP KonTum</span><br>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-phone fa-1x" style="color:#0f9ed8;padding: 20px;  "></i>
                        <span style="color: black"> 0935945052</span>
                    </li>
                    <li class="clearfix">
                        <i class="fa fa-envelope fa-1x " style="color:#0f9ed8; padding: 20px; "></i>
                        <span style="color: black"><a
                                href="mailto:sale.24hstore@gmail.com">trinhhongthuc57@gmail.com</a></span>
                    </li>
                </ul>
            </div>

        </div>
        <div class="col-md-12 col-lg-12 col-xs-12 col-12" data-aos="fade-up" data-aos-duration="1500">

            <div style="margin-top: 15px;">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3865.1268471340386!2d107.99737301476382!3d14.362070289954703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bff08088f27c7%3A0x8fb2cec1336678f3!2zNzA0IFBoYW4gxJDDrG5oIFBow7luZywgUXVhbmcgVHJ1bmcsIEtvbiBUdW0sIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1614568190199!5m2!1svi!2s"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen loading="lazy"></iframe>
            </div>
        </div>
    </div>

</section>
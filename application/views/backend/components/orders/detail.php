<?php
        $conn = new mysqli('localhost', 'root', '', 'webapp');

        $order = $this->Morders->orders_detail($id);
        $customer = $this->Mcustomer->customer_detail($order['customerid']);
        $data = $this->Morderdetail->orderdetail_orderid($id);
        $result = $this->Morderdetail->orderdetail_detail_result($order['orderCode']);
        $id =(int)$result['productid'];

        $sql = "SELECT * FROM db_product WHERE id=$id ";

        $rateIndexData = $conn->query($sql);
        $uData = $rateIndexData->fetch_assoc();

        $product= $uData['price_shipProduct'];
?>
<div class="content-wrapper" style="min-height: 564px;">

    <section class="content-header">
        <h1><i class="glyphicon glyphicon-shopping-cart"></i> Chi tiết đơn hàng
            <!-- <?php echo $orderdetail_details['shop_name'];     ?> -->
        </h1>
        <div class="breadcrumb">
            <a class="btn btn-primary btn-sm" href="admin/orders" role="button">
                <span class="glyphicon glyphicon-trash"></span> Thoát
            </a>
        </div>
    </section>
    <section class="content">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <!--ND-->
                        <div id="view">

                            <form action="admin/orders/detail/<?php echo $id; ?>" enctype="multipart/form-data"
                                method="post" accept-charset="utf-8">

                                <h1 class="text-center" style="color: red;">CHI TIẾT ĐƠN HÀNG</h1>
                                <h4>Tên khách hàng: <b><?php echo $order['fullname']; ?></b></h4>
                                <h4>Điện thoại: <i><?php echo $order['phone']; ?></i></h4>
                                <h4>Thời gian đặt hàng: <i><?php echo $order['orderdate']; ?></i></h4>
                                <h4>Địa chỉ: <?php echo $order['address']; ?>,
                                    <?php echo $this->Mdistrict->district_name($order['district']); ?>,
                                    <?php echo $this->Mprovince->province_name($order['province']); ?>

                                </h4>
                                <h4>Mã đơn hàng: <b><?php echo $order['orderCode']; ?></b></h4>



                                <br />
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">STT</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Tên shop</th>
                                                <th class="text-center" style="width:100px">Số lượng</th>
                                                <th style="width:120px">Giá bán</th>
                                                <th class="text-right" style="width:120px">Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $stt = 0; $total = 0;
                                            ?>
                                            <tr>
                                                <td class="text-center"><?php $stt += 1; echo $stt; ?></td>
                                                <td><?php echo $order['name_product']; ?></td>
                                                <td><?php echo $order['shop_name']; ?></td>
                                                <td class="text-center"><?php echo $result['count']; ?></td>
                                                <td><?php echo number_format($result['price']); ?>₫</td>
                                                <td class="text-right">
                                                    <?php 
                                                $price = $result['price'] * $result['count'];
                                                echo number_format($price);
                                                $total += $price;
                                                $price_ship= $order['price_ship'];;
                                                $coupon = $order['coupon'];
                                                ?>₫
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; font-size: 1.1em;">Tổng cộng:
                                                    <?php echo number_format($total); ?>₫</td>
                                            </tr>
                                            <?php 
                                                    if($coupon != 0)
                                                {
                                                    echo '<tr>
                                                    <td colspan="6" class="text-right" style="border: none; font-size: 1.1em;">Voucher giảm giá : '.number_format($coupon).'₫</td>
                                                </tr>';
                                                }
                                                ?>
                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; font-size: 0.9em;"><i>Phí vận chuyển: </i>
                                                    <?php echo number_format($product); ?>₫
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" class="text-right"
                                                    style="border: none; color: red; font-size: 1.3em;">Thành tiền:
                                                    <?php 
                                                    if($total+$product -$coupon <= 0){
                                                        echo number_format(0);
                                                    } else{
                                                        echo number_format($total + $product - $coupon);
                                                    }
                                                    ?>₫
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 text-right">
                                        <ul class="pagination">
                                        </ul>
                                    </div>
                                </div>
                            </form>


                        </div>
                        <!--/.ND-->
                    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div>
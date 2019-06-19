<!-- <style>
td {
    padding : 5px;;
}
th , th>td {
    padding: 10px;
}
tr.border_bottom td {
border-bottom:1pt solid black;
}
</style>
<div class="content">
    <div class="container">
        <div class="title">
            <h2>CONFIRMATION</h2>
        </div>
        <div class="form-data">
            <div class="box">
                <?php
                if ($cart = $this->cart->contents()) {
                ?><table frame="below">
                    <tr>
                        <td>
                            <h3><u></u></h3>
                        </td>
                    </tr>
                    <tr>
                        <td><strong>Jumlah</strong></td>
                        <td><strong>Nama Barang</strong></td>
                        <td><strong>Total</strong></td>
                    </tr>
                    <?php
                    foreach ($cart as $contents) {
                    $p = $contents['price'];
                    $q = $contents['qty'];
                    $price = $p*$q;
                    ?><tr>
                        <form method="post" action="<?php echo base_url('shop/update/'.$contents["rowid"]); ?>">
                            <input type="hidden" value="<?php echo $contents["rowid"]; ?>" name="rowid">
                            <td style="padding: 10px;"><?php echo $contents['qty']; ?></td>
                            <td style="padding: 10px;" ><?php echo $contents['name']; ?></td>
                            <td style="padding: 10px;">Rp. <?php echo number_format($price); ?></td>
                        </tr>
                        <?php } ?>
                        <td></td>
                        <a href="<?php echo base_url('billing/order'); ?>"></a>
                    </form>
                </table>
                <?php
                // redirect(base_url('/index.php/Cart/Cart_view'));
                }
                ?>
                <table>
                    <tr>
                        <td>
                            <strong>
                            Nama Customer
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("namacustomer"); ?>
                        </td>
                        <td>
                            <strong>
                            Jenis Pembayaran
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("namapayment"); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                            Alamat Kirim
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("alamatkirim"); ?>
                        </td>
                        <td>
                            <strong>
                            Nomer Rekening
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("norek"); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                            Nama Penerima
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("penerima"); ?>
                        </td>
                        <td>
                            <strong>
                            Jenis Pengiriman
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("namashipment"); ?>
                        </td>
                    </tr>
                    <tr class="border_bottom">
                        <td>
                            <strong>
                            No Telepon Penerima
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            <?php echo $this->session->userdata("telppenerima"); ?>
                        </td>
                        <td>
                            <strong>
                            Biaya Pengiriman
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp.
                            <?php echo number_format($this->session->userdata("harga")); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                            Total Belanja
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp. <?php echo $this->cart->format_number($this->cart->total()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <strong>
                            Total Belanja + Biaya Pengiriman
                            </strong>
                        </td>
                        <td>
                            :
                        </td>
                        <td>
                            Rp. <?php $total = $this->cart->total();
                            $biaya = $this->session->userdata("harga");
                            $q = $total+$biaya;
                            echo number_format($q);
                            ?>
                        </td>
                    </tr>
                </table>
                <a href="<?php echo base_url('billing/order') ?>" type="button" class="btn btn-primary"> ORDER </a>
            </div>
        </div>
        <div class="holder-box">
        </div>
    </div>
</div> -->

<div class="body">
    <div class="container">
        <div class="page">
            <main class="page-content" data-cart>
                <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
                        <meta itemprop="position" content="0" />
                    </li>
                    <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a href="<?php echo base_url(); ?>shop" class="breadcrumb-label" itemprop="item">Confirmation</a>
                        <meta itemprop="position" content="1" />
                    </li>
                </ul>
                <h1 class="page-heading" data-cart-page-title>
                CONFIRMATION
                </h1>
                <div class="loadingOverlay"></div>
                <div data-cart-content>
                    <table class="cart" data-cart-quantity="1">
                        <thead class="cart-header">
                            <tr>
                                <th class="cart-header-item">Item</th>
                                <th class="cart-header-item">Price</th>
                                <th class="cart-header-item cart-header-quantity">Quantity</th>
                                <th class="cart-header-item">Total</th>
                            </tr>
                        </thead>
                        <tbody class="cart-list">
                            <?php
                            echo form_open('shop/update_cart');
                            $grand_total = 0;
                            $i = 1;
                            foreach ($cart as $item):
                            echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                            echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                            echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                            echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                            echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                            ?>
                            <tr class="cart-item" data-item-row>
                                <td class="cart-item-block cart-item-title">
                                    <h4 class="cart-item-name"><?php echo $item['name']; ?></h4>
                                    
                                </td>
                                <td class="cart-item-block cart-item-info">
                                    <span class="cart-item-label">Price</span>
                                    <span class="cart-item-value ">RP <?php echo number_format($item['price'] ); ?></span>
                                </td>
                                <td class="cart-item-block cart-item-info cart-item-quantity">
                                    <span class="cart-item-label">Price</span>
                                    <span class="cart-item-value "><strong><?php echo number_format($item['qty'] ); ?></strong></span>
                                </td>
                                <?php $grand_total = $grand_total + $item['subtotal']; ?>
                                <td class="cart-item-block cart-item-info">
                                    <span class="cart-item-label">Total</span>
                                    <strong class="cart-item-value ">RP. <?php echo number_format($item['subtotal']) ?></strong>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <table class="cart" style="width: 50%; margin-left: 57%;">
                    <tbody>
                        <tr>
                            <td>
                                <strong>Nama Customer</strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("namacustomer"); ?>
                            </td>
                            <td>
                                <strong>
                                Jenis Pembayaran
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("namapayment"); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                Alamat Kirim
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("alamatkirim"); ?>
                            </td>
                            <td>
                                <strong>
                                Nomer Rekening
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("norek"); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                Nama Penerima
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("penerima"); ?>
                            </td>
                            <td>
                                <strong>
                                Jenis Pengiriman
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("namashipment"); ?>
                            </td>
                        </tr>
                        <tr class="border_bottom">
                            <td>
                                <strong>
                                No Telepon Penerima
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                <?php echo $this->session->userdata("telppenerima"); ?>
                            </td>
                            <td>
                                <strong>
                                Biaya Pengiriman
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                Rp.
                                <?php echo number_format($this->session->userdata("harga")); ?>
                            </td>
                        </tr>
                        <!-- <tr>
                            <td>
                                <strong>
                                Total Belanja
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                RP. <?php echo number_format($this->cart->total()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <strong>
                                Total Belanja + Biaya Pengiriman
                                </strong>
                            </td>
                            <td>
                                :
                            </td>
                            <td>
                                RP. <?php $total = $this->cart->total();
                                $biaya = $this->session->userdata("harga");
                                $q = $total+$biaya;
                                echo number_format($q);
                                ?>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div data-cart-totals>
                <ul class="cart-totals">
                    <li class="cart-total">
                        <div class="cart-total-label">
                            <strong>Grand Total:</strong>
                        </div>
                        <div class="cart-total-value cart-total-grandTotal">
                            <span>RP. <?php echo number_format($this->cart->total()); ?></span>
                        </div>
                    </li>
                    <li class="cart-total">
                        <div class="cart-total-label">
                            <strong>Total Belanja + Biaya Pengiriman:</strong>
                        </div>
                        <div class="cart-total-value cart-total-grandTotal">
                            <span>RP. <?php $total = $this->cart->total();
                                $biaya = $this->session->userdata("harga");
                                $q = $total+$biaya;
                                echo number_format($q);?></span>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="cart-actions">
                <span>
                    <a style="margin: 10px;" class="button button--primary" href="<?php echo base_url('billing/order'); ?>" title="Click here to proceed to checkout">Order</a>
                </span>
            </div>
        </main>
    </div>
</div>
</div>
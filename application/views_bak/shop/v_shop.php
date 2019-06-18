<div class="content">
    <div class="container">
        <style>
        .empty-cart{
        text-align: center;
            font-size: 54px;
            font-weight: 200;
            padding: 10px;
        border: 5px solid;
        }
        </style>
        <div class="col-md-12 women-dresses" style="margin-bottom : 20px;">
            <div class="title">
                <h2>SHOPPING CART</h2>
            </div>
            <div class="form-artikel">
                <?php  $q = $this->cart->total_items(); ?>
                <?php
                if ($q == 0) {
                echo "<div class='empty-cart'>YOUR CART IS EMPTY</div>";
                }
                ?>
                <table id="table" border="0" class="table">
                    <?php
                    // All values of cart store in "$cart".
                    if ($cart = $this->cart->contents()): ?>
                    <tr id= "main_heading">
                        <th align="center">No</th>
                        <th align="center">Name</th>
                        <th align="center">Price</th>
                        <th align="center">Qty</th>
                        <th style="witdh:20px" align="center">Amount</th>
                        <th align="center">Cancel</th>
                    </tr>
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
                    <tr>
                        <td align="center">
                            <?php echo $i++; ?>
                        </td>
                        <td align="left">
                            <?php echo $item['name']; ?>
                        </td>
                        <td align="left">
                            Rp. <?php echo number_format($item['price'] ); ?>
                        </td>
                        <td align="left">
                            <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>
                        </td>
                        <?php $grand_total = $grand_total + $item['subtotal']; ?>
                        <td align="left">
                            Rp. <?php echo number_format($item['subtotal']) ?>
                        </td>
                        <td align="center">
                            <a type="button" class="btn btn-sm btn-danger" href="<?php echo base_url('shop/remove/'. $item['rowid']); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i>
                                <?php
                                // cancle image.
                                ?>
                            </a>
                        </td>
                        <?php endforeach; ?>
                    </tr>
                    <tr>
                        <?php // "clear cart" button call javascript confirmation message ?>
                    </tr>
                    <tr>
                        <td colspan="3" class="font-total" style=""><b>Total: Rp. <?php echo number_format($grand_total); ?></b></td>
                        <td colspan="4" align="right">
                            <a href="<?php echo base_url('shop/delete'); ?>" type="button" class ='btn btn-danger empty' value="Clear Cart" >Clear Cart</a>
                            <?php //submit button. ?>
                            <input type="submit" role="button" class="btn btn-success" value="Update Cart">
                            <?php echo form_close(); ?>
                            <!-- "Place order button" on click send "billing" controller  -->
                            <input type="button" class ='btn btn-info' value="Checkout" onclick="window.location = 'billing/guest'">
                        </td>
                    </tr>
                    <?php endif; ?>
                </table>
            </div>
        </div>
        <div class="holder-box"></div>
    </div>
</div>
<script src="">
</script>
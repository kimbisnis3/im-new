<?php
$grand_total = 0;
// Calculate grand total.
if ($cart = $this->cart->contents()):
foreach ($cart as $item):
$grand_total = $grand_total + $item['subtotal'];
endforeach;
endif;
?>
<form name="billing" method="post" action="<?php echo base_url() . 'billing/save_order' ?>" >
    <input type="hidden" name="command" />
    <div align="center">
        <h1 align="center">Billing Info</h1>
        <table border="0" cellpadding="2px">
            <tr><td>Order Total:</td><td><strong>Rp <?php echo $this->cart->format_number($this->cart->total()); ?></strong></td></tr>
            <tr><td>Nama:</td><td><input type="text" name="namacustomer" required=""/></td></tr>
            <tr><td>Alamat:</td><td><input type="text" name="alamat" required="" /></td></tr>
            <tr><td>Email:</td><td><input type="text" name="email" required="" /></td></tr>
            <tr><td>Nomor HP:</td><td><input type="text" name="hp"  required="" /></td></tr>
            <tr><td><?php
                // This button for redirect main page.
                echo "<a class ='fg-button teal' id='back' href=" . base_url() . "index.php/shopping>Back</a>";  ?>
                </td><td><input type="submit" class ='fg-button teal' value="Place Order" /></td>
            </tr>
            
        </table>
    </div>
</form>
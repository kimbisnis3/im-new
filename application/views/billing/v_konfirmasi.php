<style>
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
</div>

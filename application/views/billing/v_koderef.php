<!-- <div class="content">
    <div class="container">
        <div class="title">
            <h2>PAYMENT</h2>
        </div>
        <div class="form-data">
            <p>Referensi Kode : <strong><?php echo $this->session->userdata("koderef"); ?></strong></p>
            <p>Gunakan Referensi Kode untuk berita transfer saat melakukan pembayaran.</p>
            <p>Jika sudah melakukan pembayaran silahkan menghubungi sales kami.</p>
        </div>
    </div>
</div>

 -->
<div class="body">
    <ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="" class="breadcrumb-label" itemprop="item">Kode Referensi</a>
            <meta itemprop="position" content="1" />
        </li>
    </ul>
    <div class="container">
        <h1 class="page-heading">PAYMENT</h1>
        <div class="account account--fixed">
            <div class="account-body">
                <p style="text-align: center; font-size: 20px !important;">Referensi Kode : <strong><?php echo $this->session->userdata("koderef"); ?></strong></p>
                <p style="text-align: center;">Gunakan Referensi Kode untuk berita transfer saat melakukan pembayaran.</p>
                <p style="text-align: center;">Jika sudah melakukan pembayaran silahkan menghubungi sales kami.</p>
            </div>
        </div>
    </div>
</div>
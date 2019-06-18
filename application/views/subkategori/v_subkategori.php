        <div class="body">
     
    <div class="container">
        
<ul class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="<?php echo base_url(); ?>" class="breadcrumb-label" itemprop="item">Home</a>
            <meta itemprop="position" content="0" />
        </li>
        <li class="breadcrumb " itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item">Sub Kategori</a>
            <meta itemprop="position" content="1" />
        </li>
        <?php foreach ($mtitlesubkategori as $p) { ?>
        <li class="breadcrumb is-active" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                <a href="" class="breadcrumb-label" itemprop="item"><?php echo $p->namasubkategori; ?></a>
            <meta itemprop="position" content="2" />
        </li>
        <?php } ?>
</ul>
<?php foreach ($mtitlesubkategori as $p) { ?>
<h1 class="page-heading"><?php echo $p->namasubkategori; ?></h1>
<?php } ?>

<!-- snippet location categories -->
<div class="page">

    <main class="page-content" id="product-listing-container">
            <form class="actionBar" method="get" data-sort-by>
    <fieldset class="form-fieldset actionBar-section">
    <!-- <div class="form-field">
        <label class="form-label" for="sort">Sort By:</label>
        <select class="form-select form-select--small" name="sort" id="sort">
            <option value="featured" >Featured Items</option>
            <option value="newest" >Newest Items</option>
            <option value="bestselling" >Best Selling</option>
            <option value="alphaasc" selected>A to Z</option>
            <option value="alphadesc" >Z to A</option>
            <option value="avgcustomerreview" >By Review</option>
            <option value="priceasc" >Price: Ascending</option>
            <option value="pricedesc" >Price: Descending</option>
        </select>
    </div> -->
</fieldset>

</form>

<form action="/compare" method='POST' data-product-compare>
        <ul class="productGrid">
<?php foreach ($msubkategori as $t) { ?>
    <li class="product">
        <article class="card ">
    <figure class="card-figure">
            <a href="<?php echo base_url('product/detail/'.$t->slug); ?>">
                <div class="card-img-container">
                    <img class="card-image lazyload" data-sizes="auto" src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" data-src="<?php echo base_url('gopanel/uploads/barang/'.$t->image); ?>" alt="<?php echo $t->nama; ?>" title="<?php echo $t->nama; ?>">
                </div>
            </a>
        <figcaption class="card-figcaption">
            <div class="card-figcaption-body">
                            <a href="<?php echo base_url('product/detail/'.$t->slug); ?>" class="button button--small card-figcaption-button" data-product-id="1226">Open</a>
            </div>
        </figcaption>
    </figure>
    <div class="card-body">
            <p class="card-text" data-test-info-type="brandName">Product<p>
        <h4 class="card-title">
                <a href="<?php echo base_url('product/detail/'.$t->slug); ?>"><?php echo $t->nama; ?></a>
        </h4>

        <div class="card-text" data-test-info-type="price">
                
        <div class="price-section price-section--withTax rrp-price--withTax" style="display: none;">
            MSRP:
            <span data-product-rrp-with-tax class="price price--rrp">
                
            </span>
        </div>
        <div class="price-section price-section--withTax non-sale-price--withTax" style="display: none;">
            Was:
            <span data-product-non-sale-price-with-tax class="price price--non-sale">
                
            </span>
        </div>
        <div class="price-section price-section--withTax" >
            <span class="price-label" >
                
            </span>
            <span class="price-now-label" style="display: none;">
                Now:
            </span>
            <span data-product-price-with-tax class="price price--withTax">RP <?php echo number_format($t->harga); ?></span>
        </div>
        </div>
            </div>
</article>
    </li>
<?php } ?>
</ul>
</form>

<div class="pagination">
    <ul class="pagination-list">

    </ul>
</div>
    </main>
</div>


    </div>
    <div id="modal" class="modal" data-reveal data-prevent-quick-search-close>
    <a href="#" class="modal-close" aria-label="Close" role="button">
        <span aria-hidden="true">&#215;</span>
    </a>
    <div class="modal-content"></div>
    <div class="loadingOverlay"></div>
</div>
</div>

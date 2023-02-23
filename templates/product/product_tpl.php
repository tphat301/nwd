<div class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></div>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>

<!-- THI CÔNG  -->
<?php if (count($pronb)) { ?>
<div class="wrap-product wrap-content">
    <div class="flex-cus row">
		<?php foreach($pronb as $k => $v) { ?>
            <div class="col-6 col-sm-6 col-md-4 col-lg-4 mg-cus mb-3">
                <div class="box-product" data-aos="fade-up" data-aos-duration="1000">
                    <div class="pic-product">
                        <a class="text-decoration-none scale-img hover_xam" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
                            <img class="lazy w-100" onerror="this.src='<?= THUMBS ?>/440x336x1/assets/images/noimage.png';" data-src="<?= WATERMARK ?>/product/440x336x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" alt="<?= $v['name' . $lang] ?>" title="<?= $v['name' . $lang] ?>" />
                        </a>
                    </div>
                    <div class='info-project'>
                        <span class="sub-title-project">Apartment</span>
                        <h3 class="mb-0"><a class="text-decoration-none text-split name-product text-uppercase" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
                        <span class="address-project">
                            <?=$setting ['address'.$lang]?>
                        </span>
                    </div>
                </div>
            </div>
        <?php } ?>
	</div>
</div>
<?php } ?>
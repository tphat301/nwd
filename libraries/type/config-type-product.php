<?php
    /* Dự án */
    $nametype = "san-pham";
    $config['product'][$nametype]['title_main'] = "Dự án";
    $config['product'][$nametype]['dropdown'] = true;
    $config['product'][$nametype]['list'] = true;
    $config['product'][$nametype]['tags'] = true;
    $config['product'][$nametype]['view'] = true;
    $config['product'][$nametype]['copy'] = true;
    $config['product'][$nametype]['copy_image'] = true;
    $config['product'][$nametype]['slug'] = true;
    $config['product'][$nametype]['check'] = array("noibat" => "Nổi bật", "hienthi" => "Hiển thị");
    $config['product'][$nametype]['images'] = true;
    $config['product'][$nametype]['show_images'] = true;
    $config['product'][$nametype]['gallery'] = array();
    $config['product'][$nametype]['code'] = true;
    $config['product'][$nametype]['regular_price'] = true;
    $config['product'][$nametype]['sale_price'] = true;
    $config['product'][$nametype]['discount'] = true;
    $config['product'][$nametype]['desc'] = true;
    $config['product'][$nametype]['desc_cke'] = false;
    $config['product'][$nametype]['content'] = true;
    $config['product'][$nametype]['content_cke'] = true;
    $config['product'][$nametype]['seo'] = true;
    $config['product'][$nametype]['width'] = 880;
    $config['product'][$nametype]['height'] = 672;
    $config['product'][$nametype]['thumb'] = '100x100x1';
    $config['product'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Sản phẩm (List) */
    $config['product'][$nametype]['title_main_list'] = "Sản phẩm cấp 1";
    $config['product'][$nametype]['images_list'] = true;
    $config['product'][$nametype]['show_images_list'] = true;
    $config['product'][$nametype]['slug_list'] = true;
    $config['product'][$nametype]['check_list'] = array("hienthi" => "Hiển thị");
    $config['product'][$nametype]['gallery_list'] = array();
    $config['product'][$nametype]['desc_list'] = true;
    $config['product'][$nametype]['seo_list'] = true;
    $config['product'][$nametype]['width_list'] = 880;
    $config['product'][$nametype]['height_list'] = 672;
    $config['product'][$nametype]['thumb_list'] = '100x100x1';
    $config['product'][$nametype]['img_type_list'] = '.jpg|.gif|.png|.jpeg|.gif';
?>
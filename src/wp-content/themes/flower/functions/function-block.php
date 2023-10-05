<?php

// register blocks
function tt_register_module_blocks() {
    if (!function_exists('acf_register_block_type')) {
        return;
    }
    $block_types = array(
        array(
            'name' => 'banner-video',
            'title' => __('Banner Video', 'flower'),
            'keywords' => array('banner video'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'interior',
            'title' => __('Interior', 'flower'),
            'keywords' => array('interior'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'floricultura',
            'title' => __('Floricultura', 'flower'),
            'keywords' => array('floricultura'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'flower-shop',
            'title' => __('Flower Shop', 'flower'),
            'keywords' => array('flower shop'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'new-product',
            'title' => __('New Product', 'flower'),
            'keywords' => array('new product'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'featured-product',
            'title' => __('Featured Product', 'flower'),
            'keywords' => array('featured product'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'cate-product',
            'title' => __('Cate Product', 'flower'),
            'keywords' => array('cate product'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'banner-collection',
            'title' => __('Banner Collection', 'flower'),
            'keywords' => array('banner collection'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'paper-wrap',
            'title' => __('Paper Wrap', 'flower'),
            'keywords' => array('paper wrap'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'banner-about',
            'title' => __('Banner About', 'flower'),
            'keywords' => array('banner about'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'about-us',
            'title' => __('About Us', 'flower'),
            'keywords' => array('about us'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'why',
            'title' => __('Why', 'flower'),
            'keywords' => array('why'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'vision',
            'title' => __('Vision', 'flower'),
            'keywords' => array('vision'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'leader',
            'title' => __('Leader', 'flower'),
            'keywords' => array('leader'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'our',
            'title' => __('Our', 'flower'),
            'keywords' => array('our'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'contact',
            'title' => __('Contact', 'flower'),
            'keywords' => array('contact'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'terms-condition',
            'title' => __('Terms Condition', 'flower'),
            'keywords' => array('terms condition'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'faq',
            'title' => __('Faq', 'flower'),
            'keywords' => array('faq'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'blog-post',
            'title' => __('Blog Post', 'flower'),
            'keywords' => array('blog post'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'blog-category',
            'title' => __('Blog Category', 'flower'),
            'keywords' => array('blog category'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'blue-white',
            'title' => __('Blue White', 'flower'),
            'keywords' => array('blue white'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'description-single',
            'title' => __('Description Single', 'flower'),
            'keywords' => array('description single'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'summy-single',
            'title' => __('Summy Single', 'flower'),
            'keywords' => array('summy single'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'partners',
            'title' => __('Partners', 'flower'),
            'keywords' => array('partners'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'project',
            'title' => __('Project', 'flower'),
            'keywords' => array('project'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'relation-cate',
            'title' => __('Relation Cate', 'flower'),
            'keywords' => array('relation cate'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'video',
            'title' => __('Video', 'flower'),
            'keywords' => array('video'),
        // 'category' => 'modules'
        ),
        array(
            'name' => 'banner-short',
            'title' => __('Banner Short', 'flower'),
            'keywords' => array('banner short'),
        // 'category' => 'modules'
        ),

    );

    foreach ($block_types as $block_type) {
        $args = array(
            'name' => $block_type['name'],
            'title' => $block_type['title'],
            'keywords' => $block_type['keywords'],
            'icon' => 'admin-generic',
            'render_callback' => 'etypes_acf_block_render_callback',
//			'category'        => $block_type['category'],
            // 'mode' => 'edit',
            'mode'            => 'view',
            'supports' => array(
                'align' => false,
                'mode' => false,
            ),
        );
        if (array_key_exists('post_types', $block_type)) {
            $args['post_types'] = $block_type['post_types'];
        }
        acf_register_block_type($args);
    }
}

add_action('acf/init', 'tt_register_module_blocks');

function etypes_acf_block_render_callback($block) {
    $name = str_replace('acf/', '', $block['name']);

    if (file_exists(get_theme_file_path("/inc/block-{$name}.php"))) {
        include get_theme_file_path("/inc/block-{$name}.php");
    }
}

function show_blocks($modules) {
	//    var_dump($blocks);
	if (!is_array($modules)) {
		return;
	}
	foreach ($modules as $module) {
		switch ($module['acf_fc_layout']) {
			case "block_image":
				include get_template_directory() . "/inc/module-single-image.php";
				break;
			case "block_editor":
				include get_template_directory() . "/inc/module-single-editor.php";
				break;
			case "block_video":
				include get_template_directory() . "/inc/module-single-video.php";
				break;
		}
	}
}
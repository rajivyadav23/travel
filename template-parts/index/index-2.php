<?php
use Pressmind\Travelshop\Search;
get_header();
?>
    <main>
        <?php
        $args = [
            'items' => [
                [
                    'type' => 'content', // enum (content | product)
                    'image' => get_stylesheet_directory_uri().'/assets/img/slide-1.jpg',
                    'image_alt_tag' => '',
                    'title' => 'Travel is the movement Slide 1',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations...',
                    'btn_link' => '/blog/',
                    'btn_link_target' => '_self', // enum(_blank, _self)
                    'btn_label' => 'Weiterlesen'
                ],
                [
                    'type' => 'content', // enum (content | product)
                    'image' => get_stylesheet_directory_uri().'/assets/img/slide-1.jpg',
                    'image_alt_tag' => '',
                    'title' => 'Travel is the movement Slide 2',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations...',
                    'btn_link' => '/blog/',
                    'btn_link_target' => '_self', // enum(_blank, _self)
                    'btn_label' => 'Weiterlesen'
                ],
                [
                    'type' => 'product',
                    'pm-id' => '545926',
                    'image_type' => '', // enum (from_product | custom)
                    'image' => '', // img src if image_type is 'custom'
                    'image_alt_tag' => '',
                    'image_number' => 0 // image number from product image list if type is 'from_product'
                ]
            ]
        ];
        load_template_transient(get_template_directory().'/template-parts/layout-blocks/content-slider.php', false, $args);
        ?>
        <?php
        /**
         * it's possible to load each of these layout-blocks with a shortcode, like
         * echo do_shortcode('[ts-layoutblock f="search-header"]');
         * @see readme-shortcodes.md
         */

        $args = Search::getResult(['pm-ot' => TS_TOUR_PRODUCTS],2, 12, true, false, TS_TTL_FILTER, TS_TTL_SEARCH);
        $args['class'] = 'silver mt-mb-offset mt-2rem';
        load_template_transient(get_template_directory().'/template-parts/layout-blocks/search-bar.php', false, $args);
        ?>
        <div class="content-main">
            <div class="container">
                <?php
                $args = [
                    'headline' => 'Beliebte Reiseziele',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.'
                ];
                load_template_transient(get_template_directory().'/template-parts/layout-blocks/image-teaser.php', false, $args);
                ?>
                <hr class="mt-0 mb-0">
                <?php
                $args = [
                    'headline' => 'Reise-Empfehlungen',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.',
                    'link_top' => true,
                    'link_bottom' => true,
                    'link_teaser' => true,
                    'link_top_text' => 'Alle [TOTAL_RESULT] Reisen zum Thema anzeigen',
                    'link_bottom_text' => 'Alle [TOTAL_RESULT] Reisen zum Thema anzeigen',
                    'link_teaser_text' => 'Alle [TOTAL_RESULT] Reisen zum Thema anzeigen',
                    'search' => [
                            'pm-l' => '0,3',
                            'pm-o' => 'rand',
                            'pm-ot' => TS_TOUR_PRODUCTS
                    ],
                ];
                load_template_transient(get_template_directory().'/template-parts/layout-blocks/product-teaser.php', false, $args);
                ?>
                <hr class="mt-0 mb-0">
                <?php
                $args = [
                    'headline' => 'Reise-Themen',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.',
                    'teaser_count_desktop' => 3,
                    'teasers' => [
                        [
                            'headline' => 'Fernreise',
                            'image' => get_stylesheet_directory_uri().'/assets/img/slide-1-mobile.jpg',
                            'link' => '#',
                            'link_target' => '_self',
                            'search' => [
                                'pm-li' => '0,4',
                                'pm-o' => 'rand',
                                'pm-ot' => TS_TOUR_PRODUCTS
                            ]
                        ],
                        [
                            'headline' => 'Kurzreise',
                            'image' => get_stylesheet_directory_uri().'/assets/img/slide-1-mobile.jpg',
                            'link' => '#',
                            'link_target' => '_self',
                            'search' => [
                                'pm-li' => '0,4',
                                'pm-o' => 'rand',
                                'pm-ot' => TS_TOUR_PRODUCTS
                            ]
                        ],
                        [
                        'headline' => 'Abenteuer',
                        'image' => get_stylesheet_directory_uri().'/assets/img/slide-1-mobile.jpg',
                        'link' => '#',
                        'link_target' => '_self',
                        'search' => [
                            'pm-li' => '0,4',
                            'pm-o' => 'rand',
                            'pm-ot' => TS_TOUR_PRODUCTS
                        ]
                    ]
                    ]
                ];
                load_template_transient(get_template_directory().'/template-parts/layout-blocks/product-category-teaser.php', false, $args);
                ?>
                <hr class="mt-0 mb-0">
                <?php
                $args = [
                    'headline' => 'Info Teaser',
                    'text' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.'
                ];
                load_template_transient(get_template_directory().'/template-parts/layout-blocks/info-teaser.php', false, $args);?>
                <hr class="mt-0 mb-0">
                <?php
                    $args = [
                            'headline' => 'Icon-Teaser',
                            'text' => 'Travel is the movement of people between relatively distant geographical locations, and can involve travel by foot, bicycle, automobile, train, boat, bus, airplane, or other means, with or without luggage, and can be one way or round trip.',
                            'teasers' => [
                                            [
                                                'headline' => 'Das ist ein USP',
                                                'text' => 'Das ist ein dazugehöriger Text zum USP.',
                                                'priority' => 'icon-inner-primary',
                                                'btn_link' => '#',
                                                'btn_link_target' => '_self',
                                                'btn_label' => 'Mehr erfahren',
                                                'svg_icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-bell" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#FFFFFF" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M10 5a2 2 0 0 1 4 0a7 7 0 0 1 4 6v3a4 4 0 0 0 2 3h-16a4 4 0 0 0 2 -3v-3a7 7 0 0 1 4 -6"></path><path d="M9 17v1a3 3 0 0 0 6 0v-1"></path></svg>',
                                            ],
                                            [
                                                'headline' => 'Das ist ein USP',
                                                'text' => 'Das ist ein dazugehöriger Text zum USP.',
                                                'priority' => 'icon-inner-secondary',
                                                'btn_link' => '#',
                                                'btn_link_target' => '_self',
                                                'btn_label' => 'Mehr erfahren',
                                                'svg_icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-headset" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round">                            <path stroke="none" d="M0 0h24v24H0z"></path><rect x="4" y="13" rx="2" width="4" height="6"></rect><rect x="16" y="13" rx="2" width="4" height="6"></rect><path d="M4 15v-3a8 8 0 0 1 16 0v3"></path><path d="M18 19a6 3 0 0 1 -6 3"></path></svg>',
                                            ],
                                            [
                                                'headline' => 'Das ist ein USP',
                                                'text' => 'Das ist ein dazugehöriger Text zum USP.',
                                                'priority' => 'icon-inner-primary',
                                                'btn_link' => '#',
                                                'btn_link_target' => '_self',
                                                'btn_label' => 'Mehr erfahren',
                                                'svg_icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-thumb-up" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M7 11v 8a1 1 0 0 1 -1 1h-2a1 1 0 0 1 -1 -1v-7a1 1 0 0 1 1 -1h3a4 4 0 0 0 4 -4v-1a2 2 0 0 1 4 0v5h3a2 2 0 0 1 2 2l-1 5a2 3 0 0 1 -2 2h-7a3 3 0 0 1 -3 -3"></path></svg>',
                                            ],
                                            [
                                                'headline' => 'Das ist ein USP',
                                                'text' => 'Das ist ein dazugehöriger Text zum USP.',
                                                'priority' => '',
                                                'btn_link' => '#',
                                                'btn_link_target' => '_self',
                                                'btn_label' => 'Mehr erfahren',
                                                'svg_icon' => '<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plane-departure" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z"></path><path d="M15 12h5a2 2 0 0 1 0 4h-15l-3 -6h3l2 2h3l-2 -7h3z" transform="rotate(-15 12 12) translate(0 -1)"></path><line x1="3" y1="21" x2="21" y2="21"></line></svg>',
                                            ],
                                        ]
                            ];

                load_template_transient(get_template_directory().'/template-parts/layout-blocks/icon-teaser.php', false, $args);
                ?>
            </div>
        </div>
        <?php
        $args = [
            'uid' => 'index1',
            'content_box_type' => 'boxed',
            'content_alignment_horizontal' => 'center',
            'content_inner_padding' => '50',
            'media_type' => 'image',
            'background_overlay_type' => 'color',
            'background_overlay_color' => 'rgba(255,255,255,.3)',
            'headline' => 'Exploring the world is wonderful!',
            'headline_type' => 'h1',
            'subline' => 'love holiday',
            'subline_type' => 'h3',
            'lead' => 'relax',
            'text' => 'write some more text in this line',
            'btn_link' => '#',
            'btn_label' => 'Join our trips',
            'image' => get_stylesheet_directory_uri().'/assets/img/slide-1.webp',
            'bg_image_alt_text' => '',
        ];
        load_template_transient(get_template_directory().'/template-parts/layout-blocks/category-header-jumbotron.php', false, $args);
        ?>
    </main>
<?php
get_footer();
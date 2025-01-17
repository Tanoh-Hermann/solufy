<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanoh/grav_labo/angahi-v5/user/plugins/seo/blueprints/seo.yaml',
    'modified' => 1590068944,
    'data' => [
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'seo' => [
                            'type' => 'tab',
                            'title' => 'SEO',
                            'fields' => [
                                'tabs1' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'title' => 'Settings',
                                    'fields' => [
                                        'googlefields' => [
                                            'type' => 'tab',
                                            'title' => 'Google',
                                            'fields' => [
                                                'header.googletitle' => [
                                                    'type' => 'text',
                                                    'label' => 'PLUGIN_SEO.GOOGLE_TITLE',
                                                    'id' => 'text'
                                                ],
                                                'header.googledesc' => [
                                                    'type' => 'textarea',
                                                    'label' => 'PLUGIN_SEO.GOOGLE_DESC',
                                                    'id' => 'desc'
                                                ],
                                                'header.googlepreview' => [
                                                    'type' => 'google',
                                                    'label' => 'PLUGIN_SEO.GOOGLE_PREVIEWDESC'
                                                ]
                                            ]
                                        ],
                                        'twitterfields' => [
                                            'type' => 'tab',
                                            'title' => 'Twitter',
                                            'fields' => [
                                                'columns' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column1' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_ADMIN.ENABLED',
                                                                    'config-default@' => 'plugins.seo.twitter_default',
                                                                    'highlight' => 1,
                                                                    'help' => 'PLUGIN_ADMIN.ENABLED_HELP',
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.twittercardoptions' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGIN_SEO.TWITTER_CARD_SELECT',
                                                                    'options' => [
                                                                        'summary' => 'PLUGIN_SEO.TWITTER_CARD_SUMMARY',
                                                                        'summary_large_image' => 'PLUGIN_SEO.TWITTER_CARD_SUMLARGIMG'
                                                                    ]
                                                                ],
                                                                'header.titlecardtwitter' => [
                                                                    'type' => 'section',
                                                                    'title' => 'PLUGIN_SEO.TWITTER_CARD_SECTITLE',
                                                                    'underline' => true
                                                                ],
                                                                'header.twittershareimg' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Click here to open the mediapicker',
                                                                    'label' => 'PLUGIN_SEO.TWITTER_SHAREIMG',
                                                                    'preview_images' => true,
                                                                    'id' => 'twittimgselect'
                                                                ],
                                                                'header.twittertitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.TWITTER_TITLE',
                                                                    'id' => 'twittertitle'
                                                                ],
                                                                'header.twitterdescription' => [
                                                                    'type' => 'textarea',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGIN_SEO.TWITTER_DESCRIPTION',
                                                                    'id' => 'twitterdescription'
                                                                ]
                                                            ]
                                                        ],
                                                        'column2' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.twitterlabel' => [
                                                                    'type' => 'section',
                                                                    'text' => 'PLUGIN_SEO.TWITTER_PREVIEWDESC'
                                                                ],
                                                                'header.twitterpreview' => [
                                                                    'type' => 'twitter'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'jsonfield' => [
                                            'type' => 'tab',
                                            'title' => 'Microdata',
                                            'fields' => [
                                                'header.validatepage' => [
                                                    'type' => 'display',
                                                    'markdown' => true,
                                                    'content' => '<a class="button" id="validate" onclick="validatepage()"><i class="fa fa-check"></i>Validate this page microdata</a>'
                                                ],
                                                'header.article_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.article ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.articlefieldset' => [
                                                            'type' => 'fieldset',
                                                            'icon' => 'newspaper-o',
                                                            'title' => 'Article Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.articleenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGIN_SEO.ADD_ARTICLE_MICRODATA',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.article.headline' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.HEADLINE',
                                                                    'placeholder' => 'PLUGIN_SEO.ARTICLE_PLACEHOLDER'
                                                                ],
                                                                'header.article.datePublished' => [
                                                                    'type' => 'datetime',
                                                                    'label' => 'PLUGIN_SEO.DATE_PUBLISHED'
                                                                ],
                                                                'header.article.dateModified' => [
                                                                    'type' => 'datetime',
                                                                    'label' => 'PLUGIN_SEO.DATE_MODIFIED'
                                                                ],
                                                                'header.article.description' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'PLUGIN_SEO.ARTICLE_DESCRIPTION',
                                                                    'placeholder' => 'PLUGIN_SEO.ARTICLE_DESC_PLACEHOLDER',
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.image_url' => [
                                                                    'type' => 'mediapicker',
                                                                    'label' => 'PLUGIN_SEO.ARTICLE_IMAGE',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.author' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.ARTICLE_AUTHOR',
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher_logo_url' => [
                                                                    'type' => 'mediapicker',
                                                                    'label' => 'PLUGIN_SEO.PUBLISHER_LOGO',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'disabled' => false,
                                                                    'field_classes' => 'togglearticle'
                                                                ],
                                                                'header.article.publisher_name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.PUBLISHER_NAME',
                                                                    'field_classes' => 'togglearticle'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.musicevent_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.musicevent ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.musiceventfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Music Event',
                                                            'icon' => 'music',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.musiceventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_SEO.ENABLEMUSICEVENT',
                                                                    'highlight' => 1,
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicevents' => [
                                                                    'type' => 'list',
                                                                    'label' => 'PLUGIN_SEO.ADDMUSICEVENT',
                                                                    'style' => 'vertical',
                                                                    'controls' => 'both',
                                                                    'btnLabel' => 'Add a music event',
                                                                    'fields' => [
                                                                        '.musicevent_location_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.LOCATION_NAME',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'placeholder' => 'Chicago Symphony Center'
                                                                        ],
                                                                        '.musicevent_location_address' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.LOCATION_ADDRESS',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'placeholder' => '220 S. Michigan Ave, Chicago, Illinois, USA'
                                                                        ],
                                                                        '.musicevent_location_url' => [
                                                                            'type' => 'text',
                                                                            'placeholder' => 'PLUGIN_SEO.LOCATION_URL_PLACEHOLDER',
                                                                            'label' => 'PLUGIN_SEO.LOCATION_URL'
                                                                        ],
                                                                        '.musicevent_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_NAME',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_image' => [
                                                                            'type' => 'mediapicker',
                                                                            'placeholder' => 'Please click to open the mediapicker',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_IMAGE',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_description' => [
                                                                            'type' => 'textarea',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_DESCRIPTION',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_URL',
                                                                            'placeholder' => 'PLUGIN_SEO.MUSICEVENT_URL_PLACEHOLDER'
                                                                        ],
                                                                        '.musicevent_offers_availability' => [
                                                                            'type' => 'select',
                                                                            'options' => [
                                                                                'http://schema.org/PreOrder' => 'PLUGIN_SEO.PREORDER',
                                                                                'http://schema.org/OutOfStock' => 'PLUGIN_SEO.OUTOFSTOCK',
                                                                                'http://schema.org/PreSale' => 'PLUGIN_SEO.PRESALE',
                                                                                'http://schema.org/InStock' => 'PLUGIN_SEO.INSTOCK',
                                                                                'http://schema.org/Discontinued' => 'PLUGIN_SEO.DISCONTINUED',
                                                                                'http://schema.org/InStoreOnly' => 'PLUGIN_SEO.INSTOREONLY',
                                                                                'http://schema.org/SoldOut' => 'PLUGIN_SEO.SOLDOUT',
                                                                                'http://schema.org/OnlineOnly' => 'PLUGIN_SEO.ONLINEONLY'
                                                                            ],
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.TICKET_URL',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_validFrom' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGIN_SEO.VALID_FROM'
                                                                        ],
                                                                        '.musicevent_offers_price' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_PRICE',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_offers_priceCurrency' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.PRICE_CURRENCY',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'placeholder' => 'USD'
                                                                        ],
                                                                        '.musicevent_performer' => [
                                                                            'type' => 'list',
                                                                            'label' => 'PLUGIN_SEO.ADD_PERFORMER',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'btnLabel' => 'Add a performer',
                                                                            'fields' => [
                                                                                '.performer_type' => [
                                                                                    'type' => 'select',
                                                                                    'label' => 'PLUGIN_SEO.PERFORMER_TYPE',
                                                                                    'options' => [
                                                                                        'MusicGroup' => 'PLUGIN_SEO.MUSICGROUP',
                                                                                        'Person' => 'PLUGIN_SEO.PERSON'
                                                                                    ],
                                                                                    'field_classes' => 'togglemusicevent'
                                                                                ],
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.PERFORMER_NAME'
                                                                                ],
                                                                                '.sameAs' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'Same as',
                                                                                    'placeholder' => 'http://en.wikipedia.org/wiki/Artist_Page'
                                                                                ]
                                                                            ]
                                                                        ],
                                                                        '.musicevent_startdate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_DATE_START',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_enddate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGIN_SEO.MUSICEVENT_DATE_END',
                                                                            'field_classes' => 'togglemusicevent'
                                                                        ],
                                                                        '.musicevent_workPerformed' => [
                                                                            'type' => 'list',
                                                                            'label' => 'PLUGIN_SEO.WORK_PERFORMED',
                                                                            'btnLabel' => 'Add a work',
                                                                            'field_classes' => 'togglemusicevent',
                                                                            'fields' => [
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.WORK_PERFORMED_NAME'
                                                                                ],
                                                                                '.sameAs' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'Wikipedia or official URL',
                                                                                    'field_classes' => 'togglemusicevent'
                                                                                ]
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.conditional_orga' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.organization ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.orgafieldset' => [
                                                            'type' => 'fieldset',
                                                            'icon' => 'building',
                                                            'title' => 'Organization Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.orgaenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'Enable Organization Microdata',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.orga.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization name'
                                                                ],
                                                                'header.orga.description' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization description'
                                                                ],
                                                                'header.orga.legalname' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Registered company name'
                                                                ],
                                                                'header.orga.taxid' => [
                                                                    'type' => 'text',
                                                                    'label' => 'The Tax / Fiscal ID of the organization or person'
                                                                ],
                                                                'header.orga.vatid' => [
                                                                    'type' => 'text',
                                                                    'label' => 'The Value-added Tax ID of the organization or person'
                                                                ],
                                                                'header.orga.streetaddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization street'
                                                                ],
                                                                'header.orga.city' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization City'
                                                                ],
                                                                'header.orga.state' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization State'
                                                                ],
                                                                'header.orga.zipcode' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization Zip Code'
                                                                ],
                                                                'header.orga.areaserved' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Area servered',
                                                                    'btnLabel' => 'Add a location',
                                                                    'fields' => [
                                                                        '.area' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'The geographic area where a service or offered item is provided.',
                                                                            'placeholder' => 'one location per line'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.orga.phone' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Organization Phone'
                                                                ],
                                                                'header.orga.url' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Link to official website of the organization'
                                                                ],
                                                                'header.orga.logo' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Url to Organization Logo',
                                                                    'placeholder' => 'include http://'
                                                                ],
                                                                'header.orgaratingenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'Add rating to this organization',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.orga.ratingValue' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Star Rating',
                                                                    'help' => 'Choose a value between 0 and 5 which should be the average ratings for your product. Make sure the value is consistent with your actual reviews.',
                                                                    'validate' => [
                                                                        'min' => 0,
                                                                        'max' => 5,
                                                                        'step' => 0.1
                                                                    ]
                                                                ],
                                                                'header.orga.reviewCount' => [
                                                                    'type' => 'number',
                                                                    'label' => 'Number of reviews you used for calculating your rating.',
                                                                    'size' => 'small'
                                                                ],
                                                                'header.orga.openingHours' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Opening Hours',
                                                                    'btnLabel' => 'Add opening hours details',
                                                                    'fields' => [
                                                                        '.entry' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Opening hours - Please write the two character day or a range of day (mo-fr) followed by a space and the opening hours"',
                                                                            'placeholder' => 'Exemple: Mo-Fr 09:00-18:00 or Saturday 09:00-15:00'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.orga.foundingDate' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Founding year'
                                                                ],
                                                                'header.orga.email' => [
                                                                    'type' => 'email',
                                                                    'label' => 'Official Email for this Organization'
                                                                ],
                                                                'header.orga.paymentaccepted' => [
                                                                    'type' => 'selectize',
                                                                    'label' => 'Accepted Payments',
                                                                    'placeholder' => 'Visa, Cash, Credit Card, Amex, etc.',
                                                                    'validate' => [
                                                                        'type' => 'commalist'
                                                                    ]
                                                                ],
                                                                'header.orga.founders' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Founders',
                                                                    'btnLabel' => 'Add a founder',
                                                                    'fields' => [
                                                                        '.name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'Founder name'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.orga.similar' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Same as',
                                                                    'fields' => [
                                                                        '.sameas' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Links to page related to this organization (social media, etc.)',
                                                                            'placeholder' => 'http://wikipedia.org/en/companyname'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.orga.offercatalog' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Offer Catalog',
                                                                    'btnLabel' => 'Add offer',
                                                                    'fields' => [
                                                                        '.offer' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Offer product or service',
                                                                            'placeholder' => 'Offer product or service'
                                                                        ],
                                                                        '.description' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Offer product or service description',
                                                                            'placeholder' => 'Offer product or service description'
                                                                        ],
                                                                        '.url' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Offer url',
                                                                            'placeholder' => 'Product or service url'
                                                                        ],
                                                                        '.image' => [
                                                                            'type' => 'text',
                                                                            'style' => 'vertical',
                                                                            'label' => 'Offer image url',
                                                                            'placeholder' => 'Product or service image url'
                                                                        ],
                                                                        '.offereditem' => [
                                                                            'type' => 'list',
                                                                            'label' => 'Offer Item',
                                                                            'btnLabel' => 'Add offer item',
                                                                            'fields' => [
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'style' => 'vertical',
                                                                                    'label' => 'Offer detail',
                                                                                    'placeholder' => 'Product or service detail'
                                                                                ],
                                                                                '.url' => [
                                                                                    'type' => 'text',
                                                                                    'style' => 'vertical',
                                                                                    'label' => 'Offer detail url',
                                                                                    'placeholder' => 'Product or service detail url'
                                                                                ]
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.conditional_event' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.event ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.eventfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Event Microdata',
                                                            'icon' => 'calendar',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.eventenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGIN_SEO.ENABLEORGA',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.addevent' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'btnLabel' => 'Add an event',
                                                                    'controls' => 'both',
                                                                    'label' => 'PLUGIN_SEO.ADD_EVENT',
                                                                    'fields' => [
                                                                        '.event_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_NAME',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_description' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_DESCRIPTION',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_startDate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGIN_SEO.EVENT_START_DATE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_endDate' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'PLUGIN_SEO.EVENT_END_DATE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_offers_price' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_OFFER_PRICE',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_offers_currency' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_OFFER_CURRENCY',
                                                                            'placeholder' => 'USD'
                                                                        ],
                                                                        '.event_offers_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_OFFER_URL'
                                                                        ],
                                                                        '.event_location_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_LOCATION_NAME',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_location_address_streetAddress' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_LOCATION_STREET_ADDRESS',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_location_address_addressLocality' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_LOCATION_ADDRESS_LOCALITY',
                                                                            'field_classes' => 'toggleevent'
                                                                        ],
                                                                        '.event_locssation_address_addressRegion' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.EVENT_LOCATION_ADDRESS_REGION',
                                                                            'field_classes' => 'toggleevent'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.person_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.person ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.personfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Person Microdata',
                                                            'collapsed' => true,
                                                            'icon' => 'address-card-o',
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.personenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGIN_SEO.ENABLE_PERSON',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.addperson' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'btnLabel' => 'Add a person',
                                                                    'controls' => 'both',
                                                                    'label' => 'PLUGIN_SEO.ADD_PERSON',
                                                                    'fields' => [
                                                                        '.person_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.PERSON_NAME',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_jobTitle' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.PERSON_JOB_TITLE',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_address_addressLocality' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.PERSON_ADDRESS_LOCALITY',
                                                                            'field_classes' => 'toggleperson'
                                                                        ],
                                                                        '.person_address_addressRegion' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.PERSON_ADDRESS_REGION',
                                                                            'field_classes' => 'toggleperson'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.musicalbum_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.musicalbum ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.musicalbumfieldset' => [
                                                            'type' => 'fieldset',
                                                            'title' => 'Music Album Microdata',
                                                            'icon' => 'headphones',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.musicalbumenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'PLUGIN_SEO.ADD_MUSICALBUM',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.musicalbums' => [
                                                                    'type' => 'list',
                                                                    'style' => 'vertical',
                                                                    'btnLabel' => 'Add a Music Album',
                                                                    'controls' => 'both',
                                                                    'label' => 'PLUGIN_SEO.ADD_MUSICALBUM',
                                                                    'fields' => [
                                                                        '.musicalbum_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_NAME',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_byArtist_name' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_NAMEOFBAND',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_image' => [
                                                                            'type' => 'mediapicker',
                                                                            'placeholder' => 'Please click to open the mediapicker',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_IMAGE',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_url' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_URL',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_genre' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_GENRE',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_numtracks' => [
                                                                            'type' => 'text',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_TRACK_NUMBER',
                                                                            'field_classes' => 'togglemusicalbum'
                                                                        ],
                                                                        '.musicalbum_track' => [
                                                                            'type' => 'list',
                                                                            'field_classes' => 'togglemusicalbum',
                                                                            'label' => 'PLUGIN_SEO.MUSICALBUM_ADD_TRACK',
                                                                            'default' => NULL,
                                                                            'fields' => [
                                                                                '.position' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.MUSICALBUM_TRACK_POSITION'
                                                                                ],
                                                                                '.name' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.MUSICALBUM_TRACK_NAME'
                                                                                ],
                                                                                '.url' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.MUSICALBUM_TRACK_URL'
                                                                                ],
                                                                                '.duration' => [
                                                                                    'type' => 'text',
                                                                                    'label' => 'PLUGIN_SEO.MUSICALBUM_TRACK_DURATION'
                                                                                ]
                                                                            ]
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.product_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.product ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.productfieldset' => [
                                                            'type' => 'fieldset',
                                                            'icon' => 'shopping-bag',
                                                            'title' => 'Product Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.productenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'Add Product Microdata to this page',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.product.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Name of the Product',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.product.category' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Category of the product'
                                                                ],
                                                                'header.product.ratingValue' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Star Rating',
                                                                    'help' => 'Choose a value between 0 and 5 which should be the average ratings for your product. Make sure the value is consistent with your actual reviews.',
                                                                    'validate' => [
                                                                        'min' => 0,
                                                                        'max' => 5,
                                                                        'step' => 0.1
                                                                    ]
                                                                ],
                                                                'header.product.reviewCount' => [
                                                                    'type' => 'number',
                                                                    'label' => 'Number of reviews you used for calculating your rating.',
                                                                    'size' => 'small'
                                                                ],
                                                                'header.product.brand' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Product Brand'
                                                                ],
                                                                'header.product.brandlogo' => [
                                                                    'type' => 'mediapicker',
                                                                    'label' => 'Logo of the brand',
                                                                    'placeholder' => 'Please click to open the mediapicker'
                                                                ],
                                                                'header.product.image' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Add an image for this product',
                                                                    'style' => 'vertical',
                                                                    'btnLabel' => 'Add image',
                                                                    'fields' => [
                                                                        '.productimg' => [
                                                                            'type' => 'mediapicker',
                                                                            'label' => 'Choose an image',
                                                                            'placeholder' => 'Please click to open the mediapicker'
                                                                        ]
                                                                    ]
                                                                ],
                                                                'header.product.description' => [
                                                                    'type' => 'textarea',
                                                                    'label' => 'Product Description'
                                                                ],
                                                                'header.product.addoffer' => [
                                                                    'type' => 'list',
                                                                    'label' => 'Add an offer for this product',
                                                                    'btnLabel' => 'Add offer',
                                                                    'controls' => 'both',
                                                                    'style' => 'vertical',
                                                                    'fields' => [
                                                                        '.offer_availability' => [
                                                                            'type' => 'select',
                                                                            'label' => 'Availability of the product',
                                                                            'options' => [
                                                                                'http://schema.org/InStock' => 'PLUGIN_SEO.INSTOCK',
                                                                                'http://schema.org/PreOrder' => 'PLUGIN_SEO.PREORDER',
                                                                                'http://schema.org/OutOfStock' => 'PLUGIN_SEO.OUTOFSTOCK',
                                                                                'http://schema.org/PreSale' => 'PLUGIN_SEO.PRESALE',
                                                                                'http://schema.org/Discontinued' => 'PLUGIN_SEO.DISCONTINUED',
                                                                                'http://schema.org/InStoreOnly' => 'PLUGIN_SEO.INSTOREONLY',
                                                                                'http://schema.org/SoldOut' => 'PLUGIN_SEO.SOLDOUT',
                                                                                'http://schema.org/OnlineOnly' => 'PLUGIN_SEO.ONLINEONLY'
                                                                            ]
                                                                        ],
                                                                        '.offer_price' => [
                                                                            'type' => 'text',
                                                                            'size' => 'small',
                                                                            'label' => 'Price of the product',
                                                                            'placeholder' => 'e.g: 19.99 (no currency symbol)'
                                                                        ],
                                                                        '.offer_validFrom' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'Offer is valid from (optional)'
                                                                        ],
                                                                        '.offer_validUntil' => [
                                                                            'type' => 'datetime',
                                                                            'label' => 'Offer is valid until (optional)'
                                                                        ],
                                                                        '.offer_priceCurrency' => [
                                                                            'label' => 'PLUGIN_SEO.PRICE_CURRENCY',
                                                                            'type' => 'text',
                                                                            'placeholder' => 'USD'
                                                                        ]
                                                                    ]
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'header.restaurant_condition' => [
                                                    'type' => 'conditional',
                                                    'condition' => 'config.plugins.seo.restaurant ? \'true\' : \'false\'',
                                                    'fields' => [
                                                        'header.restaurantfieldset' => [
                                                            'type' => 'fieldset',
                                                            'icon' => 'cutlery',
                                                            'title' => 'Restaurant Microdata',
                                                            'collapsed' => true,
                                                            'collapsible' => true,
                                                            'fields' => [
                                                                'header.restaurantenabled' => [
                                                                    'type' => 'toggle',
                                                                    'highlight' => 1,
                                                                    'label' => 'Enable Restaurant Microdata on this page',
                                                                    'default' => 0,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.restaurant.name' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_NAME',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.acceptsReservations' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_ACCEPT_RESERVATION',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        'yes' => 'yes',
                                                                        'no' => 'no'
                                                                    ]
                                                                ],
                                                                'header.restaurant.menu' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_MENU_URL',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.image' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_IMAGE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.servesCuisine' => [
                                                                    'placeholder' => 'seafood',
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_CUISINE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.priceRange' => [
                                                                    'type' => 'select',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_PRICE_RANGE',
                                                                    'field_classes' => 'togglerestaurant',
                                                                    'options' => [
                                                                        '$' => '$',
                                                                        '$$' => '$$',
                                                                        '$$$' => '$$$'
                                                                    ]
                                                                ],
                                                                'header.restaurant.address_streetAddress' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_STREET',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_addressLocality' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_LOCALITY',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_addressRegion' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_REGION',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.address_postalCode' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_POSTAL_CODE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ],
                                                                'header.restaurant.telephone' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.RESTAURANT_TELEPHONE',
                                                                    'field_classes' => 'togglerestaurant'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'facebookfields' => [
                                            'type' => 'tab',
                                            'title' => 'Facebook',
                                            'fields' => [
                                                'columns2' => [
                                                    'type' => 'columns',
                                                    'fields' => [
                                                        'column3' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookenable' => [
                                                                    'type' => 'toggle',
                                                                    'label' => 'PLUGIN_SEO.FACEBOOK_ENABLE',
                                                                    'id' => 'facebookenable',
                                                                    'config-default@' => 'plugins.seo.facebook_default',
                                                                    'highlight' => 1,
                                                                    'options' => [
                                                                        1 => 'PLUGIN_ADMIN.YES',
                                                                        0 => 'PLUGIN_ADMIN.NO'
                                                                    ],
                                                                    'validate' => [
                                                                        'type' => 'bool'
                                                                    ]
                                                                ],
                                                                'header.facebooktitle' => [
                                                                    'type' => 'text',
                                                                    'label' => 'PLUGIN_SEO.FACEBOOK_TITLE',
                                                                    'id' => 'facebooktitle',
                                                                    'placeholder' => 'Will default to page title if left empty'
                                                                ],
                                                                'header.facebookdesc' => [
                                                                    'type' => 'textarea',
                                                                    'style' => 'vertical',
                                                                    'label' => 'PLUGIN_SEO.FACEBOOK_DESC',
                                                                    'id' => 'facebookdesc',
                                                                    'placeholder' => 'Max 300 character'
                                                                ],
                                                                'header.facebookauthor' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Link to article author facebook page',
                                                                    'placeholder' => 'http://facebook.com/yourname'
                                                                ],
                                                                'header.facebookimg' => [
                                                                    'type' => 'mediapicker',
                                                                    'placeholder' => 'Please click to open the mediapicker',
                                                                    'id' => 'fbimgselect',
                                                                    'label' => 'PLUGIN_SEO.FACEBOOK_SHAREIMG'
                                                                ]
                                                            ]
                                                        ],
                                                        'column4' => [
                                                            'type' => 'column',
                                                            'fields' => [
                                                                'header.facebookpreview' => [
                                                                    'type' => 'facebook',
                                                                    'label' => 'PLUGIN_SEO.FACEBOOK_PREVIEWDESC'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

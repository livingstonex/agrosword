<?php
return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => false,
            'titleBefore'  => false,
            'description'  => 'Sponsor Agricultural Projects and make money while doing that.',
            'separator'    => ' - ',
            'keywords'     => [],
            'canonical'    => false,
            'robots'       => 'all',
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        'defaults' => [
            'title'       => 'AgroSword - Sponsor Agricultural Projects and make money while doing that',
            'description' => 'Sponsor Agricultural Projects and make money while doing that',
            'url'         => false,
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'AgroSword - Sponsor Agricultural Projects and make money while doing that',
            'description' => 'Sponsor Agricultural Projects and make money while doing that',
            'url'         => false,
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];

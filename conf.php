<?php
return [
    'tmp' => APP_ROOT . 'tmp/', // in debug mode, html curls will be cached
    'mode' => 'production',
    'debug' => false,
    'test' => false,
    'providers' => [
        'Habitaclia' => [
            "/comprar-vivienda-en-barcelones/provincia_barcelona/listainmuebles.htm?bolIsFiltro=0&tip_op_origen=V&hUserClickFilterButton=&filtro_periodo=0&hMinLat=&hMinLon=&hMaxLat=&hMaxLon=&hUseLatLonFilters=&hNumPointsMapa=&ordenar=pvp_inm_desc&f_con_fotos=0"
        ]/*,
        'Fotocasa' => [
            '/comprar/casas/barcelona-capital/listado?crp=1&ts=barcelona%20capital&llm=724,9,8,232,376,8019,0,0,0&f=publicationdate&o=asc&opi=36&ftg=true&pgg=false&odg=false&fav=false&grad=false&fss=false&mode=3&cu=es-es&pbti=2&nhtti=1&craap=1&fs=true&lon=0&lat=0&fav=false'
        ],
        'Pisos' => [
            '/venta/pisos-barcelones/desc/'
        ],
        "Idealista" => [
            "/venta-viviendas/barcelona-barcelona/?ordenado-por=precio-desc"
        ]*/
    ],
    "avoid" => [
        'text' => [ // text == title + description
            "usufructo",
            "beneficiario",
        ],
        "location" => [
            "ciutat meridiana",
            "trinitat nova",
            "trinitat vella",
            "carmel",
            "roquetes"
        ]
    ]
];
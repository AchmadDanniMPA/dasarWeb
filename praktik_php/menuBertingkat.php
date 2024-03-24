<?php
$menu = [
    [
        "nama" => "Beranda",
    ],
    [
        "nama" => "Berita",
        "subMenu" => [
            [
                "nama" => "Wisata",
                "subMenu" => [
                    [
                        "nama" => "Pantai",
                    ],
                    [
                        "nama" => "Gunung",
                    ]
                ]
            ],
            [
                "nama" => "Kuliner",
            ],
            [
                "nama" => "Hiburan",
            ]
        ]
    ],
    [
        "nama" => "Tentang",
    ],
    [
        "nama" => "Kontak",
    ]
];
function tampilMenuBertingkat(array $menu){
    echo "<ul>";
    foreach ($menu as $item){
        echo "<li>{$item['nama']}";
        if(isset($item['subMenu']) && !empty($item['subMenu'])){
            tampilMenuBertingkat($item['subMenu']);
        }
        echo "</li>";
    }
    echo "</ul>";
}
tampilMenuBertingkat($menu);
?>

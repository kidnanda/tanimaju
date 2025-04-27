<?php

$files = [
    'index.php',
    'profil.php',
    'produk.php',
    'blog.php',
    'pemesanan.php'
];

foreach ($files as $file) {
    if (file_exists($file)) {
        $content = file_get_contents($file);
        $content = str_replace(
            'href="https://smkmuhiyo.sch.id"',
            'href="https://smkmuh1-yog.sch.id/"',
            $content
        );
        file_put_contents($file, $content);
        echo "Updated {$file}\n";
    }
}

echo "All files have been updated!\n"; 
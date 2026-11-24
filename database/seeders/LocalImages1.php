<?php

namespace Database\Seeders;

class LocalImages
{
    public const SIZE_200x200 = '200x200';

    public static function getRandomFile(string $size = self::SIZE_200x200): string
    {
        $baseDir = base_path('public/img/blog');

        if (! is_dir($baseDir)) {
            return '';
        }

        $files = glob($baseDir . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

        if (! is_array($files) || count($files) === 0) {
            return '';
        }

        $file = $files[array_rand($files)];

        return $file;
    }
}

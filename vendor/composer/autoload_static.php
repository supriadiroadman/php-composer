<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit17b73f980ee6762fabee7d14b12b48ce
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Supriadi\\Belajar\\' => 17,
            'Supriadi\\' => 9,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Supriadi\\Belajar\\' => 
        array (
            0 => __DIR__ . '/..' . '/schatzy/belajar_php_composer_library/src',
        ),
        'Supriadi\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/src',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit17b73f980ee6762fabee7d14b12b48ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit17b73f980ee6762fabee7d14b12b48ce::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit17b73f980ee6762fabee7d14b12b48ce::$classMap;

        }, null, ClassLoader::class);
    }
}

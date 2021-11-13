<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf05e93c56c9a60289bbc2e995d45a9f4
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'k' => 
        array (
            'kornrunner\\' => 11,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
        ),
        'E' => 
        array (
            'Elliptic\\' => 9,
        ),
        'B' => 
        array (
            'BN\\' => 3,
            'BI\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'kornrunner\\' => 
        array (
            0 => __DIR__ . '/..' . '/kornrunner/keccak/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Elliptic\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/elliptic-php/lib',
        ),
        'BN\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bn-php/lib',
        ),
        'BI\\' => 
        array (
            0 => __DIR__ . '/..' . '/simplito/bigint-wrapper-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf05e93c56c9a60289bbc2e995d45a9f4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf05e93c56c9a60289bbc2e995d45a9f4::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf05e93c56c9a60289bbc2e995d45a9f4::$classMap;

        }, null, ClassLoader::class);
    }
}
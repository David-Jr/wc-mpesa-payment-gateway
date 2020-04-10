<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48079a1837d8629a98c3271e6615c995
{
    public static $prefixLengthsPsr4 = array (
        'K' => 
        array (
            'Karson\\MpesaPhpSdk\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Karson\\MpesaPhpSdk\\' => 
        array (
            0 => __DIR__ . '/..' . '/karson/mpesa-php-sdk/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48079a1837d8629a98c3271e6615c995::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48079a1837d8629a98c3271e6615c995::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit491214a363fd7e350f855d595d03fc97
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bylines\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bylines\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit491214a363fd7e350f855d595d03fc97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit491214a363fd7e350f855d595d03fc97::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

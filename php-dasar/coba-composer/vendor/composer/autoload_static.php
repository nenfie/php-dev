<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe709e5017923dd40b71f691d9390a11
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe709e5017923dd40b71f691d9390a11::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe709e5017923dd40b71f691d9390a11::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

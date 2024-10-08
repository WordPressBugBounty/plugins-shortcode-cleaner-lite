<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8315a0d73fa7c73852e8fed8339552f5
{
    public static $prefixLengthsPsr4 = array (
        'J' => 
        array (
            'JO\\ShortcodeCleaner\\' => 20,
            'JO\\Module\\PluginActionLinks\\' => 28,
            'JO\\Module\\CodestarCustomStyles\\' => 31,
        ),
        'C' => 
        array (
            'Codestar\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'JO\\ShortcodeCleaner\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'JO\\Module\\PluginActionLinks\\' => 
        array (
            0 => __DIR__ . '/..' . '/jozoor/wp-plugin-action-links/src',
        ),
        'JO\\Module\\CodestarCustomStyles\\' => 
        array (
            0 => __DIR__ . '/..' . '/codestar/custom-styles/src',
        ),
        'Codestar\\' => 
        array (
            0 => __DIR__ . '/..' . '/codestar/codestar/core',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8315a0d73fa7c73852e8fed8339552f5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8315a0d73fa7c73852e8fed8339552f5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}

<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c7db6c06fb0ebfbb7e96098f7c0f359
{
    public static $prefixLengthsPsr4 = array (
        '\\' => 
        array (
            '\\' => 1,
        ),
    );

    public static $prefixDirsPsr4 = array (
        '\\' => 
        array (
            0 => __DIR__ . '/..' . '/src',
        ),
    );

    public static $classMap = array (
        'config\\database' => __DIR__ . '/..' . '/src/config/config.php',
        'config\\website' => __DIR__ . '/..' . '/src/config/config.php',
        'lib\\random' => __DIR__ . '/..' . '/src/lib/random.php',
        'lib\\word' => __DIR__ . '/..' . '/src/lib/word.php',
        'models\\Request' => __DIR__ . '/..' . '/src/models/stage1.php',
        'models\\action' => __DIR__ . '/..' . '/src/models/aksi_login.php',
        'models\\grab' => __DIR__ . '/..' . '/src/models/flag.php',
        'models\\insert' => __DIR__ . '/..' . '/src/models/aksi_register.php',
        'system\\getView' => __DIR__ . '/..' . '/src/system/Controllers.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7c7db6c06fb0ebfbb7e96098f7c0f359::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7c7db6c06fb0ebfbb7e96098f7c0f359::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7c7db6c06fb0ebfbb7e96098f7c0f359::$classMap;

        }, null, ClassLoader::class);
    }
}

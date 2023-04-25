<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5832d258f930273c8347cbcf5dbe652a
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Ghike\\EmojiPicker\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ghike\\EmojiPicker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5832d258f930273c8347cbcf5dbe652a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5832d258f930273c8347cbcf5dbe652a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5832d258f930273c8347cbcf5dbe652a::$classMap;

        }, null, ClassLoader::class);
    }
}

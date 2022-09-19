<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb3a083bb8e86a6990d2d8b7c90da4dd3
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb3a083bb8e86a6990d2d8b7c90da4dd3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb3a083bb8e86a6990d2d8b7c90da4dd3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb3a083bb8e86a6990d2d8b7c90da4dd3::$classMap;

        }, null, ClassLoader::class);
    }
}
<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8be7dd529640467e5cad0375a334f187
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Darkpirate\\\\controllers\\' => 24,
            'Darkpirate\\\\PHPmailer\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Darkpirate\\\\controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/controllers',
        ),
        'Darkpirate\\\\PHPmailer\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/PHPmailer',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Darkpirate\\PHPmailer\\PHPMailer' => __DIR__ . '/../..' . '/src/PHPmailer/PHPmailer.php',
        'Darkpirate\\PHPmailer\\phpmailerException' => __DIR__ . '/../..' . '/src/PHPmailer/phpmailerException.php',
        'Darkpirate\\controllers\\controllers' => __DIR__ . '/../..' . '/src/controllers/controllers.php',
        'Darkpirate\\controllers\\leafmailer' => __DIR__ . '/../..' . '/src/controllers/leafmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8be7dd529640467e5cad0375a334f187::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8be7dd529640467e5cad0375a334f187::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8be7dd529640467e5cad0375a334f187::$classMap;

        }, null, ClassLoader::class);
    }
}
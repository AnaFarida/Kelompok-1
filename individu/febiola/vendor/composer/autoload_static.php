<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc218cf4dda6588ea42bc604daf6a1edb
{
    public static $classMap = array (
        'FPDF' => __DIR__ . '/..' . '/setasign/fpdf/fpdf.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitc218cf4dda6588ea42bc604daf6a1edb::$classMap;

        }, null, ClassLoader::class);
    }
}

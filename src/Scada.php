<?php

namespace B2\Font;

class Scada extends \B2\Composer\PackageNpmAsset
{
    static $npm_package_name = 'npm-asset/bors-font-scada-asset';

    static function local_uses()
    {
        $asset = \B2\cfg('npm-asset.path', '/npm-asset') . '/' . basename(static::$npm_package_name);

        return [
            $asset.'/css/scada-embed.woff.css',
            $asset.'/js/scada-local-storage-pre.js',
        ];
    }
}

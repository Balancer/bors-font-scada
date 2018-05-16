<?php

namespace B2\Font;

class Scada extends \B2\Composer\PackageNpmAsset
{
    static $npm_package_name = 'npm-asset/bootstrap';

    static $use_jquery = true;

    static function local_uses()
    {
        $asset = \B2\cfg('npm-asset.path', '/npm-asset');

        return [
            $asset.'/css/scada-embed.woff.css',
            $asset.'/js/scada-local-storage-pre.js',
        ];
    }
}

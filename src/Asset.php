<?php
/**
 * Asset.php file.
 *
 * @author Dirk Adler <adler@spacedealer.de>
 * @link http://www.spacedealer.de
 * @copyright Copyright &copy; 2014 spacedealer GmbH
 */

namespace spacedealer\backbone;

use yii\web\AssetBundle;

/**
 * Class Asset
 *
 * @package spacedealer\backbone
 */
class Asset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $js = [
        'underscore/underscore.js',
        'backbone/backbone.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}

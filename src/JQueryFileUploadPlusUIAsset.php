<?php
/**
 * @copyright Copyright (c) 2016 Vladyslav Holovko (vlad.holovko@gmail.com)
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace kevin021788\jqueryfileupload;

use yii\web\AssetBundle;

class jQueryFileUploadPlusUIAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-file-upload';
    public $css = [
        'css/jquery.fileupload-ui.css',
    ];
    public $js = [
        // <!-- The File Upload user interface plugin -->
        "js/jquery.fileupload-ui.js"
    ];
    public $depends = [
        'kevin021788\jqueryfileupload\JavascriptTemplatesAsset',
        'kevin021788\jqueryfileupload\JQueryFileUploadPlusAsset'
    ];
}

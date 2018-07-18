<?php
/**
 * @copyright Copyright (c) 2016 Vladyslav Holovko (vlad.holovko@gmail.com)
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace kevin021788\jqueryfileupload;

use yii\web\AssetBundle;

class jQueryFileUploadPlusAsset extends AssetBundle
{
    public $sourcePath = '@bower/blueimp-file-upload';
    public $js = [
        // <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
        "js/jquery.iframe-transport.js",
        // <!-- The File Upload processing plugin -->
        "js/jquery.fileupload-process.js",
        // <!-- The File Upload image preview & resize plugin -->
        "js/jquery.fileupload-image.js",
        // <!-- The File Upload audio preview plugin -->
        "js/jquery.fileupload-audio.js",
        // <!-- The File Upload video preview plugin -->
        "js/jquery.fileupload-video.js",
        // <!-- The File Upload validation plugin -->
        "js/jquery.fileupload-validate.js"
    ];
    public $depends = [
        'kevin021788\jqueryfileupload\JQueryFileUploadAsset',
        'kevin021788\jqueryfileupload\LoadImageAsset',
        'kevin021788\jqueryfileupload\Canvas2BlobAsset'
    ];
}

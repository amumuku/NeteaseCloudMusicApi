<?php
/**
 * Created by PhpStorm.
 * User: kilingzhang
 * Date: 2020-04-18
 * Time: 15:44
 */

namespace NeteaseCloudMusicApi\V1\Search;

use NeteaseCloudMusicApi\Controller;

/**
 * Class Defaultkeyword
 * @package NeteaseCloudMusicApi\V1\Search
 *
 * 默认搜索关键词
 */
class Defaultkeyword extends Controller
{
    protected $uri = 'http://interface3.music.163.com/eapi/search/defaultkeyword/get';

    protected $params = [];

    protected $options = [
        'crypto' => 'eapi',
        'url' => '/api/search/defaultkeyword/get'
    ];
}
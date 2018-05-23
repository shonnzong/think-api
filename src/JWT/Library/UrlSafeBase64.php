<?php
namespace Shonnzong\Api\JWT\Library;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class UrlSafeBase64
{
     /**
     * 对url进行base64编码
     *
     * @param string
     * @return string
     */
    public static function encode($data)
    {
        return rtrim(strtr(base64_encode($data), '+/', '-_'), '='); 
    }

    /**
     * 对url进行base64解码
     * 
     * @param  string
     * @return string
     */
    public static function decode($data)
    {
        return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT)); 
    }
}
<?php 
namespace Shonnzong\Api\Facades;

use think\Facade;

/**
 * @author   Yang Shonnzong <Shonnzong@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/Shonnzong/think-api
 */
class Response extends Facade
{
    protected static function getFacadeClass()
    {
        return 'Shonnzong\Api\Response\Factory';
    }
}

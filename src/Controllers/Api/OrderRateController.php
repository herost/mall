<?php
/**
 * This file is part of Notadd.
 *
 * @author TwilRoad <269044570@qq.com>
 * @copyright (c) 2017, iBenchu.org
 * @datetime 2017-05-08 15:34
 */
namespace Notadd\Mall\Controllers\Api;

use Notadd\Mall\Handlers\Order\Rate\ListHandler;

/**
 * Class OrderRateController.
 */
class OrderRateController
{
    /**
     * @param \Notadd\Mall\Handlers\Order\Rate\ListHandler $handler
     *
     * @return \Notadd\Foundation\Passport\Responses\ApiResponse|\Psr\Http\Message\ResponseInterface|\Zend\Diactoros\Response
     */
    public function list(ListHandler $handler)
    {
        return $handler->toResponse()->generateHttpResponse();
    }
}

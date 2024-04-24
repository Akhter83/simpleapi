<?php
/**
 * This file is part of the "Simple RESTful-API PHP skeleton"
 *
 * @author Akhter Naheed <akhter83@gmail.com>
 *
 * Project home: https://github.com/akhter83/simpleapi
 *
 * This source file is subject to the license that is bundled
 * with this source code in the file LICENSE.
 *
 * @copyright Copyright 2019, Akhter Naheed <akhter83@gmail.com>, ""  
 *
 */

declare(strict_types = 1);

namespace app\services;

use Throwable;

/**
 * Class ResponseException
 * @package app\services
 */
class ResponseException extends \LogicException
{

    /**
     * ResponseException constructor.
     * @param array|string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message, $code = 500, Throwable $previous = null)
    {
        parent::__construct((is_array($message) ? join(', ', $message) : $message), $code, $previous);
        $container = Container::getContainer();
        /** @var ResponseInterface $response */
        $response = $container->get('response')->withCode($this->getCode())->withError($message);
        exit($response->send());
    }

}
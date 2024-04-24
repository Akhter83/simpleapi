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
 * @copyright Copyright 2019, Akhter Naheed <akhter83@gmail.com> 
 *
 */

declare(strict_types = 1);

namespace app\services;

/**
 * Interface ResponseInterface
 * @package app\services
 */
interface ResponseInterface
{

    /**
     * ResponseInterface constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container);

    /**
     * @param int $code
     * @return ResponseInterface
     */
    public function withCode(int $code): ResponseInterface;

    /**
     * @param string $error
     * @return ResponseInterface
     */
    public function withError(string $error): ResponseInterface;

    /**
     * @param array|string|int|bool|null $response
     * @return ResponseInterface
     */
    public function withResponse($response): ResponseInterface;

    /**
     * @return array
     */
    public function getResponse(): array;

    /**
     * @return string
     */
    public function send(): string;

    /**
     * @return string
     */
    public function sendNotFound(): string;

    /**
     * @return string
     */
    public function sendAlreadyExists(): string;

    /**
     * @return string
     */
    public function sendFailedValidate(): string;

    /**
     * @param int|string|array|bool|null $value
     * @return string
     */
    public function sendResult($value): string;

}
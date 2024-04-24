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
 * Interface ValidatorInterface
 * @package app\services
 */
interface ValidatorInterface
{

    /**
     * ValidationInterface constructor.
     * @param string $name
     * @param string $message
     * @param callable $callable
     */
    public function __construct(string $name, string $message, callable $callable);

    /**
     * @param ValidationInterface $validation
     * @return mixed
     */
    public function __invoke(ValidationInterface $validation): ValidatorInterface;

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getMessage(): string;

    /**
     * @param mixed $value
     * @return bool
     */
    public function validate($value): bool;

}
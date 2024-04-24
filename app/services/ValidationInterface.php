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

/**
 * Interface ValidationInterface
 * @package app\services
 */
interface ValidationInterface
{

    /**
     * ValidationInterface constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container);

    /**
     * @param ValidatorInterface $validator
     * @return mixed
     */
    public function registerValidator(ValidatorInterface $validator);

    /**
     * @param string $name
     * @return ValidatorInterface
     */
    public function getValidator(string $name);

    /**
     * @return array
     */
    public function getErrors(): array;

    /**
     * @param array $rules
     * @return ValidationInterface
     */
    public function withRules(array $rules = array()): ValidationInterface;

    /**
     * @param array $params
     * @return ValidationInterface
     */
    public function withParams(array $params): ValidationInterface;

    /**
     * @return bool
     */
    public function validate();

}
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
 * Interface CommandInterface
 * @package app\services
 */
interface CommandInterface
{

    /**
     * CommandInterface constructor.
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container);

    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return int
     */
    public function getStatus(): int;

    /**
     * @return string
     */
    public function getHelp(): string;

    /**
     * @return void
     */
    public function run();

}
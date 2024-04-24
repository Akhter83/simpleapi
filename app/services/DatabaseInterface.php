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
 * Interface DatabaseInterface
 * @package app\services
 */
interface DatabaseInterface
{

    /**
     * DatabaseInterface constructor.
     * @param array $config
     */
    public function __construct(array $config);

    /**
     * @param string $table
     * @return void
     */
    public function setTable(string $table);

    /**
     * @param string $pkey
     * @return void
     */
    public function setPrimaryKey(string $pkey);

    /**
     * @return \PDO
     */
    public function pdo(): \PDO;

    /**
     * @param array $params
     * @return array
     */
    public function getPlaceholder(array $params): array;

    /**
     * @param array $params
     * @return array
     */
    public function get(array $params): array;

    /**
     * @param array $params
     * @return int
     */
    public function insert(array $params): int;

    /**
     * @param array $params
     * @return int
     */
    public function update(array $params): int;

    /**
     * @param array $params
     * @return bool
     */
    public function delete(array $params): bool;
    
}
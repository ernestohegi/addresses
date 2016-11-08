<?php

namespace framework\Services;

/**
 * Handles databse interactions.
 */
interface DatabaseServiceInterface
{
    /**
     * @param array $fields
     * @param int $id
     * @param string namespace $entity
     * @return namespace $entiy
     *
     */
    public function selectWithEntity(array $fields, $id, $entity);

    /**
     * @param array $data [field => value, ...]
     * @return int inserted row id
     */
    public function create(array $data);

    /**
     * @param string $name
     * @param string $code
     * @param string $address
     *
     * @return int inserted row id
     */
    public function update($id);

    /**
     * @param int $id
     * @return bool
     */
    public function delete($id);

    /**
     * @param string $table
     */
    public function setTable($table);
}

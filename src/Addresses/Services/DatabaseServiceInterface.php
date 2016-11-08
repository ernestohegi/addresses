<?php

namespace Addresses\Services;

/**
 * Handles databse interactions.
 */
interface DatabaseServiceInterface
{
    /**
     * @param array $fields
     */
    public function select(array $fields);

    /**
     * @return array
     */
    public function create(array $data);

    /**
     * @param string $name
     * @param string $code
     * @param string $address
     * @return array
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

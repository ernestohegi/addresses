<?php

namespace Addresses\Services;

interface DatabaseInterface
{
    /**
     * @param array $fields
     */
    public function select(array $fields);

    /**
     * @param array $data
     * @param string $code
     * @param string $address
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
}

<?php
namespace Tree\Factory;

interface ItemFactoryInterface {
    /**
     * @param int $value
     */
    public function createItem($value);
}
<?php
namespace Tree\Factory;

final class ItemFactory implements ItemFactoryInterface {
    /**
     *
     * @var ItemInterface $item 
     */
    private $item;

    /**
     * @param Item $item
     */
    public function __construct(Item $item) {
        $this->item = $item;
    }

    /**
     * @param int $value
     * 
     * @return \Tree\Item
     */
    public function createItem($value) {
        return new Item($value);
    }
    
}
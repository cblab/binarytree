<?php
namespace BinaryTree;

final class Item implements ItemInterface {
    
    /**
     * @var string value
     */
    private $value;
    
    /**
     * @param string $value
     */
    public function __construct($value) {
        $this->value = $value;
    }
    
    /**
     * @return string
     */
    public function getValue(): string {
        return $this->value;
    }
}
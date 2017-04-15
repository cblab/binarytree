<?php
namespace Tree\Factory;

final class Item implements ItemInterface {
    
    /**
     * @var int value
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
    public function getValue(): int {
        return $this->value;
    }
    
    /**
     * @param int $value
     */
    public function setValue($value) {
        $this->value = $value;
    }
}
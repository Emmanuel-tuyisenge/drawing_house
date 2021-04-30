<?php

class MyHouse
{
    /**
     * @var string
     */
    private $color;

    /**
     * @var int
     */
    private $size;

    public function __construct(string $color, int $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function generate(string $color, int $size)
    { 
        
        echo
        '<p class="houseDesign">
            <div class="facade" style="background:' .$color. ';width:' .$size. 'px; ">
                <div class="door components"></div>
                <div class="window components"></div>
            </div>
            <div class="roof" style="border-color: transparent transparent '.$color.'"></div>
        </p>'
        ;   
        
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSize(): int
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize(int $size): void
    {
        $this->size = $size;
    }

}
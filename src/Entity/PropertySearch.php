<?php

namespace App\Entity;

use \Symfony\Component\Validator\Constraints as Asserts;

class PropertySearch
{

    /**
     * @var int|null
     * @Asserts\Range(min=1000) 
     */
    private $maxPrice;

    /**
     * @var int|null
     * @Asserts\Range(min=10, max=400) 
     */
    private $minSurface;

    /**
     * @var int|null
     * @Asserts\Range(min=10, max=400) 
     */
    private $maxSurface;

    /**
     * @var int|null
     * @Asserts\Range(min=1, max=10) 
     */
    private $nbrRooms;

    /**
     * @return int|null
     */
    public function getMaxPrice(): ?int
    {
        return $this->maxPrice;
    }

    /**
     * @param int|null $maxPrice
     * @return PropertySearch
     */
    public function setMaxPrice(int $maxPrice): PropertySearch
    {
        $this->maxPrice = $maxPrice;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNbrRooms(): ?int
    {
        return $this->nbrRooms;
    }

    /**
     * @param int|null $nbrRooms
     * @return PropertySearch
     */
    public function setNbrRooms(int $nbrRooms): PropertySearch
    {
        $this->nbrRooms = $nbrRooms;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMinSurface(): ?int
    {
        return $this->minSurface;
    }

    /**
     * @param int|null $minSurface
     * @return PropertySearch
     */
    public function setMinSurface(int $minSurface): PropertySearch
    {
        $this->minSurface = $minSurface;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getMaxSurface(): ?int
    {
        return $this->maxSurface;
    }

    /**
     * @param int|null $maxSurface
     * @return PropertySearch
     */
    public function setMaxSurface(int $maxSurface): PropertySearch
    {
        $this->maxSurface = $maxSurface;
        return $this;
    }
}

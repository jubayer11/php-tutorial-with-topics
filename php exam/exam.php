<?php

interface Reptile
{
    public function layEgg() : ReptileEgg;
}

class FireDragon implements Reptile
{
    private $reptileType = "fireDragon";
    public function getreptileType()
    {
        return $this->reptileType;
    }
public function layEgg(): ReptileEgg
{
    return new ReptileEgg($this->reptileType);
}
}

class ReptileEgg
{
    private $reptileType;
    private $haveHatched = false;
    public function __construct(string $reptileType)
    {
        $this->reptileType = $reptileType;
    }

    public function hatch() : ?Reptile
    {

        if ($this->haveHatched) {
            throw new Exception("Have hatched!");
        }
        $this->haveHatched = true;
        return new $this->birdType;
    }
}
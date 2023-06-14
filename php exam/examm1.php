<?php

class CropRatio
{
    private $totalWeight;
    private $crops = [];

    public function add(string $name, int $cropWeight): void
    {
        $crops = array();
        $currentCropWeight = 0;
        $check[$name] = $cropWeight;
        array_push($crops, $check);
        if (!array_key_exists($name, $this->crops)) {
            $currentCropWeight = $this->crops[$name];
        }

        $currentCropWeight += $cropWeight;
        $this->totalWeight++;
    }

    public function proportion(string $name): float
    {
        return $this->crops[$name] / $this->totalWeight;
    }
}

$cropRatio = new CropRatio;
$cropRatio->add('Wheat', 4);
$cropRatio->add('Wheat', 5);
$cropRatio->add('Rice', 1);

echo "Wheat: " . $cropRatio->proportion('Wheat');
<?php

namespace Umbijani\SandBox\ClassStep;

class Clothe
{
    protected $name;
    protected $color;
    protected $size;

    public function __construct(array $data)
    {
        $this->name = $data['name'] ?? 'No name';
        $this->size = $data['size'] ?? 'No spec size';
        $this->color = $data['color'] ?? 'no color mentioned';
    }

    public function getInfo()
    {
        return $this->size . ' ' . $this->color . ' ' . $this->name;
    }
}

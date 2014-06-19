<?php
class Apple
{
    public function get()
    {
        $water = new Water;
        $sun = new Sun;
 
        return $water->get() + $sun->get();
    }
}


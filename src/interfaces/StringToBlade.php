<?php

namespace artatics\StringToBlade\interfaces;

interface StringToBlade
{
    public function compileWiths($value, array $args = []);
}
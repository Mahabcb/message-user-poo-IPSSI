<?php

namespace App;

interface AdminInterface{
    public function administrer() : string;
    public function moderer(): string ;
}
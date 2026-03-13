<?php

namespace App\Enums;

enum ProductType: string
{
    case RANK = 'rango';
    case EVENT = 'evento';
    case DONATION = 'donacion';
    case ITEM = 'items';
}
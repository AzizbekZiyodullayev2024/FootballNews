<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Primary key ustunini belgilash
    protected $primaryKey = 'team_id';
    
    // Agar sizda avtomatik ravishda inkrementatsiya bo'lsa
    public $incrementing = true;

    // Boshqa kerakli sozlamalar...
}

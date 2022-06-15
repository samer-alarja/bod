<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menutitle extends Model
{
    protected $table="menu-iteam";
    protected $fillable=["id","link","menu","lang","active"];
}

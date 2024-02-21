<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $fillable = ['name', 'designation', 'photo', 'link_twitter', 'link_facebook', 'link_instagram', 'link_linkedin'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ValidateTrait;

class BaseModel extends Model
{
    use ValidateTrait;

    protected $guarded = ["id"];

    protected $dateFormat = 'U';

    protected $casts = [
        'created_at' => 'timestamp',
        'updated_at' => 'timestamp',
        'deleted_at' => 'timestamp',
    ];
}

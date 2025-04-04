<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = [];
    public $timestamps = true;
    public $incrementing = true;
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}

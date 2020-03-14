<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UploadDocuments extends Model
{
    //
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = ['aadhar_card', 'pan_card', 'bank_passbook', 'employee_id'];
}

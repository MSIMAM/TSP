<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schollar extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'schollar_name'
    ];
    /**
     * Get the user associated with the Schollar
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function programe()
    {
        return $this->hasMany(Programe::class, 'uuid', 'schollar_uuid');
    }

}

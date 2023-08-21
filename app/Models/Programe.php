<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Programe extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'schollar_uuid',
        'name',
    ];
    /**
     * Get the user that owns the Programe
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function schollar()
    {
        return $this->belongsTo(Schollar::class, 'schollar_uuid', 'uuid');
    }

}

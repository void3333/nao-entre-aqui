<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inspection extends Model
{
    use HasFactory;
    protected $fillable = [
        'serviceOrder',
        'certificate',
        'scope',
        'container',
        'status',
        'inspector',
        'staff',
        'date',
        'location',
        'destination',
        'order',
        'contract',
        'nomination',
        'exporter',
        'importer',
        'productQty',
        'generalProduct',
        'netW',
        'grossW',
    ];
    
    public function owner(): BelongsTo
    {
        return $this->belongsTo(
            \App\Models\User::class,
            'by_user_id'
        );
    }
}

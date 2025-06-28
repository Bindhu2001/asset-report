<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetAllocate extends Model
{
    protected $table = 'asset_allocate';
    protected $primaryKey = 'allocate_pkey';

    protected $casts = [
        'asset' => 'integer',
    ];

    public function assetModel()
    {
        return $this->belongsTo(AssetManagement::class, 'asset', 'asset_pkey');
    }

    public function employee()
    {
        return $this->belongsTo(EmpDetail::class, 'emp_fkey', 'emp_pkey');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssetManagement extends Model
{
    protected $table = 'asset_management';
    protected $primaryKey = 'asset_pkey';

    public function type()
{
    return $this->belongsTo(AssetType::class, 'Type', 'asset_type_pkey');
}
}

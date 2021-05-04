<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Bitfumes\Multiauth\Model\Admin;

class Maps extends Model
{
    use HasFactory;

    protected $guarded = [];

        /**
         * Get the admin that owns the Maps
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
         */
        public function admin()
        {
            return $this->belongsTo(Admin::class);
        }

}

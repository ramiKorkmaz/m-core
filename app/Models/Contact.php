<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public const STATUS_NEW = 'new';

    public const STATUS_PROCESSING = 'processing';

    public const STATUS_COMPLETED = 'completed';

    protected $fillable = [

        'name',

        'company',

        'phone',

        'message',

        'status',

        'ip',

        'user_agent',

    ];

    protected $casts = [

        'created_at' => 'datetime',

        'updated_at' => 'datetime',

    ];

    public function isNew(): bool
    {
        return $this->status === self::STATUS_NEW;
    }

    public function isProcessing(): bool
    {
        return $this->status === self::STATUS_PROCESSING;
    }

    public function isCompleted(): bool
    {
        return $this->status === self::STATUS_COMPLETED;
    }
}

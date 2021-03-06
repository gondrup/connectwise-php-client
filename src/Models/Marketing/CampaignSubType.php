<?php

namespace Spinen\ConnectWise\Models\Marketing;

use Spinen\ConnectWise\Support\Model;

class CampaignSubType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'typeId' => 'integer',
        'name' => 'string',
    ];
}

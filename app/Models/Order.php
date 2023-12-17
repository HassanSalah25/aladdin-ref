<?php

namespace App\Models;

use App\Events\OrderCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const VERIFIED = 1;
    const NOTVERIFIED = 0;


    protected $fillable = [
      'plan_id',
      'name',
      'phone',
      'activity_name',
      'activity_phone',
      'activity_address',
      'activity_email',
      'activity_description',
      'activity',
      'status',
      'verified',
    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function getStatus()
    {
        if($this->status == 0)
            return __('backend.order.waiting');

        elseif($this->status == 1)
            return __('backend.order.contacted');
    }

    public function isVerified()
    {
        if($this->verified == Order::VERIFIED)
            return __('backend.order-verified');
        if($this->verified == Order::NOTVERIFIED)
            return __('backend.order-not-verified');
    }

    protected $dispatchesEvents = [
        'created' => OrderCreated::class,
    ];

}

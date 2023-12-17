<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    const PLAN_TYPE_FREE = 1;
    const PLAN_TYPE_PAID = 2;
    const PLAN_TYPE_ADMIN = 3;

    const PLAN_LIFETIME = 1;
    const PLAN_MONTHLY = 2;
    const PLAN_QUARTERLY = 3;
    const PLAN_YEARLY = 4;

    const PLAN_ENABLED = 1;
    const PLAN_DISABLED = 0;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'plan_type',
        'plan_name',
        'plan_max_featured_listing',
        'plan_features',
        'plan_period',
        'plan_price',
        'plan_status',
        'plan_max_free_listing',
        'plan_name_ar',
        'plan_description_ar',
        'plan_description',
    ];

    /**
     * Get the subscriptions for the plan.
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Models\Subscription');
    }

    public function features()
    {
        return $this->belongsToMany(Feature::class, 'plan_features');
    }

    public function features_value()
    {
        return $this->hasMany(PlanFeature::class);
    }


    public function assignToUser(User $user, int $subscriptionMonths,int $payment_type)
    {
        $endDate = now()->addMonths($subscriptionMonths);

        $subscription = new Subscription([
            'user_id' => $user->id,
            'plan_id' => $this->id,
            'subscription_start_date' => now(),
            'subscription_end_date' => $endDate,
            'subscription_end_date' => $endDate,
            'payment_type' => $payment_type,
        ]);

        $user->subscription()->save($subscription);

        return $subscription;
    }

    /**
     * Check if a user has an active subscription for this plan.
     *
     * @param User $user
     * @return bool
     */
    public function hasActiveSubscription(Subscription $subscription)
    {
        return $subscription &&
            $subscription->plan_id === $this->id &&
            now()->lt($subscription->subscription_end_date);
    }

    public function check_plan($id)
    {
        return $this->features_value->where('feature_id',$id)->first();
    }


}

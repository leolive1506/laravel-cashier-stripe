<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Cashier\Subscription as CashierSubscription;
use Illuminate\Database\Eloquent\Model;

class Subscription extends CashierSubscription
{
    use HasFactory;
}

<?php

namespace Database\Seeders;

use App\Models\PaymentPlataform;
use Illuminate\Database\Seeder;

class PaymentPlataformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentPlataform::create([
            'name'=>'Paypal',
            'image'=>'img/payment-plataforms/paypal.jpg'
        ]);

        PaymentPlataform::create([
            'name'=>'Stripe',
            'image'=>'img/payment-plataforms/stripe.jpg'
        ]);
        
    }
}

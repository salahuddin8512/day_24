<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function getAllProduct()
    {
        return [
            0=>[
                'id'   => 1,
                'name' => 'T-Shirt',
                'price' => '2000',
                'description' => 'descrition',
                'image' => asset('img/2.jpg'),
            ],
            1 =>[
                'id'   => 2,
                'name' => 'T-Shirt',
                'price' => '1000',
                'description' => 'descrition',
                'image' => asset('img/3.jpg'),
            ],
            2 =>[
                'id'   => 3,
                'name' => 'T-Shirt',
                'price' => '1500',
                'description' => 'descrition',
                'image' => asset('img/4.jpg'),
            ],
            3 =>[
                'id'   => 4,
                'name' => 'T-Shirt',
                'price' => '1400',
                'description' => 'descrition',
                'image' => asset('img/5.jpg'),
            ],
            4 =>[
                'id'   => 5,
                'name' => 'T-Shirt',
                'price' => '1300',
                'description' => 'descrition',
                'image' => asset('img/6.jpg'),
            ],
        ];
    }
}

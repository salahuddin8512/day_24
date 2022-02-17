<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    private $products;


    public function index()
    {
        return view('test');
    }
    public function bitm()
    {
        $this->city = 'Dhaka';
        $this->mobile = '01719738512';
        $this->data= [
            0=>[
                'name' => 'Salah Uddin',
                'city' => 'Bogura',
                'mobile' => '01719868312',
            ],
             1 =>[
                'name' => 'Jahid',
                'city' => 'Gazipur',
                'mobile' => '01719868112',
            ],
            2 =>[
                'name' => 'DADa',
                'city' => 'Dhaka',
                'mobile' => '01555868112',
            ],
        ];
        return view('bitm',[
            'a'=>$this->city,
            'j'=>$this->mobile,
            'b'=>$this->data]);
    }
    public function about()
    {
        $this->products = Product::getAllProduct();
//        return $this->products;
        return view('about',['products' =>$this->products]);
    }
    public function detail($id)
    {
        $this->products = Product::getAllProduct();
        foreach ($this->products as $item)
        {
            if ($item['id'] == $id)
            {
                return view('detail',['data' =>$item]);
            }

        }

    }
    public function contact()
    {
        return view('contact');
    }
}

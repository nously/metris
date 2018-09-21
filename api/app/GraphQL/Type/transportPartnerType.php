<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class transportPartnerType extends BaseType
{
    protected $attributes = [
        'name' => 'transportPartnerType',
        'description' => 'A type'
    ];

    public function fields()
    {
        return [
            'id'		=> 	[
                'name' 	=> 'id', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ], 
            'lat'		=> 	[
                'name' 	=> 'lat', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ], 
            'long'		=> 	[
                'name' 	=> 'long', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ], 
            'car_amount'		=> 	[
                'name' 	=> 'car_amount', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ], 
            'logo'		=> 	[
                'name' 	=> 'logo', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'cs_phone'		=> 	[
                'name' 	=> 'cs_phone', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'id_account'		=> 	[
                'name' 	=> 'id_account', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ],    
        ];
    }
}

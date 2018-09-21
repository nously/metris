<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class transportLimitType extends BaseType
{
    protected $attributes = [
        'name' => 'transportLimitType',
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
           
            'date'		=> 	[
                'name' 	=> 'date', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
             
            'car_left'		=> 	[
                'name' 	=> 'car_left', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ], 
           
            'id_transport_partner'		=> 	[
                'name' 	=> 'id_transport_partner', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
            ],    
        ];
    }
}

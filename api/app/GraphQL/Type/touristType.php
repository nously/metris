<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class touristType extends BaseType
{
    protected $attributes = [
        'name' => 'touristType',
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
            'nik'		=> 	[
                'name' 	=> 'nik', 		
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

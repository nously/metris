<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as BaseType;
use GraphQL;

class accountType extends BaseType
{
    protected $attributes = [
        'name' => 'accountType',
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
            'username'		=> 	[
                'name' 	=> 'username', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            
            'email'		=> 	[
                'name' 	=> 'email', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ],     
            'phone'		=> 	[
                'name' 	=> 'phone', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'city'		=> 	[
                'name' 	=> 'city', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'province'		=> 	[
                'name' 	=> 'province', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'name'		=> 	[
                'name' 	=> 'name', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'address'		=> 	[
                'name' 	=> 'address', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            
            'isAdmin'		=> 	[
                'name' 	=> 'isAdmin', 		
                'type' 	=> Type::boolean(),
               
            ], 
         
            'tourist' => [
              
                'type' =>(GraphQL::type('touristType')),
                
                'resolve' => function ($root, $args) {
                   

                    return $root->tourist;
                }
            ],
            
        ];
    }
}

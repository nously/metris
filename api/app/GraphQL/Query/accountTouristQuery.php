<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Model\Account;
class accountTouristQuery extends Query
{
    protected $attributes = [
        'name' => 'accountTouristQuery',
        'description' => 'A query'
    ];

    public function type()
    {
        return  Type::ListOf(GraphQL::type('accountType'));

    }

    public function args()
    {
        return [
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
            'nik'		=> 	[
                'name' 	=> 'nik', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
        //    'tourist'		=> 	[
        //         'type'=> (GraphQL::type('touristType'))
        //     ],  
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return Account::all();
    }
}

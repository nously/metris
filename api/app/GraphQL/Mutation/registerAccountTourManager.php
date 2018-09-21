<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Illuminate\Support\Facades\DB;

use App\Model\Account;
use App\Model\TourManager;
class registerAccountTourManager extends Mutation
{
    protected $attributes = [
        'name' => 'registerAccountTourManager',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return (GraphQL::type('accountType'));

    }

    public function args()
    {
        return [
            'username'		=> 	[
                'name' 	=> 'username', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
            'password'		=> 	[
                'name' 	=> 'password', 		
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
            'type'		=> 	[
                'name' 	=> 'type', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
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
           
            'type'		=> 	[
                'name' 	=> 'type', 		
                'type' 	=> Type::string(),
                'rules' => ['required', 'string'],
            ], 
           
           
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
    //     $Account=Account::username($args['username'])->first();
    //    if ($Account) {
    //     throw new \Exception("Username Exists", 999);
        
    // }else{
    DB::beginTransaction();
    $Account = new Account;
    $Account->username       = $args['username'];
    $Account->password       = $args['password'];
    $Account->name           = $args['name'];
    $Account->email          = $args['email'];
    $Account->phone          = $args['phone'];
    $Account->city           = $args['city'];
    $Account->province       = $args['province'];
    $Account->address        = $args['address'];
    $Account->type           = $args['type'];
    $Account->isAdmin        = $args['isAdmin'];
    $Account->save();

    $TourManager = new TourManager;
    $TourManager->lat            = $args['lat'];
    $TourManager->long           = $args['long'];
    $TourManager->logo           = $args['logo'];
    $TourManager->cs_phone       = $args['cs_phone'];
    $TourManager->id_account     = $Account->id;
    $TourManager->save();

    DB::commit();
    return $Account;
    // }    
    }
}

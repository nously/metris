<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use Illuminate\Support\Facades\DB;

use App\Model\Account;
use App\Model\TransportPartner;
class registerAccountTransportPartner extends Mutation
{
    protected $attributes = [
        'name' => 'registerAccountTransportPartner',
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
                'type' 	=> Type::float(),
                'rules' => ['required', 'float'],
            ], 
            'long'		=> 	[
                'name' 	=> 'long', 		
                'type' 	=> Type::float(),
                'rules' => ['required', 'float'],
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
            'car_amount'		=> 	[
                'name' 	=> 'car_amount', 		
                'type' 	=> Type::int(),
                'rules' => ['required', 'integer'],
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
    $Account->isAdmin        = $args['isAdmin'];
    $Account->type           = $args['type'];
    $Account->save();

    $TransportPartner = new TransportPartner;
    $TransportPartner->car_amount     = $args['car_amount'];
    $TransportPartner->lat            = $args['lat'];
    $TransportPartner->long           = $args['long'];
    $TransportPartner->logo           = $args['logo'];
    $TransportPartner->cs_phone       = $args['cs_phone'];
    $TransportPartner->id_account     = $Account->id;
    $TransportPartner->save();

    DB::commit();
    return $Account;
    // }    
    }
}

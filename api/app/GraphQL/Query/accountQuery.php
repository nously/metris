<?php

namespace App\GraphQL\Query;

use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Model\Account;
class accountQuery extends Query
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

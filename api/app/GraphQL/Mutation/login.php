<?php

namespace App\GraphQL\Mutation;

use Folklore\GraphQL\Support\Mutation;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use GraphQL;
use App\Model\Account;
use GraphQL\Error\Error;

class login extends Mutation
{
    protected $attributes = [
        'name' => 'login',
        'description' => 'A mutation'
    ];

    public function type()
    {
        return (GraphQL::type('accountType'));

    }
    public function authorize($root, $args)
	{
		return true;
    }
    
	public function authenticated($root, $args, $context)
	{
		return true;
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
          
];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        //////////////
		// Retrieve //
		//////////////
		$Account = Account::where('username',$args['username'])->first();

		//////////////////
		// Authenticate //
		//////////////////
		if (!$Account)
		{
			throw new \Exception("Invalid authentication", 1000);
		}

		if (!app('hash')->check($args['password'], $Account->password))
		{
			throw new \Exception("Invalid authentication", 1000);
		}


		// Return
		return 	$Account;
    }
}

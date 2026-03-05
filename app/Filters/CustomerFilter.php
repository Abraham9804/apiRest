<?php 
namespace App\Filters;


use App\Filters\ApiFilter;

class CustomerFilter extends ApiFilter{
    protected $safeParms = [
        'name' => ['eq','lk'],
        'email' => ['eq'],
        'type' => ['eq'],
        'address' => ['eq'],
        'city' => ['eq'],
        'state' => ['eq'],
        'postalCode' => ['eq']
    ];
    protected $columnMap = [
        'postalCode' => 'postal_code'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'lk' => 'like'
    ];

}
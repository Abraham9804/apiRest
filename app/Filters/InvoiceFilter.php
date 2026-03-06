<?php 
namespace App\Filters;
use App\Filters\ApiFilter;



class InvoiceFilter extends ApiFilter{
    protected $safeParms = [
        'customerId' => ['eq'],
        'amount' => ['eq','gt','lt','gte','lte'],
        'status' => ['eq','ne'],
        'billedDate' => ['eq'],
        'paidDate' => ['eq'],
    ];
    protected $columnMap = [
        'customerId' => 'customer_id',
        'billedDate' => 'billed_dated',
        'paidDate' => 'paid_dated'
    ];
    protected $operatorMap = [
        'eq' => '=',
        'ne' => '!=',
        'gt' => '>',
        'lt' => '<',
        'gte' => '>=',
        'lte' => '<=',
        'ne' => '!=',
    ];

}
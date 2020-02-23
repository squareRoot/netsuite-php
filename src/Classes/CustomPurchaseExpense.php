<?php
/**
 * This file is part of the SevenShores/NetSuite library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ryanwinchester/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/ryanwinchester/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/ryanwinchester/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 *
 * generated:  2020-02-19 09:58:55 AM CST
 */

namespace NetSuite\Classes;

class CustomPurchaseExpense {
    public $line;
    public $category;
    public $account;
    public $amount;
    public $taxAmount;
    public $memo;
    public $grossAmt;
    public $taxDetailsReference;
    public $department;
    public $class;
    public $location;
    public $customer;
    public $isBillable;
    public $projectTask;
    public $amortizationSched;
    public $amortizStartDate;
    public $amortizationEndDate;
    public $amortizationResidual;
    public $customFieldList;
    static $paramtypesmap = array(
        "line" => "integer",
        "category" => "RecordRef",
        "account" => "RecordRef",
        "amount" => "float",
        "taxAmount" => "float",
        "memo" => "string",
        "grossAmt" => "float",
        "taxDetailsReference" => "string",
        "department" => "RecordRef",
        "class" => "RecordRef",
        "location" => "RecordRef",
        "customer" => "RecordRef",
        "isBillable" => "boolean",
        "projectTask" => "RecordRef",
        "amortizationSched" => "RecordRef",
        "amortizStartDate" => "dateTime",
        "amortizationEndDate" => "dateTime",
        "amortizationResidual" => "string",
        "customFieldList" => "CustomFieldList",
    );
}
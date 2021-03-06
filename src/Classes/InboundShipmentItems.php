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
 * generated:  2020-04-10 09:56:55 PM UTC
 */

namespace NetSuite\Classes;

class InboundShipmentItems {
    /**
     * @var integer
     */
    public $id;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $purchaseOrder;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $shipmentItem;
    /**
     * @var string
     */
    public $shipmentItemDescription;
    /**
     * @var string
     */
    public $poVendor;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $receivingLocation;
    /**
     * @var float
     */
    public $quantityReceived;
    /**
     * @var float
     */
    public $quantityExpected;
    /**
     * @var float
     */
    public $quantityRemaining;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $unit;
    /**
     * @var float
     */
    public $poRate;
    /**
     * @var float
     */
    public $expectedRate;
    /**
     * @var float
     */
    public $shipmentItemExchangeRate;
    /**
     * @var string
     */
    public $shipmentItemEffectiveDate;
    /**
     * @var float
     */
    public $unitLandedCost;
    /**
     * @var float
     */
    public $totalUnitCost;
    /**
     * @var float
     */
    public $shipmentItemAmount;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $poCurrency;
    /**
     * @var \NetSuite\Classes\RecordRef
     */
    public $incoterm;
    static $paramtypesmap = array(
        "id" => "integer",
        "purchaseOrder" => "RecordRef",
        "shipmentItem" => "RecordRef",
        "shipmentItemDescription" => "string",
        "poVendor" => "string",
        "receivingLocation" => "RecordRef",
        "quantityReceived" => "float",
        "quantityExpected" => "float",
        "quantityRemaining" => "float",
        "unit" => "RecordRef",
        "poRate" => "float",
        "expectedRate" => "float",
        "shipmentItemExchangeRate" => "float",
        "shipmentItemEffectiveDate" => "dateTime",
        "unitLandedCost" => "float",
        "totalUnitCost" => "float",
        "shipmentItemAmount" => "float",
        "poCurrency" => "RecordRef",
        "incoterm" => "RecordRef",
    );
}

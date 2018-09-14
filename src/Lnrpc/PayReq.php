<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PayReq</code>
 */
class PayReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     */
    private $destination = '';
    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     */
    private $payment_hash = '';
    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     */
    private $num_satoshis = 0;
    /**
     * Generated from protobuf field <code>int64 timestamp = 4[json_name = "timestamp"];</code>
     */
    private $timestamp = 0;
    /**
     * Generated from protobuf field <code>int64 expiry = 5[json_name = "expiry"];</code>
     */
    private $expiry = 0;
    /**
     * Generated from protobuf field <code>string description = 6[json_name = "description"];</code>
     */
    private $description = '';
    /**
     * Generated from protobuf field <code>string description_hash = 7[json_name = "description_hash"];</code>
     */
    private $description_hash = '';
    /**
     * Generated from protobuf field <code>string fallback_addr = 8[json_name = "fallback_addr"];</code>
     */
    private $fallback_addr = '';
    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9[json_name = "cltv_expiry"];</code>
     */
    private $cltv_expiry = 0;
    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10[json_name = "route_hints"];</code>
     */
    private $route_hints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $destination
     *     @type string $payment_hash
     *     @type int|string $num_satoshis
     *     @type int|string $timestamp
     *     @type int|string $expiry
     *     @type string $description
     *     @type string $description_hash
     *     @type string $fallback_addr
     *     @type int|string $cltv_expiry
     *     @type \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $route_hints
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     * @return string
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * Generated from protobuf field <code>string destination = 1[json_name = "destination"];</code>
     * @param string $var
     * @return $this
     */
    public function setDestination($var)
    {
        GPBUtil::checkString($var, True);
        $this->destination = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     * @return string
     */
    public function getPaymentHash()
    {
        return $this->payment_hash;
    }

    /**
     * Generated from protobuf field <code>string payment_hash = 2[json_name = "payment_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     * @return int|string
     */
    public function getNumSatoshis()
    {
        return $this->num_satoshis;
    }

    /**
     * Generated from protobuf field <code>int64 num_satoshis = 3[json_name = "num_satoshis"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumSatoshis($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_satoshis = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 4[json_name = "timestamp"];</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 4[json_name = "timestamp"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expiry = 5[json_name = "expiry"];</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * Generated from protobuf field <code>int64 expiry = 5[json_name = "expiry"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description = 6[json_name = "description"];</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 6[json_name = "description"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string description_hash = 7[json_name = "description_hash"];</code>
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     * Generated from protobuf field <code>string description_hash = 7[json_name = "description_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionHash($var)
    {
        GPBUtil::checkString($var, True);
        $this->description_hash = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fallback_addr = 8[json_name = "fallback_addr"];</code>
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallback_addr;
    }

    /**
     * Generated from protobuf field <code>string fallback_addr = 8[json_name = "fallback_addr"];</code>
     * @param string $var
     * @return $this
     */
    public function setFallbackAddr($var)
    {
        GPBUtil::checkString($var, True);
        $this->fallback_addr = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9[json_name = "cltv_expiry"];</code>
     * @return int|string
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     * Generated from protobuf field <code>int64 cltv_expiry = 9[json_name = "cltv_expiry"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkInt64($var);
        $this->cltv_expiry = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10[json_name = "route_hints"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteHints()
    {
        return $this->route_hints;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 10[json_name = "route_hints"];</code>
     * @param \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\RouteHint::class);
        $this->route_hints = $arr;

        return $this;
    }

}


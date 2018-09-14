<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc\PendingChannelsResponse;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.PendingChannelsResponse.PendingChannel</code>
 */
class PendingChannel extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string remote_node_pub = 1[json_name = "remote_node_pub"];</code>
     */
    private $remote_node_pub = '';
    /**
     * Generated from protobuf field <code>string channel_point = 2[json_name = "channel_point"];</code>
     */
    private $channel_point = '';
    /**
     * Generated from protobuf field <code>int64 capacity = 3[json_name = "capacity"];</code>
     */
    private $capacity = 0;
    /**
     * Generated from protobuf field <code>int64 local_balance = 4[json_name = "local_balance"];</code>
     */
    private $local_balance = 0;
    /**
     * Generated from protobuf field <code>int64 remote_balance = 5[json_name = "remote_balance"];</code>
     */
    private $remote_balance = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $remote_node_pub
     *     @type string $channel_point
     *     @type int|string $capacity
     *     @type int|string $local_balance
     *     @type int|string $remote_balance
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string remote_node_pub = 1[json_name = "remote_node_pub"];</code>
     * @return string
     */
    public function getRemoteNodePub()
    {
        return $this->remote_node_pub;
    }

    /**
     * Generated from protobuf field <code>string remote_node_pub = 1[json_name = "remote_node_pub"];</code>
     * @param string $var
     * @return $this
     */
    public function setRemoteNodePub($var)
    {
        GPBUtil::checkString($var, True);
        $this->remote_node_pub = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string channel_point = 2[json_name = "channel_point"];</code>
     * @return string
     */
    public function getChannelPoint()
    {
        return $this->channel_point;
    }

    /**
     * Generated from protobuf field <code>string channel_point = 2[json_name = "channel_point"];</code>
     * @param string $var
     * @return $this
     */
    public function setChannelPoint($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_point = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3[json_name = "capacity"];</code>
     * @return int|string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * Generated from protobuf field <code>int64 capacity = 3[json_name = "capacity"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCapacity($var)
    {
        GPBUtil::checkInt64($var);
        $this->capacity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 local_balance = 4[json_name = "local_balance"];</code>
     * @return int|string
     */
    public function getLocalBalance()
    {
        return $this->local_balance;
    }

    /**
     * Generated from protobuf field <code>int64 local_balance = 4[json_name = "local_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLocalBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->local_balance = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 remote_balance = 5[json_name = "remote_balance"];</code>
     * @return int|string
     */
    public function getRemoteBalance()
    {
        return $this->remote_balance;
    }

    /**
     * Generated from protobuf field <code>int64 remote_balance = 5[json_name = "remote_balance"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setRemoteBalance($var)
    {
        GPBUtil::checkInt64($var);
        $this->remote_balance = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PendingChannel::class, \Lnrpc\PendingChannelsResponse_PendingChannel::class);


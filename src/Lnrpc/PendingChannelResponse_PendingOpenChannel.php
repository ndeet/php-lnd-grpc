<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.PendingChannelResponse.PendingOpenChannel</code>
 */
class PendingChannelResponse_PendingOpenChannel extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     */
    private $channel = null;
    /**
     * <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     */
    private $confirmation_height = 0;
    /**
     * <code>uint32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     */
    private $blocks_till_open = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * <code>.lnrpc.PendingChannelResponse.PendingChannel channel = 1[json_name = "channel"];</code>
     */
    public function setChannel(&$var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingChannelResponse_PendingChannel::class);
        $this->channel = $var;
    }

    /**
     * <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     */
    public function getConfirmationHeight()
    {
        return $this->confirmation_height;
    }

    /**
     * <code>uint32 confirmation_height = 2[json_name = "confirmation_height"];</code>
     */
    public function setConfirmationHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->confirmation_height = $var;
    }

    /**
     * <code>uint32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     */
    public function getBlocksTillOpen()
    {
        return $this->blocks_till_open;
    }

    /**
     * <code>uint32 blocks_till_open = 3[json_name = "blocks_till_open"];</code>
     */
    public function setBlocksTillOpen($var)
    {
        GPBUtil::checkUint32($var);
        $this->blocks_till_open = $var;
    }

}

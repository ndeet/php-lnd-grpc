<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.OpenStatusUpdate</code>
 */
class OpenStatusUpdate extends \Google\Protobuf\Internal\Message
{
    protected $update;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\PendingUpdate $chan_pending
     *     @type \Lnrpc\ConfirmationUpdate $confirmation
     *     @type \Lnrpc\ChannelOpenUpdate $chan_open
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate chan_pending = 1[json_name = "chan_pending"];</code>
     * @return \Lnrpc\PendingUpdate
     */
    public function getChanPending()
    {
        return $this->readOneof(1);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.PendingUpdate chan_pending = 1[json_name = "chan_pending"];</code>
     * @param \Lnrpc\PendingUpdate $var
     * @return $this
     */
    public function setChanPending($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\PendingUpdate::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ConfirmationUpdate confirmation = 2[json_name = "confirmation"];</code>
     * @return \Lnrpc\ConfirmationUpdate
     */
    public function getConfirmation()
    {
        return $this->readOneof(2);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ConfirmationUpdate confirmation = 2[json_name = "confirmation"];</code>
     * @param \Lnrpc\ConfirmationUpdate $var
     * @return $this
     */
    public function setConfirmation($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ConfirmationUpdate::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelOpenUpdate chan_open = 3[json_name = "chan_open"];</code>
     * @return \Lnrpc\ChannelOpenUpdate
     */
    public function getChanOpen()
    {
        return $this->readOneof(3);
    }

    /**
     * Generated from protobuf field <code>.lnrpc.ChannelOpenUpdate chan_open = 3[json_name = "chan_open"];</code>
     * @param \Lnrpc\ChannelOpenUpdate $var
     * @return $this
     */
    public function setChanOpen($var)
    {
        GPBUtil::checkMessage($var, \Lnrpc\ChannelOpenUpdate::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getUpdate()
    {
        return $this->whichOneof("update");
    }

}


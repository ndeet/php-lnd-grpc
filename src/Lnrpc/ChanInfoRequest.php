<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.ChanInfoRequest</code>
 */
class ChanInfoRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint64 chan_id = 1;</code>
     */
    private $chan_id = 0;

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint64 chan_id = 1;</code>
     */
    public function getChanId()
    {
        return $this->chan_id;
    }

    /**
     * <code>uint64 chan_id = 1;</code>
     */
    public function setChanId($var)
    {
        GPBUtil::checkUint64($var);
        $this->chan_id = $var;
    }

}

<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>lnrpc.DebugLevelRequest</code>
 */
class DebugLevelRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>bool show = 1;</code>
     */
    private $show = false;
    /**
     * <code>string level_spec = 2;</code>
     */
    private $level_spec = '';

    public function __construct() {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct();
    }

    /**
     * <code>bool show = 1;</code>
     */
    public function getShow()
    {
        return $this->show;
    }

    /**
     * <code>bool show = 1;</code>
     */
    public function setShow($var)
    {
        GPBUtil::checkBool($var);
        $this->show = $var;
    }

    /**
     * <code>string level_spec = 2;</code>
     */
    public function getLevelSpec()
    {
        return $this->level_spec;
    }

    /**
     * <code>string level_spec = 2;</code>
     */
    public function setLevelSpec($var)
    {
        GPBUtil::checkString($var, True);
        $this->level_spec = $var;
    }

}

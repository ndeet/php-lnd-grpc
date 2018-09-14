<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.QueryRoutesResponse</code>
 */
class QueryRoutesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     */
    private $routes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\Route[]|\Google\Protobuf\Internal\RepeatedField $routes
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Generated from protobuf field <code>repeated .lnrpc.Route routes = 1[json_name = "routes"];</code>
     * @param \Lnrpc\Route[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoutes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\Route::class);
        $this->routes = $arr;

        return $this;
    }

}


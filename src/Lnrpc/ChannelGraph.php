<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *&#47; Returns a new instance of the directed channel graph.
 *
 * Generated from protobuf message <code>lnrpc.ChannelGraph</code>
 */
class ChannelGraph extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; The list of `LightningNode`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.LightningNode nodes = 1[json_name = "nodes"];</code>
     */
    private $nodes;
    /**
     *&#47; The list of `ChannelEdge`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge edges = 2[json_name = "edges"];</code>
     */
    private $edges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lnrpc\LightningNode[]|\Google\Protobuf\Internal\RepeatedField $nodes
     *          &#47; The list of `LightningNode`s in this channel graph
     *     @type \Lnrpc\ChannelEdge[]|\Google\Protobuf\Internal\RepeatedField $edges
     *          &#47; The list of `ChannelEdge`s in this channel graph
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; The list of `LightningNode`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.LightningNode nodes = 1[json_name = "nodes"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     *&#47; The list of `LightningNode`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.LightningNode nodes = 1[json_name = "nodes"];</code>
     * @param \Lnrpc\LightningNode[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNodes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\LightningNode::class);
        $this->nodes = $arr;

        return $this;
    }

    /**
     *&#47; The list of `ChannelEdge`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge edges = 2[json_name = "edges"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEdges()
    {
        return $this->edges;
    }

    /**
     *&#47; The list of `ChannelEdge`s in this channel graph
     *
     * Generated from protobuf field <code>repeated .lnrpc.ChannelEdge edges = 2[json_name = "edges"];</code>
     * @param \Lnrpc\ChannelEdge[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEdges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\ChannelEdge::class);
        $this->edges = $arr;

        return $this;
    }

}


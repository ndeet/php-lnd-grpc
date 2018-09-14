<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: rpc.proto

namespace Lnrpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lnrpc.Invoice</code>
 */
class Invoice extends \Google\Protobuf\Internal\Message
{
    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     */
    private $memo = '';
    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     */
    private $receipt = '';
    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     */
    private $r_preimage = '';
    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     */
    private $r_hash = '';
    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     */
    private $value = 0;
    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     */
    private $settled = false;
    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     */
    private $creation_date = 0;
    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     */
    private $settle_date = 0;
    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
     */
    private $payment_request = '';
    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     */
    private $description_hash = '';
    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
     */
    private $expiry = 0;
    /**
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
     */
    private $fallback_addr = '';
    /**
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     */
    private $cltv_expiry = 0;
    /**
     **
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 14[json_name = "route_hints"];</code>
     */
    private $route_hints;
    /**
     *&#47; Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 15[json_name = "private"];</code>
     */
    private $private = false;
    /**
     **
     *The "add" index of this invoice. Each newly created invoice will increment
     *this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all added
     *invoices with an add_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 add_index = 16[json_name = "add_index"];</code>
     */
    private $add_index = 0;
    /**
     **
     *The "settle" index of this invoice. Each newly settled invoice will
     *increment this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all
     *settled invoices with an settle_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 settle_index = 17[json_name = "settle_index"];</code>
     */
    private $settle_index = 0;
    /**
     *&#47; Deprecated, use amt_paid_sat or amt_paid_msat.
     *
     * Generated from protobuf field <code>int64 amt_paid = 18[json_name = "amt_paid", deprecated = true];</code>
     */
    private $amt_paid = 0;
    /**
     **
     *The amount that was accepted for this invoice, in satoshis. This will ONLY
     *be set if this invoice has been settled. We provide this field as if the
     *invoice was created with a zero value, then we need to record what amount
     *was ultimately accepted. Additionally, it's possible that the sender paid
     *MORE that was specified in the original invoice. So we'll record that here
     *as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_sat = 19[json_name = "amt_paid_sat"];</code>
     */
    private $amt_paid_sat = 0;
    /**
     **
     *The amount that was accepted for this invoice, in millisatoshis. This will
     *ONLY be set if this invoice has been settled. We provide this field as if
     *the invoice was created with a zero value, then we need to record what
     *amount was ultimately accepted. Additionally, it's possible that the sender
     *paid MORE that was specified in the original invoice. So we'll record that
     *here as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_msat = 20[json_name = "amt_paid_msat"];</code>
     */
    private $amt_paid_msat = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $memo
     *          *
     *          An optional memo to attach along with the invoice. Used for record keeping
     *          purposes for the invoice's creator, and will also be set in the description
     *          field of the encoded payment request if the description_hash field is not
     *          being used.
     *     @type string $receipt
     *          &#47; An optional cryptographic receipt of payment
     *     @type string $r_preimage
     *          *
     *          The hex-encoded preimage (32 byte) which will allow settling an incoming
     *          HTLC payable to this preimage
     *     @type string $r_hash
     *          &#47; The hash of the preimage
     *     @type int|string $value
     *          &#47; The value of this invoice in satoshis
     *     @type bool $settled
     *          &#47; Whether this invoice has been fulfilled
     *     @type int|string $creation_date
     *          &#47; When this invoice was created
     *     @type int|string $settle_date
     *          &#47; When this invoice was settled
     *     @type string $payment_request
     *          *
     *          A bare-bones invoice for a payment within the Lightning Network.  With the
     *          details of the invoice, the sender has all the data necessary to send a
     *          payment to the recipient.
     *     @type string $description_hash
     *          *
     *          Hash (SHA-256) of a description of the payment. Used if the description of
     *          payment (memo) is too long to naturally fit within the description field
     *          of an encoded payment request.
     *     @type int|string $expiry
     *          &#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *     @type string $fallback_addr
     *          &#47; Fallback on-chain address.
     *     @type int|string $cltv_expiry
     *          &#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *     @type \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $route_hints
     *          *
     *          Route hints that can each be individually used to assist in reaching the
     *          invoice's destination.
     *     @type bool $private
     *          &#47; Whether this invoice should include routing hints for private channels.
     *     @type int|string $add_index
     *          *
     *          The "add" index of this invoice. Each newly created invoice will increment
     *          this index making it monotonically increasing. Callers to the
     *          SubscribeInvoices call can use this to instantly get notified of all added
     *          invoices with an add_index greater than this one.
     *     @type int|string $settle_index
     *          *
     *          The "settle" index of this invoice. Each newly settled invoice will
     *          increment this index making it monotonically increasing. Callers to the
     *          SubscribeInvoices call can use this to instantly get notified of all
     *          settled invoices with an settle_index greater than this one.
     *     @type int|string $amt_paid
     *          &#47; Deprecated, use amt_paid_sat or amt_paid_msat.
     *     @type int|string $amt_paid_sat
     *          *
     *          The amount that was accepted for this invoice, in satoshis. This will ONLY
     *          be set if this invoice has been settled. We provide this field as if the
     *          invoice was created with a zero value, then we need to record what amount
     *          was ultimately accepted. Additionally, it's possible that the sender paid
     *          MORE that was specified in the original invoice. So we'll record that here
     *          as well.
     *     @type int|string $amt_paid_msat
     *          *
     *          The amount that was accepted for this invoice, in millisatoshis. This will
     *          ONLY be set if this invoice has been settled. We provide this field as if
     *          the invoice was created with a zero value, then we need to record what
     *          amount was ultimately accepted. Additionally, it's possible that the sender
     *          paid MORE that was specified in the original invoice. So we'll record that
     *          here as well.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Rpc::initOnce();
        parent::__construct($data);
    }

    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     **
     *An optional memo to attach along with the invoice. Used for record keeping
     *purposes for the invoice's creator, and will also be set in the description
     *field of the encoded payment request if the description_hash field is not
     *being used.
     *
     * Generated from protobuf field <code>string memo = 1[json_name = "memo"];</code>
     * @param string $var
     * @return $this
     */
    public function setMemo($var)
    {
        GPBUtil::checkString($var, True);
        $this->memo = $var;

        return $this;
    }

    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     * @return string
     */
    public function getReceipt()
    {
        return $this->receipt;
    }

    /**
     *&#47; An optional cryptographic receipt of payment
     *
     * Generated from protobuf field <code>bytes receipt = 2[json_name = "receipt"];</code>
     * @param string $var
     * @return $this
     */
    public function setReceipt($var)
    {
        GPBUtil::checkString($var, False);
        $this->receipt = $var;

        return $this;
    }

    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     * @return string
     */
    public function getRPreimage()
    {
        return $this->r_preimage;
    }

    /**
     **
     *The hex-encoded preimage (32 byte) which will allow settling an incoming
     *HTLC payable to this preimage
     *
     * Generated from protobuf field <code>bytes r_preimage = 3[json_name = "r_preimage"];</code>
     * @param string $var
     * @return $this
     */
    public function setRPreimage($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_preimage = $var;

        return $this;
    }

    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     * @return string
     */
    public function getRHash()
    {
        return $this->r_hash;
    }

    /**
     *&#47; The hash of the preimage
     *
     * Generated from protobuf field <code>bytes r_hash = 4[json_name = "r_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setRHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->r_hash = $var;

        return $this;
    }

    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     * @return int|string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     *&#47; The value of this invoice in satoshis
     *
     * Generated from protobuf field <code>int64 value = 5[json_name = "value"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkInt64($var);
        $this->value = $var;

        return $this;
    }

    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     * @return bool
     */
    public function getSettled()
    {
        return $this->settled;
    }

    /**
     *&#47; Whether this invoice has been fulfilled
     *
     * Generated from protobuf field <code>bool settled = 6[json_name = "settled"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSettled($var)
    {
        GPBUtil::checkBool($var);
        $this->settled = $var;

        return $this;
    }

    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     * @return int|string
     */
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     *&#47; When this invoice was created
     *
     * Generated from protobuf field <code>int64 creation_date = 7[json_name = "creation_date"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreationDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->creation_date = $var;

        return $this;
    }

    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     * @return int|string
     */
    public function getSettleDate()
    {
        return $this->settle_date;
    }

    /**
     *&#47; When this invoice was settled
     *
     * Generated from protobuf field <code>int64 settle_date = 8[json_name = "settle_date"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettleDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->settle_date = $var;

        return $this;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
     * @return string
     */
    public function getPaymentRequest()
    {
        return $this->payment_request;
    }

    /**
     **
     *A bare-bones invoice for a payment within the Lightning Network.  With the
     *details of the invoice, the sender has all the data necessary to send a
     *payment to the recipient.
     *
     * Generated from protobuf field <code>string payment_request = 9[json_name = "payment_request"];</code>
     * @param string $var
     * @return $this
     */
    public function setPaymentRequest($var)
    {
        GPBUtil::checkString($var, True);
        $this->payment_request = $var;

        return $this;
    }

    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     * @return string
     */
    public function getDescriptionHash()
    {
        return $this->description_hash;
    }

    /**
     **
     *Hash (SHA-256) of a description of the payment. Used if the description of
     *payment (memo) is too long to naturally fit within the description field
     *of an encoded payment request.
     *
     * Generated from protobuf field <code>bytes description_hash = 10[json_name = "description_hash"];</code>
     * @param string $var
     * @return $this
     */
    public function setDescriptionHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->description_hash = $var;

        return $this;
    }

    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
     * @return int|string
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     *&#47; Payment request expiry time in seconds. Default is 3600 (1 hour).
     *
     * Generated from protobuf field <code>int64 expiry = 11[json_name = "expiry"];</code>
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
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
     * @return string
     */
    public function getFallbackAddr()
    {
        return $this->fallback_addr;
    }

    /**
     *&#47; Fallback on-chain address.
     *
     * Generated from protobuf field <code>string fallback_addr = 12[json_name = "fallback_addr"];</code>
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
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     * @return int|string
     */
    public function getCltvExpiry()
    {
        return $this->cltv_expiry;
    }

    /**
     *&#47; Delta to use for the time-lock of the CLTV extended to the final hop.
     *
     * Generated from protobuf field <code>uint64 cltv_expiry = 13[json_name = "cltv_expiry"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setCltvExpiry($var)
    {
        GPBUtil::checkUint64($var);
        $this->cltv_expiry = $var;

        return $this;
    }

    /**
     **
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 14[json_name = "route_hints"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRouteHints()
    {
        return $this->route_hints;
    }

    /**
     **
     *Route hints that can each be individually used to assist in reaching the
     *invoice's destination.
     *
     * Generated from protobuf field <code>repeated .lnrpc.RouteHint route_hints = 14[json_name = "route_hints"];</code>
     * @param \Lnrpc\RouteHint[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRouteHints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Lnrpc\RouteHint::class);
        $this->route_hints = $arr;

        return $this;
    }

    /**
     *&#47; Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 15[json_name = "private"];</code>
     * @return bool
     */
    public function getPrivate()
    {
        return $this->private;
    }

    /**
     *&#47; Whether this invoice should include routing hints for private channels.
     *
     * Generated from protobuf field <code>bool private = 15[json_name = "private"];</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivate($var)
    {
        GPBUtil::checkBool($var);
        $this->private = $var;

        return $this;
    }

    /**
     **
     *The "add" index of this invoice. Each newly created invoice will increment
     *this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all added
     *invoices with an add_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 add_index = 16[json_name = "add_index"];</code>
     * @return int|string
     */
    public function getAddIndex()
    {
        return $this->add_index;
    }

    /**
     **
     *The "add" index of this invoice. Each newly created invoice will increment
     *this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all added
     *invoices with an add_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 add_index = 16[json_name = "add_index"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAddIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->add_index = $var;

        return $this;
    }

    /**
     **
     *The "settle" index of this invoice. Each newly settled invoice will
     *increment this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all
     *settled invoices with an settle_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 settle_index = 17[json_name = "settle_index"];</code>
     * @return int|string
     */
    public function getSettleIndex()
    {
        return $this->settle_index;
    }

    /**
     **
     *The "settle" index of this invoice. Each newly settled invoice will
     *increment this index making it monotonically increasing. Callers to the
     *SubscribeInvoices call can use this to instantly get notified of all
     *settled invoices with an settle_index greater than this one.
     *
     * Generated from protobuf field <code>uint64 settle_index = 17[json_name = "settle_index"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setSettleIndex($var)
    {
        GPBUtil::checkUint64($var);
        $this->settle_index = $var;

        return $this;
    }

    /**
     *&#47; Deprecated, use amt_paid_sat or amt_paid_msat.
     *
     * Generated from protobuf field <code>int64 amt_paid = 18[json_name = "amt_paid", deprecated = true];</code>
     * @return int|string
     */
    public function getAmtPaid()
    {
        return $this->amt_paid;
    }

    /**
     *&#47; Deprecated, use amt_paid_sat or amt_paid_msat.
     *
     * Generated from protobuf field <code>int64 amt_paid = 18[json_name = "amt_paid", deprecated = true];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtPaid($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_paid = $var;

        return $this;
    }

    /**
     **
     *The amount that was accepted for this invoice, in satoshis. This will ONLY
     *be set if this invoice has been settled. We provide this field as if the
     *invoice was created with a zero value, then we need to record what amount
     *was ultimately accepted. Additionally, it's possible that the sender paid
     *MORE that was specified in the original invoice. So we'll record that here
     *as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_sat = 19[json_name = "amt_paid_sat"];</code>
     * @return int|string
     */
    public function getAmtPaidSat()
    {
        return $this->amt_paid_sat;
    }

    /**
     **
     *The amount that was accepted for this invoice, in satoshis. This will ONLY
     *be set if this invoice has been settled. We provide this field as if the
     *invoice was created with a zero value, then we need to record what amount
     *was ultimately accepted. Additionally, it's possible that the sender paid
     *MORE that was specified in the original invoice. So we'll record that here
     *as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_sat = 19[json_name = "amt_paid_sat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtPaidSat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_paid_sat = $var;

        return $this;
    }

    /**
     **
     *The amount that was accepted for this invoice, in millisatoshis. This will
     *ONLY be set if this invoice has been settled. We provide this field as if
     *the invoice was created with a zero value, then we need to record what
     *amount was ultimately accepted. Additionally, it's possible that the sender
     *paid MORE that was specified in the original invoice. So we'll record that
     *here as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_msat = 20[json_name = "amt_paid_msat"];</code>
     * @return int|string
     */
    public function getAmtPaidMsat()
    {
        return $this->amt_paid_msat;
    }

    /**
     **
     *The amount that was accepted for this invoice, in millisatoshis. This will
     *ONLY be set if this invoice has been settled. We provide this field as if
     *the invoice was created with a zero value, then we need to record what
     *amount was ultimately accepted. Additionally, it's possible that the sender
     *paid MORE that was specified in the original invoice. So we'll record that
     *here as well.
     *
     * Generated from protobuf field <code>int64 amt_paid_msat = 20[json_name = "amt_paid_msat"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setAmtPaidMsat($var)
    {
        GPBUtil::checkInt64($var);
        $this->amt_paid_msat = $var;

        return $this;
    }

}


<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace Corepb;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>corepb.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string payload_type = 1;</code>
     */
    private $payload_type = '';
    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     */
    private $payload = '';

    public function __construct() {
        \GPBMetadata\Transaction::initOnce();
        parent::__construct();
    }

    /**
     * Generated from protobuf field <code>string payload_type = 1;</code>
     * @return string
     */
    public function getPayloadType()
    {
        return $this->payload_type;
    }

    /**
     * Generated from protobuf field <code>string payload_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPayloadType($var)
    {
        GPBUtil::checkString($var, True);
        $this->payload_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Generated from protobuf field <code>bytes payload = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkString($var, False);
        $this->payload = $var;

        return $this;
    }

}

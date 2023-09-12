<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/conversionworkspace_resources.proto

namespace Google\Cloud\CloudDms\V1\EntityIssue;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Issue position.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.EntityIssue.Position</code>
 */
class Position extends \Google\Protobuf\Internal\Message
{
    /**
     * Issue line number
     *
     * Generated from protobuf field <code>int32 line = 1;</code>
     */
    private $line = 0;
    /**
     * Issue column number
     *
     * Generated from protobuf field <code>int32 column = 2;</code>
     */
    private $column = 0;
    /**
     * Issue offset
     *
     * Generated from protobuf field <code>int32 offset = 3;</code>
     */
    private $offset = 0;
    /**
     * Issue length
     *
     * Generated from protobuf field <code>int32 length = 4;</code>
     */
    private $length = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $line
     *           Issue line number
     *     @type int $column
     *           Issue column number
     *     @type int $offset
     *           Issue offset
     *     @type int $length
     *           Issue length
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\ConversionworkspaceResources::initOnce();
        parent::__construct($data);
    }

    /**
     * Issue line number
     *
     * Generated from protobuf field <code>int32 line = 1;</code>
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Issue line number
     *
     * Generated from protobuf field <code>int32 line = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setLine($var)
    {
        GPBUtil::checkInt32($var);
        $this->line = $var;

        return $this;
    }

    /**
     * Issue column number
     *
     * Generated from protobuf field <code>int32 column = 2;</code>
     * @return int
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Issue column number
     *
     * Generated from protobuf field <code>int32 column = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setColumn($var)
    {
        GPBUtil::checkInt32($var);
        $this->column = $var;

        return $this;
    }

    /**
     * Issue offset
     *
     * Generated from protobuf field <code>int32 offset = 3;</code>
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Issue offset
     *
     * Generated from protobuf field <code>int32 offset = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setOffset($var)
    {
        GPBUtil::checkInt32($var);
        $this->offset = $var;

        return $this;
    }

    /**
     * Issue length
     *
     * Generated from protobuf field <code>int32 length = 4;</code>
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Issue length
     *
     * Generated from protobuf field <code>int32 length = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLength($var)
    {
        GPBUtil::checkInt32($var);
        $this->length = $var;

        return $this;
    }

}



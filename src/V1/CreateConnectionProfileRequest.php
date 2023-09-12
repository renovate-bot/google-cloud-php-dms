<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for 'CreateConnectionProfile' request.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.CreateConnectionProfileRequest</code>
 */
class CreateConnectionProfileRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent which owns this collection of connection profiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection_profile_id = '';
    /**
     * Required. The create request body including the connection profile data
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $connection_profile = null;
    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';
    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false. Only supported for Oracle connection
     * profiles.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $validate_only = false;
    /**
     * Optional. Create the connection profile without validating it.
     * The default is false.
     * Only supported for Oracle connection profiles.
     *
     * Generated from protobuf field <code>bool skip_validation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $skip_validation = false;

    /**
     * @param string                                      $parent              Required. The parent which owns this collection of connection profiles. Please see
     *                                                                         {@see DataMigrationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\CloudDms\V1\ConnectionProfile $connectionProfile   Required. The create request body including the connection profile data
     * @param string                                      $connectionProfileId Required. The connection profile identifier.
     *
     * @return \Google\Cloud\CloudDms\V1\CreateConnectionProfileRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\CloudDms\V1\ConnectionProfile $connectionProfile, string $connectionProfileId): self
    {
        return (new self())
            ->setParent($parent)
            ->setConnectionProfile($connectionProfile)
            ->setConnectionProfileId($connectionProfileId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent which owns this collection of connection profiles.
     *     @type string $connection_profile_id
     *           Required. The connection profile identifier.
     *     @type \Google\Cloud\CloudDms\V1\ConnectionProfile $connection_profile
     *           Required. The create request body including the connection profile data
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the server receives
     *           two requests with the same ID, then the second request is ignored.
     *           It is recommended to always set this value to a UUID.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     *     @type bool $validate_only
     *           Optional. Only validate the connection profile, but don't create any
     *           resources. The default is false. Only supported for Oracle connection
     *           profiles.
     *     @type bool $skip_validation
     *           Optional. Create the connection profile without validating it.
     *           The default is false.
     *           Only supported for Oracle connection profiles.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent which owns this collection of connection profiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent which owns this collection of connection profiles.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConnectionProfileId()
    {
        return $this->connection_profile_id;
    }

    /**
     * Required. The connection profile identifier.
     *
     * Generated from protobuf field <code>string connection_profile_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConnectionProfileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->connection_profile_id = $var;

        return $this;
    }

    /**
     * Required. The create request body including the connection profile data
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\ConnectionProfile|null
     */
    public function getConnectionProfile()
    {
        return $this->connection_profile;
    }

    public function hasConnectionProfile()
    {
        return isset($this->connection_profile);
    }

    public function clearConnectionProfile()
    {
        unset($this->connection_profile);
    }

    /**
     * Required. The create request body including the connection profile data
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConnectionProfile connection_profile = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\ConnectionProfile $var
     * @return $this
     */
    public function setConnectionProfile($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\ConnectionProfile::class);
        $this->connection_profile = $var;

        return $this;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the server receives
     * two requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false. Only supported for Oracle connection
     * profiles.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getValidateOnly()
    {
        return $this->validate_only;
    }

    /**
     * Optional. Only validate the connection profile, but don't create any
     * resources. The default is false. Only supported for Oracle connection
     * profiles.
     *
     * Generated from protobuf field <code>bool validate_only = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setValidateOnly($var)
    {
        GPBUtil::checkBool($var);
        $this->validate_only = $var;

        return $this;
    }

    /**
     * Optional. Create the connection profile without validating it.
     * The default is false.
     * Only supported for Oracle connection profiles.
     *
     * Generated from protobuf field <code>bool skip_validation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getSkipValidation()
    {
        return $this->skip_validation;
    }

    /**
     * Optional. Create the connection profile without validating it.
     * The default is false.
     * Only supported for Oracle connection profiles.
     *
     * Generated from protobuf field <code>bool skip_validation = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setSkipValidation($var)
    {
        GPBUtil::checkBool($var);
        $this->skip_validation = $var;

        return $this;
    }

}


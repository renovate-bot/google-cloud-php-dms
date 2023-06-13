<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/clouddms/v1/clouddms.proto

namespace Google\Cloud\CloudDms\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to create a new Conversion Workspace
 * in the specified project and region.
 *
 * Generated from protobuf message <code>google.cloud.clouddms.v1.CreateConversionWorkspaceRequest</code>
 */
class CreateConversionWorkspaceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent which owns this collection of conversion workspaces.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The ID of the conversion workspace to create.
     *
     * Generated from protobuf field <code>string conversion_workspace_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $conversion_workspace_id = '';
    /**
     * Required. Represents a conversion workspace object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConversionWorkspace conversion_workspace = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $conversion_workspace = null;
    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    private $request_id = '';

    /**
     * @param string                                        $parent                Required. The parent which owns this collection of conversion workspaces. Please see
     *                                                                             {@see DataMigrationServiceClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\CloudDms\V1\ConversionWorkspace $conversionWorkspace   Required. Represents a conversion workspace object.
     * @param string                                        $conversionWorkspaceId Required. The ID of the conversion workspace to create.
     *
     * @return \Google\Cloud\CloudDms\V1\CreateConversionWorkspaceRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\CloudDms\V1\ConversionWorkspace $conversionWorkspace, string $conversionWorkspaceId): self
    {
        return (new self())
            ->setParent($parent)
            ->setConversionWorkspace($conversionWorkspace)
            ->setConversionWorkspaceId($conversionWorkspaceId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent which owns this collection of conversion workspaces.
     *     @type string $conversion_workspace_id
     *           Required. The ID of the conversion workspace to create.
     *     @type \Google\Cloud\CloudDms\V1\ConversionWorkspace $conversion_workspace
     *           Required. Represents a conversion workspace object.
     *     @type string $request_id
     *           A unique ID used to identify the request. If the server receives two
     *           requests with the same ID, then the second request is ignored.
     *           It is recommended to always set this value to a UUID.
     *           The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     *           (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Clouddms\V1\Clouddms::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent which owns this collection of conversion workspaces.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent which owns this collection of conversion workspaces.
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
     * Required. The ID of the conversion workspace to create.
     *
     * Generated from protobuf field <code>string conversion_workspace_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getConversionWorkspaceId()
    {
        return $this->conversion_workspace_id;
    }

    /**
     * Required. The ID of the conversion workspace to create.
     *
     * Generated from protobuf field <code>string conversion_workspace_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setConversionWorkspaceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->conversion_workspace_id = $var;

        return $this;
    }

    /**
     * Required. Represents a conversion workspace object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConversionWorkspace conversion_workspace = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CloudDms\V1\ConversionWorkspace|null
     */
    public function getConversionWorkspace()
    {
        return $this->conversion_workspace;
    }

    public function hasConversionWorkspace()
    {
        return isset($this->conversion_workspace);
    }

    public function clearConversionWorkspace()
    {
        unset($this->conversion_workspace);
    }

    /**
     * Required. Represents a conversion workspace object.
     *
     * Generated from protobuf field <code>.google.cloud.clouddms.v1.ConversionWorkspace conversion_workspace = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CloudDms\V1\ConversionWorkspace $var
     * @return $this
     */
    public function setConversionWorkspace($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CloudDms\V1\ConversionWorkspace::class);
        $this->conversion_workspace = $var;

        return $this;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * A unique ID used to identify the request. If the server receives two
     * requests with the same ID, then the second request is ignored.
     * It is recommended to always set this value to a UUID.
     * The ID must contain only letters (a-z, A-Z), numbers (0-9), underscores
     * (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

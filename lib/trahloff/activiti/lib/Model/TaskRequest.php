<?php
/**
 * TaskRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * sWIm Activiti REST API
 *
 * here be dragons
 *
 * OpenAPI spec version: v0.2.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * TaskRequest Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TaskRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaskRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'owner' => 'string',
        'assignee' => 'string',
        'delegation_state' => 'string',
        'name' => 'string',
        'description' => 'string',
        'due_date' => '\DateTime',
        'priority' => 'int',
        'parent_task_id' => 'string',
        'category' => 'string',
        'tenant_id' => 'string',
        'form_key' => 'string',
        'owner_set' => 'bool',
        'assignee_set' => 'bool',
        'delegation_state_set' => 'bool',
        'name_set' => 'bool',
        'description_set' => 'bool',
        'duedate_set' => 'bool',
        'priority_set' => 'bool',
        'parent_task_id_set' => 'bool',
        'category_set' => 'bool',
        'tenant_id_set' => 'bool',
        'form_key_set' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'owner' => null,
        'assignee' => null,
        'delegation_state' => null,
        'name' => null,
        'description' => null,
        'due_date' => 'date-time',
        'priority' => 'int32',
        'parent_task_id' => null,
        'category' => null,
        'tenant_id' => null,
        'form_key' => null,
        'owner_set' => null,
        'assignee_set' => null,
        'delegation_state_set' => null,
        'name_set' => null,
        'description_set' => null,
        'duedate_set' => null,
        'priority_set' => null,
        'parent_task_id_set' => null,
        'category_set' => null,
        'tenant_id_set' => null,
        'form_key_set' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'owner' => 'owner',
        'assignee' => 'assignee',
        'delegation_state' => 'delegationState',
        'name' => 'name',
        'description' => 'description',
        'due_date' => 'dueDate',
        'priority' => 'priority',
        'parent_task_id' => 'parentTaskId',
        'category' => 'category',
        'tenant_id' => 'tenantId',
        'form_key' => 'formKey',
        'owner_set' => 'ownerSet',
        'assignee_set' => 'assigneeSet',
        'delegation_state_set' => 'delegationStateSet',
        'name_set' => 'nameSet',
        'description_set' => 'descriptionSet',
        'duedate_set' => 'duedateSet',
        'priority_set' => 'prioritySet',
        'parent_task_id_set' => 'parentTaskIdSet',
        'category_set' => 'categorySet',
        'tenant_id_set' => 'tenantIdSet',
        'form_key_set' => 'formKeySet'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'owner' => 'setOwner',
        'assignee' => 'setAssignee',
        'delegation_state' => 'setDelegationState',
        'name' => 'setName',
        'description' => 'setDescription',
        'due_date' => 'setDueDate',
        'priority' => 'setPriority',
        'parent_task_id' => 'setParentTaskId',
        'category' => 'setCategory',
        'tenant_id' => 'setTenantId',
        'form_key' => 'setFormKey',
        'owner_set' => 'setOwnerSet',
        'assignee_set' => 'setAssigneeSet',
        'delegation_state_set' => 'setDelegationStateSet',
        'name_set' => 'setNameSet',
        'description_set' => 'setDescriptionSet',
        'duedate_set' => 'setDuedateSet',
        'priority_set' => 'setPrioritySet',
        'parent_task_id_set' => 'setParentTaskIdSet',
        'category_set' => 'setCategorySet',
        'tenant_id_set' => 'setTenantIdSet',
        'form_key_set' => 'setFormKeySet'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'owner' => 'getOwner',
        'assignee' => 'getAssignee',
        'delegation_state' => 'getDelegationState',
        'name' => 'getName',
        'description' => 'getDescription',
        'due_date' => 'getDueDate',
        'priority' => 'getPriority',
        'parent_task_id' => 'getParentTaskId',
        'category' => 'getCategory',
        'tenant_id' => 'getTenantId',
        'form_key' => 'getFormKey',
        'owner_set' => 'getOwnerSet',
        'assignee_set' => 'getAssigneeSet',
        'delegation_state_set' => 'getDelegationStateSet',
        'name_set' => 'getNameSet',
        'description_set' => 'getDescriptionSet',
        'duedate_set' => 'getDuedateSet',
        'priority_set' => 'getPrioritySet',
        'parent_task_id_set' => 'getParentTaskIdSet',
        'category_set' => 'getCategorySet',
        'tenant_id_set' => 'getTenantIdSet',
        'form_key_set' => 'getFormKeySet'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['assignee'] = isset($data['assignee']) ? $data['assignee'] : null;
        $this->container['delegation_state'] = isset($data['delegation_state']) ? $data['delegation_state'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['due_date'] = isset($data['due_date']) ? $data['due_date'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['parent_task_id'] = isset($data['parent_task_id']) ? $data['parent_task_id'] : null;
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['tenant_id'] = isset($data['tenant_id']) ? $data['tenant_id'] : null;
        $this->container['form_key'] = isset($data['form_key']) ? $data['form_key'] : null;
        $this->container['owner_set'] = isset($data['owner_set']) ? $data['owner_set'] : false;
        $this->container['assignee_set'] = isset($data['assignee_set']) ? $data['assignee_set'] : false;
        $this->container['delegation_state_set'] = isset($data['delegation_state_set']) ? $data['delegation_state_set'] : false;
        $this->container['name_set'] = isset($data['name_set']) ? $data['name_set'] : false;
        $this->container['description_set'] = isset($data['description_set']) ? $data['description_set'] : false;
        $this->container['duedate_set'] = isset($data['duedate_set']) ? $data['duedate_set'] : false;
        $this->container['priority_set'] = isset($data['priority_set']) ? $data['priority_set'] : false;
        $this->container['parent_task_id_set'] = isset($data['parent_task_id_set']) ? $data['parent_task_id_set'] : false;
        $this->container['category_set'] = isset($data['category_set']) ? $data['category_set'] : false;
        $this->container['tenant_id_set'] = isset($data['tenant_id_set']) ? $data['tenant_id_set'] : false;
        $this->container['form_key_set'] = isset($data['form_key_set']) ? $data['form_key_set'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner owner
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets assignee
     *
     * @return string
     */
    public function getAssignee()
    {
        return $this->container['assignee'];
    }

    /**
     * Sets assignee
     *
     * @param string $assignee assignee
     *
     * @return $this
     */
    public function setAssignee($assignee)
    {
        $this->container['assignee'] = $assignee;

        return $this;
    }

    /**
     * Gets delegation_state
     *
     * @return string
     */
    public function getDelegationState()
    {
        return $this->container['delegation_state'];
    }

    /**
     * Sets delegation_state
     *
     * @param string $delegation_state delegation_state
     *
     * @return $this
     */
    public function setDelegationState($delegation_state)
    {
        $this->container['delegation_state'] = $delegation_state;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime $due_date due_date
     *
     * @return $this
     */
    public function setDueDate($due_date)
    {
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets parent_task_id
     *
     * @return string
     */
    public function getParentTaskId()
    {
        return $this->container['parent_task_id'];
    }

    /**
     * Sets parent_task_id
     *
     * @param string $parent_task_id parent_task_id
     *
     * @return $this
     */
    public function setParentTaskId($parent_task_id)
    {
        $this->container['parent_task_id'] = $parent_task_id;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets tenant_id
     *
     * @return string
     */
    public function getTenantId()
    {
        return $this->container['tenant_id'];
    }

    /**
     * Sets tenant_id
     *
     * @param string $tenant_id tenant_id
     *
     * @return $this
     */
    public function setTenantId($tenant_id)
    {
        $this->container['tenant_id'] = $tenant_id;

        return $this;
    }

    /**
     * Gets form_key
     *
     * @return string
     */
    public function getFormKey()
    {
        return $this->container['form_key'];
    }

    /**
     * Sets form_key
     *
     * @param string $form_key form_key
     *
     * @return $this
     */
    public function setFormKey($form_key)
    {
        $this->container['form_key'] = $form_key;

        return $this;
    }

    /**
     * Gets owner_set
     *
     * @return bool
     */
    public function getOwnerSet()
    {
        return $this->container['owner_set'];
    }

    /**
     * Sets owner_set
     *
     * @param bool $owner_set owner_set
     *
     * @return $this
     */
    public function setOwnerSet($owner_set)
    {
        $this->container['owner_set'] = $owner_set;

        return $this;
    }

    /**
     * Gets assignee_set
     *
     * @return bool
     */
    public function getAssigneeSet()
    {
        return $this->container['assignee_set'];
    }

    /**
     * Sets assignee_set
     *
     * @param bool $assignee_set assignee_set
     *
     * @return $this
     */
    public function setAssigneeSet($assignee_set)
    {
        $this->container['assignee_set'] = $assignee_set;

        return $this;
    }

    /**
     * Gets delegation_state_set
     *
     * @return bool
     */
    public function getDelegationStateSet()
    {
        return $this->container['delegation_state_set'];
    }

    /**
     * Sets delegation_state_set
     *
     * @param bool $delegation_state_set delegation_state_set
     *
     * @return $this
     */
    public function setDelegationStateSet($delegation_state_set)
    {
        $this->container['delegation_state_set'] = $delegation_state_set;

        return $this;
    }

    /**
     * Gets name_set
     *
     * @return bool
     */
    public function getNameSet()
    {
        return $this->container['name_set'];
    }

    /**
     * Sets name_set
     *
     * @param bool $name_set name_set
     *
     * @return $this
     */
    public function setNameSet($name_set)
    {
        $this->container['name_set'] = $name_set;

        return $this;
    }

    /**
     * Gets description_set
     *
     * @return bool
     */
    public function getDescriptionSet()
    {
        return $this->container['description_set'];
    }

    /**
     * Sets description_set
     *
     * @param bool $description_set description_set
     *
     * @return $this
     */
    public function setDescriptionSet($description_set)
    {
        $this->container['description_set'] = $description_set;

        return $this;
    }

    /**
     * Gets duedate_set
     *
     * @return bool
     */
    public function getDuedateSet()
    {
        return $this->container['duedate_set'];
    }

    /**
     * Sets duedate_set
     *
     * @param bool $duedate_set duedate_set
     *
     * @return $this
     */
    public function setDuedateSet($duedate_set)
    {
        $this->container['duedate_set'] = $duedate_set;

        return $this;
    }

    /**
     * Gets priority_set
     *
     * @return bool
     */
    public function getPrioritySet()
    {
        return $this->container['priority_set'];
    }

    /**
     * Sets priority_set
     *
     * @param bool $priority_set priority_set
     *
     * @return $this
     */
    public function setPrioritySet($priority_set)
    {
        $this->container['priority_set'] = $priority_set;

        return $this;
    }

    /**
     * Gets parent_task_id_set
     *
     * @return bool
     */
    public function getParentTaskIdSet()
    {
        return $this->container['parent_task_id_set'];
    }

    /**
     * Sets parent_task_id_set
     *
     * @param bool $parent_task_id_set parent_task_id_set
     *
     * @return $this
     */
    public function setParentTaskIdSet($parent_task_id_set)
    {
        $this->container['parent_task_id_set'] = $parent_task_id_set;

        return $this;
    }

    /**
     * Gets category_set
     *
     * @return bool
     */
    public function getCategorySet()
    {
        return $this->container['category_set'];
    }

    /**
     * Sets category_set
     *
     * @param bool $category_set category_set
     *
     * @return $this
     */
    public function setCategorySet($category_set)
    {
        $this->container['category_set'] = $category_set;

        return $this;
    }

    /**
     * Gets tenant_id_set
     *
     * @return bool
     */
    public function getTenantIdSet()
    {
        return $this->container['tenant_id_set'];
    }

    /**
     * Sets tenant_id_set
     *
     * @param bool $tenant_id_set tenant_id_set
     *
     * @return $this
     */
    public function setTenantIdSet($tenant_id_set)
    {
        $this->container['tenant_id_set'] = $tenant_id_set;

        return $this;
    }

    /**
     * Gets form_key_set
     *
     * @return bool
     */
    public function getFormKeySet()
    {
        return $this->container['form_key_set'];
    }

    /**
     * Sets form_key_set
     *
     * @param bool $form_key_set form_key_set
     *
     * @return $this
     */
    public function setFormKeySet($form_key_set)
    {
        $this->container['form_key_set'] = $form_key_set;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

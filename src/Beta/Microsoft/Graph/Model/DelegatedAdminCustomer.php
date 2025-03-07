<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* DelegatedAdminCustomer File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* DelegatedAdminCustomer class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class DelegatedAdminCustomer extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return DelegatedAdminCustomer
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return DelegatedAdminCustomer
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }


     /**
     * Gets the serviceManagementDetails
     *
     * @return array|null The serviceManagementDetails
     */
    public function getServiceManagementDetails()
    {
        if (array_key_exists("serviceManagementDetails", $this->_propDict)) {
           return $this->_propDict["serviceManagementDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the serviceManagementDetails
    *
    * @param DelegatedAdminServiceManagementDetail[] $val The serviceManagementDetails
    *
    * @return DelegatedAdminCustomer
    */
    public function setServiceManagementDetails($val)
    {
        $this->_propDict["serviceManagementDetails"] = $val;
        return $this;
    }

}

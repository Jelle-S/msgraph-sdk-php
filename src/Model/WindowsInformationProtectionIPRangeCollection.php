<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsInformationProtectionIPRangeCollection File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Microsoft\Graph\Model;
/**
* WindowsInformationProtectionIPRangeCollection class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class WindowsInformationProtectionIPRangeCollection extends Entity
{
    /**
    * Gets the displayName
    * Display name
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
    * Display name
    *
    * @param string $val The value of the displayName
    *
    * @return WindowsInformationProtectionIPRangeCollection
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }

    /**
    * Gets the ranges
    * Collection of ip ranges
    *
    * @return IpRange[]|null The ranges
    */
    public function getRanges()
    {
        if (array_key_exists("ranges", $this->_propDict) && !is_null($this->_propDict["ranges"])) {
       
            if (count($this->_propDict['ranges']) > 0 && is_a($this->_propDict['ranges'][0], 'IpRange')) {
               return $this->_propDict['ranges'];
            }
            $ranges = [];
            foreach ($this->_propDict['ranges'] as $singleValue) {
               $ranges []= new IpRange($singleValue);
            }
            $this->_propDict['ranges'] = $ranges;
            return $this->_propDict['ranges'];
            }
        return null;
    }

    /**
    * Sets the ranges
    * Collection of ip ranges
    *
    * @param IpRange[] $val The value to assign to the ranges
    *
    * @return WindowsInformationProtectionIPRangeCollection The WindowsInformationProtectionIPRangeCollection
    */
    public function setRanges($val)
    {
        $this->_propDict["ranges"] = $val;
         return $this;
    }
}

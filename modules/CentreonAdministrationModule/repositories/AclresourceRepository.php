<?php
/*
 * Copyright 2015 Centreon (http://www.centreon.com/)
 * 
 * Centreon is a full-fledged industry-strength solution that meets 
 * the needs in IT infrastructure and application monitoring for 
 * service performance.
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *    http://www.apache.org/licenses/LICENSE-2.0  
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 * For more information : contact@centreon.com
 * 
 */
namespace CentreonAdministration\Repository;

use CentreonAdministration\Models\Aclresource;
use Centreon\Internal\Di;
use Centreon\Internal\Exception;

/**
 * @author Kevin Duret <kduret@centreon.com>
 * @package Centreon
 * @subpackage Repository
 */
class AclresourceRepository extends Repository
{
    /**
     *
     * @var string
     */
    public static $tableName = 'cfg_acl_resources';
    
    /**
     *
     * @var string
     */
    public static $objectName = 'Aclresource';
    
    public static $objectClass = '\CentreonAdministration\Models\Aclresource';
    
    /**
     *
     * @var type 
     */
    public static $unicityFields = array(
        'fields' => array(
            'aclresource' => 'cfg_acl_resources, acl_resource_id, name'
        ),
    );
}

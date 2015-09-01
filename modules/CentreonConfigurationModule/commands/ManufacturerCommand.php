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

namespace CentreonConfiguration\Commands;

use Centreon\Api\Internal\BasicCrudCommand;

/**
 * 
 */
class ManufacturerCommand extends BasicCrudCommand
{
    /**
     *
     * @var type 
     */
    public $objectName = 'manufacturer';
    
    public function __construct()
    {
        parent::__construct();
    }
    
    /**
     * @cmdForm /centreon-configuration/manufacturer/update required
     */
    public function createAction($params) {
        parent::createAction($params);
    }
    
    /**
     * @cmdForm /centreon-configuration/manufacturer/update optional
     * @cmdObject string manufacturer the manufacturer
     */
    public function updateAction($object, $params = null) {
        parent::updateAction($object, $params);
    }
    
    /**
     * @cmdForm /centreon-configuration/manufacturer/update map
     * @cmdObject string manufacturer the manufacturer
     */
    public function showAction($object, $fields = null, $linkedObject = '') {
        parent::showAction($object, $fields, $linkedObject);
    }
    
     
    /**
     * @cmdObject string manufacturer the manufacturer
     */
    public function deleteAction($object) {
        parent::deleteAction($object);
    }
    
}

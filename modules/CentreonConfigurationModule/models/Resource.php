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

namespace CentreonConfiguration\Models;

use Centreon\Models\CentreonBaseModel;

/**
 * Used for interacting with Resource objects
 *
 * @author sylvestre
 */
class Resource extends CentreonBaseModel
{
    protected static $table = "cfg_resources";
    protected static $primaryKey = "resource_id";
    protected static $uniqueLabelField = "resource_name";
    protected static $slugField        = "resource_slug";
}

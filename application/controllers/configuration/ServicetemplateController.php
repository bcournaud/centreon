<?php
/*
 * Copyright 2005-2014 MERETHIS
 * Centreon is developped by : Julien Mathis and Romain Le Merlus under
 * GPL Licence 2.0.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License as published by the Free Software
 * Foundation ; either version 2 of the License.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * this program; if not, see <http://www.gnu.org/licenses>.
 *
 * Linking this program statically or dynamically with other modules is making a
 * combined work based on this program. Thus, the terms and conditions of the GNU
 * General Public License cover the whole combination.
 *
 * As a special exception, the copyright holders of this program give MERETHIS
 * permission to link this program with independent modules to produce an executable,
 * regardless of the license terms of these independent modules, and to copy and
 * distribute the resulting executable under terms of MERETHIS choice, provided that
 * MERETHIS also meet, for each linked independent module, the terms  and conditions
 * of the license of that module. An independent module is a module which is not
 * derived from this program. If you modify this program, you may extend this
 * exception to your version of the program, but you are not obliged to do so. If you
 * do not wish to do so, delete this exception statement from your version.
 *
 * For more information : contact@centreon.com
 *
 */

namespace Controllers\Configuration;

class ServicetemplateController extends ObjectAbstract
{
    protected $objectDisplayName = 'Servicetemplate';
    protected $objectName = 'servicetemplate';
    protected $objectBaseUrl = '/configuration/servicetemplate';
    protected $objectClass = '\Models\Configuration\Service';

    /**
     * List servicetemplates
     *
     * @method get
     * @route /configuration/servicetemplate
     */
    public function listAction()
    {
        parent::listAction();
    }

    public function formListAction()
    {
    }

    /**
     * 
     * @method get
     * @route /configuration/servicetemplate/list
     */
    public function datatableAction()
    {
        parent::datatableAction();
    }
    
    /**
     * Create a new servicetemplate
     *
     * @method post
     * @route /configuration/servicetemplate/create
     */
    public function createAction()
    {
        
    }

    /**
     * Update a servicetemplate
     *
     *
     * @method put
     * @route /configuration/servicetemplate/update
     */
    public function updateAction()
    {
        
    }
    
    /**
     * Add a service template
     *
     *
     * @method get
     * @route /configuration/servicetemplate/add
     */
    public function addAction()
    {
        parent::addAction();
    }
    
    /**
     * Update a service template
     *
     *
     * @method get
     * @route /configuration/servicetemplate/[i:id]
     */
    public function editAction()
    {
        
    }

    /**
     * Get the list of massive change fields
     *
     * @method get
     * @route /configuration/servicetemplate/mc_fields
     */
    public function getMassiveChangeFieldsAction()
    {
        parent::getMassiveChangeFieldsAction();
    }

    /**
     * Get the html of attribute filed
     *
     * @method get
     * @route /configuration/servicetemplate/mc_fields/[i:id]
     */
    public function getMcFieldAction()
    {
        parent::getMcFieldAction();
    }

    /**
     * Duplicate a hosts
     *
     * @method POST
     * @route /configuration/servicetemplate/duplicate
     */
    public function duplicateAction()
    {
        parent::duplicateAction();
    }

    /**
     * Apply massive change
     *
     * @method POST
     * @route /configuration/servicetemplate/massive_change
     */
    public function massiveChangeAction()
    {
        parent::massiveChangeAction();
    }

    /**
     * Delete action for servicetemplate
     *
     * @method post
     * @route /configuration/servicetemplate/delete
     */
    public function deleteAction()
    {
        parent::deleteAction();
    }
}
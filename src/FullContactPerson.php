<?php
namespace Akaramires\FullContact;

/**
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * This class handles everything related to the Person lookup API.
 *
 * @package  Services\FullContact
 * @author   Keith Casey <contrib@caseysoftware.com>
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache
 */
class FullContactPerson extends FullContact
{
    /**
     * Supported lookup methods
     * @var $_supportedMethods
     */
    protected $_supportedMethods = array('email', 'phone', 'twitter', 'facebookUsername');
    protected $_supportedResources = array('json' => '/person.json','html' => '/person.html');
    protected $_resourceUri = '/person.json';

    public function lookupByEmail($search)
    {
        $this->_execute(array('email' => $search, 'method' => 'email'));

        return $this->response_obj;
    }

    public function lookupByEmailMD5($search)
    {
        $this->_execute(array('emailMD5' => $search, 'method' => 'email'));

        return $this->response_obj;
    }

    public function lookupByPhone($search)
    {
        $this->_execute(array('phone' => $search, 'method' => 'phone'));

        return $this->response_obj;
    }

    public function lookupByTwitter($search)
    {
        $this->_execute(array('twitter' => $search, 'method' => 'twitter'));

        return $this->response_obj;
    }

    public function lookupByFacebook($search)
    {
        $this->_execute(array('facebookUsername' => $search, 'method' => 'facebookUsername'));

        return $this->response_obj;
    }
}
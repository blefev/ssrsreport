<?php
/**
 *
 * Copyright (c) 2009, Persistent Systems Limited
 *
 * Redistribution and use, with or without modification, are permitted
 *  provided that the following  conditions are met:
 *   - Redistributions of source code must retain the above copyright notice,
 *     this list of conditions and the following disclaimer.
 *   - Neither the name of Persistent Systems Limited nor the names of its contributors
 *     may be used to endorse or promote products derived from this software
 *     without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO,
 * THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR
 * PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR
 * CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO,
 * PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 * WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR
 * OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
 * EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 */

namespace SSRS\Common;

/**
 *
 * class Credentials
 */
class Credentials {
    private $_userName;
    private $_password;

    /**
     * @param string $userName The user Name
     * @param null $password
     */
    public function __construct($userName = null, $password = null) {
        $this->_userName = $userName;
        $this->_password = $password;
    }

    /**
     * This function returns UserName
     */
    public function getUserName() {
        return $this->_userName;
    }

    /**
     * This function returns Password
     */
    public function getPassword() {
        return $this->_password;
    }

    /**
     * @return array <array> credentials as key value pair
     */
    public function getCredentials() {
        $options = array();
        $options['login'] = $this->_userName;
        $options['password'] = $this->_password;
        return $options;
    }

    public function getBase64Auth() {
        return "Authorization: Basic " .
               base64_encode($this->_userName .
                             ':' .
                             $this->_password);
    }
}

;
?>

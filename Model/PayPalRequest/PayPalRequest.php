<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 */

namespace OxidEsales\PayPalModule\Model\PayPalRequest;

/**
 * PayPal request class
 */
class PayPalRequest
{
    /**
     * PayPal response data
     *
     * @var array
     */
    protected $data = array();

    /**
     * Sets value to data by given key.
     *
     * @param string $key   Key of data value.
     * @param string $value Data value.
     */
    public function setParameter($key, $value)
    {
        $this->data[$key] = $value;
    }

    /**
     * Returns value by given key.
     *
     * @param string $key Key of data value.
     *
     * @return string
     */
    public function getParameter($key)
    {
        return $this->data[$key];
    }

    /**
     * Set request data.
     *
     * @param array $responseData Response data from PayPal.
     */
    public function setData($responseData)
    {
        $this->data = $responseData;
    }

    /**
     * Return request data.
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Return value from data by given key.
     *
     * @param string $key   Key of data value.
     * @param string $value Data value.
     */
    protected function setValue($key, $value)
    {
        $this->data[$key] = $value;
    }
}
<?php
/**
 * This file is part of the PHP Rebilly API package.
 *
 * (c) 2015 Rebilly SRL
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Rebilly\Entities;

use Rebilly\Rest\Entity;

/**
 * Class Customer
 *
 * ```json
 * {
 *   "id"
 *   "email"
 *   "firstName"
 *   "lastName"
 *   "ipAddress"
 *   "customFields"
 * }
 * ```
 *
 * @todo Rename defaultCard to defaultCardId
 *
 * @author Veaceslav Medvedev <veaceslav.medvedev@rebilly.com>
 * @version 0.1
 */
final class Customer extends Entity
{
    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->getAttribute('email');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setEmail($value)
    {
        return $this->setAttribute('email', $value);
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->getAttribute('firstName');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setFirstName($value)
    {
        return $this->setAttribute('firstName', $value);
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->getAttribute('lastName');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setLastName($value)
    {
        return $this->setAttribute('lastName', $value);
    }

    /**
     * @return string
     */
    public function getIpAddress()
    {
        return $this->getAttribute('ipAddress');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setIpAddress($value)
    {
        return $this->setAttribute('ipAddress', $value);
    }

    /**
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->getAttribute('createdTime');
    }

    /**
     * @return string
     */
    public function getDefaultCardId()
    {
        return $this->getAttribute('defaultCard');
    }

    /**
     * @return null|PaymentCard
     */
    public function getDefaultCard()
    {
        if ($this->hasEmbeddedResource('defaultCard')) {
            return new PaymentCard($this->getEmbeddedResource('defaultCard'));
        } else {
            return null;
        }
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setDefaultCardId($value)
    {
        return $this->setAttribute('defaultCard', $value);
    }

    /**
     * @return array
     */
    public function getCustomFields()
    {
        return $this->getAttribute('customFields');
    }

    /**
     * @param array $value
     *
     * @return $this
     */
    public function setCustomFields($value)
    {
        return $this->setAttribute('customFields', $value);
    }

    /**
     * @return string
     */
    public function getDefaultPaymentMethod()
    {
        return $this->getAttribute('defaultPaymentMethod');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setDefaultPaymentMethod($value)
    {
        return $this->setAttribute('defaultPaymentMethod', $value);
    }

    /**
     * @return string
     */
    public function getDefaultPaymentInstrumentId()
    {
        return $this->getAttribute('defaultPaymentInstrumentId');
    }

    /**
     * @param string $value
     *
     * @return $this
     */
    public function setDefaultPaymentInstrumentId($value)
    {
        return $this->setAttribute('defaultPaymentInstrumentId', $value);
    }
}

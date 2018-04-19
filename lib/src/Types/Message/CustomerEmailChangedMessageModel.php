<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Types\Message;

use Commercetools\Exception\InvalidArgumentException;
use Commercetools\Types\Message\MessageModel;

class CustomerEmailChangedMessageModel extends MessageModel implements CustomerEmailChangedMessage
{
    const DISCRIMINATOR_VALUE = 'CustomerEmailChanged';

    /**
     * @var string
     */
    protected $email;

    /**
     * @return string
     */
    public function getEmail()
    {
        if (is_null($this->email)) {
            $value = $this->raw(CustomerEmailChangedMessage::FIELD_EMAIL);
            $value = (string)$value;
            $this->email = $value;
        }
        return $this->email;
    }

    /**
     * @param string $email
     * @return $this
     */
    public function setEmail(string $email)
    {
        $this->email = (string)$email;

        return $this;
    }

}
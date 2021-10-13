<?php

namespace NotificationChannels\JetSms\Events;

use BahriCanli\JetSms\ShortMessage;
use BahriCanli\JetSms\Http\Responses\JetSmsResponseInterface;

/**
 * Class MessageWasSent.
 */
class MessageWasSent
{
    /**
     * The sms message.
     *
     * @var ShortMessage
     */
    public $message;

    /**
     * The Api response implementation.
     *
     * @var JetSmsResponseInterface
     */
    public $response;

    /**
     * MessageWasSent constructor.
     *
     * @param ShortMessage            $message
     * @param JetSmsResponseInterface $response
     */
    public function __construct(ShortMessage $message, JetSmsResponseInterface $response)
    {
        $this->message = $message;
        $this->response = $response;
    }
}

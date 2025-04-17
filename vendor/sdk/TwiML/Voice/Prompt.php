<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Voice;

use Twilio\TwiML\TwiML;

class Prompt extends TwiML {
    /**
     * Prompt constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = []) {
        parent::__construct('Prompt', null, $attributes);
    }

    /**
     * Add Say child.
     *
     * @param string $message Message to say
     * @param array $attributes Optional attributes
     * @return Say Child element.
     */
    public function say($message, $attributes = []): Say {
        return $this->nest(new Say($message, $attributes));
    }

    /**
     * Add Play child.
     *
     * @param string $url Media URL
     * @param array $attributes Optional attributes
     * @return Play Child element.
     */
    public function play($url = null, $attributes = []): Play {
        return $this->nest(new Play($url, $attributes));
    }

    /**
     * Add Pause child.
     *
     * @param array $attributes Optional attributes
     * @return Pause Child element.
     */
    public function pause($attributes = []): Pause {
        return $this->nest(new Pause($attributes));
    }

    /**
     * Add For_ attribute.
     *
     * @param string $for_ Name of the payment source data element
     */
    public function setFor_($for_): self {
        return $this->setAttribute('for_', $for_);
    }

    /**
     * Add ErrorType attribute.
     *
     * @param string[] $errorType Type of error
     */
    public function setErrorType($errorType): self {
        return $this->setAttribute('errorType', $errorType);
    }

    /**
     * Add CardType attribute.
     *
     * @param string[] $cardType Type of the credit card
     */
    public function setCardType($cardType): self {
        return $this->setAttribute('cardType', $cardType);
    }

    /**
     * Add Attempt attribute.
     *
     * @param int[] $attempt Current attempt count
     */
    public function setAttempt($attempt): self {
        return $this->setAttribute('attempt', $attempt);
    }

    /**
     * Add RequireMatchingInputs attribute.
     *
     * @param bool $requireMatchingInputs Require customer to input requested
     *                                    information twice and verify matching.
     */
    public function setRequireMatchingInputs($requireMatchingInputs): self {
        return $this->setAttribute('requireMatchingInputs', $requireMatchingInputs);
    }
}
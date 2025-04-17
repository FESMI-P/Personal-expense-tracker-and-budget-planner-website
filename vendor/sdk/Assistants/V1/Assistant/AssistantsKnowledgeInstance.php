<?php

/**
 * This code was generated by
 * ___ _ _ _ _ _    _ ____    ____ ____ _    ____ ____ _  _ ____ ____ ____ ___ __   __
 *  |  | | | | |    | |  | __ |  | |__| | __ | __ |___ |\ | |___ |__/ |__|  | |  | |__/
 *  |  |_|_| | |___ | |__|    |__| |  | |    |__] |___ | \| |___ |  \ |  |  | |__| |  \
 *
 * Twilio - Assistants
 * This is the public Twilio REST API.
 *
 * NOTE: This class is auto generated by OpenAPI Generator.
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


namespace Twilio\Rest\Assistants\V1\Assistant;

use Twilio\Exceptions\TwilioException;
use Twilio\InstanceResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\Deserialize;


/**
 * @property string $description
 * @property string $id
 * @property string $accountSid
 * @property array $knowledgeSourceDetails
 * @property string $name
 * @property string $status
 * @property string $type
 * @property string $url
 * @property string $embeddingModel
 * @property \DateTime $dateCreated
 * @property \DateTime $dateUpdated
 */
class AssistantsKnowledgeInstance extends InstanceResource
{
    /**
     * Initialize the AssistantsKnowledgeInstance
     *
     * @param Version $version Version that contains the resource
     * @param mixed[] $payload The response payload
     * @param string $assistantId The assistant ID.
     * @param string $id The knowledge ID.
     */
    public function __construct(Version $version, array $payload, string $assistantId, string $id = null)
    {
        parent::__construct($version);

        // Marshaled Properties
        $this->properties = [
            'description' => Values::array_get($payload, 'description'),
            'id' => Values::array_get($payload, 'id'),
            'accountSid' => Values::array_get($payload, 'account_sid'),
            'knowledgeSourceDetails' => Values::array_get($payload, 'knowledge_source_details'),
            'name' => Values::array_get($payload, 'name'),
            'status' => Values::array_get($payload, 'status'),
            'type' => Values::array_get($payload, 'type'),
            'url' => Values::array_get($payload, 'url'),
            'embeddingModel' => Values::array_get($payload, 'embedding_model'),
            'dateCreated' => Deserialize::dateTime(Values::array_get($payload, 'date_created')),
            'dateUpdated' => Deserialize::dateTime(Values::array_get($payload, 'date_updated')),
        ];

        $this->solution = ['assistantId' => $assistantId, 'id' => $id ?: $this->properties['id'], ];
    }

    /**
     * Generate an instance context for the instance, the context is capable of
     * performing various actions.  All instance actions are proxied to the context
     *
     * @return AssistantsKnowledgeContext Context for this AssistantsKnowledgeInstance
     */
    protected function proxy(): AssistantsKnowledgeContext
    {
        if (!$this->context) {
            $this->context = new AssistantsKnowledgeContext(
                $this->version,
                $this->solution['assistantId'],
                $this->solution['id']
            );
        }

        return $this->context;
    }

    /**
     * Create the AssistantsKnowledgeInstance
     *
     * @return AssistantsKnowledgeInstance Created AssistantsKnowledgeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function create(): AssistantsKnowledgeInstance
    {

        return $this->proxy()->create();
    }

    /**
     * Delete the AssistantsKnowledgeInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        return $this->proxy()->delete();
    }

    /**
     * Magic getter to access properties
     *
     * @param string $name Property to access
     * @return mixed The requested property
     * @throws TwilioException For unknown properties
     */
    public function __get(string $name)
    {
        if (\array_key_exists($name, $this->properties)) {
            return $this->properties[$name];
        }

        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown property: ' . $name);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString(): string
    {
        $context = [];
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Assistants.V1.AssistantsKnowledgeInstance ' . \implode(' ', $context) . ']';
    }
}


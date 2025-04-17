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


namespace Twilio\Rest\Assistants\V1;

use Twilio\Exceptions\TwilioException;
use Twilio\ListResource;
use Twilio\Values;
use Twilio\Version;
use Twilio\InstanceContext;
use Twilio\Rest\Assistants\V1\Knowledge\ChunkList;
use Twilio\Rest\Assistants\V1\Knowledge\KnowledgeStatusList;


/**
 * @property ChunkList $chunks
 * @property KnowledgeStatusList $knowledgeStatus
 * @method \Twilio\Rest\Assistants\V1\Knowledge\KnowledgeStatusContext knowledgeStatus()
 */
class KnowledgeContext extends InstanceContext
    {
    protected $_chunks;
    protected $_knowledgeStatus;

    /**
     * Initialize the KnowledgeContext
     *
     * @param Version $version Version that contains the resource
     * @param string $id the Knowledge ID.
     */
    public function __construct(
        Version $version,
        $id
    ) {
        parent::__construct($version);

        // Path Solution
        $this->solution = [
        'id' =>
            $id,
        ];

        $this->uri = '/Knowledge/' . \rawurlencode($id)
        .'';
    }

    /**
     * Delete the KnowledgeInstance
     *
     * @return bool True if delete succeeds, false otherwise
     * @throws TwilioException When an HTTP error occurs.
     */
    public function delete(): bool
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        return $this->version->delete('DELETE', $this->uri, [], [], $headers);
    }


    /**
     * Fetch the KnowledgeInstance
     *
     * @return KnowledgeInstance Fetched KnowledgeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function fetch(): KnowledgeInstance
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $payload = $this->version->fetch('GET', $this->uri, [], [], $headers);

        return new KnowledgeInstance(
            $this->version,
            $payload,
            $this->solution['id']
        );
    }


    /**
     * Update the KnowledgeInstance
     *
     * @return KnowledgeInstance Updated KnowledgeInstance
     * @throws TwilioException When an HTTP error occurs.
     */
    public function update(): KnowledgeInstance
    {

        $headers = Values::of(['Content-Type' => 'application/x-www-form-urlencoded' ]);
        $data = $assistantsV1ServiceUpdateKnowledgeRequest->toArray();
        $headers['Content-Type'] = 'application/json';
        $payload = $this->version->update('PUT', $this->uri, [], $data, $headers);

        return new KnowledgeInstance(
            $this->version,
            $payload,
            $this->solution['id']
        );
    }


    /**
     * Access the chunks
     */
    protected function getChunks(): ChunkList
    {
        if (!$this->_chunks) {
            $this->_chunks = new ChunkList(
                $this->version,
                $this->solution['id']
            );
        }

        return $this->_chunks;
    }

    /**
     * Access the knowledgeStatus
     */
    protected function getKnowledgeStatus(): KnowledgeStatusList
    {
        if (!$this->_knowledgeStatus) {
            $this->_knowledgeStatus = new KnowledgeStatusList(
                $this->version,
                $this->solution['id']
            );
        }

        return $this->_knowledgeStatus;
    }

    /**
     * Magic getter to lazy load subresources
     *
     * @param string $name Subresource to return
     * @return ListResource The requested subresource
     * @throws TwilioException For unknown subresources
     */
    public function __get(string $name): ListResource
    {
        if (\property_exists($this, '_' . $name)) {
            $method = 'get' . \ucfirst($name);
            return $this->$method();
        }

        throw new TwilioException('Unknown subresource ' . $name);
    }

    /**
     * Magic caller to get resource contexts
     *
     * @param string $name Resource to return
     * @param array $arguments Context parameters
     * @return InstanceContext The requested resource context
     * @throws TwilioException For unknown resource
     */
    public function __call(string $name, array $arguments): InstanceContext
    {
        $property = $this->$name;
        if (\method_exists($property, 'getContext')) {
            return \call_user_func_array(array($property, 'getContext'), $arguments);
        }

        throw new TwilioException('Resource does not have a context');
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
        return '[Twilio.Assistants.V1.KnowledgeContext ' . \implode(' ', $context) . ']';
    }
}

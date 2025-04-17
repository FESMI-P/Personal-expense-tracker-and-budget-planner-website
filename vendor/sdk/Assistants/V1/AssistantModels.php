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

use Twilio\Values;
abstract class AssistantModels
{
    /**
     * @property bool $perceptionEngineEnabled True if the perception engine is enabled.
     * @property bool $personalizationEngineEnabled True if the personalization engine is enabled.
    */
    public static function createAssistantsV1ServiceCustomerAi(array $payload = []): AssistantsV1ServiceCustomerAi
    {
        return new AssistantsV1ServiceCustomerAi($payload);
    }

    /**
     * @property string $profileApiKey The profile API key.
     * @property string $spaceId The space ID.
     * @property string $writeKey The write key.
    */
    public static function createAssistantsV1ServiceSegmentCredential(array $payload = []): AssistantsV1ServiceSegmentCredential
    {
        return new AssistantsV1ServiceSegmentCredential($payload);
    }

    /**
     * @property AssistantsV1ServiceCustomerAi $customerAi
     * @property string $name The name of the assistant.
     * @property string $owner The owner/company of the assistant.
     * @property string $personalityPrompt The personality prompt to be used for assistant.
     * @property AssistantsV1ServiceSegmentCredential $segmentCredential
    */
    public static function createAssistantsV1ServiceCreateAssistantRequest(array $payload = []): AssistantsV1ServiceCreateAssistantRequest
    {
        return new AssistantsV1ServiceCreateAssistantRequest($payload);
    }

    /**
     * @property AssistantsV1ServiceCustomerAi $customerAi
     * @property string $name The name of the assistant.
     * @property string $owner The owner/company of the assistant.
     * @property string $personalityPrompt The personality prompt to be used for assistant.
     * @property AssistantsV1ServiceSegmentCredential $segmentCredential
    */
    public static function createAssistantsV1ServiceUpdateAssistantRequest(array $payload = []): AssistantsV1ServiceUpdateAssistantRequest
    {
        return new AssistantsV1ServiceUpdateAssistantRequest($payload);
    }

}

class AssistantsV1ServiceCustomerAi implements \JsonSerializable
{
    /**
     * @property bool $perceptionEngineEnabled True if the perception engine is enabled.
     * @property bool $personalizationEngineEnabled True if the personalization engine is enabled.
    */
        protected $perceptionEngineEnabled;
        protected $personalizationEngineEnabled;
    public function __construct(array $payload = []) {
        $this->perceptionEngineEnabled = Values::array_get($payload, 'perception_engine_enabled');
        $this->personalizationEngineEnabled = Values::array_get($payload, 'personalization_engine_enabled');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'perception_engine_enabled' => $this->perceptionEngineEnabled,
            'personalization_engine_enabled' => $this->personalizationEngineEnabled
        ];
    }
}

class AssistantsV1ServiceSegmentCredential implements \JsonSerializable
{
    /**
     * @property string $profileApiKey The profile API key.
     * @property string $spaceId The space ID.
     * @property string $writeKey The write key.
    */
        protected $profileApiKey;
        protected $spaceId;
        protected $writeKey;
    public function __construct(array $payload = []) {
        $this->profileApiKey = Values::array_get($payload, 'profile_api_key');
        $this->spaceId = Values::array_get($payload, 'space_id');
        $this->writeKey = Values::array_get($payload, 'write_key');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'profile_api_key' => $this->profileApiKey,
            'space_id' => $this->spaceId,
            'write_key' => $this->writeKey
        ];
    }
}

class AssistantsV1ServiceCreateAssistantRequest implements \JsonSerializable
{
    /**
     * @property AssistantsV1ServiceCustomerAi $customerAi
     * @property string $name The name of the assistant.
     * @property string $owner The owner/company of the assistant.
     * @property string $personalityPrompt The personality prompt to be used for assistant.
     * @property AssistantsV1ServiceSegmentCredential $segmentCredential
    */
        protected $customerAi;
        protected $name;
        protected $owner;
        protected $personalityPrompt;
        protected $segmentCredential;
    public function __construct(array $payload = []) {
        $this->customerAi = Values::array_get($payload, 'customer_ai');
        $this->name = Values::array_get($payload, 'name');
        $this->owner = Values::array_get($payload, 'owner');
        $this->personalityPrompt = Values::array_get($payload, 'personality_prompt');
        $this->segmentCredential = Values::array_get($payload, 'segment_credential');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'customer_ai' => $this->customerAi,
            'name' => $this->name,
            'owner' => $this->owner,
            'personality_prompt' => $this->personalityPrompt,
            'segment_credential' => $this->segmentCredential
        ];
    }
}

class AssistantsV1ServiceUpdateAssistantRequest implements \JsonSerializable
{
    /**
     * @property AssistantsV1ServiceCustomerAi $customerAi
     * @property string $name The name of the assistant.
     * @property string $owner The owner/company of the assistant.
     * @property string $personalityPrompt The personality prompt to be used for assistant.
     * @property AssistantsV1ServiceSegmentCredential $segmentCredential
    */
        protected $customerAi;
        protected $name;
        protected $owner;
        protected $personalityPrompt;
        protected $segmentCredential;
    public function __construct(array $payload = []) {
        $this->customerAi = Values::array_get($payload, 'customer_ai');
        $this->name = Values::array_get($payload, 'name');
        $this->owner = Values::array_get($payload, 'owner');
        $this->personalityPrompt = Values::array_get($payload, 'personality_prompt');
        $this->segmentCredential = Values::array_get($payload, 'segment_credential');
    }

    public function toArray(): array
    {
        return $this->jsonSerialize();
    }

    public function jsonSerialize(): array
    {
        return [
            'customer_ai' => $this->customerAi,
            'name' => $this->name,
            'owner' => $this->owner,
            'personality_prompt' => $this->personalityPrompt,
            'segment_credential' => $this->segmentCredential
        ];
    }
}


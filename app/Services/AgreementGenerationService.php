<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use OpenAI;

class AgreementGenerationService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(config('services.openai.api_key'));
    }

    public function generateAgreementPromptUsingOpenAI(string $description): string
    {
        // Instruction for OpenAI to generate a structured agreement prompt
        $inputPrompt = "Create a detailed and effective prompt for generating a professional agreement. The agreement should be based on the following description: '{$description}'.

### The generated prompt should:
- Clearly define the type of agreement (e.g., service agreement, NDA, partnership contract).
- Specify the purpose and involved parties.
- Include necessary sections such as terms, obligations, payment, confidentiality, and termination.
- Provide guidance on tone (formal, legal, neutral).
- Ensure clarity, completeness, and best practices for legal documents.
- Be formatted as a **single clean text prompt** without extra explanations.

Output only the generated prompt as plain text, without JSON or additional formatting.";

        // Call OpenAI to generate the prompt
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a legal document drafting assistant.'],
                ['role' => 'user', 'content' => $inputPrompt],
            ],
            'max_tokens' => 500,
        ]);

        Log::debug('OpenAI response', ['response' => $response]);

        return trim($response->choices[0]->message->content);
    }

    public function generateAgreementFromPrompt(string $prompt): string
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional AI specializing in drafting legal agreements and contracts.'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 1000, // Increase token limit for longer agreements
        ]);

        return trim($response->choices[0]->message->content);
    }
}

<?php

namespace App\Services;


use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use Illuminate\Support\Facades\Log;
use OpenAI;

class EmailGenerationService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(config('services.openai.api_key'));
    }

    public function generatePromptUsingOpenAI(string $description): string
    {
        // Instruction to OpenAI's chat model to generate a creative prompt
        $inputPrompt = "Create a detailed and effective prompt for generating a professional business email in next request with this prompt, it should be only prompt. The email should be based on the following description: '{$description}'.

### The generated prompt should:
- Clearly define the purpose and audience of the email.
- Specify the desired tone (e.g., formal, friendly, persuasive).
- Include necessary structure: subject line, greeting, body, and call-to-action.
- Provide guidance on length and style (concise, engaging, professional).
- Ensure clarity, engagement, and best practices for business communication.
- Be formatted as a **single clean text prompt** without extra explanations.

Output only the generated prompt as plain text, without JSON or additional formatting.";

        // Call OpenAI's chat completion (GPT-3.5 or 4) to generate the prompt
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional business communication assistant.'],
                ['role' => 'user', 'content' => $inputPrompt],
            ],
            'max_tokens' => 500, // Set a reasonable limit for the text prompt
        ]);

        // Get the text response (generated prompt) from OpenAI
        Log::debug('OpenAI response', ['response' => $response]);

        return trim($response->choices[0]->message->content);
    }

    /**
     * Generate an image based on the provided prompt.
     *
     * @param string $prompt
     * @return array
     */
    public function generateEmailFromPrompt(string $prompt): string
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini', // Choose the best model for text generation
            'messages' => [
                ['role' => 'system', 'content' => 'You are a professional AI assistant specializing in business email writing.'],
                ['role' => 'user', 'content' => $prompt],
            ],
            'max_tokens' => 500, // Adjust token limit as needed
        ]);

        return trim($response->choices[0]->message->content);
    }
}

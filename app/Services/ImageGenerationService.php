<?php

namespace App\Services;

use App\Enums\ProductCategory;
use App\Enums\ProductStyle;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Log;
use OpenAI;

class ImageGenerationService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(config('services.openai.api_key'));
    }

    public function generateRandomPromptUsingOpenAI(ProductCategory $category, ProductStyle $style): string
    {
        $moods = ['serene', 'tense', 'joyful', 'mysterious', 'melancholic', 'energetic'];
        $timesOfDay = ['sunset', 'night', 'dawn', 'golden hour', 'noon'];
        $weather = ['foggy', 'rainy', 'sunny', 'snowy', 'stormy', 'overcast'];

        $randomMood = Arr::random($moods);
        $randomTime = Arr::random($timesOfDay);
        $randomWeather = Arr::random($weather);

        $inputPrompt = <<<PROMPT
            You are a creative AI. Generate a highly imaginative and unique image prompt for DALL-E 3 in JSON format, based on:

            - Category: '{$category->value}'
            - Style: '{$style->value}'
            - Mood: '{$randomMood}'
            - Time of Day: '{$randomTime}'
            - Weather: '{$randomWeather}'

            Instructions:
            1. Create a short, catchy 'title' (3–6 words).
            2. Generate a rich, vivid 'prompt' with sensory details, action, and context.
            3. Include a poetic and atmospheric 'description' of the image scene.

            Also integrate unique elements like: {$category->details()}, {$style->details()}.

            Generate the content in clean JSON format with 'title', 'prompt', and 'description' keys, without any extra line breaks or escape characters.
            PROMPT;

        // Call OpenAI's chat completion (GPT-3.5 or 4) to generate the prompt
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o-mini',
            'messages' => [
                ['role' => 'system', 'content' => 'You are a creative assistant'],
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
     */
    public function generateImageFromPrompt(string $prompt): array
    {
        $response = $this->client->images()->create([
            'prompt' => $prompt,
            'model' => 'dall-e-3',
            'n' => 1, // number of images to generate
            'size' => '1024x1024', // image size
        ]);

        // Return image URL and other data from response
        return [
            'url' => $response->data[0]->url,
            'prompt' => $prompt,
        ];
    }
}

<?php

namespace App\Enums;

use Illuminate\Support\Arr;

enum ProductCategory: string
{
    case NATURE_LANDSCAPES = 'Nature & Landscapes';

    case PEOPLE_PORTRAITS = 'People & Portraits';
    case ARCHITECTURE_URBAN = 'Architecture & Urban';
    case ABSTRACT_FINE_ART = 'Abstract & Fine Art';
    case TRAVEL_ADVENTURE = 'Travel & Adventure';
    case BUSINESS_TECHNOLOGY = 'Business & Technology';
    case FOOD_DRINK = 'Food & Drink';
    case FASHION_BEAUTY = 'Fashion & Beauty';
    case SPORTS_FITNESS = 'Sports & Fitness';
    case ANIMALS_PETS = 'Animals & Pets';

    public function details(): string
    {
        return match($this) {
            self::NATURE_LANDSCAPES => Arr::random([
                'Misty mountain peaks', 'Flowing rivers', 'Sunrays filtering through trees', 'Rolling hills',
                'Crystal clear lakes', 'Lush forests', 'Desert dunes', 'Volcanic eruptions', 'Majestic waterfalls',
                'Blossoming wildflowers', 'Rocky coastlines', 'Serene meadows', 'Snow-capped mountains',
                'Golden wheat fields', 'Moonlit beaches', 'Storm clouds gathering', 'Sunsets over valleys',
                'Starry night skies', 'Rainforests teeming with life', 'Coastal cliffs', 'Icy glaciers',
                'Wind-swept plains', 'Verdant jungles', 'Tranquil lakes at dawn', 'Fog over marshlands'
            ]),
            self::PEOPLE_PORTRAITS => Arr::random([
                'Dramatic lighting', 'Intense expressions', 'Soft smiles', 'Bold jewelry', 'Vintage clothing',
                'Close-up details of eyes', 'Candid moments', 'Urban street fashion', 'Ethereal lighting',
                'Silhouetted figures', 'Traditional costumes', 'Joyous laughter', 'Natural hair textures',
                'Tattooed skin', 'Cultural diversity', 'Emotional vulnerability', 'Bright, vivid makeup',
                'Unique facial features', 'Group dynamics', 'Wind blowing through hair', 'Aged hands holding objects'
            ]),
            self::ARCHITECTURE_URBAN => Arr::random([
                'Symmetrical facades', 'Glass skyscrapers', 'Aged brick buildings', 'Cobblestone streets',
                'Neon-lit streets', 'Rooftop views', 'Gothic cathedrals', 'Abandoned warehouses', 'Subway stations',
                'Graffiti-covered walls', 'Spiral staircases', 'Reflections in puddles', 'Art deco designs',
                'Cityscape at sunrise', 'Empty streets at dawn', 'Fire escapes on old buildings', 'Tall windows with iron grates',
                'Modern minimalist buildings', 'Shimmering reflections of buildings on water', 'Bridges spanning rivers'
            ]),
            self::ABSTRACT_FINE_ART => Arr::random([
                'Fluid brushstrokes', 'Bold splashes of color', 'Geometric shapes', 'Dreamlike imagery',
                'Interwoven textures', 'Blurred outlines', 'Surreal landscapes', 'Warped perspectives',
                'Fragmented light', 'Layers of paint', 'Mesmerizing patterns', 'Dotted patterns',
                'Irregular forms', 'Organic shapes', 'Delicate lines', 'Randomized splatters', 'Bright, energetic colors'
            ]),
            self::TRAVEL_ADVENTURE => Arr::random([
                'Snow-capped mountains', 'Bustling marketplaces', 'Exotic beaches', 'Hidden caves',
                'Majestic temples', 'Winding mountain paths', 'Jungle expeditions', 'Ancient ruins',
                'Local street food stalls', 'Backpacking journeys', 'Motorbikes on winding roads',
                'Serene lakeside campsites', 'Cityscapes from above', 'Wide-open desert landscapes',
                'Thrilling cliffside hikes', 'Starry night skies in remote areas', 'Wildlife safaris'
            ]),
            self::BUSINESS_TECHNOLOGY => Arr::random([
                'Sleek laptops', 'Boardroom meetings', 'Futuristic gadgets', 'Code on a screen', 'Robotic arms',
                'Data visualization graphs', 'High-tech offices', 'Minimalist workspaces', 'Smartphone apps',
                'Financial reports', 'Cybersecurity icons', 'VR headsets', 'Digital marketing campaigns',
                'Global network connections', 'AI-driven solutions', 'Startups brainstorming ideas'
            ]),
            self::FOOD_DRINK => Arr::random([
                'Freshly brewed coffee', 'Vibrant fruits in bowls', 'Rustic bread loaves', 'Soft, melting cheese',
                'Fine dining presentation', 'Street food stalls', 'Colorful cocktails', 'Glossy glazed donuts',
                'Fresh herbs on cutting boards', 'Breakfast spreads', 'Tacos bursting with toppings',
                'Chocolates drizzled with sauce', 'Warm soups in bowls', 'Exotic spices', 'Fresh seafood platters'
            ]),
            self::FASHION_BEAUTY => Arr::random([
                'Runway fashion', 'Flowing evening gowns', 'Bold makeup looks', 'Retro hairstyles',
                'High-fashion editorial shoots', 'Minimalist streetwear', 'Rich velvet fabrics',
                'Sleek leather jackets', 'Vibrant lipstick shades', 'Cultural fashion', 'Dramatic jewelry pieces',
                'Soft pastel clothing', 'Monochrome outfits', 'Avant-garde fashion', 'Tailored suits'
            ]),
            self::SPORTS_FITNESS => Arr::random([
                'Intense weightlifting', 'Marathon running', 'Yoga in serene locations', 'Boxing matches',
                'Rock climbing adventures', 'Swimmers diving into the water', 'Bicycle races', 'Skiers on snowy slopes',
                'Football tackles', 'Triathlons', 'High-energy dance classes', 'Tennis matches', 'Golf swings',
                'Kayaking down rapids', 'Mountain biking on rugged trails', 'Runners crossing finish lines'
            ]),
            self::ANIMALS_PETS => Arr::random([
                'Fluffy kittens', 'Majestic eagles in flight', 'Playful dogs in parks', 'Wild lions hunting',
                'Elephants splashing in rivers', 'Frogs on lily pads', 'Colorful tropical birds', 'Dolphins jumping from the sea',
                'Puppies learning new tricks', 'Horses galloping through fields', 'Owls perched on branches',
                'Cuddly rabbits', 'Tigers prowling through jungles', 'Brightly colored fish swimming', 'Polar bears on ice'
            ])
        };
    }

    public function translatedValue(): string
    {
        return match ($this) {
            self::NATURE_LANDSCAPES => __('Nature & Landscapes'),
            self::PEOPLE_PORTRAITS => __('People & Portraits'),
            self::ARCHITECTURE_URBAN => __('Architecture & Urban'),
            self::ABSTRACT_FINE_ART => __('Abstract & Fine Art'),
            self::TRAVEL_ADVENTURE => __('Travel & Adventure'),
            self::BUSINESS_TECHNOLOGY => __('Business & Technology'),
            self::FOOD_DRINK => __('Food & Drink'),
            self::FASHION_BEAUTY => __('Fashion & Beauty'),
            self::SPORTS_FITNESS => __('Sports & Fitness'),
            self::ANIMALS_PETS => __('Animals & Pets'),
        };
    }
}

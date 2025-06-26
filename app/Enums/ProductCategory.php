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
        $locale = app()->getLocale();

        return match($locale) {
            'lv' => match($this) {
                self::NATURE_LANDSCAPES => 'Daba un Ainavas',
                self::PEOPLE_PORTRAITS => 'Cilvēki un Portreti',
                self::ARCHITECTURE_URBAN => 'Arhitektūra un Pilsētas',
                self::ABSTRACT_FINE_ART => 'Abstraktā un Smalkā māksla',
                self::TRAVEL_ADVENTURE => 'Ceļojumi un Piedzīvojumi',
                self::BUSINESS_TECHNOLOGY => 'Bizness un Tehnoloģijas',
                self::FOOD_DRINK => 'Ēdiens un Dzērieni',
                self::FASHION_BEAUTY => 'Mode un Skaistums',
                self::SPORTS_FITNESS => 'Sports un Fitness',
                self::ANIMALS_PETS => 'Dzīvnieki un Mājdzīvnieki'
            },
            'es' => match($this) {
                self::NATURE_LANDSCAPES => 'Naturaleza y Paisajes',
                self::PEOPLE_PORTRAITS => 'Personas y Retratos',
                self::ARCHITECTURE_URBAN => 'Arquitectura y Urbanismo',
                self::ABSTRACT_FINE_ART => 'Arte Abstracto y Bellas Artes',
                self::TRAVEL_ADVENTURE => 'Viajes y Aventuras',
                self::BUSINESS_TECHNOLOGY => 'Negocios y Tecnología',
                self::FOOD_DRINK => 'Comida y Bebida',
                self::FASHION_BEAUTY => 'Moda y Belleza',
                self::SPORTS_FITNESS => 'Deportes y Fitness',
                self::ANIMALS_PETS => 'Animales y Mascotas'
            },
            'de' => match($this) {
                self::NATURE_LANDSCAPES => 'Natur und Landschaften',
                self::PEOPLE_PORTRAITS => 'Menschen und Porträts',
                self::ARCHITECTURE_URBAN => 'Architektur und Städte',
                self::ABSTRACT_FINE_ART => 'Abstrakte und Schöne Kunst',
                self::TRAVEL_ADVENTURE => 'Reisen und Abenteuer',
                self::BUSINESS_TECHNOLOGY => 'Geschäft und Technologie',
                self::FOOD_DRINK => 'Essen und Trinken',
                self::FASHION_BEAUTY => 'Mode und Schönheit',
                self::SPORTS_FITNESS => 'Sport und Fitness',
                self::ANIMALS_PETS => 'Tiere und Haustiere'
            },
            'fr' => match($this) {
                self::NATURE_LANDSCAPES => 'Nature et Paysages',
                self::PEOPLE_PORTRAITS => 'Personnes et Portraits',
                self::ARCHITECTURE_URBAN => 'Architecture et Urbain',
                self::ABSTRACT_FINE_ART => 'Art Abstrait et Beaux-Arts',
                self::TRAVEL_ADVENTURE => 'Voyage et Aventure',
                self::BUSINESS_TECHNOLOGY => 'Affaires et Technologie',
                self::FOOD_DRINK => 'Nourriture et Boisson',
                self::FASHION_BEAUTY => 'Mode et Beauté',
                self::SPORTS_FITNESS => 'Sports et Fitness',
                self::ANIMALS_PETS => 'Animaux et Animaux de compagnie'
            },
            'ar' => match($this) {
                self::NATURE_LANDSCAPES => 'الطبيعة والمناظر الطبيعية',
                self::PEOPLE_PORTRAITS => 'الناس واللوحات',
                self::ARCHITECTURE_URBAN => 'العمارة والحضرية',
                self::ABSTRACT_FINE_ART => 'الفن التجريدي والفن الراقي',
                self::TRAVEL_ADVENTURE => 'السفر والمغامرة',
                self::BUSINESS_TECHNOLOGY => 'الأعمال والتكنولوجيا',
                self::FOOD_DRINK => 'الطعام والشراب',
                self::FASHION_BEAUTY => 'الموضة والجمال',
                self::SPORTS_FITNESS => 'الرياضة واللياقة البدنية',
                self::ANIMALS_PETS => 'الحيوانات والحيوانات الأليفة'
            },
            default => $this->value
        };
    }
}

<?php

use App\Models\Page;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('view')->nullable();
            $table->timestamps();
        });

        Schema::create('page_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_id');
            $table->string('locale')->index();
            $table->string('slug')->nullable();
            $table->string('title')->nullable();
            $table->text('content')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->timestamps();

            $table
                ->foreign('page_id')
                ->references('id')
                ->on('pages')
                ->onDelete('cascade');
        });

        $pages = [
            [
                'title' => 'About us',
                'view' => 'about-us',
                'content' => null,
                'de' => ['title' => 'Über uns', 'view' => 'about-us', 'content' => null],
                'es' => ['title' => 'Acerca de nosotros', 'view' => 'about-us', 'content' => null],
                'fr' => ['title' => 'À propos de nous', 'view' => 'about-us', 'content' => null],
                'lv' => ['title' => 'Par mums', 'view' => 'about-us', 'content' => null],
                'ar' => ['title' => 'من نحن', 'view' => 'about-us', 'content' => null],
            ],
            [
                'title' => 'Contact us',
                'view' => 'contact-us',
                'content' => null,
                'de' => ['title' => 'Kontaktieren Sie uns', 'view' => 'contact-us', 'content' => null],
                'es' => ['title' => 'Contáctenos', 'view' => 'contact-us', 'content' => null],
                'fr' => ['title' => 'Contactez-nous', 'view' => 'contact-us', 'content' => null],
                'lv' => ['title' => 'Sazinieties ar mums', 'view' => 'contact-us', 'content' => null],
                'ar' => ['title' => 'اتصل بنا', 'view' => 'contact-us', 'content' => null],
            ],
            [
                'title' => 'Terms and conditions',
                'view' => null,
                'content' => null,
                'de' => ['title' => 'Allgemeine Geschäftsbedingungen', 'view' => null, 'content' => null],
                'es' => ['title' => 'Términos y condiciones', 'view' => null, 'content' => null],
                'fr' => ['title' => 'Conditions générales', 'view' => null, 'content' => null],
                'lv' => ['title' => 'Noteikumi un nosacījumi', 'view' => null, 'content' => null],
                'ar' => ['title' => 'الشروط والأحكام', 'view' => null, 'content' => null],
            ],
            [
                'title' => 'Privacy policy', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent(),
                'de' => ['title' => 'Datenschutzerklärung', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent('de')],
                'es' => ['title' => 'Política de privacidad', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent('es')],
                'fr' => ['title' => 'Politique de confidentialité', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent('fr')],
                'lv' => ['title' => 'Privātuma politika', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent('lv')],
                'ar' => ['title' => 'سياسة الخصوصية', 'view' => null, 'content' => $this->getPrivacyAndPolicyContent('ar')],
            ],
            [
                'title' => 'Cookie policy', 'view' => null, 'content' => $this->getCookiePolicyContent('en'),
                'de' => ['title' => 'Cookie-Richtlinie', 'view' => null, 'content' => $this->getCookiePolicyContent('de')],
                'es' => ['title' => 'Política de cookies', 'view' => null, 'content' => $this->getCookiePolicyContent('es')],
                'fr' => ['title' => 'Politique sur les cookies', 'view' => null, 'content' => $this->getCookiePolicyContent('fr')],
                'lv' => ['title' => 'Sīkdatņu politika', 'view' => null, 'content' => $this->getCookiePolicyContent('lv')],
                'ar' => ['title' => 'سياسة ملفات تعريف الارتباط', 'view' => null, 'content' => $this->getCookiePolicyContent('ar')],
            ],
        ];

        foreach ($pages as $page) {
            Page::create($page);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('page_translations');
        Schema::dropIfExists('pages');
    }

    private function getCookiePolicyContent($locale = 'en')
    {
        $data = [
            'en' => view('pages.templates.cookie-policy.en')->render(),
            'ar' => view('pages.templates.cookie-policy.ar')->render(),
            'de' => view('pages.templates.cookie-policy.de')->render(),
            'es' => view('pages.templates.cookie-policy.es')->render(),
            'fr' => view('pages.templates.cookie-policy.fr')->render(),
            'lv' => view('pages.templates.cookie-policy.lv')->render(),
        ];

        if (isset($data[$locale])) {
            return $data[$locale];
        }

        return $data['en'];
    }

    private function getPrivacyAndPolicyContent($locale = 'en')
    {
        $data = [
            'ar' => view('pages.templates.privacy-policy.ar')->render(),
            'de' => view('pages.templates.privacy-policy.de')->render(),
            'en' => view('pages.templates.privacy-policy.en')->render(),
            'es' => view('pages.templates.privacy-policy.es')->render(),
            'fr' => view('pages.templates.privacy-policy.fr')->render(),
            'lv' => view('pages.templates.privacy-policy.lv')->render(),
        ];

        if (isset($data[$locale])) {
            return $data[$locale];
        }

        return $data['en'];
    }
};

<?php

namespace App\Filament\Pages;

use App\Enums\FilePath;
use App\Enums\ImageSize;
use App\Models\CompanyInfo;
use App\Models\Contact;
use App\Models\HeroSection;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use UnitEnum;

/**
 * @property-read Schema $form
 */
class SiteSettings extends Page
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;
    protected static ?string $navigationLabel               = 'Site Settings';
    protected static string|UnitEnum|null $navigationGroup  = 'Settings';
    protected string $view                                  = 'filament.pages.site-settings';

    public ?array $data = [];

    public function mount(): void
    {
        $hero    = HeroSection::getData();
        $company = CompanyInfo::getData();
        $contact = Contact::getData();

        $this->form->fill([
            'hero_title'            => $hero->title,
            'hero_subtitle'         => $hero->subtitle,
            'hero_image'            => $hero->image ? [$hero->image] : null,

            'company_name'          => $company->name,
            'company_logo'          => $company->logo ? [$company->logo] : null,
            'company_image'         => $company->image ? [$company->image] : null,
            'attorney_id'           => $company->attorney_id,
            'company_about_title'   => $company->about_title,
            'company_about_content' => $company->about_content,

            'contact_phone'         => $contact->phone,
            'email'                 => $contact->email,
            'contact_whatsapp'      => $contact->whatsapp,
            'contact_facebook'      => $contact->facebook,
            'contact_linkedin'      => $contact->linkedin,
            'contact_twitter'       => $contact->twitter,
            'contact_instagram'     => $contact->instagram,
            'contact_address'       => $contact->full_address,
            'contact_latitude'      => $contact->latitude,
            'contact_longitude'     => $contact->longitude,
        ]);
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([

                Section::make('Company Info')
                    ->icon(Heroicon::OutlinedBuildingOffice)
                    ->schema([
                        TextInput::make('company_name')
                            ->label('Company Name')
                            ->required()
                            ->maxLength(255),

                        Select::make('attorney_id')
                            ->label('Managing Partner')
                            ->relationship('attorney', 'name')
                            ->nullable()
                            ->preload()
                            ->searchable()
                            ->native(false)
                            ->model(CompanyInfo::class),

                        FileUpload::make('company_logo')
                            ->label('Logo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatioOptions([
                                '1:1',
                            ])
                            ->automaticallyCropImagesToAspectRatio('1:1')
                            ->disk('public')
                            ->directory(FilePath::COMPANY_LOGO->value)
                            ->maxSize(ImageSize::MAX->value)
                            ->dehydrated(true),

                        FileUpload::make('company_image')
                            ->label('About Image')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatioOptions([
                                '4:3',
                            ])
                            ->automaticallyCropImagesToAspectRatio('4:3')
                            ->disk('public')
                            ->directory(FilePath::COMPANY_IMAGE->value)
                            ->maxSize(ImageSize::MAX->value)
                            ->dehydrated(true),

                        TextInput::make('company_about_title')
                            ->label('About Title')
                            ->maxLength(255)
                            ->columnSpanFull(),

                        Textarea::make('company_about_content')
                            ->label('About Content')
                            ->rows(4)
                            ->columnSpanFull(),
                    ])->columns(2),

                Section::make('Hero Section')
                    ->icon(Heroicon::OutlinedPhoto)
                    ->schema([
                        TextInput::make('hero_title')
                            ->label('Title')
                            ->required()
                            ->maxLength(255),

                        TextArea::make('hero_subtitle')
                            ->label('Subtitle')
                            ->maxLength(255),

                        FileUpload::make('hero_image')
                            ->label('Image')
                            ->image()
                            ->imageEditor()
                            ->disk('public')
                            ->directory(FilePath::HERO->value)
                            ->maxSize(ImageSize::MAX->value)
                            ->imagePreviewHeight('200')
                            ->dehydrated(true)
                            ->columnSpanFull(),
                    ])->columns(2),


                Section::make('Contact Details')
                    ->icon(Heroicon::OutlinedPhone)
                    ->schema([
                        TextInput::make('contact_phone')
                            ->label('Phone')
                            ->tel()
                            ->maxLength(20),

                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),

                        TextInput::make('contact_whatsapp')
                            ->label('WhatsApp')
                            ->prefix('+88')
                            ->tel()
                            ->maxLength(20)

                            // 👉 Before saving to DB
                            ->dehydrateStateUsing(function ($state) {
                                if (!$state) return null;

                                $number = str_replace("+88", "", $state);

                                return 'https://wa.me/+88' . $number;
                            })

                            // 👉 When showing in form (edit/view)
                            ->formatStateUsing(function ($state) {
                                if (!$state) return null;

                                return str_replace('https://wa.me/+88', '', $state);
                            }),

                        TextInput::make('contact_facebook')
                            ->label('Facebook URL')
                            ->url()
                            ->maxLength(255),

                        TextInput::make('contact_linkedin')
                            ->label('LinkedIn URL')
                            ->url()
                            ->maxLength(255),

                        TextInput::make('contact_twitter')
                            ->label('Twitter URL')
                            ->url()
                            ->maxLength(255),

                        TextInput::make('contact_instagram')
                            ->label('Instagram URL')
                            ->url()
                            ->maxLength(255),

                        Textarea::make('contact_address')
                            ->label('Full Address')
                            ->rows(2)
                            ->columnSpanFull(),

                        TextInput::make('contact_latitude')
                            ->label('Latitude')
                            ->numeric()
                            ->step(0.0000001),

                        TextInput::make('contact_longitude')
                            ->label('Longitude')
                            ->numeric()
                            ->step(0.0000001),
                    ])->columns(2),

            ])
            ->statePath('data');
    }

    // ── Header save button ────────────────────────────────
    protected function getHeaderActions(): array
    {
        return [
            Action::make('save')
                ->label('Save Settings')
                ->icon(Heroicon::OutlinedCloudArrowUp)
                ->action('save')
                ->keyBindings(['command+s', 'ctrl+s'])
        ];
    }

    public function save(): void
    {
        $data = $this->form->getState();

        HeroSection::updateOrCreate(
            ['id' => 1],
            [
                'title'    => $data['hero_title'],
                'subtitle' => $data['hero_subtitle'],
                'image'    => $data['hero_image'],
            ]
        );

        CompanyInfo::updateOrCreate(
            ['id' => 1],
            [
                'name'          => $data['company_name'],
                'logo'          => $data['company_logo'],
                'image'         => $data['company_image'],
                'attorney_id'   => $data['attorney_id'],
                'about_title'   => $data['company_about_title'],
                'about_content' => $data['company_about_content'],
            ]
        );

        Contact::updateOrCreate(
            ['id' => 1],
            [
                'phone'        => $data['contact_phone'],
                'email'        => $data['email'],
                'whatsapp'     => $data['contact_whatsapp'],
                'facebook'     => $data['contact_facebook'],
                'linkedin'     => $data['contact_linkedin'],
                'twitter'      => $data['contact_twitter'],
                'instagram'    => $data['contact_instagram'],
                'full_address' => $data['contact_address'],
                'latitude'     => $data['contact_latitude'],
                'longitude'    => $data['contact_longitude'],
            ]
        );

        Notification::make()
            ->title('Settings saved successfully')
            ->success()
            ->send();
    }
}

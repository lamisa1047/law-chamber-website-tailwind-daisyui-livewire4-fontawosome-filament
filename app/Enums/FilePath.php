<?php

namespace App\Enums;

enum FilePath: string
{
    case HERO        = 'hero';
    case ATTORNEY    = 'attorneys';
    case BLOG        = 'blogs';
    case GALLERY     = 'gallery';
    case COMPANY_LOGO  = 'company/logo';
    case COMPANY_IMAGE = 'company/image';

    // Return the full public storage path
    public function storagePath(): string
    {
        return 'storage/' . $this->value;
    }
}

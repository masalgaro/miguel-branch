<?php

namespace App\Utils;

use App\Interfaces\ImageStorage;
use Illuminate\Http\Request;

class ImageLocalStorage implements ImageStorage
{
    public function store(Request $request): ?string
    {
        if ($request->hasFile('profile_image')) {

            $path = $request->file('profile_image')
                ->store('phones', 'public');

            return $path;
        }

        return null;
    }
}

<?php 

namespace App\Utils;

use App\Interfaces\ImageStorage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageLocalStorage implements ImageStorage
{
    public function store(Request $request): string|null
    {
        if ($request->hasFile('profile_image')) {

            $path = $request->file('profile_image')
                            ->store('phones', 'public');

            return $path;
        }

        return null;
    }
}
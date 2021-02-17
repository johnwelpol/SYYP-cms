<?php

namespace App\Traits;

use Illuminate\Support\Arr;

trait SongHelperTrait 
{

    /**
     * prepareStoreParameter function
     *
     * to filter out unnecessary fields.
     * 
     * @param array $requestParameter
     * @return array
     */
    public function prepareStoreParameters(array $requestParameters) 
    {
        return [
            'title' => Arr::get($requestParameters, 'title'),
            'artist' => Arr::get($requestParameters, 'artist'),
            'lyrics' => Arr::get($requestParameters, 'lyrics'),
        ];
    }

    /**
     * prepareUpdateParameters function
     *
     * to filter out unnecessary fields.
     * 
     * @param array $requestParameter
     * @return array
     */
    public function prepareUpdateParameters(array $requestParameters) 
    {
        $updateParameters = [];

        if (Arr::has($requestParameters, 'title')) {
            $updateParameters = Arr::add(
                $requestParameters, 'title', Arr::get($requestParameters, 'title')
            );
        }

        if (Arr::has($requestParameters, 'artist')) {
            $updateParameters = Arr::add(
                $requestParameters, 'artist', Arr::get($requestParameters, 'artist')
            );
        }

        if (Arr::has($requestParameters, 'lyrics')) {
            $updateParameters = Arr::add(
                $requestParameters, 'lyrics', Arr::get($requestParameters, 'lyrics')
            );
        }

        return $updateParameters;
    }
    
}
<?php

declare(strict_types = 1);

namespace Php\Classes\EsFormatter;

use Illuminate\Support\Arr;
use Poppy\CanalEs\Classes\Es\DocumentFormatter;
use src\Classes\EsProperty\KoubeiCar;

class KoubeiCarDocumentFormatter extends DocumentFormatter
{

    public function format(): array
    {
        $properties = (new KoubeiCar())->properties();
        $keys       = array_keys($properties);

        $item = [];
        foreach ($keys as $key) {
            $item[$key] = Arr::get($this->item, $key);
        }
        return $item;
    }

}
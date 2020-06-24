<?php

namespace App\Models;

/**
 * Class Country
 *
 * @property-read \App\Models\City $cities
 */
class Country extends \ManaPHP\Db\Model
{
    public $country_id;
    public $country;
    public $last_update;
}
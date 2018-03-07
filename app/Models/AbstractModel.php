<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class AbstractModel
 * @property integer id
 * @package App\Models
 */
abstract class AbstractModel extends Model
{
    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }
}
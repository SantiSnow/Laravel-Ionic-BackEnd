<?php


namespace App\Http\Controllers;


trait UnixTimestampSerializable
{

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('d/m/Y');
    }

}

<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
       return [
        'id' => $this->id,
        'category' => isset($this->category[app()->getLocale()]) ? $this->category[app()->getLocale()] : $this->category['en'],
        'abc' => 'hello'.$this->id
       ];
    }
}

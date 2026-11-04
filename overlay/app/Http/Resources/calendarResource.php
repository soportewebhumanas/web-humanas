<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class calendarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {   
        return [
            'title' => $this->resource->titulo,
            'id' => $this->resource->id,
            'start' => $this->resource->fecha_inicio,
            $this->mergeWhen( isset($this->resource->fecha_fin), [ 
                'end' => $this->resource->fecha_fin,
            ] ),
            'estado' => $this->resource->estado,
            'backgroundColor' => 'green',
            'links' => [
                'show' => route('eventos.show', ['actividad' => $this->resource->id]),
            ],
        ];
    }
}

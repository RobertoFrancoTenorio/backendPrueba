<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class formulario extends JsonResource
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
            'nombre' => $this->nombre,
            'edad' => $this->edad,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'fecha_inscripcion' => $this->fecha_inscripcion,
            'costo' => $this->costo,
        ];
    }
}

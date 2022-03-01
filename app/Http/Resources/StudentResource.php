<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Crypt;

class StudentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        $return = [
            'id' => $this->id,
            'name' => $this->name,
            'matricula' => $this->matricula,
            'ativo' => $this->ativo,
            'enable' => $this->ativo ? __('labels.yes') : __('labels.no'),
            'cpf' => $this->cpf,
            'email' => $this->email,
            'created_at' => $this->created_at->format('d/m/Y H:i'),
            // 'acao' => 
        ];

        if ($request->input('source') == 'grid') {
            $acao = view('components.grid_buttons', [
                'code' => $this->id,
                'description' => $this->name,
                'route_edit' => route('student.edit', ['student' => $this->id]),
                'route_delete' => route('student.destroy', ['student' => $this->id]),
                'route_get_item' => route('student.edit', [
                    'student' => $this->id
                ]),
            ])->render();

            $return['acao'] = $acao;
        }

        return $return;
    }
}

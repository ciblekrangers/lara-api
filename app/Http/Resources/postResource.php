<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Arr;

class postResource extends JsonResource
{

    // define property
    public $status;
    public $message;
    public $resource;
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);
        $this->message = $message;
        $this->status = $status;
    }


    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'success' => $this->status,
            'message' => $this->message,
            'data' => $this->resource
        ];
    }
}

<?php

namespace App\Http\Serializer;

use League\Fractal\Serializer\ArraySerializer;

class CustomSerializer extends ArraySerializer
{
  public function collection($resourceKey, array $data)
  {
    return [
      'ret' => true,
      'status_code' => 200, 
      'message' => 'success',
      'data' => $data
    ];
  }

  public function item($resourceKey, array $data)
  {
    return [
      'ret' => true,
      'status_code' => 200, 
      'message' => 'success',
      'data' => $data
    ];
  }
}
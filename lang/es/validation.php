<?php

return [
    'required' => 'El campo :attribute es obligatorio.',
    'max' => [
        'numeric' => 'El campo :attribute no debe ser mayor a :max.',
        'file' => 'El archivo :attribute no debe ser mayor que :max kilobytes.',
        'string' => 'El campo :attribute no debe tener más de :max caracteres.',
        'array' => 'El campo :attribute no debe tener más de :max elementos.',
    ],
    'unique' => 'El campo :attribute ya ha sido tomado.',
    'numeric' => 'El campo :attribute debe ser un número.',
    'in' => 'El campo :attribute debe ser uno de los siguientes valores: :values.',
    // Puedes agregar más reglas según tus necesidades.
    
    'attributes' => [
        'codigo_catalogo' => 'código de catálogo',
        'nombre' => 'nombre del producto',
        'precio' => 'precio',
        'estado' => 'estado del producto',
    ],
];

<?php
return [
    'Room' => [
        'Create' => [
            'rules' => [
                'name'              => [ 'required', 'string', 'max:191'],
                'file'          => [ 'required', 'file' ],
                'image'          => [ 'required', 'file' ],
                'ids'          => [ 'required', 'array' ],
                'ids.*'          => [ 'required', 'string', 'min:10']
            ]
        ]
    ]
];
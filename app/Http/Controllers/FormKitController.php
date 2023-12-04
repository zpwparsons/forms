<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class FormKitController extends Controller
{
    public function create(): Response
    {
        $schema = [
            [
                '$formkit' => 'form',
                'actions'  => false,
                'children' => [
                    [
                        '$formkit' => 'multi-step',
                        'children' => [
                            [
                                '$formkit' => 'step',
                                'name'     => 'Step 1',
                                'children' => [
                                    [
                                        '$el'   => 'div',
                                        'attrs' => [
                                            'class' => 'grid grid-cols-2 gap-6',
                                        ],
                                        'children' => [
                                            [
                                                '$formkit'    => 'text',
                                                'name'        => 'name',
                                                'label'       => 'Name',
                                                'placeholder' => 'John',
                                                'value'       => 'Default name ',
                                                'validation'  => 'required',
                                            ],
                                            [
                                                '$formkit'    => 'text',
                                                'name'        => 'surname',
                                                'label'       => 'Surname',
                                                'placeholder' => 'Doe',
                                                'validation'  => 'required',
                                            ],
                                            [
                                                '$formkit'    => 'text',
                                                'name'        => 'email',
                                                'label'       => 'Email',
                                                'placeholder' => 'johndoe@example.com',
                                                'validation'  => 'required|email',
                                            ],
                                        ],
                                    ]
                                ],
                            ],
                            [
                                '$formkit' => 'step',
                                'name'     => 'Step 2',
                                'children' => [
                                    [
                                        '$formkit'   => 'textarea',
                                        'name'       => 'description',
                                        'label'      => 'Description',
                                        'help'       => 'A short description about yourself.',
                                        'validation' => 'required',
                                    ],
                                    [
                                        '$el' => 'div',
                                        'attrs' => [
                                            'class' => 'grid grid-cols-2 gap-6',
                                        ],
                                        'children' => [
                                            [
                                                '$formkit'   => 'date',
                                                'name'       => 'birthday',
                                                'label'      => 'Birthday',
                                                'validation' => 'required|date_before:2010-01-01',
                                            ],
                                            [
                                                '$formkit'   => 'tel',
                                                'name'       => 'phone',
                                                'label'      => 'Phone Number',
                                                'validation' => 'matches:/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/',
                                                'validationVisibility' => 'dirty',
                                                'validationMessages'   => [
                                                    'matches' => 'The phone number field must be in the format xxx-xxx-xxxx',
                                                ],
                                            ],
                                        ],
                                    ]
                                ],
                            ],
                            [
                                '$formkit' => 'step',
                                'name'     => 'Step 3',
                                'children' => [
                                    [
                                        '$formkit' => 'radio',
                                        'name'     => 'languages',
                                        'label'    => 'Languages',
                                        'help'     => 'What languages do you comfortable fluently?',
                                        'options'  => [
                                            'English',
                                            'Afrikaans',
                                            'German',
                                        ],
                                        'validation' => 'required',
                                    ],
                                    [
                                        '$formkit' => 'select',
                                        'name'     => 'transport',
                                        'label'    => 'Preferred Transportation',
                                        'options'  => [
                                            'E-Bike',
                                            'E-Scooter',
                                            'Electric car',
                                            'Walking',
                                            'Space tube',
                                        ],
                                        'validation' => 'required',
                                    ],
                                    [
                                        '$formkit'   => 'checkbox',
                                        'name'       => 'terms',
                                        'label'      => 'Terms and Conditions',
                                        'help'       => 'Do you agree to our terms of service',
                                        'validation' => 'accepted',
                                    ],
                                ],
                            ],
                        ],
                    ]
                ],
            ],
        ];

        return Inertia::render('FormKit', [
            'schema' => $schema,
        ]);
    }

    public function store(Request $request)
    {
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class VueFormController extends Controller
{
    public function create(): Response
    {
        $schema = [
            'name' => [
                'type'        => 'text',
                'label'       => 'Name',
                'placeholder' => 'John',
                'default'     => 'Default name',
            ],
            'surname' => [
                'type'        => 'text',
                'label'       => 'Surname',
                'placeholder' => 'Doe',
            ],
            'email' => [
                'type'        => 'text',
                'label'       => 'Email',
                'inputType'   => 'email',
                'placeholder' => 'johndoe@example.com',
            ],
            'description' => [
                'type'        => 'textarea',
                'label'       => 'Description',
                'description' => 'A short description about yourself.',
            ],
            'birthday' => [
                'type'        => 'date',
                'label'       => 'Birthday',
            ],
            'phone' => [
                'type'        => 'text',
                'inputType'   => 'tel',
                'label'       => 'Phone Number',
            ],
            'languages' => [
                'type'        => 'radiogroup',
                'label'       => 'Languages',
                'description' => 'What languages do you comfortable fluently?',
                'items'      => [
                    ['value' => 'english', 'label' => 'English'],
                    ['value' => 'afrikaans', 'label' => 'Afrikaans'],
                    ['value' => 'german', 'label' => 'German'],
                ],
            ],
            'preferred_transportation' => [
                'type'      => 'select',
                'search'    => 'true',
                'native'    => false,
                'label'     => 'Preferred Transportation',
                'inputType' => 'search',
                'items'     => [
                    ['value' => 'e-bike', 'label' => 'E-Bike'],
                    ['value' => 'e-scooter', 'label' => 'E-Scooter'],
                    ['value' => 'electric-car', 'label' => 'Electric Car'],
                    ['value' => 'walking', 'label' => 'Walking'],
                    ['value' => 'space-tube', 'label' => 'Space Tube'],
                ],
            ],
            'terms' => [
                'type' => 'checkbox',
                'text' => 'Do you agree to our terms of service',
            ],
        ];

        $tabs = [
            'step_1' => [
                'label'    => 'Step 1',
                'elements' => [
                    'name',
                    'surname',
                    'email',
                ],
            ],
            'step_2' => [
                'label'    => 'Step 2',
                'elements' => [
                    'description',
                    'birthday',
                    'phone',
                ],
            ],
            'step_3' => [
                'label'    => 'Step 3',
                'elements' => [
                    'languages',
                    'preferred_transportation',
                    'terms',
                ],
            ],
        ];

        return Inertia::render('VueForm', [
            'tabs'   => $tabs,
            'schema' => $schema,
        ]);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}

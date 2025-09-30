<?php

declare(strict_types=1);

return [
    'common' => [
        'steps' => [
            'email' => 'Email address',
        ],
        'questions' => [
            'email' => [
                'label'       => 'Email address',
                'placeholder' => 'example@email.com',
                'help'        => 'This email address will only be used for uniqueness checking unless you allow us to send you the results.'
            ],
        ],
    ],
    'student' => [
        'steps' => [
            'student_details' => 'Personal Details',
        ],
        'questions' => [
            'country' => [
                'label'       => 'Country',
                'placeholder' => 'Select country',
                'help'        => 'Please select the country you are currently working in.',
            ],
            'gender' => [
                'label'   => 'Gender',
                'options' => [
                    'male'              => 'Male',
                    'female'            => 'Female',
                    'other'             => 'Other',
                    'prefer_not_to_say' => 'Prefer not to say',
                ]
            ],
            'birth_year' => [
                'label'       => 'Birth Year',
                'placeholder' => '2006',
            ],
            'current_education_level' => [
                'label'   => 'Current Education Level',
                'help'    => 'Please select the current education level you are pursuing.',
                'options' => [
                    'high_school' => 'High School',
                    'bachelor'    => 'Bachelor',
                    'master'      => 'Master',
                    'doctorate'   => 'Doctorate',
                    'other'       => 'Other',
                ]
            ],
            'training_type' => [
                'label'   => 'Training Type',
                'options' => [
                    'fulltime'        => 'Full-time student',
                    'apprencticeship' => 'Apprencticeship',
                    'self_training'   => 'Self-training',
                    'other'           => 'Other',
                ]
            ],
            'specialization' => [
                'label'   => 'Target Specialization',
                'help'    => 'Please select the main specialization you are pursuing.',
                'options' => [
                    'dev'           => 'Development (web, mobile, software, ...)',
                    'ai'            => 'AI',
                    'data_science'  => 'Data Science',
                    'database'      => 'Database Management',
                    'devops'        => 'DevOps',
                    'cybersecurity' => 'Cybersecurity',
                    'sysops'        => 'System & Network Operations',
                    'other'         => 'Other',
                ]
            ],
            'work_experience' => [
                'label'   => 'Work Experience',
                'help'    => 'Please select the work experience you have in your target specialization (including internships, apprencticeships, freelancing, ...).',
                'options' => [
                    'none'   => 'None',
                    '0_12_months'  => 'Small (less than a year)',
                    '12_24_months' => 'Medium (1-2 years)',
                    '24_48_months' => 'Large (2-4 years)',
                    '48+_months'   => 'Very large (more than 4 years)',
                ]
            ]
        ],
    ],
];

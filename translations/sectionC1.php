<?php

return [
    'title' => 'Section C1: Household Income and Expenditure',
    'questions' => [

        1 => 'Information on Household Income in 2024(please answer in local currency)',

        2 => "Total household income in 2024",

        3 => [
    "category" => "Farm income",
    "rows" => [
      [
        "sub" => "Farm income from sales",
        "desc" => "Income earned from the sale of agricultural products, including crops, livestock, fisheries, and forestry (excluding the value of self-consumed production and stored).",
      ],
      [
        "sub" => "Farm income from non-sales",
        "desc" => "Farm income is evaluated from self-consumption and stored at home (all farm production).",
        
      ]
    ]
  ],
        4 => [
    "category" => "Non-farm income",
    "rows" => [
      [
        "sub" => "Non-farm business income",
        "desc" => "Net income generated from household-run businesses unrelated to farming, such as retail shops, restaurants, home-based production, transport services, etc.",
      ],
      [
        "sub" => "Wage and salary income",
        "desc" => "Income from employment includes wages, salaries, bonuses, or in-kind payments from any household member.",
      ]
    ]
  ],
        5 =>[
    "category" => "Other income (transfers, rents, pensions)",
    "rows" => [
      [
        "sub" => "",
        "desc" => "Includes income from property rents, government pensions, insurance payments, or other personal transfers not classified elsewhere.",
      ]
    ]
      ],

     6 => [
            'label' => 'How long your family take to earn 10,000 units of local currency :',
            'options' => [
                'Within one week',
                'Between on week and one month',
                '1-6 months',
                '6-12 months',
                'More than one year',
            ],
        ],

      7 => [
            'label' => 'How difficult to earn your family 10,000 units of local currency:',
            'options' => [
                'Very difficult',
                'Difficult',
                'Neutral',
                'Easy',
                'Very easy',
            ],
        ],

    ]
    ];
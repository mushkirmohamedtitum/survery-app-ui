<?php

return [
    'title' => 'Section C31: Household Food Consumption',
    'questions' => [

        1 => [

        'label' => 'In 2024, did your family experience any periods of food shortage?',
        'options' => [
            'No','Yes',
        ],
        ],

        2 => 'How many days?',

        3 => [
           'label' => 'Did you experience food shortages during your childhood(i.e., 3-15 years old)?',
           'options' => [
            'No', 'Yes',
        ],
    ],

        4 => 'At whar age did you experience the most severe food shortages?',

        5 => 'I the last week, how many household members have meals together?',

        6 => 'Household Food Consumption and Sources(Past 7 Days)',

        $data = [
    'table_instruction' => 'For each food group, please provide the following information for the past week (7 days)',
    'table_headers' => [
        'food_group' => 'Food Group',
        'examples' => 'Examples',
        'days_consumed' => 'Days consumed in the past 7 days? (0–7)',
        'total_amount' => 'Total amount (Kg)',
        'own_production' => 'Own production (%)',
        'purchased' => 'Purchased (%)',
        'total_purchase_cost' => 'Total purchase cost (in local currency)',
    ],
    'food_groups' => [
        'Rice' => [
            'examples' => 'Cooked rice, rice porridge, rice noodles, etc.',
            'codes' => ['c3_3', 'c3_3_a', 'c3_3_b', 'c3_3_c', 'c3_3_d'],
        ],
        'Wheat' => [
            'examples' => 'Flour, noodles, and bread, etc.',
            'codes' => ['c3_4', 'c3_4_a', 'c3_4_b', 'c3_4_c', 'c3_4_d'],
        ],
        'Maize' => [
            'examples' => 'Corn pone, corn porridge, etc.',
            'codes' => ['c3_5', 'c3_5_a', 'c3_5_b', 'c3_5_c', 'c3_5_d'],
        ],
        'Roots and tubers' => [
            'examples' => 'Potatoes, sweet potatoes, cassava, etc.',
            'codes' => ['c3_6', 'c3_6_a', 'c3_6_b', 'c3_6_c', 'c3_6_d'],
        ],
        'Legumes' => [
            'examples' => 'Beans, lentils, tofu, soy milk, etc.',
            'codes' => ['c3_7', 'c3_7_a', 'c3_7_b', 'c3_7_c', 'c3_7_d'],
        ],
        'Nuts and seeds' => [
            'examples' => 'Peanuts, sunflower seeds, sesame, etc.',
            'codes' => ['c3_8', 'c3_8_a', 'c3_8_b', 'c3_8_c', 'c3_8_d'],
        ],
        'Vegetables' => [
            'examples' => 'Leafy greens, mushrooms, etc.',
            'codes' => ['c3_9', 'c3_9_a', 'c3_9_b', 'c3_9_c', 'c3_9_d'],
        ],
        'Fruits' => [
            'examples' => 'Apples, bananas, oranges, etc.',
            'codes' => ['c4_0', 'c4_0_a', 'c4_0_b', 'c4_0_c', 'c4_0_d'],
        ],
        'Meat' => [
            'examples' => 'Poultry, beef, lamb, pork, etc.',
            'codes' => ['c4_1', 'c4_1_a', 'c4_1_b', 'c4_1_c', 'c4_1_d'],
        ],
        'Poultry' => [
            'examples' => 'Chicken, duck, goose, etc.',
            'codes' => ['c4_2', 'c4_2_a', 'c4_2_b', 'c4_2_c', 'c4_2_d'],
        ],
        'Fish and seafood' => [
            'examples' => 'Fish, shrimp, crabs, etc.',
            'codes' => ['c4_3', 'c4_3_a', 'c4_3_b', 'c4_3_c', 'c4_3_d'],
        ],
        'Eggs' => [
            'examples' => 'Chicken eggs, duck eggs, etc.',
            'codes' => ['c4_4', 'c4_4_a', 'c4_4_b', 'c4_4_c', 'c4_4_d'],
        ],
        'Dairy products' => [
            'examples' => 'Milk, yogurt, powdered milk, etc.',
            'codes' => ['c4_5', 'c4_5_a', 'c4_5_b', 'c4_5_c', 'c4_5_d'],
        ],
        'Fats and oils' => [
            'examples' => 'Cooking oil, margarine, butter, etc.',
            'codes' => ['c4_6', 'c4_6_a', 'c4_6_b', 'c4_6_c', 'c4_6_d'],
        ],
    ],
]

]];

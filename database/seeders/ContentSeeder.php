<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $properties = [
            [
                'name' => 'Котлета',
                'name_en' => 'Cutlet',
                'options' => [
                    [
                        'name' => 'Оригинальная',
                        'name_en' => 'Original',
                    ],
                    [
                        'name' => 'Вегетерианская',
                        'name_en' => 'Vegetarian',
                    ],
                ],
            ],
        ];

        foreach ($properties as $property) {
            $property['created_at'] = Carbon::now();
            $property['updated_at'] = Carbon::now();
            $options = $property['options'];
            unset($property['options']);
            $propertyId = DB::table('properties')->insertGetId($property);

            foreach ($options as $option) {
                $option['created_at'] = Carbon::now();
                $option['updated_at'] = Carbon::now();
                $option['property_id'] = $propertyId;
                DB::table('property_options')->insert($option);
            }
        }

        $categories = [
            [
                'name' => 'Бургеры',
                'name_en' => 'Burgers',
                'code' => 'burgers',
                'description' => 'Пышные булочки для истинных ценителей.',
                'description_en' => 'Lush buns for true connoisseurs.',
                'image' => 'categories/burger.png',
                'products' => [
                    [
                        'name' => 'Гамбургер',
                        'name_en' => 'Hamburger',
                        'code' => 'hamburger',
                        'description' => 'Большой сандвич с двумя рублеными бифштексами из натуральной цельной говядины
                                        на специальной булочке, заправленной луком, двумя кусочками маринованных огурчиков,
                                        ломтиком сыра «Чеддер», свежим салатом, и специальным соусом.',
                        'description_en' => 'Large sandwich with two chopped beefsteaks made of natural whole beef
                                             on a special bun filled with onions, two pieces of pickled cucumbers,
                                             a slice of Chedder cheese, fresh salad, and a special sauce.',
                        'image' => 'products/hamburger.png',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                1,
                            ],
                            [
                                2,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Чизбургер',
                        'name_en' => 'Cheeseburger',
                        'code' => 'cheeseburger',
                        'description' => 'Тот самый Бургер с рубленым бифштексом из 100% говядины
                                        на булочке с кунжутом. Особенный вкус сандвичу придают соус «Гриль» с дымком,
                                        два кусочка сыра «эмменталь», ломтик помидора, свежий салат и лук.',
                        'description_en' => 'The same burger with chopped beefsteaks of 100% beef
                                             on a sesame bun. A special taste of sandwich is given by the sauce "Grill" with smoke,
                                             two pieces of emmental cheese, a slice of tomato, fresh lettuce and onions.',
                        'image' => 'products/cheeseburger.png',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                1,
                            ],
                            [
                                2,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Чикенбургер',
                        'name_en' => 'Chicken burger',
                        'code' => 'chicken_burger',
                        'description' => 'Вкуснейшее рубленное куриное филе в хрустящей панировке,
                                        пикантный соус "Чикаго" со вкусом барбекю, свежие овощи, сыр и бекон.',
                        'description_en' => 'Delicious chopped chicken fillet in crispy breading,
                                             Piquant BBQ-flavored Chicago sauce, fresh vegetables, cheese and bacon.',
                        'image' => 'products/chicken_burger.png',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                1,
                            ],
                            [
                                2,
                            ],
                        ],
                    ],
                    [
                        'name' => 'Двойной гамбургер',
                        'name_en' => 'Double hamburger',
                        'code' => 'double_hamburger',
                        'description' => 'Тот самый Бургер с двумя большими рублеными бифштексами из 100% говядины
                                        на булочке с кунжутом. Особенный вкус сандвичу придают соус «Гриль» с дымком,
                                        3 кусочка сыра «эмменталь», ломтик помидора, свежий салат и лук.',
                        'description_en' => 'The same burger with two large chopped beefsteaks of 100% beef
                                            on a sesame bun. A special taste of sandwich is given by the sauce "Grill" with smoke,
                                            3 pieces of emmental cheese, tomato slice, fresh salad and onions.',
                        'image' => 'products/double_hamburger.png',
                        'properties' => [
                            1,
                        ],
                        'options' => [
                            [
                                1,
                            ],
                            [
                                2,
                            ],
                        ],
                    ],
                ],
            ],
            [
                'name' => 'Снэки',
                'name_en' => 'Snacks',
                'code' => 'snacks',
                'description' => 'Только любимый вкус – и ничего лишнего. Совершенный вкус!',
                'description_en' => 'Only favorite taste - and nothing superfluous. Perfect taste!',
                'image' => 'categories/snack.png',
                'products' => [
                    [
                        'name' => 'Куриные крылышки',
                        'name_en' => 'Chicken wings',
                        'code' => 'chicken_wings',
                        'description' => 'Хрустящие куриные крылышки. Еще аппетитнее с соусом Барбекю!',
                        'description_en' => 'Crispy chicken wings. Even more appetizing with barbecue sauce!',
                        'image' => 'products/chicken_wings.png',
                    ],
                    [
                        'name' => 'Наггетсы',
                        'name_en' => 'Nuggets',
                        'code' => 'nuggets',
                        'description' => 'Обжаренное в растительном фритюре куриное мясо, в панировочных сухарях.',
                        'description_en' => 'Fried in vegetable frit chicken meat, in breadcrumbs.',
                        'image' => 'products/nuggets.jpg',
                    ],
                    [
                        'name' => 'Большие креветки',
                        'name_en' => 'Large shrimp',
                        'code' => 'shrimp',
                        'description' => 'Жареные тигровые креветки в хрустящей панировке. Легко. Изысканно. Вкусно.',
                        'description_en' => 'Fried tiger shrimp in crispy breading. Easily. Elegantly. Delicious.',
                        'image' => 'products/shrimp.png',
                    ],
                    [
                        'name' => 'Сырные палочки',
                        'name_en' => 'Cheese sticks',
                        'code' => 'cheese_sticks',
                        'description' => 'Вкуснейшие сырные палочки в хрустящей панировке.',
                        'description_en' => 'Delicious cheese sticks in crispy breading.',
                        'image' => 'products/cheese_sticks.png',
                    ],
                ],
            ],
            [
                'name' => 'Десерты',
                'name_en' => 'Desserts',
                'code' => 'desserts',
                'description' => 'Для получения приятных ощущений в любое время дня.',
                'description_en' => 'For enjoyable sensations at any time of the day.',
                'image' => 'categories/dessert.jpg',
                'products' => [
                    [
                        'name' => 'Чизкейк по-американски',
                        'name_en' => 'American Cheesecake',
                        'code' => 'cheesecake',
                        'description' => 'Песочный бисквит с нежным творожным сыром и добавлением цельного молока.',
                        'description_en' => 'Sand biscuit with delicate curd cheese and the addition of whole milk.',
                        'image' => 'products/cheesecake.png',
                    ],
                    [
                        'name' => 'Пирожок Вишневый',
                        'name_en' => 'Cherry Pie',
                        'code' => 'cherry_pie',
                        'description' => 'Обжаренный во фритюре пирожок со сладкой начинкой из вишни.',
                        'description_en' => 'Fried pie with sweet cherry filling.',
                        'image' => 'products/cherry_pie.png',
                    ],
                    [
                        'name' => 'Шоколадный мусс',
                        'name_en' => 'Chocolate muss',
                        'code' => 'chocolate_muss',
                        'description' => 'Воздушный шоколадный мусс с темным шоколадом, украшенный шоколадной стружкой.',
                        'description_en' => 'Air chocolate mousse with dark chocolate, decorated with chocolate chips.',
                        'image' => 'products/chocolate_muss.png',
                    ],
                    [
                        'name' => 'Донат с шоколадным кремом',
                        'name_en' => 'Donut with chocolate cream',
                        'code' => 'donut',
                        'description' => 'Нежный донат с шоколадно-кремовой начинкой, покрытый молочной и шоколадной глазурью.',
                        'description_en' => 'Delicate donut with chocolate-cream filling, covered with milk and chocolate glaze.',
                        'image' => 'products/donut.png',
                    ],
                ],
            ],
        ];

        foreach ($categories as $category) {
            $category['created_at'] = Carbon::now();
            $category['updated_at'] = Carbon::now();
            $products = $category['products'];
            unset($category['products']);
            $categoryId = DB::table('categories')->insertGetId($category);

            foreach ($products as $product) {
                $product['created_at'] = Carbon::now();
                $product['updated_at'] = Carbon::now();
                $product['hit'] = rand(0, 1);
//                $product['hit'] = !boolval(rand(0, 3)); <- Для того чтобы реже был "Хит"!
                $product['recommend'] = rand(0, 1);
                $product['new'] = rand(0, 1);
                $product['category_id'] = $categoryId;

                if (isset($product['properties'])) {
                    $properties = $product['properties'];
                    unset($product['properties']);
                    $skusOptions = $product['options'];
                    unset($product['options']);
                }

                $productId = DB::table('products')->insertGetId($product);

                if (isset($properties)) {
                    foreach ($properties as $propertyId) {
                        DB::table('property_product')->insert([
                            'product_id' => $productId,
                            'property_id' => $propertyId,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);
                    }

                    foreach ($skusOptions as $skuOptions) {
                        $skuId = DB::table('skus')->insertGetId([
                            'product_id' => $productId,
                            'count' => rand(1, 100),
                            'price' => rand(50, 300),
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
                        ]);

                        foreach ($skuOptions as $skuOption) {
                            $skuData['sku_id'] = $skuId;
                            $skuData['property_option_id'] = $skuOption;
                            $skuData['created_at'] = Carbon::now();
                            $skuData['updated_at'] = Carbon::now();

                            DB::table('sku_property_option')->insert($skuData);
                        }
                    }

                    unset($properties);
                } else {
                    DB::table('skus')->insert([
                        'product_id' => $productId,
                        'count' => rand(1, 100),
                        'price' => rand(50, 300),
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    ]);
                }
            }
        }
    }
}

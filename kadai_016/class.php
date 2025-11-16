<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kadai_016</title>
</head>
<body>
    <?php
    class Food {
        private $name;
        private $price;

        public function __construct(string $name, string $price) {
            $this->name = $name;
            $this->price = $price;
        }
        public function show_price() {
            echo $this->price . '<br>';
        }
    }

    class Animal {
        private $name;
        private $height;
        private $weight;

        public function __construct(string $name, int $height, int $weight) {
            $this->name = $name;
            $this->height = $height;
            $this->weight = $weight;
        }
        public function sho_height() {
            echo $this->height . '<br>';
        }

    }

    $food = new Food('中島', '愛知');
    $animal = new Animal('ライオン', 100, 200);

    print_r($food);
    print_r($animal);

    $food->show_price();
    $animal->sho_height();
    

    ?>
</body>
</html>
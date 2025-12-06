<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>クラスの練習</title>
</head>
<body>
    <p>
        <?php
        // Step2. クラスを作成する

        // Foodクラス
        class Food {
            public $name;
            public $price;

            // コンストラクタ
            public function __construct($name, $price) {
                $this->name = $name;
                $this->price = $price;
            }

            // priceプロパティを出力するメソッド
            public function show_price() {
                echo "価格: " . $this->price . "円<br>";
            }
        }

        // Animalクラス
        class Animal {
            public $name;
            public $height;
            public $weight;

            // コンストラクタ
            public function __construct($name, $height, $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }

            // heightプロパティを出力するメソッド
            public function show_height() {
                echo "身長: " . $this->height . "cm<br>";
            }
        }

        // Step3. インスタンスを作成し、出力する
        $apple = new Food("りんご", 120);
        $dog   = new Animal("犬", 60, 20);

        echo "=== Foodインスタンス ===<br>";
        print_r($apple);
        echo "<br><br>";

        echo "=== Animalインスタンス ===<br>";
        print_r($dog);
        echo "<br><br>";

        // Step4. メソッドへアクセスする
        echo "=== Foodメソッド呼び出し ===<br>";
        $apple->show_price();

        echo "<br>=== Animalメソッド呼び出し ===<br>";
        $dog->show_height();
        ?>
    </p>
</body>
</html>

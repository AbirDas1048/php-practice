<?php
trait SortStrategy {
    private $sort_field = null;
    private function string_asc($item1, $item2) {
        return strnatcmp($item1[$this->sort_field], $item2[$this->sort_field]);
    }
    private function string_desc($item1, $item2) {
        return strnatcmp($item2[$this->sort_field], $item1[$this->sort_field]);
    }
    private function num_asc($item1, $item2) {

        if ($item1[$this->sort_field] == $item2[$this->sort_field]){
            return 0;
        }
        return ($item1[$this->sort_field] < $item2[$this->sort_field] ? -1 : 1 );
    }
    private function num_desc($item1, $item2) {
        if ($item1[$this->sort_field] == $item2[$this->sort_field]){
            return 0;
        }
        return ($item1[$this->sort_field] > $item2[$this->sort_field] ? -1 : 1 );
    }
    private function date_asc($item1, $item2) {
        $date1 = intval(str_replace('-', '', $item1[$this->sort_field]));
        $date2 = intval(str_replace('-', '', $item2[$this->sort_field]));
        if ($date1 == $date2){
            return 0;
        }
        return ($date1 < $date2 ? -1 : 1 );
    }
    private function date_desc($item1, $item2) {
        $date1 = intval(str_replace('-', '', $item1[$this->sort_field]));
        $date2 = intval(str_replace('-', '', $item2[$this->sort_field]));
        if ($date1 == $date2){
            return 0;
        }
        return ($date1 > $date2 ? -1 : 1 );
    }
}

class Product {
    public $data = [];
    use SortStrategy;
    public function get() {
        $this->data = [
            101222 => ['name' => 'Tomato', 'price' => 50, 'created_at' => '2025-02-08'],
            101232 => ['name' => 'Potato', 'price' => 20, 'created_at' => '2025-02-12'],
            101241 => ['name' => 'Capsicum', 'price' => 60, 'created_at' => '2025-02-15'],
            101256 => ['name' => 'Banana', 'price' => 80, 'created_at' => '2025-02-05'],
            101219 => ['name' => 'Orange', 'price' => 60, 'created_at' => '2025-02-10'],
        ];
    }
    public function sort_by($by = 'price', $type = 'asc') {
        if (!preg_match('/^(asc|desc)$/', $type)) $type = 'asc';
        switch ($by) {
            case 'name':
                $this->sort_field = 'name';
                uasort($this->data, array('Product', 'string_'.$type));
                break;
            case 'date':
                $this->sort_field = 'created_at';
                uasort($this->data, array('Product', 'date_'.$type));
                break;
            default:
                $this->sort_field = 'price';
                uasort($this->data, array('Product', 'num_'.$type));
        }
    }
}

$product = new Product();
$product->get();
$product->sort_by('name');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorting with Trait</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            margin-top: 30px;
        }

        h2{
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h2>Sorting with Trait</h2>
            <table>
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Product Name</th>
                        <th>Product Price</th>
                        <th>Created at</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $i=1;
                foreach($product->data as $value){
                    ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo $value['price']; ?></td>
                        <td><?php echo $value['created_at']; ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
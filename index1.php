php


<?php



// Уровень 1.1 задачника PHP

// №1 Дано число. Проверьте, отрицательное оно или нет. 
// Выведите об этом информацию в консоль.

// $a=-1;

// if ($a < 0 ){
//     echo $a;
// }


//  №2 Дана строка. Выведите в консоль длину этой строки.
// strlen — Получает длину строки

// $str = 'fdsfsdfsf';
// echo strlen($str);


// №3 Дана строка. Выведите в консоль последний символ строки.

// strrchr — Находит последнее вхождение символа в строке

// $str = 'afsghj';
// $last = strlen($str) - 1;

// $str = 'afsghj';
// $last = strlen($str) - 1;
// echo $str[$last];


// №4 Дано число. Проверьте, четное оно или нет.
// is_numeric — Проверяет, содержит ли переменная число или числовую строку


    // $v = is_numeric ('58635272821786587286382824657568871098287278276543219876543') ? true : false;
    
    //  var_dump ($v);



    // №5 Даны два слова. Проверьте, что первые буквы этих слов совпадают.
    // strncmp — Сравнивает первые n символов строк в бинарно-безопасном режиме


    //  $var1 = 'Hello John';
    //  $var2 = 'Hello Doe';
     
    //  if (strncmp($var1, $var2, 1) === 0) {
    //      echo 'Первые 1 символов переменных $var1 и $var2 равны при сравнении строк с учётом регистра';
    //  }



   
//     №6 Дано слово. Получите его последнюю букву.
//  Если слово заканчивается на мягкий знак, 
//  то получите предпоследнюю букву.

// /*$str = 'afsghj';
// $last= strlen($str) -1;
// $last1 = strlen($str) -2;
// if (($str[$last])!=='j'){
//     echo $str[$last];
// }else{
//     echo $str[$last1];
// } */



// Уровень 1.2 задачника PHP



// №1 Дано число. Выведите в консоль первую цифру этого числа.


// $str = '124645';
// echo (($str)[0]);



// №2 Дано число. Выведите в консоль последнюю цифру этого числа.

// $str = '124645';
// $last= strlen($str) -1;
//     echo $str[$last];



// №3 Дано число. 
// Выведите в консоль сумму первой и последней цифры этого числа.


// $str = '124645';
// $last= strlen($str) -1;
// echo (($str)[0] + $str[$last]);



// №4 Дано число. Выведите количество цифр в этом числе

// $str = 124645;
// echo strlen($str);



// №5 Даны два числа. Проверьте,
//  что первые цифры этих чисел совпадают.

// $str = '124645';
// $str1 = '125646';
// if (($str)[0] == ($str1)[0]) {
//     echo "да";
// }else{
//     echo "нет";
// }



// Уровень 1.3 задачника PHP

// №1 Дана строка. Если в этой строке более одного символа,
//  выведите в консоль предпоследний символ этой строки.

// $str = 'abcdef';
// $last= strlen($str) -2;
// if (strlen($str) >= 2 ){
//     echo $str[$last];
// }else{
//     echo "no";
// }




// №2 Даны два целых числа. 
// Проверьте, что первое число без остатка делится на второе.



// $num= 20;
// $num1= 4;

// if (($num % $num1)== 0) {
   
//       echo "делится";
//    }else{

//    echo "не делится";
// }



// for ($num=1;$num<=100;$num++)
// {
//    echo "<b>".$num."</b>&nbsp;";
//    if (($num % 4) != 0)
//    {
//       echo "не&nbsp;";
//    }
//    echo "делится&nbsp;на&nbsp;4<br/>";
// }



// for ($num=1;$num<=100;$num++)
// {
//    if (($num % 4) == 0)
//    {
//       echo "<b>".$num."</b>&nbsp;делится на 4<br/>";
//    }
//    else
//    {
//       echo "<b>".$num."</b>&nbsp;не делится на 4<br/>";
//    }
// }


// Уровень 1.4 задачника PHP



// №1 Выведите в консоль все целые числа от 1 до 100.


// for ($num=1;$num<=100;$num++)
// {
//    {
//       echo "".$num."<br/>";
//    }
// }


// №2 Выведите в консоль все целые числа от -100 до 0.


// for ($num=-100;$num<=0;$num++)
// {
//    {
//       echo "".$num."<br/>";
//    }
// }



// №3 Выведите в консоль все целые числа от 100 до 1.


// for ($num=100;$num>=1;$num--)
// {
//    {
//       echo "".$num."<br/>";
//    }
// }



// №4 Выведите в консоль все четные числа из промежутка от 1 до 100.



// for ($num=1;$num<=100;$num++)
// {
//    if (($num % 2) == 0)
//    {
//       echo "<b>".$num."</b><br/>";
//    }
// }



// №5 Выведите в консоль все числа кратные трем в промежутке от 1 до 100.


// for ($num=1;$num<=100;$num++)
// {
//    if (($num % 3) == 0)
//    {
//       echo "<b>".$num."</b><br/>";
//    }
// }



// Уровень 1.5 задачника PHP



// №1 Найдите сумму всех целых чисел от 1 до 100.

// $sum = 0;

// for ($num=1;$num<=100;$num++)
// {
//      $sum =$sum+$num ;
// }

// echo $sum;


// №2 Найдите сумму всех целых четных чисел в промежутке от 1 до 100.

// $sum = 0;

// for ($num=1;$num<=100;$num++)
// {

//        if (($num % 2) == 0)
//    {
//     $sum =$sum+$num ;

//    }
// }
// echo ".$sum.<br/>";



// №3 Найдите сумму всех целых нечетных чисел в промежутке от 1 до 100.


// $sum = 0;

// for ($num=1;$num<=100;$num++)
// {

//        if (($num % 2) == 0)
//    {
  
//    }else{
//     $sum =$sum+$num ;
//    }
// }
//     echo ".$sum.<br/>";


// №4 Даны два целых числа. 
// Найдите остаток от деления первого числа на второе.

// echo 10 % 3;


// №5 Дана некоторая строка.
//  Переберите и выведите в консоль по очереди все символы с конца строки.

// echo strrev("Hello world");




// Уровень 1.6 задачника PHP

// №1 Дан массив с числами.
//  Найдите сумму квадратов элементов этого массива.


// $arr = [28, 17, 136, 12, 79, 16];
// $result = 0;
// foreach ($arr as $value) {
//     $result += $value ** 2;
// }
// echo $result;


// №2 Дан массив с числами.
//  Найдите сумму квадратных корней элементов этого массива.


// $arr = [4 , 16, 25];
// $result = 0;
// foreach ($arr as $value) {
//     $result += sqrt($value);
// }
// echo $result;


// №3 Дан массив с числами.
//  Найдите сумму положительных элементов этого массива.

// $arr = [-4 , 16, 25];
// $sum = 0;

// foreach ($arr as $elem) {
//     if ($elem > 0){
//         $sum = $sum + $elem;

//     }
// }
// echo "$sum <br/>";


// №4 Дан массив с числами. Найдите сумму тех элементов этого массива,
//  которые больше нуля и меньше десяти.


// $arr = [4 , 6, 16, 25];
// $sum = 0;

// foreach ($arr as $elem) {
//     if ($elem > 0 && $elem < 10){
//         $sum = $sum + $elem;

//     }
// }
// echo "$sum <br/>";





// Уровень 1.7 задачника PHP


// №1 Дана строка:Получите массив букв этой строки.


// $text = 'abcdef';
// $array = str_split($text);
// print_r($array);



// №2 Дано некоторое число:Получите массив цифр этого числа.



// $number = 123;

// $numberToString = (string)$number;
// $lengthNumber = strlen($numberToString);

// $result = [];
// for ($i = 0; $i < $lengthNumber; $i++) {
//     $result[] = (int)$numberToString[$i];
// }

// print_r($result); // => [1, 2, 3]



// №3 Дано некоторое число:Переверните его:


// $number = 12345;
// $reverse = strrev((string)$number);
// echo (int)$reverse;



// №4 Дано некоторое число:Найдите сумму цифр этого числа.


   // function to calculate sum of digits
//    function sumDigits($number) {
//     $sum = 0;
//     // converting number to string to access digits easily
//     $numberStr = (string)$number;
//     for ($i = 0; $i < strlen($numberStr); $i++) {
//         $digit = (int)$numberStr[$i];
//         $sum += $digit;
//     }
//     return $sum;
// }

// $number = 12345;
// echo "Sum of digits: " . sumDigits($number);




// Уровень 1.8 задачника PHP



// №1 Заполните массив целыми числами от 1 до 10.

// print_r( range( 1, 10, 1) );



// №2 Заполните массив четными числами из промежутка от 1 до 100.


// print_r( range( 2, 100, 2) );




// №3 Дан массив с дробями:
// Округлите эти дроби до одного знака в дробной части.


// $arr= [1.456, 2.125, 3.32, 4.1, 5.34] ;

// foreach ($arr as $elem) {
//  echo round($elem, 1);

// }





// $x = 123.8393;
// echo round($x , 1);
// echo ceil($x * 100) / 100;
// echo floor($x * 100) / 100;



// Уровень 1.9 задачника PHP



// №1 Дан массив со строками. 
// Оставьте в этом массиве только те строки, которые начинаются на http://.



// $primeSimbol ="http://";
// $array = array(
//     "a" => "http://code.mu/ru/php/tasker/stager/1/9/ <br>",
//     "b" => "http://code.mu/ru/php/tasker/stager/<br>",
//     "c" => "code.mu/ru/php/tasker/stager/1/9/<br>",
//     "d" => "code.mu/ru/php/tasker/stager/<br>",
// );

// foreach ($array as $elem) {
//     if (strncasecmp($primeSimbol, $elem, 7) === 0) {
//         echo $elem;
//     }

// }




// $array = array(
//     "a" => "http://code.mu/ru/php/tasker/stager/1/9/ <br>",
//     "b" => "http://code.mu/ru/php/tasker/stager/<br>",
//     "c" => "code.mu/ru/php/tasker/stager/1/9/<br>",
//     "d" => "code.mu/ru/php/tasker/stager/<br>",
// );

// foreach ($array as $elem) {
//     if (str_starts_with($elem, 'http://')){
//         echo $elem;
//     }

// }




// №2 Дан массив со строками. Оставьте в этом массиве только те строки, 
// которые заканчиваются на .html.



// $lastSimbol =".html";
// $array = array(
//     "a" => "index.html",
//     "b" => "script.html",
//     "c" => "index.js",
//     "d" => "script.php",
// );

// foreach ($array as $elem) {
//     if (substr($elem, -5)=== $lastSimbol){
//         echo $elem;
//     }

// }





// $array = array(
//     "a" => "index.html",
//     "b" => "script.html",
//     "c" => "index.js",
//     "d" => "script.php",
// );

// foreach ($array as $elem) {
//     if (str_ends_with($elem, '.html')) {
//         echo $elem;
//     }

// }




// №3 Дан массив с числами.
//  Увеличьте каждое число из массива на 10 процентов.



// $arr = [4 , 6, 16, 25];

// foreach ($arr as $elem) {
//     $elem = 1.1*$elem;
//     echo " $elem <br/>";
//     }




// Уровень 1.10 задачника PHP



// №1 Заполните массив случайными числами из промежутка от 1 до 100.



// $numbers = [];

// for ($i = 0; $i < 10; $i++) {
//     $numbers[$i] = mt_rand(1, 100);
// }

// print_r($numbers); 



// №2 Дано некоторое число:Выведите в консоль все его символы с конца.



// $number = 12345;
// $reverse = strrev((string)$number);
// echo $reverse;




// №3 Дан некоторый массив, например, вот такой:
// По очереди выведите в консоль подмассивы из двух элементов нашего массива:



// $arr = [1, 2, 3, 4, 5, 6];

// print_r(array_chunk($arr, ceil(count($arr) / 3)));



// №4 Даны два массива:
// Слейте эти массивы в новый массив:



// $arr1 = [1, 2, 3];
// $arr2 = [4, 5, 6];


// $result = array_merge($arr1, $arr2);
// var_dump($result1);




// Уровень 2.1 задачника PHP



// №1 Дана некоторая строка.
//  Найдите позицию первого нуля в строке.



// $text = 'Съешь0 ещё - этих0 мягких французских булок, да ещё выпей же чаю.';
// echo mb_strpos($text, '0'); 





// №2 Выведите в консоль все числа в промежутке от 1 до 1000, 
// сумма первой и второй цифры которых равна пяти.



// for ($num = 1; $num < 1000; $num++) {
//     $str = (String)$num;
//     if ((int)$str[0] + (int)$str[1] === 5) {
//             echo $num;
        
//     }
// }




// №3 Дан массив. Удалите из него элементы с заданным значением.



// $array = [1, 2, 3, 4, 5, 6, 'a', 'b', 'c', 'd'];

// unset($array[array_search(2,$array)]);
// print_r($array); 


// $arr = array (1, 2, 3, 4, 5, 6, 'a', 'b', 'c', 'd');
// unset($arr[1]);
// print_r($arr); 




// №4 Дан некоторый массив, например, вот такой:
// Найдите сумму первой половины элементов этого массива.


// $arr = [1, 2, 3, 4, 5, 6];
// $sum = 0;
// $lengthArr = count($arr);
// $countEl = $lengthArr/2;
// for ($i=0; $i<$countEl ; $i++) { 
//     $sum = $sum + $arr[$i];
// }
// echo  $sum; 




// Уровень 2.2 задачника PHP



// №1

// Дан массив с числами.
// Подсчитайте количество отрицательных чисел в этом массиве.


// $arr = [2, 4, -4, 12, -3, 1];
// $values = [];

// foreach($arr as $v)
// {
//     if($v < 0)
//         $values[] = $v;
// }

// var_dump($values);



// $arr = [2, 4, -4, 12, -3, 1];
// $values = [];

// for($i = 0; $i < count($arr); $i++)
// {
//     if($arr[$i] < 0)
//         $values[] = $arr[$i];
// }

// var_dump($values);




// $arr = [2, 4, -4, 12, -3, 1];
// $values = [];
// $i = -1;

// while(++$i < count($arr))
// {
//     if($arr[$i] < 0)
//         $values[] = $arr[$i];
// }

// var_dump($values);






// №2 Дан массив с числами. Оставьте в нем только положительные числа.


// $arr = [2, 4, -4, 12, -3, 1];
// $values = [];

// for($i = 0; $i < count($arr); $i++)
// {
//     if($arr[$i] > 0)
//         $values[] = $arr[$i];
// }

// var_dump($values);


// №3 Дана строка. Удалите предпоследний символ из этой строки.


// $text = 'Съешь ещё - этих мягких французских булок, да выпей же чаю.';
// $j = strlen($text) - 2;
// $text = substr($text,0 , $j - 1).substr($text , $j + 1);
// echo $text;



// №4 Дана некоторая строка. Найдите позицию первого нуля в строке.



// $mystring = 'Со0ержи цифр у0 ноль';
// $findme   = '0';
// $pos = strpos($mystring, $findme);

// // Обратите внимание, что значения сравниваются оператором ===. Оператор == не будет работать
// // как ожидается, поскольку позиция символа «a» — первого по счёту символа — равнялась 0.
// if ($pos === false) {
//     echo "Функция не нашла подстроку «{$findme}» в строке «{$mystring}»";
// } else {
//     echo "Функция нашла подстроку «{$findme}» в строке «{$mystring}»";
//     echo " в позиции $pos";
// }


////////////




// $str = 'abcdef';
// $str1 = $str{strlen($str)-1};
// echo ($str1);


// $str = 'abcdef';
// $last= strlen($str) -2;
// if (strlen($str) >= 2 ){
//     echo $str[$last];
// }else{
//     echo "no";
// }



// $text =  'abecdef';
// $new = str_replace('e', '', $text);
// echo $new;


/////////////



// №5 Дан некоторый массив, например, вот такой:
// Поделите сумму первой половины элементов этого массива на сумму второй половины элементов.


//  $input = [1, 2, 3, 4, 5, 6];
// $output = array_slice($input, 0, 3);
// $output1 = array_slice($input, 3);
// $div = array_sum($output) / array_sum($output1);
// print_r($div);






// Уровень 2.3 задачника PHP




// №1 Даны два слова. Проверьте, 
// что последняя буква первого слова совпадает с первой буквой второго слова.




// $text1 = 'fedcba';
// $text2 = 'abcdef';
// $last= strlen($text1) -1;
// $frst = strlen($text1)-strlen($text2);
// if ($text1[$last] ==$text2[$frst]) {
//     echo 'ровны';
// }else{

// echo 'не ровны';
// }





// №2 Дана некоторая строка.
//  Найдите позицию третьего нуля в строке.

// $text = 'Съешь ещё0 - этих мягких0 французских булок0, да ещё выпей же чаю.';
 
// $offset = 0;
// $allpos = array();
// while (($pos = mb_strpos($text, '0', $offset)) !== false) {
// 	$offset   = $pos + 1;
// 	$allpos[] = $pos;
// }
 
// print_r($allpos[2]);




// №3 Даны числа, разделенные запятыми:
// Найдите сумму этих чисел.



   // function to calculate sum of digits
//    function sumDigits($number) {
//     $sum = 0;
//     // converting number to string to access digits easily
//     $numberStr = (string)$number;
//     for ($i = 0; $i < strlen($numberStr); $i++) {
//         $digit = (int)$numberStr[$i];
//         $sum += $digit;
//     }
//     return $sum;
// }

// $number = '1,2,3,4,5';
// echo "Sum of digits: " . sumDigits($number);




// №4  Дана дата в следующем формате:
// Преобразуйте эту дату в следующий массив:



// var_dump(date_parse('2025-12-31'));




// Уровень 2.4 задачника PHP





// №1 Дана некоторая строка с буквами и цифрами.
//  Получите позицию первой цифры в этой строке.



// $str = "6 ромашка, 2 ромашка, 3 ромашка, 5 !";
// preg_match("/\d+/", $str, $matches);

// print_r($matches); // [6]

// $str = "6 ромашка, 2 ромашка, 3 ромашка, 5 !";
// preg_match_all("/\d+/", $str, $matches);

// print_r($matches); // [6, 2, 3, 5]




// $str = "6 ромашка, 2 ромашка, 3 ромашка, 5 !";
// preg_match_all('/[0-9]+/', $str, $matches);
// print_r($matches); // [6, 2, 3, 5]





// №2 Дан объект с ключами и значениями.
//  Запишите в первый массив ключи объекта, а во второй - значения.



// // Исходный объект (ассоциативный массив)
// $data = [
//     'name' => 'Alice',
//     'age' => 25,
//     'city' => 'New York',
//     'country' => 'USA'
// ];

// // Получаем ключи и значения
// $keys = array_keys($data);
// $values = array_values($data);

// // Выводим результат
// echo "Ключи: ";
// print_r($keys);

// echo "\nЗначения: ";
// print_r($values);



/////////////////////////////


// class A {
//     private $a = 1;

//     public function getA(){
//         return $this->a; // обращаемся к внутреннему свойсву через $this
//     }

//     public function someMethod(){
//         return $this->getA(); // обращаемся к внутреннему методу через $this
//     }
// }

// $obj = new A();
// echo $obj->someMethod();


// class getArr
// {
//     public $arr1 = 4;
//     public $arr2;

// }

// $obj = new getArr();

// echo $obj->arr1;
// //  var_dump($obj);




/////////////////////////////



// №3 Дано число.
//  Выведите в консоль количество четных цифр в этом числе.



// $str = '12345';
// $countNum = strlen($str);
// $count = 0;
// for ($num=0 ;$num<=$countNum-1 ;$num++){
//     if (($str[$num] % 2) == 0)
//     {
//         $count=$count+1;
//     }
// }
// echo "<b>".$count."</b><br/>";





// №4 Дана некоторая строка:
// Переведите в верхний регистр все нечетные буквы этой строки.
//  В нашем случае должно получится следующее:


// $text = 'abcde';
// $textNew = '';
// $countTextSimbol = strlen($text);
// for ($num=1 ;$num<=$countTextSimbol ;$num++){

//     if (($num % 2) != 0)
//     {
//         $text[$num-1]= strtoupper($text[$num-1]);
//     }
//     $textNew = $textNew . $text[$num-1];

// }

// echo "<b>".$textNew."</b><br/>";





// №5 Дана некоторая строка со словами:
// Сделайте заглавным первый символ каждого слова в этой строке.
//  В нашем случае должно получится следующее:


// $text ='aaa bbb ccc';
// echo ucwords($text);




// Уровень 2.5 задачника PHP



// №1 Дана некоторая строка, например, вот такая:
// Получите массив позиций всех нулей в этой в строке.



// $text = '023m0df0dfg0';
 
// $offset = 0;
// $allpos = array();
// while (($pos = mb_strpos($text, '0', $offset)) !== false) {
// 	$offset   = $pos + 1;
// 	$allpos[] = $pos;
// }
 
// print_r($allpos); 





// №2 Дана некоторая строка:
// Удалите из этой строки каждый третий символ.
//  В нашем случае должно получится следующее:
// 'abdeg'


// $str = 'abcdefg';
// for ($i = 1; $i <= strlen($str); $i++){
// if(($i % 2) ==0){
//     $str = substr_replace($str, '', $i, 1);
// }
// }
// echo $str;




// №3 Дан некоторый массив, например, вот такой:
// Поделите сумму элементов, стоящих на четных позициях,
//  на сумму элементов, стоящих на нечетных позициях.


// $str = [1, 2, 3, 4, 5, 6];
// $sumEven = 0;
// $sumOdd = 0 ;
// for ($i = 0; $i < count($str); $i++){
//     // echo $i;
//     if(($i % 2)==0){

//         $sumEven = $sumEven + $str[$i];
    
//     }else{
//         $sumOdd = $sumOdd + $str[$i];

//     }
// }
// echo $sumEven / $sumOdd;




// Уровень 2.6 задачника PHP




// №1 Дана некоторая строка с буквами и цифрами. 
// Получите массив позиций всех цифр из этой строки.



// $str = "6 ромашка, 2 ромашка, 3 ромашка, 5 !";
// preg_match_all("/\d+/", $str, $matches);

// print_r($matches); // [6, 2, 3, 5]




// №2 Дан массив с некоторыми числами, например, вот такой:[123, 456, 789]
// Напишите код, 
// который перевернет числа в этом массиве по следующему принципу:
// [321, 654, 987]


// $arr = [123, 456, 789];
// $arr1 =[];
// for ($i = 0; $i < count($arr); $i++){
// $number = $arr[$i]; 
// $reverse = strrev((string)$number);
// $arr[$i]=(int)$reverse;
// $arr1[$i] =(int)$reverse;

// }
// var_dump ($arr1);




// №3 Дана некоторая строка с числом:
// Отделите тройки цифр пробелами, начиная с конца числа.
//  В нашем случае должно получится следующее:



// $number = '1234567';

// echo ($nombre_format_francais = number_format($number, 0, ',', ' '));




// №4 Дана некоторая строка:
// Смените регистр букв этой строки на противоположный. 
// В нашем случае должно получится следующее:



// function mb_flip_case($string) {
// 	$characters = preg_split('/(?<!^)(?!$)/u', $string);
// 	foreach ($characters as $key => $char) {
// 		if (mb_strtolower($char, "UTF-8") != $char) {
// 			$char = mb_strtolower($char, 'UTF-8');
// 		} else {
// 			$char = mb_strtoupper($char, 'UTF-8');
// 		}
// 		$characters[$key] = $char;
// 	}
// 	return implode('', $characters);
// }
 
// $text = 'AbCdE';
// echo mb_flip_case($text);




// №5 Дан некоторый массив с числами, например, вот такой:
// Слейте пары элементов вместе:


// $arr = [1, 2, 3, 4, 5, 6];
// $arr1 = implode($arr);
// $arr2 = str_split($arr1, 2,);
// var_dump ($arr2);




// №6 Дана некоторая строка со словами:
// Сделайте заглавным первый символ каждого второго слова в этой строке.
// В нашем случае должно получится следующее:




// function capitalizeWords($sentence)
// {
//     $words = explode(' ', $sentence);
//     $capitalizedWords = [];
//     $i = 0;
//     foreach ($words as $word) {
//     if(($i % 2)!= 0){

//         $capitalizedWords[] = ucfirst($word);
//     }else{
//     $capitalizedWords[] = $word;
//     }
//     $i++;
//     }
//     return implode(' ', $capitalizedWords);
// }

// $greeting = 'aaa bbb ccc eee fff ';
// var_dump(capitalizeWords($greeting));







// Уровень 2.7 задачника PHP




// №1 Дана некоторая строка:
// Переведите в верхний регистр все подстроки,
// в которых количество букв меньше или равно трем.
// В нашем случае должно получится следующее:





// function capitalizeWords($sentence)
// {
//     $words = explode(' ', $sentence);
//     $capitalizedWords = [];
//     foreach ($words as $word) {
//       if(strlen($word) <= 3) {
//         $capitalizedWords[] = strtoupper($word);
//     }else{
//             $capitalizedWords[] = $word;
//         }
//     }
//     return implode(' ', $capitalizedWords);
// }

// $greeting = 'a bc def ghij';
// var_dump(capitalizeWords($greeting));




// №2 Дан символ. Узнайте,
//  в каком регистре этот символ - в верхнем или нижнем.


// $str = 'а';
// if (ctype_upper($str)) {
// 	echo 'Заглавная';
// } else {
// 	echo 'строчная';
// }


// Вариант для кириллицы в кодировке UTF-8:
// $str = 'Ы';
// if (mb_strtolower($str) !== $str) {
// 	echo 'Заглавная';
// } else {
// 	echo 'строчная';
// }
 






// №3 Дано некоторое число, например, такое:
// Удалите из этого числа все нечетные цифры.
//  В нашем случае получится такой результат:
// 28



// $number =123789;
// $array = str_split($number);
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){  
//     if(($array[$i] % 2) != 0){

//         unset($array[$i]);
//     }
//     $num = implode($array);
// }
//  var_dump($num);


//  Вместо удаления создали новый массив

// $number =123789;
// $array = str_split($number);
// $arrayNew = [];
// $j = 0;
// for ($i = 0; $i <= count($array)-1; $i++){
    
//     if(($array[$i] % 2) == 0){
//         $arrayNew[$j] = $array[$i];
//         $j++;
      
    
//     }
// }
//  var_dump($arrayNew);




// Уровень 2.8 задачника PHP





// №1 Дана строка с буквами. Проверьте, 
// что в этой строке не более двух заглавных букв.



// $str = 'aa bbb cc Dddddd';
// $k = 0;
// for ($i = 0; $i <= strlen($str)-1; $i++){
    
//     if (ctype_upper($str[$i]) == true) {
//       $k++;
    
//         if($k > 2){
//         echo 'Болшеь двух Заглавных букв';
//         break;
//         }

//    }
//     }
// if($k <= 2){
//    echo 'Нет более двух Заглавных букв';
// }




// №2 Дана некоторая строка:
// Удалите из этой строки все подстроки,
//  в которых количество символов больше трех.
//  В нашем случае должно получится следующее:
// '1 22 333 22 1'



// $str = '1 22 333 4444 22 5555 1';
// $array =  explode(' ', $str);
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){  
//     if((strlen($array[$i]) > 3) ){

//         unset($array[$i]);
//     }
//     $str1 = implode(' ',$array);
// }
//  var_dump($str1);



// №3 Даны два массива:
// $arr1 = [1, 2, 3];
// $arr2 = ['a', 'b', 'c'];
// Слейте эти массивы в новый массив следующим образом:
// [1, 2, 'a', 'b', 'c', 3]




// $arr1 = [1, 2, 3];
// $arr2 = ['a', 'b', 'c'];
// $arr3 = array_slice($arr1, 0, 2);
// $arr4 = array_slice($arr1, -1);
// $arr5 = array_merge($arr3, $arr2, $arr4);

// var_dump($arr5);




// Уровень 2.9 задачника PHP



// №1 Дано некоторое число:
// Найдите сумму пар цифр этого числа.
//  В нашем случае имеется ввиду следующее:


// $number =123456;
// $stringNum = (string)$number ;
// $array = ( str_split($stringNum, 2));
// echo "sum(array) = " . array_sum($array) . "\n";



// №2 Дан массив с числами:
// Выведите в консоль элементы этого массива в обратном порядке.

// $arr = [1, 2, 3, 4, 5];
// 	$arr = array_reverse($arr);
// 	var_dump($arr);






// Уровень 2.10 задачника PHP




// №1 Дана строка с буквами и цифрами. Проверьте,
//  что в этой строке не более трех букв.


// $text = 'Съе 0 1 2 3 4';
//  $str = preg_replace('/[^a-zа-яё]/ui', '', $text);
// if(mb_strlen($str) > 3){
//    echo "более трех букв";
// }else{
//    echo "Не больше  трех букв";
// }




// №2 Дано число. 
// Получите первую четную цифру с конца этого числа.


// $number =123789;
// $array = str_split($number);
// $k=count($array)-1;
// for ($i = $k; $i >= 0; $i--){  
//     if(($array[$i] % 2) == 0){

//        var_dump($array[$i]);
//        $i = 0;
//     }
// }





// №3 Дана некоторая строка:
// Замените в ней первый символ каждого слова на '!':


// $str = 'abcde abcde abcde';
// echo  str_replace('a','!', $str);



// №4 Дан массив с числами:
// Проверьте, что в этом массиве есть два одинаковых элемента подряд.


// $array = [1, 2, 3, 3, 4, 5];

// function check($arr): bool
// {
//     for ($i = 0; $i < count($arr); $i++) {
//         if ($arr[$i] == $arr[$i+1]) {
//             return true;
//         }
//     }
//     return false;
// }
// var_dump (check ($array));


// $array = [1, 2, 3, 3, 4, 5];
// var_dump(array_count_values($array));



// $array = [1, 2, 3, 3, 4, 5];
// for ($i = 0; $i <= count($array); $i++){
// if ($i && $array[$i] == $array[($i-1)]) {
//    echo 'есть идущие подряд:' .$array[$i]. '-' .$array[$i]. '<br>';
// }
// }


// foreach($array as $elem){
//    if ($lasrElem == $elem){
//       echo ("Одинаковые");
//    }else{
//       echo ("Разные");
//    }
//    $lasrElem = $elem;
// }




// $result_array = array_intersect_assoc($array);
// var_dump($result_array);



// Уровень 3.1 задачника PHP



// №1 Дано некоторое число. Проверьте,
//  что цифры этого числа расположены по возрастанию.


// $numbers = [8, 5, 6, 7];

// function checkNumbers($ar) {
//    for($i = $ar[0]; $i>$ar[count($ar)-2]; $i++) {
//        if($ar[$i]>$ar[$i+1] || $ar[$i] + 1 != $ar[$i+1])
//            return false;
//    }
//    return true;
// }
// var_dump (checkNumbers($numbers));





// цифры этого числа расположены по возрастанию
// непрерывно (не имеющей пропусков чисел).

// $numbers = [4, 5, 6, 7];


// function check_array($numbers) {
//    return !array_filter(array_map(
//        function($b,$a){ return $b-$a-1; },   //  --> [0,0,0]
//        array_slice($numbers,1),              //  ^   [5,6,7]
//        array_slice($numbers,0,-1))           //   ^  [4,5,6]
//    );
// }
// var_dump (check_array($numbers));



// №2 Дан массив:
// Удалите из массива все пустые строки.


// $arr = ['', 'a', '', 'b', 'c'];
// 	$new_arr = array_diff($arr, ['']);
// 	var_dump($new_arr);



// №3 Дан массив:
// Отсортируйте элементы в каждом подмассиве.


// $array = [
// 	[2, 1, 4, 3, 5],
// 	[3, 5, 2, 4, 1],
// 	[4, 3, 1, 5, 2],
// ];

// usort($array, static function ($a, $b) {
//    return count($a) < count($b);
// });


// array_multisort($array);
// var_dump($array);




// function cmp($a, $b)
// {
//     if ($a == $b) {
//         return 0;
//     }
//     return ($a < $b) ? -1 : 1;
// }

// $a = array(3, 2, 5, 6, 1);

// usort($a, "cmp");

// foreach ($a as $key => $value) {
//     echo "$key: $value\n";
// }




// №4 Даны два массива
// Удалите из большего массива лишние элементы с конца так,
//  чтобы длины массивов стали одинаковыми.



// $arr1 = [1, 2, 3];
// $arr2 = [1, 2, 3, 4, 5];
// $d = count($arr1) - count($arr2);
// if($d >= 0 ){
//    array_splice($arr1, -$d);
// }else{
//    array_splice($arr2, $d);

// }
// var_dump($arr1, $arr2);






// Уровень 3.2 задачника PHP




// №1 Выведите в консоль все числа в промежутке от 10 до 1000,
//  у которых предпоследняя цифра четная.

// for ($num = 10; $num <= 1000; $num++){
// $array = str_split($num);
// $CountSimbolArray = count($array);
// if (($array [$CountSimbolArray-2] % 2) == 0){

//    var_dump($num);
// }
// }




// №2 Дан массив. Удалите из него каждый пятый элемент.


// $array =[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15];
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){ 
// if((($i+1) % 5) == 0){
  
//         unset($array[$i]);
//     }
//     $num = implode($array);
// }
//  var_dump($num); 



// №3 Дана некоторая переменная с числом:
// Сделайте строку, содержащую столько нулей, сколько указано в переменной.
//  В нашем случае получится такая строка:'00000'

// $num = 5;

// $string = "";
// $string1 = "0";

// for ($i = 1; $i <= $num; $i++){
//    $string = $string . $string1;
// }
// var_dump($string);




// №5 Дан массив:
// Найдите сумму элементов этого массива.

// function func($arr) {
//    $sum = 0;
   

// foreach ($arr as $sub) {
//    foreach ($sub as $elem) {
//      if(is_array($elem)){
//       $sum += func($elem);
//    } else {
//       $sum += $elem;
//    }
// }
// }
// return $sum;
// }

// var_dump(func([
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]));





// Уровень 3.3 задачника PHP



// №1 Дан массив со словами.
//  Удалите из него слова, состоящие более чем из трех символов.


// $str = 'aa bbbb cccc dd eeee ff';
// $array =  explode(' ', $str);
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){  
//     if((strlen($array[$i]) > 3) ){

//         unset($array[$i]);
//     }
//     $str1 = implode(' ',$array);
// }
//  var_dump($str1);




// №2 Дано некоторое число:
// Проверьте, что все цифры этого числа являются нечетными.

// $num = 132579;
// $arr = str_split($num);
// $k =0;
// foreach($arr as $elem){
//    if(($elem % 2) == 0){
//       echo "все цифры этого числа не являются нечетными.";
//       $k++;
//       break;
//    }
// }
// if($k == 0){
//    echo "все цифры этого числа являются нечетными.";
// }



// №3 Дано некоторое слово:
// Проверьте, что это слово читается одинаково с любой стороны.

// $text = 'abcba';
// $text1 = strrev($text);
// if (mb_strstr($text , ' ',true) == mb_strstr($text1 , ' ',true) ){
// echo "слово читается одинаково с любой стороны";
// }




// №4 Дан массив:
// Найдите сумму элементов этого массива.


// function func($arr) {
//    $sum = 0;
   

// foreach ($arr as $sub) {
//    foreach ($sub as $subsub) {
//       foreach ($subsub as $elem) {
//      if(is_array($elem)){
//       $sum += func($elem);
//    } else {
//       $sum += $elem;
//    }
// }
// }
// }
// return $sum;
// }

// var_dump(func([
// 	[
// 		[11, 12, 13],
// 		[14, 15, 16],
// 		[17, 17, 19],
// 	],
// 	[
// 		[21, 22, 23],
// 		[24, 25, 26],
// 		[27, 27, 29],
// 	],
// 	[
// 		[31, 32, 33],
// 		[34, 35, 36],
// 		[37, 37, 39],
// 	],
// ]));





// Уровень 3.4 задачника PHP




// №1 Выведите в консоль все числа в промежутке от 10 до 1000,
//  у которых первая цифра четная.


// for ($num = 10; $num <= 1000; $num++){
// $array = str_split($num);
// $CountSimbolArray = count($array);
// if (($array [0] % 2) == 0){

//    var_dump($num);
// }
// }





// №2 Дан некоторый массив, например, вот такой:
// Поменяйте местами пары элементов этого массива:


// $array = [1, 2, 3, 4, 5, 6];
// $CountArray = count($array);
// for ($i= 0; $i  <= $CountArray - 1; $i=$i+2){
//    list($array[$i], $array[$i+1]) = array($array[$i+1], $array[$i]);
// }

// print_r ($array);




// Уровень 3.5 задачника PHP



//  №1 Дан текст со словами. 
// Запишите в массив все слова, начинающиеся на букву 'a'. 

// $text = 'abcba bcde abe cefd adeb defc abec';
// $array = explode(' ',$text);
// $array1 = [];
// $i = 0;
// // var_dump ($array);
// foreach ($array as $elem){
//    if((mb_substr($elem, 0, 1)) == 'a'){
//       $array1[$i] = $elem;
//       // var_dump ($array1);
//       $i++;
//    }
   
// }
// var_dump ($array1);



// №2 Дан массив с числами.
//  Оставьте в нем только те числа, которые делятся на 5.


// $array = [5, 1, 10, 6, 15, 3, 20, 4, 25];
// foreach ($array as $elem){
//    if(($elem % 5 ) != 0){
//        $elem;
//       unset($elem);
// // var_dump ($array1);
//    }
   
// }
// var_dump ($array);



// №3 Дан массив с числами. Оставьте в нем только те числа,
//  которые содержат цифру ноль.


// $arrayNum = [13257, 10, 6, 20, 40, 100, 5, 200, 1000];
// $CountArrayNum = count($arrayNum);

// for ($j= 0; $j <= $CountArrayNum - 1; $j++){
// $str = $arrayNum[$j];
// var_dump  ($arrayNum[$j]) ."\r\n";
// $array =  str_split($str);
// $CountArrayDigital = count($array);
// $k=0;
// for ($i= 0; $i <= $CountArrayDigital - 1; $i++){
// if ($array[$i] != 0){
//    $k++;
  
// }
// }
// if($k == $CountArrayDigital){
//    echo  $k."\r\n";
//    echo  $j."\r\n"; 
// unset($arrayNum[$j]) ;

// }
// }

// var_dump($arrayNum);



// №4 Дан массив со числами. Проверьте, что в нем есть число,
//  содержащее в себе цифру 3.


// $array = [13257, 10, 6, 20, 40, 100, 5, 200, 1000];
// foreach ($array as $elem){
//    $array1 = str_split($elem);
// if (in_array ("3", $array1)) {
//     echo "Функция нашла значение '3'";
// }
// }


// $array = [12357, 10, 6, 3, 40, 100, 5, 200, 1000];
// foreach ($array as $elem){
//    // $array1 = str_split($elem);
// if ( strstr($elem, "3")) {
//     echo "Функция нашла значение '3'";
//     break;
// }
// }



// №5 Дано некоторое число:
// Отсортируйте цифры этого числа. 
// В нашем случае должно получится следующее:

// $num = 35142;
// $arr = str_split($num);
// asort($arr);
// $num1 = implode('',$arr);
// var_dump ($num1);




// №6 Напишите программу, 
// которая сформирует следующую строку:'-1-2-3-4-5-'



// $str = "";
// for ($i=1; $i <=6 ; $i++) { 
//    $str = $str . "-";
//    if($i == 6) break;
//    $str = $str . $i;

// }
// echo $str;






// Уровень 3.6 задачника PHP




// №1 Дан массив со числами.
//  Удалите из него числа, состоящие более чем из трех цифр.



// $array =  [1, 22, 333, 4444, 22, 5555, 1];
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){  
//     if((strlen($array[$i]) > 3) ){

//         unset($array[$i]);
//     }
// }
//  var_dump($array);




// №2 Дано число, например, вот такое: $num = 12345;
// Проверьте, что все цифры этого числа больше нуля.

// $num = 12345;
// $array =str_split($num);
// $k = 0;
// foreach($array as $elem){
//    if ($elem == 0){
//      echo "Есть цифра 0";
//      $k=$k+1; 
     
//      break;
//    }
   
// }
// if($k == 0) {
// echo  "все цифры этого числа больше нуля";
// }




// №3 Дан некоторый массив, например, вот такой: [123, 456, 789]
// Слейте все элементы этого массива в один массив, разбив их посимвольно:
// [1, 2, 3, 4, 5, 6, 7, 8, 9]



// $array = [123, 456, 789];
// $str = implode('',$array);
// $array1 = str_split($str);
// var_dump ($array1);





// Уровень 3.7 задачника PHP



// №1 Дана строка со словами.
//  Отсортируйте слова в алфавитном порядке.


// $str = 'bbb abb aa cc dddddd';
// $array = explode(' ',$str);
// asort($array);
// $str1 = implode (' ',$array);
// var_dump($str1);



// №2 Дано число. Получите массив делителей этого числа.


// $num1 = 100;
// $i = 0;
// $ArrDiv = [];

// for ($num2= 1; $num2 <=$num1 ; $num2++) { 
//   if(($num1 % $num2) == 0) {
//    $ArrDiv[$i] =$num1 / $num2;
//    $i++;

//   }
// }
// var_dump($ArrDiv);




// №3 Даны два числа.
//  Получите массив общих делителей этих чисел



// $num1 = 100;
// $i = 0;
// $ArrDiv1 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//   if(($num1 % $num) == 0) {
//    $ArrDiv1[$i] =$num1 / $num;
//    $i++;

//   }
// }
// $num2 = 25;
// $i = 0;
// $ArrDiv2 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//   if(($num2 % $num) == 0) {
//    $ArrDiv2[$i] =$num2 / $num;
//    $i++;

//   }
// }

// $array1 =$ArrDiv1;
// $array2 =$ArrDiv2;
// $result = array_intersect($array2, $array1);   // մասսիվները խաչվումեն 
// print_r($result);




// №4 Дано число. Проверьте, 
// что у этого числа есть только один делитель,
//  кроме него самого и единицы.

// $num1 = 17;
// $i = 0;
// $ArrDiv1 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//   if(($num1 % $num) == 0) {
//    $ArrDiv1[$i] =$num1 / $num;
//    $i++;

//   }
// }
// $cmp =[1, $num1];
// $result = array_diff($ArrDiv1, $cmp);
// if($result == []){
//    echo "Делится на самого и единицы";
// }else{
//    echo "Не делится на самого и единицы";
// }


// №5 Через запятую написаны числа.
//  Получите максимальное из этих чисел.


// var_dump (max(10, 20, 30, 50, 235, 3000)); 



///////////////
// №6 Дан массив с числами. 
// После каждого однозначного числа вставьте еще такое же.
///////////////


// Исходный массив с числами
$array = [1, 12, 3, 45, 7, 89, 4, 100];

// Проходим по массиву и вставляем дубликаты однозначных чисел
$result = [];
foreach ($array as $num) {
    $result[] = $num; // Добавляем текущее число
    if ($num >= 0 && $num <= 9) { // Проверяем, что число однозначное
        $result[] = $num; // Добавляем дубликат
    }
}

// Выводим результат
print_r($result);


// №7 Дана строка. Удалите из нее все гласные буквы.


// // Prompt the user to enter a string and store the input in a variable called $input
// $input = readline("Enter a string: ");

// // Remove all occurrences of vowels (both lowercase and uppercase) from the input string and store the modified string in a variable called $output
// $output = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '', $input);

// // Print the modified string with vowels removed to the console
// echo "Output: $output\n";



// №8 Дана строка. 
// Сделайте заглавной последнюю букву каждого слова в этой строке.

// $text = 'bbc abb ab ca dddddc';
// $text1 = strrev($text);
// $text2 = ucwords($text1);
// $text3 = strrev($text2);
// echo $text3;




// Уровень 3.8 задачника PHP





// №1 Дан массив со числами. Проверьте,
//  что все числа из этого массива содержат в себе цифру 3.


// $array = [103, 63, 153, 3, 23, 43, 43];
// $countArray = count($array);
// $k = 0;
// foreach ($array as $elem){
//    $elem1 = str_split($elem);
// if ( in_array("3", $elem1)){
   
// }
// else{
//    echo "Не все числа из этого массива содержат в себе цифру 3.";
// break;
// }
// $k++;
// }
// if($k == $countArray){
//    echo "Все числа из этого массива содержат в себе цифру 3.";
// }
   





// №2 Дана строка в формате:
// 'kebab-case'
// Преобразуйте ее в формат:
// 'snake_case'


// $form = 'kebab-case';
// echo str_replace(['-'], ['_'], $form);



// №3 Дана строка в формате:
// 'snake_case'
// Преобразуйте ее в формат:
// 'camelCase'


// $str = 'snake_case';
// $result = str_replace(' ', '', ucwords(str_replace('_', ' ', $str)));
// // выведет – string(9) "SnakeCase"

// var_dump($result);

// №4 Дана строка в формате:
// 'camelCase'
// Преобразуйте ее в формат:
// 'snake_case'


// $str = 'camelCase';
// $result = mb_strtolower(preg_replace("/([A-Z])/u", '_$1', $str));
// // выведет – string(10) "camel_case"
// var_dump($result);




// №5 Сформируйте с помощью циклов следующий массив:
// [
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// 	[1, 2, 3],
// ]



// $arr = [];
	
// 	for ($i = 0; $i < 5; $i++) {
// 		for ($j = 0; $j < 3; $j++) {
// 			$arr[$i][$j] = $j + 1; // заполняем подмассив числами
// 		}
// 	}
	
// 	var_dump($arr);


// $arr = array_fill(0, 3, array_fill(0, 5, (range('1', '3'))));
// 	var_dump($arr);




// Уровень 3.9 задачника PHP




// №1 Дана строка.
//  Проверьте, что эта строка состоит только из цифр.



// $str = '5, 10, 6, 15, 20, 40';
// $str1 = str_replace(', ', '',$str); 
// $tests = str_split($str1);
// $k =0;
// foreach ($tests as $element) {
//    if (is_numeric($element)) {
//    } else {
//        echo  "Строка состоит не только из цифр.";
//        $k++;
//        break;
//    }
// }
// if($k == 0){
//    echo  "Строка состоит только из цифр.";
// }



// №2 Дана строка. Проверьте, 
// что эта строка состоит только из четных цифр.

// $str = '10, 6, 20, 40';
// $array = explode(', ',$str);
// $k =0;
// foreach ($array as $element) {
//    if (($element % 2)  != 0) {
//       echo  "Эта строка состоит только из четных цифр.";
//       $k++;
//       break;
//    } 
// }
// if($k == 0){
//    echo  "Эта строка не состоит только из четных цифр.";
// }



// №3 Дан массив со числами.
//  Удалите из него числа, имеющие два и более нуля.


// $arrayNum = [13257, 10, 6, 20, 40, 100, 5, 200, 1000];
// $CountArrayNum = count($arrayNum);

// for ($j= 0; $j <= $CountArrayNum - 1; $j++){
// $str = $arrayNum[$j];
// var_dump  ($arrayNum[$j]) ."\r\n";
// $array =  str_split($str);
// $CountArrayDigital = count($array);
// $k=0;
// for ($i= 0; $i <= $CountArrayDigital - 1; $i++){
// if ($array[$i] == 0){
//    $k++;
  
// }
// }
// if($k >= 2){
//    echo  $k."\r\n";
//    echo  $j."\r\n"; 
// unset($arrayNum[$j]) ;

// }
// }

// var_dump($arrayNum);



// №4 Найдите все числа от 1 до 1000, сумма цифр которых равна 13.

// $result = [];
// $result2 = [];
// $i = 0;
// for ($num = 1; $num <= 1000; $num++) {
//     $arrayNum = str_split($num);
//     $sum = array_sum($arrayNum);
//     if($sum == 13){
//       $result[$i] = $arrayNum;
//       $result1[$i]= implode('',$result[$i]);
//          $result2= implode(',',$result1);
//       $i++;
//     }

// }

// var_dump ($result2). '<br>';




// №5 Сформируйте с помощью циклов следующий массив:

// [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]


// $arr = [];
// 	$k = 1; // счетчик
	
// 	for ($i = 0; $i < 3; $i++) {
// 		for ($j = 0; $j < 3; $j++) {
// 			$arr[$i][$j] = $k; // записываем счетчик
// 			$k++; // увеличиваем счетчик
// 		}
// 	}
	
// 	var_dump($arr);




// $arr = [];
	
// 	for ($i = 0, $k = 1; $i < 3; $i++) {
// 		for ($j = 0; $j < 3; $j++, $k++) {
// 			$arr[$i][$j] = $k;
// 		}
// 	}
	
// 	var_dump($arr);


   // $arr = [];
	
	// for ($i = 0, $k = 1; $i < 3; $i++) {
	// 	for ($j = 0; $j < 3; $j++) {
	// 		$arr[$i][$j] = $k++;
	// 	}
	// }
	
	// var_dump($arr);




// Уровень 3.10 задачника PHP

///////////////
// №1Дан массив. Сделайте так,
//  чтобы в нем каждый элемент повторился два раза.
///////////////


// // Исходный массив
// $array = [1, 2, 3, 4, 5];

// // Создаем новый массив с дублированными элементами
// $result = [];
// foreach ($array as $item) {
//     $result[] = $item; // Первый раз добавляем элемент
//     $result[] = $item; // Второй раз добавляем тот же элемент
// }

// // Выводим результат
// print_r($result);



// №2 Дан массив и число. Оставьте в массиве только те числа, 
// которые являются делителями заданного числа.

// $array = [1, 20, 4, 100, 27, 16, 6];

// $num1 = 100;
// $i = 0;
// $ArrDiv1 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//   if(($num1 % $num) == 0) {
//    $ArrDiv1[$i] =$num1 / $num;
//    $i++;

//   }
// }




// №3 Даны два числа. Получите массив цифр, 
// которые есть и в одном, и во втором числе.

// $num1 = 123456;
// $num2 = 345678;
// $array1 = str_split($num1);
// $array2 = str_split($num2);
// $result = array_intersect($array2, $array1);   // մասսիվները խաչվումեն 
// print_r($result);

// $array = array_intersect($ArrDiv1, $array);   // մասսիվները խաչվումեն 
// print_r($array);



// №4 Дано число. Получите массив позицией всех цифр 3 в этом числе,
//  за исключением первой и последней.

// $num = 13253753438736538;
// $array = str_split($num);
// $countArray = count($array);
// $array1 = [];
// $j = 0;
// for ($i=0; $i < $countArray -1; $i++) { 
//    if($array[$i] == 3){
//       $array1[$j] = $i;
//       $j++;
//    }
// }
// $countArray1 = count($array1)-1;
//  unset ($array1[0]); 
//  unset ($array1[$countArray1]); 
//  var_dump ($array1);




// $num = 13253753438736538;
// $array = str_split($num);
// $countArray = count($array);
// $array1 = [];
// $j = 0;
// for ($i=0; $i < $countArray -1; $i++) { 
//    if($array[$i] == 3){
//       $array1[$j] = $i;
//       $j++;
//    }
// }
// $countArray1 = count($array1)-1;
//  array_shift ($array1); 
//  array_pop ($array1); 
//  var_dump ($array1);


// №5 Дан массив со числами. Оставьте в нем числа, 
// состоящие из разных цифр, а остальные удалите


// $array = [1, 2, 2, 3, 3, 4, 5];
// $result = array_diff($array, array_diff_assoc($array, array_unique($array)));
// print_r($result);


// function delDuplicate( $arr ) {
//    $arr2 = array_count_values( $arr );
//    return array_keys(array_filter( $arr2, function($x)use ($arr2) {return $arr2[$x]==1;}, ARRAY_FILTER_USE_KEY ) );
// };
// $test = [1, 2, 2, 3, 3, 4, 5];
// var_dump( delDuplicate( $test ) );




// $array = [1, 2, 2, 3, 3, 4, 5];

// function del_duplicate ($arr) {
//    foreach ($arr as $value) {
//        $arr_keys = array_keys($arr,$value);
//        if(count($arr_keys)>1) {
//            foreach ($arr_keys as $value_duplicate) {
//                unset($arr[$value_duplicate]);
//            }
//        }   
//    }
//    return $arr;
// }      
// var_dump(del_duplicate($array));



// $arr = [1, 1, 1, 2, 2, 3, 4, 4];
// 	var_dump(array_unique($arr));



// №6 Дан массив:
// [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]
// Слейте элементы этого массива в один одномерный массив:

// [1, 2, 3, 4, 5, 6, 7, 8, 9]


// $array1 = [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ];
// $resArray = []; 
//     function convertToSimpleArray($array){
//         global $resArray; 
//         if(is_array($array)){
//             foreach($array as $below){
//                 $res = convertToSimpleArray($below); 

//             }
//         }else{
//             $resArray[] = $array; 
//         }
//         return $resArray; 
//     }
//     var_dump(convertToSimpleArray($array1));



// Уровень 4.1 задачника PHP




// №1Сделайте функцию,
//  которая вернет текущий день недели словом


// function getDayOfWeek($date) {
//     // Устанавливаем локаль для корректного отображения дней недели на русском (или другом языке)
//     setlocale(LC_TIME, 'ru_RU.UTF-8'); 

//     // Преобразуем дату в timestamp
//     $timestamp = strtotime($date);

//     // Получаем название дня недели
//     $dayOfWeek = strftime('%A', $timestamp);

//     return ucfirst($dayOfWeek); // Возвращаем с заглавной буквы
// }

// // Пример использования
// echo getDayOfWeek('2024-10-16'); // Например, выведет: "Среда"


// function getDayRus(){
//    $days = array(
//        'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
//        'Четверг', 'Пятница', 'Суббота'
//    );
//    return $days[(date('w'))];
//    }
//    // которая выводит текущий день:
   
//    echo "Сегодня:" . getDayRus();




// №2 Сделайте функцию, которая параметром будет получать дату,
//  а возвращать день недели словом, соответствующий этой дате.


//////////////
//նույնը սարքել function -ով:
//////////////



// $dates = ['2024-09-06', '2016-12-25', '2017-01-26'];

// $days = [
//     'Воскресенье', 'Понедельник', 'Вторник', 'Среда',
//     'Четверг', 'Пятница', 'Суббота'
// ];

// foreach($dates as $d){
//     print_r([ 
//       //  'date' => $d, 
//        'dayOfWeek' => $days[ date("w", strtotime($d) )]
//     ]);
// }



// №3 Сделайте функцию, которая параметром будет принимать секунды,
//  а возвращать количество суток, соответствующих этим секундам.


// function num_word($value, $words, $show = true) 
// {
// 	$num = $value % 100;
// 	if ($num > 19) { 
// 		$num = $num % 10; 
// 	}
	
// 	$out = ($show) ?  $value . ' ' : '';
// 	switch ($num) {
// 		case 1:  $out .= $words[0]; break;
// 		case 2: 
// 		case 3: 
// 		case 4:  $out .= $words[1]; break;
// 		default: $out .= $words[2]; break;
// 	}
	
// 	return $out;
// }
 
// function secToStr($secs)
// {
// 	$res = '';
	
// 	$days = floor($secs / 86400);
// 	$secs = $secs % 86400;
// 	$res .= num_word($days, array('день', 'дня', 'дней')) . ', ';
	
// 	// $hours = floor($secs / 3600);
// 	// $secs = $secs % 3600;
// 	// $res .= num_word($hours, array('час', 'часа', 'часов')) . ', ';
 
// 	// $minutes = floor($secs / 60);
// 	// $secs = $secs % 60;
// 	// $res .= num_word($minutes, array('минута', 'минуты', 'минут')) . ', ';
 
// 	// $res .= num_word($secs, array('секунда', 'секунды', 'секунд'));
	
// 	return $res;
// }
 
// echo secToStr(12345678); // 142 дня
// echo secToStr(12345678); // 142 дня, 21 час, 21 минута, 18 секунд



// №4 Сделайте функцию, которая параметром будет принимать число и строку и
//  обрезать эту строку до длины,
//  заданной первым параметром.

// function cutStr($num,$string){

//    return mb_strimwidth($string, 0, $num, "");
// }
//  echo cutStr(10,"обрезать эту строку до длины,");



// №5 Сделайте функцию, которая параметром будет получать дату,
//  а возвращать знак зодиака, соответствующий этой дате.


// function getZodiacalSign($month, $day) {
//    $signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
//    $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
//    return $day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
//  }
//  echo getZodiacalSign(7, 11);




// №6 Сделайте функцию, которая параметром будет принимать число,
//  а возвращать сумму его делителей.


// function idvSum($num1){

// $i = 0;
// $ArrDiv = [];

// for ($num2= 1; $num2 <=$num1 ; $num2++) { 
//   if(($num1 % $num2) == 0) {
//    $ArrDiv[$i] =$num1 / $num2;
//    $i++;

//   }
// }

// return array_sum($ArrDiv);

// }
// echo idvSum(100);




// Уровень 4.2 задачника PHP




// №1 Сделайте функцию,
//  которая параметром будет принимать число и удалять из него нули.



// function delete_Null_fromNum ($num){

// $array =  str_split($num);
// $CountArrayDigital = count($array);
// for ($i= 0; $i <= $CountArrayDigital - 1; $i++){
// if ($array[$i] == 0){

//   unset($array[$i]);
// }
// }
// return implode('',$array);
// }

// echo delete_Null_fromNum ('123502504');




// №2 Сделайте функцию, которая будет возвращать сколько дней 
// прошло или осталось до заданной даты в году,
//  в зависимости от того, была уже эта дата или нет.

// function detaInterval($date){

// $now = time(); // текущее время (метка времени)
// $your_date = strtotime($date); // какая-то дата в строке (1 января 2017 года)
// $datediff = $now - $your_date; // получим разность дат (в секундах)

//  $y = floor($datediff / (60 * 60 * 24)); // вычислим количество дней из разности дат
//  if(floor($y) > 0){
//    echo 'прошло дней ';
//  }else{
//    echo 'осталось дней ';
//  }
//  return abs($y);

// }
// echo detaInterval("2024-09-11");




// print (strtotime ("08.04.2024")-strtotime ("10.04.2024"))/(60*60*24);



// №3 Сделайте функцию, 
// которая вернет массив всех високосных годов за предыдущие сто лет.

//    function isLeapYear()
// { 
//    $arr = [];
//    $i = 0;
//    for ($y=1924; $y <= 2024 ; $y++) {

//     if( $y % 4 == 0 ){
//       $arr[$i] = $y;
//       $i++;
//  # Год високосный
//     }
  
// }
// return $arr;
//    }

// print_r (isLeapYear());



// №4 Сделайте функцию, 
// которая параметром будет год и проверять, високосный он или нет.


// function isLeap($year){
//    return date("L", mktime(0,0,0,7,7,$year));
// }
// echo isLeap(2024);

// function isLeap($y){
//    return $y % 400 == 1 || ($y % 100 != 0 && ($y &3) == 0);
// }
// echo isLeap(2024);



//    function isleap( $year )
// {
//     if( $year % 4 == 0 )
//         # Год високосный
//         echo 'Год високосный';
//     else
//         # Год не високосный
//         echo 'Год не високосный';
// }
// echo isleap(2024);



//    №5 Сделайте функцию, которая будет возвращать
//     сколько дней осталось до конца текущего месяца.


// function daysUntilMonthEnd(){

//    $time = strtotime(date('Y-m-t 23:59'));
// $diff = $time - time();
// return round($diff / 86400); 
// }
// echo 'До конца месяца осталось ' . daysUntilMonthEnd() . ' дней';




// №6 Сделайте функцию, которая вернет предыдущий,
//  текущий и следующий дни недели словом в виде следующего массива:

// [
// 	'next' => 'пн',
// 	'curr' => 'вс',
// 	'prev' => 'сб',
// ]


// function getDayRus(){
   

//    $y= (date('w'));
//    $days = array(
//        'Во', 'По', 'Вт', 'Ср',
//        'Че', 'Пя', 'Су'
//    );

//    $keys = ['next', 'curr', 'prev'];

// $arr = array($days[$y-1] , $days[$y] , $days[$y+1] );

// $result = array_combine($keys, $arr);
//    return $result;
// }
// print_r (getDayRus());




//    Уровень 4.3 задачника PHP



//    №1 Сделайте функцию, 
// которая параметром будет принимать массив и удалять из него все дубли.


// function arrayUnique($arr){

//   $arr1 = array_unique($arr);

//   return $arr1 ;

// }
// print_r (arrayUnique([1, 1, 1, 2, 2, 3]));



// №2 Сделайте функцию, которая параметром будет принимать массив и 
// удалять из него все дубли, которые встречаются больше трех раз


// function removeDuplicatesOverThree($array) {
//     // Считаем количество вхождений каждого элемента
//     $counts = array_count_values($array);

//     // Фильтруем массив, оставляя только те элементы, которые встречаются 3 раза или меньше
//     $result = array_filter($array, function($value) use ($counts) {
//         return $counts[$value] <= 3;
//     });

//     // Сбрасываем ключи для упорядоченности
//     return array_values($result);
// }

// // Пример использования
// $array = [1, 2, 3, 1, 2, 1, 2, 1, 3, 3, 3, 4, 5, 5, 5, 5];
// $result = removeDuplicatesOverThree($array);

// print_r($result);



// №3 Сделайте функцию, которая параметром будет принимать массив и
//  удалять из него одинаковые, рядом стоящие элементы.

 
// function removeAdjacentDuplicates($array) {
//     $result = [];
    
//     // Добавляем первый элемент в новый массив (если массив не пустой)
//     if (!empty($array)) {
//         $result[] = $array[0];
//     }

//     // Итерируем по массиву, начиная со второго элемента
//     for ($i = 1; $i < count($array); $i++) {
//         // Добавляем элемент в результат, только если он отличается от предыдущего
//         if ($array[$i] !== $array[$i - 1]) {
//             $result[] = $array[$i];
//         }
//     }

//     return $result;
// }

// // Пример использования
// $array = [1, 1, 2, 2, 3, 3, 3, 4, 4, 4, 4, 5, 1, 1];
// $result = removeAdjacentDuplicates($array);

// print_r($result);


// №4 Сделайте функцию, которая параметром будет принимать массив с числами
//  и возвращать максимальное и минимальное значение из 
//  этого массива в виде следующего массива:

// [
// 	'max' => 9,
// 	'min' => 1,
// ]

// function arr_max_min($arr) {
//    $keys =['max' ,'min'];
//    $arr1 = [max($arr), min($arr)];
//    $result = array_combine($keys, $arr1);
//    return  $result;

// }
// print_r (arr_max_min([1, 3, 5, 6, 7, 9]));




// Уровень 4.4 задачника PHP



// №1 Сделайте функцию, которая параметром будет принимать число,
//  а количество его делителей.


// function countNumDiv($num1){
// $i = 0;
// $ArrDiv = [];

// for ($num2= 1; $num2 <=$num1 ; $num2++) { 
//   if(($num1 % $num2) == 0) {
//    $ArrDiv[$i] =$num1 / $num2;
//    $i++;

//   }
//   $countArrDiv = count($ArrDiv);
// }
// return $countArrDiv;
// }
 
// var_dump (countNumDiv(100));




// №2 Сделайте функцию, которая параметром будет принимать дату,
//  а возвращать знак зодиака, соответствующий этой дате.


// function getZodiacalSign($month, $day) {
//    $signs = array("Козерог", "Водолей", "Рыбы", "Овен", "Телец", "Близнецы", "Рак", "Лев", "Девы", "Весы", "Скорпион", "Стрелец");
//    $signsstart = array(1=>21, 2=>20, 3=>20, 4=>20, 5=>20, 6=>20, 7=>21, 8=>22, 9=>23, 10=>23, 11=>23, 12=>23);
//    return $day < $signsstart[$month + 1] ? $signs[$month - 1] : $signs[$month % 12];
//  }
//  echo getZodiacalSign(7, 11);




// №3 Сделайте функцию, которая параметром будет принимать число,
//  а возвращать массив его делителей.


// function numDiv($num1){
// $i = 0;
// $ArrDiv = [];

// for ($num2= 1; $num2 <=$num1 ; $num2++) { 
//   if(($num1 % $num2) == 0) {
//    $ArrDiv[$i] =$num1 / $num2;
//    $i++;

//   }
// }
// return $ArrDiv;
// }
 
// var_dump (numDiv(100));




// №4 Сделайте функцию, которая параметром будет принимать число
//  и проверять,  простое оно или нет.

// function chekIsPrimeNum($num1){
// $i = 0;
// $ArrDiv = [];

// for ($num2= 1; $num2 <=$num1 ; $num2++) { 
//   if(($num1 % $num2) == 0) {
//    $ArrDiv[$i] =$num1 / $num2;
//    $i++;

//   }
//   $countArrDiv = count($ArrDiv);
// }

// if ($countArrDiv <= 2){
//     echo "Число ".$num1 ." простое"."\r\n";
// }else{
//    echo "Число ".$num1 ." НЕ простое"."\r\n";
// }

// }
 
// print_r (chekIsPrimeNum(5));



// №5 Сделайте функцию, 
// которая параметром будет принимать число и удалять из него четные цифры.

// function del_even_number($number){

// $array = str_split($number);
// $k=count($array)-1;
// for ($i = 0; $i <= $k; $i++){  
//     if(($array[$i] % 2) == 0){

//         unset($array[$i]);
//     }
//     $num = implode($array);
// }
// return $num;
// }
// var_dump (del_even_number(123789));



// №6 Сделайте функцию, 
// которая заполнит массив N случайными числами из заданного промежутка.

// function arr_rand_num(){

// $numbers = [];

// for ($i = 0; $i < 10; $i++) {
//     $numbers[$i] = mt_rand(1, 100);
// }

// return($numbers); 
// }
// var_dump (arr_rand_num());




// Уровень 4.5 задачника PHP




// №1 Дана переменная со строкой. Проверьте, 
// что в эта строка представляет собой число, то есть состоит только из цифр.



// function stringsDigits($str){

// $str1 = str_replace(', ', '',$str); 
// $tests = str_split($str1);
// $k =0;
// foreach ($tests as $element) {
//    if (is_numeric($element)) {
//    } else {
//        echo  "Строка состоит не только из цифр.";
//        $k++;
//        break;
//    }
// }
// if($k == 0){
//    echo  "Строка состоит только из цифр.";
// }
// }
// echo stringsDigits('5, 10, 6, 15, 20, 40');




// №2 Дана переменная со строкой. 
// Проверьте, что в эта строка представляет собой дробь.


// function isFraction($string) {
//     // Регулярное выражение для проверки дроби (например: 1/2, -3/4)
//     $pattern = '/^-?\d+\/\d+$/';

//     // Проверяем соответствие строки регулярному выражению
//     return preg_match($pattern, $string) === 1;
// }

// // Пример использования
// $str1 = "3/4";
// $str2 = "-1/5";
// $str3 = "abc";
// $str4 = "7/0"; // Дробь, но деление на ноль недопустимо

// echo isFraction($str1) ? "Дробь\n" : "Не дробь\n";  // Дробь
// echo isFraction($str2) ? "Дробь\n" : "Не дробь\n";  // Дробь
// echo isFraction($str3) ? "Дробь\n" : "Не дробь\n";  // Не дробь
// echo isFraction($str4) ? "Дробь\n" : "Не дробь\n";  // Дробь



// №3 Сделайте функцию, которая параметром будет принимать массив с числами и 
// возвращать второе по величине число.


// function findSecondLargest($arr)
// {
//     $largest = $arr[0];
//     $secondLargest = $arr[0];

//     foreach ($arr as $num) {
//         if ($num > $largest) {
//             $secondLargest = $largest;
//             $largest = $num;
//         } elseif ($num > $secondLargest && $num != $largest) {
//             $secondLargest = $num;
//         }
//     }
//     return $secondLargest;
// }
// $numbers = [10, 5, 8, 20, 12, 20, 20, 15];
// $secondLargest = findSecondLargest($numbers);
// echo "The second largest element is: " . $secondLargest;







// function findSecondLargest($arr)
// {
//     $n = count($arr);
//     $largest = $arr[0];
//     for ($i = 1; $i < $n; $i++) {
//         if ($arr[$i] > $largest) {
//             $largest = $arr[$i];
//         }
//     }
//     $arr = array_diff($arr, [$largest]);
//     $secondLargest = $arr[0];
//     foreach ($arr as $num) {
//         if ($num > $secondLargest) {
//             $secondLargest = $num;
//         }
//     }
//     return $secondLargest;
// }
// $numbers = [10, 5, 8, 20, 20, 15, 3, 12, 9, 7, 2, 18, 6, 11, 4, 14];
// $secondLargest = findSecondLargest($numbers);
// echo "The second largest element is: " . $secondLargest;





// №4 Сделайте функцию, которая параметрами будет принимать два числа 
// и возвращать массив, заполненный целыми числами 
// от минимального параметра до максимального.



// function fillArray($num1 ,$num2){
//    $arr = range($num1, $num2);
//    return $arr;
// }
// var_dump (fillArray(5, 1));





// №5 Сделайте функцию,
//  которая заполнит массив случайными латинскими буквами.


// function generator_kods($countNum) {
//    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
//    $string = '';
//    for ($i = 0; $i < $countNum; $i++)
//        $string .= substr($chars, rand(1, 30) - 1, 1);
//     $arr = str_split($string) ;
//     return $arr;
//    }


//    var_dump (generator_kods(5));





// №6 Сделайте функцию,
//  которая будет возвращать сумму N первых чисел Фибоначчи.


// function fibonacci_numbers_sum($countNum){

// $arr =[];
// $arr[0] = 0;
// $arr[1] = 1;
// for ($i=2; $i <= $countNum; $i++) { 
//    $arr[$i] = $arr[$i- 2]  + $arr[$i- 1];
//   $arrSum = array_sum($arr);
// }
// return ($arrSum);
// }
// var_dump (fibonacci_numbers_sum(10));




// Уровень 4.6 задачника PHP




// №1 Сделайте функцию, которая параметром будет принимать дату 
// в формате год-месяц-день, и определять, существует ли такая дата или нет.


// function is_Date ($str){
//    if(is_numeric(strtotime($str)) == true)
//    echo "Существует такая дата ";
// else
// echo "НЕ существует такая дата ";
// }

// var_dump(is_Date('2024-09-14'));





// №2 Сделайте функцию, которая сгенерирует строку заданной длины, 
// заполненную случайными латинскими буквами.


// function generator_kods($countNum) {
//    $chars = 'abdefhiknrstyzABDEFGHKNQRSTYZ';
//    $string = '';
//    for ($i = 0; $i < $countNum; $i++)
//        $string .= substr($chars, rand(1, 30) - 1, 1);
//    return $string;
//    }


//    var_dump (generator_kods(10));



// №3 Сделайте функцию, которая параметром будет получать строку со словами, 
// а возвращать строку в верхнем регистре, состоящую из первых букв слов.



// function upper_case_str($str){

// $arr = explode (" ", $str);
// $str1 = "";
// $str2 = "";
// foreach ($arr as $elem){
//    $str1 =  $elem[0];
//    $str2 .= strtoupper($str1);

// }
// return ($str2);
// }
// var_dump(upper_case_str("abc bca cab"));



// №4 Сделайте функцию, которая параметром будет принимать массив с числами и
//  заменять каждое число на массив его делителей.


 
// function replaceWithDivisors($numbers) {
//     $result = [];

//     foreach ($numbers as $number) {
//         $divisors = getDivisors($number);
//         $result[] = $divisors;
//     }

//     return $result;
// }

// // Вспомогательная функция для поиска делителей числа
// function getDivisors($num) {
//     $divisors = [];

//     for ($i = 1; $i <= $num; $i++) {
//         if ($num % $i === 0) {
//             $divisors[] = $i;
//         }
//     }

//     return $divisors;
// }

// // Пример использования
// $array = [10, 15, 21];
// $result = replaceWithDivisors($array);

// // Вывод результата
// print_r($result);



// №5 Сделайте функцию, 
// которая параметром будет принимать секунды,
//  а возвращать количество дней, часов, минут и секунд, 
//  соответствующих этим секундам, в виде следующего массива:

// [
// 	'd' => 12,
// 	'h' => 10,
// 	'm' => 59,
// 	's' => 59,
// ]




// function num_word($value, $words, $show = true) 
// {
// 	$num = $value % 100;
// 	if ($num > 19) { 
// 		$num = $num % 10; 
// 	}
	
// 	$out = ($show) ?  $value . ' ' : '';
// 	switch ($num) {
// 		case 1:  $out .= $words[0]; break;
// 		case 2: 
// 		case 3: 
// 		case 4:  $out .= $words[1]; break;
// 		default: $out .= $words[2]; break;
// 	}
	
// 	return $out;
// }
 
// function secToStr($secs)
// {
// 	$res = '';
	
// 	$days = floor($secs / 86400);
// 	$secs = $secs % 86400;
// 	// $res .= num_word($days, array('день', 'дня', 'дней')) . ', ';
//    $res .= $days . ', ';


// 	$hours = floor($secs / 3600);
// 	$secs = $secs % 3600;
// 	// $res .= num_word($hours, array('час', 'часа', 'часов')) . ', ';
//    $res .= $hours . ', ';


// 	$minutes = floor($secs / 60);
// 	$secs = $secs % 60;
// 	// $res .= num_word($minutes, array('минута', 'минуты', 'минут')) . ', ';
//    $res .= $minutes . ', ';

// 	// $res .= num_word($secs, array('секунда', 'секунды', 'секунд'));
//    $res .= $secs;

//    $arr = explode ( ' ', $res);
// 	   $keys = ['d', 'h', 'm', 's'];
// $result = array_combine($keys, $arr);
//    return $result;
// 	// return $res;
// }
 
// print_r (secToStr(12345678)); // 142 дня
// // echo secToStr(12345678); // 142 дня, 21 час, 21 минута, 18 секунд




// Уровень 4.7 задачника PHP




// №1 Сделайте функцию, 
// которая параметром будет принимать текст со словами, а возвращать текст,
//  в котором эти слова будут отсортированы в алфавитном порядке.



// function sort_alphabetical($str){

// $arr = explode (' ', $str);
//  asort($arr);
//  $str1 = implode (' ',$arr);

// return ($str1);
// }
// var_dump(sort_alphabetical("zba afe jih abe"));





// №2 Сделайте функцию, которая параметром будет принимать два массива и
//  возвращать массив их общих элементов.

// function ArrayMerge($arr1, $arr2){
 

// $result = array_intersect($arr1, $arr2);
// return $result;
// }
// var_dump (ArrayMerge([1, 2, 3, 4, 5], [3, 4, 5, 6, 7]));



// №3 Сделайте функцию, которая будет возвращать случайное число.
//  Функция не должна возвращать одно и тоже число два раза подряд.



//от 1 до ста случайные числа, выведем 50;
// function arr_rand_num($length){
// for ($i=1;$i<=100;$i++) $m[]=$i;
// shuffle($m);
// for ($i=1;$i<=$length;$i++) 
// return array_pop($m)."\n";
// }
// var_dump (arr_rand_num(1));

// //от 1 до 100000000 случайные числа, выведем 50;

// function arr_rand_num($length){

// $start=1;
// $end=100000000;
// $array=array();
// while (count($array)<$length) {
//     $array[mt_rand($start,$end)]="";
// }
// return (array_keys($array));
// }
// var_dump (arr_rand_num(50));



// //от 1 до ста случайные числа, выведем 50;
// for ($i=1;$i<=100;$i++) $m[]=$i;
// shuffle($m);
// for ($i=1;$i<=50;$i++) echo array_pop($m)."\n";




// №4 Сделайте функцию,
//  которая параметром будет принимать массив и элемент и
//   возвращать следующий за ним элемент. Смотрите пример:

  
// $arr = [1, 2, 3, 4, 5];

// func($arr, 1); // 2
// func($arr, 4); // 5
// func($arr, 5); // 1
// function getNextElement($arr, $element) {
//     $index = array_search($element, $arr); // Ищем индекс элемента в массиве

//     if ($index === false) {
//         return null; // Если элемент не найден в массиве, возвращаем null
//     }

//     // Находим следующий индекс с учетом цикличности
//     $nextIndex = ($index + 1) % count($arr);

//     return $arr[$nextIndex];
// }

// // Пример использования
// $arr = [1, 2, 3, 4, 5];

// echo getNextElement($arr, 1) . PHP_EOL; // 2
// echo getNextElement($arr, 4) . PHP_EOL; // 5
// echo getNextElement($arr, 5) . PHP_EOL; // 1


// Уровень 4.8 задачника PHP




// №1 Сделайте функцию, которая параметром будет принимать массив и 
// возвращать случайный элемент этого массива.


// function arr_rand_elem($arr){

// $key = array_rand($arr);
// return $arr[$key];
// }

// var_dump(arr_rand_elem([100, 250, 320, 450, 520]));



// №2 Сделайте функцию, которая параметром будет принимать массив и 
// возвращать массив из N случайных элементов этого массива



// function arr_rand_elem_N($arr ,$N){

// $r = new \Random\Randomizer();


// $keys = $r->pickArrayKeys($arr, $N);
// // Поиск значения для выбранных ключей.
// $selection = array_map(
//     static fn ($key) => $arr[$key],
//     $keys
// );

// return ($selection);
// }

// var_dump(arr_rand_elem_N([100, 250, 320, 450, 520, 251, 321, 456, 524], 3));



// №3 Сделайте функцию, которая параметром будет принимать массив и
//  возвращать случайный элемент этого массива так,
//  чтобы одинаковые элементы не возвращались два раза подряд.

 
// function getRandomElement($arr, &$lastElement = null) {
//     // Убираем из массива предыдущий элемент, чтобы не выбрать его снова
//     $filteredArr = $lastElement !== null ? array_filter($arr, fn($el) => $el !== $lastElement) : $arr;

//     // Если отфильтрованный массив пуст, возвращаем null (защита от бесконечного цикла)
//     if (empty($filteredArr)) {
//         return null;
//     }

//     // Получаем случайный элемент из отфильтрованного массива
//     $randomElement = $filteredArr[array_rand($filteredArr)];
    
//     // Сохраняем элемент как последний возвращенный
//     $lastElement = $randomElement;

//     return $randomElement;
// }

// // Пример использования
// $arr = [1, 2, 3, 4, 5];

// $lastElement = null; // Храним последний возвращенный элемент

// // Тестируем функцию несколько раз
// echo getRandomElement($arr, $lastElement) . PHP_EOL;
// echo getRandomElement($arr, $lastElement) . PHP_EOL;
// echo getRandomElement($arr, $lastElement) . PHP_EOL;



// №4 Сделайте функцию,
//  которая будет возвращать массив простых чисел из заданного промежутка.

// function res($min, $max) {
//     $arr = [];
 
//    function isPrime($n) {
//      for ($i = 3; $i <= sqrt($n); $i++) {
//        if ($n % $i === 0) return false;
//      }
//      return true;
//    }
 
//    function printPrimes($min, $max) {
//      for ($i = $min; $i <= $max; $i = $i + 2) {
//        if (isPrime($i)) 
//        echo($i), "\n";
//      }
//    }
//    printPrimes($min, $max);
//  }
//  echo (res(11, 31));




// №5 Сделайте функцию,
//  которая параметрами будет принимать любое количество чисел,
//   а возвращать их сумму.



// function num_sum($num){
//  $arr = explode(" ", $num);
// return array_sum($arr);
// }
// var_dump(num_sum('100 250')); 



// №6 Сделайте функцию, которая заполнит массив N случайными числами из 
// заданного промежутка так,
//  чтобы в массиве не было подряд двух одинаковых чисел.

 
// function fillArrayWithUniqueRandoms($n, $min, $max) {
//     $result = [];

//     // Проверка на случай, если диапазон слишком мал
//     if ($max - $min + 1 < 1) {
//         return $result; // Возвращаем пустой массив
//     }

//     $lastValue = null; // Переменная для хранения последнего добавленного значения

//     for ($i = 0; $i < $n; $i++) {
//         do {
//             $randomNumber = rand($min, $max); // Генерируем случайное число
//         } while ($randomNumber === $lastValue); // Повторяем, пока не получим новое число

//         $result[] = $randomNumber; // Добавляем в массив
//         $lastValue = $randomNumber; // Обновляем последнее значение
//     }

//     return $result;
// }

// // Пример использования
// $n = 10; // Количество элементов
// $min = 1; // Минимальное значение
// $max = 5; // Максимальное значение

// $array = fillArrayWithUniqueRandoms($n, $min, $max);
// print_r($array);



// №7 Сделайте функцию, которая заполнит массив N случайными числами из 
// заданного промежутка так, чтобы числа не повторялись.


// function arr_rand_num($length){

// $start=1;
// $end=100000000;
// $array=array();
// while (count($array)<$length) {
//     $array[mt_rand($start,$end)]="";
// }
// return (array_keys($array));
// }
// var_dump (arr_rand_num(50));





// Уровень 4.9 задачника PHP




// №1 Сделайте функцию, которая будет возвращать сколько дней осталось до 
// ближайшего 29 февраля.

// function daysUntilNextLeapDay() {
//     $today = new DateTime(); // Получаем текущую дату
//     $currentYear = $today->format('Y');

//     // Определяем следующий год, в котором будет 29 февраля
//     $nextLeapYear = $currentYear + 1;

//     while (!isLeapYear($nextLeapYear)) {
//         $nextLeapYear++;
//     }

//     // Создаем объект даты для 29 февраля следующего високосного года
//     $nextLeapDay = new DateTime("$nextLeapYear-02-29");

//     // Вычисляем разницу в днях
//     $interval = $today->diff($nextLeapDay);
//     return $interval->days;
// }

// // Функция для проверки, является ли год високосным
// function isLeapYear($year) {
//     return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
// }

// // Пример использования
// $daysRemaining = daysUntilNextLeapDay();
// echo "Количество дней до ближайшего 29 февраля: $daysRemaining";




// №2 Сделайте функцию, которая будет возвращать дату следующей масленницы,
//  которая празднуется в последнее воскресенье зимы.

 
// function nextMaslenitsa() {
//     $currentYear = date('Y');
//     $nextYear = $currentYear + 1;
    
//     // Находим последнее воскресенье зимы для текущего года
//     $lastWinterSunday = getLastWinterSunday($currentYear);
    
//     // Если текущее число больше или равно последнему воскресенью зимы,
//     // то ищем следующее воскресенье зимы в следующем году
//     if (date('Y-m-d') >= $lastWinterSunday) {
//         $lastWinterSunday = getLastWinterSunday($nextYear);
//     }

//     return $lastWinterSunday;
// }

// // Функция для нахождения последнего воскресенья зимы
// function getLastWinterSunday($year) {
//     // Последний день зимы: 28 февраля или 29 февраля (если год високосный)
//     $lastDayOfWinter = ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0) ? '29' : '28';
//     $lastDayOfFebruary = "$year-02-$lastDayOfWinter";
    
//     // Получаем день недели последнего дня зимы
//     $lastDate = new DateTime($lastDayOfFebruary);
//     $lastDayOfWeek = $lastDate->format('w');

//     // Находим последнее воскресенье зимы
//     // w - 0 (воскресенье) до 6 (суббота), поэтому вычитаем $lastDayOfWeek
//     $daysToSubtract = $lastDayOfWeek;
//     $lastSunday = $lastDate->modify("-$daysToSubtract days");

//     return $lastSunday->format('Y-m-d');
// }

// // Пример использования
// $maslenitsaDate = nextMaslenitsa();
// echo "Дата следующей Масленицы: $maslenitsaDate";



// №3 Сделайте функцию, которая будет возвращать случайный цвет.


// function rand_color() {
//    return sprintf('#%02X%02X%02X', rand(0, 255), rand(0, 255), rand(0, 255));
// }

// echo rand_color(); // #632B44
// echo rand_color(); // #2383A8
// echo rand_color(); // #0BEC44



// №4 Сделайте функцию, которая параметром будет принимать массив чисел и 
// возвращать массив общих делителей всех чисел из переданного массива.


// function commonDivisors(array $numbers) {
//     // Функция для нахождения общего делителя двух чисел
//     function gcd($a, $b) {
//         while ($b) {
//             $temp = $b;
//             $b = $a % $b;
//             $a = $temp;
//         }
//         return $a;
//     }

//     // Находим наибольший общий делитель (НОД) для всего массива
//     $gcdValue = array_reduce($numbers, function($carry, $item) {
//         return gcd($carry, $item);
//     });

//     // Находим делители НОД
//     $divisors = [];
//     for ($i = 1; $i <= $gcdValue; $i++) {
//         if ($gcdValue % $i === 0) {
//             $divisors[] = $i;
//         }
//     }

//     return $divisors;
// }

// // Пример использования
// $numbers = [12, 24, 36];
// $result = commonDivisors($numbers);
// print_r($result);



// №5 Сделайте функцию, которая параметром будет принимать двухмерный массив
//  чисел и возвращать массив максимальных чисел в каждом подмассиве.


// function two_dimensional_array_max($arr){

// // $arr = [[1, 2, 3], [4, 5, 6, 7], [8, 9]];
// $arr1 = [];
// $i = 0;
// foreach ($arr as $sub) {
//    foreach ($sub as $elem) {

//    }
//    $arr1[$i] = max($sub);
//    $i++;

// }

// return $arr1;
// }

// var_dump(two_dimensional_array_max([[1, 2, 3], [4, 5, 6, 7], [8, 9]]));





// Уровень 4.10 задачника PHP



// №1 Сделайте функцию, которая параметром будет принимать букву и проверять, 
// это буква кириллицы или латиницы.


// Для EN
// function Latin_or_Cyrillic($string){
//    $chr_en = "a-zA-Z0-9\s`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]";
// if (preg_match("/^[$chr_en]+$/", $string)) {
//    echo "Это буква латиница";
// }else{
//    echo "Это буква кириллица";
// }
//  }
//  var_dump(Latin_or_Cyrillic('abc'));
// Для RU
// function Cyrillic_or_Latin($string){

// $chr_ru = "А-Яа-яЁё0-9\s`~!@#$%^&*()_+-={}|:;<>?,.\/\"\'\\\[\]";
// if (preg_match("/^[$chr_ru]+$/u", $string)) {
//    echo "Это буква кириллица";
// }else{
//    echo "Это буква латиница";

// }
// }
// var_dump(Cyrillic_or_Latin('ы'));




// №2 Сделайте функцию, которая параметром будет принимать массив и
//  перемешивать элементы этого массива в случайном порядке.


// function shuffle_array($collection){

// shuffle($collection);
// return ($collection);
// }
// var_dump(shuffle_array(['hexlet', 1, 69, 'awesomeness']));



// №3 Дан текст со словами. Запишите все слова этого текста в 
// специальный объект. Ключами в этом объекте будут буквы,
//  а значениями - массивы слов, начинающихся на эти буквы.

 
// function wordsByFirstLetter($text) {
//     $result = [];
    
//     // Разбиваем текст на слова, используя пробелы и знаки препинания
//     $words = preg_split('/[\s,.;!?]+/', $text, -1, PREG_SPLIT_NO_EMPTY);

//     foreach ($words as $word) {
//         $firstLetter = mb_substr($word, 0, 1); // Получаем первую букву

//         // Создаем ключ для буквы, если его нет
//         if (!isset($result[$firstLetter])) {
//             $result[$firstLetter] = [];
//         }

//         // Добавляем слово в соответствующий массив
//         $result[$firstLetter][] = $word;
//     }

//     return $result;
// }

// // Пример использования
// $text = "Привет, мир! Питон и PHP — замечательные языки программирования.";
// $result = wordsByFirstLetter($text);
// print_r($result);



// №4 Сделайте функцию, которая параметром будет принимать число,
//  а возвращать массив его делителей, являющихся простыми числами.

 
// // Функция для проверки, является ли число простым
// function isPrime($num) {
//     if ($num < 2) return false;
//     for ($i = 2; $i <= sqrt($num); $i++) {
//         if ($num % $i === 0) return false;
//     }
//     return true;
// }

// // Функция для получения простых делителей числа
// function primeDivisors($number) {
//     $primeDivisors = [];

//     // Перебираем все числа от 2 до самого числа
//     for ($i = 2; $i <= $number; $i++) {
//         // Проверяем, является ли число делителем и простым
//         if ($number % $i === 0 && isPrime($i)) {
//             $primeDivisors[] = $i;
//         }
//     }

//     return $primeDivisors;
// }

// // Пример использования
// $number = 84; // Например, 84 = 2 * 2 * 3 * 7
// $result = primeDivisors($number);
// print_r($result); // Ожидаемый вывод: [2, 3, 7]



// №5 Сделайте функцию, которая параметром будет принимать слово и
//  возвращать массив его слогов.



// function syllables_array($string){

// $arr = explode(" ", $string);

// return ($arr);
// }
// var_dump (syllables_array("abc bcd cfg"));



?>


<!-- Уровень 5.1 задачника PHP -->




<!-- №1 Дана форма с двумя инпутами. В инпуты вводятся числа.
 После отправки формы выведите сумму введенных чисел. -->


<!-- <form action="" method="GET">
	<input name="test1">
	<input name="test2">
	<input type="submit">
</form>  -->
 <?php
	// if (!empty($_GET)) {
	// 	echo $_GET['test1'] + $_GET['test2'];
	// }
?>  



<?php
	// if (empty($_GET)) {
?>
	<!-- <form action="" method="GET">
		<input name="test1">
		<input name="test2">
		<input type="submit">
	</form> -->
<?php
	// } else {
	// 	echo $_GET['test1'] + $_GET['test2'];
	// }
?>



<?php


// №2 По заходу на страницу выведите, сколько дней осталось до Нового Года.



// $currentYear = date('Y'); // получаем текущий год

// $newYear = mktime(0, 0, 0, 1, 1, $currentYear + 1); // высчитываем дату Нового Года
// $seconds = $newYear - time();

// $days = 0; $hours = 0; $minutes = 0;
// $oneMinute = 60;
// $oneHour = 60 * $oneMinute;
// $oneDay = $oneHour * 24;

// if ($seconds / $oneDay > 0) {
//     $days = (int)($seconds / $oneDay);
//     $seconds -= $days * $oneDay;
// }

// if ($seconds / $oneHour > 0) {
//     $hours = (int)($seconds / $oneHour);
//     $seconds -= $hours * $oneHour;
// }

// if ($seconds / $oneMinute > 0) {
//     $minutes = (int)($seconds / $oneMinute);
//     $seconds -= $minutes * $oneMinute;
// }

// printf('К Новому Году осталось: %02d дней %02d часов %02d минут и %02d секунд', $days, $hours, $minutes, $seconds);


?>


<?php

//  №3 Дан следующая структура данных:


	// $data = [1, 2, 3, 4, 5];
?>
 <!-- Сформируйте с помощью этих данных следующую верстку:

 <p>
 	1
 </p>
 <p>
 	2
 </p>
 <p>
 	3
 </p>
 <p>
 	4
 </p>
 <p>
 	5
 </p> -->
 <?php

	// $data = [1, 2, 3, 4, 5];
 

	//  foreach ($data as $user) {
		
	//  	echo "<p>{$user}</p>";
	
		
	//  }
?>


   <?php





// Уровень 5.2 задачника PHP



// №1 По заходу на страницу выведите в абзац случайное число из
//  диапазона от 1 до 100.



// echo"Я сделаю уроки за " . mt_rand(1, 100) . " минут", "\n";


?>


<?php


// №2 Дана форма с кнопкой. После отправки формы найдите 
// сумму чисел от 1 до 100 и выведите результат на экран.

?>
<!-- 
 <form action="" method="POST">
   
	<input name ="submit"  type="submit" value = "Выполнить" />

</form> -->




<?php
// if(isset( $_POST['submit'])){
// function  sum_num(){
// $sum = 0;

// for ($num=1;$num<=100;$num++)
// {
//      $sum =$sum+$num ;
// }

// return $sum;
// }
// print_r(sum_num());
// }
// // header ['Location: ./index1.php'];
?>

<?php


// №3 Дана форма с кнопкой и инпутом. В инпут вводится строка.
//  По нажатию на кнопку определите, сколько символов в введенной строке.

?>

<!-- <form action="" method="POST">
	<input name="test">
	<input name ="submit"  type="submit" value = "Выполнить" />
</form> -->

<?php
// if(isset( $_POST['submit'])){
// 	echo mb_strlen($_POST['test']);
// }
?>


<?php

//  №4 Дан следующая структура данных:


	// $data = [1, 2, 3, 4, 5];
?>
 <!-- Сформируйте с помощью этих данных следующую верстку:

<ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul>  -->

<?php

// 	$data = [1, 2, 3, 4, 5];

//    echo '<ul>';
// 	foreach ($data as $user) {
		
		// echo "<li>{$user}</li>";
		
// 	}
// echo '</ul>';





// Уровень 5.3 задачника PHP



// №1 Дана форма с инпутом. В инпут вводится число. После отправки формы,
// если введено нечетное число, то покрасьте границу инпута в красный цвет,
//  а если четное - то в зеленый.

?>
<!-- 
<form action="" method="POST"  >
	<input name="num" class=" -->
	<?php 

	// if (!empty($_POST['num'])){

	// 	echo ($_POST['num'] % 2  == 0) ? 'odd' : 'even'; 

	// }
	?>
	 <!-- ">
	<input type="submit">
</form> 


<style type="text/css">
/* Нечетные строки */
 .odd {
	border-color: red;
}
 
/* Четные строки */
 .even {
	border-color:  green;
}
</style> -->

<?php



// №2 Дана форма с инпутом. В инпут вводится число.
//  После отправки формы выведите на экран факториал введенного числа.



    // $resultText = '';
    // $errText = '';
    // function c(&$r,&$errText) {
    //     if ( isset($_REQUEST['textfield']) ) {
    //         $inp = trim($_REQUEST['textfield']);
    //         if ( (string)(int)$inp !== $inp ) {
    //             $errText = 'Введите целое число.';
    //             return;
    //         }
    //         if ( $inp < 1 ) {
    //             $errText = 'Число должно быть больше 0.';
    //             return;
    //         }
    //         // if ( $inp > 10 ) {
    //         //     $errText = 'Число должно быть меньше 11.';
    //         //     return;
    //         // }
    //         $r = f($inp);
    //     }
    // }
    // function f($n) {
    //     $r=1;
    //     for(;$n>1;$r *= $n--) {}
    //     return $r;
    // }
    // c($resultText,$errText);
?>

<?php
//  echo $errText; 
 ?>
<!-- <form action="" method="post" name="form1">
    <label for="textfield">Введите число</label>
    <input type="text" name="textfield" id="textfield"> <br>
    <input type="submit" name="button" id="button" value="Выполнить">
    <br>
    <label for="textfield2">Факториал числа:</label>
    <input type="text" name="textfield2" id="textfield2" value="
	<?php
	//  echo $resultText;
	  ?>
	  ">
</form>  -->

<?php



// №3 Дана форма с кнопкой и двумя инпутами. В инпуты вводятся целые числа.
//  После отправки формы определите, какое из введенных чисел больше и 
//  выведите его на экран.

?>
<!-- <form action="" method="POST">
	<input name="test">
	<input name="test1">
	<input name ="submit"  type="submit" value = "Выполнить" />
</form> -->

<?php
//  if(!empty($_POST['submit'])){
// 	 if ($_POST['test'] > $_POST['test1'] ){
// 		echo $_POST['test'];
// }else{
// 	echo $_POST['test1'];
// }
	
// 	}

	


// №4 Дана форма с кнопкой и инпутом. В инпут вводится число.
//  После отправки формы найдите сумму цифр введеного числа.

?>
 
 <!-- <form action="" method="POST">
 <input name="test">
	<input name ="submit"  type="submit" value = "Выполнить" />

</form> -->


<?php
// if(!empty( $_POST['submit'])){



// //    function to calculate sum of digits
//    function sumDigits($number) {
//     $sum = 0;
//     // converting number to string to access digits easily
//     $numberStr = (string)$number;
//     for ($i = 0; $i < strlen($numberStr); $i++) {
//         $digit = (int)$numberStr[$i];
//         $sum += $digit;
//     }
//     return $sum;
// }

// $number = $_POST['test'];
// echo "Sum of digits: " . sumDigits($number);
// }



//  №5 Дана форма с кнопкой и инпутом. В инпут вводится слово.
//  После отправки формы переверните слово и запишите его в абзац.

?>
	<!-- <form action="" method="POST">
	<input name="test">
	<input name ="submit"  type="submit" value = "Выполнить" />
</form> -->

<?php

// if(isset( $_POST['submit'])){
	// "\r\n";
	?>
	<!-- <p>  -->
		<?php
		//  echo  strrev($_POST['test']."\r\n");
	?>
<!-- </p> -->

<?php

// }




// №6 Дан следующая структура данных:


	// $data = [1, 2, 3, 4, 5];
?>

<?php
// Сформируйте с помощью этих данных следующую верстку:


?>
<!-- 
<input value="1">
<input value="2">
<input value="3">
<input value="4">
<input value="5"> -->

<?php

// 	$data = [1, 2, 3, 4, 5];

// 	foreach ($data as $user) {
		
		

// echo "<input value={$user}>" ."<br>";
// 	}




// Уровень 5.4 задачника PHP



// №1 Дан массив с числами. По заходу на страницу запишите в инпут все числа 
// из массива, разделив их запятыми.


// if(isset( $_POST['text'])){
// $str = "";
// 	$arr =  [1, 2, 3, 4, 5, 6];
// 	$countArr = count($arr); 
// 	for ($i=0; $i <= $countArr - 1 ; $i++) { 
// 		$str = $str.','.$arr[$i];
// 	}
// 	$str1 = mb_substr($str, 1);

// 	}
?>

<!-- <form method="POST" action="">
	<div>
	<input type="text" name="text" value=" -->
	<?php 
	// echo $str1; 
	?>
	<!-- "> -->

		<!-- <input type="text" name="text" placeholder=" -->
		<?php 
		// echo $str1;
		 ?>
		 <!-- "> -->
	<!-- </div>
	
	<div>
		<button type="submit" name="submit">Submit</button>
	<div>    
</form> -->



<?php



// №2 Дана форма с произвольным количеством инпутов. В инпуты вводятся числа.
//  После отправки формы найдите сумму введенных чисел и выведите ее на экран.
 
// $summation = 0;

// // Если форма отправлена, обрабатываем данные
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     foreach ($_POST['numbers'] as $number) {
//         if (is_numeric($number)) {  // Проверяем, что введено число
//             $summation += $number;
//         }
//     }
// }
?>


    <!-- <form method="POST">
        <input type="number" name="numbers[]" placeholder="Введите число"><br>
        <input type="number" name="numbers[]" placeholder="Введите число"><br>
        <input type="number" name="numbers[]" placeholder="Введите число"><br>
        <button type="submit">Отправить</button>
    </form> -->

    <?php
	//  if ($_SERVER['REQUEST_METHOD'] === 'POST'):
	 ?>
        <!-- <h2>Сумма чисел:  -->
			<?php
			// echo $summation ;
			?>
			<!-- </h2> -->
    <?php 
// endif;
 ?>

	<?php



// №3 Дана форма с инпутом. В инпут вводится email. 
// После отправки формы проверьте, 
// корректный email или нет и выведите информацию об этом на экран.

?>
<!-- <form action="" autocomplete="off" name="registreation_form"  method="post">
        <input type="email" placeholder="Գրեք Ձեր էլ հասցեն " name="email"><br><br>
        <input type="submit" value="ՈԻղարկել">
        <input type="reset" value="Ջնջել">
        </form> -->
<?php



// №4 Дана форма с кнопкой и инпутом. В инпут вводится число, 
// например, '12345'. После отправки формы разбейте число на
//  цифры и каждую цифру выведите в своем теге li:

?>
<!-- <ul>
	<li>1</li>
	<li>2</li>
	<li>3</li>
	<li>4</li>
	<li>5</li>
</ul> -->



<!-- <form action="" method="post">
	<input name="test">
	<input name ="submit"  type="submit" />
</form> -->


<?php

// // $num = $_POST;

//     if (!empty($_POST['submit'])) {

		

// $arr = str_split($_POST['test']);


// echo '<ul>';
// 	foreach ($arr as $user) {
		
// 		echo "<li>{$user}</li>";
		
// 	}
// echo '</ul>';
// 	}



// Уровень 5.5 задачника PHP



// №1 Дана форма с двумя инпутами. В инпуты вводятся числа. 
// После отправки формы заполните массив целыми числами от 
// первого введеного числа до последнего.

?>

<!-- <form action="" method="post">
	<input  name="test1" >
	<input  name="test2" >
	<input name ="btn"  type="submit" value = "Подсичать" />
</form> -->

<?php
// if (!empty($_POST)) {
// var_dump(range($_POST['test1'], $_POST['test2']));
	
// }



// №2 Дана форма с инпутом. В инпут вводится строка.
//  После отправки формы выведите в абзац последний символ введенной строки.

?>

<!-- <form action="" method="post">
	<input  name="test" >
	<input name ="btn"  type="submit" value = "Подсичать" />
</form> -->

<?php
// if (!empty($_POST)) {
	
	?>
	<!-- <p>  -->
		<?php
	// echo mb_substr($_POST['test'], -1, 1);
	?> 
	<!-- </p> -->
	<?php
// }
	



// №3 По заходу на страницу выведите список ul, 
// заполненный числами от 1 до 10.


// 	$data = range(1, 10);


// 	foreach ($data as $user) {
		
// 		echo "<ul>{$user}</ul>";
		
// 	}



// №4 Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31.
//  После отправки формы выведите в первый абзац год, во второй абзац - месяц,
//   в третий день.

?>

<!-- <form action="" method="post">
	<input type="date" name="test1" >
	<input name ="btn"  type="submit"  />
</form> -->


<?php

// if (!empty( $_POST['test1'])) {
//     $date1 = $_POST['test1'];

// $date = date_create($date1);
// echo "<p>";
// echo date_format($date,('Y'));
// echo "</p>";
// echo "<p>";
// echo date_format($date,('m'));
// echo "</p>";
// echo "<p>";
// echo date_format($date,('d'));
// echo "</p>";
// }





// №5 С помощью чекбокса спросите у пользователя, есть ли ему уже 18 лет.
//  Если есть, то выведите следующий текст:

?>
<!-- <div class="adult">
	<h2>for adult</h2>
	<p>
		text text text
	</p>
</div>
А если нет, то выведите следующий текст:

<div class="child">
	<h2>for child</h2>
	<p>
		text text text
	</p>
</div>



<form action="" method="post">
<label> Вас уже 18 лет <input type="checkbox" name="checkbox"></label>
<input name ="btn"  type="submit" value = "Подсичать" />
</form>  -->

<?php

// if (!empty($_POST['checkbox'])) {
// 	echo "<div class='adult'>
// 	<h2>for adult</h2>
// 	<p>
// 		text text text
// 	</p>
// </div>";
// }else{
// 	echo "<div class='child'>
// 	<h2>for child</h2>
// 	<p>
// 		text text text
// 	</p>
// </div>";
// }




// Уровень 5.6 задачника PHP



// №1 Дана форма с инпутом. Сделайте так, чтобы после отправки формы 
// в инпуте оставался введенный текст.


?>

<!-- <form action="" method="post">
	<input  name="test1" value =  -->
	<?php
	//  echo $_POST['test1'] ;
	 ?>
	 <!-- />
	<input name ="btn"  type="submit" value = "Подсичать" />
</form> -->

<?php

// if (!empty($_POST['test1'])) {
	
// }



// №2 Дана форма с текстареа.
//  В него вводится текст со словами.
//   После отправки формы выведите в абзац количество слов во этом тексте.


?>

 <!-- <form action="" method="post">
	<textarea  name="test">

</textarea>
	 <input name ="btn"  type="submit" value = "Подсичать" />
</form> -->

<?php
// if (!empty($_POST)) {


// echo str_word_count($_POST['test']);


// }


// №3 Дана форма с инпутом. В инпут вводится год.
//  После отправки формы определите, 
//  введен високосный год или нет и выведите информацию об этом в абзац.

?>

 
<!-- <form action="" method="post">
<input  name="test" >

	 <input name ="btn"  type="submit" value = "Подсичать" />
</form> -->

<?php
// if (!empty($_POST)) {

//    function isleap( $year )
// {
//     if( $year % 4 == 0 )
//         # Год високосный
//         echo "<p> Год високосный </p>";
//     else
//         # Год не високосный
//         echo "<p> Год не високосный </p>";
// }
// echo isleap($_POST['test']);

// }



// №4 Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31.
//  После отправки формы выведите в абзац день недели, 
//  соответствующий этой дате.


 
// $dayOfWeek = '';

// // Если форма отправлена
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $date = $_POST['date'];

//     // Проверяем корректность формата даты
//     if (DateTime::createFromFormat('Y-m-d', $date)) {
//         // Создаем объект DateTime и получаем день недели
//         $dayOfWeek = date('l', strtotime($date));
//     } else {
//         $dayOfWeek = 'Некорректная дата';
//     }
// }
?>

    <!-- <form method="POST">
        <label for="date">Введите дату (ГГГГ-ММ-ДД):</label><br>
        <input type="date" id="date" name="date" required><br><br>
        <button type="submit">Отправить</button>
    </form> -->

    <?php 
	// if ($dayOfWeek):
	 ?>
        <!-- <p>День недели:  -->
			<?php
			//  echo $dayOfWeek ;
			 ?>
			 <!-- </p> -->
    <?php 
// endif; 




// №5 По заходу на страницу выведите в виде ul список всех годов за
//  сто лет назад и вперед.


// $date= date('Y');

// for ($i=$date - 100; $i <=$date + 100  ; $i++) { 
//     echo "<ul>$i </ul>"."<br>";
// }




// Уровень 5.7 задачника PHP



// №1 При обновлении страницы сгенерируйте пять инпутов со случайными числами.


// for ($i=1; $i <= 5; $i++) { 
// 	$n = mt_rand(1, 5);
// 	    echo  "<input  name= {$i}  value= {$n}  >";
		
// 	}




// №2 Дана форма с текстареа. Сделайте так,
//  чтобы после отправки формы в текстареа оставался введенный текст.

?>
  <!-- <form action="" method="GET">
	<textarea name="test"> -->
		<?php
		//  echo $_GET['test'] ?? '';
		 ?>
		 <!-- </textarea>
	<input type="submit">
</form>  -->


<?php



// №3 Дана форма с инпутами. В инпуты вводятся данные. 
// Привяжите к каждому инпуту свое правило валидации.
//  После отправки формы, если данные в инпуте некорретны,
//   выведите над ним сообщение об этом.

  
// // Инициализируем массив ошибок
// $errors = [
//     'name' => '',
//     'email' => '',
//     'age' => '',
// ];

// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Валидация имени (должно быть не пустым)
//     $name = trim($_POST['name']);
//     if (empty($name)) {
//         $errors['name'] = 'Имя обязательно для заполнения.';
//     }

//     // Валидация email (должен быть корректным)
//     $email = trim($_POST['email']);
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errors['email'] = 'Введите корректный email.';
//     }

//     // Валидация возраста (должен быть числом от 1 до 120)
//     $age = trim($_POST['age']);
//     if (!is_numeric($age) || $age < 1 || $age > 120) {
//         $errors['age'] = 'Возраст должен быть числом от 1 до 120.';
//     }
// }
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Валидация формы</title>
    <style>
        .error {
            color: red;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

    <form method="POST"> -->
        <!-- Поле для имени -->
        <div>
            <?php 
			// if ($errors['name']): 
			?>
                <!-- <p class="error"> -->
					<?php 
				// echo	$errors['name'] ;
					?>
					<!-- </p> -->
            <?php 
		// endif; 
		?>
            <!-- <label for="name">Имя:</label><br>
            <input type="text" id="name" name="name" value=" -->
			<?php 
		// echo	htmlspecialchars($_POST['name'] ?? ''); 
			?>
			<!-- "><br><br>
        </div> -->

        <!-- Поле для email -->
        <!-- <div> -->
            <?php 
			// if ($errors['email']):
			 ?>
                <!-- <p class="error"> -->
					<?php
				// echo	$errors['email'];
					 ?>
					 <!-- </p> -->
            <?php 
		// endif; 
		?>
            <!-- <label for="email">Email:</label><br>
            <input type="email" id="email" name="email" value=" -->
			<?php 
		// echo	htmlspecialchars($_POST['email'] ?? '') ;
			?>
			<!-- "><br><br>
        </div> -->

        <!-- Поле для возраста -->
        <!-- <div> -->
            <?php
			//  if ($errors['age']):
			  ?>
                <!-- <p class="error"> -->
					<?php
				// echo	$errors['age'] ;
					?>
					<!-- </p> -->
            <?php 
		// endif; 
		?>
            <!-- <label for="age">Возраст:</label><br>
            <input type="number" id="age" name="age" value=" -->
			<?php 
		// echo	htmlspecialchars($_POST['age'] ?? '') ;
			?>
			<!-- "><br><br>
        </div>

        <button type="submit">Отправить</button>
    </form>
	</body>
	</html> -->


<?php


// №4 Дана форма с инпутом. В инпут вводится число.
//  После отправки формы получите массив делителей числа и
//   выведите их в абзац через запятую.

?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit" />
</form> -->

<?php

// if (!empty($_POST)) {

// 	function numDiv($num1){
// 		$i = 0;
// 		$ArrDiv = [];
		
// 		for ($num2= 1; $num2 <=$num1 ; $num2++) { 
// 		  if(($num1 % $num2) == 0) {
// 		   $ArrDiv[$i] =$num1 / $num2;
// 		   $i++;
		
// 		  }
// 		}
	
// 		$str = implode(",", $ArrDiv);
		
// 		return "<p>{$str}</p>";
	
// 		}
 
// var_dump (numDiv($_POST['test1']));
// }


// №5 Дана форма с двумя инпутами. В инпуты вводятся числа.
// После отправки формы получите массив общих делителей этих чисел и
//  выведите их в виде списка ul.


?>

<!-- <form action="" method="post">
<input  name="test1">
<input  name="test2">

		<input name ="btn"  type="submit"  />
</form> -->

<?php

// function generalArrDiv($num1, $num2){
// $i = 0;
// $ArrDiv1 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//  if(($num1 % $num) == 0) {
//   $ArrDiv1[$i] =$num1 / $num;
//   $i++;

//  }
// }
// $i = 0;
// $ArrDiv2 = [];

// for ($num= 1; $num <=$num1 ; $num++) { 
//  if(($num2 % $num) == 0) {
//   $ArrDiv2[$i] =$num2 / $num;
//   $i++;

//  }
// }

// $array1 =$ArrDiv1;
// $array2 =$ArrDiv2;
// $result = array_intersect($array2, $array1);   // մասսիվները խաչվումեն 
// // return $result;
// foreach ($result as $user) {
//    echo "<ul>{$user}</ul>";
   
// }

// }
// var_dump(generalArrDiv($_POST['test1'], $_POST['test2']));




// №6 Дана форма с инпутом. В инпут вводится номер телефона.
//  После отправки формы проверьте формат введенного номера.
//   Если он корректный, то покрасьте границу инпута в зеленый цвет, 
//   а если некорректный - то в красный.


  
// $borderColor = ''; // Переменная для хранения цвета границы
// $phoneError = '';  // Сообщение об ошибке

// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $phone = trim($_POST['phone']);

//     // Проверяем формат номера телефона (пример: +7(999)123-45-67 или 89991234567)
//     if (preg_match('/^(\+?\d{1,3})?[\s-]?\(?\d{3}\)?[\s-]?\d{3}[\s-]?\d{2}[\s-]?\d{2}$/', $phone)) {
//         $borderColor = 'green'; // Корректный номер
//     } else {
//         $borderColor = 'red';   // Некорректный номер
//         $phoneError = 'Некорректный номер телефона!';
//     }
// }
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Проверка номера телефона</title>
    <style>
        input {
            width: 200px;
            height: 30px;
            font-size: 16px;
        }
        .error {
            color: red;
            margin-top: 5px;
        }
    </style>
</head>
<body>

    <form method="POST">
        <label for="phone">Введите номер телефона:</label><br>
        <input 
            type="text" 
            id="phone" 
            name="phone" 
            value=" -->
			<?php
		// echo	htmlspecialchars($_POST['phone'] ?? '') ;
			?>
			<!-- "
            style="border: 2px solid  -->
			<?php 
		// echo	$borderColor ;
			?>
			<!--  ;"><br>  -->
        <?php 
		// if ($phoneError): 
		?>
            <!-- <p class="error"> -->
				<?php
			// echo	$phoneError ;
				?>
				<!-- </p> -->
        <?php
	//  endif; 
	 ?>
        <!-- <button type="submit">Проверить</button>
    </form>

</body>
</html> -->



// Уровень 5.8 задачника PHP




// №1 Дана форма с селектом. Сделайте так, 
// чтобы после отправки формы селект сохранял выбор пользователя.

?>

	<!-- <form action="" method="GET">
	<select name="test">
		<option value="1" <?php
			// if (!empty($_GET['test']) and $_GET['test'] === '1') {
			// 	echo 'selected';
			// }
		?>>item1</option>
		<option value="2" <?php
			// if (!empty($_GET['test']) and $_GET['test'] === '2') {
			// 	echo 'selected';
			// }
		?>>item2</option>
		<option value="3" <?php
			// if (!empty($_GET['test']) and $_GET['test'] === '3') {
			// 	echo 'selected';
			// }
		?>>item3</option>
	</select>
	<input type="submit">
</form> -->


<?php



// №2 Спросите у пользователя день его рождения в формате 2025-12-31. 
// После отправки формы выведите, сколько дней осталось до его
//  ближайшего Дня Рождения


?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->



<?php
 
	
// if (!empty($_POST)) {

// // $birthday = '1990.05.09';
// $birthday = $_POST['test1'];

// $bd = explode('.', $birthday);
// $bd = mktime(0, 0, 0, $bd[1], $bd[2], date('Y') + ($bd[1].$bd[2] <= date('md')));
// $days_until = ceil(($bd - time()) / 86400);

// echo $days_until;




// // // $birthday = '09.05.1990';
// // $birthday = $_POST['test1'];
// // $cd = new \DateTime('today'); // Сегодня, время 00:00:00
// // $bd = new \DateTime($birthday); // Объект Дата дня рождения
// // $bd->setDate($cd->format('Y'), $bd->format('m'), $bd->format('d')); // Устанавливаем текущий год, оставляем месяц и день
// // $tmp = $cd->diff($bd); // Разница дат
// // if($tmp->invert){ // Если в этом году уже был (разница "отрицательная")
// // 	$bd->modify('+1 year'); // Добавляем год
// // 	$tmp = $cd->diff($bd); // Снова вычисляем разницу
// // }
// // echo $tmp->days; // Результат в днях

// }




// №3 Дан массив. Сделайте так, чтобы при обновлении страницы в
//  абзац выводился случайный элемент массива.



// $arr = [1, 2, 3, 4, 5];


// $key = array_rand($arr);

// var_dump ("<p> $arr[$key] </p>");




// №4 Дана форма с инпутом. 
// В инпут через запятую вводятся числа. 
// После отправки формы найдите сумму введенных чисел и выведите ее в абзац.


?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->

<?php


// if (!empty($_POST)) {



// $str = $_POST['test1'];

// $arr = explode(",", $str) ;

// $sum  = array_sum($arr);
// var_dump ("<p> $sum </p>");
// }




// №5 Дана форма с инпутом. В инпут через запятую вводятся числа.
//  После отправки формы проверьте, есть ли среди введенных число 13.

?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->

<?php


// if (!empty($_POST)) {

// $str = $_POST['test1'];
// $arr = explode(",", $str) ;

// if (array_search( '13', $arr)){
// echo	"Есть  среди введенных число 13" ;
// }else{
// 	echo	"Нет  среди введенных число 13" ;
// }

// }




// №6 Дана форма с инпутом. В инпут вводится число из шести цифр.
//  После отправки формы проверьте,
//   что число представляет собой счастливый билет,
//    то есть сумма первых трех цифр равна сумме вторых трех цифр.


?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->

<?php



// if (!empty($_POST)) {

// $num = $_POST['test1'];
// $arr = str_split($num) ;
// $arr1= array_slice($arr, 0, 3);
// $arr2= array_slice($arr, -3, 3);

// if (array_sum($arr1) == array_sum($arr2)){
// echo	"Это число представляет собой счастливый билет" ;
// }

// }





// Уровень 5.9 задачника PHP



// №1 По заходу на страницу сформируйте HTML таблицу размером 10 на 10.



// for ($i=1; $i <=10 ; $i++) { 
	
 ?>
   
	<!-- <table border="1">
        <tbody>
            <tr> -->
				<?php
			// for ($j=1; $j <= 10 ; $j++) { 
			// 	echo "<td>{$j}</td>";
			// }
               ?>
               
            <!-- </tr>
			</tbody>
			</table>  -->
    <?php
//  } 
 




// №2 Дана форма с чекбоксом. Сделайте так,
//  чтобы после отправки формы чекбокс сохранял выбор пользователя.


?>

<!-- <form action="" method="GET">
	<input type="hidden" name="flag" value="0">
	<input
		type="checkbox"
		name="flag"
		value="1" -->
		<?php 
		// if (!empty($_GET['flag'])) echo 'checked' 
		?>
	<!-- >
	<input type="submit">
</form> -->

<?php




// №3 Дана форма с инпутом. В инпут вводится дата в формате 2025-12-31. 
// После отправки формы сделайте так, чтобы в инпуте стала дата в формате 
// 31.12.2025.

?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->



<?php
 

// if (!empty($_POST)) {

// 	$date = date_create($_POST['test1']);
// 	echo date_format($date, 'd.m.Y');

// }



// №4 Дана форма с текстареа. В него вводится текст со знаками препинания.
//  После отправки формы запишите каждое предложение из текста в свой тег li.

?>


<!-- <form action="" method="POST">
<textarea  name="test">

</textarea>
<input name ="btn"  type="submit"  />
</form>  -->

<?php



// if (!empty($_POST)) {

// $str = $_POST['test'];
// $arr = explode(".", $str);
// foreach ($arr as $elem) {

// 		echo "<li>{$elem}</li>";

// }
// }




// Уровень 5.10 задачника PHP



// №1 Дан массив со словами. Дана форма с инпутом.
//  В инпут вводится слово. Получите из массива все слова, 
//  которые содержат в себе все буквы введенного слова.
//   Результат выведите в виде списка ul.


?>

<!-- <form action="" method="post">
<input  name="test1">
		 <input name ="btn"  type="submit"  />
</form> -->

<?php

// if (!empty($_POST)) {

// $word = ["aristokrat", "msaopr", "nemxst", "hemllro", "gmaspr", "mgagp", "nsext" ];
// $letters = $_POST['test1'];
// $result = ' ';
// foreach ($word as $elem) {
// 	$wordExploded  = mb_str_split("<li>$elem</li>");


// $lettersExploded = mb_str_split($letters);    



// echo count(array_diff($lettersExploded, $wordExploded)) > 0 ? ''."<br>" : implode("", $wordExploded) ."<br>"; "<ul>{$wordExploded}</ul>" ."<br>";
// }
// }




// №2 По заходу на страницу сгенерируйте N абзацев так, 
// чтобы они содержали случайный текст и были покрашены в случайный цвет.


// // Количество абзацев
// $N = 5; // Вы можете изменить количество абзацев

// // Массив случайных текстов
// $texts = [
//     'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
//     'Vivamus lacinia odio vitae vestibulum vestibulum.',
//     'Cras ultricies ligula sed magna dictum porta.',
//     'Curabitur aliquet quam id dui posuere blandit.',
//     'Pellentesque in ipsum id orci porta dapibus.',
//     'Sed porttitor lectus nibh.',
//     'Proin eget tortor risus.',
//     'Donec sollicitudin molestie malesuada.',
// ];

// // Функция для генерации случайного цвета в формате HEX
// function getRandomColor() {
//     return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
// }

// // Функция для получения случайного текста из массива
// function getRandomText($texts) {
//     return $texts[array_rand($texts)];
// }
?>


<?php
// // Генерируем N абзацев с случайным текстом и цветом
// for ($i = 0; $i < $N; $i++): 
//     $color = getRandomColor();
//     $text = getRandomText($texts);
?>
    <!-- <p style="color:  -->
	<?php
	// echo $color ;
	?>
	<!-- ; font-size: 18px;"> -->
        <?php
		// echo $text ;
		 ?>
    <!-- </p> -->
<?php 
// endfor; 







// №3 Дана форма с двумя текстареа. В первый текстареа вводится русский текст.
//  Сделайте так, чтобы после отправки формы во втором текстареа появился 
//  транслит этого текста.



// if (!empty($_POST)) {


// function translit($value)
// {
// 	$converter = array(
// 		'А' => 'A',    'Б' => 'B',    'В' => 'V',    'Г' => 'G',    'Д' => 'D',
// 		'Е' => 'E',    'Ё' => 'Yo',   'Ж' => 'Zh',   'З' => 'Z',    'И' => 'I',
// 		'Й' => 'J',    'К' => 'K',    'Л' => 'L',    'М' => 'M',    'Н' => 'N',
// 		'О' => 'O',    'П' => 'P',    'Р' => 'R',    'С' => 'S',    'Т' => 'T',
// 		'У' => 'U',    'Ф' => 'F',    'Х' => 'X',    'Ц' => 'Cz',   'Ч' => 'Ch',
// 		'Ш' => 'Sh',   'Щ' => 'Shh',  'Ъ' => '``',   'Ы' => 'Y`',   'Ь' => '`',
// 		'Э' => 'E`',   'Ю' => 'Yu',   'Я' => 'Ya',   
 
// 		'а' => 'a',    'б' => 'b',    'в' => 'v',    'г' => 'g',    'д' => 'd',
// 		'е' => 'e',    'ё' => 'yo',   'ж' => 'zh',   'з' => 'z',    'и' => 'i',
// 		'й' => 'j',    'к' => 'k',    'л' => 'l',    'м' => 'm',    'н' => 'n',
// 		'о' => 'o',    'п' => 'p',    'р' => 'r',    'с' => 's',    'т' => 't',
// 		'у' => 'u',    'ф' => 'f',    'х' => 'x',    'ц' => 'cz',   'ч' => 'ch',
// 		'ш' => 'sh',   'щ' => 'shh',  'ъ' => '``',   'ы' => 'y`',   'ь' => '`',
// 		'э' => 'e`',   'ю' => 'yu',   'я' => 'ya'
// 	);
 
// 	$value = strtr($value, $converter);
// 	// $value = ;
// 	return $value;
// }
 
// // echo translit(''Съешь же ещё этих мягких французских булок, да выпей чаю.'');
// echo translit($_POST['test']);

// }



?>

<!-- <form action="" method="POST">
<textarea  name="test">

</textarea>
<textarea  name="test1">
	<?php
	//  echo translit($_POST['test']) ?? '' ; 
	 ?>

</textarea>

<button   type="submit" >Send</button> 
</form>  -->


<?php



// №4 Дана форма с группой радио. Сделайте так,
//  чтобы после отправки формы радио сохраняли выбор пользователя.


?>

<!-- <form action="" method="GET">
	<input type="radio" name="radio" value="1" <?php
		// if (!empty($_GET['radio']) and $_GET['radio'] === '1') {
		// 	echo 'checked';
		// }
	?>>
	<input type="radio" name="radio" value="2" <?php
		// if (!empty($_GET['radio']) and $_GET['radio'] === '2') {
		// 	echo 'checked';
		// }
	?>>
	<input type="radio" name="radio" value="3" <?php
		// if (!empty($_GET['radio']) and $_GET['radio'] === '3') {
		// 	echo 'checked';
		// }
	?>>
	<input type="submit"> 
</form> -->


<?php



// №5 Дана форма с текстареа и инпутом. 
// В текстареа вводится текст со словами. 
// В инпут вводится слово. По отправки формы выведите на экран,
//  сколько раз встречается это слово в веденном тексте


?>
 
<!-- <form action="" method="post">
<textarea  name="test">

</textarea>
<input  name="test1">

		 <input name ="btn"  type="submit"  />
</form> -->


<?php


// if (!empty($_POST)) {


// // $text = 'Съешь ещё - этих мягких французских булок, да ещё выпей же чаю.';
// echo mb_substr_count($_POST['test'], $_POST['test1']);
// }





// №6 Дана форма с текстареа. В текстареа вводится текст. 
// После отправки формы выведите слова этого текста в алфавитном порядке и
//  без дублей.


?>
 
<!-- <form action="" method="post">
<textarea  name="test">

</textarea>

		 <input name ="btn"  type="submit"  />
</form> -->


<?php


// if (!empty($_POST)) {

// // $str = "ba cd as de ed cd de ed fg ";


// $str = $_POST['test'];

// $arr = explode(" ", $str);
//  asort($arr);
// var_dump (array_unique($arr));

// }




// Уровень 6.2 задачника PHP





// №1 Даны переменные:


// 	$rows = 4;
// 	$cols = 3;

// По заходу на страницу сгенерируйте HTML таблицу,
//  количество рядов и колонок будет взято из приведенных выше переменных.


//     $rows = 4;
// 	$cols = 3;

// for ($i=1; $i <=$rows ; $i++) { 
	
?>
   
<!-- <table border="1">
	<tbody>
		<tr> -->
			<?php
		// for ($j=1; $j <= $cols; $j++) { 
		// 	echo "<td>{$j}</td>";
		// }
		   ?>
		   
		<!-- </tr>
		</tbody>
		</table>  -->
<?php
//  } 




// №2 По заходу на страницу сгенерируйте HTML таблицу с заданным
//  количеством рядов и колонок, чтобы в ячейках стояли их порядковые номера.


	//  for ($i=1; $i <=10 ; $i++) { 
	
		?>
		  
		   <!-- <table border="1" >
			   <tbody>
				   <tr> -->
					   <?php
				//    for ($j=1; $j <= 10 ; $j++) { 
				//    	echo "<td>{$i}</td>";
				//    }
					  ?>
					  
				   <!-- </tr>
				   </tbody>
				   </table>  -->
		   <?php
	    // } 



		// for ($i=1; $i <=10 ; $i++) { 
	
			?>
			  
			   <!-- <table border="1" >
				   <tbody>
					   <tr> -->
						   <?php
					// 			echo "<td>{$i}</td>";
					//    for ($j=1; $j <= 10 ; $j++) { 
					// 	   echo "<td></td>";
					//    }
										 
	
						  ?>
						  
					   <!-- </tr>
					   </tbody>
					   </table>  -->
			   <?php
			// } 


// №3 По заходу на страницу сгенерируйте HTML таблицу с 
// заданным количеством рядов и колонок так, 
// чтобы в ячейках стояли номера их рядов и колонок.


	//  for ($i=1; $i <=10 ; $i++) { 
	
		?>
		  
		   <!-- <table border="1" >
			   <tbody>
				   <tr> -->
					   <?php
				//    for ($j=1; $j <= 10 ; $j++) { 
				//    	echo "<td>{$i},{$j}</td>";
				//    }
					  ?>
					  
				   <!-- </tr>
				   </tbody>
				   </table>  -->
		   <?php
	    // } 




// №4 Дан массив:

//     [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// 	]
// По заходу на страницу создайте таблицу,
//  заполненную данными из этого массива.
		
		
		
		// $array = 
		// [
		// 	[1, 2, 3],
		// 	[4, 5, 6],
		// 	[7, 8, 9],
		// ];
			 
		// for ($i=0; $i <=2 ; $i++) { 
			
			?>
			  
			   <!-- <table border="1" >
				   <tbody>
					   <tr> -->
						   <?php
					//    for ($j=0; $j <= 2 ; $j++) { 
					// 	echo "<td>{$array[$i][$j]}</td>";
					// 	   }
										 
		
						  ?>
						  
					   <!-- </tr>
					   </tbody>
					   </table>  -->
			   <?php
			// } 	





// Уровень 6.3 задачника PHP




// №1 Дана форма с инпутом. В инпут вводится дата. 
// После отправки формы определите, была уже дата в текущем году.
//  Результат выведите в абзац.

 

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $inputDate = $_POST['date']; // Получаем дату из формы
//     $inputDateTime = strtotime($inputDate); // Преобразуем дату в формат времени
//     $currentYear = date("Y"); // Получаем текущий год
//     $currentDate = strtotime(date("Y-m-d")); // Текущая дата

//     // Преобразуем введенную дату в дату текущего года
//     $inputDateThisYear = strtotime(date("$currentYear-m-d", $inputDateTime));

//     // Проверяем, была ли эта дата уже в текущем году
//     if ($inputDateThisYear < $currentDate) {
//         $result = "Введенная дата уже прошла в текущем году.";
//     } elseif ($inputDateThisYear == $currentDate) {
//         $result = "Введенная дата — это сегодняшняя дата.";
//     } else {
//         $result = "Введенная дата еще не наступила в текущем году.";
//     }
// }
?>

<!-- 
    <form method="POST">
        <label for="date">Введите дату:</label>
        <input type="date" id="date" name="date" required>
        <button type="submit">Проверить</button>
    </form> -->

    <?php 
	// if (isset($result)) :
	 ?>
        <!-- <p> -->
			<?php
			//  echo $result; 
			 ?>
			 <!-- </p> -->
    <?php
//  endif; 




// №2 Дан следующий массив:


// 	$arr = [
// 		['href'=>'page1.html', 'text'=>'text1'],
// 		['href'=>'page2.html', 'text'=>'text2'],
// 		['href'=>'page3.html', 'text'=>'text3'],
// 	];

// Сформируйте с его помощью следующий HTML код:
?>
<!-- <ul>
	<li><a href="page1.html">text1</a></li>
	<li><a href="page2.html">text2</a></li>
	<li><a href="page3.html">text3</a></li>
</ul> -->

<?php

    // $arr = [
    //     ['href'=>'page1.html', 'text'=>'text1'],
    //     ['href'=>'page2.html', 'text'=>'text2'],
    //     ['href'=>'page3.html', 'text'=>'text3'],
    // ];

    // echo "<ul>\n";
    // foreach ($arr as $item) {
    //     echo "\t<li><a href=\"{$item['href']}\">{$item['text']}</a></li>\n";
    // }
    // echo "</ul>";



	// Уровень 6.4 задачника PHP




	// №1 Дана форма с инпутом. В инпут вводится год.
	//  Выведите в список ul даты всех пятниц 13-е в заданном году.
	

 ?>
	 
		<!-- <form method="POST">
			<label for="year">Введите год:</label>
			<input type="number" id="year" name="year" required>
			<button type="submit">Показать пятницы 13-е</button>
		</form> -->
	
		<?php
		// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 	$year = intval($_POST['year']);
	
		// 	echo "<ul>\n";
		// 	for ($month = 1; $month <= 12; $month++) {
		// 		// Проверяем, является ли 13-е число пятницей
		// 		if (date('N', strtotime("$year-$month-13")) == 5) {
		// 			echo "<li>Пятница, 13-е " . date('F', strtotime("$year-$month-13")) . " $year</li>\n";
		// 		}
		// 	}
		// 	echo "</ul>\n";
		// }



// №2 Дана форма с текстареа. В текстареа вводится текст. 
// Получите первое слово каждого предложения в тексте и выведите на экран.

?>

		<!-- <form method="POST">
        <label for="text">Введите текст:</label><br>
        <textarea id="text" name="text" rows="5" cols="40" required></textarea><br>
        <button type="submit">Показать первые слова</button>
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     $text = trim($_POST['text']); // Получаем текст из формы

    //     // Разбиваем текст на предложения с помощью регулярного выражения
    //     $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

    //     echo "<ul>\n";
    //     foreach ($sentences as $sentence) {
    //         // Извлекаем первое слово из предложения
    //         $words = explode(' ', trim($sentence));
    //         if (!empty($words[0])) {
    //             echo "<li>" . htmlspecialchars($words[0]) . "</li>\n";
    //         }
    //     }
    //     echo "</ul>\n";
    // }



// 	№3 Даны 3 инпута. В них вводятся числа. Проверьте,
//  что эти числа являются тройкой Пифагора: 
//  квадрат самого большого числа должен быть равен 
//  сумме квадратов двух остальных.


?>

    <!-- <form method="POST">
        <label for="num1">Введите первое число:</label>
        <input type="number" id="num1" name="num1" required><br>

        <label for="num2">Введите второе число:</label>
        <input type="number" id="num2" name="num2" required><br>

        <label for="num3">Введите третье число:</label>
        <input type="number" id="num3" name="num3" required><br>

        <button type="submit">Проверить</button>
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //     // Получаем числа из инпутов
    //     $num1 = intval($_POST['num1']);
    //     $num2 = intval($_POST['num2']);
    //     $num3 = intval($_POST['num3']);

    //     // Находим самое большое число
    //     $numbers = [$num1, $num2, $num3];
    //     sort($numbers); // Сортируем числа, чтобы $numbers[2] было самым большим

    //     $a = $numbers[0];
    //     $b = $numbers[1];
    //     $c = $numbers[2];

    //     // Проверяем, является ли это тройкой Пифагора
    //     if ($a**2 + $b**2 == $c**2) {
    //         echo "<p>Числа $a, $b и $c образуют тройку Пифагора.</p>";
    //     } else {
    //         echo "<p>Числа $a, $b и $c НЕ образуют тройку Пифагора.</p>";
    //     }
    // }
    



	// №4 Дан следующий массив:


	// 	$arr = [
	// 		['name' => 'user1', 'age' => 30, 'salary' => 500],
	// 		['name' => 'user2', 'age' => 31, 'salary' => 600],
	// 		['name' => 'user3', 'age' => 32, 'salary' => 700],
	// 	];
	
	// Сформируйте с помощью этого массива следующий код:
	
	?>

	<!-- <table>
		<tbody>
			<tr>
				<td>1</td>
				<td>user1</td>
				<td>30</td>
				<td>500</td>
			</tr>
			<tr>
				<td>2</td>
				<td>user2</td>
				<td>31</td>
				<td>600</td>
			</tr>
			<tr>
				<td>3</td>
				<td>user3</td>
				<td>32</td>
				<td>700</td>
			</tr>
		</tbody>
	</table> -->

	<?php
	
	
	// $arr = [
	// 	['name' => 'user1', 'age' => 30, 'salary' => 500],
	// 	['name' => 'user2', 'age' => 31, 'salary' => 600],
	// 	['name' => 'user3', 'age' => 32, 'salary' => 700],
	// ];
	
	// echo "<table>\n";
	// echo "\t<tbody>\n";
	
	// foreach ($arr as $index => $user) {
	// 	echo "\t\t<tr>\n";
	// 	echo "\t\t\t<td>" . ($index + 1) . "</td>\n"; // Номер строки
	// 	echo "\t\t\t<td>" . $user['name'] . "</td>\n"; // Имя пользователя
	// 	echo "\t\t\t<td>" . $user['age'] . "</td>\n"; // Возраст
	// 	echo "\t\t\t<td>" . $user['salary'] . "</td>\n"; // Зарплата
	// 	echo "\t\t</tr>\n";
	// }
	
	// echo "\t</tbody>\n";
	// echo "</table>";




	// Уровень 6.5 задачника PHP





	// №1 Дана форма с инпутом. В инпут вводится дата рождения юзера в
	//  формате год-месяц-день. После отправки формы выведите в абзац, 
	//  сколько полных лет юзеру.
	
	?>

	
		<!-- <form method="POST">
			<label for="dob">Введите дату рождения (ГГГГ-ММ-ДД):</label>
			<input type="date" id="dob" name="dob" required>
			<button type="submit">Рассчитать возраст</button>
		</form> -->
	
		<?php
		// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 	// Получаем дату рождения из инпута
		// 	$dob = $_POST['dob'];
	
		// 	// Преобразуем дату в объект DateTime
		// 	$birthDate = new DateTime($dob);
		// 	$currentDate = new DateTime(); // Текущая дата
	
		// 	// Вычисляем разницу между текущей датой и датой рождения
		// 	$age = $currentDate->diff($birthDate)->y;
	
		// 	// Выводим результат
		// 	echo "<p>Пользователю полных лет: $age</p>";
		// }
		



// №2 Дана форма двумя инпутами. В инпуты через запятую вводятся числа.
// После отправки формы выведите через запятую в абзац числа, 
// которые есть в обоих инпутах.
	   
	   
	   ?>


		   <!-- <form method="POST">
			   <label for="input1">Введите числа через запятую (первый инпут):</label>
			   <input type="text" id="input1" name="input1" required><br>
	   
			   <label for="input2">Введите числа через запятую (второй инпут):</label>
			   <input type="text" id="input2" name="input2" required><br>
	   
			   <button type="submit">Найти общие числа</button>
		   </form> -->
	   
		   <?php
		//    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		// 	   // Получаем данные из инпутов
		// 	   $input1 = $_POST['input1'];
		// 	   $input2 = $_POST['input2'];
	   
		// 	   // Преобразуем строки в массивы, удаляя пробелы и разделяя по запятой
		// 	   $arr1 = array_map('trim', explode(',', $input1));
		// 	   $arr2 = array_map('trim', explode(',', $input2));
	   
		// 	   // Находим пересечение массивов
		// 	   $common = array_intersect($arr1, $arr2);
	   
		// 	   // Выводим результат через запятую
		// 	   if (!empty($common)) {
		// 		   echo "<p>Общие числа: " . implode(', ', $common) . "</p>";
		// 	   } else {
		// 		   echo "<p>Нет общих чисел.</p>";
		// 	   }
		//    }
		  




// №3 Дан следующий массив:

		
			// $arr = [
			// 	'text1',
			// 	'text2',
			// 	'text3',
			// ];
		
		// Сформируйте с его помощью следующий HTML код:
		
?>

		<!-- <ul>
			<li><a href="index.php?page=1">text1</a></li>
			<li><a href="index.php?page=2">text2</a></li>
			<li><a href="index.php?page=3">text3</a></li>
		</ul>		 -->
		
		
		<?php
			// $arr = [
			// 	'text1',
			// 	'text2',
			// 	'text3',
			// ];
		
			// echo "<ul>\n";
			// foreach ($arr as $index => $text) {
			// 	// $index + 1 используется для создания номера страницы
			// 	echo "\t<li><a href=\"index.php?page=" . ($index + 1) . "\">$text</a></li>\n";
			// }
			// echo "</ul>";
		
				
			
// №4 Модифицируйте предыдущую задачу так, чтобы ссылка, 
// ведущая на текущую страницу выделялась заданным классом:


?>

<!-- <ul>
	<li><a href="index.php?page=1">text1</a></li>
	<li><a href="index.php?page=2" class="active">text2</a></li>
	<li><a href="index.php?page=3">text3</a></li>
</ul>
			 -->
			
			
			<?php
				// $arr = [
				// 	'text1',
				// 	'text2',
				// 	'text3',
				// ];
			
				// // Получаем текущую страницу, если она указана в параметре, иначе по умолчанию 1
				// $current_page = isset($_GET['page']) ? intval($_GET['page']) : 2;
			
				// echo "<ul>\n";
				// foreach ($arr as $index => $text) {
				// 	$page_number = $index + 1;
				// 	// Проверяем, если текущая страница совпадает с номером ссылки
				// 	$class = ($page_number == $current_page) ? ' class="active"' : '';
					
				// 	echo "\t<li><a href=\"index.php?page=$page_number\"$class>$text</a></li>\n";
				// }
				// echo "</ul>";
			



				// Уровень 6.6 задачника PHP




				// №1 Дан массив. При заходе на страницу GET параметром передается число. 
				// Выведите в абзац элемент массива, номер которого передан GET параметром.
				

				?>

				<!-- <form method="get">
					<label for="number">Введите число:</label>
					<input type="number" id="number" name="number" min="0" required>
					<button type="submit">Отправить</button>
				</form> -->
				
				<?php
					// // Массив с элементами
					// $arr = [
					// 	'Первый элемент',
					// 	'Второй элемент',
					// 	'Третий элемент',
					// 	'Четвертый элемент',
					// ];
				
					// // Получаем номер элемента из GET параметра, если он задан
					// $index = isset($_GET['number']) ? intval($_GET['number']) : -1;
				
					// // Проверяем, существует ли элемент с таким индексом в массиве
					// if ($index >= 0 && $index < count($arr)) {
					// 	// Выводим элемент массива
					// 	echo "<p>" . $arr[$index] . "</p>";
					// } else {
					// 	// Сообщение об ошибке, если элемент не найден
					// 	echo "<p>Элемент с номером $index не найден в массиве.</p>";
					// }





// №2 Дана строка с текстом. Получите процентное содержание каждого
//  символа текста в виде ассоциативного массива,
//   в котором ключами будут символы, а значениями - их процентное содержание.


// function calculateCharPercentage($string) {
//     // Убираем пробелы (если это требуется), для учета только символов
//     $string = str_replace(' ', '', $string);

//     // Подсчитываем общее количество символов
//     $totalChars = strlen($string);

//     // Создаем массив для хранения количества каждого символа
//     $charCount = [];

//     // Подсчитываем количество каждого символа
//     for ($i = 0; $i < $totalChars; $i++) {
//         $char = $string[$i];
//         if (isset($charCount[$char])) {
//             $charCount[$char]++;
//         } else {
//             $charCount[$char] = 1;
//         }
//     }

//     // Вычисляем процентное содержание для каждого символа
//     $charPercentage = [];
//     foreach ($charCount as $char => $count) {
//         $charPercentage[$char] = ($count / $totalChars) * 100;
//     }

//     return $charPercentage;
// }

// // Пример использования
// $text = "Пример текста";
// $result = calculateCharPercentage($text);

// // Вывод результата
// echo "<pre>";
// print_r($result);
// echo "</pre>";





// function calculateCharPercentage($text) {
//     // Убираем пробелы из строки, если нужно учитывать только символы
//     // $text = str_replace(' ', '', $text);

//     $length = mb_strlen($text); // Длина строки (включая многобайтовые символы)
//     $charCount = [];

//     // Подсчет частоты каждого символа
//     for ($i = 0; $i < $length; $i++) {
//         $char = mb_substr($text, $i, 1); // Получаем символ
//         if (isset($charCount[$char])) {
//             $charCount[$char]++;
//         } else {
//             $charCount[$char] = 1;
//         }
//     }

//     // Рассчет процентного содержания
//     foreach ($charCount as $char => $count) {
//         $charCount[$char] = ($count / $length) * 100;
//     }

//     return $charCount;
// }

// // Пример использования
// $text = "Пример текста для анализа!";
// $percentages = calculateCharPercentage($text);

// // Вывод результата
// print_r($percentages);





// №3 Дан следующий массив:

// 	$arr = [
// 		['name' => 'user1', 'age' => 30, 'salary' => 500],
// 		['name' => 'user2', 'age' => 31, 'salary' => 600],
// 		['name' => 'user3', 'age' => 32, 'salary' => 700],
// 	];

// Сформируйте с помощью этого массива следующий код:

?>

<!-- <table>
	<tr>
		<th>имя</th>
		<th>возраст</th>
		<th>зарплата</th>
	</tr>
	<tr>
		<td>user1</td>
		<td>30</td>
		<td>500</td>
	</tr>
	<tr>
		<td>user2</td>
		<td>31</td>
		<td>600</td>
	</tr>
	<tr>
		<td>user3</td>
		<td>32</td>
		<td>700</td>
	</tr>
</table> -->



<?php
    // $arr = [
    //     ['name' => 'user1', 'age' => 30, 'salary' => 500],
    //     ['name' => 'user2', 'age' => 31, 'salary' => 600],
    //     ['name' => 'user3', 'age' => 32, 'salary' => 700],
    // ];

    // echo "<table border='1'>\n";
    // echo "\t<tr>\n";
    // echo "\t\t<th>имя</th>\n";
    // echo "\t\t<th>возраст</th>\n";
    // echo "\t\t<th>зарплата</th>\n";
    // echo "\t</tr>\n";

    // foreach ($arr as $user) {
    //     echo "\t<tr>\n";
    //     echo "\t\t<td>{$user['name']}</td>\n";
    //     echo "\t\t<td>{$user['age']}</td>\n";
    //     echo "\t\t<td>{$user['salary']}</td>\n";
    //     echo "\t</tr>\n";
    // }

    // echo "</table>";
				
	



// 	Уровень 6.7 задачника PHP



// №1 Выведите даты всех выходных дней текущего года в виде списка ul.



// // Определяем текущий год
// $currentYear = date('Y');

// // Определяем первый и последний день года
// $startDate = strtotime("first day of January $currentYear");
// $endDate = strtotime("last day of December $currentYear");

// echo "<ul>\n";

// // Проходим по каждому дню года
// for ($date = $startDate; $date <= $endDate; $date = strtotime('+1 day', $date)) {
//     // Проверяем, является ли день субботой или воскресеньем
//     $dayOfWeek = date('N', $date); // N: 1 (понедельник) - 7 (воскресенье)
//     if ($dayOfWeek == 6 || $dayOfWeek == 7) {
//         // Выводим дату в формате ДД-ММ-ГГГГ
//         echo "\t<li>" . date('d-m-Y', $date) . "</li>\n";
//     }
// }

// echo "</ul>";





// №2 По заходу на страницу выведите в абзац название дня недели последнего дня текущего месяца.



// // Получаем текущий год и месяц
// $currentYear = date('Y');
// $currentMonth = date('m');

// // Определяем последний день текущего месяца
// $lastDayOfMonth = date('t', strtotime("$currentYear-$currentMonth-01")); // t - количество дней в месяце

// // Формируем дату последнего дня текущего месяца
// $lastDate = "$currentYear-$currentMonth-$lastDayOfMonth";

// // Получаем название дня недели для этой даты
// $dayOfWeek = strftime('%A', strtotime($lastDate));

// // Выводим название дня недели в абзац
// echo "<p>Последний день текущего месяца: $dayOfWeek</p>";



// №3 По заходу на страницу заполните селект числами от первого до последнего дня текущего месяца.



// // Получаем текущий год и месяц
// $currentYear = date('Y');
// $currentMonth = date('m');

// // Определяем количество дней в текущем месяце
// $daysInMonth = date('t', strtotime("$currentYear-$currentMonth-01")); // t - количество дней в месяце

// echo "<select>\n";

// // Заполняем select числами от 1 до последнего дня месяца
// for ($day = 1; $day <= $daysInMonth; $day++) {
//     echo "\t<option value=\"$day\">$day</option>\n";
// }

// echo "</select>";




// №4 Дана форма с инпутом. В инпут вводится число.
//  По отправки формы выведите в абзац строку, состоящую из нулей,
//   количество которых равно числу. Например, при вводе 
//   числа 5 у нас должна получится строка '00000'.


// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Получаем введенное число из формы
//     $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

//     // Генерируем строку из нулей
//     $zerosString = str_repeat('0', $number);

//     // Выводим строку
//     echo "<p>Строка: $zerosString</p>";
// }
?>

<!-- HTML форма для ввода числа -->
<!-- <form method="post">
    <label for="number">Введите число:</label>
    <input type="number" id="number" name="number" min="0" required>
    <button type="submit">Отправить</button>
</form> -->


<?php





// Уровень 6.8 задачника PHP


// №1 Дан текст. По заходу на страницу покрасьте каждый символ текста
// в случайный цвет так, чтобы у соседних символов были разные цвета.
//  Результат выведите в абзац.



// // Исходный текст
// $text = "Пример текста для покраски";

// // Функция для генерации случайного цвета
// function getRandomColor() {
//     return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
// }

// // Преобразуем строку в массив символов
// $chars = preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY);

// // Переменная для хранения предыдущего цвета
// $previousColor = '';

// // Начинаем вывод
// echo "<p>";

// // Перебираем каждый символ текста
// foreach ($chars as $char) {
//     // Генерируем случайный цвет
//     do {
//         $currentColor = getRandomColor();
//     } while ($currentColor === $previousColor); // Проверяем, что цвета не совпадают

//     // Выводим символ с назначенным цветом
//     echo "<span style=\"color: $currentColor\">$char</span>";

//     // Запоминаем текущий цвет как предыдущий для следующей итерации
//     $previousColor = $currentColor;
// }

// echo "</p>";



// №2 Дан следующий массив:


// 	$arr = [
// 		['name' => 'prod1', 'price' => 100, 'amount' => 1],
// 		['name' => 'prod2', 'price' => 200, 'amount' => 2],
// 		['name' => 'prod3', 'price' => 300, 'amount' => 3],
// 	];

// Сформируйте с помощью этого массива следующий код:

?>

<!-- <table>
	<thead>
		<tr>
			<th>продукт</th>
			<td>цена</td>
			<td>количество</td>
			<td>сумма</td>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>prod1</td>
			<td>100</td>
			<td>1</td>
			<td>100</td>
		</tr>
		<tr>
			<td>prod2</td>
			<td>200</td>
			<td>2</td>
			<td>400</td>
		</tr>
		<tr>
			<td>prod3</td>
			<td>300</td>
			<td>3</td>
			<td>900</td>
		</tr>
	</tbody>
</table>
<br>
итого: <span>1400</span> -->


<?php
// // Исходный массив
// $arr = [
//     ['name' => 'prod1', 'price' => 100, 'amount' => 1],
//     ['name' => 'prod2', 'price' => 200, 'amount' => 2],
//     ['name' => 'prod3', 'price' => 300, 'amount' => 3],
// ];

// // Переменная для хранения общей суммы
// $totalSum = 0;

// echo "<table border='1'>
//         <thead>
//             <tr>
//                 <th>Продукт</th>
//                 <th>Цена</th>
//                 <th>Количество</th>
//                 <th>Сумма</th>
//             </tr>
//         </thead>
//         <tbody>";

// // Проходим по каждому продукту и выводим данные
// foreach ($arr as $product) {
//     $sum = $product['price'] * $product['amount']; // Считаем сумму за продукт
//     $totalSum += $sum; // Добавляем к общей сумме

//     // Выводим строку таблицы
//     echo "<tr>
//             <td>{$product['name']}</td>
//             <td>{$product['price']}</td>
//             <td>{$product['amount']}</td>
//             <td>{$sum}</td>
//           </tr>";
// }

// echo "  </tbody>
//       </table>";

// // Вывод общей суммы
// echo "<br>Итого: <span>{$totalSum}</span>";





// Уровень 6.9 задачника PHP




// №1 Дана форма с двумя инпутами. В инпуты вводятся даты.
//  Выведите в абзац, сколько дней между введенными датами.



// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Получаем введённые даты из формы
//     $date1 = isset($_POST['date1']) ? $_POST['date1'] : null;
//     $date2 = isset($_POST['date2']) ? $_POST['date2'] : null;

//     // Если обе даты введены
//     if ($date1 && $date2) {
//         // Преобразуем строки с датами в объекты DateTime
//         $datetime1 = new DateTime($date1);
//         $datetime2 = new DateTime($date2);

//         // Вычисляем разницу между датами
//         $interval = $datetime1->diff($datetime2);

//         // Выводим количество дней между датами
//         echo "<p>Количество дней между датами: " . $interval->days . "</p>";
//     } else {
//         echo "<p>Пожалуйста, введите обе даты.</p>";
//     }
// }
?>

<!-- HTML форма для ввода дат -->
<!-- <form method="post">
    <label for="date1">Введите первую дату:</label>
    <input type="date" id="date1" name="date1" required>
    <br><br>
    <label for="date2">Введите вторую дату:</label>
    <input type="date" id="date2" name="date2" required>
    <br><br>
    <button type="submit">Рассчитать</button>
</form> -->


<?php


// №2 Дан див с текстом. Дана форма с инпутом. 
// В инпут вводятся слова через пробел. После отправки формы найдите
//  в диве все слова, введенные в инпут и выделите их красным цветом.


// // Исходный текст в диве
// $text = " abc Это пример de текста, в котором мы будем искать слова, выделяя их красным цветом.";

// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Получаем введённые слова из формы
//     $inputWords = isset($_POST['words']) ? $_POST['words'] : '';

//     // Преобразуем введённые слова в массив
//     $wordsArray = explode(' ', trim($inputWords));

//     // Обрабатываем текст, выделяя найденные слова
//     foreach ($wordsArray as $word) {
//         // Используем регулярное выражение для выделения слов (игнорируя регистр)
//         $text = preg_replace('/\b(' . preg_quote($word, '/') . ')\b/i', '<span style="color: red;">$1</span>', $text);
//     }
// }

?>

<!-- HTML форма для ввода слов -->
<!-- <form method="post">
    <label for="words">Введите слова через пробел:</label>
    <input type="text" id="words" name="words" required>
    <button type="submit">Поиск и выделение</button>
</form> -->

<!-- Див с текстом -->
<!-- <div> -->
    <?php
    // Выводим обработанный текст
    // echo $text;
    ?>
<!-- </div> -->


<?php




// Уровень 6.10 задачника PHP




// №1 Дана форма с текстареа. В текстареа вводится текст. 
// После отправки формы выведите слова этого текста в алфавитном порядке 
// и без дублей.




// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Получаем введённый текст из textarea
//     $text = isset($_POST['text']) ? $_POST['text'] : '';

//     // Преобразуем текст в массив слов, разделяя по пробелам и знакам препинания
//     $wordsArray = preg_split('/\W+/', trim($text));

//     // Удаляем пустые элементы из массива
//     $wordsArray = array_filter($wordsArray);

//     // Удаляем дубликаты и сортируем слова в алфавитном порядке
//     $uniqueWords = array_unique($wordsArray);
//     sort($uniqueWords, SORT_STRING);

//     // Выводим результат
//     echo "<h3>Слова в алфавитном порядке:</h3>";
//     echo "<ul>";
//     foreach ($uniqueWords as $word) {
//         echo "<li>" . htmlspecialchars($word) . "</li>";
//     }
//     echo "</ul>";
// }
?>

<!-- HTML форма для ввода текста -->
<!-- <form method="post">
    <label for="text">Введите текст:</label><br>
    <textarea id="text" name="text" rows="10" cols="30" required></textarea><br>
    <button type="submit">Отправить</button>
</form> -->



<?php



// №2 Дана форма с текстареа. В текстареа вводится текст со словами. 
// По отправки формы сделайте таблицу, 
// в первой колонке которой будут слова из текста, 
// во второй колонке - количество раз, которое это слово встречается,
//  а в третьей - процентное содержание этого слова в текста.



// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     // Получаем введённый текст из textarea
//     $text = isset($_POST['text']) ? $_POST['text'] : '';

//     // Преобразуем текст в массив слов, разделяя по пробелам и знакам препинания
//     $wordsArray = preg_split('/\W+/', trim($text));
    
//     // Удаляем пустые элементы из массива
//     $wordsArray = array_filter($wordsArray);

//     // Подсчёт количества вхождений слов
//     $wordCount = array_count_values($wordsArray);
    
//     // Общее количество слов в тексте
//     $totalWords = array_sum($wordCount);
    
//     // Начинаем вывод таблицы
//     echo "<table border='1'>
//             <thead>
//                 <tr>
//                     <th>Слово</th>
//                     <th>Количество</th>
//                     <th>Процент</th>
//                 </tr>
//             </thead>
//             <tbody>";

//     // Выводим слова, их количество и процентное содержание
//     foreach ($wordCount as $word => $count) {
//         $percentage = ($count / $totalWords) * 100; // Рассчитываем процент
//         echo "<tr>
//                 <td>" . htmlspecialchars($word) . "</td>
//                 <td>" . $count . "</td>
//                 <td>" . number_format($percentage, 2) . "%</td>
//               </tr>";
//     }

//     echo "  </tbody>
//           </table>";
// }
?>

<!-- HTML форма для ввода текста -->
<!-- <form method="post">
    <label for="text">Введите текст:</label><br>
    <textarea id="text" name="text" rows="10" cols="30" required></textarea><br>
    <button type="submit">Отправить</button>
</form> -->



<?php



// Уровень 7.1 задачника PHP


// №1 Дан текстовый файл. Получите количество символов в нем.


// с неполадкой
//  от чего при расчете количества  символов из  файла при одного
//  того же текста при каждом запуске  выводит числа разные в php


// // Указываем путь к файлу
// $filePath = 'example.txt';

// // Проверяем, существует ли файл
// if (file_exists($filePath)) {
//     // Читаем содержимое файла в строку
//     $fileContent = file_get_contents($filePath);

//     // Подсчитываем количество символов в файле (с учетом кодировки UTF-8)
//     $charCount = mb_strlen($fileContent, 'UTF-8');
//     $fileContent = preg_replace('/\s+/', '', $fileContent); // Удаляет все пробелы, переносы и табуляции
//     $fileContent = preg_replace('/^\xEF\xBB\xBF/', '', $fileContent); // Удаляет BOM, если он есть

//     // Выводим количество символов
//     echo "Количество символов в файле: " . $charCount;
// } else {
//     echo "Файл не найден.";
// }




// №2 Дана форма с текстареа и кнопкой. Юзер вводит текст в форму. 
// После отправки формы запишите введенный текст в какой-нибудь файл.



// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Получаем текст из формы
//     $text = $_POST['user_text'];

//     // Указываем путь к файлу, в который будет записан текст
//     $filePath = '/home/ubuntupc/project1/еxample.txt';

//     // Записываем текст в файл (если файла нет, он будет создан)
//     file_put_contents($filePath, $text, FILE_APPEND);

//     // Подтверждение записи
//     echo "Текст был успешно записан в файл!";
// }
?>

<!-- HTML форма -->
<!-- <form method="POST" action="">
    <label for="user_text">Введите текст:</label><br>
    <textarea name="user_text" id="user_text" rows="10" cols="30"></textarea><br><br>
    <input type="submit" value="Отправить">
</form> -->


<?php




// №3 Дан текстовый файл со словами.
//  Напишите программу, которая обернет каждое слово в свой тег span.
//   Результат запишите в новый файл.


// // Указываем путь к исходному файлу
// $inputFile = '/home/ubuntupc/project1/еxample.txt';

// // Указываем путь к новому файлу для записи результата
// $outputFile = '/home/ubuntupc/project1/output.html';

// // Проверяем, существует ли исходный файл
// if (file_exists($inputFile)) {
//     // Читаем содержимое файла
//     $content = file_get_contents($inputFile);

//     // Разбиваем текст на слова, учитывая любые разделители (пробелы, табуляции и т.п.)
//     $words = preg_split('/\s+/', $content);

//     // Оборачиваем каждое слово в тег <span>
//     $wrappedWords = array_map(function($word) {
//         return '<span>' . htmlspecialchars($word) . '</span>';
//     }, $words);

//     // Объединяем слова обратно в строку, разделяя их пробелами
//     $outputContent = implode(' ', $wrappedWords);

//     // Записываем результат в новый файл
//     file_put_contents($outputFile, $outputContent);

//     // Подтверждение выполнения
//     echo "Текст был успешно обработан и записан в файл '$outputFile'.";
// } else {
//     echo "Файл '$inputFile' не найден.";
// }




// №4 Дан текстовый файл со словами и с дробями вида 1/2. Напишите программу,
//  которая обернет каждую дробь в свой тег span. 
//  Результат запишите в новый файл.


// // Указываем путь к исходному файлу
// $inputFile = '/home/ubuntupc/project1/еxample.txt';

// // Указываем путь к новому файлу для записи результата
// $outputFile = '/home/ubuntupc/project1/output1.html';

// // Проверяем, существует ли исходный файл
// if (file_exists($inputFile)) {
//     // Читаем содержимое файла
//     $content = file_get_contents($inputFile);

//     // Регулярное выражение для поиска дробей вида 1/2
//     $pattern = '/\b\d+\/\d+\b/';

//     // Заменяем дроби, оборачивая их в тег <span>
//     $outputContent = preg_replace_callback($pattern, function($matches) {
//         return '<span>' . htmlspecialchars($matches[0]) . '</span>';
//     }, $content);

//     // Записываем результат в новый файл
//     file_put_contents($outputFile, $outputContent);

//     // Подтверждение выполнения
//     echo "Дроби были успешно обработаны и записаны в файл '$outputFile'.";
// } else {
//     echo "Файл '$inputFile' не найден.";
// }




// №5 В инпут вводится дата рождения юзера в формате год-месяц-день.
//  После отправки формы выведите на экран HTML таблицу, 
//  где в первой колонке будут все даты рождения юзера, 
//  а во второй колонке - соответствующие дни недели.

 

// // Проверяем, была ли отправлена форма
// if (isset($_POST['dob'])) {
//     // Получаем введенную дату рождения
//     $dob = $_POST['dob'];

//     // Проверяем, что дата введена правильно
//     if (DateTime::createFromFormat('Y-m-d', $dob)) {
//         // Получаем текущий год
//         $currentYear = date('Y');
//         // Разбиваем дату рождения на составляющие (год, месяц, день)
//         list($birthYear, $birthMonth, $birthDay) = explode('-', $dob);

//         echo '<table border="1">';
//         echo '<tr><th>Дата рождения</th><th>День недели</th></tr>';

//         // Проходим циклом от года рождения до текущего года
//         for ($year = $birthYear; $year <= $currentYear; $year++) {
//             // Формируем дату для каждого года
//             $birthday = "$year-$birthMonth-$birthDay";

//             // Получаем день недели для этой даты
//             $dayOfWeek = date('l', strtotime($birthday)); // 'l' возвращает полный день недели на английском

//             // Выводим дату и день недели в таблице
//             echo "<tr><td>{$birthday}</td><td>{$dayOfWeek}</td></tr>";
//         }

//         echo '</table>';
//     } else {
//         echo "Неправильный формат даты. Введите в формате ГГГГ-ММ-ДД.";
//     }
// }
?>

<!-- HTML форма для ввода даты рождения -->
<!-- <form method="POST">
    <label for="dob">Введите вашу дату рождения (ГГГГ-ММ-ДД):</label>
    <input type="date" id="dob" name="dob" required>
    <input type="submit" value="Отправить">
</form> -->



<?php



// №6 Напишите программу, которая сформирует следующий массив:

// [
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// 	[
// 		[1, 2, 3],
// 		[1, 2, 3],
// 		[1, 2, 3],
// 	],
// ]




// // Инициализируем пустой массив
// $array = [];

// // Внешний цикл для формирования трёх основных блоков массива
// for ($i = 0; $i < 3; $i++) {
//     $subArray = [];
    
//     // Средний цикл для формирования каждого блока из трёх строк
//     for ($j = 0; $j < 3; $j++) {
//         // Внутренний цикл для заполнения строки числами 1, 2, 3
//         $row = [1, 2, 3];
//         $subArray[] = $row;
//     }
    
//     // Добавляем сформированный блок в основной массив
//     $array[] = $subArray;
// }

// // Выводим результат для проверки
// echo '<pre>';
// print_r($array);
// echo '</pre>';





// Уровень 7.2 задачника PHP



// №1 Дан текстовый файл. Получите количество букв в нем 
// (т.е. без пробелов, знаков препинаний и т.п.).



// // Указываем путь к текстовому файлу
// $filePath = '/home/ubuntupc/project1/еxample.txt';

// // Читаем содержимое файла
// $fileContent = file_get_contents($filePath);

// // Удаляем все символы, кроме букв
// $lettersOnly = preg_replace('/[^a-zA-ZА-Яа-я]/u', '', $fileContent);

// // Получаем количество букв
// $letterCount = mb_strlen($lettersOnly);

// // Выводим количество букв
// echo "Количество букв в файле: " . $letterCount;




// №2 Создайте текстовый файл, 
// именем которого будет текущая дата в формате год-месяц-день.




// // Получаем текущую дату в формате год-месяц-день
// $filename = date('Y-m-d') . '.txt';

// // Создаем файл с текущей датой в качестве имени
// $file = fopen($filename, 'w');

// // Проверяем успешность создания файла
// if ($file) {
//     echo "Файл '$filename' успешно создан.";
//     fclose($file);
// } else {
//     echo "Не удалось создать файл.";
// }




// №3 В файле через запятую написаны числа.
//  Получите максимальное из этих чисел.



// // Указываем путь к файлу
// $filePath = '/home/ubuntupc/project1/еxample.txt';

// // Читаем содержимое файла
// $fileContent = file_get_contents($filePath);

// // Преобразуем строку в массив, разделяя числа по запятой
// $numbers = explode(',', $fileContent);

// // Преобразуем элементы массива в числа
// $numbers = array_map('floatval', $numbers);

// // Находим максимальное число
// $maxNumber = max($numbers);

// // Выводим максимальное число
// echo "Максимальное число: " . $maxNumber;




// №4 Дан текстовый файл. Получите массив всех его строк.



// // Указываем путь к текстовому файлу
// $filePath = '/home/ubuntupc/project1/еxample.txt';

// // Получаем массив строк файла
// $lines = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// // Выводим массив для проверки
// echo '<pre>';
// print_r($lines);
// echo '</pre>';




// №5 Дана форма с инпутом. В него вводится год.
//  После отправки формы выведите даты всех пятниц 13-е заданного года 
//  в виде списка ul.


?>

<!-- Форма для ввода года -->
<!-- <form method="post">
    <label for="year">Введите год:</label>
    <input type="number" name="year" id="year" required>
    <button type="submit">Показать пятницы 13-е</button>
</form> -->

<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Получаем год из формы
//     $year = intval($_POST['year']);

//     echo "<ul>";
//     // Перебираем все месяцы с 1 по 12
//     for ($month = 1; $month <= 12; $month++) {
//         // Создаем дату 13-го числа каждого месяца
//         $date = strtotime("$year-$month-13");

//         // Проверяем, является ли 13-е число пятницей
//         if (date('N', $date) == 5) { // 'N' возвращает номер дня недели (5 - пятница)
//             echo "<li>" . date('d-m-Y', $date) . " - пятница</li>";
//         }
//     }
//     echo "</ul>";
// }




// №6 Напишите программу, которая сформирует следующий массив:

// [
// 	['x'],
// 	['x', 'x'],
// 	['x', 'x', 'x'],
// 	['x', 'x', 'x', 'x'],
// 	['x', 'x', 'x', 'x', 'x'],
// ]




// // Инициализируем пустой массив
// $result = [];

// // Запускаем цикл от 1 до 5
// for ($i = 1; $i <= 5; $i++) {
//     // Заполняем подмассив символами 'x', количество которых равно текущему значению $i
//     $result[] = array_fill(0, $i, 'x');
// }

// // Выводим результат для проверки
// echo '<pre>';
// print_r($result);
// echo '</pre>';


 


// Уровень 7.3 задачника PHP




// №1 Дан текстовый файл. В нем записан текст и встречаются числа. 
// Возведите каждое из этих чисел в квадрат и 
// запишите результат обратно в этот же файл.




// // Указываем путь к файлу
// $filePath = '/home/ubuntupc/project1/еxample.txt';

// // Читаем содержимое файла
// $content = file_get_contents($filePath);

// // Найдем все числа в тексте
// $content = preg_replace_callback('/\d+/', function ($matches) {
//     $number = (int) $matches[0];  // Преобразуем найденное число в целое
//     return $number ** 2;          // Возводим число в квадрат и возвращаем
// }, $content);

// // Записываем измененное содержимое обратно в файл
// file_put_contents($filePath, $content);

// echo "Числа в файле успешно возведены в квадрат.";




// №2 Дана папка с файлами. Удалите из этой папки все файлы 
// с заданным расширением.



// // Укажите путь к папке
// $folder = '/home/ubuntupc/project1/folder';

// // Укажите расширение файлов, которые нужно удалить (например, 'txt')
// $extension = 'txt';

// // Открываем папку
// if (is_dir($folder)) {
//     $files = scandir($folder); // Получаем список файлов в папке

//     foreach ($files as $file) {
//         // Пропускаем '.' и '..'
//         if ($file !== '.' && $file !== '..') {
//             // Проверяем, если файл имеет нужное расширение
//             if (pathinfo($file, PATHINFO_EXTENSION) === $extension) {
//                 $filePath = $folder . DIRECTORY_SEPARATOR . $file;

//                 // Удаляем файл и выводим сообщение
//                 if (unlink($filePath)) {
//                     echo "Файл $file удален.<br>";
//                 } else {
//                     echo "Не удалось удалить файл $file.<br>";
//                 }
//             }
//         }
//     }
// } else {
//     echo "Папка не найдена.";
// }




// №3 Дан массив. Запишите элементы этого массива в файл так,
//  чтобы каждый элемент был написан с новой строки.




// // Массив для записи
// $arr = ['apple', 'banana', 'orange', 'grape'];

// // Укажите путь к файлу
// $filePath = '/home/ubuntupc/project1/еxample.txt';

// // Открываем файл на запись (создаст файл, если его не существует)
// $file = fopen($filePath, 'w');

// // Записываем каждый элемент массива с новой строки
// foreach ($arr as $element) {
//     fwrite($file, $element . PHP_EOL); // PHP_EOL — символ новой строки
// }

// // Закрываем файл
// fclose($file);

// echo "Элементы массива успешно записаны в файл.";




// №4 Сделайте функцию, которая будет возвращать массив,
//  заполненный N случайными числами из заданного диапазона так,
//   чтобы числа не повторялись.


  
// /**
//  * Возвращает массив из N уникальных случайных чисел в заданном диапазоне.
//  *
//  * @param int $min Минимальное значение диапазона.
//  * @param int $max Максимальное значение диапазона.
//  * @param int $count Количество чисел в массиве.
//  * @return array Массив уникальных случайных чисел.
//  */
// function getUniqueRandomNumbers($min, $max, $count) {
//     // Проверка, что возможно получить нужное количество уникальных чисел
//     if ($count > ($max - $min + 1)) {
//         throw new Exception("Невозможно получить $count уникальных чисел в заданном диапазоне.");
//     }

//     // Генерируем массив уникальных чисел
//     $numbers = range($min, $max);
//     shuffle($numbers); // Перемешиваем массив

//     // Возвращаем нужное количество чисел
//     return array_slice($numbers, 0, $count);
// }

// // Пример использования:
// try {
//     $randomNumbers = getUniqueRandomNumbers(1, 100, 10);
//     print_r($randomNumbers);
// } catch (Exception $e) {
//     echo "Ошибка: " . $e->getMessage();
// }




// №5 Дан следующая структура данных:


// 	$data = [
// 		[
// 			'text' => '111',
// 			'href' => '1.html',
// 		],
// 		[
// 			'text' => '222',
// 			'href' => '2.html',
// 		],
// 		[
// 			'text' => '333',
// 			'href' => '3.html',
// 		],
// 	];

// Сформируйте с помощью этих данных следующую верстку:
?>
<!-- <a href="1.html">111</a>
<a href="2.html">222</a>
<a href="3.html">222</a> -->



<?php

// $data = [
//     [
//         'text' => '111',
//         'href' => '1.html',
//     ],
//     [
//         'text' => '222',
//         'href' => '2.html',
//     ],
//     [
//         'text' => '333',
//         'href' => '3.html',
//     ],
// ];

// // Генерация HTML-кода с использованием массива
// foreach ($data as $item) {
//     echo '<a href="' . htmlspecialchars($item['href']) . '">' . htmlspecialchars($item['text']) . '</a>' . PHP_EOL;
// }




// Уровень 7.4 задачника PHP




// №1 Дан текстовый файл. Запишите в конец его текста
//  текущий момент времени с новой строки.


// // Укажите путь к файлу
// $filename = '/home/ubuntupc/project1/еxample.txt';

// // Получите текущий момент времени в нужном формате
// $currentTime = date('Y-m-d H:i:s');

// // Открываем файл для добавления текста (режим 'a' - append)
// $file = fopen($filename, 'a');

// if ($file) {
//     // Записываем текущую дату и время с новой строки
//     fwrite($file, PHP_EOL . $currentTime);

//     // Закрываем файл
//     fclose($file);
//     echo "Время успешно добавлено в файл.";
// } else {
//     echo "Не удалось открыть файл для записи.";
// }




// №2 Дана папка с файлами. Получите имена всех картинок из этой папки.


// // Укажите путь к папке с изображениями
// $folder = '/home/ubuntupc/Рабочий стол/My Project/site'; 

// // Массив с допустимыми расширениями изображений
// $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

// // Проверяем, что папка существует
// if (is_dir($folder)) {
//     // Открываем папку
//     $files = scandir($folder);

//     // Перебираем все файлы в папке
//     $images = [];
//     foreach ($files as $file) {
//         // Пропускаем текущую и родительскую директории
//         if ($file === '.' || $file === '..') continue;

//         // Получаем расширение файла
//         $extension = pathinfo($file, PATHINFO_EXTENSION);

//         // Если расширение соответствует изображению, добавляем в массив
//         if (in_array(strtolower($extension), $imageExtensions)) {
//             $images[] = $file;
//         }
//     }

//     // Выводим имена всех найденных изображений
//     if (!empty($images)) {
//         echo "Найденные изображения:<br>";
//         foreach ($images as $image) {
//             echo $image . "<br>";
//         }
//     } else {
//         echo "В папке нет изображений.";
//     }
// } else {
//     echo "Указанная папка не существует.";
// }





// №3 Дан текстовый файл. Дана форма с инпутом. В инпут вводится слово.
//  По отправке формы проверьте, есть ли данное слово в файле.
//   Результат выведите в браузер.


?>

    <!-- <form method="post">
        <label for="word">Введите слово:</label>
        <input type="text" name="word" id="word" required>
        <button type="submit">Проверить</button>
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     // Получаем введенное слово из формы
    //     $searchWord = trim($_POST['word']);

    //     // Указываем путь к файлу
    //     $filename = '/home/ubuntupc/project1/еxample.txt';

    //     // Проверяем, что файл существует
    //     if (file_exists($filename)) {
    //         // Читаем содержимое файла
    //         $content = file_get_contents($filename);

    //         // Проверяем наличие слова (поиск нечувствителен к регистру)
    //         if (stripos($content, $searchWord) !== false) {
    //             echo "<p>Слово <b>'$searchWord'</b> найдено в файле.</p>";
    //         } else {
    //             echo "<p>Слово <b>'$searchWord'</b> не найдено в файле.</p>";
    //         }
    //     } else {
    //         echo "<p>Файл не найден.</p>";
    //     }
    // }





// 	№4 В папке лежат текстовые файлы. Получите первые N строк текста из 
// каждого файла и запишите результат в новый файл, 
// разделив полученные тексты пустыми строками



// // Указываем папку с текстовыми файлами и имя итогового файла
// $folder = '/home/ubuntupc/project1/folder';  // Путь к папке с файлами
// $outputFile = 'result.txt';  // Имя итогового файла
// $N = 3;  // Количество строк для чтения из каждого файла

// // Открываем итоговый файл для записи (режим 'w' перезапишет файл, если он уже существует)
// $output = fopen($outputFile, 'w');

// if ($output === false) {
//     die('Не удалось открыть файл для записи.');
// }

// // Сканируем папку и обрабатываем каждый текстовый файл
// $files = scandir($folder);

// foreach ($files as $file) {
//     $filePath = $folder . DIRECTORY_SEPARATOR . $file;

//     // Проверяем, что это текстовый файл
//     if (is_file($filePath) && pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
//         // Открываем текстовый файл для чтения
//         $input = fopen($filePath, 'r');
//         if ($input !== false) {
//             // Читаем первые N строк
//             $lineCount = 0;
//             while (($line = fgets($input)) !== false && $lineCount < $N) {
//                 fwrite($output, $line);  // Записываем строку в итоговый файл
//                 $lineCount++;
//             }
//             fclose($input);  // Закрываем файл после чтения

//             // Добавляем пустую строку для разделения текстов
//             fwrite($output, PHP_EOL . PHP_EOL);
//         }
//     }
// }

// // Закрываем итоговый файл
// fclose($output);

// echo "Первые $N строк из каждого файла записаны в '$outputFile'.";




// №5 Дана папка с файлами. Напишите программу, 
// которая сделает пустыми все текстовые файлы из этой папки.



// // Указываем путь к папке с текстовыми файлами
// $folder = 'text_files';  // Замените на нужный путь к папке

// // Сканируем папку
// $files = scandir($folder);

// foreach ($files as $file) {
//     $filePath = $folder . DIRECTORY_SEPARATOR . $file;

//     // Проверяем, что это файл с расширением .txt
//     if (is_file($filePath) && pathinfo($file, PATHINFO_EXTENSION) === 'txt') {
//         // Открываем файл в режиме записи ('w') и сразу закрываем его, чтобы очистить
//         $handle = fopen($filePath, 'w');
//         if ($handle !== false) {
//             fclose($handle);
//             echo "Файл '$file' успешно очищен.<br>";
//         } else {
//             echo "Не удалось открыть файл '$file' для очистки.<br>";
//         }
//     }
// }




// №6 Сформируйте ul, в пунктах которого будут дни с 
// первого по последний текущего месяца. Текущий день, 
// а также выходные, выделите другими цветами.
//  Пусть программа сохранит полученный результат в HTML файл.


// // Получаем текущий год и месяц
// $year = date('Y');
// $month = date('m');

// // Определяем количество дней в текущем месяце
// $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

// // Получаем текущий день
// $currentDay = date('j');

// // Начинаем формирование HTML-строки
// $html = "<ul>\n";

// for ($day = 1; $day <= $daysInMonth; $day++) {
//     // Определяем день недели для текущей даты (0 - воскресенье, 6 - суббота)
//     $timestamp = strtotime("$year-$month-$day");
//     $weekday = date('w', $timestamp);

//     // Определяем стиль для текущего дня или выходного
//     $style = '';
//     if ($day == $currentDay) {
//         $style = 'style="color: blue;"'; // Текущий день
//     } elseif ($weekday == 0 || $weekday == 6) {
//         $style = 'style="color: red;"'; // Выходные
//     }

//     // Добавляем пункт в список
//     $html .= "<li $style>$day</li>\n";
// }

// $html .= "</ul>";

// // Записываем результат в HTML-файл
// file_put_contents('calendar.html', $html);

// echo "HTML файл успешно создан!";




// №7 Дан массив, содержащий имена файлов. Напишите программу,
//  которая создаст в заданной папке все файлы из массива.


// // Массив с именами файлов
// $files = ['file1.txt', 'file2.txt', 'file3.txt'];

// // Путь к папке, где будут созданы файлы
// $folder = 'path/to/your/folder/'; // Укажите здесь путь к папке

// // Проверяем, существует ли папка
// if (!is_dir($folder)) {
//     echo "Указанная папка не существует!";
//     exit;
// }

// // Создаем файлы из массива
// foreach ($files as $file) {
//     $filePath = $folder . $file; // Полный путь к файлу

//     // Создаем пустой файл
//     if (file_put_contents($filePath, '') !== false) {
//         echo "Файл '$file' успешно создан.<br>";
//     } else {
//         echo "Ошибка при создании файла '$file'.<br>";
//     }
// }





// №8 Дана форма с инпутом. В него вводится число из четного количества цифр.
//  По отправке формы проверьте, что число представляет собой счастливый билет,
//   то есть сумма половины цифр равна сумме второй половине цифр.


?>

    <!-- <form method="POST">
        <label>Введите число с четным количеством цифр:</label>
        <input type="text" name="number" required pattern="\d+">
        <button type="submit">Проверить</button>
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $number = $_POST['number'];

    //     // Проверка на четное количество цифр
    //     if (strlen($number) % 2 !== 0) {
    //         echo "<p>Число должно содержать четное количество цифр!</p>";
    //     } else {
    //         if (isLuckyTicket($number)) {
    //             echo "<p>Число '$number' является счастливым билетом!</p>";
    //         } else {
    //             echo "<p>Число '$number' не является счастливым билетом.</p>";
    //         }
    //     }
    // }

    // // Функция для проверки счастливого билета
    // function isLuckyTicket($number) {
    //     $length = strlen($number);
    //     $half = $length / 2;

    //     // Разбиваем число на две половины
    //     $firstHalf = substr($number, 0, $half);
    //     $secondHalf = substr($number, $half);

    //     // Считаем сумму цифр в обеих половинах
    //     $sumFirstHalf = array_sum(str_split($firstHalf));
    //     $sumSecondHalf = array_sum(str_split($secondHalf));

    //     // Проверяем равенство сумм
    //     return $sumFirstHalf === $sumSecondHalf;
    // }
   




	// №9 Напишите программу, которая сформирует следующий массив:

	// [
	// 	[1],
	// 	[1, 2],
	// 	[1, 2, 3],
	// 	[1, 2, 3, 4, 5],
	// 	[1, 2, 3, 4, 5, 6],
	// ]
	
	


	// // Функция для формирования массива
	// function generateArray($rows) {
	// 	$result = [];
		
	// 	for ($i = 1; $i <= $rows; $i++) {
	// 		$subArray = range(1, $i);
	// 		$result[] = $subArray;
	// 	}
	
	// 	return $result;
	// }
	
	// // Формируем массив
	// $array = generateArray(5);
	
	// // Вывод массива для проверки
	// echo '<pre>';
	// print_r($array);
	// echo '</pre>';




	// Уровень 7.5 задачника PHP



	// №1 Дан текстовый файл. 
	// Запишите в начало его текста текущий момент времени с новой строки.
	
	

	// // Имя текстового файла
	// $filename = 'example.txt';
	
	// // Получаем текущий момент времени
	// $currentTime = date('Y-m-d H:i:s') . PHP_EOL;
	
	// // Читаем содержимое файла
	// if (file_exists($filename)) {
	// 	$fileContent = file_get_contents($filename);
	// } else {
	// 	$fileContent = '';  // Если файл не существует, создаем пустой контент
	// }
	
	// // Формируем новый контент с текущим временем в начале
	// $newContent = $currentTime . $fileContent;
	
	// // Записываем новый контент в файл
	// file_put_contents($filename, $newContent);
	
	// echo "Текущее время добавлено в начало файла.";




// №2 Дана папка с файлами. Получите массив размеров всех файлов из этой папки.



// // Указываем путь к папке
// $directory = 'path/to/your/folder'; // Замените на путь к вашей папке

// // Проверяем, что папка существует
// if (!is_dir($directory)) {
//     die("Папка не найдена.");
// }

// // Получаем массив всех файлов в папке
// $files = scandir($directory);

// // Убираем из массива системные элементы "." и ".."
// $files = array_diff($files, ['.', '..']);

// // Создаем массив для хранения размеров файлов
// $fileSizes = [];

// // Перебираем файлы и получаем их размеры
// foreach ($files as $file) {
//     $filePath = $directory . DIRECTORY_SEPARATOR . $file;
    
//     // Проверяем, что это файл, а не папка
//     if (is_file($filePath)) {
//         $fileSizes[$file] = filesize($filePath); // Записываем размер файла
//     }
// }

// // Выводим массив размеров файлов
// print_r($fileSizes);




// №3 Дан массив имен папок. Напишите программу,
//  которая создаст в заданной папке подпапки с именами из массива.



// // Указываем путь к основной папке, где будут созданы подпапки
// $mainFolder = 'path/to/your/folder'; // Замените на нужный путь

// // Массив с именами папок, которые нужно создать
// $folders = ['folder1', 'folder2', 'folder3', 'folder4'];

// // Проверяем, что основная папка существует
// if (!is_dir($mainFolder)) {
//     die("Основная папка не найдена.");
// }

// // Перебираем массив имен папок
// foreach ($folders as $folderName) {
//     // Формируем полный путь к создаваемой подпапке
//     $subFolderPath = $mainFolder . DIRECTORY_SEPARATOR . $folderName;
    
//     // Создаем папку, если она не существует
//     if (!is_dir($subFolderPath)) {
//         if (mkdir($subFolderPath, 0777, true)) {
//             echo "Папка '$folderName' успешно создана.<br>";
//         } else {
//             echo "Не удалось создать папку '$folderName'.<br>";
//         }
//     } else {
//         echo "Папка '$folderName' уже существует.<br>";
//     }
// }





// №4 В файле расположен русский текст. Откройте этот файл, 
// преобразуйте текст в транслит и запишите в новый файл.



// // Функция для транслитерации русского текста
// function transliterate($text) {
//     $translitTable = [
//         'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 
//         'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I', 
//         'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 
//         'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 
//         'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch', 
//         'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '', 
//         'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
//         'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 
//         'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i', 
//         'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 
//         'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 
//         'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch', 
//         'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' => '', 
//         'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
//     ];

//     // Заменяем каждую букву на соответствующую из таблицы
//     return strtr($text, $translitTable);
// }

// // Указываем путь к исходному и новому файлам
// $sourceFile = '/home/ubuntupc/project1/russian_text.txt'; // Файл с русским текстом
// $newFile = 'transliterated_text.txt'; // Файл для транслита

// // Проверяем, существует ли исходный файл
// if (!file_exists($sourceFile)) {
//     die("Файл $sourceFile не найден.");
// }

// // Считываем содержимое исходного файла
// $russianText = file_get_contents($sourceFile);

// // Преобразуем текст в транслит
// $transliteratedText = transliterate($russianText);

// // Записываем транслитерированный текст в новый файл
// file_put_contents($newFile, $transliteratedText);

// echo "Транслитерация завершена. Результат записан в $newFile.";





// №5 Напишите программу, которая сформирует следующий массив:

// [
// 	['x', 'x', 'x', 'x', 'x'],
// 	['x', 'x', 'x', 'x'],
// 	['x', 'x', 'x'],
// 	['x', 'x'],
// 	['x'],
// ]




// // Функция для создания массива
// function generateArray() {
//     $result = [];
//     $count = 5; // Начальное количество элементов в строке

//     // Заполняем массив строками с уменьшением длины каждой строки
//     for ($i = $count; $i > 0; $i--) {
//         $result[] = array_fill(0, $i, 'x');
//     }

//     return $result;
// }

// // Получаем массив
// $array = generateArray();

// // Выводим массив для проверки
// echo '<pre>';
// print_r($array);
// echo '</pre>';



// Уровень 7.6 задачника PHP





// №2 В файле расположен русский текст. Откройте этот файл,
//  преобразуйте текст в транслит и запишите в новый файл.



// // Путь к исходному текстовому файлу
// $inputFile = '/home/ubuntupc/project1/еxample1.txt'; // Убедитесь, что файл существует и содержит текст
// $outputFile = 'output.txt'; // Имя файла для записи результатов

// // Читаем содержимое файла
// $content = file_get_contents($inputFile);

// // Определяем массив для транслитерации
// $translit = [
//     'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd',
//     'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z', 'и' => 'i',
//     'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n',
//     'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
//     'у' => 'u', 'ф' => 'f', 'х' => 'kh', 'ц' => 'ts', 'ч' => 'ch',
//     'ш' => 'sh', 'щ' => 'shch', 'ъ' => '', 'ы' => 'y', 'ь' => '',
//     'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
    
//     'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D',
//     'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh', 'З' => 'Z', 'И' => 'I',
//     'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N',
//     'О' => 'O', 'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T',
//     'У' => 'U', 'Ф' => 'F', 'Х' => 'Kh', 'Ц' => 'Ts', 'Ч' => 'Ch',
//     'Ш' => 'Sh', 'Щ' => 'Shch', 'Ъ' => '', 'Ы' => 'Y', 'Ь' => '',
//     'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
// ];

// // Преобразуем текст в транслит
// $transliteratedText = strtr($content, $translit);

// // Записываем результат в новый файл
// file_put_contents($outputFile, $transliteratedText);

// echo "Текст успешно преобразован в транслит и записан в файл '$outputFile'.";





// №3 Дан текстовый файл. Перемешайте в этом файле строки в случайном порядке.


// // Путь к исходному текстовому файлу
// $inputFile = '/home/ubuntupc/project1/еxample1.txt'; // Убедитесь, что файл существует и содержит текст

// // Читаем содержимое файла и разбиваем его на строки
// $lines = file($inputFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// if ($lines === false) {
//     die("Ошибка при чтении файла.");
// }

// // Перемешиваем строки в случайном порядке
// shuffle($lines);

// // Записываем перемешанные строки обратно в файл
// file_put_contents($inputFile, implode(PHP_EOL, $lines));

// echo "Строки в файле '$inputFile' успешно перемешаны.";





// №4 Получите список всех возможных счастливых билетов.
//  Билет представляет собой строку из шести цифр,
//   может быть с нулями спереди. Билет считается счастливым, 
//   если сумма сумма первых трех цифр равна сумме вторых трех цифр.
//    Запишите полученный список в файл, каждый билет с новой строчки.



// // Файл для записи счастливых билетов
// $outputFile = '/home/ubuntupc/project1/lucky_tickets.txt';

// // Открываем файл для записи
// $fileHandle = fopen($outputFile, 'w');

// if ($fileHandle === false) {
//     die("Не удалось открыть файл для записи.");
// }

// // Генерируем все возможные билеты
// for ($ticketNumber = 0; $ticketNumber <= 999999; $ticketNumber++) {
//     // Форматируем номер билета в строку с шестью цифрами
//     $ticketString = str_pad($ticketNumber, 6, '0', STR_PAD_LEFT);

//     // Разделяем билет на две части
//     $firstHalf = substr($ticketString, 0, 3);
//     $secondHalf = substr($ticketString, 3, 3);

//     // Вычисляем суммы
//     $firstSum = array_sum(str_split($firstHalf));
//     $secondSum = array_sum(str_split($secondHalf));

//     // Проверяем, является ли билет счастливым
//     if ($firstSum === $secondSum) {
//         // Записываем счастливый билет в файл
//         fwrite($fileHandle, $ticketString . PHP_EOL);
//     }
// }

// // Закрываем файл
// fclose($fileHandle);

// echo "Список счастливых билетов записан в файл '$outputFile'.";





// №5 Напишите программу, которая сформирует следующий массив:

// [
// 	'x',
// 	'xx',
// 	'xxx',
// 	'xxxx',
// 	'xxxxx',
// ]



// <?php
// // Инициализируем массив
// $array = [];

// // Заполняем массив элементами от 'x' до 'xxxxx'
// for ($i = 1; $i <= 5; $i++) {
//     $array[] = str_repeat('x', $i);
// }

// // Выводим результат
// print_r($array);





// №6 Дан такой объект:


	// $data = [
	// 	2018: [
	// 		11: [
	// 			29: [1, 2, 3],
	// 			30: [4, 5],
	// 		],
	// 		12: [
	// 			30: [6, 7],
	// 			31: [8, 9],
	// 		],
	// 	],
	// 	2019: [
	// 		12: [
	// 			29: [10, 11],
	// 			30: [12, 13],
	// 			31: [14, 15],
	// 		]
	// 	],
	// ]

// Запишите все элементы этого объекта в какой-нибудь массив, вот так:

// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]




// $data = [
//     2018 => [
//         11 => [
//             29 => [1, 2, 3],
//             30 => [4, 5],
//         ],
//         12 => [
//             30 => [6, 7],
//             31 => [8, 9],
//         ],
//     ],
//     2019 => [
//         12 => [
//             29 => [10, 11],
//             30 => [12, 13],
//             31 => [14, 15],
//         ],
//     ],
// ];

// // Инициализируем пустой массив для хранения результата
// $result = [];

// // Проходим по всем элементам массива
// foreach ($data as $year) {
//     foreach ($year as $month) {
//         foreach ($month as $day) {
//             // Объединяем текущие элементы с результатом
//             $result = array_merge($result, $day);
//         }
//     }
// }

// // Выводим результат
// print_r($result);




// Уровень 7.7 задачника PHP




// №1 Дана папка с файлами и подпапками.
//  Получите массив имен подпапок из этой папки.



// function getSubdirectories($dir) {
//     // Получаем все файлы и папки в заданной директории
//     $items = scandir($dir);
//     $subdirectories = [];

//     // Проходим по всем элементам
//     foreach ($items as $item) {
//         // Игнорируем текущую (.) и родительскую (..) директории
//         if ($item !== '.' && $item !== '..') {
//             // Проверяем, является ли элемент папкой
//             if (is_dir($dir . DIRECTORY_SEPARATOR . $item)) {
//                 // Если да, добавляем его в массив
//                 $subdirectories[] = $item;
//             }
//         }
//     }

//     return $subdirectories;
// }

// // Укажите путь к вашей папке
// $directoryPath = '/home/ubuntupc/project1/folder';
// $subdirs = getSubdirectories($directoryPath);

// // Выводим результат
// print_r($subdirs);




// №2 Дана папка с файлами и подпапками.
//  Получите имена всех файлов из папок и подпапок.



// function getAllFiles($dir) {
//     $files = [];

//     // Получаем все элементы в директории
//     $items = scandir($dir);

//     foreach ($items as $item) {
//         // Игнорируем текущую (.) и родительскую (..) директории
//         if ($item !== '.' && $item !== '..') {
//             $path = $dir . DIRECTORY_SEPARATOR . $item;

//             // Если элемент - папка, рекурсивно ищем в ней файлы
//             if (is_dir($path)) {
//                 $files = array_merge($files, getAllFiles($path));
//             } else {
//                 // Если элемент - файл, добавляем его в массив
//                 $files[] = $path; // сохраняем полный путь к файлу
//             }
//         }
//     }

//     return $files;
// }

// // Укажите путь к вашей папке
// $directoryPath = '/home/ubuntupc/project1/folder';
// $allFiles = getAllFiles($directoryPath);

// // Выводим результат
// print_r($allFiles);



// №3 Дан массив с числами.
//  Подсчитайте общее количество цифр 3 во всех числах данного массива.



// // Исходный массив с числами
// $array = [123, 453, 23, 345, 6789, 303, 3];

// // Переменная для хранения общего количества цифр 3
// $totalCount = 0;

// // Проходим по каждому числу в массиве
// foreach ($array as $number) {
//     // Преобразуем число в строку и считаем количество '3'
//     $totalCount += substr_count((string)$number, '3');
// }

// // Выводим результат
// echo "Общее количество цифр 3 в массиве: " . $totalCount;




// №4 Напишите программу, которая сформирует следующий массив:

// [
// 	'1',
// 	'12',
// 	'123',
// 	'1234',
// 	'12345',
// ]



// // Инициализируем пустой массив
// $array = [];

// // Используем цикл для формирования массива
// for ($i = 1; $i <= 5; $i++) {
//     // Формируем строку с числами от 1 до текущего значения $i
//     $array[] = implode(range(1, $i));
// }

// // Выводим результат
// print_r($array);




// №5 Дан массив:


// 	$affairs = [
// 		[
// 			'date' =>  '2019-12-29',
// 			'event' => 'name1',
// 		],
// 		[
// 			'date' =>  '2019-12-31',
// 			'event' => 'name2',
// 		],
// 		[
// 			'date' =>  '2019-12-29',
// 			'event' => 'name3',
// 		],
// 		[
// 			'date' =>  '2019-12-30',
// 			'event' => 'name4',
// 		],
// 		[
// 			'date' =>  '2019-12-29',
// 			'event' => 'name5',
// 		],
// 		[
// 			'date' =>  '2019-12-31',
// 			'event' => 'name6',
// 		],
// 		[
// 			'date' =>  '2019-12-29',
// 			'event' => 'name7',
// 		],
// 		[
// 			'date' =>  '2019-12-30',
// 			'event' => 'name8',
// 		],
// 		[
// 			'date' =>  '2019-12-30',
// 			'event' => 'name9',
// 		],
// 	]
// 
// Получите из этого массива уникальные даты, то есть вот так:

// ['2019-12-29', '2019-12-30', '2019-12-31']


// <?php
// $affairs = [
//     [
//         'date' =>  '2019-12-29',
//         'event' => 'name1',
//     ],
//     [
//         'date' =>  '2019-12-31',
//         'event' => 'name2',
//     ],
//     [
//         'date' =>  '2019-12-29',
//         'event' => 'name3',
//     ],
//     [
//         'date' =>  '2019-12-30',
//         'event' => 'name4',
//     ],
//     [
//         'date' =>  '2019-12-29',
//         'event' => 'name5',
//     ],
//     [
//         'date' =>  '2019-12-31',
//         'event' => 'name6',
//     ],
//     [
//         'date' =>  '2019-12-29',
//         'event' => 'name7',
//     ],
//     [
//         'date' =>  '2019-12-30',
//         'event' => 'name8',
//     ],
//     [
//         'date' =>  '2019-12-30',
//         'event' => 'name9',
//     ],
// ];

// // Извлекаем даты из массива
// $dates = array_column($affairs, 'date');

// // Получаем уникальные даты
// $unique_dates = array_unique($dates);

// // Сброс индексов массива
// $unique_dates = array_values($unique_dates);

// // Выводим результат
// print_r($unique_dates);




// Уровень 7.8 задачника PHP



// №1 Дан текстовый файл. 
// Перемешайте в этом файле слова в случайном порядке.



// // Укажите путь к файлу
// $filePath = '/home/ubuntupc/project1/еxample1.txt';

// // Проверяем, существует ли файл
// if (file_exists($filePath)) {
//     // Читаем содержимое файла
//     $content = file_get_contents($filePath);
    
//     // Разделяем текст на слова
//     $words = preg_split('/\s+/', $content); // Используем регулярное выражение для разделения по пробелам
    
//     // Перемешиваем массив слов
//     shuffle($words);
    
//     // Объединяем перемешанные слова обратно в строку
//     $shuffledContent = implode(' ', $words);
    
//     // Записываем перемешанный текст обратно в файл
//     file_put_contents($filePath, $shuffledContent);
    
//     echo "Слова в файле перемешаны.";
// } else {
//     echo "Файл не найден.";
// }




// №2 Дан текстовый файл. Получите все уникальные слова из этого файла.
//  Результат запишите в новый файл, так, 
//  чтобы в каждом ряду стояло по 10 слов, разделенных пробелами.




// // Укажите путь к исходному файлу
// $inputFilePath = '/home/ubuntupc/project1/еxample1.txt';
// // Укажите путь к файлу, в который будет записан результат
// $outputFilePath = '/home/ubuntupc/project1/output_file.txt';

// // Проверяем, существует ли входной файл
// if (file_exists($inputFilePath)) {
//     // Читаем содержимое файла
//     $content = file_get_contents($inputFilePath);
    
//     // Разделяем текст на слова и приводим к нижнему регистру
//     $words = preg_split('/\s+/', $content);
    
//     // Получаем уникальные слова
//     $uniqueWords = array_unique($words);
    
//     // Открываем файл для записи
//     $outputFile = fopen($outputFilePath, 'w');

//     // Счетчик для записи слов
//     $wordCount = 0;
//     $line = '';

//     foreach ($uniqueWords as $word) {
//         // Добавляем слово к текущей строке
//         $line .= $word . ' ';
//         $wordCount++;

//         // Если 10 слов в строке, записываем строку в файл и обнуляем счетчик
//         if ($wordCount == 10) {
//             fwrite($outputFile, trim($line) . PHP_EOL);
//             $line = '';
//             $wordCount = 0;
//         }
//     }

//     // Записываем остаток, если он есть
//     if ($wordCount > 0) {
//         fwrite($outputFile, trim($line) . PHP_EOL);
//     }

//     // Закрываем файл
//     fclose($outputFile);
    
//     echo "Уникальные слова записаны в новый файл.";
// } else {
//     echo "Исходный файл не найден.";
// }




// №3 Напишите программу, которая сформирует следующий массив:

// [
// 	'1',
// 	'12',
// 	'123',
// 	'1234',
// 	'12345',
// 	'1234',
// 	'123',
// 	'12',
// 	'1',
// ]




// // Создаем пустой массив
// $result = [];

// // Формируем массив в указанном порядке
// for ($i = 1; $i <= 5; $i++) {
//     $result[] = implode('', range(1, $i)); // Добавляем '1', '12', '123', '1234', '12345'
// }

// for ($i = 4; $i >= 1; $i--) {
//     $result[] = implode('', range(1, $i)); // Добавляем '1234', '123', '12', '1'
// }

// // Выводим результат
// print_r($result);




// Уровень 7.9 задачника PHP





// №3 Напишите функцию, которая параметром будет принимать путь к папке, 
// а возвращать количество файлов из этой папки и ее подпапок.




// function getFileCount($directory) {
//     $fileCount = 0;

//     // Используем рекурсивный итератор для обхода папки и подпапок
//     $iterator = new RecursiveIteratorIterator(
//         new RecursiveDirectoryIterator($directory, FilesystemIterator::SKIP_DOTS)
//     );

//     // Подсчитываем количество файлов
//     foreach ($iterator as $file) {
//         if ($file->isFile()) {
//             $fileCount++;
//         }
//     }

//     return $fileCount;
// }

// // Пример использования
// $folderPath = '/home/ubuntupc/project1/folder'; // Укажите путь к вашей папке
// echo "Количество файлов: " . getFileCount($folderPath);





// №4 Дана папка с файлами и подпапками.
//  Найдите все картинки и переместите их в новую папку. 
//  Сделайте так, чтобы все картинки имели уникальные имена.



// function moveImagesToFolder($sourceDir, $targetDir) {
//     // Создаем папку назначения, если она не существует
//     if (!is_dir($targetDir)) {
//         mkdir($targetDir, 0777, true);
//     }

//     // Указываем расширения изображений, которые будем искать
//     $imageExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp', 'webp'];

//     // Рекурсивно проходим папку и подпапки
//     $iterator = new RecursiveIteratorIterator(
//         new RecursiveDirectoryIterator($sourceDir, FilesystemIterator::SKIP_DOTS)
//     );

//     foreach ($iterator as $file) {
//         if ($file->isFile()) {
//             $extension = strtolower($file->getExtension());

//             // Проверяем, что это изображение
//             if (in_array($extension, $imageExtensions)) {
//                 // Генерируем уникальное имя для файла
//                 $newName = uniqid() . '.' . $extension;

//                 // Путь для перемещения файла
//                 $newPath = $targetDir . DIRECTORY_SEPARATOR . $newName;

//                 // Перемещаем файл
//                 rename($file->getPathname(), $newPath);
//             }
//         }
//     }

//     echo "Все изображения перемещены в папку: $targetDir";
// }

// // Пример использования
// $sourcePath = '/home/ubuntupc/Рабочий стол/My Project/site'; // Укажите путь к исходной папке
// $targetPath = '/home/ubuntupc/project1/folder'; // Укажите путь к папке назначения

// moveImagesToFolder($sourcePath, $targetPath);





// №5 Дан текстовый файл. В нем написан текст, разбитый на предложения.
//  Перемешайте слова в каждом предложении текста и
//   запишите полученный текст в новый файл.



// function shuffleWordsInSentences($inputFile, $outputFile) {
//     // Читаем содержимое исходного файла
//     $content = file_get_contents($inputFile);

//     // Разбиваем текст на предложения (можно адаптировать регулярное выражение при необходимости)
//     $sentences = preg_split('/(?<=[.!?])\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

//     $shuffledText = '';

//     foreach ($sentences as $sentence) {
//         // Разбиваем предложение на слова
//         $words = preg_split('/\s+/', trim($sentence), -1, PREG_SPLIT_NO_EMPTY);

//         // Перемешиваем слова в предложении
//         shuffle($words);

//         // Собираем предложение обратно в строку
//         $shuffledSentence = implode(' ', $words);

//         // Добавляем к итоговому тексту
//         $shuffledText .= $shuffledSentence . ' ';
//     }

//     // Записываем итоговый текст в новый файл
//     file_put_contents($outputFile, trim($shuffledText));

//     echo "Перемешанные предложения записаны в файл: $outputFile";
// }

// // Пример использования
// $inputPath = '/home/ubuntupc/project1/еxample1.txt';  // Укажите путь к исходному файлу
// $outputPath = '/home/ubuntupc/project1/output1.txt'; // Укажите путь к новому файлу

// shuffleWordsInSentences($inputPath, $outputPath);




// Уровень 7.10 задачника PHP



// №1 Дан текстовый файл. Проверьте,
//  что в этом файле в начале одна пустая строка,
//   а в конце - две пустых строки.



// function checkFileFormatting($filePath) {
//     // Читаем содержимое файла в массив строк
//     $lines = file($filePath, FILE_IGNORE_NEW_LINES);

//     // Проверяем, что первая строка пустая
//     $firstLineEmpty = isset($lines[0]) && trim($lines[0]) === '';

//     // Проверяем, что последние две строки пустые
//     $lastTwoLinesEmpty = 
//         isset($lines[count($lines) - 1], $lines[count($lines) - 2]) &&
//         trim($lines[count($lines) - 1]) === '' &&
//         trim($lines[count($lines) - 2]) === '';

//     // Возвращаем результат проверки
//     return $firstLineEmpty && $lastTwoLinesEmpty;
// }

// // Пример использования
// $filePath = '/home/ubuntupc/project1/еxample1.txt'; // Замените на ваш путь к файлу

// if (checkFileFormatting($filePath)) {
//     echo "Файл имеет правильный формат.";
// } else {
//     echo "Файл НЕ имеет правильного формата.";
// }





// №2 Напишите функцию,
//  которая параметром будет принимать путь к папке,
//   а возвращать размер этой папки.



// function getFolderSize($folderPath) {
//     $size = 0;

//     // Открываем папку
//     $directory = opendir($folderPath);
//     if (!$directory) {
//         return false; // Если папка не открылась, возвращаем false
//     }

//     // Проходимся по каждому элементу в папке
//     while (($file = readdir($directory)) !== false) {
//         if ($file !== '.' && $file !== '..') {
//             $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

//             // Если элемент — файл, добавляем его размер
//             if (is_file($filePath)) {
//                 $size += filesize($filePath);
//             }

//             // Если элемент — папка, рекурсивно вызываем функцию
//             if (is_dir($filePath)) {
//                 $size += getFolderSize($filePath);
//             }
//         }
//     }

//     closedir($directory); // Закрываем папку

//     return $size; // Возвращаем общий размер
// }

// // Пример использования
// $folderPath = '/home/ubuntupc/project1'; // Замените на путь к вашей папке
// $folderSize = getFolderSize($folderPath);

// if ($folderSize !== false) {
//     echo "Размер папки: " . $folderSize . " байт.";
// } else {
//     echo "Ошибка: не удалось открыть папку.";
// }




// №3 Дана папка с файлами и подпапками.
//  Получите пути ко всем файлам из папки и подпапок.
//   Результат запишите в новый файл, каждый путь с новой строки.


  

// function getAllFilePaths($folderPath, &$filePaths = []) {
//     // Открываем папку
//     $directory = opendir($folderPath);
//     if (!$directory) {
//         return false; // Если папка не открылась, возвращаем false
//     }

//     // Проходимся по каждому элементу в папке
//     while (($file = readdir($directory)) !== false) {
//         if ($file !== '.' && $file !== '..') {
//             $filePath = $folderPath . DIRECTORY_SEPARATOR . $file;

//             // Если это файл, добавляем его путь в массив
//             if (is_file($filePath)) {
//                 $filePaths[] = $filePath;
//             }

//             // Если это папка, рекурсивно вызываем функцию
//             if (is_dir($filePath)) {
//                 getAllFilePaths($filePath, $filePaths);
//             }
//         }
//     }

//     closedir($directory); // Закрываем папку
//     return $filePaths; // Возвращаем массив путей
// }

// // Пример использования
// $folderPath = '/home/ubuntupc/project1/folder'; // Укажите путь к вашей папке
// $filePaths = getAllFilePaths($folderPath);

// if ($filePaths !== false) {
//     // Записываем пути в новый файл
//     $outputFile = '/home/ubuntupc/project1/file_paths.txt';
//     file_put_contents($outputFile, implode(PHP_EOL, $filePaths));
//     echo "Пути ко всем файлам записаны в '$outputFile'.";
// } else {
//     echo "Ошибка: не удалось открыть папку.";
// }




// №4 Дан текстовый файл. В нем написан текст, разбитый на предложения. 
// Перемешайте слова в каждом предложении текста и
//  запишите полученный текст в новый файл.




// function shuffleWordsInSentences($inputFile, $outputFile) {
//     // Читаем содержимое файла
//     $text = file_get_contents($inputFile);
//     if ($text === false) {
//         die("Ошибка чтения файла: $inputFile");
//     }

//     // Разделяем текст на предложения
//     $sentences = preg_split('/(?<=[.!?])\s+/', $text); // Делим по знакам конца предложения

//     $shuffledSentences = [];

//     foreach ($sentences as $sentence) {
//         // Убираем лишние пробелы и разбиваем предложение на слова
//         $words = preg_split('/\s+/', trim($sentence));

//         // Перемешиваем слова
//         shuffle($words);

//         // Собираем предложение обратно
//         $shuffledSentences[] = implode(' ', $words);
//     }

//     // Записываем перемешанные предложения в новый файл
//     $resultText = implode(' ', $shuffledSentences);
//     file_put_contents($outputFile, $resultText);
// }

// // Пример использования
// $inputFile = '/home/ubuntupc/project1/еxample1.txt'; // Укажите путь к вашему входному файлу
// $outputFile = '/home/ubuntupc/project1/output2.txt'; // Укажите путь к выходному файлу

// shuffleWordsInSentences($inputFile, $outputFile);

// echo "Слова в каждом предложении перемешаны и записаны в '$outputFile'.";





// №5 Сделайте функцию, которая будет удалять папку вместе со 
// всем ее содержимым.



// function deleteDirectory($dir) {
//     // Проверяем, существует ли папка
//     if (!is_dir($dir)) {
//         return false; // Папка не существует
//     }

//     // Получаем все файлы и подпапки в директории
//     $files = array_diff(scandir($dir), ['.', '..']);

//     // Удаляем каждый файл и подпапку
//     foreach ($files as $file) {
//         $filePath = $dir . DIRECTORY_SEPARATOR . $file;

//         if (is_dir($filePath)) {
//             // Если это подпапка, рекурсивно вызываем функцию
//             deleteDirectory($filePath);
//         } else {
//             // Если это файл, удаляем его
//             unlink($filePath);
//         }
//     }

//     // Удаляем пустую папку
//     return rmdir($dir);
// }

// // Пример использования
// $directory = '/home/ubuntupc/project1/folder/folder1'; // Укажите путь к папке для удаления

// if (deleteDirectory($directory)) {
//     echo "Папка '$directory' успешно удалена.";
// } else {
//     echo "Не удалось удалить папку '$directory'.";
// }



// №6 Напишите программу, которая сформирует следующую строку:

// '-x-xx-xxx-xx-x-'



// function generateString() {
//     // Массив для хранения частей строки
//     $parts = [];

//     // Добавляем элементы с 'x' в массив
//     for ($i = 1; $i <= 3; $i++) {
//         $parts[] = str_repeat('x', $i);
//     }

//     // Добавляем элементы с 'xx' и 'x' в массив
//     for ($i = 2; $i >= 1; $i--) {
//         $parts[] = str_repeat('x', $i);
//     }

//     // Формируем итоговую строку
//     $result = '-' . implode('-', $parts) . '-';

//     return $result;
// }

// // Выводим результат
// echo generateString();





// №7 Напишите программу, которая сформирует следующую строку:

// '11 12 13 21 22 23 31 32 33'



// function generateString() {
//     $result = [];

//     // Генерация строк в формате xy, где x и y - числа от 1 до 3
//     for ($x = 1; $x <= 3; $x++) {
//         for ($y = 1; $y <= 3; $y++) {
//             $result[] = $x . $y; // Формируем строку xy
//         }
//     }

//     // Объединяем все элементы массива в строку через пробел
//     return implode(' ', $result);
// }

// // Выводим результат
// echo generateString();




// Уровень 8.1 задачника PHP




// №1 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него имя домена:

// 'test.com';



// $url = 'http://test.com/dir1/dir2/dir3/page.html';

// function getDomain($url) {
//     // Получаем часть URL с хостом (доменом)
//     $host = parse_url($url, PHP_URL_HOST);

//     return $host;
// }

// // Выводим имя домена
// echo getDomain($url); // Результат: test.com




// №2 Дан массив:

// [
// 	[1, 2, 3],
// 	[1, 2],
// 	[1, 2, 3, 4, 5],
// 	[1],
// 	[1, 2, 3, 4],
// ]
// Отсортируйте элементы массива по возрастанию количества элементов в подмассиве.




// $array = [
//     [1, 2, 3],
//     [1, 2],
//     [1, 2, 3, 4, 5],
//     [1],
//     [1, 2, 3, 4],
// ];

// // Функция для сравнения длины подмассивов
// usort($array, function($a, $b) {
//     return count($a) <=> count($b); // Сравниваем по количеству элементов
// });

// // Выводим отсортированный массив
// print_r($array);




// №3 Дан массив:

// [
// 	[2, 4, 5],
// 	[1, 2, 3],
// 	[0, 1, 1],
// 	[5, 7, 1],
// ]
// Отсортируйте элементы массива по возрастанию суммы элементов подмассива.




// $array = [
//     [2, 4, 5],
//     [1, 2, 3],
//     [0, 1, 1],
//     [5, 7, 1],
// ];

// // Сортируем массив по сумме элементов подмассивов
// usort($array, function($a, $b) {
//     return array_sum($a) <=> array_sum($b); // Сравниваем суммы подмассивов
// });

// // Выводим отсортированный массив
// print_r($array);



// №4 Выведите на экран следующую пирамидку:

// x
// xx
// xxx
// xxxx
// xxxxx


// <?php
// for ($i = 1; $i <= 5; $i++) {
//     echo str_repeat('x', $i) . "<br>";
// }




// Уровень 8.2 задачника PHP




// №1 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него имя страницы:

// 'page.html';



// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// $page = basename(parse_url($url, PHP_URL_PATH));
// echo $page;





// №2 Дан массив, подмассивы которого содержат цифры:

// [
// 	[1, 2, 3],
// 	[4, 5, 6],
// 	[7, 8, 9],
// ]
// Слейте элементы этого массива в числа:

// [123, 456, 789]




// $array = [
//     [1, 2, 3],
//     [4, 5, 6],
//     [7, 8, 9],
// ];

// $result = array_map(function($subArray) {
//     return (int) implode('', $subArray);
// }, $array);

// print_r($result);




// №3 Выведите на экран следующую пирамидку:

// xx
// xxxx
// xxxxxx
// xxxxxxxx
// xxxxxxxxxx



// for ($i = 2; $i <= 10; $i += 2) {
//     echo str_repeat('x', $i) . "<br>";
// }





// Уровень 8.3 задачника PHP




// №1 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него протокол:

// 'http';




// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// $parsedUrl = parse_url($url);
// $protocol = $parsedUrl['scheme'];

// echo $protocol; // Выведет: http






// №2 Дан следующий массив:

// 	$arr = [1, 2, 3, 4, 5, 6];

// Дано также число:

// 	$num = 3;

// Добавьте в приведенный массив столько пустых строк, 
// чтобы длина массива стала равна квадрату числа из переменной.




// $arr = [1, 2, 3, 4, 5, 6];
// $num = 3;

// // Вычисляем квадрат числа
// $targetLength = $num * $num;

// // Добавляем пустые строки, пока длина массива не станет равной квадрату числа
// while (count($arr) < $targetLength) {
//     $arr[] = '';
// }

// // Вывод результата
// print_r($arr);




// №3 Выведите на экран следующую пирамидку:

// 111
// 222
// 333
// 444
// 555
// 666
// 777
// 888
// 999




// for ($i = 1; $i <= 9; $i++) {
//     echo str_repeat($i, 3) . "<br>";
// }





// Уровень 8.4 задачника PHP



// №1 По заходу на страницу запишите в сессию время захода юзера.
//  После обновления страницы выведите на экран время последнего захода юзера.




// // Начинаем сессию
// session_start();

// // Получаем текущее время
// $currentTime = date('Y-m-d H:i:s');

// // Проверяем, если в сессии еще нет времени последнего захода
// if (!isset($_SESSION['last_visit'])) {
//     // Записываем текущее время как время первого захода
//     $_SESSION['last_visit'] = $currentTime;
// }

// // Выводим время последнего захода
// echo "Время последнего захода: " . $_SESSION['last_visit'];

// // Обновляем время последнего захода на текущее
// $_SESSION['last_visit'] = $currentTime;




// №2 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него папки в виде массива:

// ['dir1', 'dir2', 'dir3']




// $url = 'http://test.com/dir1/dir2/dir3/page.html';

// // Используем parse_url() для разбора URL
// $parsedUrl = parse_url($url);

// // Получаем путь из разобранного URL
// $path = $parsedUrl['path'];

// // Удаляем имя файла из пути
// $pathWithoutFile = dirname($path);

// // Получаем массив папок, используя explode()
// $folders = explode('/', trim($pathWithoutFile, '/'));

// // Выводим результат
// print_r($folders);




// №3 Выведите на экран следующую пирамидку:

// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// 88888888
// 999999999




// for ($i = 1; $i <= 9; $i++) {
//     // Выводим число $i, повторяя его $i раз
//     echo str_repeat($i, $i) . "\n";
// }





// №4 Дан список городов и их стран, хранящийся в следующей структуре:


// 	$data = [
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city11',
// 		],
// 		[
// 			'country' => 'country2',
// 			'city' =>    'city21',
// 		],
// 		[
// 			'country' => 'country3',
// 			'city' =>    'city31',
// 		],
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city12',
// 		],
// 		[
// 			'country' => 'country1',
// 			'city' =>    'city13',
// 		],
// 		[
// 			'country' => 'country2',
// 			'city' =>    'city22',
// 		],
// 		[
// 			'country' => 'country3',
// 			'city' =>    'city31',
// 		],
// 	];

// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'country1': [
// 		'city11', 'city12', 'city13',
// 	],
// 	'country2': [
// 		'city21', 'city22'
// 	],
// 	'country3': [
// 		'city31', 'city32'
// 	],
// ]




// $data = [
//     [
//         'country' => 'country1',
//         'city' =>    'city11',
//     ],
//     [
//         'country' => 'country2',
//         'city' =>    'city21',
//     ],
//     [
//         'country' => 'country3',
//         'city' =>    'city31',
//     ],
//     [
//         'country' => 'country1',
//         'city' =>    'city12',
//     ],
//     [
//         'country' => 'country1',
//         'city' =>    'city13',
//     ],
//     [
//         'country' => 'country2',
//         'city' =>    'city22',
//     ],
//     [
//         'country' => 'country3',
//         'city' =>    'city32',
//     ],
// ];

// $result = []; // Инициализируем массив для результата

// foreach ($data as $entry) {
//     $country = $entry['country'];
//     $city = $entry['city'];
    
//     // Если страна еще не добавлена в результирующий массив, добавляем ее
//     if (!isset($result[$country])) {
//         $result[$country] = []; // Создаем пустой массив для городов
//     }
    
//     // Добавляем город в соответствующую страну
//     $result[$country][] = $city;
// }

// // Выводим результат
// print_r($result);






// Уровень 8.5 задачника PHP




// №1 При первом заходе на страницу с помощью инпута спросите у 
// пользователя день его рождения.
//  Когда в следующий раз пользователь зайдет в свой день рождения,
//   поздравьте его.




// session_start();

// // Проверка, есть ли уже сохраненная дата рождения в сессии или куках
// if (isset($_SESSION['birthday']) || isset($_COOKIE['birthday'])) {
//     // Получаем дату рождения из куки, если сессия пуста
//     $birthday = isset($_SESSION['birthday']) ? $_SESSION['birthday'] : $_COOKIE['birthday'];
    
//     // Проверяем, совпадает ли текущая дата с днем рождения
//     if (date('m-d') === date('m-d', strtotime($birthday))) {
//         echo "С днем рождения! Поздравляем вас!";
//     } else {
//         echo "Добро пожаловать снова!";
//     }
// } else {
//     // Если дата рождения не задана, запрашиваем у пользователя
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//         $birthday = $_POST['birthday'];
        
//         // Сохраняем дату рождения в сессии и куках
//         $_SESSION['birthday'] = $birthday;
//         setcookie('birthday', $birthday, time() + (365 * 24 * 60 * 60)); // 1 год
//         echo "Спасибо! Ваша дата рождения сохранена.";
//     } else {
//         // Если форма еще не отправлена, показываем форму
        ?>
        <!-- <form method="post">
            <label for="birthday">Введите вашу дату рождения (YYYY-MM-DD):</label>
            <input type="date" id="birthday" name="birthday" required>
            <input type="submit" value="Сохранить">
        </form> -->
        <?php
//     }
// }





// №2 Дан массив со словами. Выведите слова,
//  начинающиеся на одинаковые буквы в своем отдельном списке ul.
//   Над каждым списком сделайте h2 с названием буквы, 
//   для которой сделан список.




// // Исходный массив со словами
// $words = [
//     'apple', 'banana', 'apricot', 'blueberry', 
//     'avocado', 'blackberry', 'cherry', 'cantaloupe', 
//     'date', 'dragonfruit', 'fig', 'grape'
// ];

// // Массив для группировки слов по первой букве
// $groupedWords = [];

// // Группируем слова по первой букве
// foreach ($words as $word) {
//     // Получаем первую букву слова в верхнем регистре
//     $firstLetter = strtoupper($word[0]);
    
//     // Если буква еще не существует в массиве, создаем новый массив
//     if (!isset($groupedWords[$firstLetter])) {
//         $groupedWords[$firstLetter] = [];
//     }
    
//     // Добавляем слово в соответствующую группу
//     $groupedWords[$firstLetter][] = $word;
// }

// // Выводим результат
// foreach ($groupedWords as $letter => $wordsGroup) {
//     echo "<h2>{$letter}</h2>"; // Заголовок с буквой
//     echo "<ul>"; // Начало списка
//     foreach ($wordsGroup as $word) {
//         echo "<li>{$word}</li>"; // Элемент списка
//     }
//     echo "</ul>"; // Конец списка
// }





// №3 Сгенерируйте три селекта.
//  В первом селекте выведите дни месяца от 1 до 31, 
//  во втором - названия месяцев года, 
//  а в третьем - года за предыдущие и следующие 10 лет.




// // Генерация дней месяца
// $days = range(1, 31);

// // Названия месяцев
// $months = [
//     1 => 'Январь',
//     2 => 'Февраль',
//     3 => 'Март',
//     4 => 'Апрель',
//     5 => 'Май',
//     6 => 'Июнь',
//     7 => 'Июль',
//     8 => 'Август',
//     9 => 'Сентябрь',
//     10 => 'Октябрь',
//     11 => 'Ноябрь',
//     12 => 'Декабрь',
// ];

// // Генерация годов за предыдущие и следующие 10 лет
// $currentYear = date("Y");
// $years = range($currentYear - 10, $currentYear + 10);

?>


    <!-- <form action="" method="POST">
        <label for="day">День:</label>
        <select name="day" id="day">
            <?php 
			// foreach ($days as $day): 
			?>
                <option value="
				<?php
				//  echo $day; 
				 ?>
				 ">
				 <?php
				//   echo $day; 
				  ?>
				  </option>
            <?php 
		// endforeach;
		 ?>
        </select>

        <label for="month">Месяц:</label>
        <select name="month" id="month">
            <?php
			//  foreach ($months as $number => $month):
			  ?>
                <option value="
				<?php 
				// echo $number; 
				?>
				">
				<?php 
				// echo $month; 
				?>
				</option>
            <?php 
		// endforeach; 
		?>
        </select>

        <label for="year">Год:</label>
        <select name="year" id="year">
            <?php 
			// foreach ($years as $year): 
			?>
                <option value="
				<?php
				//  echo $year;
				  ?>
				  ">
				  <?php
				//    echo $year; 
				   ?>
				   </option>
            <?php 
		// endforeach;
		 ?>
        </select>

        <input type="submit" value="Отправить">
    </form> -->

<?php



// №4 Модифицируйте предыдущую задачу так, 
// чтобы по умолчанию в селектах была выбрана текущая дата.






// // Получение текущей даты
// $currentDay = date("d");
// $currentMonth = date("m");
// $currentYear = date("Y");

// // Генерация дней месяца
// $days = range(1, 31);

// // Названия месяцев
// $months = [
//     1 => 'Январь',
//     2 => 'Февраль',
//     3 => 'Март',
//     4 => 'Апрель',
//     5 => 'Май',
//     6 => 'Июнь',
//     7 => 'Июль',
//     8 => 'Август',
//     9 => 'Сентябрь',
//     10 => 'Октябрь',
//     11 => 'Ноябрь',
//     12 => 'Декабрь',
// ];

// // Генерация годов за предыдущие и следующие 10 лет
// $years = range($currentYear - 10, $currentYear + 10);

?>

    <!-- <form action="" method="POST">
        <label for="day">День:</label>
        <select name="day" id="day">
            <?php 
			// foreach ($days as $day): 
			?>
                <option value="
				<?php
				//  echo $day; 
				 ?>
				 "
				  <?php
				//    echo ($day == $currentDay) ? 'selected' : ''; 
				   ?>
				   >
                    <?php
					//  echo $day; 
					 ?>
                </option>
            <?php
		//  endforeach; 
		 ?>
        </select>

        <label for="month">Месяц:</label>
        <select name="month" id="month">
            <?php 
			// foreach ($months as $number => $month): 
			?>
                <option value="
				<?php 
				// echo $number; 
				?>
				" 
				<?php
				//  echo ($number == $currentMonth) ? 'selected' : ''; 
				 ?>
				 >
                    <?php
					//  echo $month; 
					 ?>
                </option>
            <?php 
		// endforeach; 
		?>
        </select>

        <label for="year">Год:</label>
        <select name="year" id="year">
            <?php 
			// foreach ($years as $year): 
			?>
                <option value="
				<?php
				//  echo $year; 
				 ?>
				 " 
				 <?php
				//   echo ($year == $currentYear) ? 'selected' : ''; 
				  ?>
				  >
                    <?php 
					// echo $year; 
					?>
                </option>
            <?php
		//  endforeach; 
		 ?>
        </select>

        <input type="submit" value="Отправить">
    </form> -->

<?php




// №5 Выведите на экран следующую пирамидку:

// 1
// 333
// 55555
// 7777777
// 999999999




// // Количество строк в пирамидке
// $rows = 5;

// // Цикл для создания пирамидки
// for ($i = 1; $i <= $rows; $i++) {
//     // Определяем текущее нечетное число
//     $currentNumber = $i * 2 - 1;
//     // Генерируем строку с текущим числом, повторяющимся $currentNumber раз
//     $line = str_repeat($currentNumber, $currentNumber);
//     // Выводим строку
//     echo $line . "\n";
// }





// Уровень 8.6 задачника PHP



// №1 Дано меню со ссылками. Покрасьте в красный цвет ту ссылку,
//  адрес которой совпадает с URL из адресной строки браузера.




// // Текущий URL страницы
// $currentUrl = $_SERVER['REQUEST_URI'];

// // Массив ссылок для меню
// $menu = [
//     '/' => 'Главная',
//     '/index2.php' => 'О нас',
//     '/services' => 'Услуги',
//     '/contact' => 'Контакты',
//     '/blog' => 'Блог',
// ];
?>



<!-- <ul> -->
    <?php 
	// foreach ($menu as $url => $name): 
    //     // Устанавливаем стиль для активной ссылки
    //     $color = ($url === $currentUrl) ? 'red' : 'black';
    ?>
        <!-- <li>
            <a href=" -->
			<?php
			// echo $url ;
			 ?>
			 <!-- " style="color:  -->
			 <?php
			// echo $color;
			  ?>
			  <!-- ;"> -->
                <?php
				// echo $name ;
				  ?>
            <!-- </a>
        </li> -->
    <?php 
// endforeach;
 ?>
 <!-- </ul> -->


 <?php





// №2 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите содержимое первой папки:

// 'dir1'



// $url = 'http://test.com/dir1/dir2/dir3/page.html';

// // Разбираем URL и получаем путь
// $path = parse_url($url, PHP_URL_PATH);

// // Разбиваем путь на части, убирая пустые элементы
// $segments = array_filter(explode('/', $path));

// // Извлекаем первую папку
// $firstFolder = $segments[1]; // Индекс 1, т.к. 0 будет пустым (до первого слеша)

// echo $firstFolder; // Выводит: dir1



// №3 Выведите на экран следующую пирамидку:

// xxxxx
// xxxx
// xxx
// xx
// x



// for ($i = 5; $i >= 1; $i--) {
//     echo str_repeat('x', $i) . "<br>";
// }




// №4 Дан список событий за определенные даты,
//  хранящийся в следующей структуре:

 

// 	$events = [
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name1'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name2'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name3'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name4'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name7'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name8'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name9'
// 		],
// 	]

// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	'2019-12-29': ['name1', 'name3', 'name5', 'name7'],
// 	'2019-12-30': ['name4', 'name8', 'name9'],
// 	'2019-12-31': ['name2', 'name6'],
// ]





// $events = [
//     [
//         'date' => '2019-12-29',
//         'event' => 'name1'
//     ],
//     [
//         'date' => '2019-12-31',
//         'event' => 'name2'
//     ],
//     [
//         'date' => '2019-12-29',
//         'event' => 'name3'
//     ],
//     [
//         'date' => '2019-12-30',
//         'event' => 'name4'
//     ],
//     [
//         'date' => '2019-12-29',
//         'event' => 'name5'
//     ],
//     [
//         'date' => '2019-12-31',
//         'event' => 'name6'
//     ],
//     [
//         'date' => '2019-12-29',
//         'event' => 'name7'
//     ],
//     [
//         'date' => '2019-12-30',
//         'event' => 'name8'
//     ],
//     [
//         'date' => '2019-12-30',
//         'event' => 'name9'
//     ],
// ];

// $result = [];

// // Проходим по каждому событию в массиве
// foreach ($events as $event) {
//     $date = $event['date'];
//     $eventName = $event['event'];
    
//     // Если дата еще не существует в результате, создаем ее
//     if (!isset($result[$date])) {
//         $result[$date] = [];
//     }
    
//     // Добавляем событие к соответствующей дате
//     $result[$date][] = $eventName;
// }

// // Вывод результата
// print_r($result);





// Уровень 8.7 задачника PHP




// №1 Дано слово. Перемешайте буквы этого слова в случайном порядке.



// function shuffleWord($word) {
//     // Перемешиваем буквы слова и возвращаем результат
//     return str_shuffle($word);
// }

// // Пример использования
// $word = "abcd"; // Замените на любое слово
// $shuffledWord = shuffleWord($word);

// echo "Исходное слово: $word\n";
// echo "Перемешанное слово: $shuffledWord\n";



// №2 Дана форма с инпутом. В инпут вводится число.
//  По отправки формы выведите в список ul все 
//  возможные варианты разложения числа на два множителя.




// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получаем введенное число
//     $number = intval($_POST['number']);
//     $factors = [];

//     // Находим все пары множителей
//     for ($i = 1; $i <= $number; $i++) {
//         if ($number % $i === 0) {
//             $factors[] = [$i, $number / $i];
//         }
//     }
// }
?>


    <!-- <h1>Введите число</h1>
    <form method="post">
        <input type="number" name="number" required>
        <button type="submit">Отправить</button>
    </form> -->

    <?php 
	// if (!empty($factors)):
	 ?>
        <!-- <h2>Варианты разложения числа  -->
			<?php 
			// echo $number; 
			?> 
			<!-- на два множителя:</h2>
        <ul> -->
            <?php
			// foreach ($factors as $pair): 
			?>
                <!-- <li> -->
					<?php
					//  echo $pair[0] . ' * ' . $pair[1];
					  ?>
					  <!-- </li> -->
            <?php
		//  endforeach; 
		 ?>
        <!-- </ul> -->
    <?php 
// endif; 



// №3 Выведите на экран следующую пирамидку:

// 999999999
// 88888888
// 7777777
// 666666
// 55555
// 4444
// 333
// 22
// 1




// // Максимальное число для пирамидки
// $maxNumber = 9;

// // Внешний цикл для строк
// for ($i = $maxNumber; $i >= 1; $i--) {
//     // Внутренний цикл для вывода цифр
//     for ($j = 1; $j <= $i; $j++) {
//         echo $i; // Выводим текущее число
//     }
//     echo "<br>"; // Переход на новую строку
// }





// №4 Дан список событий за определенные даты, хранящийся в следующей структуре:


// 	$events = [
// 		'2019-12-29': ['name1', 'name3', 'name5', 'name7'],
// 		'2019-12-30': ['name4', 'name8', 'name9'],
// 		'2019-12-31': ['name2', 'name6'],
// 	]

// Напишите код, которой переделает структуру данных вот в такую:


// 	$events = [
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name1'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name2'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name3'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name4'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2019-12-31'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2019-12-29'
// 			'event' => 'name7'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name8'
// 		],
// 		[
// 			'date' =>  '2019-12-30'
// 			'event' => 'name9'
// 		],
// 	]






// // Исходный массив событий
// $events = [
//     '2019-12-29' => ['name1', 'name3', 'name5', 'name7'],
//     '2019-12-30' => ['name4', 'name8', 'name9'],
//     '2019-12-31' => ['name2', 'name6'],
// ];

// // Инициализируем пустой массив для хранения преобразованных данных
// $result = [];

// // Проходим по каждой дате в исходном массиве
// foreach ($events as $date => $eventNames) {
//     // Проходим по каждому событию для текущей даты
//     foreach ($eventNames as $eventName) {
//         // Добавляем новую запись в результирующий массив
//         $result[] = [
//             'date' => $date,
//             'event' => $eventName,
//         ];
//     }
// }

// // Выводим преобразованный массив
// print_r($result);






// Уровень 8.8 задачника PHP




// №1 Дана форма с инпутом. В инпут вводится число.
//  По отправки формы, проверьте, является ли это число совершенным.




// // Функция для проверки, является ли число совершенным
// function isPerfectNumber($number) {
//     if ($number < 1) {
//         return false; // Совершенные числа только положительные
//     }

//     $sum = 0;

//     // Находим делители и суммируем их
//     for ($i = 1; $i <= $number / 2; $i++) {
//         if ($number % $i == 0) {
//             $sum += $i;
//         }
//     }

//     return $sum === $number; // Проверяем, равна ли сумма делителей числу
// }

// // Проверка, была ли отправлена форма
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получаем значение из инпута и очищаем его
//     $number = isset($_POST['number']) ? intval($_POST['number']) : 0;

//     // Проверяем, является ли число совершенным
//     if (isPerfectNumber($number)) {
//         $message = "$number является совершенным числом.";
//     } else {
//         $message = "$number не является совершенным числом.";
//     }
// }
?>

    <!-- <form method="post">
        <label for="number">Введите число:</label>
        <input type="number" id="number" name="number" required>
        <input type="submit" value="Проверить">
    </form> -->

    <?php
	//  if (isset($message)): 
	 ?>
        <p>
			<?php
			//  echo $message; 
			 ?>
			 <!-- </p> -->
    <?php 
// endif; 





// №2 Дан список событий за определенные месяцы,
//  хранящийся в следующей структуре:



// 	$events = [
// 		[
// 			'date' =>  '2019-12'
// 			'event' => 'name1'
// 		],
// 		[
// 			'date' =>  '2019-12'
// 			'event' => 'name2'
// 		],
// 		[
// 			'date' =>  '2019-11'
// 			'event' => 'name3'
// 		],
// 		[
// 			'date' =>  '2019-11'
// 			'event' => 'name4'
// 		],
// 		[
// 			'date' =>  '2020-10'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2020-10'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2020-11'
// 			'event' => 'name5'
// 		],
// 		[
// 			'date' =>  '2020-11'
// 			'event' => 'name6'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name7'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name8'
// 		],
// 		[
// 			'date' =>  '2020-12'
// 			'event' => 'name9'
// 		],
// 	]

// Напишите код, которой переделает структуру данных вот в такую:

// [
// 	2019: [
// 		11: [массив событий],
// 		12: [массив событий],
// 	],
// 	2020: [
// 		10: [массив событий],
// 		11: [массив событий],
// 		12: [массив событий],
// 	]
// ]





// $events = [
//     [
//         'date' =>  '2019-12',
//         'event' => 'name1'
//     ],
//     [
//         'date' =>  '2019-12',
//         'event' => 'name2'
//     ],
//     [
//         'date' =>  '2019-11',
//         'event' => 'name3'
//     ],
//     [
//         'date' =>  '2019-11',
//         'event' => 'name4'
//     ],
//     [
//         'date' =>  '2020-10',
//         'event' => 'name5'
//     ],
//     [
//         'date' =>  '2020-10',
//         'event' => 'name6'
//     ],
//     [
//         'date' =>  '2020-11',
//         'event' => 'name5'
//     ],
//     [
//         'date' =>  '2020-11',
//         'event' => 'name6'
//     ],
//     [
//         'date' =>  '2020-12',
//         'event' => 'name7'
//     ],
//     [
//         'date' =>  '2020-12',
//         'event' => 'name8'
//     ],
//     [
//         'date' =>  '2020-12',
//         'event' => 'name9'
//     ],
// ];

// $result = [];

// // Проходим по каждому событию
// foreach ($events as $event) {
//     $date = $event['date'];
//     $year = (int)substr($date, 0, 4); // Извлекаем год
//     $month = (int)substr($date, 5, 2); // Извлекаем месяц
//     $eventName = $event['event']; // Название события

//     // Если год не существует в результате, инициализируем его
//     if (!isset($result[$year])) {
//         $result[$year] = [];
//     }

//     // Если месяц не существует для данного года, инициализируем его
//     if (!isset($result[$year][$month])) {
//         $result[$year][$month] = []; // Инициализируем массив для месяца
//     }

//     // Добавляем событие в массив для данного месяца
//     $result[$year][$month][] = $eventName; 
// }

// // Вывод результата
// print_r($result);






// Уровень 8.9 задачника PHP




// №1 Дан такой список дел за определенную дату:


// 	$affairs = [
// 		'2019-12-31' => ['массив дел'],
// 		'2018-11-29' => ['массив дел'],
// 		'2018-11-30' => ['массив дел'],
// 		'2018-12-27' => ['массив дел'],
// 		'2019-12-29' => ['массив дел'],
// 		'2019-12-30' => ['массив дел'],
// 		'2018-12-30' => ['массив дел'],
// 		'2018-12-31' => ['массив дел'],
// 	];

// Выведите на экран все дела за 2018 год.






// $affairs = [
//     '2019-12-31' => ['дела 1', 'дела 2'],
//     '2018-11-29' => ['дела 3'],
//     '2018-11-30' => ['дела 4', 'дела 5'],
//     '2018-12-27' => ['дела 6'],
//     '2019-12-29' => ['дела 7'],
//     '2019-12-30' => ['дела 8'],
//     '2018-12-30' => ['дела 9', 'дела 10'],
//     '2018-12-31' => ['дела 11'],
// ];

// // Фильтруем дела за 2018 год
// $year = '2018';
// $affairs_2018 = [];

// foreach ($affairs as $date => $tasks) {
//     if (strpos($date, $year) === 0) { // Проверяем, начинается ли дата с "2018"
//         $affairs_2018[$date] = $tasks;
//     }
// }

// // Выводим результаты
// if (!empty($affairs_2018)) {
//     echo "Дела за $year год:\n";
//     foreach ($affairs_2018 as $date => $tasks) {
//         echo "$date: " . implode(', ', $tasks) . "\n"; // Выводим дату и дела
//     }
// } else {
//     echo "Дела за $year год отсутствуют.\n";
// }





// №2 Дан массив:


// 	$arr = [
// 		[
// 			'header' => 'head1',
// 			'text' => '111 111 111',
// 			'href' => '/page/111/',
// 		],
// 		[
// 			'header' => 'head2',
// 			'text' => '222 222 222',
// 			'href' => '/page/222/',
// 		],
// 		[
// 			'header' => 'head3',
// 			'text' => '333 333 333',
// 			'href' => '/page/333/',
// 		],
// 	];

// Сформируйте с помощью этого массива следующую верстку:

// <div class="block">
// 	<h2>head1</h2>
// 	<p>
// 		111 111 111
// 	</p>
// 	<a href="/page/111/">more...</a>
// </div>
// <div class="block">
// 	<h2>head2</h2>
// 	<p>
// 		222 222 222
// 	</p>
// 	<a href="/page/222/">more...</a>
// </div>
// <div class="block">
// 	<h2>head3</h2>
// 	<p>
// 		333 333 333
// 	</p>
// 	<a href="/page/333/">more...</a>
// </div>





// $arr = [
//     [
//         'header' => 'head1',
//         'text' => '111 111 111',
//         'href' => '/page/111/',
//     ],
//     [
//         'header' => 'head2',
//         'text' => '222 222 222',
//         'href' => '/page/222/',
//     ],
//     [
//         'header' => 'head3',
//         'text' => '333 333 333',
//         'href' => '/page/333/',
//     ],
// ];

// // Формирование HTML-верстки
// foreach ($arr as $item) {
//     echo '<div class="block">';
//     echo '<h2>' . htmlspecialchars($item['header']) . '</h2>'; // Используем htmlspecialchars для предотвращения XSS
//     echo '<p>' . htmlspecialchars($item['text']) . '</p>'; // Используем htmlspecialchars для предотвращения XSS
//     echo '<a href="' . htmlspecialchars($item['href']) . '">more...</a>';
//     echo '</div>';
// }





// Уровень 8.10 задачника PHP





// №1 Дана форма с двумя инпутами.
//  В инпуты вводятся числа. По отправки формы, проверьте, 
//  являются ли эти числа дружественными или нет.


?>
    <!-- <form method="POST">
        <label for="number1">Число 1:</label>
        <input type="number" id="number1" name="number1" required>
        <br>
        <label for="number2">Число 2:</label>
        <input type="number" id="number2" name="number2" required>
        <br>
        <input type="submit" value="Проверить">
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $num1 = (int)$_POST['number1'];
    //     $num2 = (int)$_POST['number2'];

    //     if (areFriendlyNumbers($num1, $num2)) {
    //         echo "<p>Числа $num1 и $num2 являются дружественными.</p>";
    //     } else {
    //         echo "<p>Числа $num1 и $num2 не являются дружественными.</p>";
    //     }
    // }

    // function areFriendlyNumbers($a, $b) {
    //     return sumOfDivisors($a) === $b && sumOfDivisors($b) === $a;
    // }

    // function sumOfDivisors($num) {
    //     $sum = 0;
    //     for ($i = 1; $i <= $num / 2; $i++) {
    //         if ($num % $i === 0) {
    //             $sum += $i;
    //         }
    //     }
    //     return $sum;
    // }





	// №2 Дан некоторый массив:

	
	// 	$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	
	// Дана переменная:
	
	
	// 	$n = 3;
	
	// Превратите этот массив в двухмерный, по $n элементов в подмассиве.
	
	
	
	
	// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
	// $n = 3;
	
	// function chunkArray($array, $size) {
	// 	$result = [];
	// 	for ($i = 0; $i < count($array); $i += $size) {
	// 		$result[] = array_slice($array, $i, $size);
	// 	}
	// 	return $result;
	// }
	
	// $chunkedArray = chunkArray($arr, $n);
	// print_r($chunkedArray);





	// №3 Дан массив:

	// [
	// 	[1, 2, 3, 4, 5],
	// 	[1, 2, 3],
	// 	[1, 2],
	// ]
	// Добавьте в каждый подмассив столько пустых строк,
	//  чтобы количество элементов в каждом подмассиве 
	//  стало равно количеству элементов в самом длинном подмассиве.
	
	
	
	
	// // Исходный массив
	// $arr = [
	// 	[1, 2, 3, 4, 5],
	// 	[1, 2, 3],
	// 	[1, 2],
	// ];
	
	// // Находим длину самого длинного подмассива
	// $maxLength = 0;
	// foreach ($arr as $subArray) {
	// 	if (count($subArray) > $maxLength) {
	// 		$maxLength = count($subArray);
	// 	}
	// }
	
	// // Добавляем пустые строки в подмассивы
	// foreach ($arr as &$subArray) {
	// 	// Определяем, сколько пустых строк нужно добавить
	// 	$emptyCount = $maxLength - count($subArray);
		
	// 	// Добавляем пустые строки
	// 	for ($i = 0; $i < $emptyCount; $i++) {
	// 		$subArray[] = ''; // Добавляем пустую строку
	// 	}
	// }
	
	// // Освобождаем ссылку на последний элемент
	// unset($subArray);
	
	// // Вывод результата
	// print_r($arr);



// 	№4 Дан список каких-то данных за определенные даты,
// 	хранящийся в следующей структуре:
   

// 	   $data = [
// 		   [
// 			   'year' =>  2019,
// 			   'month' => 11,
// 			   'day' => 20,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2019,
// 			   'month' => 11,
// 			   'day' => 21,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2019,
// 			   'month' => 12,
// 			   'day' => 25,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2019,
// 			   'month' => 12,
// 			   'day' => 26,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2020,
// 			   'month' => 10,
// 			   'day' => 29,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2020,
// 			   'month' => 10,
// 			   'day' => 30,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2020,
// 			   'month' => 11,
// 			   'day' => 19,
// 			   'data' => ['массив с данными']
// 		   ],
// 		   [
// 			   'year' =>  2020,
// 			   'month' => 11,
// 			   'day' => 20,
// 			   'data' => ['массив с данными']
// 		   ],
// 	   ]

//    Напишите код, которой переделает структуру данных в структуру вида:
   
//    [
// 	   год1: [
// 		   месяц1: [
// 			   день1: [массив данных],
// 			   день2: [массив данных],
// 			   день3: [массив данных],
// 		   ],
// 		   месяц2: [
// 			   день1: [массив данных],
// 			   день2: [массив данных],
// 			   день3: [массив данных],
// 		   ]
// 	   ]
// 	   год2: [
// 		   месяц1: [
// 			   день1: [массив данных],
// 			   день2: [массив данных],
// 			   день3: [массив данных],
// 		   ],
// 		   месяц2: [
// 			   день1: [массив данных],
// 			   день2: [массив данных],
// 			   день3: [массив данных],
// 		   ]
// 	   ]
//    ]
   
   
   
   

//    $data = [
// 	   [
// 		   'year' => 2019,
// 		   'month' => 11,
// 		   'day' => 20,
// 		   'data' => ['массив с данными 1']
// 	   ],
// 	   [
// 		   'year' => 2019,
// 		   'month' => 11,
// 		   'day' => 21,
// 		   'data' => ['массив с данными 2']
// 	   ],
// 	   [
// 		   'year' => 2019,
// 		   'month' => 12,
// 		   'day' => 25,
// 		   'data' => ['массив с данными 3']
// 	   ],
// 	   [
// 		   'year' => 2019,
// 		   'month' => 12,
// 		   'day' => 26,
// 		   'data' => ['массив с данными 4']
// 	   ],
// 	   [
// 		   'year' => 2020,
// 		   'month' => 10,
// 		   'day' => 29,
// 		   'data' => ['массив с данными 5']
// 	   ],
// 	   [
// 		   'year' => 2020,
// 		   'month' => 10,
// 		   'day' => 30,
// 		   'data' => ['массив с данными 6']
// 	   ],
// 	   [
// 		   'year' => 2020,
// 		   'month' => 11,
// 		   'day' => 19,
// 		   'data' => ['массив с данными 7']
// 	   ],
// 	   [
// 		   'year' => 2020,
// 		   'month' => 11,
// 		   'day' => 20,
// 		   'data' => ['массив с данными 8']
// 	   ],
//    ];
   
//    // Инициализация результирующего массива
//    $result = [];
   
//    // Проход по исходному массиву
//    foreach ($data as $entry) {
// 	   $year = $entry['year'];
// 	   $month = $entry['month'];
// 	   $day = $entry['day'];
// 	   $dataArray = $entry['data'];
   
// 	   // Создаем структуру, если год еще не добавлен
// 	   if (!isset($result[$year])) {
// 		   $result[$year] = [];
// 	   }
   
// 	   // Создаем структуру для месяца, если месяц еще не добавлен
// 	   if (!isset($result[$year][$month])) {
// 		   $result[$year][$month] = [];
// 	   }
   
// 	   // Добавляем данные для конкретного дня
// 	   $result[$year][$month][$day] = $dataArray;
//    }
   
//    // Вывод результата
//    print_r($result);




// Уровень 9.1 задачника PHP




// №1 Дан текст со знаками препинаний.
//  Получите массив предложений этого текста.



// $text = "Привет! Как дела? У меня всё хорошо. Надеюсь, у тебя тоже! Погода отличная, правда?";

// // Разбиваем текст на предложения
// $sentences = preg_split('/(?<=[.!?])\s+/', $text, -1, PREG_SPLIT_NO_EMPTY);

// // Выводим результат
// print_r($sentences);




// №2 Всем ссылкам, ведущим на чужой сайт, добавьте target="_blank".




// $html = '
//     <a href="http://localhost:3000/index2.php">Example</a>
//     <a href="/local/page">Local Page</a>
//     <a href="https://another-site.com">Another Site</a>
// ';

// // Добавляем target="_blank" только к внешним ссылкам
// $result = preg_replace_callback(
//     '/<a\s+[^>]*href=["\'](https?:\/\/[^"\']+)["\'][^>]*>/i',
//     function ($matches) {
//         // Проверяем, есть ли уже target, если нет, добавляем его
//         if (strpos($matches[0], 'target=') === false) {
//             return str_replace(
//                 '<a ',
//                 '<a target="_blank" ',
//                 $matches[0]
//             );
//         }
//         return $matches[0]; // Если уже есть target, оставляем как есть
//     },
//     $html
// );

// // Выводим результат
// echo $result;




// №3 Дана некоторая строка:

// $str = 'abcde abcde'
// В переменной хранятся символы:

// $del = 'abe';
// Удалите из строки все указанные в переменной символы.
//  В нашем случае должно получится следующее:

// 'cd cd'




// $str = 'abcde abcde';
// $del = 'abe';

// // Преобразуем строку $del в массив символов
// $charsToRemove = str_split($del);

// // Удаляем указанные символы из строки $str
// $result = str_replace($charsToRemove, '', $str);

// // Выводим результат
// echo $result;





// $str = 'abcde abcde';
// $del = 'abe';

// // Удаляем все символы, указанные в $del, с помощью регулярного выражения
// $result = preg_replace("/[$del]/", '', $str);

// // Выводим результат
// echo $result;






// №4 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Получите массив элементов его главной диагонали:

// [
// 	11, 22, 33, 44, 55
// ]



// <?php
// $arr = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// $diagonal = [];

// foreach ($arr as $i => $row) {
//     $diagonal[] = $row[$i]; // Добавляем элемент с одинаковыми индексами
// }

// print_r($diagonal);




// Уровень 9.2 задачника PHP



// №1 Два числа делятся друг на друга, 
// в результате получается периодическая дробь.
//  Напишите код, который определит период этой дроби.



// function getDecimalPeriod($numerator, $denominator) {
//     $remainder = $numerator % $denominator; // Начальный остаток
//     $remainders = []; // Массив для отслеживания остатков
//     $decimalPart = ''; // Десятичная часть дроби

//     // Выполняем деление до тех пор, пока остаток не повторится
//     while (!isset($remainders[$remainder]) && $remainder != 0) {
//         $remainders[$remainder] = strlen($decimalPart); // Запоминаем позицию остатка

//         // Умножаем остаток на 10 для следующей цифры в дроби
//         $remainder *= 10;
//         $digit = floor($remainder / $denominator); // Получаем текущую цифру
//         $decimalPart .= $digit; // Добавляем цифру в десятичную часть
//         $remainder %= $denominator; // Обновляем остаток
//     }

//     // Если остаток повторился, определяем период
//     if ($remainder != 0) {
//         $start = $remainders[$remainder]; // Позиция начала периода
//         $period = substr($decimalPart, $start); // Выделяем период
//         return $period;
//     } else {
//         return 'Нет периода'; // Дробь конечная
//     }
// }

// // Пример использования:
// echo getDecimalPeriod(1, 3); // Выведет: 3
// echo "\n";
// echo getDecimalPeriod(1, 7); // Выведет: 142857




// №2 Дана форма с инпутом. В инпут вводится целое число. 
// По отправки формы выведите в абзац разложение
//  этого числа на простые множители.


// <!-- HTML-форма -->
// <form method="post">
//     <label>Введите целое число:</label>
//     <input type="number" name="number" required>
//     <button type="submit">Разложить</button>
// </form>

// <?php
// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $number = abs((int)$_POST['number']); // Получаем и преобразуем ввод в целое число
//     if ($number > 1) {
//         echo "<p>Разложение числа $number на простые множители: ";
//         echo implode(' × ', primeFactors($number)); // Выводим разложение
//         echo "</p>";
//     } else {
//         echo "<p>Введите число больше 1.</p>";
//     }
// }

// // Функция для разложения на простые множители
// function primeFactors($num) {
//     $factors = []; // Массив для хранения множителей

//     // Проверяем делимость на 2
//     while ($num % 2 == 0) {
//         $factors[] = 2;
//         $num /= 2;
//     }

//     // Проверяем делимость на нечетные числа
//     for ($i = 3; $i * $i <= $num; $i += 2) {
//         while ($num % $i == 0) {
//             $factors[] = $i;
//             $num /= $i;
//         }
//     }

//     // Если после цикла осталось простое число > 2
//     if ($num > 2) {
//         $factors[] = $num;
//     }

//     return $factors;
// }




// №3 Дана форма с двумя инпутами.
//  По отправки формы выведите список список ul всех простых чисел из
//   промежутка, заданном значениями инпутов.


// <!-- HTML-форма -->
// <form method="post">
//     <label>Введите начальное число:</label>
//     <input type="number" name="start" required>
//     <br>
//     <label>Введите конечное число:</label>
//     <input type="number" name="end" required>
//     <br>
//     <button type="submit">Найти простые числа</button>
// </form>

// <?php
// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $start = (int)$_POST['start']; // Начало промежутка
//     $end = (int)$_POST['end'];     // Конец промежутка

//     // Убедимся, что начало меньше конца
//     if ($start > $end) {
//         echo "<p>Начальное число должно быть меньше или равно конечному.</p>";
//     } else {
//         echo "<ul>";
//         // Перебор чисел в промежутке и проверка на простоту
//         for ($i = $start; $i <= $end; $i++) {
//             if (isPrime($i)) {
//                 echo "<li>$i</li>";
//             }
//         }
//         echo "</ul>";
//     }
// }

// // Функция для проверки, является ли число простым
// function isPrime($num) {
//     if ($num < 2) return false; // Числа меньше 2 не являются простыми
//     for ($i = 2; $i * $i <= $num; $i++) {
//         if ($num % $i === 0) return false; // Если делится нацело, не простое
//     }
//     return true;
// }



// №4 Пусть в базе данных хранится следующая таблица:

// таблица users
// id	name	age	salary
// 1	user1	23	400
// 2	user2	25	500
// 3	user3	23	500
// По заходу на страницу сайта выведите эту таблицу 
// в виде HTML таблицы следующим образом:

// <table>
// 	<tr>
// 		<th>id</th>
// 		<th>name</th>
// 		<th>age</th>
// 		<th>salary</th>
// 	</tr>
// 	<tr>
// 		<td>1</td>
// 		<td>user1</td>
// 		<td>23</td>
// 		<td>400</td>
// 	</tr>
// 	<tr>
// 		<td>2</td>
// 		<td>user2</td>
// 		<td>25</td>
// 		<td>500</td>
// 	</tr>
// 	<tr>
// 		<td>3</td>
// 		<td>user3</td>
// 		<td>23</td>
// 		<td>500</td>
// 	</tr>
// </table>



// Шаги:
// 1. Создайте базу данных и таблицу users с помощью SQL-запроса:


// CREATE DATABASE example_db;

// USE example_db;

// CREATE TABLE users (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(50),
//     age INT,
//     salary INT
// );

// INSERT INTO users (name, age, salary) VALUES 
// ('user1', 23, 400),
// ('user2', 25, 500),
// ('user3', 23, 500);





// <?php
// // Параметры подключения к базе данных
// $host = 'localhost';
// $db = 'example_db';
// $user = 'root';
// $password = ''; // Укажите свой пароль для MySQL, если он установлен

// try {
//     // Подключение к базе данных через PDO
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // Выполняем SQL-запрос для получения всех записей из таблицы users
//     $stmt = $pdo->query("SELECT * FROM users");

//     // Начинаем формировать HTML-таблицу
//     echo '<table border="1" cellspacing="0" cellpadding="5">';
//     echo '<tr>
//             <th>id</th>
//             <th>name</th>
//             <th>age</th>
//             <th>salary</th>
//           </tr>';

//     // Выводим строки из результата запроса
//     while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
//         echo '<tr>';
//         echo '<td>' . htmlspecialchars($row['id']) . '</td>';
//         echo '<td>' . htmlspecialchars($row['name']) . '</td>';
//         echo '<td>' . htmlspecialchars($row['age']) . '</td>';
//         echo '<td>' . htmlspecialchars($row['salary']) . '</td>';
//         echo '</tr>';
//     }

//     echo '</table>';
// } catch (PDOException $e) {
//     // Обрабатываем ошибку подключения
//     echo 'Ошибка подключения: ' . $e->getMessage();
// }




// Уровень 9.3 задачника PHP




// №1 Дан массив со словами. Получите из этого массива случайное слово, 
// начинающееся на заданную букву.



// <?php
// // Исходный массив со словами
// $words = ['apple', 'banana', 'apricot', 'blueberry', 'avocado', 'cherry', 'almond'];

// // Заданная буква
// $letter = 'a'; // Например, ищем слова, начинающиеся на 'a'

// // Фильтруем массив, оставляя только те слова, что начинаются на заданную букву
// $filteredWords = array_filter($words, function($word) use ($letter) {
//     return stripos($word, $letter) === 0;
// });

// // Проверяем, есть ли подходящие слова
// if (!empty($filteredWords)) {
//     // Получаем случайное слово из отфильтрованных
//     $randomWord = $filteredWords[array_rand($filteredWords)];
//     echo "Случайное слово на букву '{$letter}': " . $randomWord;
// } else {
//     echo "Слова на букву '{$letter}' не найдены.";
// }





// №2 Пусть у нас есть дата 22.02.2017. В этой дате 4 двойки. 
// Найдите все даты с 4-мя двойками в текущем столетии.




// function hasFourTwos($date) {
//     // Подсчитываем количество символов '2' в дате
//     return substr_count($date, '2') === 4;
// }

// function findDatesWithFourTwos() {
//     $result = [];

//     // Перебираем все годы от 2000 до 2099
//     for ($year = 2000; $year <= 2099; $year++) {
//         // Перебираем все месяцы от 01 до 12
//         for ($month = 1; $month <= 12; $month++) {
//             // Перебираем все дни от 01 до 31
//             for ($day = 1; $day <= 31; $day++) {
//                 // Форматируем день и месяц с ведущими нулями
//                 $date = sprintf('%02d.%02d.%d', $day, $month, $year);

//                 // Проверяем, является ли дата валидной
//                 if (checkdate($month, $day, $year) && hasFourTwos($date)) {
//                     $result[] = $date;
//                 }
//             }
//         }
//     }

//     return $result;
// }

// // Вызываем функцию и выводим результат
// $dates = findDatesWithFourTwos();
// echo "<pre>";
// print_r($dates);
// echo "</pre>";



// №3 Дан файл с некоторой произвольной версткой внутри которой 
// расположены ссылки следующего вида:

// <div>
// 	text text text
// 	http://code.mu/ru/
// 	text text text
// 	https://code.mu/ru/
// </div>
// Прочитайте этот файл и отправьте в браузер его текст так,
//  чтобы ссылки превратились в теги a:

// <div>
// 	text text text
// 	<a href="http://code.mu/ru/">code.mu/ru/</a>
// 	text text text
// 	<a href="https://code.mu/ru/">code.mu/ru</a>
// </div>





// // Укажите путь к файлу с версткой
// $file_path = 'path/to/your/file.html';

// // Проверяем, существует ли файл
// if (file_exists($file_path)) {
//     // Читаем содержимое файла
//     $content = file_get_contents($file_path);

//     // Используем регулярное выражение для поиска URL
//     $pattern = '/(http[s]?:\/\/[^\s]+)/';

//     // Заменяем ссылки на теги <a>
//     $content_with_links = preg_replace_callback($pattern, function($matches) {
//         $url = $matches[0];
//         // Извлекаем домен для отображения в тексте ссылки
//         $parsed_url = parse_url($url);
//         $host = $parsed_url['host'] . (isset($parsed_url['path']) ? $parsed_url['path'] : '');
//         return '<a href="' . $url . '">' . $host . '</a>';
//     }, $content);

//     // Выводим полученный HTML-код
//     echo $content_with_links;
// } else {
//     echo "Файл не найден.";
// }




// №2 Сделайте страницу, 
// на которую может зайти любой пользователь и оставить комментарий. 
// Пользователь должен видеть все ранее оставленные другими пользователями комментарии.





// Путь к файлу, где будут храниться комментарии
// $commentsFile = '/home/ubuntupc/project1/еxample1.txt';

// // Обработка отправки комментария
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Получаем комментарий из формы
//     $comment = trim($_POST['comment']);

//     // Проверка на пустой комментарий
//     if (!empty($comment)) {
//         // Добавление комментария в файл
//         file_put_contents($commentsFile, htmlspecialchars($comment) . PHP_EOL, FILE_APPEND);
//     }
// }

// // Чтение всех комментариев из файла
// $comments = file($commentsFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Комментарии</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .comment {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px 0;
        }
    </style>
</head>
<body>

<h1>Оставьте комментарий</h1> -->

<!-- Форма для оставления комментария -->
<!-- <form method="POST">
    <textarea name="comment" rows="5" cols="50" placeholder="Ваш комментарий..." required></textarea><br>
    <input type="submit" value="Отправить">
</form>

<h2>Комментарии:</h2> -->
<?php
//  if (!empty($comments)): 
 ?>
    <?php 
	// foreach ($comments as $c):
	 ?>
        <!-- <div class="comment"> -->
			<?php 
			// echo $c; 
			?>
			<!-- </div> -->
    <?php
//  endforeach; 
 ?>
<?php 
// else: 
?>
    <!-- <p>Комментариев пока нет.</p> -->
<?php 
// endif;
 ?>

<!-- </body>
</html> -->



<?php




// №3 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Получите из него последовательный набор папок:

// [
// 	'/dir1/dir2/dir3/',
// 	'/dir2/dir3/',
// 	'/dir3/'
// ]




// $url = 'http://test.com/dir1/dir2/dir3/page.html';

// // Извлекаем путь из URL
// $path = parse_url($url, PHP_URL_PATH);

// // Преобразуем путь в массив папок
// $directories = explode('/', trim($path, '/'));

// // Создаем массив для хранения последовательных наборов папок
// $results = [];

// // Формируем последовательные наборы папок
// $currentPath = '';
// for ($i = 0; $i < count($directories) - 1; $i++) {
//     $currentPath .= '/' . $directories[$i];
//     $results[] = $currentPath . '/';
// }

// // Вывод результата
// print_r($results);





// №4 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Получите массив элементов его побочной диагонали:

// [
// 	15, 24, 33, 42, 51
// ]



// $arr = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// $secondaryDiagonal = [];
// $rows = count($arr); // Получаем количество строк

// for ($i = 0; $i < $rows; $i++) {
//     $secondaryDiagonal[] = $arr[$i][$rows - 1 - $i]; // Извлекаем элементы побочной диагонали
// }

// // Выводим результат
// print_r($secondaryDiagonal);






// Уровень 9.5 задачника PHP



// №1 Дан массив:

// [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]
// Дана форма с инпутом. В инпут вводится число.
//  По отправки формы создайте таблицу, 
//  заполненную данными из этого массива,
//   содержащую столько колонок, сколько указано в инпуте.




// // Исходный массив
// $array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];

// // Проверяем, была ли отправлена форма
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     // Получаем количество колонок из инпута
//     $columns = isset($_POST['columns']) ? (int)$_POST['columns'] : 1;

//     // Генерируем таблицу
//     echo '<table border="1">';
    
//     // Перебираем массив и создаем строки таблицы
//     for ($i = 0; $i < count($array); $i++) {
//         // Начинаем новую строку, если индекс делится на количество колонок
//         if ($i % $columns === 0) {
//             echo '<tr>';
//         }

//         // Выводим ячейку с элементом массива
//         echo '<td>' . $array[$i] . '</td>';

//         // Закрываем строку, если это последняя колонка
//         if (($i + 1) % $columns === 0 || $i === count($array) - 1) {
//             echo '</tr>';
//         }
//     }

//     echo '</table>';
// }
?>

<!-- Форма для ввода количества колонок -->
<!-- <form method="post" action="">
    <label for="columns">Введите количество колонок:</label>
    <input type="number" id="columns" name="columns" min="1" required>
    <input type="submit" value="Создать таблицу">
</form> -->



<?php




// №2 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Обнулите элементы его главной диагонали:

// [
// 	[ 0, 12, 13, 14, 15],
// 	[21,  0, 23, 24, 25],
// 	[31, 32,  0, 34, 35],
// 	[41, 42, 43,  0, 45],
// 	[51, 52, 53, 54,  0],
// ]




// // Исходный двумерный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// // Определяем размерность массива
// $size = count($array);

// // Проходим по всем элементам массива
// for ($i = 0; $i < $size; $i++) {
//     // Обнуляем элемент на главной диагонали
//     $array[$i][$i] = 0;
// }

// // Выводим измененный массив
// echo '<pre>'; // Для удобства отображения
// print_r($array);
// echo '</pre>';






// №3 Сделайте функцию, которая будет устанавливать правильную форму 
// существительного после числа. Вот как должна работать эта функция:


// func(1, 'яблоко', 'яблока', 'яблок'); // выведет '1 яблоко'
// func(2, 'яблоко', 'яблока', 'яблок'); // выведет '2 яблока'
// func(3, 'яблоко', 'яблока', 'яблок'); // выведет '3 яблока'
// func(4, 'яблоко', 'яблока', 'яблок'); // выведет '4 яблока'
// func(5, 'яблоко', 'яблока', 'яблок'); // выведет '5 яблок'
// Вот пример для для двухзначных чисел:

// func(11, 'яблоко', 'яблока', 'яблок'); // выведет '11 яблок'
// func(12, 'яблоко', 'яблока', 'яблок'); // выведет '12 яблок'
// func(21, 'яблоко', 'яблока', 'яблок'); // выведет '21 яблоко'
// func(23, 'яблоко', 'яблока', 'яблок'); // выведет '23 яблока'
// Наша функция должна работать для чисел любой длины:

// func(1223421, 'яблоко', 'яблока', 'яблок'); // выведет '1223421 яблоко'




// function func($number, $singular, $plural, $pluralFew) {
//     // Определяем последнюю цифру числа
//     $lastDigit = $number % 10;
//     // Определяем последние две цифры числа
//     $lastTwoDigits = $number % 100;

//     // Логика для определения правильной формы
//     if ($lastDigit === 1 && $lastTwoDigits !== 11) {
//         // Если последняя цифра 1 и последние две цифры не 11
//         $form = $singular;
//     } elseif ($lastDigit >= 2 && $lastDigit <= 4 && ($lastTwoDigits < 12 || $lastTwoDigits > 14)) {
//         // Если последняя цифра от 2 до 4 и последние две цифры не от 12 до 14
//         $form = $plural;
//     } else {
//         // Во всех остальных случаях
//         $form = $pluralFew;
//     }

//     // Возвращаем результат
//     return "$number $form";
// }

// // Примеры использования функции
// echo func(1, 'яблоко', 'яблока', 'яблок') . "\n";     // выведет '1 яблоко'
// echo func(2, 'яблоко', 'яблока', 'яблок') . "\n";     // выведет '2 яблока'
// echo func(3, 'яблоко', 'яблока', 'яблок') . "\n";     // выведет '3 яблока'
// echo func(4, 'яблоко', 'яблока', 'яблок') . "\n";     // выведет '4 яблока'
// echo func(5, 'яблоко', 'яблока', 'яблок') . "\n";     // выведет '5 яблок'
// echo func(11, 'яблоко', 'яблока', 'яблок') . "\n";    // выведет '11 яблок'
// echo func(12, 'яблоко', 'яблока', 'яблок') . "\n";    // выведет '12 яблок'
// echo func(21, 'яблоко', 'яблока', 'яблок') . "\n";    // выведет '21 яблоко'
// echo func(23, 'яблоко', 'яблока', 'яблок') . "\n";    // выведет '23 яблока'
// echo func(1223421, 'яблоко', 'яблока', 'яблок') . "\n"; // выведет '1223421 яблоко'





// Уровень 9.6 задачника PHP



// №1 Сгенерируйте HTML таблицу, покрашенную в виде шахматной доски.




// // Задаем размеры таблицы
// $rows = 8;
// $cols = 8;

// echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">';

// for ($row = 1; $row <= $rows; $row++) {
//     echo '<tr>';
//     for ($col = 1; $col <= $cols; $col++) {
//         // Определяем цвет ячейки: черный или белый
//         $color = ($row + $col) % 2 == 0 ? '#ffffff' : '#000000';
//         echo '<td style="background-color: ' . $color . '; width: 50px; height: 50px;"></td>';
//     }
//     echo '</tr>';
// }

// echo '</table>';






// // Задаем размер таблицы (8x8, как шахматная доска)
// $rows = 8;
// $cols = 8;

// echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">';

// // Генерируем строки и ячейки таблицы
// for ($i = 0; $i < $rows; $i++) {
//     echo '<tr>';
//     for ($j = 0; $j < $cols; $j++) {
//         // Проверяем, должна ли ячейка быть черной или белой
//         if (($i + $j) % 2 == 0) {
//             $color = '#ffffff'; // Белый цвет
//         } else {
//             $color = '#000000'; // Черный цвет
//         }
//         // Выводим ячейку с заданным фоном
//         echo '<td style="background-color: ' . $color . '; width: 50px; height: 50px;"></td>';
//     }
//     echo '</tr>';
// }

// echo '</table>';




// №2 Дан следующий массив:

// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
// Из приведенного массива динамически создайте HTML таблицу
//  размером в 5 колонок.



// $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12]; // Исходный массив
// $columns = 5; // Количество колонок

// echo '<table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse;">';

// // Перебираем элементы массива и создаём строки и колонки
// for ($i = 0; $i < count($arr); $i++) {
//     // Открываем новую строку <tr> для каждой первой ячейки в ряду
//     if ($i % $columns == 0) {
//         echo '<tr>';
//     }

//     // Создаём ячейку с текущим элементом массива
//     echo '<td>' . $arr[$i] . '</td>';

//     // Закрываем строку <tr> после заполнения последней ячейки ряда
//     if (($i + 1) % $columns == 0) {
//         echo '</tr>';
//     }
// }

// // Закрываем последнюю строку, если она не завершена
// if (count($arr) % $columns != 0) {
//     echo '</tr>';
// }

// echo '</table>';




// №3 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Обнулите элементы, находящиеся ниже главной диагонали:

// [
// 	[11, 12, 13, 14, 15],
// 	[ 0, 22, 23, 24, 25],
// 	[ 0,  0, 33, 34, 35],
// 	[ 0,  0,  0, 44, 45],
// 	[ 0,  0,  0,  0, 55],
// ]





// // Исходный массив
// $arr = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55]
// ];

// // Проходим по массиву и обнуляем элементы ниже главной диагонали
// for ($i = 0; $i < count($arr); $i++) {
//     for ($j = 0; $j < $i; $j++) {
//         $arr[$i][$j] = 0; // Обнуляем элементы ниже главной диагонали
//     }
// }

// // Выводим результат для проверки
// echo "<pre>";
// print_r($arr);
// echo "</pre>";




// №4 Дан некоторый URL:

// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// Даны переменные:

// $num = 2;
// $val = 'eee'
// Замените в URL папку с номером $num на значение $val:

// 'http://test.com/dir1/eee/dir3/page.html';




// // Данные
// $url = 'http://test.com/dir1/dir2/dir3/page.html';
// $num = 2;
// $val = 'eee';

// // Разбиваем URL на части
// $parsedUrl = parse_url($url);
// $path = explode('/', trim($parsedUrl['path'], '/'));

// // Проверяем, что номер папки существует в пути
// if (isset($path[$num - 1])) {
//     $path[$num - 1] = $val; // Заменяем папку с номером $num
// }

// // Собираем обновленный путь
// $newPath = implode('/', $path);

// // Формируем новый URL
// $newUrl = "{$parsedUrl['scheme']}://{$parsedUrl['host']}/$newPath";

// echo $newUrl;





// Уровень 9.7 задачника PHP



// №1 Сделайте сайт, по заходу отдающий случайное предсказание,
//  хорошее или плохое. Предсказания должны хранится в БД. 
//  При обновлении страницы предсказание не должно меняться в течении текущего дня.




// Шаг 1: Создание таблицы в MySQL
// sql
// Копировать код
// CREATE DATABASE predictions_db;
// USE predictions_db;

// CREATE TABLE predictions (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     text VARCHAR(255) NOT NULL,
//     type ENUM('good', 'bad') NOT NULL
// );

// -- Пример данных
// INSERT INTO predictions (text, type) VALUES 
// ('Сегодня будет удачный день!', 'good'),
// ('Остерегайтесь неприятностей.', 'bad'),
// ('Ваши мечты сбудутся.', 'good'),
// ('Могут возникнуть неожиданные трудности.', 'bad');





// session_start();

// // Подключение к базе данных
// $host = 'localhost';
// $dbname = 'predictions_db';
// $user = 'root';
// $password = ''; // Укажите ваш пароль

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     die("Ошибка подключения: " . $e->getMessage());
// }

// // Функция для выбора случайного предсказания
// function getRandomPrediction($pdo) {
//     $stmt = $pdo->query("SELECT text FROM predictions ORDER BY RAND() LIMIT 1");
//     return $stmt->fetchColumn();
// }

// // Проверяем, есть ли предсказание в куках для текущего дня
// $today = date('Y-m-d');
// if (!isset($_COOKIE['prediction_date']) || $_COOKIE['prediction_date'] !== $today) {
//     $prediction = getRandomPrediction($pdo);

//     // Сохраняем предсказание и дату в куки
//     setcookie('prediction', $prediction, strtotime('tomorrow'), '/');
//     setcookie('prediction_date', $today, strtotime('tomorrow'), '/');
// } else {
//     // Загружаем предсказание из куков
//     $prediction = $_COOKIE['prediction'];
// }
?>
 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Предсказание на сегодня</title>
 </head>
 <body>
     <h1>Ваше предсказание на сегодня:</h1>
    <p> -->
		<?php
		//  echo htmlspecialchars($prediction); 
		 ?>
		 <!-- </p>
 </body>
 </html> -->


<?php


// №2 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Обнулите элементы, находящиеся не на диагоналях:

// [
// 	[11,  0,  0,  0, 15],
// 	[ 0, 22,  0, 24,  0],
// 	[ 0,  0, 33,  0,  0],
// 	[ 0, 42,  0, 44,  0],
// 	[51,  0,  0,  0, 55],
// ]





// // Исходный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55]
// ];

// // Размер массива (квадратная матрица)
// $size = count($array);

// // Обходим массив и обнуляем ненужные элементы
// for ($i = 0; $i < $size; $i++) {
//     for ($j = 0; $j < $size; $j++) {
//         // Проверка: если элемент не на главной и не на побочной диагонали
//         if ($i !== $j && $i + $j !== $size - 1) {
//             $array[$i][$j] = 0;
//         }
//     }
// }

// // Вывод результата
// echo "<pre>";
// foreach ($array as $row) {
//     echo implode(" ", $row) . "\n";
// }
// echo "</pre>";




// №3 Пусть в файле хранится следующий JSON:

// {
// 	[
// 		"catg": "catg1",
// 		"name": "prod1",
// 		"cost": "100"
// 	],
// 	[
// 		"catg": "catg2",
// 		"name": "prod2",
// 		"cost": "200"
// 	],
// 	[
// 		"catg": "catg3",
// 		"name": "prod3",
// 		"cost": "300"
// 	]
// }
// Сформируйте с помощью данных файла следующий HTML код
//  и отправьте его в браузер:

// <table>
// 	<tbody>
// 		<tr>
// 			<td>1</td>
// 			<td>catg1</td>
// 			<td>prod1</td>
// 			<td>100</td>
// 		</tr>
// 		<tr>
// 			<td>2</td>
// 			<td>catg2</td>
// 			<td>prod2</td>
// 			<td>200</td>
// 		</tr>
// 		<tr>
// 			<td>3</td>
// 			<td>catg3</td>
// 			<td>prod3</td>
// 			<td>300</td>
// 		</tr>
// 	</tbody>
// </table>



// Исправленный JSON:


// [
//     {
//         "catg": "catg1",
//         "name": "prod1",
//         "cost": "100"
//     },
//     {
//         "catg": "catg2",
//         "name": "prod2",
//         "cost": "200"
//     },
//     {
//         "catg": "catg3",
//         "name": "prod3",
//         "cost": "300"
//     }
// ]






// // Чтение и декодирование JSON из файла
// $json = file_get_contents('data.json');
// $data = json_decode($json, true);

// // Проверка на успешное декодирование
// if ($data === null) {
//     die('Ошибка при декодировании JSON.');
// }

// // Генерация HTML таблицы
// echo '<table>';
// echo '<tbody>';

// foreach ($data as $index => $item) {
//     echo '<tr>';
//     echo '<td>' . ($index + 1) . '</td>';
//     echo '<td>' . htmlspecialchars($item['catg']) . '</td>';
//     echo '<td>' . htmlspecialchars($item['name']) . '</td>';
//     echo '<td>' . htmlspecialchars($item['cost']) . '</td>';
//     echo '</tr>';
// }

// echo '</tbody>';
// echo '</table>';





// №2 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Переставьте местами два заданных ряда:

// [
// 	[51, 52, 53, 54, 55],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[11, 12, 13, 14, 15],
// ]






// // Исходный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// // Задаем ряды для обмена (0-индексация)
// $row1 = 0; // Первый ряд
// $row2 = 4; // Пятый ряд

// // Меняем местами два ряда
// $temp = $array[$row1];
// $array[$row1] = $array[$row2];
// $array[$row2] = $temp;

// // Выводим результат для проверки
// echo "<pre>";
// print_r($array);
// echo "</pre>";




// №3 Пусть в файле хранится JSON стран следующего вида:

// {
// 	[
// 		"id": "3",
// 		"country": "country1",
// 	],
// 	[
// 		"id": "7",
// 		"country": "country2",
// 	],
// 	[
// 		"id": "9",
// 		"country": "country3",
// 	]
// }
// Выведите эти страны в виде следующего селекта:

// <select>
// 	<option value="3">country1</option>
// 	<option value="7">country2</option>
// 	<option value="9">country3</option>
// </select>




// [
//     {
//         "id": "3",
// 		"country": "country1"
//     },
//     {
//       "id": "7",
// 		"country": "country2"
//     },
//     {
//         "id": "9",
// 		"country": "country3"
//     }
// ]




// // Путь к файлу с JSON
// $jsonFile = 'path/to/your/file.json';

// // Читаем содержимое файла
// $jsonData = file_get_contents($jsonFile);

// // Преобразуем JSON в массив
// $countriesArray = json_decode($jsonData, true);

// // Проверяем, удалось ли преобразовать JSON
// if ($countriesArray === null) {
//     die('Ошибка при декодировании JSON');
// }

// // Начинаем вывод селекта
// echo '<select>' . PHP_EOL;

// // Проходим по массиву и выводим опции
// foreach ($countriesArray as $country) {
//     echo '<option value="' . htmlspecialchars($country['id']) . '">' . htmlspecialchars($country['country']) . '</option>' . PHP_EOL;
// }

// // Закрываем тег селекта
// echo '</select>' . PHP_EOL;




// Уровень 9.9 задачника PHP



// №1 Дана форма с текстареа. В него вводится текст. 
// По отправки формы найдите самый часто используемый символ этого текста и
//  выведите его в абзац.




// $mostFrequentChar = ''; // Переменная для самого частого символа
// $count = 0; // Переменная для подсчета частоты

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     // Получаем текст из текстовой области
//     $text = $_POST['text'];

//     // Убираем пробелы и приводим к нижнему регистру
//     $text = str_replace(' ', '', $text);
//     $text = strtolower($text);

//     // Массив для подсчета частоты символов
//     $charCount = array();

//     // Подсчет частоты символов
//     for ($i = 0; $i < strlen($text); $i++) {
//         $char = $text[$i];
//         if (isset($charCount[$char])) {
//             $charCount[$char]++;
//         } else {
//             $charCount[$char] = 1;
//         }
//     }

//     // Находим самый частый символ
//     foreach ($charCount as $char => $frequency) {
//         if ($frequency > $count) {
//             $mostFrequentChar = $char;
//             $count = $frequency;
//         }
//     }
// }
?>
<!-- 
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Часто используемый символ</title>
</head>
<body>
    <form method="post">
        <textarea name="text" rows="10" cols="30" placeholder="Введите текст..."></textarea><br>
        <input type="submit" value="Отправить">
    </form> -->

    <?php 
	// if ($_SERVER["REQUEST_METHOD"] == "POST"):
	 ?>
        <!-- <p>Самый часто используемый символ: <strong> -->
			<?php
			//  echo htmlspecialchars($mostFrequentChar);
			  ?>
			  <!-- </strong></p>
        <p>Частота: <strong> -->
			<?php
			//  echo $count;
			  ?>
			  <!-- </strong></p> -->
    <?php 
// endif; 
?>
<!-- </body>
</html> -->

<?php



// №2 Сделайте функцию, которая будет принимать число, 
// а возвращать это число прописью. 
// Пусть функция работает с числами до 999. Смотрите пример:


// func(123); // выведет 'сто двадцать три'





// function numberToWords($number) {
//     // Массивы для чисел
//     $units = [
//         '', 'один', 'два', 'три', 'четыре', 'пять', 'шесть', 'семь', 'восемь', 'девять',
//         'десять', 'одиннадцать', 'двенадцать', 'тринадцать', 'четырнадцать', 'пятнадцать',
//         'шестнадцать', 'семнадцать', 'восемнадцать', 'девятнадцать'
//     ];
    
//     $tens = [
//         '', '', 'двадцать', 'тридцать', 'сорок', 'пятьдесят', 'шестьдесят',
//         'семьдесят', 'восемьдесят', 'девяносто'
//     ];
    
//     $hundreds = [
//         '', 'сто', 'двести', 'триста', 'четыреста', 'пятьсот',
//         'шестьсот', 'семьсот', 'восемьсот', 'девятьсот'
//     ];

//     // Проверка на входные данные
//     if ($number < 0 || $number > 999) {
//         return "Число должно быть от 0 до 999.";
//     }

//     // Разбиваем число на сотни, десятки и единицы
//     $result = '';

//     // Сотни
//     $result .= $hundreds[intval($number / 100)];
//     $number %= 100;

//     // Десятки
//     if ($number < 20) {
//         $result .= ($result ? ' ' : '') . $units[$number];
//     } else {
//         $result .= ($result ? ' ' : '') . $tens[intval($number / 10)];
//         $number %= 10;
//         // Единицы
//         $result .= ($number ? ' ' . $units[$number] : '');
//     }

//     return trim($result);
// }

// // Пример использования
// echo numberToWords(123); // Выведет 'сто двадцать три'
// echo "<br>";
// echo numberToWords(999); // Выведет 'девятьсот девяносто девять'
// echo "<br>";
// echo numberToWords(0); // Выведет ''




// №4 Пусть в базе данных хранится таблица следующего вида:

// таблица users
// id	name	register_date
// С помощью данных этой таблицы получите массив,
//  содержащий количество регистраций по годам и месяцам:


// [
// 	'2021' => [
// 		'01' => 10,
// 		'02' => 20,
// 	],
// 	'2022' => [
// 		'11' => 10,
// 		'12' => 20,
// 	],
// ];




// // Подключаемся к базе данных
// $servername = "localhost"; // Замените на ваш сервер БД
// $username = "username"; // Ваше имя пользователя
// $password = "password"; // Ваш пароль
// $dbname = "database_name"; // Название вашей базы данных

// // Создаем соединение
// $conn = new mysqli($servername, $username, $password, $dbname);

// // Проверяем соединение
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// // SQL запрос для получения данных по годам и месяцам
// $sql = "
//     SELECT YEAR(register_date) as year, 
//            MONTH(register_date) as month, 
//            COUNT(*) as count 
//     FROM users 
//     GROUP BY year, month 
//     ORDER BY year, month
// ";

// // Выполняем запрос
// $result = $conn->query($sql);

// // Инициализируем массив для хранения результата
// $registrations = [];

// if ($result->num_rows > 0) {
//     // Обрабатываем результаты
//     while ($row = $result->fetch_assoc()) {
//         $year = $row['year'];
//         $month = str_pad($row['month'], 2, '0', STR_PAD_LEFT); // Добавляем ведущий ноль

//         // Проверяем, существует ли год в массиве
//         if (!isset($registrations[$year])) {
//             $registrations[$year] = [];
//         }

//         // Сохраняем количество регистраций по месяцам
//         $registrations[$year][$month] = (int)$row['count'];
//     }
// }

// // Закрываем соединение
// $conn->close();

// // Выводим результат
// print_r($registrations);




// Уровень 9.10 задачника PHP



// №1 Напишите код, 
// который определит максимальный уровень вложенности многомерного массива.




// function getMaxDepth(array $array, $depth = 1) {
//     $maxDepth = $depth; // Начальная глубина

//     foreach ($array as $item) {
//         if (is_array($item)) {
//             // Рекурсивно вычисляем глубину для вложенного массива
//             $currentDepth = getMaxDepth($item, $depth + 1);
//             $maxDepth = max($maxDepth, $currentDepth); // Обновляем максимальную глубину
//         }
//     }

//     return $maxDepth; // Возвращаем максимальную глубину
// }

// // Пример многомерного массива
// $array = [
//     1,
//     [2, 3],
//     [
//         [4, 5],
//         [6, 7, [8, 9]]
//     ],
//     10
// ];

// // Определяем максимальную глубину
// $maxDepth = getMaxDepth($array);
// echo "Максимальный уровень вложенности массива: " . $maxDepth;




// №2 Дан произвольный двухмерный массив:

// [
// 	[11, 32, 13, 44, 55],
// 	[31, 42, 53, 66, 75],
// 	[12, 26, 33, 45, 52],
// 	[15, 22, 35, 64, 57],
// 	[21, 52, 32, 44, 38],
// ]
// Найдите максимальный и минимальный элементы и поменяйте их местами.




// $array = [
//     [11, 32, 13, 44, 55],
//     [31, 42, 53, 66, 75],
//     [12, 26, 33, 45, 52],
//     [15, 22, 35, 64, 57],
//     [21, 52, 32, 44, 38],
// ];

// // Инициализируем переменные для хранения максимального и минимального значений
// $maxValue = PHP_INT_MIN; // Минимально возможное целое значение
// $minValue = PHP_INT_MAX; // Максимально возможное целое значение
// $maxPos = $minPos = null;

// // Поиск максимального и минимального значений
// foreach ($array as $i => $row) {
//     foreach ($row as $j => $value) {
//         if ($value > $maxValue) {
//             $maxValue = $value;
//             $maxPos = [$i, $j]; // Сохраняем позицию максимального значения
//         }
//         if ($value < $minValue) {
//             $minValue = $value;
//             $minPos = [$i, $j]; // Сохраняем позицию минимального значения
//         }
//     }
// }

// // Проверяем, нашли ли мы минимальные и максимальные значения
// if ($maxPos && $minPos) {
//     // Меняем местами максимальный и минимальный элементы
//     list($array[$minPos[0]][$minPos[1]], $array[$maxPos[0]][$maxPos[1]]) = [$maxValue, $minValue];
// }

// // Выводим измененный массив
// echo "Измененный массив:\n";
// foreach ($array as $row) {
//     echo implode(", ", $row) . "\n";
// }




// №3 Пусть в базе данных хранится таблица со странами следующего вида:

// таблица countries
// id	name
// Пусть в базе данных также хранится таблица с городами следующего вида:

// таблица cities
// id	name	country_id
// С помощью данных этих таблиц получите массив следующего вида:

// [
// 	'country1': [массив городов этой страны],
// 	'country2': [массив городов этой страны],
// 	'country3': [массив городов этой страны],
// ]




// // Настройка подключения к базе данных
// $host = 'localhost';
// $db = 'your_database_name'; // Укажите имя вашей базы данных
// $user = 'your_username'; // Укажите ваше имя пользователя
// $pass = 'your_password'; // Укажите ваш пароль

// try {
//     // Создание подключения к базе данных
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
//     // Получение стран и городов
//     $query = "SELECT c.name AS country_name, ci.name AS city_name
//               FROM countries c
//               LEFT JOIN cities ci ON c.id = ci.country_id";
    
//     $stmt = $pdo->prepare($query);
//     $stmt->execute();
    
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
//     $countriesCities = [];
    
//     // Формирование массива с городами по странам
//     foreach ($result as $row) {
//         $countryName = $row['country_name'];
//         $cityName = $row['city_name'];
        
//         if (!isset($countriesCities[$countryName])) {
//             $countriesCities[$countryName] = []; // Инициализация массива для страны
//         }
        
//         if ($cityName) { // Проверяем, что город существует
//             $countriesCities[$countryName][] = $cityName; // Добавляем город в массив
//         }
//     }
    
//     // Вывод результата
//     echo '<pre>';
//     print_r($countriesCities);
//     echo '</pre>';

// } catch (PDOException $e) {
//     echo "Ошибка подключения: " . $e->getMessage();
// }





// Уровень 10.1 задачника PHP



// №1 Сделайте функцию, 
// которая параметром будет принимать английское существительное в
//  единственном числе и возвращать его во множественном числе.



// function pluralize($word) {
//     $irregular = [
//         'man' => 'men',
//         'woman' => 'women',
//         'child' => 'children',
//         'tooth' => 'teeth',
//         'foot' => 'feet',
//         'person' => 'people',
//         'mouse' => 'mice'
//     ];

//     // Проверка на неправильные формы
//     if (isset($irregular[$word])) {
//         return $irregular[$word];
//     }

//     // Окончания на -y, которые меняются на -ies (если перед "y" согласная)
//     if (preg_match('/[bcdfghjklmnpqrstvwxyz]y$/i', $word)) {
//         return preg_replace('/y$/i', 'ies', $word);
//     }

//     // Окончания на -s, -sh, -ch, -x, -z требуют добавления "es"
//     if (preg_match('/(s|sh|ch|x|z)$/i', $word)) {
//         return $word . 'es';
//     }

//     // Окончание на -f или -fe меняется на -ves
//     if (preg_match('/(f|fe)$/i', $word)) {
//         return preg_replace('/(f|fe)$/i', 'ves', $word);
//     }

//     // Обычный случай — просто добавить "s"
//     return $word . 's';
// }

// // Примеры использования
// echo pluralize('cat') . "\n";      // cats
// echo pluralize('lady') . "\n";     // ladies
// echo pluralize('box') . "\n";      // boxes
// echo pluralize('wolf') . "\n";     // wolves
// echo pluralize('man') . "\n";      // men





// №2 Дан текст со знаками препинаний:

// 'aaa bbb, ccc. Xxx - eee bbb, kkk!'
// Получите массив слов из такого текста.



// function extractWords($text) {
//     // Используем регулярное выражение для поиска слов
//     preg_match_all('/\b\w+\b/u', $text, $matches);
    
//     // Возвращаем массив найденных слов
//     return $matches[0];
// }

// // Пример использования
// $text = 'aaa bbb, ccc. Xxx - eee bbb, kkk!';
// $words = extractWords($text);

// print_r($words);




// №3 Даны два числа.
//  Выведите на экран процесс умножения этих чисел в столбик, как в школе.



// function multiplicationInColumn($a, $b) {
//     $aStr = strval($a);
//     $bStr = strval($b);
//     $bLen = strlen($bStr);
//     $partialResults = [];
    
//     echo " $a\n× $b\n";
//     echo str_repeat('-', max(strlen($aStr), strlen($bStr) + 2)) . "\n";

//     // Находим все промежуточные результаты
//     for ($i = 0; $i < $bLen; $i++) {
//         $digit = (int) $bStr[$bLen - 1 - $i];
//         $partialResult = $a * $digit * (10 ** $i);
//         $partialResults[] = str_pad($partialResult, strlen($aStr) + $i, ' ', STR_PAD_LEFT);
//     }

//     // Печатаем промежуточные результаты
//     foreach ($partialResults as $line) {
//         echo $line . "\n";
//     }

//     // Печатаем итоговую черту и результат
//     echo str_repeat('-', max(array_map('strlen', $partialResults))) . "\n";
//     echo str_pad($a * $b, max(array_map('strlen', $partialResults)), ' ', STR_PAD_LEFT) . "\n";
// }

// // Пример использования
// multiplicationInColumn(123, 45);




// №4 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13],
// 	[21, 22, 23],
// 	[31, 32, 33],
// ]
// Напишите код, который добавит в массив еще один ряд,
//  заполненный случайными значениями:

// [
// 	[11, 12, 13],
// 	[21, 22, 23],
// 	[31, 32, 33],
// 	[41, 42, 43],
// ]



// <?php
// // Исходный двумерный массив
// $array = [
//     [11, 12, 13],
//     [21, 22, 23],
//     [31, 32, 33],
// ];

// // Функция для генерации новой строки с случайными значениями
// function generateRandomRow($length, $min = 10, $max = 99) {
//     $row = [];
//     for ($i = 0; $i < $length; $i++) {
//         $row[] = rand($min, $max); // Генерируем случайное число в заданном диапазоне
//     }
//     return $row;
// }

// // Добавляем новую строку в массив
// $newRow = generateRandomRow(count($array[0]));
// array_push($array, $newRow);

// // Выводим результат
// print_r($array);




// Уровень 10.2 задачника PHP



// №1 Напишите скрипт, 
// который будет находить корни квадратного уравнения. 
// Для этого сделайте 3 инпута, 
// в которые будут вводиться коэффициенты уравнения.


?>


<!-- <h2>Решение квадратного уравнения</h2>
<form method="post">
    <label for="a">Коэффициент a:</label>
    <input type="number" name="a" id="a" required><br><br>

    <label for="b">Коэффициент b:</label>
    <input type="number" name="b" id="b" required><br><br>

    <label for="c">Коэффициент c:</label>
    <input type="number" name="c" id="c" required><br><br>

    <input type="submit" value="Найти корни">
</form> -->

<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $a = (float)$_POST["a"];
//     $b = (float)$_POST["b"];
//     $c = (float)$_POST["c"];

//     if ($a == 0) {
//         echo "<p>Это не квадратное уравнение (a не может быть 0).</p>";
//     } else {
//         $discriminant = $b * $b - 4 * $a * $c;

//         echo "<p>Дискриминант (D) = $discriminant</p>";

//         if ($discriminant > 0) {
//             $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
//             $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
//             echo "<p>Уравнение имеет два корня: x₁ = $x1 и x₂ = $x2</p>";
//         } elseif ($discriminant == 0) {
//             $x = -$b / (2 * $a);
//             echo "<p>Уравнение имеет один корень: x = $x</p>";
//         } else {
//             echo "<p>Уравнение не имеет вещественных корней.</p>";
//         }
//     }
// }




// №2 Дан инпут и кнопка.
//  По отправки формы выведите список список ul всех избыточных чисел из
//   промежутка, заданном значениями инпутов.


?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск избыточных чисел</title>
</head>
<body>

<h2>Поиск избыточных чисел в заданном промежутке</h2>
<form method="post">
    <label for="start">Начало промежутка:</label>
    <input type="number" name="start" id="start" required><br><br>

    <label for="end">Конец промежутка:</label>
    <input type="number" name="end" id="end" required><br><br>

    <input type="submit" value="Найти избыточные числа">
</form> -->

<?php
// // Функция для определения, является ли число избыточным
// function isAbundant($number) {
//     $sum = 0;
//     for ($i = 1; $i <= $number / 2; $i++) {
//         if ($number % $i == 0) {
//             $sum += $i;
//         }
//     }
//     return $sum > $number;
// }

// // Обработка отправки формы
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $start = (int)$_POST["start"];
//     $end = (int)$_POST["end"];

//     if ($start > $end) {
//         echo "<p>Ошибка: начало промежутка должно быть меньше или равно концу.</p>";
//     } else {
//         echo "<h3>Избыточные числа в промежутке [$start, $end]:</h3>";
//         echo "<ul>";
//         $found = false;
//         for ($i = $start; $i <= $end; $i++) {
//             if (isAbundant($i)) {
//                 echo "<li>$i</li>";
//                 $found = true;
//             }
//         }
//         if (!$found) {
//             echo "<li>Нет избыточных чисел в этом промежутке.</li>";
//         }
//         echo "</ul>";
//     }
// }
?>

<!-- </body>
</html> -->


<?php



// №3 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13],
// 	[21, 22, 23],
// 	[31, 32, 33],
// ]
// Напишите код, который добавит в массив еще один столбец,
//  заполненный случайными значениями:

// [
// 	[11, 12, 13, 14],
// 	[21, 22, 23, 24],
// 	[31, 32, 33, 34],
// ]




// // Исходный двумерный массив
// $array = [
//     [11, 12, 13],
//     [21, 22, 23],
//     [31, 32, 33],
// ];

// // Функция для добавления столбца со случайными значениями
// function addRandomColumn(&$array, $min = 10, $max = 99) {
//     foreach ($array as &$row) {
//         $row[] = rand($min, $max); // Добавляем случайное значение в конец строки
//     }
// }

// // Добавляем новый столбец
// addRandomColumn($array);

// // Выводим результат
// print_r($array);





// №4 По заходу на страницу заполните половину таблицу следующим образом:

// +	+	+	+	+
// +	+	+	+	
// +	+	+		
// +	+			
// +				


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Половина таблицы</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2>Заполненная половина таблицы</h2> -->

<?php
// // Настройки: количество строк и столбцов
// $rows = 5; // Количество строк
// $cols = 5; // Количество столбцов

// echo "<table>";

// // Генерируем таблицу
// for ($i = 0; $i < $rows; $i++) {
//     echo "<tr>";
//     // Заполняем только часть ячеек в каждой строке
//     for ($j = 0; $j < $cols - $i; $j++) {
//         echo "<td>+</td>"; // Заполненная ячейка
//     }
//     // Остальные ячейки остаются пустыми
//     for ($j = $cols - $i; $j < $cols; $j++) {
//         echo "<td></td>"; // Пустая ячейка
//     }
//     echo "</tr>";
// }

// echo "</table>";
?>

<!-- </body>
</html> -->

<?php



// Уровень 10.3 задачника PHP




// №1 Дан массив из шести цифр. Проверьте,
//  можно ли собрать из этих цифр счастливый билет.




// // Проверка, можно ли собрать счастливый билет из массива цифр
// function canMakeLuckyTicket($digits) {
//     if (count($digits) != 6) {
//         return false; // Проверяем, что массив содержит ровно 6 цифр
//     }

//     // Генерируем все возможные перестановки из 6 цифр
//     $permutations = permutations($digits);

//     // Проверяем каждую перестановку
//     foreach ($permutations as $perm) {
//         $firstSum = $perm[0] + $perm[1] + $perm[2]; // Сумма первых трех цифр
//         $secondSum = $perm[3] + $perm[4] + $perm[5]; // Сумма последних трех цифр

//         if ($firstSum === $secondSum) {
//             return true; // Нашли счастливую комбинацию
//         }
//     }

//     return false; // Счастливую комбинацию не нашли
// }

// // Функция для генерации всех перестановок массива
// function permutations($array) {
//     if (count($array) === 1) {
//         return [$array];
//     }

//     $result = [];
//     foreach ($array as $key => $item) {
//         $remaining = $array;
//         unset($remaining[$key]);
//         $remainingPerms = permutations(array_values($remaining));
//         foreach ($remainingPerms as $perm) {
//             $result[] = array_merge([$item], $perm);
//         }
//     }
//     return $result;
// }

// // Пример использования
// $digits = [1, 2, 3, 4, 5, 6]; // Пример массива

// if (canMakeLuckyTicket($digits)) {
//     echo "Из этого массива можно собрать счастливый билет!";
// } else {
//     echo "Из этого массива нельзя собрать счастливый билет.";
// }




// №2 Напишите код, который будет генерировать пароль заданного размера. 
// Пароль обязательно должен будет содержать маленькую и большую буквы, 
// цифру и какой-то специальный символ.




// function generatePassword($length) {
//     // Проверяем, что длина не меньше 4 (по одному символу каждого типа)
//     if ($length < 4) {
//         return "Ошибка: длина пароля должна быть не менее 4 символов.";
//     }

//     // Наборы символов
//     $lowercase = 'abcdefghijklmnopqrstuvwxyz';
//     $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
//     $digits = '0123456789';
//     $specialChars = '!@#$%^&*()-_=+<>?';

//     // Обязательно включаем один символ каждого типа
//     $password = [];
//     $password[] = $lowercase[rand(0, strlen($lowercase) - 1)];
//     $password[] = $uppercase[rand(0, strlen($uppercase) - 1)];
//     $password[] = $digits[rand(0, strlen($digits) - 1)];
//     $password[] = $specialChars[rand(0, strlen($specialChars) - 1)];

//     // Генерируем оставшиеся символы случайно из всех наборов
//     $allChars = $lowercase . $uppercase . $digits . $specialChars;
//     for ($i = 4; $i < $length; $i++) {
//         $password[] = $allChars[rand(0, strlen($allChars) - 1)];
//     }

//     // Перемешиваем пароль, чтобы символы были в случайном порядке
//     shuffle($password);

//     // Возвращаем пароль в виде строки
//     return implode('', $password);
// }

// // Пример использования: генерируем пароль длиной 12 символов
// echo generatePassword(12);




// №3 Даны два числа. Выведите на экран процесс деления этих чисел в столбик,
//  как в школе.




// function divisionInColumn($dividend, $divisor) {
//     if ($divisor == 0) {
//         echo "Ошибка: Деление на ноль невозможно.";
//         return;
//     }

//     echo "<pre>";  // Используем <pre> для форматирования вывода как в консоли

//     // Начальные значения
//     $quotient = (int)($dividend / $divisor); // Частное
//     $remainder = $dividend % $divisor;       // Остаток
//     $dividendStr = strval($dividend);        // Преобразуем делимое в строку для покомпонентного деления
//     $partial = 0;                            // Промежуточное значение

//     echo "   $dividend | $divisor\n";
//     echo "  -" . str_repeat("-", strlen($quotient)) . "\n";
//     echo "   $quotient\n\n";

//     $currentIndex = 0;

//     // Пошаговое деление в столбик
//     while ($currentIndex < strlen($dividendStr)) {
//         $partial = $partial * 10 + (int)$dividendStr[$currentIndex];
//         $currentIndex++;

//         if ($partial >= $divisor) {
//             $currentQuotient = (int)($partial / $divisor);
//             $product = $currentQuotient * $divisor;
//             $partial -= $product;

//             echo "  $product\n";
//             echo "  -" . str_repeat("-", strlen($product)) . "\n";
//             echo "   $partial\n";
//         }
//     }

//     echo "\nОстаток: $remainder\n";
//     echo "</pre>";
// }

// // Пример использования: делим 789 на 4
// divisionInColumn(789, 4);





// №4 Дана строка, содержащая два числа и математическую операцию между ними:

// '10 + 20'
// Напишите код, 
// который вычислит результат записанной математической операции.




// function calculateFromString($input) {
//     // Удаляем пробелы из строки
//     $input = str_replace(' ', '', $input);

//     // Регулярное выражение для извлечения чисел и оператора
//     preg_match('/(\d+)([\+\-\*\/])(\d+)/', $input, $matches);

//     if (count($matches) !== 4) {
//         return "Ошибка: Неверный формат ввода.";
//     }

//     // Извлекаем числа и оператор
//     $num1 = (int)$matches[1];
//     $operator = $matches[2];
//     $num2 = (int)$matches[3];

//     // Выполняем соответствующую операцию
//     switch ($operator) {
//         case '+':
//             return $num1 + $num2;
//         case '-':
//             return $num1 - $num2;
//         case '*':
//             return $num1 * $num2;
//         case '/':
//             if ($num2 == 0) {
//                 return "Ошибка: Деление на ноль.";
//             }
//             return $num1 / $num2;
//         default:
//             return "Ошибка: Неизвестный оператор.";
//     }
// }

// // Пример использования
// $input = '10 + 20';
// $result = calculateFromString($input);
// echo "Результат: $result";




// №5 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13],
// 	[21, 22, 23],
// 	[31, 32, 33],
// ]
// Напишите код,
//  который добавит в него еще один ряд и еще один столбец,
//   заполненные случайными значениями:


// [
// 	[11, 12, 13, 14],
// 	[21, 22, 23, 24],
// 	[31, 32, 33, 34],
// 	[41, 42, 43, 44],
// ]



// // Исходный двухмерный массив
// $array = [
//     [11, 12, 13],
//     [21, 22, 23],
//     [31, 32, 33],
// ];

// // Функция для генерации случайного числа
// function randomValue() {
//     return rand(10, 99);  // Генерируем случайное число от 10 до 99
// }

// // Добавляем новый столбец с случайными значениями
// foreach ($array as &$row) {
//     $row[] = randomValue();  // Добавляем случайное значение в каждую строку
// }

// // Создаем новый ряд с случайными значениями
// $newRow = [];
// for ($i = 0; $i < count($array[0]); $i++) {
//     $newRow[] = randomValue();  // Заполняем строку случайными числами
// }

// // Добавляем новый ряд в массив
// $array[] = $newRow;

// // Выводим обновленный массив
// echo "<pre>";
// print_r($array);
// echo "</pre>";





// №6 Пусть в базе данных хранится таблица следующего вида:

// orders
// id	name	date	price	amount
// 1	prod1	2020-12-31	100	3
// С помощью данных этой таблицы получите массив,
//  содержащий сумму заказов по годам и месяцам:


// [
// 	'2020' => [
// 		'01' => '...',
// 		'02' => '...',
// 	],
// 	'2021' => [
// 		'11' => '...',
// 		'12' => '...',
// 	],
// ];




// // Настройки подключения к базе данных
// $host = 'localhost';
// $db = 'your_database';
// $user = 'your_username';
// $pass = 'your_password';

// try {
//     // Создаем подключение к базе данных
//     $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//     // SQL-запрос для суммирования заказов по годам и месяцам
//     $query = "
//         SELECT 
//             YEAR(date) AS year, 
//             MONTH(date) AS month, 
//             SUM(price * amount) AS total
//         FROM orders
//         GROUP BY year, month
//         ORDER BY year, month
//     ";

//     $stmt = $pdo->query($query);
//     $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     // Формируем многомерный массив
//     $data = [];
//     foreach ($results as $row) {
//         $year = $row['year'];
//         $month = str_pad($row['month'], 2, '0', STR_PAD_LEFT); // Делаем месяц двухзначным
//         $data[$year][$month] = $row['total'];
//     }

//     // Выводим массив для проверки
//     echo "<pre>";
//     print_r($data);
//     echo "</pre>";

// } catch (PDOException $e) {
//     echo "Ошибка подключения к базе данных: " . $e->getMessage();
// }




// Уровень 10.4 задачника PHP




// №1 Дан текст со словами.
//  Перемешайте все слова этого текста в случайном порядке.



// <?php
// function shuffleWords($text) {
//     // Разбиваем текст на массив слов с помощью пробелов и знаков пунктуации
//     $words = preg_split('/\s+/', trim($text));

//     // Перемешиваем массив слов
//     shuffle($words);

//     // Соединяем слова обратно в строку через пробел
//     $shuffledText = implode(' ', $words);

//     return $shuffledText;
// }

// // Пример использования
// $inputText = "Это простой пример текста для перемешивания слов.";
// $result = shuffleWords($inputText);

// echo "Исходный текст: $inputText\n";
// echo "Перемешанный текст: $result\n";




// №2 Даны два числа. Выведите на экран процесс нахождения НОК, как в школе.



// function gcd($a, $b) {
//     // Функция для нахождения наибольшего общего делителя (НОД) с помощью алгоритма Евклида
//     while ($b != 0) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }
//     return $a;
// }

// function lcmWithSteps($a, $b) {
//     // Исходные числа для вычисления НОК
//     echo "Нахождение НОК для чисел: $a и $b\n";

//     // Шаг 1: Нахождение НОД (наибольший общий делитель)
//     $gcdValue = gcd($a, $b);
//     echo "1. НОД($a, $b) = $gcdValue\n";

//     // Шаг 2: Нахождение НОК по формуле: НОК(a, b) = (a * b) / НОД(a, b)
//     $lcmValue = ($a * $b) / $gcdValue;
//     echo "2. НОК($a, $b) = ($a * $b) / $gcdValue = $lcmValue\n";

//     return $lcmValue;
// }

// // Пример использования
// $a = 12;
// $b = 18;
// $result = lcmWithSteps($a, $b);

// echo "Результат: НОК($a, $b) = $result\n";




// №3 Даны два числа. Выведите на экран процесс нахождения НОД, как в школе.



// function gcdWithSteps($a, $b) {
//     echo "Нахождение НОД для чисел: $a и $b\n\n";

//     $steps = 1;  // Счётчик шагов
//     while ($b != 0) {
//         $remainder = $a % $b;
//         echo "Шаг $steps: $a ÷ $b = " . intdiv($a, $b) . " (остаток: $remainder)\n";
//         $a = $b;
//         $b = $remainder;
//         $steps++;
//     }

//     echo "\nНОД: $a\n";
//     return $a;
// }

// // Пример использования
// $a = 252;
// $b = 105;
// $result = gcdWithSteps($a, $b);

// echo "\nРезультат: НОД($a, $b) = $result\n";





// №4 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Напишите код, который будет обнулять заданный столбец:

// [
// 	[11, 12,  0, 14, 15],
// 	[21, 22,  0, 24, 25],
// 	[31, 32,  0, 34, 35],
// 	[41, 42,  0, 44, 45],
// 	[51, 52,  0, 54, 55],
// ]





// // Исходный двумерный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// // Функция для обнуления заданного столбца
// function zeroColumn(&$array, $columnIndex) {
//     // Проходим по каждой строке массива
//     foreach ($array as &$row) {
//         if (isset($row[$columnIndex])) {
//             $row[$columnIndex] = 0;  // Устанавливаем значение столбца в 0
//         }
//     }
// }

// // Пример: Обнуляем 3-й столбец (индекс 2)
// zeroColumn($array, 2);

// // Выводим обновленный массив
// echo "<pre>";
// print_r($array);
// echo "</pre>";




// Уровень 10.5 задачника PHP



// №1 Дано число.
//  Выведите на экран процесс разложения числа на простые множители,
//   как в школе.




// function primeFactorization($number) {
//     echo "Разложение числа $number на простые множители:\n";
//     $factor = 2;  // Начинаем с наименьшего простого числа

//     while ($number > 1) {
//         if ($number % $factor == 0) {
//             echo "$number ÷ $factor = " . ($number / $factor) . "\n";
//             $number /= $factor;
//         } else {
//             $factor++;
//         }
//     }
// }

// // Пример использования
// $inputNumber = 84;
// primeFactorization($inputNumber);



// №2 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Напишите код, который получит массив значений заданного столбца:

// [
// 	13, 23, 33, 43, 54
// ]




// // Исходный двумерный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// // Функция для получения значений заданного столбца
// function getColumnValues($array, $columnIndex) {
//     $columnValues = []; // Массив для хранения значений столбца

//     // Проходим по каждой строке массива и извлекаем значение указанного столбца
//     foreach ($array as $row) {
//         if (isset($row[$columnIndex])) {
//             $columnValues[] = $row[$columnIndex];
//         }
//     }

//     return $columnValues;
// }

// // Пример: Получаем 3-й столбец (индекс 2)
// $columnIndex = 2; // Индекс столбца (0-индексация)
// $result = getColumnValues($array, $columnIndex);

// // Выводим результат
// echo "Значения столбца с индексом $columnIndex:\n";
// print_r($result);



// №3 Дан многомерный массив произвольного уровня вложенности:

// [
// 	'a' => [
// 		'b' => [
// 			'c' => '+++'
// 		]
// 	],
// ]
// Сделайте функцию, которая будет возвращать элементы массива,
//  параметром получая строку с ключами массива, разделенными точками:
 

// func('a.b.c'); // вернет '+++'




// // Исходный многомерный массив
// $array = [
//     'a' => [
//         'b' => [
//             'c' => '+++'
//         ]
//     ],
// ];

// // Функция для получения элемента массива по ключам
// function getValueByKeyString($array, $keyString) {
//     // Разбиваем строку по точкам на массив ключей
//     $keys = explode('.', $keyString);
//     $value = $array; // Начинаем с исходного массива

//     // Проходим по каждому ключу
//     foreach ($keys as $key) {
//         // Проверяем, существует ли ключ в массиве
//         if (isset($value[$key])) {
//             $value = $value[$key]; // Переходим на следующий уровень
//         } else {
//             return null; // Если ключ не существует, возвращаем null
//         }
//     }

//     return $value; // Возвращаем найденное значение
// }

// // Пример использования
// $keyString = 'a.b.c';
// $result = getValueByKeyString($array, $keyString);

// // Выводим результат
// echo "Значение по ключу '$keyString': $result\n";




// №4 По заходу на страницу заполните таблицу следующим образом:


// 5	6	7	8	9
// 4	5	6	7	8
// 3	4	5	6	7
// 2	3	4	5	6
// 1	2	3	4	5




// // Функция для генерации таблицы
// function generateTable($rows, $cols) {
//     echo '<table border="1" cellpadding="5" cellspacing="0">';
    
//     // Заполняем таблицу
//     for ($i = $rows; $i >= 1; $i--) {
//         echo '<tr>'; // Начинаем новую строку
//         for ($j = $cols; $j >= 1; $j--) {
//             // Вычисляем значение для текущей ячейки
//             $value = $i + $j - 1;
//             echo "<td>$value</td>"; // Добавляем ячейку в строку
//         }
//         echo '</tr>'; // Заканчиваем строку
//     }
    
//     echo '</table>'; // Закрываем таблицу
// }

// // Генерируем таблицу с 5 строками и 5 столбцами
// generateTable(5, 5);




// Уровень 10.6 задачника PHP




// №1 Сделайте скрипт, генерирующий квадратные уравнения с целыми корнями.



// function generateQuadraticEquation() {
//     // Генерируем случайные целые числа для a, b и c
//     $a = rand(1, 10); // Коэффициент a не может быть 0
//     $root1 = rand(-10, 10); // Первый корень
//     $root2 = rand(-10, 10); // Второй корень

//     // Вычисляем b и c из корней
//     $b = -($root1 + $root2); // b = - (root1 + root2)
//     $c = $root1 * $root2; // c = root1 * root2

//     // Формируем квадратное уравнение
//     $equation = "$a x² + $b x + $c = 0";

//     // Выводим уравнение и корни
//     echo "Сгенерированное уравнение: $equation\n";
//     echo "Корни уравнения: x₁ = $root1, x₂ = $root2\n";
// }

// // Генерируем и выводим 5 квадратных уравнений
// for ($i = 0; $i < 5; $i++) {
//     generateQuadraticEquation();
//     echo "\n"; // Пустая строка между уравнениями
// }




// №2 Дана строка, 
// содержащая в себе любое количество вложенных парных круглых скобок.
//  Напишите код, который проверит, что скобки расположены корректно.


// Так корректно:

// '()()'
// Так корректно:

// '(())'
// Так некорректно, 
// так как количество открытых скобок не совпадает с количеством закрытых:


// '())'
// Так некорректно, 
// так как, хотя количество открытых скобок и совпадает с количеством закрытых, 
// но у них неправильный порядок:


// '))(('





// function isParenthesesBalanced($string) {
//     $stack = []; // Инициализируем стек
//     $length = strlen($string); // Получаем длину строки

//     // Проходим по каждому символу в строке
//     for ($i = 0; $i < $length; $i++) {
//         $char = $string[$i];

//         // Если символ - открывающая скобка, добавляем в стек
//         if ($char === '(') {
//             array_push($stack, $char);
//         }
//         // Если символ - закрывающая скобка
//         elseif ($char === ')') {
//             // Проверяем, есть ли в стеке открывающая скобка
//             if (empty($stack)) {
//                 return false; // Если стека нет, скобки расположены некорректно
//             }
//             array_pop($stack); // Удаляем последнюю открывающую скобку из стека
//         }
//     }

//     // Если стек пуст, скобки расположены корректно
//     return empty($stack);
// }

// // Примеры использования
// $testStrings = [
//     '()()',    // Корректно
//     '(())',    // Корректно
//     '())',     // Некорректно
//     '))(((',   // Некорректно
//     '((()))',  // Корректно
//     '(()))(',  // Некорректно
// ];

// foreach ($testStrings as $testString) {
//     $result = isParenthesesBalanced($testString) ? 'корректно' : 'некорректно';
//     echo "Строка '$testString' расположена $result.\n";
// }





// Уровень 10.7 задачника PHP




// №1 Дан инпут. В него вводится длинное слово. 
// Выведите список слов, 
// которые можно составить из букв введенного в инпут слова.



?>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Составить слова</title>
</head>
<body>
    <form method="POST">
        <label>Введите слово:</label>
        <input type="text" name="inputWord" required>
        <button type="submit">Составить слова</button>
    </form> -->

    <?php
    // if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //     $inputWord = $_POST['inputWord'];
        
    //     // Проверка, что введено только слово (без пробелов и цифр)
    //     if (!preg_match('/^[a-zA-Zа-яА-Я]+$/u', $inputWord)) {
    //         echo "<p>Введите корректное слово, содержащее только буквы.</p>";
    //         exit;
    //     }

    //     // Генерируем и выводим все возможные комбинации букв
    //     function generateCombinations($letters, $prefix = '') {
    //         $words = [];
    //         $length = strlen($letters);

    //         if ($prefix !== '') {
    //             $words[] = $prefix; // Добавляем непустой префикс как слово
    //         }

    //         for ($i = 0; $i < $length; $i++) {
    //             $newPrefix = $prefix . $letters[$i];
    //             $remaining = substr($letters, 0, $i) . substr($letters, $i + 1);
    //             $words = array_merge($words, generateCombinations($remaining, $newPrefix));
    //         }

    //         return $words;
    //     }

    //     $combinations = generateCombinations($inputWord);
    //     $uniqueWords = array_unique($combinations); // Удаляем повторяющиеся слова

    //     echo "<h2>Возможные слова:</h2>";
    //     echo "<ul>";
    //     foreach ($uniqueWords as $word) {
    //         echo "<li>$word</li>";
    //     }
    //     echo "</ul>";
    // }
    ?>
 <!-- </body>
 </html> -->


 <?php



// №2 Дана строка, содержащая две дроби и математическую операцию между ними:

// '2/3 + 3/4'
// Напишите код, который вычислит результат записанной математической операции.


// <?php
// function calculateFraction($input) {
//     // Извлекаем две дроби и операцию между ними
//     preg_match('/(\d+)\/(\d+)\s*([+\-*\/])\s*(\d+)\/(\d+)/', $input, $matches);

//     if (!$matches) {
//         return "Некорректный ввод.";
//     }

//     // Парсим дроби и операцию
//     $num1 = (int)$matches[1];
//     $den1 = (int)$matches[2];
//     $operator = $matches[3];
//     $num2 = (int)$matches[4];
//     $den2 = (int)$matches[5];

//     // Находим общий знаменатель
//     $commonDenominator = $den1 * $den2;

//     // Приводим числители к общему знаменателю
//     $newNum1 = $num1 * $den2;
//     $newNum2 = $num2 * $den1;

//     // Выполняем операцию с числителями
//     switch ($operator) {
//         case '+':
//             $resultNum = $newNum1 + $newNum2;
//             break;
//         case '-':
//             $resultNum = $newNum1 - $newNum2;
//             break;
//         case '*':
//             $resultNum = $num1 * $num2;
//             $commonDenominator = $den1 * $den2; // Перемножаем знаменатели
//             break;
//         case '/':
//             $resultNum = $num1 * $den2;
//             $commonDenominator = $den1 * $num2; // Переворачиваем вторую дробь
//             break;
//         default:
//             return "Некорректная операция.";
//     }

//     // Сокращаем дробь
//     $gcd = gcd($resultNum, $commonDenominator); // Находим НОД числителя и знаменателя
//     $resultNum /= $gcd;
//     $commonDenominator /= $gcd;

//     // Формируем ответ
//     if ($commonDenominator == 1) {
//         return (string)$resultNum; // Если знаменатель 1, выводим только числитель
//     } else {
//         return "$resultNum/$commonDenominator"; // Иначе выводим дробь
//     }
// }

// // Функция для нахождения НОД (наибольшего общего делителя)
// function gcd($a, $b) {
//     return $b == 0 ? $a : gcd($b, $a % $b);
// }

// // Пример использования
// $input = '2/3 + 3/4';
// echo "Результат операции '$input' = " . calculateFraction($input);




// №3 Дан произвольный двухмерный массив:

// [
// 	[1, 2, 3, 4, 5],
// 	[1, 2, 3, 4, 5],
// 	[1, 2, 3, 4, 5],
// 	[1, 2, 3, 4, 5],
// 	[1, 2, 3, 4, 5],
// ]
// Получите сумму столбцов этого массива.
//  Результат представьте в виде массива сумм:


// [
// 	5, 10, 15, 20, 25
// ]



// <?php
// // Исходный двухмерный массив
// $array = [
//     [1, 2, 3, 4, 5],
//     [1, 2, 3, 4, 5],
//     [1, 2, 3, 4, 5],
//     [1, 2, 3, 4, 5],
//     [1, 2, 3, 4, 5],
// ];

// // Инициализируем массив для хранения суммы столбцов
// $columnSums = array_fill(0, count($array[0]), 0); // Заполняем нулями

// // Проходим по массиву и суммируем значения в столбцах
// foreach ($array as $row) {
//     foreach ($row as $colIndex => $value) {
//         $columnSums[$colIndex] += $value;
//     }
// }

// // Вывод результата
// echo "Суммы столбцов: [" . implode(', ', $columnSums) . "]";




// Уровень 10.8 задачника PHP




// №2 Дан массив.
//  Выведите в на экран все варианты перестановки элементов этого массива.


// <?php
// // Функция для генерации всех перестановок массива
// function permute($items, $perms = []) {
//     if (empty($items)) {
//         echo implode(", ", $perms) . "\n";
//     } else {
//         for ($i = 0; $i < count($items); $i++) {
//             $newItems = $items;
//             $newPerms = $perms;
//             array_splice($newItems, $i, 1); // Удаляем элемент для текущей перестановки
//             $newPerms[] = $items[$i];       // Добавляем элемент в текущую перестановку
//             permute($newItems, $newPerms);  // Рекурсивно продолжаем
//         }
//     }
// }

// // Пример использования
// $array = [1, 2, 3];
// permute($array);





// №3 Дана форма с двумя инпутами.
//  По отправки формы выведите список список ul всех дружественных чисел из
//   промежутка, заданном значениями инпутов.



// // Функция для нахождения суммы делителей числа (кроме самого числа)
// function sumOfDivisors($num) {
//     $sum = 0;
//     for ($i = 1; $i <= $num / 2; $i++) {
//         if ($num % $i === 0) {
//             $sum += $i;
//         }
//     }
//     return $sum;
// }

// // Функция для нахождения дружественных чисел в заданном диапазоне
// function findFriendlyNumbers($start, $end) {
//     $friendlyPairs = [];
//     for ($a = $start; $a <= $end; $a++) {
//         $b = sumOfDivisors($a);
//         if ($b > $a && $b <= $end && sumOfDivisors($b) === $a) {
//             $friendlyPairs[] = [$a, $b]; // Сохраняем пару дружественных чисел
//         }
//     }
//     return $friendlyPairs;
// }

// // Обработка отправки формы
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $start = (int)$_POST['start'];
//     $end = (int)$_POST['end'];

//     if ($start > 0 && $end >= $start) {
//         $friendlyNumbers = findFriendlyNumbers($start, $end);
//     } else {
//         $error = "Введите корректный диапазон!";
//     }
// }
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дружественные числа</title>
</head>
<body>
    <form method="POST">
        <label for="start">Начало диапазона:</label>
        <input type="number" id="start" name="start" required>
        <label for="end">Конец диапазона:</label>
        <input type="number" id="end" name="end" required>
        <button type="submit">Найти дружественные числа</button>
    </form> -->

    <?php
	//  if (isset($error)):
	  ?>
        <!-- <p style="color: red;"> -->
			<?php
			// echo $error ;
			 ?>
			 <!-- </p> -->
    <?php
//  endif; 
 ?>

    <?php
	//  if (!empty($friendlyNumbers)): 
	 ?>
        <!-- <ul> -->
            <?php 
			// foreach ($friendlyNumbers as [$a, $b]):
			 ?>
                <!-- <li> -->
					<?php
				// echo	$a ;
				?> 
				<!-- и  -->
				<?php
			// echo	$b;
			 ?>
			 <!-- </li> -->
            <?php
		//  endforeach;
		  ?>
        <!-- </ul> -->
    <?php 
	// elseif (isset($friendlyNumbers) && empty($friendlyNumbers)): 
	?>
        <!-- <p>Дружественные числа в заданном диапазоне не найдены.</p> -->
    <?php 
// endif;
 ?>
<!-- </body>
</html> -->

<?php



// Уровень 10.9 задачника PHP




// №1 Дан текст. Напишите программу, которая отформатирует этот текст так,
//  чтобы в строке текста было не более 70 символов, 
//  а потом шел перенос строки. Слова при этом не должны разбиваться.



// <?php
// // Пример текста
// $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. "
//       . "Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. "
//       . "Sed nisi. Nulla quis sem at nibh elementum imperdiet.";

// // Форматируем текст с максимальной длиной строки 70 символов
// $formattedText = wordwrap($text, 70, "\n", true);

// // Выводим результат
// echo nl2br($formattedText);





// 2 Дан текст, содержащий некоторый CSS код. Напишите скрипт,
//  который выполнит подсветку синтаксиса этого кода.




// // Пример CSS-кода
// $cssCode = "
// /* Комментарий */
// body {
//     background-color: #f0f0f0;
//     color: #333;
// }
// a:hover {
//     text-decoration: underline;
// }
// ";

// // Функция для подсветки CSS-кода
// function highlightCSS($code) {
//     // Подсветка комментариев
//     $code = preg_replace('/\/\*.*?\*\//s', '<span class="comment">$0</span>', $code);

//     // Подсветка селекторов (например, body, a:hover)
//     $code = preg_replace('/([^{]+)\{/', '<span class="selector">$1</span>{', $code);

//     // Подсветка свойств (например, background-color, color)
//     $code = preg_replace('/(\b[a-z-]+\b)(\s*:\s*)/', '<span class="property">$1</span>$2', $code);

//     // Подсветка значений (например, #f0f0f0, underline)
//     $code = preg_replace('/(:\s*)([^;]+)(;)/', '$1<span class="value">$2</span>$3', $code);

//     return '<pre class="highlighted-css">' . htmlspecialchars($code) . '</pre>';
// }

// // Выводим результат с подсветкой синтаксиса
// echo highlightCSS($cssCode);
?>




<!-- <style>
    .highlighted-css {
        background-color: #2e3440;
        color: #d8dee9;
        padding: 10px;
        border-radius: 5px;
        overflow-x: auto;
    }
    .comment { color: #a3be8c; font-style: italic; }
    .selector { color: #81a1c1; font-weight: bold; }
    .property { color: #88c0d0; }
    .value { color: #ebcb8b; }
</style> -->


<?php





// №3 Выведите на экран квадратный календарь на текущий месяц.
//  Текущий день и выходные должны быть выделены отдельными цветами.




// function generateCalendar() {
//     // Получаем текущие год, месяц и день
//     $year = date('Y');
//     $month = date('m');
//     $today = date('j'); // День месяца

//     // Определяем, какой день недели был 1-го числа текущего месяца
//     $firstDayOfMonth = date('N', strtotime("$year-$month-01"));

//     // Определяем количество дней в месяце
//     $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

//     // Выводим заголовок календаря с названием месяца
//     echo "<h2>" . date('F Y') . "</h2>";
//     echo "<table class='calendar'>";
//     echo "<tr>";
//     $daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

//     // Заголовки дней недели
//     foreach ($daysOfWeek as $day) {
//         echo "<th>$day</th>";
//     }
//     echo "</tr><tr>";

//     // Заполнение пустыми ячейками до начала месяца
//     for ($i = 1; $i < $firstDayOfMonth; $i++) {
//         echo "<td></td>";
//     }

//     // Заполнение календаря днями месяца
//     for ($day = 1; $day <= $daysInMonth; $day++) {
//         $currentWeekDay = ($firstDayOfMonth + $day - 2) % 7 + 1; // День недели текущего дня

//         // Определяем класс для текущего дня и выходных
//         $class = '';
//         if ($day == $today) {
//             $class = 'today';
//         } elseif ($currentWeekDay == 6 || $currentWeekDay == 7) {
//             $class = 'weekend';
//         }

//         echo "<td class='$class'>$day</td>";

//         // Переход на новую строку после воскресенья
//         if ($currentWeekDay == 7 && $day != $daysInMonth) {
//             echo "</tr><tr>";
//         }
//     }

//     // Заполнение оставшихся ячеек пустыми
//     while ($currentWeekDay++ < 7) {
//         echo "<td></td>";
//     }

//     echo "</tr></table>";
// }

// generateCalendar();
?>




<!-- <style>
    table.calendar {
        width: 100%;
        border-collapse: collapse;
    }

    .calendar th {
        background-color: #333;
        color: white;
        padding: 10px;
    }

    .calendar td {
        width: 14.28%;
        height: 100px;
        text-align: center;
        vertical-align: middle;
        border: 1px solid #ddd;
    }

    .calendar .today {
        background-color: #ffeb3b;
    }

    .calendar .weekend {
        background-color: #f44336;
        color: white;
    }
</style> -->


<?php





// №4 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13],
// 	[21, 22, 23],
// 	[31, 32, 33],
// ]
// Дан еще один одномерный массив:

// [
// 	14, 24, 34
// ]
// Напишите код, который добавит наш одномерный массив в
//  качестве столбца нашего двухмерного:

// [
// 	[11, 12, 13, 14],
// 	[21, 22, 23, 24],
// 	[31, 32, 33, 34],
// ]




// <?php
// // Исходный двумерный массив
// $twoDimensionalArray = [
//     [11, 12, 13],
//     [21, 22, 23],
//     [31, 32, 33],
// ];

// // Исходный одномерный массив
// $oneDimensionalArray = [14, 24, 34];

// // Проверяем, что длина одномерного массива совпадает с количеством строк в двумерном
// if (count($oneDimensionalArray) === count($twoDimensionalArray)) {
//     // Добавляем элементы из одномерного массива в качестве столбца
//     foreach ($twoDimensionalArray as $key => &$row) {
//         $row[] = $oneDimensionalArray[$key];
//     }
// }

// // Выводим результат
// print_r($twoDimensionalArray);




// Уровень 10.10 задачника PHP




// №1 Дан текст, содержащий некоторый HTML код. Напишите скрипт, 
// который выполнит подсветку синтаксиса этого кода.




// <?php
// // HTML-код для подсветки
// $htmlCode = '<!DOCTYPE html>
// <html>
// <head>
//     <title>Пример</title>
//     <style>
//         body {
//             font-family: Arial, sans-serif;
//         }
//     </style>
// </head>
// <body>
//     <h1>Привет, мир!</h1>
//     <p>Это пример HTML-кода.</p>
// </body>
// </html>';

// // Функция для подсветки HTML-кода
// function highlightHtml($code) {
//     // Подсветка тэгов
//     $code = preg_replace('/&/', '&amp;', $code);
//     $code = preg_replace('/</', '&lt;', $code);
//     $code = preg_replace('/>/', '&gt;', $code);
    
//     // Подсветка тэгов и атрибутов
//     $code = preg_replace('/&lt;\/?(\w+)(.*?)&gt;/',
//         '&lt;<span style="color: blue;">$1</span>$2&gt;', $code);
    
//     // Подсветка атрибутов
//     $code = preg_replace('/(\w+)=/', '<span style="color: red;">$1</span>=', $code);
    
//     // Подсветка строк
//     $code = preg_replace('/"([^"]*)"/', '<span style="color: green;">"$1"</span>', $code);
    
//     return $code;
// }

// // Подсветка HTML-кода
// $highlightedHtml = highlightHtml($htmlCode);

// // Вывод результата
// echo '<pre>' . $highlightedHtml . '</pre>';





// №2 Дана строка, содержащая в себе дробь:

// '12/16'
// Напишите код, который распишет процесс сокращения дроби, как в школе:

// '12/16 = 6/8 = 3/4'





// <?php
// // Функция для нахождения НОД (Наибольший Общий Делитель)
// function gcd($a, $b) {
//     while ($b != 0) {
//         $temp = $b;
//         $b = $a % $b;
//         $a = $temp;
//     }
//     return $a;
// }

// // Функция для сокращения дроби
// function simplifyFraction($fraction) {
//     list($numerator, $denominator) = explode('/', $fraction);
    
//     // Начальный вид дроби
//     $result = $fraction;
    
//     // Список сокращенных дробей
//     $simplifiedFractions = [];
//     $simplifiedFractions[] = $result;

//     // Пытаемся сократить дробь
//     while (true) {
//         $commonDivisor = gcd($numerator, $denominator);
        
//         if ($commonDivisor == 1) {
//             break; // Дробь нельзя сократить
//         }
        
//         // Сокращаем дробь
//         $numerator /= $commonDivisor;
//         $denominator /= $commonDivisor;
        
//         // Добавляем сокращенную дробь в список
//         $result = "{$numerator}/{$denominator}";
//         $simplifiedFractions[] = $result;
//     }
    
//     // Возвращаем результат в формате '12/16 = 6/8 = 3/4'
//     return implode(' = ', $simplifiedFractions);
// }

// // Исходная дробь
// $fraction = '12/16';

// // Вывод результата
// echo simplifyFraction($fraction);




// №3 Реализуйте алгоритм "Решето Эратосфена" для поиска простых чисел в
//  заданном промежутке.



// <?php
// // Функция для поиска простых чисел в заданном диапазоне
// function sieveOfEratosthenes($min, $max) {
//     // Создаем массив, чтобы отмечать простые числа
//     $isPrime = array_fill(0, $max + 1, true);
//     $isPrime[0] = $isPrime[1] = false; // 0 и 1 не являются простыми числами

//     // Основной цикл решета Эратосфена
//     for ($i = 2; $i * $i <= $max; $i++) {
//         if ($isPrime[$i]) {
//             // Убираем кратные числа
//             for ($j = $i * $i; $j <= $max; $j += $i) {
//                 $isPrime[$j] = false;
//             }
//         }
//     }

//     // Собираем простые числа в заданном диапазоне
//     $primesInRange = [];
//     for ($i = $min; $i <= $max; $i++) {
//         if ($isPrime[$i]) {
//             $primesInRange[] = $i;
//         }
//     }

//     return $primesInRange;
// }

// // Задаем диапазон
// $min = 10; // Минимальное значение
// $max = 50; // Максимальное значение

// // Получаем простые числа в заданном диапазоне
// $primes = sieveOfEratosthenes($min, $max);

// // Выводим результат
// echo "Простые числа от $min до $max: " . implode(', ', $primes);





// №4 Сделайте сайт, позволяющий составить генеологическое дерево пользователя.
//  Пользователь добавляет себя, его бабушку, дедушку, маму, папу,
//   братьев, сестер, детей и так далее. Сделайте так,
//    чтобы можно было найти любого родственника в
//     любом колене (например, пра-пра-пра-дедушку).



// База данных


// CREATE DATABASE genealogy;

// USE genealogy;

// CREATE TABLE family_members (
//     id INT AUTO_INCREMENT PRIMARY KEY,
//     name VARCHAR(255) NOT NULL,
//     parent_id INT,
//     FOREIGN KEY (parent_id) REFERENCES family_members(id)
// );



// database.php



// $host = 'localhost';
// $db   = 'genealogy';
// $user = 'root'; // Замените на ваше имя пользователя
// $pass = ''; // Замените на ваш пароль

// try {
//     $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// } catch (PDOException $e) {
//     echo 'Connection failed: ' . $e->getMessage();
// }
?>


<!-- index.php -->

<?php
// require 'database.php';

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $name = $_POST['name'];
//     $parent_id = $_POST['parent_id'] ? $_POST['parent_id'] : null;

//     $stmt = $pdo->prepare("INSERT INTO family_members (name, parent_id) VALUES (?, ?)");
//     $stmt->execute([$name, $parent_id]);

//     echo "Член семьи добавлен!";
// }

// $members = $pdo->query("SELECT * FROM family_members")->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Генеалогическое Дерево</title>
</head>
<body>
    <h1>Добавьте члена семьи</h1>
    <form method="POST">
        <label for="name">Имя:</label>
        <input type="text" name="name" required>

        <label for="parent_id">Родитель:</label>
        <select name="parent_id">
            <option value="">Нет</option> -->
            <?php
			//  foreach ($members as $member):
			  ?>
                <!-- <option value=" -->
				<?php
			// echo	$member['id'] ;
				?>
				<!-- "> -->
				<?php
				// echo $member['name'] ;
				 ?>
				 <!-- </option> -->
            <?php 
		// endforeach; 
		?>
        <!-- </select>

        <button type="submit">Добавить</button>
    </form>

    <h2>Члены семьи</h2>
    <ul> -->
        <?php 
		// foreach ($members as $member):
		 ?>
            <!-- <li> -->
				<?php
			// echo	$member['name'];
				?>
				<!-- </li> -->
        <?php 
	// endforeach;
	 ?>
    <!-- </ul>

    <a href="tree.php">Посмотреть генеалогическое дерево</a>
    <a href="search.php">Поиск родственника</a>
</body>
</html>
 -->


<!-- tree.php -->



<?php
// require 'database.php';

// // Функция для получения всех потомков
// function getFamilyTree($parentId = null, $pdo) {
//     $stmt = $pdo->prepare("SELECT * FROM family_members WHERE parent_id = ?");
//     $stmt->execute([$parentId]);
//     $members = $stmt->fetchAll(PDO::FETCH_ASSOC);

//     $tree = [];
//     foreach ($members as $member) {
//         $tree[$member['id']] = [
//             'name' => $member['name'],
//             'children' => getFamilyTree($member['id'], $pdo)
//         ];
//     }
//     return $tree;
// }

// $familyTree = getFamilyTree(null, $pdo);

// function displayTree($tree) {
//     echo "<ul>";
//     foreach ($tree as $member) {
//         echo "<li>" . htmlspecialchars($member['name']);
//         if (!empty($member['children'])) {
//             displayTree($member['children']);
//         }
//         echo "</li>";
//     }
//     echo "</ul>";
// }
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Генеалогическое Дерево</title>
</head>
<body>
    <h1>Генеалогическое Дерево</h1>
    <?php
	//  displayTree($familyTree); 
	 ?>
    <a href="index.php">Назад</a>
</body>
</html> -->




<!-- search.php -->




<?php
// require 'database.php';

// $result = [];
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $searchName = $_POST['searchName'];
//     $stmt = $pdo->prepare("SELECT * FROM family_members WHERE name LIKE ?");
//     $stmt->execute(["%$searchName%"]);
//     $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// }
?>

<!-- <!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Поиск родственника</title>
</head>
<body>
    <h1>Поиск родственника</h1>
    <form method="POST">
        <input type="text" name="searchName" required>
        <button type="submit">Поиск</button>
    </form> -->

    <?php 
	// if (!empty($result)):
	 ?>
        <!-- <h2>Результаты поиска</h2>
        <ul> -->
            <?php 
			// foreach ($result as $member): 
			?>
                <!-- <li> -->
					<?php
					// echo htmlspecialchars($member['name']);
					  ?>
					  <!-- </li> -->
            <?php
		//  endforeach; 
		 ?>
        <!-- </ul> -->
    <?php 
// else:
 ?>
        <!-- <p>Родственники не найдены.</p> -->
    <?php
//  endif;
  ?>

    <!-- <a href="index.php">Назад</a>
</body>
</html> -->




<!-- style.css (Пример) -->

<!-- 
body {
    font-family: Arial, sans-serif;
}

h1, h2 {
    color: #333;
}

form {
    margin-bottom: 20px;
}

input, select, button {
    margin: 5px 0;
    padding: 8px;
} -->


<?php



// №5 Дан произвольный двухмерный массив:

// [
// 	[11, 12, 13, 14, 15],
// 	[21, 22, 23, 24, 25],
// 	[31, 32, 33, 34, 35],
// 	[41, 42, 43, 44, 45],
// 	[51, 52, 53, 54, 55],
// ]
// Выполните его транспонирование:

// [
// 	[11, 21, 31, 41, 51],
// 	[12, 22, 32, 42, 52],
// 	[13, 23, 33, 43, 53],
// 	[14, 24, 34, 44, 54],
// 	[15, 25, 35, 45, 55],
// ]




// <?php
// // Исходный двухмерный массив
// $array = [
//     [11, 12, 13, 14, 15],
//     [21, 22, 23, 24, 25],
//     [31, 32, 33, 34, 35],
//     [41, 42, 43, 44, 45],
//     [51, 52, 53, 54, 55],
// ];

// // Инициализация массива для хранения транспонированного результата
// $transposedArray = [];

// // Выполнение транспонирования
// for ($i = 0; $i < count($array[0]); $i++) { // Проходим по колонкам
//     for ($j = 0; $j < count($array); $j++) { // Проходим по строкам
//         $transposedArray[$i][$j] = $array[$j][$i]; // Заполняем транспонированный массив
//     }
// }

// // Вывод результата
// echo '<pre>'; // Для лучшего форматирования вывода
// print_r($transposedArray);
// echo '</pre>';




//////////////////



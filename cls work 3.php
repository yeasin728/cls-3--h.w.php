<?php   

echo "This is H.W(3)";
echo  "<br>";
echo "<br>";


function greater_number ($num1,$num2,$num3)
{
    $a = $num1;
    $b = $num2;
    $c = $num3;

    if ($a > $b and $a > $c) {
        echo "a is big";
    }
    elseif ( $b > $a and $b > $c) {
        echo "b is big";
    }
    else {
        echo "c is big";
    }


}
greater_number(2,3,5);

echo "<br>";
echo "<br>";


$username = "yeasin";
$userpass = "done";
IF ($username == "yeasin"){
    if ($userpass == "done") {
        echo "login";
    } else {
        echo "your password is invalid ";
    }

} else {
    echo "your user name is invalid ";
}

echo  "<br>";


function payable_per_month($y, $t ,$i) {

    $year = $y;
    $loan_amount = $t;
    $interest = $i;
    $total_intrst = $loan_amount * $interest;

    $total_pay_per_year = ($total_intrst + $loan_amount) / 5;

    $payablePermonth = $total_pay_per_year / 12;
    return round($payablePermonth);
    
}

echo  "<br>";

function loanCalculator($incom,$cost,$nam) {
    $income = $incom;
    $expense = $cost;
    $savings = $income - $expense;

    if ($savings > $nam) {
        echo " you can afford this loan";
    } else {
        echo " sorry you can't afford this loan";
    }

}

loanCalculator(10000, 8000, payable_per_month(5, 50000, 10));

echo "<br>";
echo "<br>";

$bus_vara = 5;
echo $bus_vara == 5 ? "jabo" : "jabo na";

echo "<br>";
echo "<br>";

$basket = ["apple", "ball", 30, "mobile"];
print_r ($basket);

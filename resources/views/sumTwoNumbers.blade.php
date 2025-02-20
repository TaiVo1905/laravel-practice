<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="sumTwoNumbers/caculator">
        @csrf
        <div class="number1">
            <h4>Enter number 1</h4>
            <input type="number" class="input1" name="input1" required>
        </div>
        <div class="number2">
            <h4>Enter number 2</h4>
            <input type="number" class="input2" name="input2" required>
        </div>
        <input type="submit" value="Submit">

    </form>
    <div>Total of two numbers is: @isset($sum) {{ $sum }} @endisset</div>
</body>
</html>

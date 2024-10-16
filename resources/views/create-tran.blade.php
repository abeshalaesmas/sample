<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>CREATE TRANSACTION</h1>
    <form action="{{ route('storeTran')}}" method="POST">
        @method('post')
        @csrf
        <label for="transaction_title">Transaction Title: </label>
        <input type="text" id="title" name="transaction_title"required>
        <br>
        <label for="description">Description:</label>
        <textarea id="desc" name="description"required></textarea>
        <br>
        <label for="status">Status</label>
        <select type="select" id="status" name="status"required>
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select>
        <br>
        <label for="total_amount">Total Amount:</label>
        <input type="text" id="amount" name="total_amount"required>
        <br>
        <label for="transaction_number">Transaction Number:</label>
        <input type="text" id="number" name="transaction_number"required>
        <br>

        <button type="submit">CREATE</button>

    </form>

</body>
</html>

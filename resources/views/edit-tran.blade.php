<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EDIT</title>
</head>
<body>
    <h1>EDIT TRANSACTION</h1>
    <form action="{{ route('updateTran',['id'=>$tran->id])}}" method="POST">
        @method('PUT')
        @csrf
        <label for="transaction_title">Transaction Title: </label>
        <input type="text" id="title" name="transaction_title"required value="{{ $tran->transaction_title }}">
        <br>
        <label for="description">Description:</label>
        <textarea id="desc" name="description"required value="{{ $tran->description }}"></textarea>
        <br>
        <label for="status">Status</label>
        <select type="select" id="status" name="status"required value="{{ $tran->status }}">
            <option value="successful">Successful</option>
            <option value="declined">Declined</option>
        </select>
        <br>
        <label for="total_amount">Total Amount:</label>
        <input type="text" id="amount" name="total_amount"required value="{{ $tran->total_amount }}">
        <br>
        <label for="transaction_number">Transaction Number:</label>
        <input type="text" id="number" name="transaction_number"required value="{{ $tran->transaction_number }}">
        <br>

        <button type="submit">UPDATE</button>

    </form>
    <form action="{{route('showAllTrans')}}" method="GET" >
        @method ('GET')
        @csrf
        <button type="submit">BACK</button>
    </form>
</body>
</html>

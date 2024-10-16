<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>GARRELL'S GOTO TRANSACTIONS</h1>
    <form action="{{route('createTran')}}" method="GET">
        @csrf
        <button type="submit">CREATE</button>
    </form>
    @foreach($trans as $tran)
    <div>Transaction ID: {{ $tran->id }}</div>
    <div>Transaction Title: {{ $tran->transaction_title }}</div>
    <div>Description: {{ $tran->description }}</div>
    <div>Status: {{ $tran->status}}</div>
    <div>Total Amount: {{ $tran->total_amount }}</div>
    <div>Transaction Number: {{ $tran->transaction_number }}</div>

    <form action="{{route('viewTran',['id'=>$tran->id])}}" method="GET">
        @csrf
        <button type="submit">VIEW</button>
    </form>

    <form action="{{route('deleteTran',['id'=>$tran->id])}}" method="POST"  onsubmit="return confirm('Are you Sure?')">
        @method('DELETE')
        @csrf
        <button type="submit">DELETE</button>
    </form>

    <hr>


    @endforeach
</body>
</html>

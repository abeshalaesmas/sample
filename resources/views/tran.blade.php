<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>TRANSACTION</h1>
    <div>Transaction ID: {{ $tran->id }}</div>
    <div>Transaction Title: {{ $tran->transaction_title }}</div>
    <div>Description: {{ $tran->description }}</div>
    <div>Status: {{ $tran->status}}</div>
    <div>Total Amount: {{ $tran->total_amount }}</div>
    <div>Transaction Number: {{ $tran->transaction_number }}</div>
    <form action="{{route('showAllTrans')}}" method="GET" >
        @method ('GET')
        @csrf
        <button type="submit">BACK</button>
    </form>

    <form action="{{route('editTran',['id'=>$tran->id])}}" method="GET">
        @csrf
        <button type="submit">EDIT</button>
    </form>
    <form action="{{route('deleteTran',['id'=>$tran->id])}}" method="POST"  onsubmit="return confirm('Are you Sure?')">
        @method('DELETE')
        @csrf
        <button type="submit">DELETE</button>
    </form>
</body>
</html>

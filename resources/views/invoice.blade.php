<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            font-size: 14px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
            text-align: left;
        }
        .invoice-header {
            margin-bottom: 20px;
        }
        .invoice-details {
            margin-bottom: 20px;
        }
        .invoice-table {
            margin-bottom: 20px;
        }
        .invoice-footer {
            font-weight: bold;
            text-align: right;
        }
    
    </style>
</head>
<body>
    <div class="invoice-header">
        <h2>INVOICE</h2>
        <p>Date:{{ $invoice->created_at }} </p>
        <p>INVOICE # {{ $invoice->id }}</p>
        <p>DASMART SOLUTIONS</p>
        <p>P.O.BOX 135 DSM</p>
        <p>Email: sales@dasmartsolutions.co.tz</p>
        <p>Contacts: +255768557618 / +255676283609</p>
        <p>Website: www.dasmartsolutions.co.tz</p>
        <p>Physical office: Nyamwezi & Nyati, Kariakoo.</p>
    </div>

    <div class="invoice-details">
        <h4>INVOICE TO:</h4>
        <p>CAR CROP COMPANY</p>
        <p>TIN: 154-784-403</p>
        <p>DAR ES SALAAM</p>
        <p>TANZANIA</p>
    </div>
   
    
    
    <a>Amount: {{ $invoice->total }}</a>
    <!-- Add more invoice details as needed -->
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <style>
        /* Add your CSS styles here */
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
        <p>Date: {{ $date }}</p>
        <p>INVOICE # {{ $invoiceNumber }}</p>
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

    <div class="invoice-table">
        <table>
            <thead>
                <tr>
                   
<th>#</th>
<th>ORDER NAME</th>
<th>ORDER DETAIL</th>
<th>IMAGE</th>
<th>CREATED AT</th>
<th></th>
<th>VIEW</th>
<th></th>
</tr>
</thead>
<tbody>
    @foreach ($data as $index => $val)
    <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $val->field1 }}</td>
        <td>{{ $val->field2 }}</td>
        <td>
            <div class="container">
                <div class="image-wrapper">
                    <img src="{{ asset('uploads/' . $val->fileUpload)}}" class="circle-image">
                </div>
            </div>
        </td>
        <td>{{ $val->created_at }}</td>
        <td>
            <div class="sup">
                <div class="viewer">
                    <center>
                        <button id="showButton">Order Description</button>
                        <div id="hiddenDiv">
                            <h2>ORDER MADE</h2>
                            <br>
                            <br>
                            <img src="{{ asset('uploads/' . $val->fileUpload)}}" style="height:80px; width:80px;" class="menu-img" alt="">

                            <div class="descript">
                                <h3> Order No: {{ $index + 1 }}</h3>
                                <br>
                                <p> Printing Category: {{ $val->field1 }}</p>
                                <br>
                                <p> Printing Type: {{ $val->field2 }}</p>
                                <br>
                                <p> Material: {{ $val->field3 }}</p>
                                <br>
                                <p> Weight(g): {{ $val->field4 }}</p>
                                <br>
                                <p> Size: {{ $val->field5 }}</p>
                                <br>
                                <p> Number of copies: {{ $val->field6 }}</p>
                                <br>
                                <p> Description: {{ $val->detail }}</p>
                                
                                <!-- Add your invoice HTML code here -->
                                <h2>Invoice</h2>
                                <p>Invoice ID: {{ $val->invoice->id }}</p>
                                <p>Date: {{ $val->invoice->date }}</p>
                                <!-- Display other invoice details -->

                                <table>
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($val->invoice->items as $item)
                                        <tr>
                                            <td>{{ $item->product }}</td>
                                            <td>{{ $item->quantity }}</td>
                                            <td>{{ $item->price }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <p>Total Amount: {{ $val->invoice->total }}</p>
                                <p>Total Amount: {{ $val->invoice->total }}</p>
                                <p>Total Amount: {{ $val->invoice->total }}</p>
                                <p>Total Amount: {{ $val->invoice->total }}</p>
                                <!-- Display other invoice calculations or information -->
                                <div class="invoice-footer">
                                    <p>Thank you for your business</p>
                            
                                    <a href="{{ route('invoices.show', ['invoiceId' => $invoiceId]) }}">Download Invoice PDF</a>

                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
        </td>
    </tr>
    @endforeach
</tbody>    
 </table>    
</body>
</html>

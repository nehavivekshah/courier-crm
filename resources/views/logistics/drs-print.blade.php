<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print DRS - Courier Management System</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 12px;
        }

        .drs-container {
            width: 100%;
            max-width: 900px;
            margin: 0 auto;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
        }

        .header h4 {
            margin: 5px 0;
            font-weight: normal;
        }

        .meta-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }

        .table th {
            background-color: #f0f0f0;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .signature-box {
            text-align: center;
        }

        @media print {
            button {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="drs-container">
        <div class="header">
            <h2>AB EXPRESS COURIER SERVICE</h2>
            <h4>Delivery Run Sheet (DRS)</h4>
        </div>

        <div class="meta-info">
            <div>
                <strong>Date:</strong> {{ date('d-M-Y') }}<br>
                <strong>DRS No:</strong> DRS-2024001
            </div>
            <div>
                <strong>Delivery Person:</strong> DIPESH CHAVDA<br>
                <strong>Route:</strong> Downtown - Sector 4 & 5
            </div>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th style="width: 50px;">Sr.</th>
                    <th>AWB / Barcode</th>
                    <th>Receiver Name</th>
                    <th>Address</th>
                    <th>Packet Type</th>
                    <th>COD Amount</th>
                    <th style="width: 150px;">Sign & Mobile</th>
                </tr>
            </thead>
            <tbody>
                <!-- Samples -->
                <tr>
                    <td>1</td>
                    <td>1616545454</td>
                    <td>Raj Enterprise</td>
                    <td>Shop 4, Market Complex, Downtown</td>
                    <td>Box (2kg)</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>7869500021</td>
                    <td>Global Imports</td>
                    <td>12 Ind. Estate, Sector 5</td>
                    <td>Doc</td>
                    <td>Rs. 500</td>
                    <td></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>9988776655</td>
                    <td>Anita Roy</td>
                    <td>B-202, Sunrise Apts, Downtown</td>
                    <td>Parcel</td>
                    <td>-</td>
                    <td></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>3344556677</td>
                    <td>Tech Solutions</td>
                    <td>Office 101, Tech Park</td>
                    <td>Box (5kg)</td>
                    <td>Rs. 1200</td>
                    <td></td>
                </tr>
                <!-- Empty rows for manual entry if needed -->
                @for($i = 5; $i <= 15; $i++)
                    <tr>
                        <td>{{ $i }}</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                @endfor
            </tbody>
        </table>

        <div class="footer">
            <div class="signature-box">
                __________________________<br>
                <strong>Supervisor Sign</strong>
            </div>
            <div class="signature-box">
                __________________________<br>
                <strong>Delivery Person Sign</strong>
            </div>
        </div>

        <div style="text-align: center; margin-top: 20px;">
            <button onclick="window.print()"
                style="padding: 10px 20px; cursor: pointer; background: #000; color: #fff; border: none;">PRINT
                DRS</button>
        </div>
    </div>
</body>

</html>
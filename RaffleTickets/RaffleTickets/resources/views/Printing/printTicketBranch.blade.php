<!DOCTYPE html>
<html>
<head>
    <style>
        html, body {
            margin-top: 20px;
            margin-left: 3;
            margin-right: 3;
            margin-bottom: 0;
            padding: 0;
        }

        table.outer-table {
            border-collapse: collapse;
            width: 100%;
        }

        td.stub-cell {
            padding: 5px;
            margin: 0;
            vertical-align: top;
            width: 33%;
        }

        table.stub-table {
            width: 100%;
            border: 3px solid black;
            background-color: #ffffff;
            border-collapse: collapse;
        }

        .stub-header {
            text-align: center;
            font-size: 20px;
            font-weight: bold;
            text-transform: uppercase;

        }

        .stub-year {
            text-align: center;
            font-size: 18px;
            font-weight: bold;
        }

        .stub-title {
            text-align: center;
            font-size: 16px;
            font-weight: normal;
        }

        .stub-box-wrapper {
            text-align: center;
        }

        .stub-box {
            border: 2px solid rgb(61, 61, 61);
            display: inline-block;
            padding: 10px;
            margin-top: 10px;
        }

        .ticket-number {
            font-size: 30px;
            font-weight: bold;
        }

        .ticket-label {
            font-size: 12px;
            font-weight: bold;
            color: #ffffff
        }

        .agent-info {
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            padding-top: 15px;
        }

        .agent-info p {
            margin: 2px 0;
        }
        .ticket-label-wrapper {
            width: 100%;
            background-color: #505050;
            text-align: center;
            margin-left: -10px ;
            padding: 0px 7.5;
            margin-bottom: -10px;
        }

        .ticket-label {
            font-size: 12px;
            font-weight: bold;
            margin: 0;
        }

    </style>
</head>
<body>

    <table class="outer-table" border="0" cellspacing="0" cellpadding="0">
        <tr>
            @foreach ($data as $index => $agent)
                <td class="stub-cell">
                    <table class="stub-table" border="0">
                        <tr>
                            <td class="stub-header">Cash Raffle</td>
                        </tr>
                        <tr>
                            <td class="stub-year">{{ now()->year }}</td>
                        </tr>
                        <tr>
                            <td class="stub-title">Raffle Stub</td>
                        </tr>
                        <tr>
                            <td class="stub-box-wrapper">
                                <div class="stub-box">
                                    <div class="ticket-number">{{ $agent['ticket_number'] }}</div>
                                    <div class="ticket-label-wrapper">
                                        <div class="ticket-label">STUB NUMBER</div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="agent-info">
                                <p>{{ $agent['agent_name'] }}</p>
                                <p>{{ $agent['agency_name'] }}</p>
                                <p>{{ $agent['branch'] }}</p>
                            </td>
                        </tr>
                    </table>
                </td>

                @if (($index + 1) % 4 == 0)
                    </tr><tr>
                @endif
            @endforeach
        </tr>
    </table>

</body>
</html>

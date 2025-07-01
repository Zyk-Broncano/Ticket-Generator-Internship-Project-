<style>
    body {
        margin: 0;
        font-family: Arial, sans-serif;
    }

    .print-page {
        padding: 0px;
    }

    .page-header {
        width: 100%;
        background: white;
        padding-bottom: 10px;
        border-bottom: 2px solid black;
        margin-bottom: 20px;
    }

    p {
        font-size: 14px;
        margin: 0;
        display: inline;
    }

    th {
        background-color: #e9e9e9;
    }

    .tableA {
        width: 100%;
    }

    table {
        page-break-inside: avoid;
    }

    td {
        text-align: center;
        padding: 8px;
    }
    .page-break {
        page-break-after: always;
    }
</style>

<html>
    <title>Print Agent</title>
    <body>
        @php
            $chunks = collect($data['ticket_numbers'])->sort()->chunk(32);
            $note = isset($_GET['note']) ? $_GET['note'] : 'No note provided';

        @endphp

        @foreach ($chunks as $chunk)
        <div class="print-page {{ !$loop->last ? 'page-break' : '' }}">
            <!-- Header -->
            <div class="page-header">
                <h1 style="margin: 0px; text-align: left; text-transform: uppercase;"> <u>{{ $note }}</u></h1>
                <h2 style="display: inline;">{{ $data['agent_name'] }}</h2>
                <br>
                <p style="font-size: 23px; margin: 0;"><b> {{ $data['branch'] }}</b></p>
                <h3 style="margin: 1px;">Stub Numbers: <u>{{ $data['ticket'] }}</u></h3>
            </div>

            <!-- Content -->
            <table class="tableA" border="0" cellspacing="0" cellpadding="0" style="border-collapse: collapse; width: 100%;">
                <tr>
                    @foreach ($chunk->values() as $index => $ticket)
                        <td style="padding: 0; margin: 0; vertical-align: top;">
                            <table border="2" width="100%" style="background-color: #ffffff">
                                <tr>
                                    <th style="text-align: center; padding: 0px; font-weight: normal;">Stub Number</th>
                                </tr>
                                <tr>
                                    <td style="text-align: center; font-size: 50px; margin-top: 28px;"><b>{{ $ticket }}</b></td>
                                </tr>
                            </table>
                        </td>
                        @if (($index + 1) % 4 == 0)
                            </tr><tr>
                        @endif
                    @endforeach
                </tr>
            </table>
        </div>
        @endforeach
    </body>
</html>

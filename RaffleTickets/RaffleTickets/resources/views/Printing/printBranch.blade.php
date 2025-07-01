<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Print Branch Agents</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        h1 {
            margin: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 11px;
            table-layout: fixed;
            margin-top: 1mm;
            border-style: solid;
            border-color: #000;
        }

        th, td {
            border: 1px solid black;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #2f99fc;
            font-size: 12px
        }

        thead {
            display: table-header-group;
        }

        tfoot {
            display: table-footer-group;
            background-color: #c3dffa;
        }

        footer {
            margin-top: auto;
            position: fixed;
            bottom: 0;
            width: 100%;
        }


        @page {
            counter-increment: page;
        }
        .current-page:before {
            content: counter(page);
        }
    </style>
</head>

<body>
    <page>
        <h1><u>{{ isset($data[0]['branch']) ? $data[0]['branch'] : 'Branch not specified' }}</u></h1>
        <p style="font-size: 18px; margin: 0;"><b>Branch Agents Report </b></p>
        <br>

        <table>
            <thead>
                <tr>
                    <th width="15%">Stub Number</th>
                    <th width="30%">Agent Name</th>
                    <th width="15%">Agency Name</th>
                    <th width="25%">Agent Level</th>
                    <th width="20%">Branch</th>
                </tr>
            </thead>

            <tbody>
                <?php $row_count = 0 ?>

                @foreach ($data as $agent)
                <tr>
                    <?php $row_count++ ?>
                    <td>{{ $agent['ticket_number'] }}</td>
                    <td>{{ $agent['agent_name'] }}</td>
                    <td>{{ $agent['agency_name'] }}</td>
                    <td>{{ $agent['agent_level'] }}</td>
                    <td>{{ $agent['branch'] }}</td>
                </tr>

                @if ($row_count == 36)
                    <?php $row_count = 0 ?>
                    </tbody>
                    </table>
                    <footer>
                        <i>Page <span class="current-page"></span> of {{$total_pages}}</i>
                    </footer>
                    <div style="page-break-after: always; "></div> <!--PAGE BREAK-->
                    <footer>
                        <i>Page <span class="current-page"></span> of {{$total_pages}}</i>
                    </footer>

                    <!-- HEADER -->
                    <h1><u>{{ isset($data[0]['branch']) ? $data[0]['branch'] : 'Branch not specified' }}</u></h1>
                    <p style="font-size: 18px; margin: 0;"><b>Branch Agents Report </b></p>
                    <br>
                    <table>
                        <thead>
                            <tr>
                                <th width="15%">Stub Number</th>
                                <th width="30%">Agent Name</th>
                                <th width="15%">Agency Name</th>
                                <th width="25%">Agent Level</th>
                                <th width="20%">Branch</th>
                            </tr>
                        </thead>

                    <tbody>
                @endif
                @endforeach
            </tbody>

            <tfoot>
                <tr>
                    <td colspan="5">End of Agents</td>
                </tr>
            </tfoot>
        </table>

        <footer>
            <i>Page <span class="current-page"></span> of {{$total_pages}}</i>
        </footer>

    </page>
</body>
</html>

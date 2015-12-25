<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<html>
<head>
    <title>Presupuesto {{ $id }}</title>
    <style type="text/css">
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        /*Table header*/
        .tableHeader {
            width: 100%;
        }

        .tdCompanyInfo {
            vertical-align: top;
            text-align: left;
        }
        .tdCompanyInfo > .title {
            font-size: 22px;
            font-weight: 800;
            line-height: 20px;
        }
        .tdCompanyInfo > .address {
            font-size: 13px;
            font-weight: 400;
            line-height: 20px;
        }
        .tdCompanyLogo {
            text-align: right;
        }

        .trHeaderSpacing {
            /**/
        }

        .tdClientInfo {
            vertical-align: top;
            text-align: left;
        }
        .tdClientInfo > .title {
            font-size: 14px;
            font-weight: 400;
            line-height: 17px;
        }
        .tdClientInfo > .clientName {
            font-size: 13px;
            font-weight: 800;
            line-height: 20px;
        }

        .tdBudgetSummary-wrapper {
            vertical-align: top;
        }
        .tableBudgetSummary {
            width: 75%;
        }
        .tableBudgetSummary > tbody > tr > td {
            padding-left: 5px;
            padding-right: 5px;
        }
        .trBudgetSummaryTotal {
            background-color: #D3D3D3;
            font-weight: 800;
        }
        .trBudgetSummaryTotal > td {
            padding-top: 5px;
            padding-bottom: 5px;
            border-top: thin solid #7f7f7f;
            border-bottom: thin solid #7f7f7f;
        }

        /*Table items*/
        .tableItems {
            width: 100%;
        }
        .tableItems > tbody > tr > td {
            padding: 5px;
            border-bottom: thin solid #7f7f7f;
        }
        .trItemsHeader {
            background-color: #D3D3D3;
        }
        .trItemsHeader > td {
            border-top: thin solid #7f7f7f;
        }
        .colItem {
            font-weight: 800;
            text-transform: uppercase;
        }
        .trItem {
            /**/
        }
        .trItemsSpacing > td {
            border-bottom: 3px solid #7f7f7f;
        }
        .trItemsTotal {
            font-size: 13px;
        }
        .trItemsTotal > td {
            border-top: 0 !important;
            border-bottom: 0 !important;
        }
        .tdTotalHightlight {
            background-color: #D3D3D3;
        }

    </style>
</head>
<body>
    <table class="tableHeader">
        <tr>
            <td class="tdCompanyInfo">
                <span class="title">Verdesoft&trade;</span><br>
                <span class="address">
                    Calle con o sin nombre, 23<br>
                    Martorell, 08080<br>
                    Barcelona, Espa&ntilde;a
                </span><br>
            </td>
            <td class="tdCompanyLogo">
                <img src="{{ public_path('img/logo-verde.png') }}" height="75" width="181">
            </td>
        </tr>
        <tr class="trHeaderSpacing">
            <td colspan="2">
                <img src="{{ public_path('img/spacing.gif') }}" height="35" width="1">
            </td>
        </tr>
        <tr>
            <td class="tdClientInfo">
                <span class="title">PREPARADO PARA:</span><br>
                <span class="clientName">{{ $client }}</span>
            </td>
            <td class="tdBudgetSummary-wrapper">
                <table align="right" cellspacing="0" class="tableBudgetSummary">
                    <tr>
                        <td>Presupuesto #</td>
                        <td align="right">{{ $id }}</td>
                    </tr>
                    <tr>
                        <td>Fecha del presupuesto</td>
                        <td align="right">{{ $today }}</td>
                    </tr>
                    <tr class="trBudgetSummaryTotal">
                        <td>Presupuesto total</td>
                        <td align="right">{{ $budget }}</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr class="trHeaderSpacing">
            <td colspan="2">
                <img src="{{ public_path('img/spacing.gif') }}" height="50" width="1">
            </td>
        </tr>
    </table>
    <table class="tableItems" cellspacing="0">
        <tr class="trItemsHeader">
            <td>ITEM</td>
            <td>DESCRIPCIÓN</td>
            <td align="right">PRECIO</td>
            <td align="right">CANTIDAD</td>
            <td align="right">TOTAL LÍNEA</td>
        </tr>
        @if(count($tasks)>0)
        @foreach($tasks as $task)
        <tr class="trItem">
            <td class="colItem">{{ $task['name'] }}</td>
            <td>{{ $task['description'] }}</td>
            <td align="right">{{ $task['public_hourly_wage'] }}</td>
            <td align="right">{{ $task['hours'] }} h</td>
            <td align="right">{{ $task['public_cost'] }}</td>
        </tr>
        @endforeach
        <tr class="trItem">
            <td colspan="4" align="right">SUBTOTAL TAREAS</td>
            <td align="right">{{ $public_tasks_cost }}</td>
        </tr>
        @endif
        @if(count($expenses)>0)
        @foreach($expenses as $expense)
            <tr class="trItem">
                <td class="colItem">{{ $expense['name'] }}</td>
                <td>{{ $expense['description'] }}</td>
                <td align="right">{{ $expense['public_price'] }}</td>
                <td align="right">{{ $expense['units'] }}</td>
                <td align="right">{{ $expense['public_cost'] }}</td>
            </tr>
        @endforeach
        <tr class="trItem">
            <td colspan="4" align="right">SUBTOTAL OTROS</td>
            <td align="right">{{ $public_expenses_cost }}</td>
        </tr>
        @endif
        <tr class="trItem">
            <td colspan="4" align="right">BASE IMPONIBLE</td>
            <td align="right">{{ $tax_base  }}</td>
        </tr>
        <tr class="trItem">
            <td colspan="4" align="right">TIPO IVA</td>
            <td align="right">{{ $vat }}</td>
        </tr>
        <tr class="trItem">
            <td colspan="4" align="right">TOTAL IVA</td>
            <td align="right">{{ $vat_deduction }}</td>
        </tr>
        {{--<tr class="trItemsSpacing">--}}
            {{--<td colspan="5">--}}
                {{--<img src="{{ public_path('img/spacing.gif') }}" height="10" width="1">--}}
            {{--</td>--}}
        {{--</tr>--}}
        <tr class="trItemsTotal">
            <td colspan="4" align="right" class="tdTotalHightlight">PRESUPUESTO TOTAL</td>
            <td align="right" class="tdTotalHightlight">{{ $budget }}</td>
        </tr>
    </table>
</body>
</html>

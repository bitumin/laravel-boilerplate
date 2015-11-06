<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<html>
<head>
    <title></title>
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
                <span class="title">PREPARED FOR:</span><br>
                <span class="clientName">{{ $clientName }}</span>
            </td>
            <td class="tdBudgetSummary-wrapper">
                <table align="right" cellspacing="0" class="tableBudgetSummary">
                    <tr>
                        <td>Budget #</td>
                        <td align="right">{{ $budgetId }}</td>
                    </tr>
                    <tr>
                        <td>Budget date</td>
                        <td align="right">{{ \Carbon\Carbon::createFromFormat('Y-m-d',$today)->format('d/m/Y') }}</td>
                    </tr>
                    <tr class="trBudgetSummaryTotal">
                        <td>Budget total</td>
                        <td align="right">{{ $price }}</td>
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
            <td>DESCRIPTION</td>
            <td align="right">UNIT COST</td>
            <td align="right">QUANTITY</td>
            <td align="right">LINE TOTAL</td>
        </tr>
        @foreach($tasks as $task)
            <tr class="trItem">
                <td class="colItem">{{ \App\TaskType::where('id',$task['taskTypeId'])->pluck('name') }}</td>
                <td>{{ $task['taskDescription'] }}</td>
                <td align="right">{{ number_format($task['taskHourlyWage'],2,'.',',') }} €</td>
                <td align="right">{{ $task['taskHours'] }} h</td>
                <td align="right">{{ $task['taskCostOutput'] }}</td>
            </tr>
        @endforeach
        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">SUBTOTAL</td>
            <td align="right">{{ $totalTasks }}</td>
        </tr>

        @foreach($products as $product)
            <tr class="trItem">
                <td class="colItem">PRODUCT</td>
                <td>{{ $product['productDescription'] }}</td>
                <td align="right">{{ $product['productCostOutput'] }}</td>
                <td align="right">1 u</td>
                <td align="right">{{ $product['productCostOutput'] }}</td>
            </tr>
        @endforeach
        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">SUBTOTAL</td>
            <td align="right">{{ $totalProducts }}</td>
        </tr>

        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">COMISIÓN COMERCIAL</td>
            <td align="right">{{ $commission }}</td>
        </tr>
        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">BENEFICIO GESTORA</td>
            <td align="right">{{ $profit }}</td>
        </tr>
        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">BASE IMPONIBLE</td>
            <td align="right">{{ $taxBase  }}</td>
        </tr>

        <tr class="trItem">
            <td class="colItem"></td>
            <td></td>
            <td align="right"></td>
            <td align="right">TIPO IMPOSITIVO</td>
            <td align="right">{{ $irpf }}</td>
        </tr>

        <tr class="trItemsSpacing">
            <td colspan="5">
                <img src="{{ public_path('img/spacing.gif') }}" height="10" width="1">
            </td>
        </tr>
        <tr class="trItemsTotal">
            <td colspan="2"></td>
            <td align="right" class="tdTotalHightlight">BUDGET TOTAL</td>
            <td align="right" colspan="2" class="tdTotalHightlight">{{ $price }}</td>
        </tr>
    </table>
</body>
</html>

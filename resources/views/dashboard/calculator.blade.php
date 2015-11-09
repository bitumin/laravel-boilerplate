@extends('layouts.dashboard')

@section('title')
    <title>Dashboard | Project calculator</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('css/jquery.bootstrap-touchspin.css') }}">
    <style>
        .panel {
            margin-bottom: 4px;
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }
        .panel-heading {
            padding: 5px 15px;
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }
        .panel-footer {
            padding: 0px 15px;
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }
        .table > tbody > tr > td {
            padding: 0;
        }
        .table > thead > tr > th {
            padding: 3px;
        }

        .panel-body {
            padding: 0;
            overflow: hidden;
            border-radius: 4px;
        }
        .panel-body > table {
            margin-bottom: 0;
            border-radius: 4px;
        }
        .panel-heading > a, .panel-heading > a:hover, .panel-heading > a:focus, .panel-heading > a:active {
            color: white !important;
            text-decoration: none;
        }
        .panel-heading .accordion-toggle:after {
            font-family: 'Glyphicons Halflings';
            content: "\e114";
            float: right;
            color: white;
        }
        .panel-heading .accordion-toggle.collapsed:after {
            content: "\e080";
        }
        #totalBudget, #totalProducts, #totalTasks, #totalWages {
            font-weight: bold;
        }
    </style>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1>Project calculator</h1>
        </div>
        <div class="col-lg-8">

            <form id="calculatorForm" role="form" action="javascript:" target="_blank">
            {!! csrf_field() !!}

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse3" href="javascript:">
                        Client information
                    </a>
                </div>
                <div id="collapse3" class="collapse in">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Type</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <input name="clientName" placeholder="Client name" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <select name="clientTypeId" class="form-control input-sm">
                                        @foreach(\App\ClientType::all() as $clientType)
                                            <option value="{{ $clientType->id }}">{{ $clientType->name }}
                                                @if(!empty($clientType->description))
                                                    ({{ $clientType->description }})
                                                @endif
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            {{--TASKS COSTS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse1" href="javascript:">
                        Tasks costs
                    </a>
                </div>
                <div id="collapse1" class="collapse in">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Worker</th>
                                    <th>Task</th>
                                    <th>Task type</th>
                                    <th width="103">Hours</th>
                                    <th width="138">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="trModel hidden">
                                    <td>
                                        <select name="taskWorkerId-" class="form-control input-sm">
                                            @foreach(\App\User::all() as $worker)
                                            <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input name="taskDescription-" placeholder="Task description" class="form-control input-sm" type="text">
                                    </td>
                                    <td>
                                        <select name="taskTypeId-" class="form-control input-sm">
                                            @foreach(\App\TaskType::all() as $taskType)
                                            <option value="{{ $taskType->id }}">{{ $taskType->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input name="taskHours-" class="form-control input-sm" type="text">
                                    </td>
                                    <td>
                                        <a href="javascript:" class="btn btn-sm btn-success btnCopy"><i class="fa fa-files-o"></i> Copy</a><a href="javascript:" class="btn btn-sm btn-warning btnDelete"><i class="fa fa-times"></i> Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="javascript:" class="btn btn-sm btn-text btnAdd"><i class="fa fa-plus-circle"></i> Add</a>
                    </div>
                </div>
            </div>

            {{--OTHER COSTS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse2" href="javascript:">
                        Products/services costs
                    </a>
                </div>
                <div id="collapse2" class="collapse in">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Product or service</th>
                                <th width="180">Price</th>
                                <th width="130">% Margin</th>
                                <th width="138">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="trModel hidden">
                                <td>
                                    <input name="productDescription-" placeholder="Product or service description" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="productPrice-" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="productPriceMargin-" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <a href="javascript:" class="btn btn-sm btn-success btnCopy"><i class="fa fa-files-o"></i> Copy</a><a href="javascript:" class="btn btn-sm btn-warning btnDelete"><i class="fa fa-times"></i> Delete</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        <a href="javascript:" class="btn btn-sm btn-text btnAdd"><i class="fa fa-plus-circle"></i> Add</a>
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-7">
                    {{--PROJECT INFO--}}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse4" href="javascript:">
                                Project information
                            </a>
                        </div>
                        <div id="collapse4" class="panel-body collapse in">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Project source</th>
                                    <th>Project type</th>
                                    <th>Currency</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <select name="projectSourceId" class="form-control input-sm">
                                            @foreach(\App\ProjectSource::all() as $projectSource)
                                                <option value="{{ $projectSource->id }}">{{ $projectSource->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="projectTypeId" class="form-control input-sm">
                                            @foreach(\App\ProjectType::all() as $projectType)
                                                <option value="{{ $projectType->id }}">{{ $projectType->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="currencyUnit" class="form-control input-sm">
                                            <option value="€" selected="selected">Euro (EUR, €)</option>
                                            <option value="$">US Dollar (USD, $)</option>
                                        </select>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    {{--IRPF--}}
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse5" href="javascript:">
                                IRPF
                            </a>
                        </div>
                        <div id="collapse5" class="panel-body collapse in">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>IRPF (+)</th>
                                    <th>IRPF (-)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input name="irpf-1" class="form-control input-sm" type="text">
                                    </td>
                                    <td>
                                        <input name="irpf-2" class="form-control input-sm" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            {{--<a id="previewResults" class="btn btn-sm btn-primary">Preview results</a>--}}
            <a id="generateReport" class="btn btn-sm btn-primary">Generate internal report</a>
            <a id="generateBudget" class="btn btn-sm btn-primary">Generate budget</a>
            <br><br>

            </form>

        </div>
        <div class="col-lg-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    Workers wages
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResultsWages">

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Tasks costs
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Task</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResultsTasks">

                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    <span id="totalTasks">

                    </span>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Product/services costs
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResultsProducts">
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    <span id="totalProducts">

                    </span>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Totals
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Concept</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResultsTotals">
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    <span id="totalBudget">

                    </span>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.bootstrap-touchspin.js') }}"></script>
    <script>
        //clone function fix-workarround (fixes select clone not cloning selected values)
        (function (original) {
            jQuery.fn.clone = function () {
                var result           = original.apply(this, arguments),
                    my_textareas     = this.find('textarea').add(this.filter('textarea')),
                    result_textareas = result.find('textarea').add(result.filter('textarea')),
                    my_selects       = this.find('select').add(this.filter('select')),
                    result_selects   = result.find('select').add(result.filter('select'));

                for(var i = 0, l = my_textareas.length; i < l; ++i)
                    $(result_textareas[i]).val($(my_textareas[i]).val());
                for(i = 0, l = my_selects.length; i < l; ++i)
                    result_selects[i].selectedIndex = my_selects[i].selectedIndex;

                return result;
            };
        })(jQuery.fn.clone);

        $(document).ready(function() {

            var newRowIndex = 0;
            $(document).on('click', '.btnAdd', function() {
                var tBody = $(this).closest('.panel').find('tbody');
                var clonedTr = tBody.find('.trModel').clone().removeClass('hidden trModel');
                initTouchSpinners(clonedTr);
                addRowIndex(clonedTr, ++newRowIndex);
                tBody.append(clonedTr);
            });
            $(document).on('click', '.btnCopy', function() {
                var thisTr = $(this).closest('tr');
                var clonedTr = thisTr.clone();
                redrawInputs(clonedTr);
                initTouchSpinners(clonedTr);
                modRowIndex(clonedTr, ++newRowIndex);
                thisTr.after(clonedTr);
            });
            $(document).on('click', '.btnDelete', function() {
                $(this).closest('tr').remove();
            });

            function addRowIndex(obj, i) {
                obj.find('input, select').each(function() {
                    $(this).attr('name', $(this).attr('name')+i);
                });
            }
            function modRowIndex(obj, i) {
                var baseName = '';
                obj.find('input, select').each(function() {
                    baseName = $(this).attr('name').split('-');
                    $(this).attr('name', baseName[0]+'-'+i);
                });
            }
            function initTouchSpinners(obj) {
                obj.find('input[name^=taskHours-]').TouchSpin({min: 0, max: 9999, decimals: 0});
                obj.find('input[name^=productPrice-]').TouchSpin({min: 0, max: 9999999, decimals: 2, postfix: "€"});
                obj.find('input[name^=productPriceMargin-]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%"});
            }
            function redrawInputs(obj) {
                obj.find('input, select').each(function() {
                    var clonedInput = $(this).clone();
                    var td = $(this).closest('td');
                    td.empty().append(clonedInput);
                });
            }

            $('input[name=irpf-1]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%", initval: '21'});
            $('input[name=irpf-2]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%", initval: '15'});

            $(document).on('change',':input',function(){
                $.post('{{ route('dashboard.calculator.previewResults') }}', $("#calculatorForm").serialize(), function(data) {
                    //append tasks results
                    $('#tbodyResultsTasks').empty();
                    $.each(data['tasks'], function(key,val) {
                        var tasksRow = $(
                            '<tr>'+
                            '<td>'+val['taskDescription']+'</td>'+
                            '<td>'+val['taskCostOutput']+'</td>'+
                            '</tr>'
                        );
                        $('#tbodyResultsTasks').append(tasksRow);
                    });
                    $('#totalTasks').text(data['totalTasks']);

                    //append wages results
                    $('#tbodyResultsWages').empty();
                    $.each(data['wages'], function(key,val) {
                        var wagesRow = $(
                            '<tr>'+
                            '<td>'+val['name']+'</td>'+
                            '<td>'+val['wageOutput']+'</td>'+
                            '</tr>'
                        );
                        $('#tbodyResultsWages').append(wagesRow);
                    });

                    //append products results
                    $('#tbodyResultsProducts').empty();
                    $.each(data['products'], function(key,val) {
                        var productsRow = $(
                                '<tr>'+
                                '<td>'+val['productDescription']+'</td>'+
                                '<td>'+val['productCostOutput']+'</td>'+
                                '</tr>'
                        );
                        $('#tbodyResultsProducts').append(productsRow);
                    });
                    $('#totalProducts').text(data['totalProducts']);

                    //append totals
                    $('#tbodyResultsTotals').empty();
                    $.each({
                        "Coste total": data['totalCost'],
                        "Margen comisión": data['commission_margin'],
                        "Comisión": data['commission'],
                        "Margen beneficio": data['surcharge'],
                        "Beneficio": data['profit'],
                        "Base imponible": data['taxBase'],
                        "IRPF ponderado": data['irpf'],
                        "Reserva impuestos": data['taxes']
                    }, function(key,val) {
                        var totalsRow = $(
                                '<tr>'+
                                '<td>'+key+'</td>'+
                                '<td>'+val+'</td>'+
                                '</tr>'
                        );
                        $('#tbodyResultsTotals').append(totalsRow);
                    });
                    $('#totalBudget').text('Presupuesto: '+data['price']);
                });
            });

            $(document).on('click','#generateReport', function() {
                $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.generateReport') }}").submit();
            });

            $(document).on('click','#generateBudget', function() {
                $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.generateBudget') }}").submit();
            });

        });
    </script>
@endsection
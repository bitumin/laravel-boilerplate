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
        #totalBudget, #totalExpenses, #totalTasks, #totalWages {
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

            <input name="projectId" type="hidden" value="">

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse3" href="javascript:">
                        Client
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

            {{--TASKS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-target="#collapse1" href="javascript:">
                        Tasks
                    </a>
                </div>
                <div id="collapse1" class="collapse in">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Worker</th>
                                    <th>Name</th>
                                    <th>Description</th>
                                    <th width="103">Hours</th>
                                    <th width="138">Actions</th>
                                </tr>
                            </thead>
                            <tbody id="tbodyTasks">
                                <tr class="trModel hidden">
                                    <td>
                                        <select name="taskWorkerId-" class="form-control input-sm">
                                            @foreach(\App\User::all() as $worker)
                                            <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <select name="taskTypeId-" class="form-control input-sm">
                                            @foreach(\App\TaskType::all() as $taskType)
                                                <option value="{{ $taskType->id }}">{{ $taskType->name }}</option>
                                            @endforeach
                                        </select>
                                    </td>
                                    <td>
                                        <input name="taskDescription-" placeholder="Task description" class="form-control input-sm" type="text">
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
                        Expenses
                    </a>
                </div>
                <div id="collapse2" class="collapse in">
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th width="120">Price</th>
                                <th width="50">Units</th>
                                <th width="130">% Margin</th>
                                <th width="138">Actions</th>
                            </tr>
                            </thead>
                            <tbody id="tbodyExpenses">
                            <tr class="trModel hidden">
                                <td>
                                    <input name="expenseName-" placeholder="Name" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="expenseDescription-" placeholder="Description" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="expensePrice-" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="expenseUnits-" class="form-control input-sm" type="text">
                                </td>
                                <td>
                                    <input name="expenseMarginRate-" class="form-control input-sm" type="text">
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
                                        <select name="projectCurrency" class="form-control input-sm">
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
                                Taxes
                            </a>
                        </div>
                        <div id="collapse5" class="panel-body collapse in">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Income tax (IRPF)</th>
                                    <th>VAT (IVA)</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <input name="income_tax" class="form-control input-sm" type="text">
                                    </td>
                                    <td>
                                        <input name="vat" class="form-control input-sm" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <a id="generateReport" class="btn btn-sm btn-info">TEST internal report</a>
            <a id="generateBudget" class="btn btn-sm btn-info">TEST budget</a>
            <br><br>
            <a id="saveProject" class="btn btn-sm btn-success">Save project in DB</a>
            <a id="openReport" class="btn btn-sm btn-warning disabled">Open internal report</a>
            <a id="openBudget" class="btn btn-sm btn-warning disabled">Open budget</a>
            <br><br>
            <button type="reset" id="newProject" class="btn btn-sm btn-primary">New project</button>
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
                    Expenses
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Item</th>
                            <th>Total</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResultsExpenses">
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer text-right">
                    <span id="totalExpenses">

                    </span>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Results
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
                obj.find('input[name^=expenseUnits-]').TouchSpin({min: 1, max: 9999, decimals: 0, initval: 1, buttondown_class: "hidden", buttonup_class: "hidden"});
                obj.find('input[name^=expensePrice-]').TouchSpin({min: 0, max: 9999999, step: 0.01, decimals: 2, postfix: "€", buttondown_class: "hidden", buttonup_class: "hidden"});
                obj.find('input[name^=expenseMarginRate-]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%"});
            }
            function redrawInputs(obj) {
                obj.find('input, select').each(function() {
                    var clonedInput = $(this).clone();
                    var td = $(this).closest('td');
                    td.empty().append(clonedInput);
                });
            }

            $('input[name=income_tax]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%", initval: '30'});
            $('input[name=vat]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%", initval: '21'});

            $(document).on('change',':input',function() {
                $.get('{{ route('dashboard.calculator.previewResults') }}', $("#calculatorForm").serialize(), function(data) {
                    //append tasks results
                    $('#tbodyResultsTasks').empty();
                    $.each(data['tasks'], function(key,val) {
                        var tasksRow = $(
                            '<tr>'+
                            '<td>'+val['name']+'</td>'+
                            '<td>'+val['cost']+'</td>'+
                            '</tr>'
                        );
                        $('#tbodyResultsTasks').append(tasksRow);
                    });
                    $('#totalTasks').text(data['tasks_cost']);

                    //append wages results
                    $('#tbodyResultsWages').empty();
                    $.each(data['wages'], function(key,val) {
                        var wagesRow = $(
                            '<tr>'+
                            '<td>'+val['worker']+'</td>'+
                            '<td>'+val['wage']+'</td>'+
                            '</tr>'
                        );
                        $('#tbodyResultsWages').append(wagesRow);
                    });

                    //append expenses results
                    $('#tbodyResultsExpenses').empty();
                    $.each(data['expenses'], function(key,val) {
                        var expensesRow = $(
                                '<tr>'+
                                '<td>'+val['name']+'</td>'+
                                '<td>'+val['cost']+'</td>'+
                                '</tr>'
                        );
                        $('#tbodyResultsExpenses').append(expensesRow);
                    });
                    $('#totalExpenses').text(data['expenses_cost']);

                    //append totals
                    $('#tbodyResultsTotals').empty();
                    $.each({
                        "Costes": data['total_cost'],
                        "% Comisión": data['commission_rate'],
                        "Comisión": data['commission'],
                        "Costes+comisión": data['total_cost_w_commission'],
                        "% Margen": data['margin_rate'],
                        "IRPF": data['income_tax'],
                        "Utilidad bruta": data['gross_utility'],
                        "Deducción IRPF": data['income_tax_deduction'],
                        "Utilidad neta": data['net_utility'],
                        "Base imponible": data['tax_base'],
                        "IVA": data['vat'],
                        "Deducción IVA": data['vat_deduction']
                    }, function(key,val) {
                        var totalsRow = $(
                                '<tr>'+
                                '<td>'+key+'</td>'+
                                '<td>'+val+'</td>'+
                                '</tr>'
                        );
                        $('#tbodyResultsTotals').append(totalsRow);
                    });
                    $('#totalBudget').text('Presupuesto: '+data['budget']);
                });
            });

            $(document).on('click','#generateReport', function() {
                $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.testReport') }}").submit();
            });

            $(document).on('click','#generateBudget', function() {
                $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.testBudget') }}").submit();
            });

            $(document).on('click','#saveProject', function() {
                $.post('{{ route('dashboard.calculator.saveProject') }}', $("#calculatorForm").serialize(), function(data) {
                    alert('Project succesfully saved with ID: '+data['id']);
                    $('input[name=projectId]').val(data['id']);
                    $('input, select').not('input[type=hidden]').attr('disabled','disabled');
                    $('#generateReport, #generateBudget, #saveProject').addClass('disabled');
                    $('.btnAdd, .btnCopy, .btnDelete').addClass('disabled');
                    $('#openReport, #openBudget').removeClass('disabled');
                }).fail(function() {
                    alert('Unknown server error: unable to save project.')
                    $('#openReport, #openBudget').addClass('disabled');
                });
            });

            $(document).on('click','#newProject', function() {
                $('#tbodyTasks, #tbodyExpenses').find('tr').not('.trModel').remove();
                $('input, select').removeAttr('disabled');
                $('.btnAdd, .btnCopy, .btnDelete').removeClass('disabled');
                $('#generateReport, #generateBudget, #saveProject').removeClass('disabled');
                $('#openReport, #openBudget').addClass('disabled');
            });

            $(document).on('click','#openReport', function() {
                if($('input[name=projectId]').val() != '')
                    $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.openReport') }}").submit();
            });

            $(document).on('click','#openBudget', function() {
                if($('input[name=projectId]').val() != '')
                    $('#calculatorForm').attr('action', "{{ route('dashboard.calculator.openBudget') }}").submit();
            });

        });
    </script>
@endsection
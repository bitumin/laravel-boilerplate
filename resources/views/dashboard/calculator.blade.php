@extends('layouts.dashboard')

@section('title')
    <title>Dashboard | Users management</title>
@endsection

@section('css')
    <style>
        .required {
            color: #b92720;
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
    </style>
@endsection

@section('content')
    <div class="row" style="padding-top: 25px;">
        <div class="col-lg-12">

            <form id="calculatorForm" role="form" action="javascript:calculate();">
            {!! csrf_field() !!}

            {{--TASKS COSTS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Tasks costs
                </div>
                <div class="panel-body" style="">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Worker</th>
                                <th>Task</th>
                                <th>Task type</th>
                                <th style="width: 140px;">Hours</th>
                                <th style="width: 185px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="trModel hidden">
                                <td>
                                    <select name="taskWorkerId-" class="form-control">
                                        @foreach(\App\User::all() as $worker)
                                        <option value="{{ $worker->id }}">{{ $worker->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input name="taskDescription-" placeholder="Task description" class="form-control" type="text">
                                </td>
                                <td>
                                    <select name="taskTypeId-" class="form-control">
                                        @foreach(\App\TaskType::all() as $taskType)
                                        <option value="{{ $taskType->id }}">{{ $taskType->name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td>
                                    <input name="taskHours-" class="form-control" type="text">
                                </td>
                                <td>
                                    <a href="javascript:" class="btn btn-success btnCopy"><i class="fa fa-files-o"></i> Copy</a>
                                    <a href="javascript:" class="btn btn-warning btnDelete"><i class="fa fa-times"></i> Delete</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="javascript:" class="btn btn-text btnAdd"><i class="fa fa-plus-circle"></i> Add</a>
                </div>
            </div>

            {{--OTHER COSTS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Other costs
                </div>
                <div class="panel-body" style="">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Product or service</th>
                            <th style="width: 215px;">Price</th>
                            <th style="width: 170px;">% Price Margin</th>
                            <th style="width: 185px;">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="trModel hidden">
                            <td>
                                <input name="productDescription-" placeholder="Product or service description" class="form-control" type="text">
                            </td>
                            <td>
                                <input name="productPrice-" class="form-control" type="text">
                            </td>
                            <td>
                                <input name="productPriceMargin-" class="form-control" type="text">
                            </td>
                            <td>
                                <a href="javascript:" class="btn btn-success btnCopy"><i class="fa fa-files-o"></i> Copy</a>
                                <a href="javascript:" class="btn btn-warning btnDelete"><i class="fa fa-times"></i> Delete</a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="javascript:" class="btn btn-text btnAdd"><i class="fa fa-plus-circle"></i> Add</a>
                </div>
            </div>

            {{--CLIENT AND PROJECT TYPES--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Client, project types. Project source. IRPF.
                </div>
                <div class="panel-body" style="">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Client type</th>
                            <th>Project source</th>
                            <th>Project type</th>
                            <th>IRPF (+)</th>
                            <th>IRPF (-)</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <select name="clientTypeId" class="form-control">
                                    @foreach(\App\ClientType::all() as $clientType)
                                        <option value="{{ $clientType->id }}">{{ $clientType->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="projectSourceId" class="form-control">
                                    @foreach(\App\ProjectSource::all() as $projectSource)
                                        <option value="{{ $projectSource->id }}">{{ $projectSource->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <select name="projectTypeId" class="form-control">
                                    @foreach(\App\ProjectType::all() as $projectType)
                                        <option value="{{ $projectType->id }}">{{ $projectType->name }}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td>
                                <input name="irpf-1" class="form-control" type="text">
                            </td>
                            <td>
                                <input name="irpf-2" class="form-control" type="text">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <a id="sendCalculatorForm" class="btn btn-primary">Calculate</a>
            <br><br>

            </form>

            {{--RESULTS--}}
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Results list
                </div>
                <div class="panel-body" style="">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Result</th>
                            <th>Value</th>
                            <th>Unit</th>
                        </tr>
                        </thead>
                        <tbody id="tbodyResults">

                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <script>
        $(document).ready(function() {

            $(document).on('click', '.btnAdd', function() {
                var tBody = $(this).closest('.panel').find('tbody');
                var clonedTr = tBody.find('.trModel').clone().removeClass('hidden trModel');
                activateTouchSpinners(clonedTr);
                tBody.append(clonedTr);
            });
            $(document).on('click', '.btnCopy', function() {
                var thisTr = $(this).closest('tr');
                var clonedTr = thisTr.clone();
                updateTouchSpinners(clonedTr);
                thisTr.after(clonedTr);
            });
            $(document).on('click', '.btnDelete', function() {
                $(this).closest('tr').remove();
            });

            function activateTouchSpinners(obj) {
                obj.find('input[name^=taskHours-]').TouchSpin({min: 0, max: 9999, decimals: 0});
                obj.find('input[name^=productPrice-]').TouchSpin({min: 0, max: 9999999, decimals: 2, postfix: "€"});
                obj.find('input[name^=productPriceMargin-]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%"});
            }
            function updateTouchSpinners(obj) {
                obj.find('input[name^=taskHours-]').trigger("touchspin.destroy");
                obj.find('input[name^=productPrice-]').trigger("touchspin.destroy");
                obj.find('input[name^=productPriceMargin-]').trigger("touchspin.destroy");
            }

            $('input[name^=irpf-]').TouchSpin({min: 0, max: 100, decimals: 0, postfix: "%"});

            $(document).on('click','#sendCalculatorForm',function(){
                $.post('/dashboard/calculator/calculate', $("#calculatorForm").serialize(), function(data) {
                    console.log(data);
                });
            });
        });
    </script>
@endsection
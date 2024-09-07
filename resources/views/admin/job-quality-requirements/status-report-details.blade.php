<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Deliverables Status Report | JQRMS</title>
    <style>
    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid black;
        padding: 8px;
        text-align: center;
    }

    .green {
        background-color: green;
        color: white;
    }

    .yellow {
        background-color: yellow;
    }

    .red {
        background-color: red;
        color: white;
    }

    .white {
        background-color: white;
    }
    .text-center {
        text-align:center;
    }
    </style>
</head>

<body>
    <h2 class="text-center">JQRMS - Document Deliverables Planned Until {{ isset($endDate) ? \Carbon\Carbon::parse($endDate)->format('M d Y') : '' }}</h2>
    <table>
        <thead>
            <tr>
                <th>Job Number</th>
                <th>Req Doc Completion Date</th>
                <th>MTR's Confirmed</th>
                <th>Heat Map (HM) Confirmed</th>
                <th>Weld Map (WM) Confirmed</th>
                <th>NDE Report Confirmed (Spooling)</th>
                <th>Spooling Hydro Report Confirmed</th>
                <th>Spooling Document Package Completed</th>
                <th>Vessel Hydro Report Confirmed</th>
                <th>Vessel NDE Report Confirmed</th>
                <th>Vessel Document Package Completed</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $report)
                <tr>
                    <td>
                        {{ isset($report['job_number']) ? $report['job_number'] : '' }}
                    </td>
                    <td class="">
                        {{ isset($report['document_deliverables_due_date']) ? $report['document_deliverables_due_date'] : '' }}
                    </td>
                    <td class="">
                        {{ isset($report->processFuelGasStartGasPiping->mtrs_required) && $report->processFuelGasStartGasPiping->mtrs_required == '1' ? 'Yes': 'No' }}
                    </td>
                    <td class="">
                        {{ isset($report->processFuelGasStartGasPiping->heat_mapping) && $report->processFuelGasStartGasPiping->heat_mapping == '1' ? 'Yes': 'No' }}
                    </td>
                    <td class="">
                        {{ isset($report->processFuelGasStartGasPiping->weld_mapping) && $report->processFuelGasStartGasPiping->weld_mapping == '1' ? 'Yes': 'No' }}
                    </td>
                    <td class="">
                        @if($page == 'download')
                            {{ isset($report['process_fuel_gas_start_gas_piping']['nde_requirements_status']['name']) ? $report['process_fuel_gas_start_gas_piping']['nde_requirements_status']['name'] : '' }} 
                        @elseif($page == 'view')
                            {{ isset($report->processFuelGasStartGasPiping->ndeRequirementsStatus) ? $report->processFuelGasStartGasPiping->ndeRequirementsStatus->name : '' }}
                        @endif
                    </td>
                    <td class="">
                        {{ isset($report->processFuelGasStartGasPiping->hydro_chart_required) && $report->processFuelGasStartGasPiping->hydro_chart_required == '1' ? 'Yes': 'No' }}
                    </td>
                    <td class="">
                        {{ isset($report->processFuelGasStartGasPiping->traveller_completed_status) && $report->processFuelGasStartGasPiping->traveller_completed_status == '1' ? 'Completed': 'Pending' }}
                    </td>
                    <td class="">
                        {{ isset($report->pressureVessels->hydro_chart_required) && $report->pressureVessels->hydro_chart_required == '1' ? 'Yes': 'No' }}
                    </td>
                    <td class="">
                        @if($page == 'download')
                            {{ isset($report['pressure_vessels']['nde_requirements_status']['name']) ? $report['pressure_vessels']['nde_requirements_status']['name'] : '' }}
                        @elseif($page == 'view')
                            {{ isset($report->pressureVessels->ndeRequirementsStatus) ? $report->pressureVessels->ndeRequirementsStatus->name : '' }}
                        @endif
                    </td>
                    <td class="">
                        {{ isset($report->pressureVessels->traveller_completed_status) && $report->pressureVessels->traveller_completed_status == '1' ? 'Completed': 'Pending' }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>View JQR | PDF</title>
</head>


<body>
    <h3>JOB QUALITY REQUIREMENTS</h3>
    <div class="container" style="clear: both;">
        <div class="row" style="clear: both;">
            <div class="col-xs-12">
                <div class="" data-pattern="priority-columns">
                    <!-- BASIC PROJECT DETAILS -->
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Revison:</th>
                                <th data-priority="1">Form Number: </th>
                                <th data-priority="2">Form Revised:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">BASIC PROJECT DETAILS</td>
                            </tr>
                            <tr>
                                <td>JOB/PROJECT NUMBER: {{ isset($jqr->job_number) ? $jqr->job_number : '' }}</td>
                                <td colspan="2">JOB NAME: {{ isset($jqr->job_name) ? $jqr->job_name : '' }}</td>
                            </tr>
                            <tr>
                                <td>STAGES: {{ isset($jqr->stages) ? $jqr->stages : '' }}</td>
                                <td>RELEASE DATE: {{ isset($jqr->release_date) ? $jqr->release_date : '' }}</td>
                                <td>DUE DATE: {{ isset($jqr->due_date) ? $jqr->due_date : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- BASIC PROJECT DETAILS ENDS -->
                    <!-- SPECIAL MATERIAL REQUIREMENTS -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">SPECIAL MATERIAL REQUIREMENTS</td>
                            </tr>
                            <tr>
                                <td>Pipes & Fittings(400.01): {{ isset($jqr_special->pipes_and_fittings) ? ($jqr_special->pipes_and_fittings == '1' ? 'Yes' : 'No') : ''  }}</td>
                                <td colspan="5">Bolting(400.01): {{ isset($jqr_special->bolting) ? ($jqr_special->bolting == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>Pressure Vessels(400.11): {{ isset($jqr_special->pressure_vessels) ? ($jqr_special->pressure_vessels == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">Gaskets: {{ isset($jqr_special->gaskets) ? $jqr_special->gaskets : '' }}</td>
                            </tr>
                            <tr>
                                <td>Structural Steel(410.01): {{ isset($jqr_special->structural_steel) ? ($jqr_special->structural_steel == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">Tubing(420.01): {{ isset($jqr_special->tubing) ? ($jqr_special->tubing == '1' ? 'Yes' : 'N0') : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- SPECIAL MATERIAL REQUIREMENTS ENDS -->
                    <!-- GENERAL INFORMATION -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">GENERAL INFORMATION</td>
                            </tr>
                            <tr>
                                <td>CUSTOMER: {{ isset($jqr_general_info->customer) ? $jqr_general_info->customer : '' }}</td>
                                <td colspan="5">LOCATION: {{ isset($jqr_general_info->location) ? $jqr_general_info->location : '' }}</td>
                            </tr>
                            <tr>
                                <td>ENGINEER: {{ isset($jqr_general_info->engineer) ? $jqr_general_info->engineer : '' }}</td>
                                <td>DESIGNER: {{ isset($jqr_general_info->designer) ? $jqr_general_info->designer : '' }}</td>
                                <td colspan="4">SALESMAN: {{ isset($jqr_general_info->sales_man) ? $jqr_general_info->sales_man : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">JOB TYPE/DESCRIPTION: {{ isset($jqr_general_info->job_type) ? $jqr_general_info->job_type : '' }}</td>
                            </tr>
                            <tr>
                                <td>JOB REVISION NUMBER: {{ isset($jqr_general_info->job_revision_number) ? $jqr_general_info->job_revision_number : '' }}</td>
                                <td>DATE REVISED: {{ isset($jqr_general_info->date_revised) ? $jqr_general_info->date_revised : '' }}</td>
                                <td colspan="4">DATE APPROVED BY ENGINEER: {{ isset($jqr_general_info->date_approved) ? $jqr_general_info->date_approved : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_general_info->notes) ? $jqr_general_info->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- GENERAL INFORMATION ENDS -->
                    <!-- SERVICE INFORMATION -->
                    <table style="overflow:hidden" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">SERVICE INFORMATION</td>
                            </tr>
                            <tr>
                                <td>GAS PROCESSED: {{ isset($jqr_service_info->gas_processed) ? $jqr_service_info->gas_processed : '' }}</td>
                                <td colspan="5">APPLICATION: {{ isset($jqr_service_info->application) ? $jqr_service_info->application : '' }}</td>
                            </tr>
                            <tr>
                                <td>SOUR SERVICE -- NACE MR0175 REQUIRED: {{ isset($jqr_service_info->sour_service_required) ? ($jqr_service_info->sour_service_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">OTHER: {{ isset($jqr_service_info->other) ? ($jqr_service_info->other == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_service_info->notes) ? $jqr_service_info->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- SERVICE INFORMATION ENDS -->
                    <!-- STRUCTURAL SKID -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">STRUCTURAL SKID</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_structural_skid->customer_avl_applies) ? ($jqr_structural_skid->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_structural_skid->material_origin_reqs) ? $jqr_structural_skid->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_structural_skid->customer_avl_applies) ? ($jqr_structural_skid->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_structural_skid->acceptable_material_origins) ? $jqr_structural_skid->acceptable_material_origins : '' }}</td>
                                <td colspan="5">STANDARD PER CODE(NO MTRS): {{ isset($jqr_structural_skid->customer_avl_applies) ? ($jqr_structural_skid->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>
                            <tr>
                                <td class="">MTRS REQUIRED: {{ isset($jqr_structural_skid->mtrs_required) ? ($jqr_structural_skid->mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">HEAT MAPPING: {{ isset($jqr_structural_skid->heat_mapping) ? ($jqr_structural_skid->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td width="25%" class="">WELD MAPPING: {{ isset($jqr_structural_skid->weld_mapping) ? ($jqr_structural_skid->weld_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td width="75%">MATERIAL NOTES: {{ isset($jqr_structural_skid->material_notes) ? $jqr_structural_skid->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_structural_skid->nde_requirements) ? $jqr_structural_skid->nde_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" >WELDING REQUIREMENTS: {{ isset($jqr_structural_skid->weld_requirements) ? $jqr_structural_skid->weld_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td>GOVERNING CODE: {{ isset($jqr_structural_skid->governing_code) ? $jqr_structural_skid->governing_code : '' }}</td>
                                <td colspan="5">PWHT: {{ isset($jqr_structural_skid->pwht) ? ($jqr_structural_skid->pwht == '1' ? 'Yes' : 'No - EFX Standard') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_structural_skid->notes) ? $jqr_structural_skid->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- STRUCTURAL SKID ENDS -->
                    <!-- PRESSURE VESSELS -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">PRESSURE VESSELS</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_pressure_vessels->customer_avl_applies) ? ($jqr_pressure_vessels->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_pressure_vessels->material_origin_reqs) ? $jqr_pressure_vessels->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_pressure_vessels->origin_traceable_to_melt) ? ($jqr_pressure_vessels->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_pressure_vessels->acceptable_material_origins) ? $jqr_pressure_vessels->acceptable_material_origins : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>
                            <tr>
                                <td colspan="" class="">MTRS REQUIRED: {{ isset($jqr_pressure_vessels->mtrs_required) ? ($jqr_pressure_vessels->mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">HEAT MAPPING: {{ isset($jqr_pressure_vessels->heat_mapping) ? ($jqr_pressure_vessels->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">WELD MAPPING: {{ isset($jqr_pressure_vessels->weld_mapping) ? ($jqr_pressure_vessels->weld_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_pressure_vessels->material_notes) ? $jqr_pressure_vessels->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="">NACE: {{ isset($jqr_pressure_vessels->nace) ? ($jqr_pressure_vessels->nace == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">NDE REQUIREMENTS REQUIRED: {{ isset($jqr_pressure_vessels->nde_requirements_required) ? ($jqr_pressure_vessels->nde_requirements_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_pressure_vessels->nde_requirements) ? $jqr_pressure_vessels->nde_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">WELDING REQUIREMENTS: {{ isset($jqr_pressure_vessels->weld_requirements) ? $jqr_pressure_vessels->weld_requirements : '' }}</td>
                            </tr>

                            <tr>
                                <td>GOVERNING CODE: {{ isset($jqr_pressure_vessels->governing_code) ? $jqr_pressure_vessels->governing_code : '' }}</td>
                                <td colspan="5">PWHT: {{ isset($jqr_pressure_vessels->pwht) ? (($jqr_pressure_vessels->pwht == '0') ? "Yes" : (($jqr_pressure_vessels->pwht == '1')  ? "No" : "Per Code REQ")) : '' }}</td>
                            </tr>
                            <tr>
                                <td>HYDRO HOLD TIME: {{ isset($jqr_pressure_vessels->hydro_hold_time) ? $jqr_pressure_vessels->hydro_hold_time : '' }}</td>
                                <td>WITNESSED: {{ isset($jqr_pressure_vessels->witnessed) ? ($jqr_pressure_vessels->witnessed == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="4">HARDNESS TEST: {{ isset($jqr_pressure_vessels->hardness_test) ? ($jqr_pressure_vessels->hardness_test == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td >MAX HARDNESS: {{ isset($jqr_pressure_vessels->max_hardness) ? $jqr_pressure_vessels->max_hardness : '' }}</td>
                                <td colspan="5">HYDRO CHART REQUIRED: {{ isset($jqr_pressure_vessels->hydro_chart_required) ? ($jqr_pressure_vessels->hydro_chart_required == '1' ? 'Yes' : 'No') : '' }}</td>

                            </tr>
                            <tr>
                                <td>HYDRO NOTES: {{ isset($jqr_pressure_vessels->hydro_notes) ? $jqr_pressure_vessels->hydro_notes : '' }}</td>
                                <td colspan="5">NOTES: {{ isset($jqr_pressure_vessels->notes) ? $jqr_pressure_vessels->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- PRESSURE VESSELS ENDS -->
                    <!-- NON CODE VESSELS -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">NON CODE VESSELS</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_non_code->customer_avl_applies) ? ($jqr_non_code->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_non_code->material_origin_reqs) ? $jqr_non_code->material_origin_reqs : '' }}</td>
                                <td>ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_non_code->origin_traceable_to_melt) ? ($jqr_non_code->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="4">ORIGIN TRACEABLE TO MANUFACTURER: {{ isset($jqr_non_code->origin_traceable_to_manufacturer) ? ($jqr_non_code->origin_traceable_to_manufacturer == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_non_code->acceptable_material_origins) ? $jqr_non_code->acceptable_material_origins : '' }}</td>
                                <td colspan="5">STANDARD PER CODE(NO MTRS): {{ isset($jqr_non_code->standard_code) ? ($jqr_non_code->standard_code == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>

                            <tr>
                                <td colspan="" class="">MTRS REQUIRED: {{ isset($jqr_non_code->mtrs_required) ? ($jqr_non_code->mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">HEAT MAPPING: {{ isset($jqr_non_code->heat_mapping) ? ($jqr_non_code->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">WELD MAPPING: {{ isset($jqr_non_code->weld_mapping) ? ($jqr_non_code->weld_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_non_code->material_notes) ? $jqr_non_code->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NACE: {{ isset($jqr_non_code->nace) ? ($jqr_non_code->nace == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_non_code->nde_requirements) ? $jqr_non_code->nde_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">WELDING REQUIREMENTS: {{ isset($jqr_non_code->weld_requirements) ? $jqr_non_code->weld_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td>GOVERNING CODE: {{ isset($jqr_non_code->governing_code) ? $jqr_non_code->governing_code : '' }}</td>
                                <td colspan="5">PWHT: {{ isset($jqr_non_code->pwht) ? (($jqr_non_code->pwht == '0') ? "Yes" : (($jqr_non_code->pwht == '1')  ? "No" : "Per Code REQ")) : '' }}</td>
                            </tr>
                            <tr>
                                <td>HYDRO HOLD TIME: {{ isset($jqr_non_code->hydro_hold_time) ? $jqr_non_code->hydro_hold_time : '' }}</td>
                                <td>WITNESSED: {{ isset($jqr_non_code->witnessed) ? ($jqr_non_code->witnessed == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="4">HARDNESS TEST: {{ isset($jqr_non_code->hardness_test) ? ($jqr_non_code->hardness_test == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td >MAX HARDNESS: {{ isset($jqr_non_code->max_hardness) ? $jqr_non_code->max_hardness : '' }}</td>
                                <td colspan="5">HYDRO CHART REQUIRED: {{ isset($jqr_non_code->hydro_chart_required) ? ($jqr_non_code->hydro_chart_required == '1' ? 'Yes' : 'No') : '' }}</td>

                            </tr>
                            <tr>
                                <td>HYDRO NOTES: {{ isset($jqr_non_code->hydro_notes) ? $jqr_non_code->hydro_notes : '' }}</td>
                                <td colspan="5"> NOTES: {{ isset($jqr_non_code->notes) ? $jqr_non_code->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- NON CODE VESSELS ENDS -->
                    <!-- Process/Fuel Gas/Start Gas Piping -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">PROCESS/FUEL GAS/START GAS PIPING</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_process_fuel_gas->customer_avl_applies) ? ($jqr_process_fuel_gas->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_process_fuel_gas->material_origin_reqs) ? $jqr_process_fuel_gas->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_process_fuel_gas->origin_traceable_to_melt) ? ($jqr_process_fuel_gas->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_process_fuel_gas->acceptable_material_origins) ? $jqr_process_fuel_gas->acceptable_material_origins : '' }}</td>
                                <td colspan="5">STANDARD PER CODE(NO MTRS): {{ isset($jqr_process_fuel_gas->standard_code) ? ($jqr_process_fuel_gas->standard_code == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>

                            <tr>
                                <td colspan="" class="">MTRS REQUIRED: {{ isset($jqr_process_fuel_gas->mtrs_required) ? ($jqr_process_fuel_gas->mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">HEAT MAPPING: {{ isset($jqr_process_fuel_gas->heat_mapping) ? ($jqr_process_fuel_gas->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">WELD MAPPING: {{ isset($jqr_process_fuel_gas->weld_mapping) ? ($jqr_process_fuel_gas->weld_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_process_fuel_gas->material_notes) ? $jqr_process_fuel_gas->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NACE: {{ isset($jqr_process_fuel_gas->nace) ? ($jqr_process_fuel_gas->nace == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_process_fuel_gas->nde_requirements) ? $jqr_process_fuel_gas->nde_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">WELDING REQUIREMENTS: {{ isset($jqr_process_fuel_gas->weld_requirements) ? $jqr_process_fuel_gas->weld_requirements : '' }}</td>
                            </tr>

                            <tr>
                                <td>HYDRO HOLD TIME: {{ isset($jqr_process_fuel_gas->hydro_hold_time) ? $jqr_process_fuel_gas->hydro_hold_time : '' }}</td>
                                <td>WITNESSED: {{ isset($jqr_process_fuel_gas->witnessed) ? ($jqr_process_fuel_gas->witnessed == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="4">HARDNESS TEST: {{ isset($jqr_process_fuel_gas->hardness_test) ? ($jqr_process_fuel_gas->hardness_test == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td >MAX HARDNESS: {{ isset($jqr_process_fuel_gas->max_hardness) ? $jqr_process_fuel_gas->max_hardness : '' }}</td>
                                <td colspan="5">HYDRO CHART REQUIRED: {{ isset($jqr_process_fuel_gas->hydro_chart_required) ? ($jqr_process_fuel_gas->hydro_chart_required == '1' ? 'Yes' : 'No') : '' }}</td>

                            </tr>
                            <tr>
                                <td>HYDRO NOTES: {{ isset($jqr_process_fuel_gas->hydro_notes) ? $jqr_process_fuel_gas->hydro_notes : '' }}</td>
                                <td colspan="5"> NOTES: {{ isset($jqr_process_fuel_gas->notes) ? $jqr_process_fuel_gas->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Process/Fuel Gas/Start Gas Piping ENDS -->
                    <!-- BOLTING -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">BOLTING</td>
                            </tr>
                            <tr>
                                <td class="">EFX STANDARD NO COC's / NO MTR's : {{ isset($jqr_bolting->efx_standard_no_cocs) ? ($jqr_bolting->efx_standard_no_cocs == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">VENDOR COC: {{ isset($jqr_bolting->vendor_coc) ? ($jqr_bolting->vendor_coc == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td class="">MANUFACTURER COCs : {{ isset($jqr_bolting->manufacturer_coc) ? ($jqr_bolting->manufacturer_coc == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">MTRS: {{ isset($jqr_bolting->mtrs) ? ($jqr_bolting->mtrs == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>

                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_bolting->material_notes) ? $jqr_bolting->material_notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- BOLTING ENDS -->
                    <!-- GASKETS -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">GASKETS</td>
                            </tr>
                            <tr>
                                <td class="">EFX STANDARD NO COC's / NO MTR's: {{ isset($jqr_gaskets->efx_standard_no_cocs) ? ($jqr_gaskets->efx_standard_no_cocs == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">VENDOR COC: {{ isset($jqr_gaskets->vendor_coc) ? ($jqr_gaskets->vendor_coc == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td class="">MANUFACTURER COCs: {{ isset($jqr_gaskets->manufacturer_coc) ? ($jqr_gaskets->manufacturer_coc == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">MTRS: {{ isset($jqr_gaskets->mtrs) ? ($jqr_gaskets->mtrs == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>

                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_gaskets->due_date) ? $jqr_gaskets->due_date : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- GASKETS ENDS -->
                    <!-- TUBING -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TUBING</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_tubing->customer_avl_applies) ? ($jqr_tubing->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_tubing->material_origin_reqs) ? $jqr_tubing->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_tubing->origin_traceable_to_melt) ? ($jqr_tubing->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_tubing->acceptable_material_origins) ? $jqr_tubing->acceptable_material_origins : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">EFX STANDARD NO COC's / NO MTR's: {{ isset($jqr_tubing->efx_standard_no_cocs) ? ($jqr_tubing->efx_standard_no_cocs == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td class="">TUBING MTRS REQUIRED: {{ isset($jqr_tubing->tubing_mtrs_required) ? ($jqr_tubing->tubing_mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">TUBING COC REQUIRED: {{ isset($jqr_tubing->tubing_coc_required) ? ($jqr_tubing->tubing_coc_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td class="">FITTING MTRS REQUIRED: {{ isset($jqr_tubing->fitting_mtrs_required) ? ($jqr_tubing->fitting_mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">FITTING COC REQUIRED: {{ isset($jqr_tubing->fitting_coc_required) ? ($jqr_tubing->fitting_coc_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">FULL TRACEABILITY(w/HEAT MAPPING): {{ isset($jqr_tubing->full_traceability) ? ($jqr_tubing->full_traceability == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_tubing->material_notes) ? $jqr_tubing->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_tubing->nde_requirements) ? $jqr_tubing->nde_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">PMI REQUIREMENTS: {{ isset($jqr_tubing->pmi_Requirements) ? $jqr_tubing->pmi_Requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_tubing->notes) ? $jqr_tubing->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- TUBING ENDS -->
                    <!-- Butt Welded/Socket Welded Utility Piping -->
                    <table class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">BUTT WELDED/SOCKET WELDED UTILITY PIPING</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_butt->customer_avl_applies) ? ($jqr_butt->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_butt->material_origin_reqs) ? $jqr_butt->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_butt->origin_traceable_to_melt) ? ($jqr_butt->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_butt->acceptable_material_origins) ? $jqr_butt->acceptable_material_origins : '' }}</td>
                                <td colspan="5">STANDARD PER CODE(NO MTRS): {{ isset($jqr_butt->standard_per_code) ? ($jqr_butt->standard_per_code == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>
                            <tr>
                                <td colspan="" class="">MTRS PROVIDED: {{ isset($jqr_butt->mtrs_provided) ? ($jqr_butt->mtrs_provided == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">HEAT MAPPING: {{ isset($jqr_butt->heat_mapping) ? ($jqr_butt->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">WELD MAPPING: {{ isset($jqr_butt->weld_mapping) ? ($jqr_butt->weld_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_butt->material_notes) ? $jqr_butt->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NACE: {{ isset($jqr_butt->nace) ? ($jqr_butt->nace == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NDE REQUIREMENTS: {{ isset($jqr_butt->nde_requirements) ? ($jqr_butt->nde_requirements == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">WELDING REQUIREMENTS: {{ isset($jqr_butt->weld_requirements) ? $jqr_butt->weld_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td>GOVERNING CODE: {{ isset($jqr_butt->governing_code) ? $jqr_butt->governing_code : '' }}</td>
                                <td colspan="5">PWHT: {{ isset($jqr_butt->pwht) ? (($jqr_butt->pwht == '0') ? "Yes" : (($jqr_butt->pwht == '1')  ? "N0" : "Per Code REQ")) : '' }}</td>
                            </tr>
                            <tr>
                                <td>HYDRO HOLD TIME: {{ isset($jqr_butt->hydro_hold_time) ? $jqr_butt->hydro_hold_time : '' }}</td>
                                <td colspan="5">WITNESSED: {{ isset($jqr_butt->witnessed) ? ($jqr_butt->witnessed == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>HARDNESS TEST: {{ isset($jqr_butt->hardness_test) ? ($jqr_butt->hardness_test == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">MAX HARDNESS: {{ isset($jqr_butt->max_hardness) ? $jqr_butt->max_hardness : '' }}</td>
                            </tr>
                            <tr>
                                <td>HYDRO CHART REQUIRED: {{ isset($jqr_butt->hydro_chart_required) ? ($jqr_butt->hydro_chart_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">HYDRO NOTES: {{ isset($jqr_butt->hydro_notes) ? $jqr_butt->hydro_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_butt->notes) ? $jqr_butt->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Butt Welded/Socket Welded Utility Piping ENDS -->
                    <!-- Threaded Piping -->
                    <table style="overflow:hidden" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">THREADED PIPING</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_threaded_piping->customer_avl_applies) ? ($jqr_threaded_piping->customer_avl_applies == '1' ? 'Yes' : 'No') : ''  }}</td>
                            </tr>
                            <tr>
                                <td>MATERIAL ORIGIN REQS: {{ isset($jqr_threaded_piping->material_origin_reqs) ? $jqr_threaded_piping->material_origin_reqs : '' }}</td>
                                <td colspan="5">ORIGIN TRACEABLE TO MELT(BILLET): {{ isset($jqr_threaded_piping->origin_traceable_to_melt) ? ($jqr_threaded_piping->origin_traceable_to_melt == '1' ? 'Yes' : 'No') : ''  }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_threaded_piping->acceptable_material_origins) ? $jqr_threaded_piping->acceptable_material_origins : '' }}</td>
                                <td colspan="5">STANDARD PER CODE(NO MTRS): {{ isset($jqr_threaded_piping->standard_per_code) ? ($jqr_threaded_piping->standard_per_code == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="text-center text-bold">TRACEABILITY REQUIREMENTS(See USA-QAC_PRO-017)<br>
                                Indicates Special Material Origin Requirements Must Be Checked 'Yes'</td>
                            </tr>
                            <tr>
                                <td colspan="" class="">MTRS REQUIRED: {{ isset($jqr_threaded_piping->mtrs_required) ? ($jqr_threaded_piping->mtrs_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5" class="">*HEAT MAPPING(FULL TRACEABILITY): {{ isset($jqr_threaded_piping->heat_mapping) ? ($jqr_threaded_piping->heat_mapping == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_threaded_piping->material_notes) ? $jqr_threaded_piping->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NACE: {{ isset($jqr_threaded_piping->nace) ? ($jqr_threaded_piping->nace == '1' ? 'Yes' : 'No') : ''  }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_threaded_piping->notes) ? $jqr_threaded_piping->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Threaded Piping ENDS -->
                    <!-- Electrical/Instrumentation -->
                    <table style="overflow:hidden" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">Electrical/Instrumentation</td>
                            </tr>
                            <tr>
                                <td class="text-bold">MATERIAL REQUIREMENTS</td>
                                <td colspan="5">*CUSTOMER/CLIENT AVL APPLIES: {{ isset($jqr_electrical->customer_avl_applies) ? ($jqr_electrical->customer_avl_applies == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ACCEPTABLE MATERIAL ORIGINS: {{ isset($jqr_electrical->acceptable_material_origins)  ? $jqr_electrical->acceptable_material_origins : '' }}</td>
                                <td colspan="5">VENDOR RESTRICTIONS: {{ isset($jqr_electrical->vendor_restrictions) ? ($jqr_electrical->vendor_restrictions == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">SPECIFY: {{ isset($jqr_electrical->specify) ? $jqr_electrical->specify : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6" class="">APPROVED VENDOR(S): {{ isset($jqr_electrical->approved_vendors) ? $jqr_electrical->approved_vendors : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">MATERIAL NOTES: {{ isset($jqr_electrical->material_notes) ? $jqr_electrical->material_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">GOVERNING CODE: {{ isset($jqr_electrical->governing_code) ? $jqr_electrical->governing_code : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_electrical->notes) ? $jqr_electrical->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Electrical/Instrumentation ENDS -->
                    <!-- Preservation -->
                    <table style="overflow:hidden" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">Preservation</td>
                            </tr>
                            <tr>
                                <td class="">EFX STANDARD SHORT TERM(6 Mo): {{ isset($jqr_preservation->efx_standard_short_term) ? ($jqr_preservation->efx_standard_short_term == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">EFX STANDARD LONG TERM(6 Mo): {{ isset($jqr_preservation->efx_standard_long_term) ? ($jqr_preservation->efx_standard_long_term == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>CUSTOMER SPECIFIED/OTHER: {{ isset($jqr_preservation->customer_specified_other) ? ($jqr_preservation->customer_specified_other == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">SPECIAL CUSTOMER REQUIREMENTS: {{ isset($jqr_preservation->special_customer_requirements) ? $jqr_preservation->special_customer_requirements : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">NOTES: {{ isset($jqr_preservation->notes) ? $jqr_preservation->notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Preservation ENDS -->
                    <!-- Package Testing -->
                    <table style="overflow:hidden" class="table table-bordered table-hover">
                        <tbody>
                            <tr>
                                <td colspan="6" class="text-center text-bold">Package Testing</td>
                            </tr>
                            <tr>
                                <td colspan="" class="">PNEUMATIC TESTING: {{ isset($jqr_package_testing->pneumatic_testing) ? ($jqr_package_testing->pneumatic_testing == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">PNEUMATIC TESTING CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required) ? ($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required	== '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td class="">PNEUMATIC TESTING Notification Requirement: {{ isset($jqr_package_testing->pneumatic_testing_notification_requirement) ? $jqr_package_testing->pneumatic_testing_notification_requirement : '' }}</td>
                                <td colspan="5">SYSTEM: {{ isset($jqr_package_testing->system) ? $jqr_package_testing->system : '' }}</td>
                            </tr>
                            <tr>
                                <td>TEST MEDIUM: {{ isset($jqr_package_testing->test_medium) ? $jqr_package_testing->test_medium : '' }}</td>
                                <td colspan="5">TEST REQUIREMRN PRESSURE: {{ isset($jqr_package_testing->test_requirement_pressure) ? $jqr_package_testing->test_requirement_pressure : '' }}</td>
                            </tr>
                            <tr>
                                <td>TEST REQUIREMENT TIME: {{ isset($jqr_package_testing->test_requirement_time) ? $jqr_package_testing->test_requirement_time : ''  }}</td>
                                <td colspan="5">PNEUMATIC TESTING Notes: {{ isset($jqr_package_testing->pneumatic_testing_notes) ? $jqr_package_testing->pneumatic_testing_notes : '' }}</td>
                            </tr>

                            <tr>
                                <td>VACCUM: {{ isset($jqr_package_testing->vaccum) ? ($jqr_package_testing->vaccum == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">VACCUM CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->vaccum_customer_third_party_witness_required) ? ($jqr_package_testing->vaccum_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>VACCUM NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->vaccum_notification_requirement) ? $jqr_package_testing->vaccum_notification_requirement : '' }}</td>
                                <td colspan="5">LEVEL: {{ isset($jqr_package_testing->level) ? $jqr_package_testing->level : '' }}</td>
                            </tr>
                            <tr>
                                <td>DURATION AT LEVEL: {{ isset($jqr_package_testing->duration_at_level) ? $jqr_package_testing->duration_at_level : '' }}</td>
                                <td colspan="5">VACCUM NOTES: {{ isset($jqr_package_testing->vaccum_notes) ? $jqr_package_testing->vaccum_notes : '' }}</td>
                            </tr>

                            <tr>
                                <td>PURGE/CHARGE: {{ isset($jqr_package_testing->purge_charge) ? ($jqr_package_testing->purge_charge == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">PURGE/CHARGE PRESSURE: {{ isset($jqr_package_testing->purge_charge_pressure) ? $jqr_package_testing->purge_charge_pressure : '' }}</td>
                            </tr>
                            <tr>
                                <td>PURGE/CHARGE Medium: {{ isset($jqr_package_testing->purge_charge_medium) ? $jqr_package_testing->purge_charge_medium : '' }}</td>
                                <td colspan="5">PURGE/CHARGE Notes: {{ isset($jqr_package_testing->purge_charge_notes) ? $jqr_package_testing->purge_charge_notes : '' }}</td>
                            </tr>

                            <tr>
                                <td>LUBE OIL FLUSH: {{ isset($jqr_package_testing->lube_oil_flush) ? ($jqr_package_testing->lube_oil_flush == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">LUBE OIL FLUSH CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->lube_oil_flush_customer_third_party_witness_required) ? ($jqr_package_testing->lube_oil_flush_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>LUBE OIL FLUSH NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->lube_oil_flush_notification_requirement) ? $jqr_package_testing->lube_oil_flush_notification_requirement : '' }}</td>
                                <td colspan="5">LUBE OIL FLUSH NOTES: {{ isset($jqr_package_testing->lube_oil_flush_notes) ? $jqr_package_testing->lube_oil_flush_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td>RUN TEST: {{ isset($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required) ? ($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">RUN TEST CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->run_test_customer_third_party_witness_required) ? ($jqr_package_testing->run_test_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>RUN TEST NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->run_test_notification_requirement) ? $jqr_package_testing->run_test_notification_requirement : '' }}</td>
                                <td colspan="5">RUN TEST REQUIREMENT: {{ isset($run_test_reqs) ? $run_test_reqs : ''  }}</td>
                            </tr>
                            <tr>
                                <td>RUN TEST DURATION: {{ isset($jqr_package_testing->run_test_duration) ? $jqr_package_testing->run_test_duration : '' }}</td>
                                <td colspan="5">REQUIREMENT NOTES: {{ isset($jqr_package_testing->run_test_notes) ? $jqr_package_testing->run_test_notes : '' }}</td>
                            </tr>

                            <tr>
                                <td>MEGGER TEST: {{ isset($jqr_package_testing->megger_test) ? ($jqr_package_testing->megger_test == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">MEGGER TEST CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->megger_test_customer_third_party_witness_required) ? ($jqr_package_testing->megger_test_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>MEGGER TEST NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->megger_test_notes) ? $jqr_package_testing->megger_test_notes : '' }}</td>
                                <td colspan="5">MEGGER TEST NOTES: {{ isset($jqr_package_testing->megger_test_notes) ? $jqr_package_testing->megger_test_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td>FAT TEST: {{ isset($jqr_package_testing->fat_test) ? ($jqr_package_testing->fat_test == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">FAT TEST CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->fat_test_customer_third_party_witness_required) ? ($jqr_package_testing->pneumatic_testing_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>FAT TEST NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->fat_test_notification_requirement) ? $jqr_package_testing->fat_test_notification_requirement : '' }}</td>
                                <td colspan="5">FAT TEST REQUIREMENT: {{ isset($jqr_package_testing->fat_test_requirement) ? $jqr_package_testing->fat_test_requirement : '' }}</td>
                            </tr>
                            <tr>
                                <td colspan="6">FAT TEST NOTES: {{ isset($jqr_package_testing->fat_test_notes) ? $jqr_package_testing->fat_test_notes : '' }}</td>
                            </tr>
                            <tr>
                                <td>ADDITIONAL TESTING: {{ isset($jqr_package_testing->additional_testing) ? ($jqr_package_testing->additional_testing == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">ADDITIONAL TESTING CUSTOMER/THIRD PARTY WITNESS REQUIRED: {{ isset($jqr_package_testing->additional_testing_customer_third_party_witness_required) ? ($jqr_package_testing->additional_testing_customer_third_party_witness_required == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ADDITIONAL TESTING NOTIFICATION REQUIREMENT: {{ isset($jqr_package_testing->additional_testing_notification_requirement)  ? $jqr_package_testing->additional_testing_notification_requirement : '' }}</td>
                                <td colspan="5">ADDITIONAL TESTING TEST/REQUIREMENTS: {{ isset($jqr_package_testing->additional_testing_test_requirement) ? $jqr_package_testing->additional_testing_test_requirement : '' }}</td>
                            </tr>

                            <tr>
                                <td>ADDENDUM PURCHASING SPECIFICATIONS: {{ isset($jqr_package_testing->addendum_purchasing_specifications) ? ($jqr_package_testing->addendum_purchasing_specifications == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">ADDENDUM PURCHASING SPECIFICATIONS COMPLETE: {{ isset($jqr_package_testing->addendum_purchasing_specifications_complete) ? ($jqr_package_testing->addendum_purchasing_specifications_complete == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ADDENDUM PURCHASING SPECIFICATIONS NOTES: {{ isset($jqr_package_testing->addendum_purchasing_specifications_notes) ? $jqr_package_testing->addendum_purchasing_specifications_notes : '' }}</td>
                                <td colspan="5">ADDENDUM MANUFACTURING SPECIFICATIONS: {{ isset($jqr_package_testing->addendum_manufacturing_specifications) ? ($jqr_package_testing->addendum_manufacturing_specifications == '1' ? 'Yes' : 'No') : '' }}</td>
                            </tr>
                            <tr>
                                <td>ADDENDUM MANUFACTURING SPECIFICATIONS COMPLETE: {{ isset($jqr_package_testing->addendum_manufacturing_specifications_complete) ? ($jqr_package_testing->addendum_manufacturing_specifications_complete == '1' ? 'Yes' : 'No') : '' }}</td>
                                <td colspan="5">ADDENDUM MANUFACTURING SPECIFICATIONS NOTES: {{ isset($jqr_package_testing->addendum_manufacturing_specifications_notes) ? $jqr_package_testing->addendum_manufacturing_specifications_notes : '' }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Package Testing ENDS -->
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd.table.min.css">
<style>
h3 {
    text-align: center;
    padding: 20px 0;
}

.table-bordered {
    border: 1px solid #ddd !important;
}

table caption {
    padding: .5em 0;
}

.text-bold {
    font-weight: bold;
}

@media screen and (max-width: 767px) {
    table caption {
        display: none;
    }
}

.p {
    text-align: center;
    padding-top: 140px;
    font-size: 14px;
}
</style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.2/js/bootstrap.min.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/123941/rwd-table-patterns.js"></script>
</body></html>

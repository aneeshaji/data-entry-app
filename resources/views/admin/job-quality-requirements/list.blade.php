<x-app-layout>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y">
            <h4 class="py-3 mb-4"><span class="text-muted fw-light">Job Quality Requirements /</span> List</h4>
            <!-- Hoverable Table rows -->
            <div class="card">
                <!-- <h5 class="card-header">Hoverable rows</h5> -->
                <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Job Name</th>
                                <th>Stages</th>
                                <th>Release Date</th>
                                <th>Due Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @if ($jqrs->count() > 0)
                                @foreach ($jqrs as $key => $value)
                                    <tr>
                                        <td>
                                            <span class="fw-medium">{{ $key + 1 }}</span>
                                        </td>
                                        <td>{{ $value->job_name }}</td>
                                        <td>
                                        {{ $value->stages }}
                                        </td>
                                        <td><span class="">{{ $value->release_date }}</span></td>
                                        <td><span class="">{{ $value->due_date }}</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{ url('admin/job-quality-requirements/' . encrypt($value->id) . '/edit') }}"><i
                                                            class="ti ti-pencil me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="ti ti-download"></i> Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td colspan="6" class="text-bold text-danger text-center">
                                    No Data Found
                                </td>
                            @endif
                        </tbody>
                    </table>
                </div>
                {{ $jqrs->render() }}
            </div>
        </div>
        <!-- / Content -->
        <hr class="container-m-nx mb-5" />
        <!-- Footer -->
        <footer class="content-footer footer bg-footer-theme">
            <div class="container-xxl">
                <div
                    class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
                    <div>
                        ©
                        <script>
                        document.write(new Date().getFullYear());
                        </script>
                        All Rights Reserved
                        <!-- <a href="https://pixinvent.com" target="_blank"
                            class="footer-link text-primary fw-medium">codeFirstIT</a> -->
                    </div>
                    <!-- <div class="d-none d-lg-inline-block">
                        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4"
                            target="_blank">License</a>
                        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank"
                            class="footer-link me-4">More
                            Themes</a>

                        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank"
                            class="footer-link me-4">Documentation</a>

                        <a href="https://pixinvent.ticksy.com/" target="_blank"
                            class="footer-link d-none d-sm-inline-block">Support</a>
                    </div> -->
                </div>
            </div>
        </footer>
        <!-- / Footer -->

        <div class="content-backdrop fade"></div>
    </div>
</x-app-layout>

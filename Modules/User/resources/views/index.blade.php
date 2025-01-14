<x-layout>
    <x-slot:styles>
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendor/css/pages/page-profile.css') }}">
    </x-slot:styles>
    <x-slot:title>
        My profile
    </x-slot:title>

        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row">
              <div class="col-12">
                <div class="mb-4 card">
                  <div class="user-profile-header-banner">
                    <img src="../../assets/img/pages/profile-banner.png" alt="Banner image" class="rounded-top" />
                  </div>
                  <div class="mb-4 text-center user-profile-header d-flex flex-column flex-sm-row text-sm-start">
                    <div class="flex-shrink-0 mx-auto mt-n2 mx-sm-0">
                      <img
                        src="{{ asset("storage/".Auth::user()->profile_photo_path) }}"
                        alt="user image"
                        class="h-auto d-block ms-0 ms-sm-4 rounded-3 user-profile-img" />
                    </div>
                    <div class="mt-3 flex-grow-1 mt-sm-5">
                      <div
                        class="gap-4 mx-4 d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start flex-md-row flex-column">
                        <div class="user-profile-info">
                          <h4>{{ $user->FullName }}</h4>
                          <ul
                            class="flex-wrap gap-2 mb-0 list-inline d-flex align-items-center justify-content-sm-start justify-content-center">
                            <li class="list-inline-item fw-medium"><i class="bx bx-at"></i> {{ $user->user_name }}</li>

                          </ul>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--/ Header -->

            <!-- Navbar pills -->
            {{-- <div class="row">
              <div class="col-md-12">
                <ul class="mb-4 nav nav-pills flex-column flex-sm-row">
                  <li class="nav-item">
                    <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Profile</a>
                  </li>

                </ul>
              </div>
            </div> --}}
            <!--/ Navbar pills -->

            <!-- User Profile Content -->
            <div class="row">
              <div class="col-xl-4 col-lg-5 col-md-5">
                <!-- About User -->
                <div class="mb-4 card">
                  <div class="card-body">
                    <p class="card-text text-uppercase">About</p>
                    <ul class="mb-4 list-unstyled">
                      <li class="mb-3 d-flex align-items-center">
                        <i class="bx bx-star bx-xs"></i><span class="mx-2 fw-medium">Role:</span>
                        <span>{{ $user->roles[0]->name }}</span>
                      </li>
                      <li class="mb-3 d-flex align-items-center">
                        <i class="bx bx-flag bx-xs"></i><span class="mx-2 fw-medium">Country:</span> <span>{{ $user->country }}</span>
                      </li>
                      <li class="mb-3 d-flex align-items-center">
                        <i class="bx bx-detail bx-xs"></i><span class="mx-2 fw-medium">Languages:</span>
                        <span>{{ $user->language }}</span>
                      </li>
                    </ul>
                    <p class="card-text text-uppercase">Contacts</p>
                    <ul class="mb-4 list-unstyled">
                      <li class="mb-3 d-flex align-items-center">
                        <i class="bx bx-phone bx-xs"></i><span class="mx-2 fw-medium">Contact:</span>
                        <span>{{ $user->phone_number }}</span>
                      </li>
                      <li class="mb-3 d-flex align-items-center">
                        <i class="bx bx-envelope bx-xs"></i><span class="mx-2 fw-medium">Email:</span>
                        <span>{{ $user->email }}</span>
                      </li>
                    </ul>

                  </div>
                </div>
                <!--/ About User -->

              </div>
              <div class="col-xl-8 col-lg-7 col-md-7">

                        <!-- Projects table -->
                <div class="mb-4 card">
                  <h5 class="card-header">Projects List</h5>
                  <div class="mb-3 table-responsive">
                    <table class="table datatable-project">
                      <thead class="table-light">
                        <tr>
                          <th></th>
                          <th></th>
                          <th>Project</th>
                          <th class="text-nowrap">Total Task</th>
                          <th>Progress</th>
                          <th>Hours</th>
                        </tr>
                      </thead>
                    </table>
                  </div>
                </div>
                <!--/ Projects table -->


                <!-- Activity Timeline -->
                <div class="mb-4 card card-action">
                  <div class="card-header align-items-center">
                    <h5 class="mb-0 card-action-title"><i class="bx bx-list-ul bx-sm me-2"></i>Activity Timeline</h5>
                    <div class="card-action-element btn-pinned">
                      <div class="dropdown">
                        <button
                          type="button"
                          class="p-0 btn dropdown-toggle hide-arrow"
                          data-bs-toggle="dropdown"
                          aria-expanded="false">
                          <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                          <li><a class="dropdown-item" href="javascript:void(0);">Share timeline</a></li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                          <li>
                            <hr class="dropdown-divider" />
                          </li>
                          <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="card-body">
                    <ul class="timeline ms-2">
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-warning"></span>
                        <div class="timeline-event">
                          <div class="mb-1 timeline-header">
                            <h6 class="mb-0">Client Meeting</h6>
                            <small class="text-muted">Today</small>
                          </div>
                          <p class="mb-2">Project meeting with john @10:15am</p>
                          <div class="flex-wrap d-flex">
                            <div class="avatar me-3">
                              <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                            </div>
                            <div>
                              <h6 class="mb-0">Lester McCarthy (Client)</h6>
                              <span>CEO of Infibeam</span>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-info"></span>
                        <div class="timeline-event">
                          <div class="mb-1 timeline-header">
                            <h6 class="mb-0">Create a new project for client</h6>
                            <small class="text-muted">2 Day Ago</small>
                          </div>
                          <p class="mb-0">Add files to new design folder</p>
                        </div>
                      </li>
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-primary"></span>
                        <div class="timeline-event">
                          <div class="mb-1 timeline-header">
                            <h6 class="mb-0">Shared 2 New Project Files</h6>
                            <small class="text-muted">6 Day Ago</small>
                          </div>
                          <p class="mb-2">
                            Sent by Mollie Dixon
                            <img
                              src="../../assets/img/avatars/4.png"
                              class="rounded-circle ms-3"
                              alt="avatar"
                              height="20"
                              width="20" />
                          </p>
                          <div class="flex-wrap gap-2 d-flex">
                            <a href="javascript:void(0)" class="me-3">
                              <img
                                src="../../assets/img/icons/misc/pdf.png"
                                alt="Document image"
                                width="20"
                                class="me-2" />
                              <span class="h6">App Guidelines</span>
                            </a>
                            <a href="javascript:void(0)">
                              <img
                                src="../../assets/img/icons/misc/doc.png"
                                alt="Excel image"
                                width="20"
                                class="me-2" />
                              <span class="h6">Testing Results</span>
                            </a>
                          </div>
                        </div>
                      </li>
                      <li class="timeline-item timeline-item-transparent">
                        <span class="timeline-point timeline-point-success"></span>
                        <div class="pb-0 timeline-event">
                          <div class="mb-1 timeline-header">
                            <h6 class="mb-0">Project status updated</h6>
                            <small class="text-muted">10 Day Ago</small>
                          </div>
                          <p class="mb-0">Woocommerce iOS App Completed</p>
                        </div>
                      </li>
                      <li class="timeline-end-indicator">
                        <i class="bx bx-check-circle"></i>
                      </li>
                    </ul>
                  </div>
                </div>
                <!--/ Activity Timeline -->
                <div class="row">
                  <!-- Connections -->
                  <div class="col-lg-12 col-xl-6">
                    <div class="mb-4 card card-action">
                      <div class="card-header align-items-center">
                        <h5 class="mb-0 card-action-title">Connections</h5>
                        <div class="card-action-element btn-pinned">
                          <div class="dropdown">
                            <button
                              type="button"
                              class="p-0 btn dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="javascript:void(0);">Share connections</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                              <li>
                                <hr class="dropdown-divider" />
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="mb-0 list-unstyled">
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img src="../../assets/img/avatars/2.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Cecilia Payne</h6>
                                  <small class="text-muted">45 Connections</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="p-1 btn btn-label-primary btn-sm"><i class="bx bx-user"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img src="../../assets/img/avatars/3.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Curtis Fletcher</h6>
                                  <small class="text-muted">1.32k Connections</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="p-1 btn btn-primary btn-sm"><i class="bx bx-user"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img src="../../assets/img/avatars/10.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Alice Stone</h6>
                                  <small class="text-muted">125 Connections</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="p-1 btn btn-primary btn-sm"><i class="bx bx-user"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img src="../../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Darrell Barnes</h6>
                                  <small class="text-muted">456 Connections</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="p-1 btn btn-label-primary btn-sm"><i class="bx bx-user"></i></button>
                              </div>
                            </div>
                          </li>

                          <li class="mb-3">
                            <div class="d-flex align-items-start">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img src="../../assets/img/avatars/12.png" alt="Avatar" class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Eugenia Moore</h6>
                                  <small class="text-muted">1.2k Connections</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <button class="p-1 btn btn-label-primary btn-sm"><i class="bx bx-user"></i></button>
                              </div>
                            </div>
                          </li>
                          <li class="text-center">
                            <a href="javascript:;">View all connections</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Connections -->
                  <!-- Teams -->
                  <div class="col-lg-12 col-xl-6">
                    <div class="mb-4 card card-action">
                      <div class="card-header align-items-center">
                        <h5 class="mb-0 card-action-title">Teams</h5>
                        <div class="card-action-element btn-pinned">
                          <div class="dropdown">
                            <button
                              type="button"
                              class="p-0 btn dropdown-toggle hide-arrow"
                              data-bs-toggle="dropdown"
                              aria-expanded="false">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                              <li><a class="dropdown-item" href="javascript:void(0);">Share teams</a></li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Suggest edits</a></li>
                              <li>
                                <hr class="dropdown-divider" />
                              </li>
                              <li><a class="dropdown-item" href="javascript:void(0);">Report bug</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="card-body">
                        <ul class="mb-0 list-unstyled">
                          <li class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img
                                    src="../../assets/img/icons/brands/react-label.png"
                                    alt="Avatar"
                                    class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">React Developers</h6>
                                  <small class="text-muted">72 Members</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img
                                    src="../../assets/img/icons/brands/support-label.png"
                                    alt="Avatar"
                                    class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Support Team</h6>
                                  <small class="text-muted">122 Members</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <a href="javascript:;"><span class="badge bg-label-primary">Support</span></a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img
                                    src="../../assets/img/icons/brands/figma-label.png"
                                    alt="Avatar"
                                    class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">UI Designers</h6>
                                  <small class="text-muted">7 Members</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <a href="javascript:;"><span class="badge bg-label-info">Designer</span></a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img
                                    src="../../assets/img/icons/brands/vue-label.png"
                                    alt="Avatar"
                                    class="rounded-circle" />
                                </div>
                                <div class="me-2">
                                  <h6 class="mb-0">Vue.js Developers</h6>
                                  <small class="text-muted">289 Members</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <a href="javascript:;"><span class="badge bg-label-danger">Developer</span></a>
                              </div>
                            </div>
                          </li>
                          <li class="mb-3">
                            <div class="d-flex align-items-center">
                              <div class="d-flex align-items-start">
                                <div class="avatar me-3">
                                  <img
                                    src="../../assets/img/icons/brands/twitter-label.png"
                                    alt="Avatar"
                                    class="rounded-circle" />
                                </div>
                                <div class="me-w">
                                  <h6 class="mb-0">Digital Marketing</h6>
                                  <small class="text-muted">24 Members</small>
                                </div>
                              </div>
                              <div class="ms-auto">
                                <a href="javascript:;"><span class="badge bg-label-secondary">Marketing</span></a>
                              </div>
                            </div>
                          </li>
                          <li class="text-center">
                            <a href="javascript:;">View all teams</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!--/ Teams -->
                </div>

              </div>
            </div>
            <!--/ User Profile Content -->
          </div>


</x-layout>

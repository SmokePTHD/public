<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="pt-PT" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Clinica Rio Este | Stock</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/favicons/favicon.ico">
    <link rel="manifest" href="../assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="../assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="../assets/js/config.js"></script>
    <script src="../vendors/simplebar/simplebar.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="../../vendors/simplebar/simplebar.min.css" rel="stylesheet">
    <link href="../assets/css/theme.css" rel="stylesheet" id="style-default">
    <link href="../assets/css/user.min.css" rel="stylesheet" id="user-style-default">

  </head>

  <body>
    <main class="main" id="top">
      <div class="container" data-layout="container">
        <div class="row gx-3">
            <div class="col-xxl-10 col-xl-9">
              <div class="card" id="ticketsTable" data-list='{"valueNames":["client","subject","status","priority","agent"],"page":11,"pagination":true,"fallback":"tickets-table-fallback"}'>
                <div class="card-header border-bottom border-200 px-0">
                  <div class="d-lg-flex justify-content-between">
                    <div class="row flex-between-center gy-2 px-x1">
                      <div class="col-auto pe-0">
                        <h6 class="mb-0">All tickets</h6>
                      </div>
                      <div class="col-auto">
                        <form>
                          <div class="input-group input-search-width">
                            <input class="form-control form-control-sm shadow-none search" type="search" placeholder="Search  by name" aria-label="search" />
                            <button class="btn btn-sm btn-outline-secondary border-300 hover-border-secondary"><span class="fa fa-search fs--1"></span></button>
                          </div>
                        </form>
                      </div>
                    </div>
                    <div class="border-bottom border-200 my-3"></div>
                    <div class="d-flex align-items-center justify-content-between justify-content-lg-end px-x1">
                      <button class="btn btn-sm btn-falcon-default d-xl-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#ticketOffcanvas" aria-controls="ticketOffcanvas"><span class="fas fa-filter" data-fa-transform="shrink-4 down-1"></span><span class="ms-1 d-none d-sm-inline-block">Filter</span></button>
                      <div class="bg-300 mx-3 d-none d-lg-block d-xl-none" style="width:1px; height:29px"></div>
                      <div class="d-none" id="table-ticket-actions">
                        <div class="d-flex">
                          <select class="form-select form-select-sm" aria-label="Bulk actions">
                            <option selected="">Bulk actions</option>
                            <option value="Refund">Refund</option>
                            <option value="Delete">Delete</option>
                            <option value="Archive">Archive</option>
                          </select>
                          <button class="btn btn-falcon-default btn-sm ms-2" type="button">Apply</button>
                        </div>
                      </div>
                      <div class="d-flex align-items-center" id="table-ticket-replace-element">
                        <div class="dropdown">
                          <button class="btn btn-sm btn-falcon-default dropdown-toggle dropdown-caret-none" type="button" id="ticket-layout" data-bs-toggle="dropdown" data-boundary="window" aria-haspopup="true" aria-expanded="false" data-bs-reference="parent"><span class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block me-1">Table View</span><span class="fas fa-chevron-down" data-fa-transform="shrink-3 down-1"></span></button>
                          <div class="dropdown-menu dropdown-toggle-item dropdown-menu-end border py-2" aria-labelledby="ticket-layout"><a class="dropdown-item active" href="../../app/support-desk/table-view.html">Table View</a><a class="dropdown-item" href="../../app/support-desk/card-view.html">Card View</a></div>
                        </div>
                        <button class="btn btn-falcon-default btn-sm mx-2" type="button"><span class="fas fa-plus" data-fa-transform="shrink-3"></span><span class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">New</span></button>
                        <button class="btn btn-falcon-default btn-sm" type="button"><span class="fas fa-external-link-alt" data-fa-transform="shrink-3"></span><span class="d-none d-sm-inline-block d-xl-none d-xxl-inline-block ms-1">Export</span></button>
                        <div class="dropdown font-sans-serif ms-2">
                          <button class="btn btn-falcon-default text-600 btn-sm dropdown-toggle dropdown-caret-none" type="button" id="preview-dropdown" data-bs-toggle="dropdown" data-boundary="viewport" aria-haspopup="true" aria-expanded="false"><span class="fas fa-ellipsis-h fs--2"></span></button>
                          <div class="dropdown-menu dropdown-menu-end border py-2" aria-labelledby="preview-dropdown"><a class="dropdown-item" href="#!">View</a><a class="dropdown-item" href="#!">Export</a>
                            <div class="dropdown-divider"></div><a class="dropdown-item text-danger" href="#!">Remove</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body p-0">
                  <div class="table-responsive scrollbar">
                    <table class="table table-sm mb-0 fs--1 table-view-tickets">
                      <thead class="text-800 bg-light">
                        <tr>
                          <th class="py-2 fs-0 pe-2" style="width: 28px;">
                            <div class="form-check d-flex align-items-center">
                              <input class="form-check-input" id="checkbox-bulk-table-tickets-select" type="checkbox" data-bulk-select='{"body":"table-ticket-body","actions":"table-ticket-actions","replacedElement":"table-ticket-replace-element"}' />
                            </div>
                          </th>
                          <th class="sort align-middle ps-2" data-sort="client">Client</th>
                          <th class="sort align-middle" data-sort="subject" style="min-width:15.625rem">Subject</th>
                          <th class="sort align-middle" data-sort="status">Status</th>
                          <th class="sort align-middle" data-sort="priority">Priority</th>
                          <th class="sort align-middle text-end" data-sort="agent">Agent</th>
                        </tr>
                      </thead>
                      <tbody class="list" id="table-ticket-body">
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-0" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>EW</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Emma Watson</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Synapse Design #1125</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:100">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#e63757" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Urgent</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-1" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>L</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Luke</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Change of refund my last buy | Order #125631</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-danger false">Overdue</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-2" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Finley</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-warning false">Remaining</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-3" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>PG</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Peter Gill</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-4" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/25-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Freya</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Contact Froms #3264</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-5" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>M</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-6" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>MB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison Banneker</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-7" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/14-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Aar Kay</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Regarding Falcon Theme #3262</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-8" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>FB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Fadil Badr</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">i would like to buy theme #3261</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-9" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Regina Kempt</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Theme info (icons) #3260</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-10" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>C</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Caleb</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Phishing link #3259</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-11" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>FB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Fadil Badr</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">i would like to buy theme #3261</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-12" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Regina Kempt</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Theme info (icons) #3260</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-13" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>C</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Caleb</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Phishing link #3259</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-14" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>EW</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Emma Watson</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Synapse Design #1125</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:100">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#e63757" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Urgent</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-15" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>L</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Luke</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Change of refund my last buy | Order #125631</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-danger false">Overdue</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-16" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Finley</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-warning false">Remaining</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-17" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>PG</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Peter Gill</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-18" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/25-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Freya</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Contact Froms #3264</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:100">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#e63757" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Urgent</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-19" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>M</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-20" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>MB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison Banneker</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-21" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/14-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Aar Kay</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Regarding Falcon Theme #3262</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-22" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>C</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Caleb</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Phishing link #3259</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-23" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>FB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Fadil Badr</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">i would like to buy theme #3261</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-24" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/3-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Regina Kempt</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Theme info (icons) #3260</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-25" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>EW</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Emma Watson</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Synapse Design #1125</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:100">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#e63757" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Urgent</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-26" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>L</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Luke</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Change of refund my last buy | Order #125631</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-danger false">Overdue</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option selected="selected">Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-27" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/14-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Aar Kay</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Regarding Falcon Theme #3262</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-success false">Recent</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-28" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>MB</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison Banneker</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-29" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>M</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Morrison</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:75">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#F68F57" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">High</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-30" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/1-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Finley</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-warning false">Remaining</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-31" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <div class="avatar-name rounded-circle"><span>PG</span></div>
                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Peter Gill</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">I need your help #2256</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-info false">Responded</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:25">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#00D27B" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Low</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option selected="selected">Nowrin</option>
                              <option>Khalid</option>
                            </select>
                          </td>
                        </tr>
                        <tr>
                          <td class="align-middle fs-0 py-3">
                            <div class="form-check mb-0">
                              <input class="form-check-input" type="checkbox" id="table-view-tickets-32" data-bulk-select-row="data-bulk-select-row" />
                            </div>
                          </td>
                          <td class="align-middle client white-space-nowrap pe-3 pe-xxl-4 ps-2">
                            <div class="d-flex align-items-center gap-2 position-relative">
                              <div class="avatar avatar-xl">
                                <img class="rounded-circle" src="../../assets/img/team/25-thumb.png" alt="" />

                              </div>
                              <h6 class="mb-0"><a class="stretched-link text-900" href="../../app/support-desk/contact-details.html">Freya</a></h6>
                            </div>
                          </td>
                          <td class="align-middle subject py-2 pe-4"><a class="fw-semi-bold" href="../../app/support-desk/tickets-preview.html">Contact Froms #3264</a></td>
                          <td class="align-middle status fs-0 pe-4"><small class="badge rounded badge-soft-secondary dark__bg-1000">Closed</small>
                          </td>
                          <td class="align-middle priority pe-4">
                            <div class="d-flex align-items-center gap-2">
                              <div style="--falcon-circle-progress-bar:50">
                                <svg class="circle-progress-svg" width="26" height="26" viewBox="0 0 120 120">
                                  <circle class="progress-bar-rail" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke-width="12"></circle>
                                  <circle class="progress-bar-top" cx="60" cy="60" r="54" fill="none" stroke-linecap="round" stroke="#2A7BE4" stroke-width="12"></circle>
                                </svg>
                              </div>
                              <h6 class="mb-0 text-700">Medium</h6>
                            </div>
                          </td>
                          <td class="align-middle agent">
                            <select class="form-select form-select-sm w-auto ms-auto" aria-label="agents actions">
                              <option>Select Agent</option>
                              <option>Anindya</option>
                              <option>Nowrin</option>
                              <option selected="selected">Khalid</option>
                            </select>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    <div class="text-center d-none" id="tickets-table-fallback">
                      <p class="fw-bold fs-1 mt-3">No ticket found</p>
                    </div>
                  </div>
                </div>
                <div class="card-footer">
                  <div class="d-flex justify-content-center">
                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous" data-list-pagination="prev"><span class="fas fa-chevron-left"></span></button>
                    <ul class="pagination mb-0"></ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next" data-list-pagination="next"><span class="fas fa-chevron-right"></span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-2 col-xl-3">
              <div class="offcanvas offcanvas-end offcanvas-filter-sidebar border-0 dark__bg-card-dark h-auto rounded-xl-3" tabindex="-1" id="ticketOffcanvas" aria-labelledby="ticketOffcanvasLabel">
                <div class="offcanvas-header d-flex flex-between-center d-xl-none bg-light">
                  <h6 class="fs-0 mb-0 fw-semi-bold">Filter</h6>
                  <button class="btn-close text-reset d-xl-none shadow-none" id="ticketOffcanvasLabel" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="card scrollbar shadow-none shadow-show-xl">
                  <div class="card-header bg-light d-none d-xl-block">
                    <h6 class="mb-0">Filter</h6>
                  </div>
                  <div class="card-body">
                    <form>
                      <div class="mb-2 mt-n2">
                        <label class="mb-1">Priority</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Urgent</option>
                          <option>High</option>
                          <option>Medium</option>
                          <option>Low</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Source</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Email</option>
                          <option>Phone</option>
                          <option>Forum</option>
                          <option selected="selected">Facebook</option>
                          <option>Twitter</option>
                          <option>Chat</option>
                          <option>Whatsapp</option>
                          <option>Portal</option>
                          <option>Bots</option>
                          <option>External Email</option>
                          <option>Ecommerce</option>
                          <option>Feedback Widget</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Status</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Recent</option>
                          <option>Overdue</option>
                          <option>Closed</option>
                          <option>Remaining</option>
                          <option>Responded</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Group</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>My Group</option>
                          <option>Billing</option>
                          <option>Customer Support</option>
                          <option>Enhancement</option>
                          <option>Unassigned</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Agent</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Anindya</option>
                          <option>Nowrin</option>
                          <option>Khalid</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Type</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Question</option>
                          <option>Incident</option>
                          <option>Problem</option>
                          <option>Feature Request</option>
                          <option>Refund</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Category</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>General Issue</option>
                          <option>Maintenance</option>
                          <option>Engineering</option>
                          <option>Accounts</option>
                          <option>Feedback</option>
                          <option selected="selected">Support</option>
                          <option>Test Helpdesk</option>
                        </select>
                      </div>
                      <div class="mb-2">
                        <label class="mb-1 mt-2">Tags</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Sales</option>
                          <option>Request</option>
                          <option>Complaint</option>
                          <option>Feedback</option>
                          <option>Support</option>
                        </select>
                      </div>
                      <div>
                        <label class="mb-1 mt-2">Subscription</label>
                        <select class="form-select form-select-sm">
                          <option>None</option>
                          <option>Active</option>
                          <option>Inactive</option>
                          <option>Expired</option>
                          <option>Pending</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="card-footer border-top border-200 py-x1">
                    <button class="btn btn-primary w-100">Update</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <footer class="footer">
            <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">Thank you for creating with Falcon <span class="d-none d-sm-inline-block">| </span><br class="d-sm-none" /> 2022 &copy; <a href="https://themewagon.com">Themewagon</a></p>
              </div>
              <div class="col-12 col-sm-auto text-center">
                <p class="mb-0 text-600">v3.14.0</p>
              </div>
            </div>
          </footer>
        </div>
        <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog" aria-labelledby="authentication-modal-label" aria-hidden="true">
          <div class="modal-dialog mt-6" role="document">
            <div class="modal-content border-0">
              <div class="modal-header px-5 position-relative modal-shape-header bg-shape">
                <div class="position-relative z-index-1 light">
                  <h4 class="mb-0 text-white" id="authentication-modal-label">Register</h4>
                  <p class="fs--1 mb-0 text-white">Please create your free Falcon account</p>
                </div>
                <button class="btn-close btn-close-white position-absolute top-0 end-0 mt-2 me-2" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body py-4 px-5">
                <form>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-name">Name</label>
                    <input class="form-control" type="text" autocomplete="on" id="modal-auth-name" />
                  </div>
                  <div class="mb-3">
                    <label class="form-label" for="modal-auth-email">Email address</label>
                    <input class="form-control" type="email" autocomplete="on" id="modal-auth-email" />
                  </div>
                  <div class="row gx-2">
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-password">Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-password" />
                    </div>
                    <div class="mb-3 col-sm-6">
                      <label class="form-label" for="modal-auth-confirm-password">Confirm Password</label>
                      <input class="form-control" type="password" autocomplete="on" id="modal-auth-confirm-password" />
                    </div>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="modal-auth-register-checkbox" />
                    <label class="form-label" for="modal-auth-register-checkbox">I accept the <a href="#!">terms </a>and <a href="#!">privacy policy</a></label>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary d-block w-100 mt-3" type="submit" name="submit">Register</button>
                  </div>
                </form>
                <div class="position-relative mt-5">
                  <hr />
                  <div class="divider-content-center">or register with</div>
                </div>
                <div class="row g-2 mt-2">
                  <div class="col-sm-6"><a class="btn btn-outline-google-plus btn-sm d-block w-100" href="#"><span class="fab fa-google-plus-g me-2" data-fa-transform="grow-8"></span> google</a></div>
                  <div class="col-sm-6"><a class="btn btn-outline-facebook btn-sm d-block w-100" href="#"><span class="fab fa-facebook-square me-2" data-fa-transform="grow-8"></span> facebook</a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>



    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="../vendors/popper/popper.min.js"></script>
    <script src="../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../vendors/anchorjs/anchor.min.js"></script>
    <script src="../vendors/is/is.min.js"></script>
    <script src="../vendors/echarts/echarts.min.js"></script>
    <script src="../vendors/fontawesome/all.min.js"></script>
    <script src="../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../vendors/list.js/list.min.js"></script>
    <script src="../assets/js/theme.js"></script>
    <script src="../assets/js/inactivity-lock"></script>
    
  </body>
</html>
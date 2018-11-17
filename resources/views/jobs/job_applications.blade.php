@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Job Applications</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-defualt">
                        <img src="{{asset('public/dist/img/icon-emergency.png')}}" alt="">
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>Emergency Helpline <a href="#" class="text-grey float-right"><small><i class="far fa-edit"></i> Edit</small></a>  <a href="#" class="text-grey float-right"><i class="far fa-save"></i> Update</small></a></h4>
                        </div>
                        <div class="card-body mt-2">
                            +966 11 236 6788
                            <input type="text" class="form-control mb-3" placeholder="Please enter a valid number">
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Main Content -->
            <div class="main-content">
                    <section class="section">
                      <div class="section-header">
                        <h1>Section Name</h1>
                        <div class="section-header-breadcrumb">
                          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                          <div class="breadcrumb-item"><a href="#">Forms</a></div>
                          <div class="breadcrumb-item">Editor</div>
                        </div>
                      </div>
            
                      <div class="section-body">
                        <h2 class="section-title">Page Name</h2>
                        <p class="section-lead">WYSIWYG editor and code editor.</p>
            
                        <div class="row">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-header">
                                <h4>Post Your Content</h4>
                              </div>
                              <div class="card-body">                               
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content Post for</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="arabic" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="arabic">Arabic</label>
                                        </div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="English" name="customRadio" class="custom-control-input">
                                            <label class="custom-control-label" for="English">English</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                  <div class="col-sm-12 col-md-7">
                                    <input type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                  <div class="col-sm-12 col-md-7">
                                    <select class="form-control selectric">
                                      <option>Tech</option>
                                      <option>News</option>
                                      <option>Political</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                  <div class="col-sm-12 col-md-7">
                                    <textarea class="summernote"></textarea>
                                  </div>
                                </div>
                                <div class="form-group row mb-4">
                                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                  <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Publish</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
            
                        
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Advanced Table</h4>
                    <div class="card-header-form">
                      <form>
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search">
                          <div class="input-group-btn">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                          <th class="p-2 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                              <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                            </div>
                          </th>
                          <th>Task Name</th>
                          <th>Progress</th>
                          <th>Members</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                              <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Create a mobile app</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" data-width="100"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="dist/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Wildan Ahdian">
                          </td>
                          <td>2018-01-20</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td>
                              <a href="#" class="btn btn-sm text-success"><i class="far fa-eye"></i></a>
                              <a href="#" class="btn btn-sm text-secondary"><i class="far fa-edit"></i></a>
                              <a href=""  class="btn btn-sm text-danger"><i class="far fa-trash-alt"></i></a>
                        </td>
                        </tr>
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                              <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Redesign homepage</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="0%">
                              <div class="progress-bar" data-width="0"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="dist/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Nur Alpiana">
                            <img alt="image" src="dist/img/avatar/avatar-3.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hariono Yusup">
                            <img alt="image" src="dist/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Bagus Dwi Cahya">
                          </td>
                          <td>2018-04-10</td>
                          <td><div class="badge badge-info">Todo</div></td>
                          <td>
                                <a href="#" class="btn btn-sm text-success"><i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-sm text-secondary"><i class="far fa-edit"></i></a>
                                <a href=""  class="btn btn-sm text-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                              <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Backup database</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="70%">
                              <div class="progress-bar bg-warning" data-width="70"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="dist/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                            <img alt="image" src="dist/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Hasan Basri">
                          </td>
                          <td>2018-01-29</td>
                          <td><div class="badge badge-warning">In Progress</div></td>
                          <td>
                                <a href="#" class="btn btn-sm text-success"><i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-sm text-secondary"><i class="far fa-edit"></i></a>
                                <a href=""  class="btn btn-sm text-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td class="p-0 text-center">
                            <div class="custom-checkbox custom-control">
                              <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                              <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                            </div>
                          </td>
                          <td>Input data</td>
                          <td class="align-middle">
                            <div class="progress" data-height="4" data-toggle="tooltip" title="100%">
                              <div class="progress-bar bg-success" data-width="100"></div>
                            </div>
                          </td>
                          <td>
                            <img alt="image" src="dist/img/avatar/avatar-2.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Rizal Fakhri">
                            <img alt="image" src="dist/img/avatar/avatar-5.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Isnap Kiswandi">
                            <img alt="image" src="dist/img/avatar/avatar-4.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Yudi Nawawi">
                            <img alt="image" src="dist/img/avatar/avatar-1.png" class="rounded-circle" width="35" data-toggle="tooltip" title="Khaerul Anwar">
                          </td>
                          <td>2018-01-16</td>
                          <td><div class="badge badge-success">Completed</div></td>
                          <td>
                                <a href="#" class="btn btn-sm text-success"><i class="far fa-eye"></i></a>
                                <a href="#" class="btn btn-sm text-secondary"><i class="far fa-edit"></i></a>
                                <a href=""  class="btn btn-sm text-danger"><i class="far fa-trash-alt"></i></a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                        
                      </div>

                      <div class="section-body">
                            <h2 class="section-title">This is Example Page</h2>
                            <p class="section-lead">This page is just an example for you to create your own page.</p>
                            <div class="card">
                              <div class="card-header">
                                <h4>Example Card</h4>
                              </div>
                              <div class="card-body">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                              </div>
                              <div class="card-footer bg-whitesmoke">
                                This is card footer
                              </div>
                            </div>
                          </div>
                    </section>
            </div>
    </section>
</div>
@include('admin.templates.footer')
        

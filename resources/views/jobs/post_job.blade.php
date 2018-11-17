@include('admin.templates.header')
@include('admin.templates.side_manu')   
<!-- Main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Post A New Job</h1>
                <div class="section-header-breadcrumb">
                      <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                      <div class="breadcrumb-item"><a href="#">Forms</a></div>
                      <div class="breadcrumb-item">Editor</div>
                </div>
        </div>
        <div class="section-body">
                <div class="card">
                    <div class="card-header">
                        <h4>Job Posting Form</h4>
                    </div>
                    <div class="card-body">
                        <form class="w-100" action = "{{url('savepostedjob')}}" method = "post"files='false' enctype="multipart/form-data">
                            @csrf
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
                                <input name = "job_title"type="text" class="form-control">
                                    @if(!empty($errors->has('job_title')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('job_title') }}</span>
                                            </div>
                                        </div>
                                    @endif 
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                <div class="col-sm-12 col-md-7">
                                    <select name = "category" id = department_id class="form-control selectric">
                                    </select>
                                    @if(!empty($errors->has('category')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('category') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                  </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                <div class="col-sm-12 col-md-7">
                                    <textarea name = "job_desc" class="summernote"></textarea>
                                    @if(!empty($errors->has('job_desc')))
                                        <div class="row col-lg-12">
                                            <div class="alert alert-danger">
                                                <span>{{ $errors->first('job_desc') }}</span>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-4">
                                <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                <div class="col-sm-12 col-md-7">
                                    <button class="btn btn-primary">Publish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-whitesmoke">
                        This is card footer
                    </div>
                </div>
        </div>
    </section>
</div>
@include('admin.templates.footer')
        

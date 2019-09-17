<?php echo View::make('includes/adminHeader'); ?>

<div class="content-wrapper">
  <section class="content">
  @foreach($files as $file)
    <!-- /.row -->
    <div class="row">
      <div class="col-xs-12">
                <div class="col-md-12">
                  <div class="box box-widget widget-user">
                    <!-- Add the bg color to the header using any of the bg-* classes -->
                    <div class="widget-user-header bg-blue-active">
                      <h3 class="widget-user-username">{{ $formRecruit->name }}</h3>
                      {{-- <h5 class="widget-user-desc">Laki-laki</h5> --}}
                    </div>
                    <div class="widget-user-image">
                      <img class="img-circle" src="{{URL::to('image/'.$file->pas)}}" alt="User Avatar">
                    </div>
                    <div class="box-footer">                      
                      <div class="row" style="margin-top: 30px">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->nik }}</h5>
                            <span class="description-text">NIK</span>
                          </div>
                          <!-- /.description-block -->
                        </div>                      
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->nationality }}</h5>
                            <span class="description-text">Asal Daerah</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->jurusan }}</h5>
                            <span class="description-text">JURUSAN</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>

                    <div class="box-footer">
                      <div class="row" style="margin-top: 30px">
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->pendidikan }}</h5>
                            <span class="description-text">PENDIDIKAN</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 border-right">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->born_date }}</h5>
                            <span class="description-text">TAHUN, TANGGAL LAHIR</span>
                          </div>
                          <!-- /.description-block -->
                        </div>                        
                        <!-- /.col -->
                        <div class="col-sm-4">
                          <div class="description-block">
                            <h5 class="description-header">{{ $formRecruit->created_at }}</h5>
                            <span class="description-text">Tanggal Pendaftaran</span>
                          </div>
                          <!-- /.description-block -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                  
                    <!-- Files -->
                    <div class="box box-default collapsed-box">
                      <div class="box-header with-border">
                        <h3 class="box-title">Files</h3>

                        <div class="box-tools pull-right">
                          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i>
                          </button>
                        </div>
                        <!-- /.box-tools -->
                      </div>
                       <div class="table-responsive mailbox-messages box-body">
                          <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>PAS FOTO</th>
                                    <th>CV</th>
                                    <th>KTP</th>
                                    <th>PROPOSAL</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                <td>{{ $file->pas }}
                                    <a href="{{ route('file.download', $file->id) }}" title="Download softfile">
                                            <i class="fa fa-download fa-fw"></i>
                                        </a> 
                                    </td>
                                    
                                    <td>{{ $file->cv }}
                                    <a href="{{ route('file.downloadcv', $file->id) }}" title="Download softfile">
                                            <i class="fa fa-download fa-fw"></i>
                                        </a> 
                                    </td>
                                    <td>{{ $file->ktp }}
                                    <a href="{{ route('file.downloadktp', $file->id) }}" title="Download softfile">
                                            <i class="fa fa-download fa-fw"></i>
                                        </a> 
                                    </td>
                                    <td>{{ $file->others }}
                                    @if ($file->others != 'KOSONG')
                                    <a href="{{ route('file.downloadprop', $file->id) }}" title="Download softfile">
                                            <i class="fa fa-download fa-fw"></i>
                                    </a> 
                                    @endif
                                    </td>
                                    <td>{{ $file->created_at->diffForHumans() }}</td>
                                    <td>
                                        <!-- <a href="{{ Storage::url('/image'.$file->pas) }}" title="View file {{ $file->pas }}">
                                            <i class="fa fa-eye"></i>
                                        </a>  -->
                                        <!-- <a href="{{ route('file.download', $file->id) }}" title="Download softfile">
                                            <i class="fa fa-download fa-fw"></i>
                                        </a>  -->
                                    </td> 
                                </tr>
                                
                            </tbody>
                          </table>
                          <br>
                          
                          <div class="table-responsive mailbox-messages box-body"> 
                              <h5><b>Alamat Tempat Tinggal</b></h5>
                              <p>{{ $formRecruit->address }}</p>
                          </div>
                            
                       </div>
                    </div>

                </div>
              
            </div>
        </div>
      </div>
      @endforeach
    </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>


<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
         <!-- /.row -->
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title"><b>E-Recruitment Program Table </b></h3>
                <form action="/admin-index/cari" method="GET" class="cari">
                  <input type="text" name="cari" class="carii" placeholder="Cari" value="{{ old('cari') }}">
                  @method('cari')
                  <input type="submit" class="carii" value="CARI">
                </form>
              </div>
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>UMUR</th>
                    <th>PENDIDIKAN</th>
                    <th>SEKOLAH</th>
                    <th>NILAI</th>
                    <th>JOB</th>
                    <th>JENIS</th>
                    <th>JURUSAN</th>
                  </tr>
                  @foreach ($formRecruit as $f_recruit)
                      <tr>
                        <td>{{ $f_recruit->id }}</td>
                        <td>{{ $f_recruit->name }}</td>
                        <td>{{date_diff(date_create(),date_create($f_recruit->born_date))->y}} th,
                        {{date_diff(date_create(),date_create($f_recruit->born_date))->m}} bln,
                        {{date_diff(date_create(),date_create($f_recruit->born_date))->d}} hari</td>
                        <td>{{ $f_recruit->pendidikan }}</td>
                        <td>{{ $f_recruit->sekolah }}</td>
                        <td>{{ $f_recruit->nilai }}</td>
                        <td>{{ $f_recruit->job }}</td>
                        <td>{{ $f_recruit->jenis }}</td>
                        <td>{{ $f_recruit->jurusan }}</td>

                        <td>
                          <form method="get" action="{{ route('admin.detail', ['formRecruit' => $f_recruit->id]) }}">
                            <button type="submit" class="btn btn-success btn-sm">Detail</button>
                          </form>
                        </td>

                        <td>
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-danger" @click="changeId({{ $f_recruit->id }})">Delete</button>
                        </td>

                      </tr>
                    @endforeach
                    </table>

                      {{-- Modal Delete --}}
                      <div class="modal modal-danger fade" id="modal-danger">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title">Delete Data</h4>
                            </div>
                            <div class="modal-body">
                            <p>This will be erased the #@{{ id }} data. Are you sure to proceed?</p>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                              <form method="post" :action="urlToDelete">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                              </form>
                            </div>
                          </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->

              </div>
              <!-- /.box-body -->
            </div>

          </div>
        </div>
        <!--EXPORT EXCEL-->
        <form action="/admin-index/excel" method="GET" class="excel">
          <input type="submit" class="excel" value="Export Excel">
        </form> <br>
        <!--EXPORT EXCEL-->
        <form action="/admin-index/pdf" method="GET" class="pdf">
          <input type="submit" class="pdf" value="Export pdf">
        </form>
        {{ $formRecruit->links() }}


    </section>
</div>


<script src="https://cdn.jsdelivr.net/npm/vue"></script>

<script>
  var app = new Vue({
    el: '#dashboard',
    data: {
      id: 0,
    },
    computed: {
      urlToDelete() {
        return '{{ url('') }}/delete/' + this.id
      },
    },
    methods: {
      changeId(id) {
        this.id = id
      },
    },
  })
</script>

<?php echo View::make('includes/adminFooter'); ?>

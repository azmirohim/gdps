<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
         <!-- /.row -->
         @if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach ($errors->all() as $error)
					{{ $error }} <br/>
					@endforeach
				</div>
				@endif
        @if (session('success'))
					<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					{!! session('success') !!}
					</div>
					@endif
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h1 class="box-title"><b>DAFTAR VACANCY </b></h1><br/> 
                <a href='tambah' style="color:black;">Mau nambah ?</a>          
              </div>              
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>         
                    <th>JUDUL</th>
                    <th>JENIS</th>
                    <th>VALID DATE</th>
                    <th> SISA</th>
                    <th>OPSI</th>
                  </tr>   

                  @foreach ($vacancy as $va)
                    <tr>
                      <td>{{ $va->judul }}</td>
                      <td>{{ $va->jenis }}</td> 
                      <td>
                      @if(date_create() > date_create($va->tanggal))
				              <div style="color:red;">	
                      <p>{{ $va->tanggal }}</p>
				              </div>
                      @else
                      <p>{{ $va->tanggal }}</p>
			  	            @endif
                      </td>
                      <td>
                        <p> Selisih tahun {{date_diff(date_create(),date_create($va->tanggal))->y}} tahun
                      </td>
                      <td>
                      @if(date_create() > date_create($va->tanggal))
                      <p>Sudah melebihi valid date</p>
                      @else
                      <p>Sisa {{date_diff(date_create(),date_create($va->tanggal))->days}} hari </p>
                      @endif
                      </td>
                      <td> <a href="/admin-vacancy/edit/{{ $va->id }}">EDIT</a> 
                            <a> | </a>
                       <a href="/admin-vacancy/hapus/{{ $va->id }}">HAPUS</a> </td>                        
                    </tr>
                  @endforeach
                    </table>
              </div>                   
            </div>
          </div>
        </div>
    </section>
</div>
<!-- Modal -->
<div id="tambah" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">             
                  <button type="button" class="close" data-dismiss="modal">&times;</button>       
                  <h2 class="headl"> FORM LOWONGAN </h2>
                </div>                
                <div class="modal-body">
                    <div class="">
                      <form action="/submit-vacancy" method="POST">
                      {{csrf_field() }}
                        <div class="lowong">
                          <input type ="text" class="bar" placeholder="JUDUL" name="judul"><br/>
                          <input type ="date" class="bar" placeholder="Valid Date" name="date"><br/>
                          <select class="bar" name="jenis" id="name" ><br/>
							              <option value="" disabled selected hidden>PILIH JENIS VACANCY</option>
							              <option value="JOB">JOB</option>
							              <option value="INTERNSHIP">INTERNSHIP</option>
                            <option value="NONE">NONE</option>
						              </select>
                          <textarea class="boxx" placeholder="Deskripsi" name="deskripsi"></textarea>
                          <textarea class="boxx" placeholder="Recuirement" name="requirement"></textarea>          
                        </div>
                        <div class="lowong">
                          <button class="sub" type="submitvac" id="vacancy">Submit</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div> 
    <!-- COBA MODAL --> 


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
  var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
</script>

<?php echo View::make('includes/adminFooter'); ?>

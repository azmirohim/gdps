<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
         <!-- /.row -->
        <h2> TAMBAH VACANCY </h2>
        <a href="/admin-vacancy"> Kembali </a>
        <br/>

        <form action="/submit-vacancy" method="POST">
                      {{csrf_field() }}
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
                        <div class="lowong">
                          <input id="judul" type="text" class="bar" name="judul" value="{{ old('judul') }}" placeholder="JUDUL" required>    
                          <input type="text" onblur="(this.type='text')" onfocus="(this.type='date')" class="bar" name="tanggal" value="{{ old('tanggal') }}"  placeholder="Valid Date" required><br/>
                          <select class="bar" name="jenis" id="name" value="{{ old('jenis') }}" required><br/>
							              <option value="" disabled selected hidden>PILIH JENIS VACANCY</option>
							              <option value="JOB">JOB</option>
							              <option value="INTERNSHIP">INTERNSHIP</option>
						              </select>
                        <br/>
                          <textarea class="boxx" placeholder="Deskripsi" name="deskripsi" value="{{ old('deskripsi') }}" required></textarea><br/>
                          <textarea class="boxx" placeholder="Requirement" name="requirement" value="{{ old('requirement') }}" required></textarea>          
                        </div>
                        <div class="lowong">
                          <button class="sub" type="submitvac" id="vacancy">Submit</button>
                        </div>
                    </form>
  </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>

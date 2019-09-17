<?php echo View::make('includes/adminHeader'); ?>
<div class="content-wrapper" id="dashboard">
  <section class="content">
         <!-- /.row -->
        <h2> EDIT VACANCY </h2>
        <a href="/admin-vacancy"> Kembali </a>
        <br/>

        @foreach($vacancyy as $edit )
        <form action="/admin-vacancy/update" method="post">
          {{ csrf_field() }}
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
          <input type="hidden" name="id" value="{{ $edit->id }}"><br/>
          <p>JUDUL = <input type="text" class="bar" name="judul" value="{{ $edit->judul }}" required><br/></p>
          <p>VALID DATE  = <input type="date" class="bar" name="tanggal" value="{{ $edit->tanggal }}" required><br/></p>
          <p>JENIS       = <select class="bar" name="jenis" id="name" required><br/>
							              <option value="{{ $edit->jenis }}">{{ $edit->jenis }}</option>
							              <option value="JOB">JOB</option>
							              <option value="INTERNSHIP">INTERNSHIP</option>
						              </select><br/></p>
          DESKRIPSI   = <br/>
          <textarea class="boxx" name="deskripsi" required>{{ $edit->deskripsi }}</textarea><br/>
          REQUIREMENT = <br/>
          <textarea class="boxx" name="requirement" wrap="hard" required>{{ $edit->requirement }}</textarea><br/>
          <input class="sub" type="submit" value="Simpan Data"><br/>
        </form>
        @endforeach
  </section>
</div>
<?php echo View::make('includes/adminFooter'); ?>

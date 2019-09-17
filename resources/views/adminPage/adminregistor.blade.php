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
                <h1 class="box-title"><b>DAFTAR ADMIN </b></h1><br/> 
                <a href='register' style="color:black;">Mau nambah ?</a>          
              </div>              
              <!-- /.box-header -->
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>         
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>OPSI</th>
                  </tr>   

                  @foreach ($admin as $ad)
                    <tr>
                      <td>{{ $ad->name }}</td>
                      <td>{{ $ad->email }}</td>
                      <td> <a href="admin-register/edit/{{$ad->id}}">EDIT</a> 
                            <a> | </a>
                       <a href="admin-register/hapus/{{$ad->id}}">HAPUS</a> 
                    </td>                        
                    </tr>
                  @endforeach
                    </table>
              </div>                   
            </div>
          </div>
        </div>
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
  var textarea = document.querySelector('textarea');

textarea.addEventListener('keydown', autosize);
             
function autosize(){
  var el = this;
  setTimeout(function(){
    el.style.cssText = 'height:auto; padding:0';
</script>

<?php echo View::make('includes/adminFooter'); ?>

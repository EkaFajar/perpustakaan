@extends('template')

@section('judul')
Dashboard
@stop

@section('ac-dash')
active
@stop

@section('subjudul')
The future is not where my dream is
@stop

@section('content')
<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-green">
      <span class="info-box-icon"><i class="fa fa-rocket"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ $pinjam_banyak[0]->nama }}</span>
        <span class="info-box-number">{{ $pinjam_banyak[0]->jumlah }} Buku</span>
        <div class="progress">
          <div class="progress-bar" style="width:{{ $pinjam_banyak[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description">
            Terbanyak
            </span>
      </div>
      <!-- /.info-box-content -->
    </div> 
      <!-- /.info-box  -->
  </div> 

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-purple">
      <span class="info-box-icon"><i class="fa fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Anggota</span>
        <span class="info-box-number">{{ $anggota[0]->jumlah }} Anggota</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $anggota[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description">
              Anggota Saat Ini
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-yellow">
      <span class="info-box-icon"><i class="fa fa-tasks"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Jumlah Peminjam</span>
        <span class="info-box-number">{{ $jmlh_pinjam[0]->jumlah }} <i class="fa fa-user"></i></span>

        <div class="progress">
          <div class="progress-bar" style="width: {{ $jmlh_pinjam[0]->jumlah }}%"></div>
        </div>
            <span class="progress-description" id="bulan">
              
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

  <div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box bg-blue">
      <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">{{ $p_bulan[0]->nama }}</span>
        <span class="info-box-number">{{ $p_bulan[0]->jumlah }}</span>

        <div class="progress">
          <div class="progress-bar" style="width: {{$p_bulan[0]->jumlah}}%"></div>
        </div>
            <span class="progress-description" >
              pinjam banyak/bulan
            </span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>

 <div class="box-header with-border">
              <h3 class="box-title">Latest Orders</h3>

              <div class="box-tools pull-right">
                
              </div>
            </div>

            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Item</th>
                    <th>Status</th>
                    
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>Asus ROG Phone</td>
                    <td><span class="label label-success">Shipped</span></td>
                    
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Samsung Smart TV</td>
                    <td><span class="label label-warning">Pending</span></td>
                   
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone 6 Plus</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>Asus ROG GL553VD</td>
                    <td><span class="label label-info">Processing</span></td>
                   
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR1848</a></td>
                    <td>Vivo V11 Pro</td>
                    <td><span class="label label-warning">Pending</span></td>
                    
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR7429</a></td>
                    <td>iPhone XS</td>
                    <td><span class="label label-danger">Delivered</span></td>
                    
                  </tr>
                  <tr>
                    <td><a href="pages/examples/invoice.html">OR9842</a></td>
                    <td>PUBG</td>
                    <td><span class="label label-success">Shipped</span></td>
                    
                  </tr>
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              <h3 class="timeline-header"><a href="#">Me</a> shared a nice video</h3>
              <div class="timeline-body">
                  <div class="embed-responsive embed-responsive-16by9">
                  <iframe width="853" height="480" src="https://www.youtube.com/embed/67tekXbuL6Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
              </div>
            
</script>

@stop

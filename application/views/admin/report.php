<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     <div class="row">
     
        
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laporan Zero Defect</h3>
            </div>
            <div class="box-body table-responsive no-padding">
            <!-- /.box-header -->
            <table id="example1" class="table dataTable" role="grid" aria-describedby="example1_info" style="font-size:10px;">
                <thead>
                <tr>
                    <th>Kode Cabang</th>
                    <th>Date</th>
                    <th>Error</th>
                    <th>Description</th>
                    <th>Effort</th>
                    <th>Solution</th>
                    <th>PIC</th>
                    <th>Target Date</th>
                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $cabang = $this->session->userdata('kode_cabang');
                $query2 = $this->db->query("SELECT * FROM tb_laporan");   
                $lprn=$query2->result();
                foreach($lprn as $lap){
                ?>
                <tr>    
                        <td><?php echo $lap->kode_cabang?></td> 
                        <td><?php echo $lap->tanggal?></td> 
                        <td><?php echo $lap->eror?></td>
                        <td><?php echo $lap->deskripsi?></td>
                        <td><?php echo $lap->upaya?></td>
                        <td><?php echo $lap->solusi?></td>
                        <td><?php echo $lap->PIC?></td>
                        <td><?php echo $lap->target_date?></td>
                        <td><?php echo $lap->status?></td>     
                </tr>  
                <?php } ?> 
                </tbody>
                
              </table>
              </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div><!--row-->
      
     
    </section>

    <!-- Main content -->
    <section class="content">

    </section>
    <!-- /.content -->
  </div> 
  


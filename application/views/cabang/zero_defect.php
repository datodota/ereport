<!-- jQuery 3 -->
<script src="<?php echo base_url('assets/bower_components/jquery/dist/jquery.min.js')?>"></script>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Zero Defect
      </h1>
      <div class="row">
        <div class="callout"><!--callout-->
          <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-default">
              <i class="fa  fa-plus-square"></i><span> Input Laporan Zero Defect</span> 
          </button>

          <!--Modal tambah data laporan-->
          <div class="modal fade" id="modal-default">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Input Laporan Zero Defect</h4>
                    
                  </div>
                  <div class="modal-body">
                   <div class="row">
                    <!--Form-->
                    <form action="<?php echo base_url(). 'index.php/input/laporan'; ?>" role="form" method="post">
                      <div class="col-md-6"><!--coloumn left-->
                        <div class="box-body"> <!--boxbody-->
                            <input type="hidden" class="form-control" name="branch" value="<?php echo $this->session->userdata('kode_cabang')?>">
                            <div class="form-group"><!--date-->
                              <label for="exampleInputEmail1">Date</label>
                              <input type="text" class="form-control" id="date" name="todayDate" value="<?php echo date("Y/m/d")?>" readonly>
                                  <script>
                                      // var d = new Date();
                                      // var day = d.getDate();
                                      // var month = d.getMonth();
                                      // var year = d.getFullYear();  
                                      //var tanggal = ;
                                      //document.getElementById("date").value = /*day + "/" + month + "/" + year*/;
                                  </script>
                            </div><!--date-->

                            <div class="form-group" ><!--Error-->
                                <label>Error</label>
                                <select class="form-control" id="mySelect" onchange="myFunction()" style="width: 100%;" name="errorList">
                                  <option>--Select Error--</option>
                                  <option>Human</option>
                                  <option>System</option>
                                  <option >ATM</option>
                                  <option>Procedure</option>
                                  <option>Other</option>
                                </select>                                
                            </div>  <!--Error-->
                            <div class="form-group" id="selected">

                            </div>
                            <div class="form-group"><!--description-->
                              <label>Description</label>
                              <textarea class="form-control" rows="3" placeholder="Type Here ..." name="description"></textarea>
                            </div><!--description-->
                            <div class="form-group"><!--Effort-->
                              <label>Effort</label>
                              <textarea class="form-control" rows="3" placeholder="Type Here ..." name="effort"></textarea>
                            </div><!--Effort-->

                         

                        </div><!--boxbody-->
                      </div><!--coloumn left-->

                      <div class="col-md-6"><!--coloumn Right-->
                        
                           <div class="form-group"><!--Solusi-->
                                <label>Solution</label>
                                <textarea class="form-control" rows="3" placeholder="Type Here ..." name="solution"></textarea>
                            </div><!--Solusi-->

                            <div class="form-group"><!--PIC-->
                              <label>PIC</label>
                              <input type="text" class="form-control" id="date" placeholder="Enter PIC ..." name="pic">
                            </div><!--PIC-->

                          <div class="form-group"><!--Status-->
                            <label>State</label>
                            <select class="form-control"  style="width: 100%;" name="state">
                                <option>--Select State--</option>
                                <option>Done</option>
                                <option >Following Up</option>
                              </select>
                          </div><!--Status-->

                          <div class="form-group"><!--Target Date-->
                              <label>Target Date</label>
              
                              <div class="input-group date">
                                <div class="input-group-addon">
                                  <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" class="form-control pull-right" id="datepicker" name="targetDate">
                              </div>
                              <!-- /.input group -->
                          </div>

                      </div><!--coloumn Right-->
                   
                    <!--Form-->
                   </div><!--row-->
                  </div>
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-ok"><i class="fa fa-save"></i> Save Data</button>
                  </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          <!--End Modal-->
        </div><!--callout-->
        <div class="searchBox">
          <div class="col-xs-12">
            <div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                               
                  <div class="input-group-btn">
                    <button type="submit" class="btn bg-olive margin" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" ><i class="fa fa-search"></i> Search</button>
                  </div>
                </div>
            </div>
                  
            <div class="collapse" id="collapseExample">
              <div class="box box-success">
                <div class="inner-box">
                <h4>Cari Data Berdasarkan tanggal</h4>

                <div class="row">
                  <form action="<?php echo base_url(). 'index.php/input/laporan'; ?>" role="form" method="post">
                   <div class="col-xs-4">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepickerStart" name="startDate">
                      </div>
                   </div>
                   <div class="col-xs-1">
                     <h5>To</h5>
                   </div> 
                   <div class="col-xs-4">
                      <div class="input-group date">
                        <div class="input-group-addon">
                          <i class="fa fa-calendar"></i>
                        </div>
                        <input type="text" class="form-control pull-right" id="datepickerEnd" name="endDate">
                      </div>
                   </div>

                   <div class="col-xs-2">
                      <button type="submit" class="btn btn-success">Search</button>
                   </div>
                   </form> 
                 </div>
                </div>
                 
              </div>
              
            </div>
          </div>
            
        </div>
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Laporan Zero Defect</h3>
  <!-- test reminder -->
  <?php           $cabang = $this->session->userdata('kode_cabang');
                 $queryx = $this->db->query("SELECT * FROM tb_laporan WHERE kode_cabang=$cabang");   
                 $lprnx=$queryx->result();
                foreach($lprnx as $lapr){
                    if ($lapr->status=="Following Up"){
                      if ($lapr->target_date==date("d/m/Y")){?>
                      <script>
                          setTimeout(function(){
                            window.location.reload(1);
                          }, 30000);
                      
                        window.open('http://localhost/ereport/cabang/popup/<?php echo $lapr->status;?>','popUpWindow','width='+screen.availWidth+',height='+screen.availHeight+',fullscreen="yes"')
                      </script>
                      <?php }
                    }
                }
                  ?>
             
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody>
                <tr>
                  
                  <th>Date</th>
                  <th>Error</th>
                  <th>Description</th>
                  <th>Effort</th>
                  <th>Solution</th>
                  <th>PIC</th>
                  <th>Target Date</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
                <?php
                
                $query2 = $this->db->query("SELECT * FROM tb_laporan WHERE kode_cabang=$cabang");   
                $lprn=$query2->result();
                foreach($lprn as $lap){
                ?>
                    <tr>    
                        <td><?php echo $lap->tanggal?></td> 
                        <td><?php echo $lap->eror?></td>
                        <td><?php echo $lap->deskripsi?></td>
                        <td><?php echo $lap->upaya?></td>
                        <td><?php echo $lap->solusi?></td>
                        <td><?php echo $lap->PIC?></td>
                        <td><?php echo $lap->target_date?></td>
                        <td><?php echo $lap->status?></td>     
                        <td>
                          <?php 
                          if ($lap->status == "Done") {?>
                            <script>
                              $(document).ready(function() {
                                document.getElementById("btnUpdate<?php echo $lap->ID_laporan?>").disabled = true;
                              });
                              </script>
                      <?php } else {?>
                              <script>
                                $(document).ready(function() {
                                  document.getElementById("btnUpdate<?php echo $lap->ID_laporan?>").disabled = false;
                                });
                                </script>
                      <?php } ?>
                          <button id="btnUpdate<?php echo $lap->ID_laporan?>" type="button" class="btn btn-info" data-toggle="modal" data-target="#<?php echo $lap->ID_laporan?>modal-edit-default">
                              <i class="fa fa-pencil-square"></i><span> Update</span> 
                          </button>

                          <!--Modal edit data laporan-->
                              <div class="modal fade" id="<?php echo $lap->ID_laporan?>modal-edit-default">
                                  <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title"><?php echo $lap->ID_laporan?> Update Data Laporan</h4>
                                        
                                      </div>
                                      <div class="modal-body">
                                      <div class="row">
                                        <!--Form-->
                                        <form action="<?php echo base_url(). 'index.php/updatedata/update_report'; ?>" role="form" method="post">
                                          <div class="col-md-6"><!--coloumn left-->
                                            <div class="box-body"> <!--boxbody-->
                                            <input type="hidden" class="form-control" name="idUpdate" value="<?php echo $lap->ID_laporan?>">
                                                <div class="form-group"><!--date-->
                                                  <label for="exampleInputEmail1">Date</label>
                                                  <input type="text" class="form-control" id="date"  value="<?php echo $lap->tanggal?>" readonly>
                                                      <script>
                                                        
                                                      </script>
                                                </div><!--date-->

                                                <div class="form-group" ><!--Error-->
                                                    <label>Error</label>
                                                    <select class="form-control" id="mySelect" onchange="myFunction()" style="width: 100%;"  disabled>
                                                      <option><?php echo $lap->eror?></option>
                                                      <option>Human</option>
                                                      <option>System</option>
                                                      <option >ATM</option>
                                                      <option>Procedure</option>
                                                      <option>Other</option>
                                                    </select>                                
                                                </div>  <!--Error-->
                                                <div class="form-group" id="selected">

                                                </div>
                                                <div class="form-group"><!--description-->
                                                  <label>Description</label>
                                                  <textarea class="form-control" rows="3" placeholder="Type Here ..." readonly><?php echo $lap->deskripsi?></textarea>
                                                </div><!--description-->
                                                <div class="form-group"><!--Effort-->
                                                  <label>Effort</label>
                                                  <textarea class="form-control" rows="3" placeholder="Type Here ..." readonly><?php echo $lap->upaya?></textarea>
                                                </div><!--Effort-->

                                            

                                            </div><!--boxbody-->
                                          </div><!--coloumn left-->

                                          <div class="col-md-6"><!--coloumn Right-->
                                            
                                              <div class="form-group"><!--Solusi-->
                                                    <label>Solution</label>
                                                    <textarea class="form-control" rows="3" placeholder="Type Here ..." name="solutionUpdate"><?php echo $lap->solusi?></textarea>
                                                </div><!--Solusi-->

                                                <div class="form-group"><!--PIC-->
                                                  <label>PIC</label>
                                                  <input type="text" class="form-control" id="date" placeholder="Enter PIC ..." value="<?php echo $lap->PIC?>" readonly>
                                                </div><!--PIC-->

                                              <div class="form-group"><!--Status-->
                                                <label>State</label>
                                                <select class="form-control"  style="width: 100%;" name="stateUpdate">
                                                    <option><?php echo $lap->status?></option>
                                                    <option>Done</option>
                                                    <option >Following Up</option>
                                                  </select>
                                              </div><!--Status-->

                                              <div class="form-group"><!--Target Date-->
                                                  <label>Target Date</label>
                                                  <script>
                                                  $(document).ready(function () {
                                                    //Date picker
                                                    $('#<?php echo $lap->ID_laporan?>').datepicker({format: 'yyyy/mm/dd', autoclose: true, startDate: new Date()})
                                                  })
                                                  </script>
                                                  
                                                  <div class="input-group date">
                                                    <div class="input-group-addon">
                                                      <i class="fa fa-calendar"></i>
                                                    </div>
                                                    <input type="text" class="form-control pull-right" id="<?php echo $lap->ID_laporan?>" name="targetDateUpdate" value="<?php echo $lap->target_date?>">
                                                  </div>

                                                
                                                  <!-- /.input group -->
                                              </div>

                                          </div><!--coloumn Right-->
                                      
                                        <!--Form-->
                                      </div><!--row-->
                                      </div>
                                      <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary btn-ok"><i class="fa fa-save"></i> Save Data</button>
                                      </form>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                              <!--End Modal Update Data-->
                        </td>     
                    </tr>  
                <?php } ?>   
              </tbody></table>
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


  
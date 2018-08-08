
 <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>
    <!-- Main content -->
    <section class="content">
      <?php if (!empty($mensagem)) { 
        echo '<div class="alert alert-' . $mensagem["TYPE"] . ' alert-dismissible">';
      ?>
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>        
        <?php echo $mensagem["MESSAGE"]; ?>
      </div>
      <?php } ?>


      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-info">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title">Cadastro de Membros</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form role="form" name="form1" method="POST" action="../controllers/candidate_controller.php">
              <input type="hidden" name="txtId" value="<?php echo $candidate->id; ?>">
              <div class="card-body">

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Nome</label>
                      <input type="text" class="form-control form-control-sm" name="txtName" value="<?php echo $candidate->name; ?>">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Sobrenome</label>
                      <input type="text" class="form-control form-control-sm" name="txtSurName" value="<?php echo $candidate->surname; ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>Nascimento</label>
                      <input type="date" class="form-control" name="txtBirthDate"  style="font-size: 0.7rem" value="<?php echo date('Y-m-d',strtotime($candidate->birthdate));  ?>">
                    </div>
                  </div>

                </div>   

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>E-Mail</label>
                      <input type="text" class="form-control form-control-sm" name="txtEMail" value="<?php echo $candidate->email; ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label>Telefone</label>
                      <input type="text" class="form-control form-control-sm" name="txtPhone" value="<?php echo $candidate->phone; ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>VATSIM</label>
                      <input type="text" class="form-control form-control-sm" name="txtVatsim" value="<?php echo $candidate->vatsimid; ?>">
                    </div>
                  </div>
                  <div class="col-md-2">
                    <div class="form-group">
                      <label>IVAO</label>
                      <input type="text" class="form-control form-control-sm" name="txtIvao" value="<?php echo $candidate->ivaoid; ?>">
                    </div>
                  </div>                  
                </div>                  

                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label>Cidade</label>
                      <input type="text" class="form-control form-control-sm" name="txtCity" value="<?php echo $candidate->city; ?>">
                    </div>
                  </div>
                  <div class="col-md-1">
                    <div class="form-group">
                      <label>Estado</label>
                      <input type="text" class="form-control form-control-sm" name="txtState" value="<?php echo $candidate->state; ?>">
                    </div>
                  </div>
                  <div class="col-md-5">
                    <div class="form-group">
                      <label>Pais</label>
                      <select class="form-control form-control-sm" name="cboCountry">
                        <?php 
                          foreach ($lstCountry as $country) {
                            $checked = ($country["iso"] == $candidate->country)?"selected":"";

                            echo '<option value="' . $country["iso"]  .  '" ' . $checked .  '>' . $country["name"] . '</option>';
                        }
                        ?>
                      </select>
                    </div>
                  </div>
                </div>

              </div>

              <div class="card-footer">
                <button type="submit" name="btnGravar" class="btn btn-sm btn-info" >Gravar</button>
                <button type="submit" name="btnExcluir" class="btn btn-sm btn-danger" onclick="return confirm('Confirma a Exclusão do Membro ?');" >Excluir</button>
                <a href="../controllers/membro_controller.php" class="btn btn-outline-secondary btn-sm">Voltar</a>
              </div>            

            </form>
            <!-- /.Form end -->

          </div>
        </div>
      </div>

    </section>
    <!-- Main content -->

  </div>
  <!-- Content Wrapper. Contains page content -->

</div>

<script type="text/javascript">
  form1.txtName.focus();

  function validaRecusa(){
    if (form1.txtObservations.value == ""){
      alert('Preencher no campo de Observações a razão para a recusa');
      return false;
    } 

    if (confirm('Confirma a recusa do candidato?'))
      form1.submit();
    else
      return false;
  }
</script>
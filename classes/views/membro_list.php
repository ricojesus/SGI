<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <br>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary card-outline">
            <!-- /.card-header -->
            <div class="card-header">
              <h3 class="card-title">Lista de Membros</h3>
            </div>
            <!-- /.card-header -->
            <!-- card-body -->             
            <div class="card-body">
                <table id="tbConsulta" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Congregação</th>
                            <th>Função</th>
                            <th>Telefone</th>
                            <th>Data de Admissão</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        /*
                        foreach ($list as $candidate) {
                        echo '<tr>';
                        echo '<td>' . $candidate["name"] . '</td>';
                        echo '<td>' . $candidate["surname"] . '</td>';
                        echo '<td>' . $candidate["email"]. '</td>';
                        echo '<td>' . $candidate["phone"]. '</td>';
                        echo '<td>' . $candidate["city"]. '</td>';
                        echo '<td>' . $candidate["registerdate"]. '</td>';
                        echo '<td align="center">';
                        echo '<a href="../controllers/candidate_controller.php?action=editar&id=' . $candidate["id"] .  '" class="btn-sm btn-success fa fa-edit" class="confirmation" ></a>';
                        echo '</tr>';
                        }
                        */
                        ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                    <a href="../controllers/membro_controller.php?action=novo" class="btn btn-success">Novo Membro</a>
                </div>

            </div>
            <!-- /.card-body -->
          </div>
        </div>
      </div>

    </section>
    <!-- Main content -->

  </div>
  <!-- Content Wrapper. Contains page content -->

</div>

<!-- page script -->
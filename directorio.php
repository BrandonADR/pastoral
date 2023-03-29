<?php
    require "db.php";
    $db = conectarDB();

    $query = "SELECT * FROM directorio";
	
    $result = mysqli_query($db, $query);

    $query = "SELECT * FROM carousel_directorio";
	
	  $result2 = mysqli_query($db, $query);

    include "templates/head.php";
?>

  <div class="carousel">
    <div class="carousel__contenedor">
      <button aria-label="Anterior" class="carousel__anterior">
        <i class='bx bx-chevron-left bx-lg'></i>
      </button>

      <div class="carousel__lista">
        <?php while($row = mysqli_fetch_assoc($result2)): ?>
          <div class="carousel__elemento">
            <img src="<?= $row['url']; ?>" alt="<?= $row['descripcion']; ?>">
          </div>
        <?php endwhile; ?>
      </div>

      <button aria-label="Siguiente" class="carousel__siguiente">
        <i class='bx bx-chevron-right bx-lg'></i>
      </button>
    </div>

    <div role="tablist" class="carousel__indicadores">

    </div>
  </div>

    <div class="principal_tabla container">
        <h2>Directorio de Agentes de Pastoral Vocacional Diocesana <br> Diócesis de Chilpancingo-Chilapa</h2>
        <div class="div_tabla">
            <table>
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>ORDEN O CONGREGACIÓN Y ENCARGADO</th>
                        <th>PASTORAL</th>
                        <th>FIESTA</th>
                        <th>DIRECCIÓN</th>
                        <th>TELEFONO</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $row['id']; ?></td>    
                        <td><?= $row['orden_encargado']; ?></td>    
                        <td><?= $row['pastoral']; ?></td>    
                        <td><?= $row['fiesta']; ?></td>    
                        <td><?= $row['direccion']; ?></td>    
                        <td><?= $row['telefono']; ?></td>    
                    </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
    include "templates/footer.php";
?>
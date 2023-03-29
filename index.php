<?php
    require "db.php";
    $db = conectarDB();

    $query = "SELECT * FROM programacion_principal";

    $result = mysqli_query($db, $query);
    
    include "templates/head.php";
?>
    <div class="principal container">
        <div class="principal_head">
            <img src="./assets/logo.jpg" alt="">
            <p>DIÓCESIS DE CHILPANCINGO-CHILAPA <br> CENTRO DIOCESANO DE PASTORAL VOCACIONAL</p>
        </div>
        <div class="principal_objetivos">
            <p><span>Objetivo:</span> Animar y coordinar la acción pastoral a favor de las vocaciones en nuestra Diócesis, garantizando el acompañamiento y el discernimiento inicial de cada vocación, y promoviendo la formación de los agentes vocacionales.</p>
            <p><span>Itinerarios de maduración vocacional:</span> Estos niveles se alimentan y complementan entre sí, representan acciones complementarias.</p>
            <div>
                <p><span>(Primer nivel) La sensibilización vocacional:</span> Dirigida a toda la comunidad cristiana particularmente a los jóvenes católicos, desea suscitar una inquietud vocacional como parte del normal desarrollo de la vida cristiana y discipular. Implica el trabajo en conjunto con la catequesis parroquial, la pastoral juvenil, los movimientos eclesiales y los colegios católicos.</p>
                <p><span>(Segundo nivel) La maduración de la vocación:</span> Acompañamiento vocacional a los jóvenes con inquietudes vocacionales. Formación para el cuidado y desarrollo de la misma, busca el contacto con las personas que ya viven una vocación específica, formación grupal en un proceso breve o más largo según las necesidades del candidato.</p>
                <p><span>(Tercer nivel) El ingreso a una casa de formación:</span> El Seminario, Institución religiosa y casa de formación tiene la responsabilidad de realizar un itinerario vocacional que ayude al discernimiento y desarrollo de la vocación del candidato.</p>
            </div>
        </div>
        <div class="principal_tabla">
            <h2>PROGRAMACIÓN DE LAS ACTIVIDADES DE LA PASTORAL VOCACIONAL DIOCESANA</h2>
            <div class="div_tabla">
                <table>
                    <thead>
                        <tr>
                            <th>MES</th>
                            <th>ACTIVIDAD</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td><?= $row['mes']; ?></td>    
                            <td><?= $row['actividad']; ?></td>       
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="contactanos">
            <div class="container">
                <div class="container__contact">
                    <div class="contact__title">
                        <h2><span>Hola!!!</span> <br/> Contactanos</h2>
                    </div>
                    <form class="contact__form" action="">
                        <label for="name">Nombre</label>
                        <input id="name" name="nombre" type="text" />
                        <label for="email">Correo</label>
                        <input id="email" name="correo" type="email" />
                        <label for="message">Mensaje</label>
                        <textarea name="mensaje" id="message" cols="25" rows="8"></textarea>

                        <button type="submit">
                            Enviar
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"><path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"/></svg>
                        </button>
                    </form>
                </div>
            </div>
        </div>
<?php
    include "templates/footer.php";
?>
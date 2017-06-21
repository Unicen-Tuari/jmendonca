{include file="header.tpl"}
{include file="navbar.tpl"}
<!-- contenedor -->
{foreach from=$listaMascotas item=$mascota}
    <div class="marco">
        <div class="row">
            <div class="col-sm-4">
                <img src="img/{$mascota['raza']}.jpg")>
            </div>
            <div class="col-sm-4">
                <h3>{$mascota['raza']}</h3>

                  <ul class="list-group"><b>colores</b>
                    {foreach from=$listaColoresxMascota[$mascota['id_mascota']] item=$ColoresxMascota}
                      <li class="list-group-item">{$ColoresxMascota}</li>
                    {/foreach}
                  </ul>

            </div>

            <div class="col-sm-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Peso</th>
                        <th>Alimento</th>
                    </tr>
                    </thead>
                    <tbody>
                    {foreach from=$listaAlimentos item=$alimento}
                    {if $alimento['id_mascota'] == $mascota['id_mascota']}
                      <tr>
                          <td>{$alimento['peso']}</td>
                          <td>{$alimento['gramos']}</td>
                      </tr>
                    {/if}
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
{/foreach}
{include file="footer.tpl"}

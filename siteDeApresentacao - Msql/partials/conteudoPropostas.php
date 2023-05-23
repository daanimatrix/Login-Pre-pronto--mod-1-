<div class="pcoded-content">

<div class='m-3' style='height:130px;'>


<div class="container mt-5">
  <div class="row justify-content-left">
    <div class="col-md-6 m-3">
      <h4 class="mb-4">Filtre as Propostas</h4>
      <form>
        <div class="form-group">
          <label for="pesquisaPorTexto">Pesquisa por texto:</label>
          <input type="text" class=" form-control" id="pesquisaPorTexto" name="entrada">
        </div>
        <div class="form-group">
          <label for="periodo">Escolha o período:</label>
          <div class="input-group">
            <input type="datetime-local" class="form-control" id="periodo" name="periodo">
            <div class="input-group-append">
              <span class="input-group-text">Até</span>
            </div>
            <input type="datetime-local" class="form-control" id="periodo" name="periodo">
          </div>
        </div>
        <button type="button" class="btn btn-primary rounded btn-sm" id="calcular" style="radius">Salvar</button>
      </form>
    </div>
  </div>
</div>


	<div id="resultado"></div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Ações</th>
      <th scope="col">ID </th>
      <th scope="col">Origem</th>
      <th scope="col">Ult.Atual</th>
      <th scope="col">Dt.Venda</th>
      <th scope="col">CPF </th>
      <th scope="col">Nome</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>149497</td>
      <td>@mdo</td>
      <td>20/03/23 10:50:31</td>
      <td>20/03/23 10:50:31</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>23533</td>
      <td>Jacob</td>
      <td>20/03/23 10:50:31</td>
      <td>20/03/23 10:50:31</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>559497</td>
      <td>Jacob</td>
      <td>20/03/23 10:50:31</td>
      <td>20/03/23 10:50:31</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
</div>


@include('menuLayout')
<div class="container">  
  <form id="contact" action="{{action('RegisterController@store')}}" method="post">
      @csrf
          <h1 class="w3-xxlarge ">Cadastro de clientes</h1><br><br>
          <h3 class="w3-xlarge leftTitle escuro">Dados do cliente:</h3>
        <fieldset>
          <label class="cadastrar">Nome:</label>
          <input class="form-control" name="nome" type="text" placeholder="Insira o nome" required>
        </fieldset>
        <fieldset>
          <label  class="cadastrar">Data de Vencimento:</label>
          <input class="form-control" name ="dataVencimento" id="date" type="date">
        </fieldset>
          <h3 class="w3-xlarge leftTitle escuro ">Dados do carro:</h3>
        <fieldset>
          <label  class="cadastrar">Placa</label>
          <input class="form-control" name ="placa" type="text" placeholder= "Informe a placa do veiculo">
        </fieldset>
        <fieldset>
          <label  class="cadastrar">Cor</label>
          <input class="form-control" name="cor" type="text" placeholder="Informe a cor do veiculo" >
        </fieldset>
        <fieldset>
          <label  class="cadastrar">Marca</label>
          <input class="form-control" name="marca" type="text" placeholder="Informe a Marca do veiculo">
        </fieldset>
        <fieldset>
          <label  class="cadastrar">Modelo</label>
          <input class="form-control" name="modelo" type="text" placeholder="Informe o Modelo do veiculo" >
        </fieldset>
        <fieldset>
          <label for="vaga"  class="cadastrar">Vaga</label>
        <select name="occupied" form="contact">
         
        <option value="0" disabled selected> Selecione uma vaga </option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>     
        </fieldset>
        <fieldset>
          <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Cadastrar </button>
        </fieldset>
      </form>
</div> 
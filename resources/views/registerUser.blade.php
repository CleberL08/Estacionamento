@include('menuLayout')
<body>  
<div class="merda">

        <div class ="registerUser">
            <h1 class="w3-xxlarge ">Cadastro de clientes</h1>
            <hr style="width: 80%">
                 <form method="POST" action="">
                    <h3 class="w3-xlarge leftTitle escuro">Dados do cliente:</h3><br><br>    
                        <div class ="form-group esquerda" >
                            <label>Nome:</label>
                            <input class="form-control " type="text" placeholder="Insira o nome" required>
                            <br>
                            <label>Data de Vencimento:</label>
                            <input class="form-control" id="date" type="date">
                        </div>
                            <br><br> 
                    <h3 class="w3-xlarge leftTitle escuro aolado ">Dados do carro:</h3><br><br> 
                        <div class ="form-group esquerda aolado">
                            <label>Placa</label>
                            <input class="form-control" type="text" placeholder= "Informe a placa do veiculo"  >
                            <br>
                            <label>Cor</label>
                            <input class="form-control" type="text" placeholder="Informe a cor do veiculo" >
                            <br>
                            <label>Marca</label>
                            <input class="form-control" type="text" placeholder="Informe a Marca do veiculo"  >
                            <br>
                            <label>Modelo</label>
                            <input class="form-control" type="text" placeholder="Informe o Modelo do veiculo"  >
                                                       

                        </div>
                        <br>
                    <br><br><br>
                </form>   
        </div>
    </div>

</body>


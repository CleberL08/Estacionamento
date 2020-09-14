@extends('layout')
<nav class="spot">
    <!-- <a type="button" href="{{route('Home')}}" class="">Voltar</a> -->
    <img src="../imgs/imgPark2.png" style="width:100%; height:12vh;">
    <ul id="nav">
        <li><a  href="{{route ('ShowCar')}}" ><i class="fa fa-home w3-xxlarge"></i><br>Inicio</a></li>
        <li><a  ><i class="fa fa-user w3-xxlarge"></i><br>Clientes</a>
            <ul>
            <li><a href="{{route('registerUser')}}">Cadastrar cliente</a></li>
                <li><a href="#">Ver clientes</a></li>
                <li><a href="#">Data de pagamento</a></li>
                <li><a href="#">Remover Cliente</a></li>
              </ul>
            </li>
            <li><a id ="closeButton "href="{{route('Home')}}" ><i  class ="fa fa-close   w3-xxlarge"></i><br>Sair</a></li>

    </ul>
    </nav>
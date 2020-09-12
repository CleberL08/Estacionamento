@extends('layout')

<!-- <a type="button" href="{{route('Home')}}" class="">Voltar</a> -->

<nav class="spot">

<img src="./imgs/imgPark2.png" width="100%" height="20%">
<ul id="nav">
    <li><a  href="{{route ('ShowCar')}}" ><i class="fa fa-home w3-xxlarge"></i><br>Inicio</a></li>
    <li><a  href"" ><i class="fa fa-user w3-xxlarge"></i><br>Clientes</a>
        <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Hospedagem</a></li>
            <li><a href="#">SEO</a></li>
            <li><a href="#">Sistemas</a></li>
          </ul>
        </li>
    <li><a href="{{route('Home')}}" ><i class="fa fa-exit w3-xxlarge"></i><br>Sair</a>  
      
    </li>
<!-- 
    <li><a href="#">Contato</a></li>
-->  </ul>
</nav>





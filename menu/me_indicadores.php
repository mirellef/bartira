<?php include "barra.php"; 

?>


<div class="container-fluid">
  <div class="row">
    <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar">

      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="#">Módulo Indicadores <span class="sr-only">(current)</span></a>
        </li>
      </ul>

        <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="acervos_filtro.php">Acervos</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,17,18,33,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listaracervos">Listar Relatório Acervos</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,17,18,33,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inseriracervos">Inserir Relatório Acervos</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
         $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87);
          if(in_array($user->ID,$peruser)){ ?>
         <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="indicadores.php?p=tabelacontinuadas">Resumo Ações Continuadas - Resumo</a>
          </li>
        <?php } ?>
        <?php ?>

      <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,154,156);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="continuadas_filtro.php">Ações Continuadas</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,13,17,18,33,68,69,88,152,154);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listarcontinuadas">Listar Ações Continuadas</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,13,17,18,33,68,69,88,152,154);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inserircontinuadas">Inserir Ações Continuadas</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,52,53,56,59,66,68,71,77,87,153,156);
      if(in_array($user->ID,$peruser)){ ?>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="biblioteca_filtro.php">Biblioteca</a>
          </li>
        <?php } ?>
        <?php ?>
        
        <?php
        $peruser = array(1,17,49,52,66,68,71,153);
        if(in_array($user->ID,$peruser)){ ?>
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=listarbiblioteca">Listar Relatório Biblioteca</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,17,49,52,66,68,71,153);
          if(in_array($user->ID,$peruser)){ ?>     
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=inserirbiblioteca">Inserir Relatório Biblioteca</a>
            </li>
          <?php } ?>
          <?php ?>

           <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="comunicacao_filtro.php">Comunicação</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,17,12,97,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listarcomunicacao">Listar Relatório Comunicação</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,17,12,97,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inserircomunicacao">Inserir Relatório Comunicação</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,5,16,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listaconvocatoria">Convocatórias - Cadastrar Opção</a>
        </li>
      <?php } ?>
      <?php ?>

       <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="inscricoes_filtro.php">Convocatórias</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,13,17,68,79);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listarinscricoes">Listar Relatório Convocatórias</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,13,16,17,68,79);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inseririnscricoes">Inserir Relatório Convocatórias</a>
        </li>
      <?php } ?>
      <?php ?>
 
      <?php
         $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>
         <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="indicadores.php?p=tabelaevento">Eventos - Resumo</a>
          </li>
        <?php } ?>
        <?php ?>


          <?php
          $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>      
            <li class="nav-item">
              <a class="nav-link" href="evento_filtro.php">Eventos</a>
            </li>
          <?php } ?>
          <?php ?>
          

          <?php
          $peruser = array(1,13,16,17,39,142,42,49,52,34,33,28,18,53,77,38,70,71,72,75,76,79,88,90,35,47,26,46,48,79,12,45,56,144,41,145,68,69,66,145,151,152,153,154,156,158,159,160);
          if(in_array($user->ID,$peruser)){ ?>      
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=listarevento">Listar Relatório Eventos</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,13,16,17,39,142,42,49,52,34,33,28,18,53,77,38,70,71,72,75,76,79,88,90,35,47,26,46,48,79,12,45,56,144,41,145,68,69,66,145,151,152,153,154,156,158,159,160);
          if(in_array($user->ID,$peruser)){ ?>       
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=inserirevento">Inserir Relatório Eventos</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,5,16,17,68,158 );
          if(in_array($user->ID,$peruser)){ ?>             
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=listar_evento_sem_indicador">Eventos Sem Indicador</a>
            </li>
          <?php } ?>
          <?php ?>

           <?php
         $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,106,156);
          if(in_array($user->ID,$peruser)){ ?>
         <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="indicadores.php?p=tabelaincentivo">Incentivo Geral - Resumo</a>
          </li>
        <?php } ?>
        <?php ?>

         <?php
         $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,106,156);
          if(in_array($user->ID,$peruser)){ ?>
         <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link" href="indicadores.php?p=tabelaincentivolazer">Lazer - Resumo</a>
          </li>
        <?php } ?>
        <?php ?>

          <?php
          $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>
            <li class="nav-item">
              <a class="nav-link" href="incentivo_filtro.php">Incentivo à Criação</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>
            <li class="nav-item">
              <a class="nav-link" href="incentivo_filtro_lazer.php">LAZER</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,17,45,35,47,26,48,46,56,79,41,145,68);
          if(in_array($user->ID,$peruser)){ ?>
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=listarincentivo">Listar Incentivo à Criação</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,17,45,35,47,26,48,46,56,79,41,145,68);
          if(in_array($user->ID,$peruser)){ ?>     
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=inseririncentivo">Inserir Incentivo à Criação</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
      $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="orcamento_filtro.php">Orçamento</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,60);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listarorcamento">Listar Relatório Orçamento</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,60);
      if(in_array($user->ID,$peruser)){ ?>   
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inserirorcamento">Inserir Relatório Orçamento</a>
        </li>
      <?php } ?>
      <?php ?>


          <?php
          $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>  
           <li class="nav-item">
            <a class="nav-link" href="culturaz_filtro.php">Plataforma CulturAZ</a>
          </li>
        <?php } ?>
        <?php ?>

        <?php
        $peruser = array(1,17,68);
        if(in_array($user->ID,$peruser)){ ?>  
         <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=listarculturaz">Listar Relatório Plataforma CulturAZ</a>
        </li>
      <?php } ?>
      <?php ?>

      <?php
      $peruser = array(1,16,17,68);
      if(in_array($user->ID,$peruser)){ ?>  
        <li class="nav-item">
          <a class="nav-link" href="indicadores.php?p=inserirculturaz">Inserir Relatório Plataforma CulturAZ</a>
        </li>
      <?php } ?>
      <?php ?>

       <?php
          $peruser = array(1,5,6,7,16,18,29,39,45,49,53,56,59,68,77,87,156);
          if(in_array($user->ID,$peruser)){ ?>   
            <li class="nav-item">
              <a class="nav-link" href="redes_filtro.php">Redes Sociais</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,13,17,34,45,46,48,18,35,52,49,47,142,33,26,28,41,145,68,71,66,88,90,145,152,153,154,158,159,160);
          if(in_array($user->ID,$peruser)){ ?>   
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=listarredes">Listar Relatório Redes Sociais</a>
            </li>
          <?php } ?>
          <?php ?>

          <?php
          $peruser = array(1,13,17,34,45,46,48,18,35,52,49,47,142,33,26,28,41,145,68,71,66,88,90,142,145,152,153,154,158,159,160);
          if(in_array($user->ID,$peruser)){ ?>  
            <li class="nav-item">
              <a class="nav-link" href="indicadores.php?p=inserirredes">Inserir Relatório Redes Sociais</a>
            </li>
          <?php } ?>
          <?php ?>


         <?php
         $peruser = array(1);
         if(in_array($user->ID,$peruser)){ ?>
         <ul class="nav nav-pills flex-column">
             <li class="nav-item">
                 <a class="nav-link" href="indicadores.php?p=tabelaatendimento">Atendimento Geral - Resumo</a>
             </li>
         <?php } ?>
         <?php ?>
          

    </ul>

    <ul class="nav nav-pills flex-column">

      <li class="nav-item">
        <a class="nav-link" href="../wp-login.php?action=logout">Sair</a>
      </li>
    </ul>
  </nav>
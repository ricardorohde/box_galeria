<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>style/sobre.css"/>


<section class="conteudo">
  <div class="bg_sobre">
      <h1>CONTATO</h1>
      <h3>ENTRE EM CONTATO CONOSCO PELO FORMULÁRIO ABAIXO</h3>
      <?php if($enviou){ echo "<br /><h3>MENSAGEM ENVIADA COM SUCESSO</h3>"; }?>
      <div class="centro" style="width:600px;">
        <div class="formulario">
          <form method="post"  action="<?php echo base_url();?>contato/enviar">
            <input required type="text" name="nome" placeholder="Nome"/>
            <input required type="text" name="email" placeholder="E-mail"/>
            <input type="text" name="telefone" placeholder="Fone"/>
            <input type="text" name="assunto" placeholder="Assunto"/>
            <textarea required name="mensagem" placeholder="Mensagem"></textarea>
            
            <input type="submit" id="enviar" value="" />
          </form>
        </div>

  </div>
    </div>
  
 </section> 


<div id="content">
			<div id="content-header">
				<h1>Usuarios</h1>
				
			</div>
			<div id="breadcrumb">
				<a href="<?php echo base_url();?>administracao" title="Ir Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
				<a href="#" class="current">usuários</a>
			</div>
			<div class="container-fluid">
				
				<div class="row-fluid">
				
					
					<div class="span12 center">	
						
						<form class="form-search" action="<?php echo base_url();?>administracao/usuarios/busca" method="POST">
							<input type="text" name="busca" class="input-medium search-query">
							<button type="submit" class="btn">Pesquisar</button>
							<a class="btn btn-primary" style="float:right;"  href="<?php echo base_url();?>administracao/usuarios/formcad">Adicionar</a>
						</form>					
							
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon">
									<i class="icon-th"></i>
								</span>
								<h5>Usuários</h5>
							</div>
							<div class="widget-content nopadding">
							<table class="table table-bordered table-striped table-hover">
									
									<thead>
										<tr>
											   <th>Nome</th>
											   <th>Email</th>
											   <th>Editar</th>
											   <th>Excluir</th>
										</tr>
									</thead>
									<tbody>
										 
 
 		
									 <?php 
									 if($usuarios){
									 
										foreach($usuarios as $item):
											
									
											
										?>   
									 
									 <tr>
										 
										 <td><?php echo $item->username;?></td>
										 <td><?php echo $item->email;?></td>
										 <td> <a href="<?php echo base_url();?>administracao/usuarios/alterar/<?php echo $item->id; ?>"><i class="icon icon-pencil"></i></a></td>
										 <td> <a href="<?php echo base_url();?>administracao/usuarios/excluir/<?php echo $item->id; ?>" onclick="return confirm('Confirma a Exclusao?')"><i class="icon icon-remove"></i></a></td>
									 </tr>
									 </tbody>
											
										<?   
										
										endforeach;
									 }
									 ?>
									</tbody>
								</table>
								</div>
						</div>
								
								<?php if($paginas){
									   echo $paginas;
									   
								 }
								  ?>
          
		  
		    
				</div>
			</div>	
			
				
				

































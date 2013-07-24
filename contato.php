<!DOCTYPE html>
<html lang="pt-br">
	
	<head>		
		<meta  charset="utf-8">
		<title>PET SHOP</title>
                <link href="css.css" rel="stylesheet" type="text/css"/>
               
	</head>
        
	<body>
		<div id="all">
			<header>
				<h1>CONTATOS</h1>
			</header>
			<nav>
				<ol>
                                        <li><a href="index.php">INÍCIO</a></li>
                                        <li><a href="sobre.php">Sobre</a></li>
					<li><a href="historia.php">História</a></li>
					<li><a href="produtos.php">Produtos</a></li>
					<li><a href="servicos.php">Serviços</a></li>
                                        <li><a href="contato.php">Contato</a></li>
				</ol>
			</nav>
                    
			<div id="conteudo">
                            
 <form id="usuario" name="usuario" method="post">

        <p><label for="nome">Nome: </label>
            <input type="text" name="nome" size="50"></p>
        <p><label for="email">E-mail: </label>
            <input type="text" name="email" id="email" size="50"/></p>
         <p><label for="assunto">Assunto: </label>
            <input type="text" name="assunto" id="assunto" size="50"/></p>       
        
        <p><input type="checkbox" name="desejo">Desejo receber outras informações por e-mail.</p>


       <p><label for="comentario">Escreve sua mensagem aqui.</label>
            <textarea name="mensagem" rows="10" cols="70" placeholder="Escreva aqui."></textarea></p>


       <p><input type="submit" value="Enviar"></p>


    </form>
                         </div>
  
	<!--<aside>
	
			
	//</aside> -->
			<footer>
				<p>Desenvolvidores: Alex Farias da Silva e Daniel Belchior dos Santos</p>
                                <p>Alunos do Curso Técnico Subsequente do IFRN - Parnamirim</p>
                                <p>2013</p>
			</footer>
		</div>
	</body>
</html>

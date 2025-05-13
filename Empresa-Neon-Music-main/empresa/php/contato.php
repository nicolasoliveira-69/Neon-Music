<!DOCTYPE html>
<html lang="pt-BR">

<head>
      <meta charset="utf-8" />
      <title>Empresa: Neon Music</title>
      <link href="../css/estilo_contato.css" rel="stylesheet" type="text/css" />
</head>

<body>
      <div id="container">
            <div id="topo"></div>

            <div id="menu">
                  <div id="link1"><a href="../html/principal.html">Início</a></div>
                  <div id="link2"><a href="../html/produtos.html">Produtos</a></div>
                  <div id="link3"><a href="../html/videos.html">Vídeos</a></div>
                  <div id="link4"><a href="../html/acessorios.html">Acessórios</a></div>
                  <div id="link5"><a href="../php/contato.php">Contato</a></div>
            </div>

            <div id="conteudo">
                  <div class="formulario">
                        <h3>Fale conosco</h3>
                        <form name="faleConosco" action="envia.php" method="post">
                              <label for="nome"><span>Nome:</span>
                                    <input type="text" name="nome" id="nome" />
                              </label>
                              <label for="email"><span>E-mail:</span>
                                    <input type="text" name="email" id="email" />
                              </label>
                              <label for="cidade"><span>Cidade:</span>
                                    <input type="text" name="cidade" id="cidade" />
                              </label>
                              <label for="estado"><span>Estado:</span>
                                    <select name="estado" id="estado">
                                          <option>RS</option>
                                          <option>SC</option>
                                          <option>PR</option>
                                          <option>SP</option>
                                          <option>RJ</option>
                                    </select>
                              </label>
                              <label for="assunto"><span>Assunto:</span>
                                    <input type="text" name="assunto" id="assunto" />
                              </label>
                              <label for="mensagem"><span>Mensagem:</span>
                                    <textarea name="mensagem" id="mensagem"></textarea>
                              </label>
                              <button type="submit" id="enviar">Enviar</button>
                        </form>
                  </div>

                  <div class="mapa">
                        <iframe width="320" height="320" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                              src="https://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+7+de+Setembro+800+,+Passo+Fundo+-+Rio+Grande+do+Sul&amp;aq=&amp;sll=-28.262118,-52.410381&amp;sspn=0.021281,0.038581&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Sete+de+Setembro,+800+-+Vila+Vera+Cruz,+Passo+Fundo+-+Rio+Grande+do+Sul,+99010-121&amp;t=m&amp;z=14&amp;ll=-28.248604,-52.424999&amp;output=embed">
                        </iframe><br />
                        <small>
                              <a href="https://maps.google.com.br/maps?f=q&amp;source=embed&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+7+de+Setembro+800+,+Passo+Fundo"
                                    style="color:#0000FF;text-align:left">Exibir mapa ampliado</a>
                        </small>
                  </div>

                  <div class="redes">
                        <h2>Redes Sociais:</h2>
                        <a href="https://github.com" target="_blank">
                              <img src="github.jpg" alt="github" height="70" width="70" />
                        </a>
                        <a href="https://www.instagram.com" target="_blank">
                              <img src="instagram.jpg" alt="instagram" height="70" width="70" />
                        </a>
                  </div>
            </div>

            <div id="rodape">
            <h3>Webmaster: Andrei Borges</h3>
            </div>
      </div>
</body>

</html>
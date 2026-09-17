<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal AutoTech</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- ========================= TOPO  ========================== -->
    <header class="topo">
        <div class="logo">
            <h1>

                Auto<span>Tech</span>
            </h1>
            <p>OFICINA MECÂNICA</p>
        </div>

        <div class="informacao">
            <h3>PORTAL DE FERRAMENTAS</h3>
            <p>

                Soluções rápidas para o dia a dia da oficina
            </p>
        </div>
    </header>
    <!-- =========================   MENU   ========================== -->
    <nav class="menu">
        <a href="../Index.php">Início</a>
        <a href="ferramentas/Calculadora-Orcamento.php">Orçamento</a>
        <a href="ferramentas/Troca-Pneus.php">Pneus</a>
        <a href="ferramentas/Calculadora-Combustivel.php">Combustível</a>
        <a href="ferramentas/Avaliador-Manutenção.php">Serviço</a>
        <a href="ferramentas/Simulador-Viagem.php">Viagem</a>
    </nav>

    <!-- =========================  FERRAMENTAS  ========================== -->

    <section class="ferramentas">
        <h2>Ferramentas disponíveis</h2>
        <p>
            Utilize as ferramentas para auxiliar no atendimento aos clientes.
        </p>

        <!-- CARD 1 -->

        <article class="card">
            <div class="Formulario">
                <form method="Post">
                    <label class="Legenda" >Descrição:</label>
                    <input class="Campo" type="text" name="descricao" placeholder="Descrição"/>

                    <label class="Legenda" >Valor das Peças</label>
                    <input class="Campo" type="text" name="valor" placeholder="Valor das Peças"/>

                    <label class="Legenda" >Valor da Mão de Obra</label>
                    <input class="Campo" type="text" name="obra" placeholder="Valor da Mão de Obra"/>

                    <button class="botao" type="submit">Calcular</button>
                </form>
            </div>
        </article>

        <?php if($_POST){
            $descricao = $_POST['descricao'];
            $obra = $_POST['obra'];
            $valor  = $_POST['valor'];  
        
            $total = $valor + $obra;
        }
        ?>

        <?php if($_POST) { ?>
        <article class= "Card" >
            <h1>Relatorio</h1>
            <p class="legenda">Serviço: <?= $descricao ?></p>
            <p class="legenda">Valor das Peças: <?= number_format($valor, 2, ',', '.'); ?></p>
            <p class="legenda" >Mão de Obra: <?= number_format($obra, 2, ',', '.'); ?></p>
            <p class="legenda" >Total: <?= number_format($total, 2, ',', '.'); ?></p>
        </article>
        <?php } ?>

        <!-- =========================  RODAPÉ  ========================== -->

        <footer class="rodape">
            <div class="rodape-coluna">

                <h3>

                    Auto<span style="color:#e52525;">Tech</span>
                </h3>

                <p>

                    Portal de ferramentas para oficina mecânica.
                </p>

            </div>

            <div class="rodape-coluna">
                <h3>Ferramentas</h3>
                <p>Orçamento</p>
                <p>Pneus</p>
                <p>Combustível</p>
            </div>

            <div class="rodape-coluna">
                <h3>AutoTech</h3>

                <p>

                    Qualidade em cada quilômetro.
                </p>

                <p>

                    Santana de Parnaíba - SP
                </p>
            </div>

            <div class="copyright">

                © 2026 AutoTech - Portal de Ferramentas
            </div>
        </footer>
</body>

</html>
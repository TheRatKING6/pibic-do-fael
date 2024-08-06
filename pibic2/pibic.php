<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title></title>
    <style type="text/css">
        
        .btn{
        
        background-color: #279388;
        color: lightcyan;
        border-color: white;
        }

        .btn:hover{
            
            color: white;
            background-color: #005D54;
            border-color: #256660;
        }

        .boxInfo{

            position: relative;
            background-color: white;
            padding: 30px;
            width: 85%;

        }
        body {
          background-image: url("backimage.jpg");
          background-size: cover;
          background-position: center;
       }

        .box {
            align-items: center;
            text-align: center;
            background: linear-gradient(to top right, darkred, red);
            background-color: linear;
            margin: auto;
            padding: 30px;
            position: relative;
        }
        .titulo{
            color: white;
        }
        @media (min-width: 0px) and (max-width: 589px){
            body{
                font-size: 1em;
                background-image: none;
            }

            .boxInfo{
                padding: 5px;
            }
        }

    </style>
</head>
<body>
    <div class="box titulo" ><h2>O Papel da Mídia em Relação a Literatura de Vestibular</h2></div>


    <div class="container boxInfo">
    <form method="POST">
    <br><br>
		<label>Nome Completo:</label>
		<input type="text" name="nome"> <i class="bi bi-exclamation-circle" style="color:red" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-title="Seu nome não será divulgado"></i>
        
        

	<br><br>

        <label>Quantos livros você lê ao ano?</label>
        <br>
        <input type="radio" name="ano" value="0">
        <label>0</label>
        <br>
		<input type="radio" name="ano" value="1">
        <label>1 a 5</label>
        <br>
        <input type="radio" name="ano" value="6"> 
        <label>6 a 10</label>
        <br>
		<input type="radio" name="ano" value="11"> 
        <label>11 a 20</label>
        <br>
        <input type="radio" name="ano" value="20"> 
        <label>mais de 20</label>

    <br><br>

        <label>Você possui o costume de assistir videoaula sobre a história de algum livro?</label>
        <br>
        <input type="radio" name="video" value="sim">
        <label>Sim</label>
        <br>
		<input type="radio" name="video" value="não">
        <label>Não</label>
        
    <br><br>

        <label><b>Caso tenha respondido "sim" na pergunta anterior, responda as próximas perguntas</b></label>

    <br><br>

        <label>Qual o limite de tempo que uma vídeo aula pode ter para você?</label>
        <br>
        <input type="radio" name="tempo" value="5">
        <label>No máximo 5 minutos</label>
        <br>
        <input type="radio" name="tempo" value="10">
        <label>No máximo 10 minutos</label>
        <br>
        <input type="radio" name="tempo" value="15">
        <label>No máximo 15 minutos</label>
        <br>
        <input type="radio" name="tempo" value="30">
        <label>No máximo 30 minutos</label>
        <br>
        <input type="radio" name="tempo" value="45">
        <label>No máximo 45 minutos</label>
        <br>
        <input type="radio" name="tempo" value="1">
        <label>No máximo 1 hora</label>
        <br>
        <input type="radio" name="tempo" value="2">
        <label>No máximo 2 horas</label>
        <br>
        <input type="radio" name="tempo" value="n">
        <label>Para mim não importa o tempo</label>
    
    <br><br>

        <label>Quanto ao professor, como você gosta que seja a explicação?</label>
        <br>
        <input type="checkbox" name="professor" value="leve">
        <label>Leve e Descontraída</label>
        <br>
        <input type="checkbox" name="professor" value="piada">
        <label>Com piadas</label>
        <br>
        <input type="checkbox" name="professor" value="musicas">
        <label>Com músicas</label>
        <br>
        <input type="checkbox" name="professor" value="seria">
        <label>Séria e focada</label>
        <br>
        <input type="checkbox" name="professor" value="encenada">
        <label>Encenada</label>
        <br>
        <input type="checkbox" name="professor" value="n">
        <label>Não me importo com o tipo de explicação</label>

    <br><br>

        <label>Durante a explicação, você prefere:</label>
        <br>
        <input type="radio" name="explicacao" value="professor">
        <label>Quando o professor aparece</label>
        <br>
        <input type="radio" name="explicacao" value="slide">
        <label>Somente os slides e/ou lousa</label>
        <br>
        
        <input type="radio" name="explicacao" value="professorSlide">
        <label>Quando aparece o professor junto com os slides e/ou lousa</label>
        
        <br>
        <input type="radio" name="explicacao" value="n">
        <label>Não me importo</label>
    
    <br><br>
        <label>Durante a explicação você prefere que o professor fale: </label>
        <br>
        <input type="radio" name="fala" value="rapido">
        <label>Rápido</label>
        <br>
        <input type="radio" name="fala" value="devagar">
        <label>Devagar</label>
        <br>
        <input type="radio" name="fala" value="n">
        <label>Tanto faz, o importante é que ele explique bem</label>
    <br><br>
    <input type="submit" class="btn" style="width: 100%; margin-top: 10px;" value="Enviar">
    
    </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script type="text/javascript">
        
        const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
        const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>
</body>
</html>
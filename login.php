<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbearia Carioca - Agende Agora</title>
    <link rel="icon" href="img/favicon-16x16.png" type="image/x-icon">
    
    <style>
        body{
            background: linear-gradient(45deg, #f0f9ff 10%,
            #cbebff 47%, #a1dbff 100%);
            font-family: tahoma;
        }
        
        div.global{
            width: 20%;
            height: auto;
            background-color: #fff;
            border: 1px solid #606060;
            padding: 50px;
            box-shadow: 0px 0px 10px #000;
            margin-top: 10%;
            margin-left: auto;
            margin-right: auto;  
            wi  
        }
        
        input[type="text"], input[type="password"]{
            width: 300px;
            height: 25px;
            border: solid 1px #606060;
            border-radius: 5px;
        }

        a {
            margin-left: 30px;
            text-decoration: none;
            color: blue;
        }

        a:hover{
            border-bottom: 2px solid red;
            color: red;
        }

        input[type="submit"]{
            width: 150px;
        }
        

    </style>
</head>
<body>
    <a href="index.html">Voltar ao Início</a>
    <div class="global">
        <label>Agende seu serviço: </label> 
        <br/><br/>
        <form method="post">
            <label>Nome:</label>
            <input type="text" name="user">
            <br/>
            <br/>
            <label>e-mail de contato:</label>
            <input type="text" name="email">
            <br/>
            <br/>
            <label for="horario">horário: </label>
            <select name:Horario class="form-control">
                <option value="base">-hora-</option>
                <Option value="9">9:00</Option>
                <Option value="10">10:00</option>
                <Option value="11">11:00</Option>
                <Option value="12">12:00</option>
                <Option value="13">13:00</Option>
                <Option value="14">14:00</option>
                <Option value="15">15:00</option>
                <Option value="16">16:00</option>                                                                                                                                                                             
                <Option value="17">17:00</option>
            </select>
            <br/>            <br/>

            <label for="Forma de pagamento">Forma de pagamento: </label>
            <select class="form-control" id="subject" placeholder="Mensagem" required="required" data-validation-required-message="Please enter your message">         
                <option value="base">-forma de pagamento-</option>                                   
                <option value="dinheiro">dinheiro</option>
                <option value="pix">pix</option>
                <option value="cartão">cartão</option>
            </select>
            <p class="help-block text-danger"></p>
            <label for="cortes">Serviço:</label>
            <select name:Cortes class="form-control">
                    <option value="base">-Serviço-</option>
                    <Option value="R$9.99">Corte de cabelo</Option>
                    <Option value="R$13.99">Cabelos lisos</option>
                    <Option value="R$17.99">Barba Shave</Option>
                    <Option value="R$10.99">Lavagem de Cabelo</option>
                    <Option value="R$14.99">Facial</Option>
                    <Option value="R$18.99">Corte de casamento</option>
                    <Option value="R$11.99">Cabelo colorido</option>
                    <Option value="R$15.99">Shampoo</option>                                                                                                                                                                             
                    <Option value="R$19.99">Arrumar</option>
                    <Option value="R$12.99">Barbear Cabelo:</option>
                    <Option value="R$16.99">Guarnição da Barba</option>                                                                                                                                                                             
                    <Option value="R$20.99">Massagem</option>
                </select>
                <br/>
                <br/>
                <label for="dia" style="margin-left: 0px;">data:</label>
                <select name:dia class="form-control">
                    <option value="base">- dia -</option>
                    <Option value="1">1</Option>
                    <Option value="2">2</option>
                    <Option value="3">3</Option>
                    <Option value="4">4</option>
                    <Option value="5">5</Option>
                    <Option value="6">6</option>
                    <Option value="7">7</option>
                    <Option value="8">8</option>                                                                                                                                                                             
                    <Option value="9">9</option>
                    <Option value="10">10</Option>
                    <Option value="11">11</option>
                    <Option value="12">12</Option>
                    <Option value="13">13</option>
                    <Option value="14">14</Option>
                    <Option value="15">15</option>
                    <Option value="16">16</option>
                    <Option value="17">17</option>                                                                                                                                                                             
                    <Option value="18">18</option>
                    <Option value="19">19</Option>
                    <Option value="20">20</option>
                    <Option value="21">21</Option>
                    <Option value="22">22</option>
                    <Option value="23">23</Option>
                    <Option value="24">24</option>
                    <Option value="25">25</option>
                    <Option value="26">26</option>                                                                                                                                                                             
                    <Option value="27">27</option>
                    <Option value="28">28</option>
                    <Option value="29">29</option>
                    <Option value="30">30</option>                                                                                                                                                                             
                    <Option value="31">31</option>    
                </select>
                <label for="mês"></label>
                <select name:mês class="form-control">
                    <option value="base">- mês -</option>
                    <Option value="1">Janeiro</Option>
                    <Option value="2">Fevereiro</option>
                    <Option value="3">Março</Option>
                    <Option value="4">Abril</option>
                    <Option value="5">Maio</Option>
                    <Option value="6">Junho</option>
                    <Option value="7">julho</option>
                    <Option value="8">Agosto</option>                                                                                                                                                                             
                    <Option value="9">Setembro</option>
                    <Option value="10">Outubro</option>
                    <Option value="11">Novembro</option>                                                                                                                                                                             
                    <Option value="12">Dezembro</option>
                </select>
                <br/>
                <br/>
                <div>
                    <input type="submit" name="submit" value="Agendar">
                </div>
        </form>

        <?php
            
        /*declaração de variáveis*/
        $user = @$_REQUEST['user'];
        $pass = @$_REQUEST ['pass'];
        $submit = @$_REQUEST['submit'];
        
        /*variáveis que vão guardar os dados dos usuários*/
        $user1 = 'teste';
        $pass1 = '123';
        $user2 = 'teste';
        $pass2 = '123';

        if($submit){
            if($user == "" || $pass == ""){
                echo"<script: alert('por favor, preencha todos os campos'); </script>";
            }

            /*caso usuário e senha não estejam vazios*/

            else{
                if(($user == $user1 && $pass == $pass1) || ($user == $user2 && $pass == $pass2)){
                    session();
                    $_SESSION['usuario'] = $user;
                    $_SESSION['senha'] = $pass;
                    header("location:  painel.html");
                }

                else{
                    echo "<script>alert('usuário e/ou senha inválido(s), Tente novamente!');</script>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
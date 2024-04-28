<div class="card w2 h2 flex row center" id="card">

    <div class="card-element h9 w6">

        <img class="w10" src="<?=ROOT?>assets/img/logos/logo_colored_transparent.png" alt="ícone de login"><br>
        
    </div>

    <div class="card-element h9 w4">
        <h1>Bem vindo!</h1>
        <p>Faça login abaixo para acessar o sistema</p>
        <form class="w8" action="<?=ROOT?>/" method="POST">
            <div class="input-group">
                <label for="email">E-mail</label>
                <input name="email" type="email" id="email" placeholder="E-mail" required>
            </div>
            
            <div class="input-group">
                <label for="senha">Senha</label>
                <input name="senha" minlength="3" type="password" id="password" placeholder="Senha" required>
            </div>
            
            <input class="card-btn verde" type="submit" value="Acessar">
            <br>
            <!-- <a href="<?=ROOT?>/login/nova-senha">Esqueci minha senha</a> -->
        </form>
            
                
    </div>
    
    <hr color="gainsboro" size="1px">
    <div class="card-element h1 w10">
        <p>Caso esteja com dificuldades para acessar, entre em contato com seu gestor.</p>
            
    </div>
</div>
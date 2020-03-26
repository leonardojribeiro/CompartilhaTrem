<div class="container-fluid">
    <div class="row">
        
        <div class="col-md-4"></div>
        <div class="col-md-4 redefinirsenha">
            <form method="post" action="">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="pergunta">Pergunta:</label>
                        <textarea id="pergunta" rows="2" class="form-control"><?php echo $_SESSION['pergunta']; ?></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <label for="resp">Resposta</label>
                        <input type="text" id="resp" name="resp" class="form-control" placeholder="Digite sua resposta aqui" autofocus="" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="submit" name="enviar2" value="enviar" class="form-control">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
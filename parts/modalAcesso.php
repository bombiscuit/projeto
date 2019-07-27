<!-- Modal -->
<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" style="top: 15%">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Acesso do usuário</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    
      <form action="?acesso" method="post">
          
          
          <div class="modal-body">
        
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="cadastro-tab" data-toggle="tab" href="#cadastro" role="tab" aria-controls="home" aria-selected="true">Cadastro</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="profile" aria-selected="false">Login</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <?php include_once "parts/tab-pane.php"?>
            </div>

          </div>
          <div class="modal-footer">
            <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
          
          
      </form>
    </div>
  </div>
</div>
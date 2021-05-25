<!-- -Modal de login -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog"> <div class="modal-content">
      <div class="modal-header"> 
        <h5 class="modal-title" id="exampleModalLabel">Entrar no Painel</h5> 
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div> <div class="modal-body"> 
        <form action="/auth/" method="POST">
            @csrf
        <div class="mb-3 row" style="margin-top: 10px;"> 
          <label for="inputPassword" class="col-sm-2 col-form-label">E-mail:</label>
          <div class="col-sm-10"> <input type="email" class="form-control" name="usermail" required=""> 
        </div>
      </div>
      <div class="mb-3 row"> 
        <label for="inputPassword" class="col-sm-2 col-form-label">  Password:</label> 
        <div class="col-sm-10"> <input type="password" class="form-control" name="passkey" required="">
      </div>
      </div>
      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-primary" value="Entrar">
        </form>
      </div> 
      </div> 
    </div> 
  </div>
<!-- -Modal de login -->
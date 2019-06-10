<div id="create" class="modal fade" role="dialog">
 <div class="modal-dialog">
 <div class="loader hidden">
    </div>
  <div class="modal-content" >
   <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
     <div class="modal-body" id="leila2">
     <!-- message erreur -->
    <p class=" text-center alert alert-danger hidden" id="error"><ul></ul></p>
    <div id="savesss"></div>
     <form class="form-horizontal" enctype="multipart/form-data" method="POST" role="form" id="myform1">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('theme_titre') ? ' has-error' : '' }} row add">
                            <label for="name" class="control-label col-sm-2">Titre theme</label>

                            <div class="col-sm-10">
                                <input id="theme_titre" type="text" class="form-control" name="theme_titre" value="{{ old('theme_titre') }}" required autofocus>
                <p class=" text-center alert alert-danger hidden" id="error"></p>                               
                            </div>
                        </div>
                         <div class="form-group{{ $errors->has('theme_titre') ? ' has-error' : '' }} row add">
                            <label for="name" class="control-label col-sm-2">Image du theme</label>

                           <div class="col-sm-10">
                               <input id="images" type="file" class="form-control" name="theme_logo" value="{{ old('theme_image') }}" required autofocus>
                <p class=" text-center alert alert-danger hidden" id="error"></p>                               
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('theme_date') ? ' has-error' : '' }}" id="divdate">
                            <label for="theme_titre"class="control-label col-sm-2">Date de publication</label>

                            <div class="col-sm-10">
                            <!--<input id="theme_date" type="date" class="form-control" name="theme_date" value="{{ old('theme_date') }}" required> -->
                                <input id="datepicker1" type="text" class="form-control" name="date_publication" value="{{ old('theme_date') }}" required>
                              
                                                           </div>
                        </div>
                
                       
                        

                        <div class="form-group">
                            <label for="resume" class="control-label col-sm-2">Resume du theme</label>

                            <div class="col-sm-10">
                                <textarea name="resume" id="resume" class="form-control" rows="5" value="{{ old('resume') }}" required></textarea>
                                <p class="error text-center alert alert-danger hidden" id="error"></p>
                            </div>
                        </div>
                    </form>
                    <!--  Message d'enregistrement reussi-->
                    <div class="hidden" id="id_success">
     <p class="alert alert-success">Enregistrement reussie </p>
      <br>
      <center> <button type="button" id="success_add" class="btn btn-warning" data-dismiss="modal"></span class="glyphicon glyphicon-remobe"></span>OK</button></center>
                </div>               
      </div>
       <div class="modal-footer">
      
          <button type="submit" id="add" class="btn btn-success"></span class="glyphicon glyphicon-plus"></span>Enregistrer</button>
          <button id="themepubli" type="button"  class="btn btn-primary"></span class="glyphicon glyphicon-remobe"></span>PUBLIER THEME</button>
          <button type="button" id="cancel_modal" class="btn btn-warning" data-dismiss="modal"></span class="glyphicon glyphicon-remobe"></span>annuler</button>
        </div>
</div>
</div>
</div>
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Vista de Departamentos /&nbsp;&nbsp;</h3><a href="{!!URL::to('/departamento/create')!!}" class="btn btn-primary primary btn-xs" role="button">Crear Departamentos</a>

                  
                  <div class="box-tools">
                    <div class="input-group" style="width: 150px;">
                      <input type="text" name="table_search" class="form-control input-sm pull-right" placeholder="Search">
                      <div class="input-group-btn">
                        <button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
                      </div>
                    </div>
                  </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <thead>
                      <th>DEPARTAMENTO</th>
                      <th><div align="center"><span class="glyphicon glyphicon-cog"></span><span class="glyphicon glyphicon-wrench"></span></div></th>
                    </thead>
                    @foreach($depts as $dept)
                    <tbody>
                        <td>{{$dept->departamento}}</td>
                        <td align="center">
                        <a href="{!!URL::to('/usuario/create')!!}" class="btn btn-info primary btn-xs" role="button">Ver</a><br>  
                        <a href="{!!URL::to('/usuario/create')!!}" class="btn btn-warning primary btn-xs" role="button">Editar</a><br>
                        <a href="{!!URL::to('/usuario/create')!!}" class="btn btn-danger primary btn-xs" role="button">Eliminar</a>  
                        </td>
                    </tbody>
                    @endforeach
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
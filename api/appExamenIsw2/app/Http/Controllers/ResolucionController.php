<?php

namespace App\Http\Controllers;

use App\Resolucion;
use App\Estudiante;
use Crypt;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ResolucionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getDetalles()
     {
               $sql = "select z.id,z.nombre, z.identificacion, z.estado_excluido, y.descripcion, w.categoria , (SELECT a.monto FROM appexamenisw2.categorias a,
                        appexamenisw2.beneficios e, appexamenisw2.estudiantes b, appexamenisw2.beneficio__estudiantes c
                        where a.descripcion = 'aeo'
                        and b.id = c.estudiante_id
                        and e.id = c.beneficio_id
                        and a.id = e.categoria_id
                        and b.id = z.id) as 'aeo' ,
                        (SELECT a.monto FROM appexamenisw2.categorias a,
                        appexamenisw2.beneficios e, appexamenisw2.estudiantes b, appexamenisw2.beneficio__estudiantes c
                        where a.descripcion = 'alim'
                        and b.id = c.estudiante_id
                        and e.id = c.beneficio_id
                        and a.id = e.categoria_id
                        and b.id = z.id) as alim,
                        (SELECT a.monto FROM appexamenisw2.categorias a,
                        appexamenisw2.beneficios e, appexamenisw2.estudiantes b, appexamenisw2.beneficio__estudiantes c
                        where a.descripcion = 'pare'
                        and b.id = c.estudiante_id
                        and e.id = c.beneficio_id
                        and a.id = e.categoria_id
                        and b.id = z.id) as pare
                        from appexamenisw2.estudiantes z, appexamenisw2.beneficios y, appexamenisw2.categorias w,
                        appexamenisw2.beneficio__estudiantes v
                        where z.id = v.estudiante_id
                        and y.id = v.beneficio_id
                        and w.id = y.categoria_id
                        group by z.id,z.nombre, z.identificacion, z.id, z.estado_excluido, y.descripcion,w.categoria
                        order by z.id;";

                        $arrayDetalles = DB::connection('mysql')->select($sql);
                        $ab = array();
                        $ab = $arrayDetalles;
                        foreach($ab as $t){
                          $t->aeo = Crypt::decrypt($t->aeo);
                          $t->alim = Crypt::decrypt($t->alim);
                          $t->pare = Crypt::decrypt($t->pare);
                          $t->categoria = Crypt::decrypt($t->categoria);
                          //$t->monto = Crypt::decrypt($t->monto);
                          //return $t->monto;
                        }
               return json_encode($ab);
     }
    public function index()
    {
        $resoluciones = Resolucion::with('periodo')->get();
        return json_encode($resoluciones);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Resolucion $resolucion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Resolucion $resolucion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
      $this->validate($request, [
        'id' => 'required|min:1'
    ]);
      $estudiante = Estudiante::find($id);
      if($estudiante){
        if($estudiante->estado_excluido == 1){
          $estudiante->estado_excluido = 0;
          if($estudiante->save()){
              return json_encode($estudiante->estado_excluido);
          }else{
            return json_encode('ERROR: API->ResolucionController->Function Update->App\Estudiante->Save() *REVISAR*');
          }
        }else{
          $estudiante->estado_excluido = 1;
          if($estudiante->save()){
              return json_encode($estudiante->estado_excluido);
          }else{
            return json_encode('ERROR: API->ResolucionController->Function Update->App\Estudiante->Save() *REVISAR*');
          }
          }
      }else{
        return json_encode('No se encontro estudiante con ese ID');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resolucion $resolucion)
    {
        //
    }
}

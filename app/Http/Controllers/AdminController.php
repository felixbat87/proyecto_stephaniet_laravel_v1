<?php

namespace App\Http\Controllers;
//importacion del modelo de tabla admin con bd en la carpeta migracion
use\App\Models\admin;
//importacion del modelo de tabla muci2 donde estan los registros de usuarios con bd en la carpeta migracion
use\App\Models\muci2;
//importacion del modelo de tabla hora de marcaciones con bd en la carpeta migracion
use\App\Models\hora;
use Illuminate\Http\Request;
//importando libreria de encryptacion
use Illuminate\Support\Facades\Crypt;
//use DB de database
use DB;
//biblioteca de PDF
use PDF;

class AdminController extends Controller
{
    //VALIDANDO LOGIN USUARIO ADMIN
    public function validar(Request $request){
    // referenciando campo del form html
      $admin_user=$request->txt_usuario;
      $admin_pass=$request->txt_pass;
      //creando la variable consulta del modelo 
      $consulta_admin=admin::where('USUARIO',$admin_user)
      ->where('PASSWORD',$admin_pass)
      ->get();
      //verificanco que exita dicha consulta
      if(count($consulta_admin)==1){
        foreach($consulta_admin as $datos){
          $admin=$datos->USUARIO;
          $admin_pd=$datos->PASSWORD;
          $request->session()->put("admin_key", $admin_user);
          return redirect('Panel_admin');
        }
      }else{
      //en caso de no regreesa el valor error
        return back()->with("error","Al iniciar Sesion verifique los datos ingresados" );
      }
    }
    //VISTA PANEL ADMIN
    public function admin_panel(){
        //recupero sessiones 
        if(session()->get('admin_key') !=""|| session()->get('admin_key')!=null){
            return view('admin_panel');
        }else{
            return redirect('/');
        }
    }
    //VISTA CREAR USUARIO
    public function crear_usuario(){
        //recupero sessiones para verificar que exitan para poder crear usuario
        if(session()->get('admin_key') !=""|| session()->get('admin_key')!=null){
            return view('crear_usuario');
        }else{
            return redirect('/');
        }
    }

   //guardar usuario
   public function guradar_usuario(Request $request){
    // campos de correo de form valido primero que no exista el correo al insertar el nuevo usuario
        $correo=$request->txtEmail;
        $tabla_user=muci2::where('CORREO',$correo)
        ->get();
    if(count($tabla_user)==1){
     return back()->with("error","Se registro un correo con ese usuario" );
    }else{
    // procedo a gurdar una vez verifico que no existe el correo en la db
       $guardar = new muci2();
       $guardar->NOMBRE=$request->txtNombre;
       $guardar->APELLIDO=$request->txtApellido;
       $guardar->NOMBRE_USUARIO=$request->txtNombreU;
       $guardar->CORREO=$request->txtEmail;
       $guardar->DIRECCION=$request->txtDireccion;
       $guardar->CARGO=$request->txtCargo;
       $guardar->PASSWORD=$request->txtpa;
       $guardar->save();
       return redirect('listado');
    }
   }
    //vista cargar usuario
    public function cargar_usuario(){
        if(session()->get('admin_key') !=""|| session()->get('admin_key')!=null){
         $registros=muci2::all();
         return view('listado_admin',array("registros"=>$registros));
        }else{
            return redirect('/');
        }
    }
    //eliminar usuario
    public function eliminar_usuario($id){
        //doble eliminacion ya que las tablas estan unidas y referenciadas
        $eleiminar_tbl_hora=hora::where("USUARIO_ID",$id)->delete();
        $borrar=muci2::find($id)->delete();
        return redirect('listado');
    }
   //vista de vizualizar un usuario solo cargando datos por el id
    public function ver($id){
       $id=Crypt::decrypt($id);
       $vizualizar=muci2::where('CODIGO_USUARIO',$id)->get();
       $multiconsulta=DB::table('muci2')
       ->select('FECHA','ENTRADA','SALIDA','HORAS_TRABAJADAS','HORAS_EXTRAS')
       ->join('hora', 'muci2.CODIGO_USUARIO', '=', 'hora.USUARIO_ID')
       //->where('USUARIO_ID',$id)
       ->where('CODIGO_USUARIO', '=' , $id)->orderBy('FECHA','desc')
       ->take(15)
       ->get();
       $calculo_comp= DB::table('hora')
       ->select(DB::raw('SUM(HORAS_EXTRAS) AS HORAS_COMP'))
       ->where('USUARIO_ID',$id)->get();
       $horas_trabajadas=DB::table('hora')
       ->select(DB::raw('SUM(HORAS_TRABAJADAS) AS HORAS'))
       ->where('USUARIO_ID',$id)->get();
       return view('vizualizar',array("vizualizar"=>$vizualizar,"id"=>$id,"multiconsulta"=>$multiconsulta,"calculo_comp"=>$calculo_comp,"horas_trabajadas"=>$horas_trabajadas));
    } 
    public function pdf_visualizadorWeb($id){
       //visualiza web definir el mismo valor que en el de vista
       $dato="PDF IMPRIMER";
       $id=Crypt::decrypt($id);
       $vizualizar=muci2::where('CODIGO_USUARIO',$id)->get();
       $multiconsulta=DB::table('muci2')
       ->select('FECHA','ENTRADA','SALIDA','HORAS_TRABAJADAS','HORAS_EXTRAS')
       ->join('hora', 'muci2.CODIGO_USUARIO', '=', 'hora.USUARIO_ID')
        //->where('USUARIO_ID',$id)
       ->where('CODIGO_USUARIO', '=' , $id)->orderBy('FECHA','desc')
       ->take(15)
       ->get();
       $calculo_comp= DB::table('hora')
       ->select(DB::raw('SUM(HORAS_EXTRAS) AS HORAS_COMP '))
       ->where('USUARIO_ID',$id)->get();
       $horas_trabajadas=DB::table('hora')
       ->select(DB::raw('SUM(HORAS_TRABAJADAS) AS HORAS'))
       ->where('USUARIO_ID',$id)->get();
       return PDF::loadView('imprimir',array("vizualizar"=>$vizualizar,"id"=>$id,"multiconsulta"=>$multiconsulta,"calculo_comp"=>$calculo_comp,"horas_trabajadas"=>$horas_trabajadas))->stream('imprimir');
      }
    // Descargar PDF formato horas
      public function pdf_descargar(){
       $dato="PDF IMPRIMER";
       return PDF::loadView('vista-pdf',array("dato"=>$dato))->download('vista-pdf.pdf');
      }
   






}

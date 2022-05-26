<?php
namespace App\Http\Controllers;
//importacion del modelo de tabla muci2 de registros de usuario con bd en la carpeta migracion
use\App\Models\muci2;
//importacion del modelo hora
use\App\Models\hora;
use Illuminate\Http\Request;
//uso de libreria DB
use DateTime;
//uso de libreria BD
use DB;
//uso de libreria de encriptacion
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
{
    //VALIDANDO LOGIN USUARIO
  public function login(Request $request){

    $usuario=$request->Inputusuario;
    $password=$request->Inputpassword;

    $validacion=muci2::where('NOMBRE_USUARIO',$usuario)
    ->where('PASSWORD',$password)
    ->get();

    $validacion2=muci2::where('CORREO',$usuario)
    ->where('PASSWORD',$password)
    ->get();

    
    if(count($validacion)==1){
        foreach($validacion as $consulta){
         $nusuario= $consulta->NOMBRE_USUARIO;
         $pass=$consulta->PASSWORD;
         $id=$consulta->CODIGO_USUARIO;
         $request->session()->put("USUARIOSY", $nusuario);
         $request->session()->put("PASSSY",$pass);
         $request->session()->put("ID",$id);

         return redirect('panel');
        }
   }elseif(count($validacion2)==1){
         foreach($validacion2 as $consulta2){
          $nusuario= $consulta2->NOMBRE_USUARIO;
          $pass=$consulta2->PASSWORD;
          $id=$consulta2->CODIGO_USUARIO;
          $request->session()->put("USUARIOSY", $nusuario);
          $request->session()->put("PASSSY",$pass);
          $request->session()->put("ID",$id);
          return redirect('panel');
        }
   }else{
    return back()->with("error","Al iniciar Sesion verifique los datos ingresados" );
   }
}
//VISTA PANEL USUARIO
   public function panel(){
   if(session()->get('USUARIOSY') !=""|| session()->get('USUARIOSY')!=null){
    $consulta_perfil=muci2::where('CODIGO_USUARIO',session()->get('ID'))->get();
        return view ('panel_usuario',array("consulta_perfil"=>$consulta_perfil));
    }else{
        return redirect('/');
    }
  }

//VISTA SALIR USUARIO
  public function logout(){
    session()->flush();
    return redirect('/');
  }

  //recuperar password
  public function recuperar(){
    return view('recuperar');
  }
  public function correo(Request $request){
    $campo_correo=$request->txt_email;
    $consul=muci2::where('CORREO',$campo_correo)->get();
    if(count($consul)==1){
    return view('vista_pass',array("consul"=>$consul));
    }else{
     return back()->with("error","Este correo no existe en la base de datos" );
    }
  }
  //vista perfil--carga datos
  public function perfil_user(){
   if(session()->get('USUARIOSY') !=""|| session()->get('USUARIOSY')!=null){
       $consulta_perfil=muci2::where('CODIGO_USUARIO',session()->get('ID'))->get();
      return view ('perfil_usuario',array("consulta_perfil"=>$consulta_perfil));
  }else{
      return redirect('/');
  }
  }
  // Actulizar Perfil--carga-edita
  public function Actulizar_user($id){
    if(session()->get('USUARIOSY') !=""|| session()->get('USUARIOSY')!=null){
      $id=Crypt::decrypt($id);
      $consulta=muci2::where('CODIGO_USUARIO',$id)->get();
      return view ('actulizar_perfil',array("consulta"=>$consulta,"id"));
  }else{
      return redirect('/');
  }
  }
  //edita
  public function Actulizar_datos(Request $request){
  
  if(session()->get('USUARIOSY') !=""|| session()->get('USUARIOSY')!=null){
    $consulta_actulizando=muci2::find(session()->get('ID'));
    $consulta_actulizando->NOMBRE=$request->nombre;
    $consulta_actulizando->APELLIDO=$request->apellido;//TRATANDO DE ENTRAR;
    $consulta_actulizando->NOMBRE_USUARIO=$request->nombre_usuario;
    $consulta_actulizando->PASSWORD=$request->password;
    $consulta_actulizando->save();
    return redirect('perfil');
  }else{
      return redirect('/');
  }    
  }
  //Marcacion--carga-historial
  public function Marcacion(Request $request,$id){
    if(session()->get('admin_key') !=""|| session()->get('admin_key')!=null){
      $request->session()->put("code",$id);
      return view ('marcacion');
  }else{
      return redirect('/');
  }
  }
//HORA MARCACION

  public function hora_marcacion(Request $request){
    $hora_save= new hora();
    $entrada=$request->entrada;
    $salida=$request->salida;
    //hacer diferencia porentradas
    
    $comienzo=new DateTime($entrada);//entrando data y cambiando
    //variable fecha para la tabla
    $fecha=$comienzo->format("d/m/Y");
    //
    $data_entrada=$comienzo->format('h:i:s a');//estableciendo formato am-pm a db horas entrada
    $final=new DateTime($salida);//salida
    $data_salida=$final->format('h:i:s a');//salida bd hora-salida
    $calculo=$comienzo->diff($final)->format("%h");//formato calculo horas laborales a database horas laboradas
    $horas_extras=$calculo-8;//calculos horas extras a db condicional extras
    if($horas_extras<0){
     $horas_extras2=(($horas_extras)*-1);
      $mensaje="Usted debe ".$horas_extras2." Laborales de las 8 Reglamentarias"; //insert data
      $horas_extras=0;// a db condicional
    }else{
      //el otro insert
      $horas_extras;
      $mensaje="******";//aligado al if()
    }
    $hora_save->USUARIO_ID=session()->get("code");
    $hora_save->FECHA=$fecha;
    $hora_save->ENTRADA=$data_entrada;
    $hora_save->SALIDA=$data_salida;
    $hora_save->HORAS_TRABAJADAS=$calculo;
    $hora_save->HORAS_EXTRAS=$horas_extras;
    $hora_save->COMENTARIOs=$mensaje;
    $hora_save->save();
    return redirect('Panel_admin') ;
  }

  public function usuario_horas(){
  if(session()->get('USUARIOSY') !=""|| session()->get('USUARIOSY')!=null){
    $consulta_perfil=muci2::where('CODIGO_USUARIO',session()->get('ID'))->get();
    ////
    $usuario_marcacion=hora::select('*')
    ->where('USUARIO_ID',session()->get("ID"))
    ->orderBy('FECHA','desc')
    ->take(15)->get();
    //
    $compensatorio=DB::table('hora')
    ->select(DB::raw('SUM(HORAS_EXTRAS) AS HORAS_COMP'))
    ->where('USUARIO_ID',session()->get("ID"))->get();
    //
    $horas_trabajadas=DB::table('hora')
       ->select(DB::raw('SUM(HORAS_TRABAJADAS) AS HORAS'))
       ->where('USUARIO_ID',session()->get("ID"))->get();
    return view ('hora',array("usuario_marcacion"=>$usuario_marcacion,"compensatorio"=>$compensatorio,"horas_trabajadas"=>$horas_trabajadas,"consulta_perfil"=>$consulta_perfil));
  }else{
    return redirect('/');
  }
}
}






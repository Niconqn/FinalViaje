<?php

//incluir las clases


//crear objeto empresa con datos precargados.

//$objEmpresa= 

{

    //SECCION EMPRESA
     

    //OPCIONES PARA: 1 INGRESAR  2 MODIFICAR  3 ELIMINAR INFO D LA EMPRESA
    }


    //menu para elegir mostrar seccion empresa o seccion viaje



    function SeccionMenuEmpresa()
    {
        do {
            echo "********************************\n";
            echo "1- INGRESAR EMPRESA\n";
            echo "2- MODIFICAR EMPRESA\n";
            echo "3- MOSTRAR EMPRESA \n";
            echo "4- ELIMINAR EMPRESA\n";
            echo "5- Salir\n";
            
            echo "OPCION: ";
            $opcion = trim(fgets(STDIN));

            switch ($opcion) {
                case 1:              //Ingresar


                        //SI HAY UNA EXISTENTE AVISAR. SI NO:

                     //la consigna habla solo de una empresa que registra informacion. ingresar modificar y eliminar informacion DE LA EMPRESA de viajes

                    echo "Ingrese el nombre de la empresa: \n" ;
                    $nombreEmp = trim(fgets(STDIN));

                    echo "Ingrese la dirección: \n";

                    $direccionEmp = trim(fgets(STDIN));



                    $objEmpresa->IngresarEmp($nombreEmp, $direccionEmp);


                        echo "La empresa ha sido registrada \n";




                    break;

                case 2:   //modificar datos de la empresa (idempresa, nombreempresa, direccion)


                
                    //si no existe ninguna empresa registrada avisar. si existe una hacer:


                    echo "Ingrese el nombre nuevo de la empresa: ";

                    $nombreEmp = trim(fgets(STDIN));


                    echo "Ingrese la direccion nueva de la empresa: ";

                    $direccionEmpresa = trim(fgets(STDIN));

                    $objEmpresa->setNombre($nombreEmpresa);


                    $objEmpresa->setDireccion($direccionEmpresa);

                        echo "La empresa ha sido correctamente modificada.\n";


                  




                    break;
                case 3:
                            //opcion para mostrar los datos de la empresa (tostring ordenado y bonito)


                        echo $objEmpresa;



                    break;
                case 4:        //eliminar empresa


                    echo "Ingrese el ID de la empresa a eliminar: ";

                    $id = trim(fgets(STDIN));

                    //si existe, funcion eliminar  en clase empresa  

                    $objEmpresa->eliminarEmpresa();       //no se muy bien la forma de aplicarlo en la base de datos











            }
        } while ($opcion != 5);
    }

    
       {
        do { 
            echo "************** SECCION VIAJES **********\n";           //   La consigna indica INGRESAR MODIFICAR Y ELIMINAR info de un VIAJE

            echo "1- AÑADIR UN VIAJE\n";
            
            echo "2- MODIFICAR UN Viaje\n";

            echo "3- ELIMINAR UN VIAJE\n";

            echo "4- MOSTRAR UN VIAJE \n";

          

            echo "5- SALIR\n";
            
            echo "Opcion: ";
            $opcion = trim(fgets(STDIN));



            switch ($opcion) {
                case 1:                     //Añadir un viaje  (las variables de viaje en la BD son  vDestino vCantMaxPasajeros idEmpresa, vImporte y rNumeroEmpleado) 

                    echo "\n************************" . "\n";
                    echo "Ingresar destino: ";
                    $destino = trim(fgets(STDIN));



                    echo "Ingresar la cantidad max. de pasajeros: ";
                    $cantMaxPasajeros = trim(fgets(STDIN));


                    echo "Ingresar el ID de la empresa a cargo: ";
                    $idEmpresa = trim(fgets(STDIN));


                    echo "Ingresar el numero de empleado del Responsable: ";
                    $nroEmpleado = trim(fgets(STDIN));


                    echo "Ingresar el importe del viaje: ";
                    $importe = trim(fgets(STDIN));

            
                    $ViajeNuevo = new Viaje();

                    $unViaje->CargarViaje ($destino, $cantMaxPasajeros, $importe, $idEmpresa, $nroEmpleado);
                  

                     echo "Viaje insertado correctamente.\n";

                   
                    break;



                case 2:             //BUSCAR VIAJE SEGUN ID

                    echo "Ingresar el ID del Viaje: ";
                    $idViaje = trim(fgets(STDIN));

                    //etc



                    break;
                case 3:
                    

                    echo "Ingrese el ID del Viaje para modificacion: ";
                    $idViaje = trim(fgets(STDIN));
                  

                    //if ($Viaje->buscar($idViaje)) {
                        echo "Viaje encontrado:\n" . $Viaje;
                        echo "\n-----------------------------" . "\n";



                        echo "Ingresar el nuevo destino: ";
                        $destino = trim(fgets(STDIN));


                        echo "Ingresar la nueva cantidad max. de pasajeros: ";
                        $cantMaxPasajeros = trim(fgets(STDIN));

                        echo "Ingresar el nuevo nro de Responsable: ";
                        $nroEmpleado = trim(fgets(STDIN));

                        echo "Ingresar el ID actualizado de empresa: ";

                        $idEmpresa = trim(fgets(STDIN));
                        echo "Ingresar el importe nuevo: ";
                        $importe = trim(fgets(STDIN));


                         $Viaje->setIdEmpresa($idEmpresa);
                         
                        $Viaje->setNumeroEmpleado($numEmpleado);

                        $Viaje->setCantMaxPasajeros($cantMaxPasajeros);

                        

                        $Viaje->setDestino($destino);

                        $Viaje->setImporte($importe);
                      

                      
                            echo "Viaje modificado correctamente.\n";


                    break;
                case 4:                //ELIMINAR VIAJE S/ ID
                   

                    break;
                
                case 5: 
                   
                    break;
                default:
                    echo "la opcion no existe.\n";
                    break;
            }
        } while ($opcion != 6);
    }



<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Configuracion;
use Symfony\Component\HttpFoundation\Request;

class RegistroConfiguracionController extends Controller
{
    
    public function mostrarAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        $conf = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
        
        return $this->render('MTDAsistenciaBundle:Asistencia:registroConfiguracion.html.twig', array("proyectos"=> $proyectos, "conf"=> $conf));
    }
    
    public function registrarAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $conf = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
        $conf->setActivo(FALSE);
        
        $configuracion = new Configuracion();

        $horaIngresoManana  = $this->get('request')->request->get('horaIngresoManana');
        $horaSalidaManana   = $this->get('request')->request->get('horaSalidaManana');
        $horaIngresoTarde   = $this->get('request')->request->get('horaIngresoTarde');
        $horaSalidaTarde    = $this->get('request')->request->get('horaSalidaTarde');
        $dias               = $this->get('request')->request->get('dias');

        $configuracion->setHoraIngresoManana(new \DateTime($horaIngresoManana));
        $configuracion->setHoraSalidaManana(new \DateTime($horaSalidaManana));
        $configuracion->setHoraIngresoTarde(new \DateTime($horaIngresoTarde));
        $configuracion->setHoraSalidaTarde(new \DateTime($horaSalidaTarde));
        $configuracion->setNumeroDias($dias);
        $configuracion->setActivo("TRUE");

        $em->persist($configuracion);

        $this->addFlash(
            'notice',
            'La configuracion para la asistencia fue registrada correctamente'
        );

        $em->flush();

        return $this->redirect($this->generateUrl('mtd_asistencia_operativos'));

    }
}
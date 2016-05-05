<?php

namespace MTD\AsistenciaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MTD\AsistenciaBundle\Entity\Configuracion;
use Symfony\Component\HttpFoundation\Request;
use MTD\SueldosSalariosBundle\Entity\Minimo;

class RegistroConfiguracionController extends Controller
{
    
    public function mostrarAction(Request $request)
    {
        
        $em = $this->getDoctrine()->getManager();
        $proyectos = $em->getRepository('MTDProyectoBundle:Proyecto')->findAll();
        $conf = $em->getRepository('MTDAsistenciaBundle:Configuracion')->findOneBy(array('activo'=>'TRUE'));
        
        $minimo = $em->getRepository('MTDSueldosSalariosBundle:Minimo')->findOneBy(array('activo'=>'TRUE'));
        $minimoNacional = $minimo->getValor();
        
        return $this->render('MTDAsistenciaBundle:Asistencia:registroConfiguracion.html.twig', array("proyectos"=> $proyectos, "conf"=> $conf, "minimoNacional"=> $minimoNacional));
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
        
        $minimoNacional = $this->get('request')->request->get('minimo');
        $minimo = $em->getRepository('MTDSueldosSalariosBundle:Minimo')->findOneBy(array('activo'=>'TRUE'));
        if($minimo->getValor() != $minimoNacional){
            $minimo->setActivo(FALSE);
            $minimoNuevo = new Minimo();
            $minimoNuevo->setValor($minimoNacional);
            $minimoNuevo->setActivo(TRUE);
            $em->persist($minimoNuevo);
        }

        $this->addFlash(
            'notice',
            'La configuracion fue registrada correctamente'
        );

        $em->flush();

        return $this->redirect($this->generateUrl('mtd_asistencia_configuracion'));

    }
}
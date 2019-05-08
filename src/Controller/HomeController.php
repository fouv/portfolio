<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('default/index.html.twig');
    }
}

class PdfController extends AbstractController
{
  /**
   * @Route("/cv_reactualise", name="cv")
   */
    public function downloadAction()
    {
        $pdfPath = $this->getParameter('dir.downloads').'doc/cvReactualise210419.pdf';

        return $this->file($pdfPath, 'sample.pdf', ResponseHeaderBag::DISPOSITION_INLINE);
    }
}

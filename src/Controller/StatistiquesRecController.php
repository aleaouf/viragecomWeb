<?php

namespace App\Controller;

use App\Entity\Reclamation;
use App\Entity\Reponse;
use App\Form\ReponseType;
use App\Repository\ReclamationRepository;
use App\Repository\ReponseRepository;
use App\Service\BadWordFilter;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/stats')]
class StatistiquesRecController extends AbstractController
{
    #[Route('/', name: 'app_stats_index', methods: ['GET'])]
    public function setCharts(): Response
    {
        $data = $this->reclamationsPieChart();
        $data1 = $this->reclamationsPieChartByType();

        $series = $this->reclamationsBarCharts();

        return $this->render('ReclamStats/reclamStats.html.twig', [
            'data' => json_encode($data),
            'data1' => json_encode($data1),
            'series' => json_encode($series),
        ]);
    }

    public function reclamationsPieChart(): array
    {
        $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamations = $repository->findAll();

        $groupedReclamations = [];
        foreach ($reclamations as $reclamation) {
            $status = $reclamation->getStatus();
            if (!isset($groupedReclamations[$status])) {
                $groupedReclamations[$status] = 1;
            } else {
                $groupedReclamations[$status]++;
            }
        }

        // Prepare data in an array format suitable for JSON encoding
        $data = [];
        foreach ($groupedReclamations as $status => $count) {
            $data[] = [
                'label' => $status,
                'value' => $count,
            ];
        }

        return $data;
    }

    public function reclamationsPieChartByType(): array
{
    $repository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reclamations = $repository->findAll();

        $groupedReclamations = [];
        foreach ($reclamations as $reclamation) {
            $type = $reclamation->getType();
            if (!isset($groupedReclamations[$type])) {
                $groupedReclamations[$type] = 1;
            } else {
                $groupedReclamations[$type]++;
            }
        }

        // Prepare data in an array format suitable for JSON encoding
        $data = [];
        foreach ($groupedReclamations as $type => $count) {
            $data[] = [
                'label' => $type,
                'value' => $count,
            ];
        }

        return $data;
}

    public function reclamationsBarCharts(): array
    {
        // Initialize the series for the chart
        $series = [];

        // Define the types for which you want to calculate average days
        $types = ['Evenement', 'Espace', 'MarketPlace'];

        // Get repositories for Reclamation and Reponse entities
        $reclamationRepository = $this->getDoctrine()->getRepository(Reclamation::class);
        $reponseRepository = $this->getDoctrine()->getRepository(Reponse::class);

        try {
         
            $reclamations = $reclamationRepository->findAll();

            foreach ($types as $type) {
                $nbr = 0;
                $sommeDays = 0;

                foreach ($reclamations as $reclamation) {
                    if ($reclamation->getType() === $type) {
                 
                        $reponses = $reponseRepository->findBy(['idReclamation' => $reclamation->getIdReclamation()]);

                        if (!empty($reponses)) {
                            foreach ($reponses as $rep) {
                                $recDate = $reclamation->getDateEnv()->format('Y-m-d');
                                $repDate = $rep->getDateRep()->format('Y-m-d');
                                $diff = strtotime($repDate) - strtotime($recDate);
                                $days = round($diff / (60 * 60 * 24));
                                $sommeDays += $days;
                                $nbr++;
                            }
                        } else {
                            $nbr++;
                        }
                    }
                }

                // Calculate the average days for the current type
                $averageDays = $nbr > 0 ? round($sommeDays / $nbr, 2) : 0;

                // Add data to the series array
                $series[] = ['type' => $type, 'averageDays' => $averageDays];
            }

            return $series;
        } catch (\Exception $e) {
            throw new \RuntimeException($e->getMessage());
        }
    }
}

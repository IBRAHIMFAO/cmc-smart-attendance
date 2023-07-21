<?php

namespace App\Http\Controllers;
use App\Models\Seance;

use Illuminate\Http\Request;

class EmploiDuTempsController extends Controller
{
    // public function index()
    // {
    //     // Récupérer les séances depuis la base de données
    //     $seances = Seance::all();

    //     // Créer un tableau pour stocker les séances par jour et créneau horaire
    //     $emploiDuTemps = [];

    //     // Parcourir les séances et organiser les données dans le tableau $emploiDuTemps
    //     foreach ($seances as $seance) {
    //         $day = $seance->day; // Remplacez "day" par le nom du champ dans votre modèle Seance qui représente le jour
    //         $timeslot = $seance->timeslot; // Remplacez "timeslot" par le nom du champ dans votre modèle Seance qui représente le créneau horaire

    //         if (!isset($emploiDuTemps[$day])) {
    //             $emploiDuTemps[$day] = [];
    //         }

    //         $emploiDuTemps[$day][$timeslot] = [
    //             'class' => $seance->class, // Remplacez "class" par le nom du champ dans votre modèle Seance qui représente la classe
    //             'subject' => $seance->subject, // Remplacez "subject" par le nom du champ dans votre modèle Seance qui représente la matière
    //             'teacher' => $seance->teacher, // Remplacez "teacher" par le nom du champ dans votre modèle Seance qui représente le professeur
    //         ];
    //     }

    //     // Les jours de la semaine
    //     $days = ['Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'];

    //     // Les créneaux horaires
    //     $timeslots = ['8h00-9h30', '9h30-11h00', '11h00-12h30', '14h00-15h30', '15h30-17h00'];

    //     // Retourner la vue avec les données de l'emploi du temps
    //     return view('testtable', compact('emploiDuTemps', 'days', 'timeslots'));
    // }
}

<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    Activity::create([    'name' => 'yoga',
        'description' => 'Lo yoga è una pratica antica che unisce mente, corpo e spirito attraverso posture, esercizi di respirazione e meditazione. Promuove la flessibilità, la forza e il rilassamento. Esistono diversi stili di yoga, come Hatha, Vinyasa e Ashtanga, ciascuno con un focus specifico.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    
    Activity::create([    'name' => 'pilates',
        'description' => 'Pilates è un sistema di esercizi fisici sviluppato all\'inizio del XX secolo da Joseph Pilates. Si concentra sul miglioramento della flessibilità, della forza, dell\'equilibrio e del controllo del corpo attraverso movimenti lenti e controllati, con particolare attenzione al core.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([
        'name' => 'spinning',    
        'description' => 'Il spinning è un allenamento cardiovascolare che si svolge su biciclette stazionarie, guidato da un istruttore e accompagnato da musica energizzante. Ideale per migliorare la resistenza cardiovascolare, la forza delle gambe e la resistenza muscolare.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([    'name' => 'crossfit',
        'description' => 'Il CrossFit è un programma di rafforzamento e condizionamento fisico creato da Greg Glassman nel 2000. Comprende una combinazione di esercizi di sollevamento pesi, ginnastica e allenamento cardiovascolare, progettati per migliorare la forza, la potenza e la resistenza generale.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([
        'name' => 'HIIT',    
        'description' => 'Il HIIT (High-Intensity Interval Training) è un tipo di allenamento cardiovascolare che alterna brevi periodi di esercizio anaerobico intenso con periodi di recupero meno intensi. È noto per migliorare la capacità aerobica e anaerobica, la salute metabolica e la perdita di grasso.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([    'name' => 'kickboxing',
        'description' => 'La kickboxing è uno sport da combattimento che combina calci e pugni, derivato da karate, Muay Thai e boxe occidentale. Ottimo per migliorare la coordinazione, la forza, la resistenza cardiovascolare e per ridurre lo stress.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([
        'name' => 'bodypump',
        'description' => 'Il BodyPump è un programma di allenamento con i pesi eseguito in gruppo, ideato dalla società Les Mills. Utilizza bilancieri regolabili e si concentra su alte ripetizioni per migliorare la resistenza muscolare e la tonificazione.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([
        'name' => 'aerobica',
        'description' => 'L\'aerobica è una forma di esercizio cardiovascolare che combina movimenti ritmici con stretching e allenamento della forza, spesso eseguita su musica vivace. Ottima per migliorare la capacità cardiopolmonare, la coordinazione e la resistenza muscolare.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([
        'name' => 'functional training',    'description' => 'Il functional training è un tipo di allenamento che mira a migliorare il movimento funzionale per le attività quotidiane. Utilizza una varietà di esercizi che coinvolgono movimenti naturali e multiarticolari, migliorando forza, equilibrio, flessibilità e coordinazione.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);
    Activity::create([    'name' => 'stretching',
        'description' => 'Il stretching è una forma di esercizio fisico che consiste nel mettere in tensione e allungare i muscoli per migliorare la flessibilità e l\'ampiezza dei movimenti. È essenziale per prevenire lesioni, migliorare la postura e ridurre lo stress muscolare.',
    'img'=> 'https://images.pexels.com/photos/4397840/pexels-photo-4397840.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'
    ]);

    }
}

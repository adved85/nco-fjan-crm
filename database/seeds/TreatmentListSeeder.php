<?php

use Illuminate\Database\Seeder;
use App\Models\TreatmentList;

class TreatmentListSeeder extends Seeder
{
    private $treatments = [
        "Կուրատիվ (բուժիչ) Վիրաբուժական արմատական",
        "Կուրատիվ (բուժիչ) Վիրաբուժական ոչ արմատական",
        "Կուրատիվ (բուժիչ) Քիմիաթերապիա Նեոադյուվանտ",
        "Կուրատիվ (բուժիչ) Քիմիաթերապիա Ադյուվանտ",
        "Կուրատիվ (բուժիչ) Թիրախային թերապիա",
        "Կուրատիվ (բուժիչ) Ճառագայթային",
        "Կուրատիվ (բուժիչ) Էնդոկրին (հորմոնալ)",
        "Կուրատիվ (բուժիչ) Բիսֆոսֆոնատով թերապիա",
        "Կուրատիվ (բուժիչ) Սիմպտոմատիկ",

        "Պալիատիվ (բուժիչ) Վիրաբուժական արմատական",
        "Պալիատիվ (բուժիչ) Վիրաբուժական ոչ արմատական",
        "Պալիատիվ (բուժիչ) Քիմիաթերապիա Նեոադյուվանտ",
        "Պալիատիվ (բուժիչ) Քիմիաթերապիա Ադյուվանտ",
        "Պալիատիվ (բուժիչ) Թիրախային թերապիա",
        "Պալիատիվ (բուժիչ) Ճառագայթային",
        "Պալիատիվ (բուժիչ) Էնդոկրին (հորմոնալ)",
        "Պալիատիվ (բուժիչ) Բիսֆոսֆոնատով թերապիա",
        "Պալիատիվ (բուժիչ) Սիմպտոմատիկ",

    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->treatments as $treatment) {
            TreatmentList::create(["name" => $treatment]);
        }
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;
    protected $table = "teams";
//    public $timestamps = false;
    protected $guarded = [''];

    public function users(){
        return $this->hasMany(User::class , 'command_id' , 'id');
    }

    public function rewards(){
        return $this->hasMany();
        // men tableni duzeldim burda

     /*
      * mukafatin atributlarini deyerdin
      * adi
      * sekli
      * slug
      * hansi cempionatda olacagi
      * hansi turnirde olacagi
      * ili
      * cempionat nece olur bes ?
      * cempionat da ele turnir kimidi eslinde
      * sadecce adlari ferqlenir)))
      * aha onda bizdeki struktur deyishmir . mukafat bir obyekt kimi baxiriq
      * ve onu ayrica bir cedvele atiriq
      * elave championship id yada turnir id ile yuklemirik
      *
      * relation ucun ayrica cedvel aciriq
      * bizdeki struktur bele olacaq
      *
      *
      * */
    }
}

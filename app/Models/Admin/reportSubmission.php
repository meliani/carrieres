<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class reportSubmission
 * @package App\Models\Admin
 * @version September 24, 2018, 2:17 pm UTC
 *
 * @property string nom
 * @property string prenom
 * @property string email
 * @property string email_autre
 * @property string titre_rapport
 * @property string entreprise
 * @property string ville
 * @property string nom_responsable_stage
 * @property string email_responsable
 * @property string doc_rapport
 * @property string doc_fiche_evaluation
 * @property string doc_convention
 * @property string doc_attestation
 */
class reportSubmission extends Model
{
    use SoftDeletes;

    public $table = 'report_submissions';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'type_stage',
        'nom',
        'prenom',
        'email_inpt',
        'email_autre',
        'telephone',
        'titre_rapport',
        'entreprise',
        'ville',
        'date_debut',
        'date_fin',
        'nom_responsable_stage',
        'email_responsable',
        'doc_rapport',
        'doc_convention',
        'doc_attestation'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'type_stage' => 'string',
        'nom' => 'string',
        'prenom' => 'string',
        'email_inpt' => 'string',
        'email_autre' => 'string',
        'titre_rapport' => 'string',
        'entreprise' => 'string',
        'ville' => 'string',
        'date_debut' => 'date',
        'date_fin' => 'date',
        'nom_responsable_stage' => 'string',
        'email_responsable' => 'string',
        'doc_rapport' => 'string',
        'doc_convention' => 'string',
        'doc_attestation' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'nom' => 'required',
        'prenom' => 'required',
        //'email' => 'email',
        'email_autre' => 'email',
        'titre_rapport' => 'required',
        'entreprise' => 'required',
        'ville' => 'required',
        'nom_responsable_stage' => 'required',
        //'email_responsable' => 'email',
        'doc_rapport' => 'required',
        //'doc_fiche_evaluation' => 'required',
        'doc_convention' => 'required',
        'doc_attestation' => 'required'
    ];

    
}

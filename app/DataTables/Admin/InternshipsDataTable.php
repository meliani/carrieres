<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Internships;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class InternshipsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable->addColumn('action', 'admin.internships.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Internships $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '80px'])
            ->minifiedAjax()
            ->parameters([
                'dom'     => 'lBfrtip',
                'order'   => [[0, 'desc']],
                'iDisplayLength' => 5,
                'columnDefs' => [],
                'responsive' => true,
                'scrollX' => true,
                'nowrap' => true,
                'columnDefs' => [
                     ['visible' => false,
                     'targets' => [1,25,24,23]],
                ],
                'buttons' => [
                    'create',
                    'export',
                    'print',
                    'reset',
                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'raison_sociale',
            'adresse',
            'ville',
            'pays',
            'parrain_titre',
            'parrain_nom',
            'parrain_prenom',
            'parrain_fonction',
            'parrain_tel',
            'parrain_mail',
            'encadrant_ext_titre',
            'encadrant_ext_nom',
            'encadrant_ext_prenom',
            'encadrant_ext_fonction',
            'encadrant_ext_tel',
            'encadrant_ext_mail',
            'encadrant_int_titre',
            'encadrant_int_nom',
            'encadrant_int_prenom',
            'encadrant_int_mail',
            'co_encadrant_int_titre',
            'co_encadrant_int_nom',
            'co_encadrant_int_prenom',
            'co_encadrant_int_mail',
            'intitule',
            'descriptif',
            'keywords',
            'date_debut',
            'date_fin',
            'foreign',
            'remuneration',
            'charge',
            'user_id',
            'created_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'internships_data_' . time();
    }
}
<?php

namespace App\DataTables\Admin;

use App\Models\Admin\offresDeStages;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class offresDeStagesDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.offres_de_stages.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(offresDeStages $model)
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
            ->minifiedAjax()
            ->addAction(['width' => '80px'])
            ->parameters([
                'dom'     => 'Bfrtip',
                'order'   => [[0, 'desc']],
                'iDisplayLength' => 5,
                'responsive' => true,
                'scrollX' => true,
                'columnDefs' => [
                    ['visible' => false,
                    'targets' => [6,7,8,9,11,12,13]],
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
            'nom_responsable',
            'raison_sociale',
            'lieu_de_stage',
            'fonction',
            'telephone',
            'email',
            'intitule_sujet',
            'descriptif',
            'mots_cles',
            'document_offre',
            'is_valid',
            'status',
            'expire_at',
            'applyable',
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
        return 'offres_de_stages_export_' . time();
    }
}
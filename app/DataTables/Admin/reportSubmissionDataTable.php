<?php

namespace App\DataTables\Admin;

use App\Models\Admin\reportSubmission;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class reportSubmissionDataTable extends DataTable
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

        return $dataTable->addColumn('action', 'admin.report_submissions.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Post $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(reportSubmission $model)
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
                'dom'     => 'lBfrtip',
                'order'   => [[0, 'desc']],
                'iDisplayLength' => 5,
                'responsive' => true,
                'scrollX' => true,
                'columnDefs' => [
                    ['visible' => false,
                    'targets' => [3,4,5,6,12]],
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
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'report_submissions_export_' . time();
    }
}
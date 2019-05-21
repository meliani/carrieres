<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\InternshipsDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateInternshipsRequest;
use App\Http\Requests\Admin\UpdateInternshipsRequest;
use App\Repositories\Admin\InternshipsRepository;

use App\Http\Controllers\AppBaseController;
use Response;

class InternshipsController extends AppBaseController
{
    /** @var  InternshipsRepository */
    private $internshipsRepository;

    public function __construct(InternshipsRepository $internshipsRepo)
    {
        $this->internshipsRepository = $internshipsRepo;
        $this->middleware(['auth','isAdmin']);
    }

    /**
     * Display a listing of the Internships.
     *
     * @param InternshipsDataTable $internshipsDataTable
     * @return Response
     */
    public function index(InternshipsDataTable $internshipsDataTable)
    {
        return $internshipsDataTable->render('admin.internships.index');
    }

    /**
     * Show the form for creating a new Internships.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.internships.create');
    }

    /**
     * Store a newly created Internships in storage.
     *
     * @param CreateInternshipsRequest $request
     *
     * @return Response
     */
    public function store(CreateInternshipsRequest $request)
    {
        $input = $request->all();

        $internships = $this->internshipsRepository->create($input);

        flash()->success('Internships saved successfully.');

        return redirect(route('admin.internships.index'));
    }

    /**
     * Display the specified Internships.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $internships = $this->internshipsRepository->findWithoutFail($id);

        if (empty($internships)) {
            flash()->error('Internships not found');

            return redirect(route('admin.internships.index'));
        }

        return view('admin.internships.show')->with('internships', $internships);
    }

    /**
     * Show the form for editing the specified Internships.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $internships = $this->internshipsRepository->findWithoutFail($id);

        if (empty($internships)) {
            flash()->error('Internships not found');

            return redirect(route('admin.internships.index'));
        }

        return view('admin.internships.edit')->with('internships', $internships);
    }

    /**
     * Update the specified Internships in storage.
     *
     * @param  int              $id
     * @param UpdateInternshipsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateInternshipsRequest $request)
    {
        $internships = $this->internshipsRepository->findWithoutFail($id);

        if (empty($internships)) {
            flash()->error('Internships not found');

            return redirect(route('admin.internships.index'));
        }

        $internships = $this->internshipsRepository->update($request->all(), $id);

        flash()->success('Internships updated successfully.');

        return redirect(route('admin.internships.index'));
    }

    /**
     * Remove the specified Internships from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $internships = $this->internshipsRepository->findWithoutFail($id);

        if (empty($internships)) {
            flash()->error('Internships not found');

            return redirect(route('admin.internships.index'));
        }

        $this->internshipsRepository->delete($id);

        flash()->success('Internships deleted successfully.');

        return redirect(route('admin.internships.index'));
    }
}

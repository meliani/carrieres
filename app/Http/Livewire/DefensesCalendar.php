<?php

namespace App\Http\Livewire;

use App\Models\Activity;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use Mel\LiveCalendar\LiveCalendar;
use Revolution\Google\Sheets\Facades\Sheets;

class DefensesCalendar extends LiveCalendar
    {
    public $showModal = false;
    public $selectedEvent = null;

    public $event;
    public $editedEvent;
    /*     public function mount($initialYear = null, $initialMonth = null, $weekStartsAt = null, $calendarView = null, $dayView = null, $eventView = null, $dayOfWeekView = null, $dragAndDropClasses = null, $beforeCalendarView = null, $afterCalendarView = null, $pollMillis = null, $pollAction = null, $dragAndDropEnabled = true, $dayClickEnabled = true, $eventClickEnabled = true, $extras = [])
        {
            parent::mount($initialYear, $initialMonth, $weekStartsAt, $calendarView, $dayView, $eventView, $dayOfWeekView, $dragAndDropClasses, $beforeCalendarView, $afterCalendarView, $pollMillis, $pollAction, $dragAndDropEnabled, $dayClickEnabled, $eventClickEnabled, $extras);

            $this->showModal = false;
        } */
    public function events(): Collection
        {
        /*         return Activity::query()
                    ->whereDate('day', '>=', $this->gridStartsAt)
                    ->whereDate('day', '<=', $this->gridEndsAt)
                    ->get()
                    ->map(function (Activity $model) {
                        return [
                            'id' => $model->id,
                            'title' => $model->project_id,
                            'description' => $model->notes,
                            'date' => $model->day,
                        ];
                        }); */
        // Retrieve the data
        $data = Sheets::spreadsheet('1ggEk4V27TMsh2G2QNqIr4CiOlkYrbOH8SP1gn70kMRc')
            ->sheet('planning_2023')
            ->get();
        // dd($data);
        $data = $data->map(function ($row) {
            if (isset($row[17]) && isset($row[21])) {
                $description = $row[17] . '-' . $row[21];
                } else
                $description = 'NA';
            if (isset($row[8]) && isset($row[9]) && isset($row[10])) {
                $jury = $row[8] . '-' . $row[9] . '-' . $row[10];
                } else
                $jury = '';
            if (isset($row[6]) && isset($row[5])) {
                $student = $row[6] . '-' . $row[5];
                } else
                $student = '';
            if (isset($row[4]) && isset($row[1])) {
                $title = $row[4] . '-' . $row[1];
                } else
                $title = '';
            return [
                'id' => $row[0],
                'title' => $title,
                'description' => $description . ' - Jury : ' . $jury . ' - Etudiant : ' . $student,
                'date' => $row[0],
            ];
            });
        // Convert the data to a collection
/*         $collection = collect($data);

            $collection = $collection->map(function ($row) {
                return [
                    'id' => $row['column1'],
                    'title' => $row['column2'],
                    'description' => $row['column3'],
                    'date' => $row['column10'],
                ];
                }); */
        return $data;
        }
    /*         public function render()
            {
                return view('livewire.defenses-calendar');
            } */
    public function onDayClick($year, $month, $day)
        {
        // This event is triggered when a day is clicked
        // You will be given the $year, $month and $day for that day
        }

    public function onEventClick($eventId)
        {
        // This event is triggered when an event card is clicked
        // You will be given the event id that was clicked 
        $this->selectedEvent = $eventId; // Retrieve the event details based on $eventId
        $this->showModal = true;
        }

    public function onEventDropped($eventId, $year, $month, $day)
        {
        // This event will fire when an event is dragged and dropped into another calendar day
        // You will get the event id, year, month and day where it was dragged to
        $event = Activity::find($eventId);

        if ($event) {
            $newDate = Carbon::create($year, $month, $day);

            $event->day = $newDate->format('Y-m-d');
            $event->save();

            session()->flash('message', 'Event dropped successfully.');
            }
        }
    public function openModal($eventId)
        {
        $this->event = Activity::find($eventId);
        $this->editedEvent = $this->event->toArray();

        }

    public function updateEvent()
        {
        $validatedData = $this->validate([
            'editedEvent.id' => '',
            'editedEvent.title' => 'required',
            'editedEvent.description' => 'required',
            'editedEvent.date' => 'required|date',
            /*             'editedEvent.title' => 'required',
                        'editedEvent.starting_at' => 'required|date',
                        'editedEvent.ending_at' => 'required|date|after_or_equal:editedEvent.starting_at', */
        ]);

        $this->event->update($validatedData['editedEvent']);

        $this->showModal = false;
        $this->reset('editedEvent');
        }

    public function cancelEditing()
        {
        $this->showModal = false;
        $this->reset('editedEvent');
        }
    public function closeEventModal()
        {
        $this->showModal = false;
        }
    }
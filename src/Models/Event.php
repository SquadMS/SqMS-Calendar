<?php

namespace SquadMS\Calender\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Carbon\CarbonPeriod;
use MaddHatter\LaravelFullcalendar\Contracts\Event as EventContract;
use MaddHatter\LaravelFullcalendar\Contracts\IdentifiableEvent;
use MaddHatter\LaravelFullcalendar\Contracts\OptionableEvent;

class Event extends Model implements EventContract, IdentifiableEvent, OptionableEvent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'type',
        'all_day',
        'start',
        'end',
        'google_calendar_id',
    ];   

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'start',
        'end',
    ];

    /**
     * Get the event's title
     *
     * @return string
     */
    public function id() : string {
        return $this->id;
    }

    /**
     * Get the event's title
     *
     * @return string
     */
    public function title() : string {
        return $this->title;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function allDay() : bool {
        return (bool)$this->all_day;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function start() : \DateTimeInterface {
        return $this->start;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function end() : \DateTimeInterface {
        return $this->end;
    }

    /**
     * Get the event options
     *
     * @return DateTime
     */
    public function options() : array
    {
        return [
            'type' => $this->type,
            'description' => (string)Str::of($this->description)->replace("\r\n", '<br>')->replace("\n", '<br>'),
        ];
    }

    /**
     * Get the event CarbonPeriod
     *
     * @return DateTime
     */
    public function period() : CarbonPeriod
    {
        return new CarbonPeriod($this->start, $this->all_day ? $this->start->copy()->endOfDay() : $this->end);
    }
}

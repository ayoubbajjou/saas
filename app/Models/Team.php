<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Jetstream\Events\TeamCreated;
use Laravel\Jetstream\Events\TeamDeleted;
use Laravel\Jetstream\Events\TeamUpdated;
use Laravel\Jetstream\Team as JetstreamTeam;
use Spark\Billable;
use Spark\Spark;

class Team extends JetstreamTeam
{
    use HasFactory, Billable;

    //  billing spark config ...

//         Spark::billable(Team::class)->resolve(function (Request $request) {
//     return $request->user()->currentTeam;
    // });

    protected $casts = [
        'personal_team' => 'boolean',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'personal_team',
    ];

    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    /**
     * Get the email address that should be associated with the Paddle customer.
     *
     * @return string
     */
    public function paddleEmail()
    {
        return 'TBD';
        //return $this->owner->email;
    }

    // Spark::billable(Team::class)->authorize(function (Team $billable, Request $request) {
//     return $request->user() &&
//            $request->user()->ownsTeam($billable);
// });
}

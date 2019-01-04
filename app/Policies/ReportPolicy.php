<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Report;
use App\Models\Subject;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReportPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the report.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return mixed
     */
    public function view(User $user, Report $report)
    {
        //
    }

    /**
     * Determine whether the user can create reports.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->canCreateReport() && !$user->subjects->contains($subject->id);
    }

    /**
     * Determine whether the user can update the report.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return mixed
     */
    public function update(User $user, Report $report)
    {
        return $user->id === $report->user_id;
    }

    /**
     * Determine whether the user can delete the report.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return mixed
     */
    public function delete(User $user, Report $report)
    {
        //
    }

    /**
     * Determine whether the user can restore the report.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return mixed
     */
    public function restore(User $user, Report $report)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the report.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Report  $report
     * @return mixed
     */
    public function forceDelete(User $user, Report $report)
    {
        //
    }
}

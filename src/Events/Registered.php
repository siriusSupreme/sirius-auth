<?php

namespace Illuminate\Auth\Events;

use Illuminate\Queue\SerializesModels;

class Registered
{
    use SerializesModels;

    /**
     * The authenticated user.
     *
     * @var \Sirius\Auth\Contracts\Authenticatable
     */
    public $user;

    /**
     * Create a new event instance.
     *
     * @param  \Sirius\Auth\Contracts\Authenticatable  $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }
}
